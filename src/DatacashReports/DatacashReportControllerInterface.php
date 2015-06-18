<?php
/**
 * @file
 *
 * Provides functions to get the datacash reports
 */

namespace DatacashReports;

/**
 * Interface DatacashReportControllerInterface.
 *
 * @package DatacashReports
 */
interface DatacashReportControllerInterface {
  /**
   * Downloads the datacash report.
   *
   * @return string
   *   Report in csv format.
   *
   * @throws \Exception
   */
  public function download();
}