<?php
/**
 * @file
 *
 * Provides functions to get the datacash reports.
 */

namespace DatacashReports;
use DatacashReports\Exceptions\ReportDownloadException;

/**
 * Class DatacashReportController.
 *
 * @package DatacashReports
 */
class DatacashReportController implements DatacashReportControllerInterface {

  /**
   * Instance of DatacashReportInterface.
   *
   * @var DatacashReportInterface
   */
  protected $datacashReport;

  /**
   * @param DatacashReportInterface $datacash_report
   *   Instance of DatacashReportInterface.
   */
  public function __construct($datacash_report) {
    $this->datacashReport = $datacash_report;
  }

  /**
   * Downloads the datacash report.
   *
   * @return string
   *   Report in csv format.
   *
   * @throws \Exception
   */
  public function download() {
    // Create a curl POST request.
    $handler = curl_init();
    curl_setopt($handler, CURLOPT_URL, $this->datacashReport->getEndPoint());
    curl_setopt($handler, CURLOPT_POST, 1);
    curl_setopt($handler, CURLOPT_POSTFIELDS, $this->getPostFields());
    curl_setopt($handler, CURLOPT_HTTPHEADER, array('Expect: '));
    curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($handler, CURLOPT_TIMEOUT, $this->datacashReport->getTimeout());
    // Set the proxy if specified.
    $proxy_url = $this->datacashReport->getProxyUrl();
    if (!empty($proxy_url)) {
      curl_setopt($handler, CURLOPT_HTTPPROXYTUNNEL, TRUE);
      curl_setopt($handler, CURLOPT_PROXY, $proxy_url);
    }

    // Save the response.
    $response = curl_exec($handler);
    $err_no = curl_errno($handler);
    $err_str = curl_error($handler);

    // Close the connection.
    curl_close($handler);

    // If there is some curl error throw an exception.
    if (!empty($err_no)) {
      throw new ReportDownloadException($err_str);
    }
    // If there is no curl error but response has error message.
    if (substr($response, 0, 5) == 'Error:') {
      throw new ReportDownloadException($response);
    }

    return $response;
  }

  /**
   * Prepares the post field string.
   *
   * @return string
   *   String of post fields.
   */
  protected function getPostFields() {
    $post_fields = "group=" . $this->datacashReport->getGroup();
    $post_fields .= "&user=" . $this->datacashReport->getUser();
    $post_fields .= "&password=" . $this->datacashReport->getPassword();
    $post_fields .= "&start_date=" . $this->datacashReport->getStartDate();
    $post_fields .= "&end_date=" . $this->datacashReport->getEndDate();
    $post_fields .= "&type=" . $this->datacashReport->getType();
    // Check if vtid is available.
    $vtid = $this->datacashReport->getVtid();
    if (!empty($vtid)) {
      $post_fields .= "&vtid=$vtid";
    }
    // Check if list is available.
    $list = $this->datacashReport->getList();
    if (!empty($list)) {
      $post_fields .= "&list=$list";
    }
    // Check if accreditation instance. is available.
    $accreditation = $this->datacashReport->getAccreditationInstance();
    if (!empty($accreditation)) {
      $post_fields .= "&instance=$accreditation";
    }
    return $post_fields;
  }
}
