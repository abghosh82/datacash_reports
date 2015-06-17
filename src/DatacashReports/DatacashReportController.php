<?php
/**
 * @file
 *
 * Provides functions to get the datacash reports.
 */

namespace DatacashReports;

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
   */
  public function download() {
    // Create a curl POST request.
    $handler = curl_init();

  }
}