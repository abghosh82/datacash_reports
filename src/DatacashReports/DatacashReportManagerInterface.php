<?php
/**
 * @file
 *
 * Provides dependencies for datacash report download.
 */

namespace DatacashReports;

/**
 * Interface DatacashReportManager.
 *
 * @package DatacashReports
 */
interface DatacashReportManagerInterface {

  /**
   * Provides an instance of DatacashReportInterface.
   *
   * @return DatacashReport
   *   Instance of DatacashReportInterface.
   */
  public function getConfigurator();

  /**
   * Provides an instance of DatacashReportControllerInterface.
   *
   * @param string $environment
   *   Environment name.
   *
   * @return DatacashReportControllerInterface
   *   Instance of DatacashReportControllerInterface.
   *
   * @throws \Exception
   */
  public function getController($environment = NULL);
}