<?php
/**
 * @file
 *
 * Provides configuration to download datacash report.
 */

namespace DatacashReports;

/**
 * Class DatacashReport
 *
 * @package DatacashReports
 */
class DatacashReport implements DatacashReportInterface {

  /**
   * Endpoint URL to download datacash report.
   *
   * @var string
   */
  protected $endPoint;

  /**
   * Datacash group name for transactions.
   *
   * @var string
   */
  protected $group;

  /**
   * Datacash user name for the account.
   *
   * @var string
   */
  protected $user;

  /**
   * Password to access datacash reports.
   *
   * @var string.
   */
  protected $password;

  /**
   * Start date of the report.
   *
   * @var string
   */
  protected $startDate;

  /**
   * End date of the report.
   *
   * @var string
   */
  protected $endDate;

  /**
   * Datacash vtid for the report.
   *
   * @var int
   */
  protected $vtid;

  /**
   * List type for the report.
   *
   * @var string
   */
  protected $list;

  /**
   * Type for the report.
   *
   * @var string
   */
  protected $type;

  /**
   * CSV format for the report.
   *
   * @var string
   */
  protected $csvFormat;

  /**
   * Accreditation instance for the report.
   *
   * @var string
   */
  protected $accreditationInstance;

  /**
   * Sets the end point URL.
   *
   * @param string $end_point
   *   Endpoint URL to download datacash report.
   *
   * @return DatacashReportInterface
   *   Instrance of DatacashReportInterface.
   */
  public function setEndPoint($end_point) {
    $this->endPoint = $end_point;
    return $this;
  }

  /**
   * Get the end point URL.
   *
   * @return string
   *   Endpoint URL to download datacash report.
   */
  public function getEndPoint() {
    return $this->endPoint;
  }

  /**
   * Sets the datacash group name.
   *
   * @param string $group
   *   Datacash group name for transactions.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setGroup($group) {
    $this->group = $group;
    return $this;
  }

  /**
   * Get the datacash group name.
   *
   * @return string
   *   Datacash group name for transactions.
   */
  public function getGroup() {
    return $this->group;
  }

  /**
   * Sets the datacash account user.
   *
   * @param string $datacash_user
   *   Datacash user name for the account.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setUser($datacash_user) {
    $this->user = $datacash_user;
    return $this;
  }

  /**
   * Get the datacash account user.
   *
   * @return string
   *   Datacash user name for the account.
   */
  public function getUser() {
    return $this->user;
  }

  /**
   * Sets the datacash reports access password.
   *
   * @param string $password
   *   Password to access datacash reports.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setPassword($password) {
    $this->password = $password;
    return $this;
  }

  /**
   * Get the datacash report access password.
   *
   * @return string
   *   Password to access datacash reports.
   */
  public function getPassword() {
    return $this->password;
  }

  /**
   * Sets the report start date.
   *
   * @param string $start_date
   *   Start date of the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setStartDate($start_date) {
    $this->startDate = $start_date;
    return $this;
  }

  /**
   * Get the report start date.
   *
   * @return string
   *   Start date of the report.
   */
  public function getStartDate() {
    return $this->startDate;
  }

  /**
   * Sets the report end date.
   *
   * @param string $end_date
   *   End date of the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setEndDate($end_date) {
    $this->endDate = $end_date;
    return $this;
  }

  /**
   * Get the report end date.
   *
   * @return string
   *   End date of the report.
   */
  public function getEndDate() {
    return $this->endDate;
  }

  /**
   * Sets the vtid for the report.
   *
   * @param int $vtid
   *   Datacash vtid for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setVtid($vtid) {
    $this->vtid = $vtid;
    return $this;
  }

  /**
   * Get the vtid for the report.
   *
   * @return int
   *   Datacash vtid for the report.
   */
  public function getVtid() {
    return $this->vtid;
  }

  /**
   * Sets the list type for the report.
   *
   * @param string $list
   *   List type for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setList($list) {
    $this->list = $list;
    return $this;
  }

  /**
   * Get the list type for the report.
   *
   * @return string
   *   List type for the report.
   */
  public function getList() {
    return $this->list;
  }

  /**
   * Sets the type for the report.
   *
   * @param string $type
   *   Type for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setType($type) {
    $this->type = $type;
    return $this;
  }

  /**
   * Get the type for the report.
   *
   * @return string
   *   Type for the report.
   */
  public function getType() {
    return $this->type;
  }

  /**
   * Sets the csv format for the report.
   *
   * @param string $csv_format
   *   CSV format for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setCsvFormat($csv_format) {
    $this->csvFormat = $csv_format;
    return $this;
  }

  /**
   * Get the csv format for the report.
   *
   * @return string
   *   CSV format for the report.
   */
  public function getCsvForma() {
    return $this->csvFormat;
  }

  /**
   * Sets the accreditation instance for the report.
   *
   * @param string $accreditation_instance
   *   Accreditation instance for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setAccreditationInstance($accreditation_instance) {
    $this->accreditationInstance = $accreditation_instance;
    return $this;
  }

  /**
   * Get the accreditation instance for the report.
   *
   * @return string
   *   Accreditation instance for the report.
   */
  public function getAccreditationInstance() {
    return $this->accreditationInstance;
  }
}