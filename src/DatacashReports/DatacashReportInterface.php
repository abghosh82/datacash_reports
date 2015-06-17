<?php
/**
 * @file
 *
 * Provides requisite configuration to download datacash report.
 */

namespace DatacashReports;

/**
 * Interface DatacashReportInterface
 *
 * @package DatacashReports
 */
interface DatacashReportInterface {
  /**
   * Sets the end point URL.
   *
   * @param string $end_point
   *   Endpoint URL to download datacash report.
   *
   * @return DatacashReportInterface
   *   Instrance of DatacashReportInterface.
   */
  public function setEndPoint($end_point);

  /**
   * Get the end point URL.
   *
   * @return string
   *   Endpoint URL to download datacash report.
   */
  public function getEndPoint();

  /**
   * Sets the datacash group name.
   *
   * @param string $group
   *   Datacash group name for transactions.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setGroup($group);

  /**
   * Get the datacash group name.
   *
   * @return string
   *   Datacash group name for transactions.
   */
  public function getGroup();

  /**
   * Sets the datacash account user.
   *
   * @param string $datacash_user
   *   Datacash user name for the account.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setUser($datacash_user);

  /**
   * Get the datacash account user.
   *
   * @return string
   *   Datacash user name for the account.
   */
  public function getUser();

  /**
   * Sets the datacash reports access password.
   *
   * @param string $password
   *   Password to access datacash reports.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setPassword($password);

  /**
   * Get the datacash report access password.
   *
   * @return string
   *   Password to access datacash reports.
   */
  public function getPassword();

  /**
   * Sets the report start date.
   *
   * @param string $start_date
   *   Start date of the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setStartDate($start_date);

  /**
   * Get the report start date.
   *
   * @return string
   *   Start date of the report.
   */
  public function getStartDate();

  /**
   * Sets the report end date.
   *
   * @param string $end_date
   *   End date of the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setEndDate($end_date);

  /**
   * Get the report end date.
   *
   * @return string
   *   End date of the report.
   */
  public function getEndDate();

  /**
   * Sets the vtid for the report.
   *
   * @param int $vtid
   *   Datacash vtid for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setVtid($vtid);

  /**
   * Get the vtid for the report.
   *
   * @return int
   *   Datacash vtid for the report.
   */
  public function getVtid();

  /**
   * Sets the list type for the report.
   *
   * @param string $list
   *   List type for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setList($list);

  /**
   * Get the list type for the report.
   *
   * @return string
   *   List type for the report.
   */
  public function getList();

  /**
   * Sets the type for the report.
   *
   * @param string $type
   *   Type for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setType($type);

  /**
   * Get the type for the report.
   *
   * @return string
   *   Type for the report.
   */
  public function getType();

  /**
   * Sets the csv format for the report.
   *
   * @param string $csv_format
   *   CSV format for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setCsvFormat($csv_format);

  /**
   * Get the csv format for the report.
   *
   * @return string
   *   CSV format for the report.
   */
  public function getCsvForma();

  /**
   * Sets the accreditation instance for the report.
   *
   * @param string $accreditation_instance
   *   Accreditation instance for the report.
   *
   * @return DatacashReportInterface
   *   Instance of DatacashReportInterface.
   */
  public function setAccreditationInstance($accreditation_instance);

  /**
   * Get the accreditation instance for the report.
   *
   * @return string
   *   Accreditation instance for the report.
   */
  public function getAccreditationInstance();
}