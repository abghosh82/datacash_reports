<?php
/**
 * @file
 *
 * Provides dependencies for datacash report download.
 */

namespace DatacashReports;

use DatacashReports\Exceptions\InvalidConfiguratorException;
use DatacashReports\Exceptions\InvalidControllerException;

class DatacashReportManager implements DatacashReportManagerInterface {
  /**
   * Instance of DatacashReportInterface.
   *
   * @var DatacashReportInterface
   */
  protected $configurator;

  /**
   * Instance of DatacashReportControllerInterface.
   *
   * @var DatacashReportControllerInterface
   */
  protected $controller;

  /**
   * Provides an instance of DatacashReportInterface.
   *
   * @return DatacashReport
   *   Instance of DatacashReportInterface.
   */
  public function getConfigurator() {
    // If configurator not available, create a new instance.
    if (empty($this->configurator)) {
      $this->configurator = new DatacashReport();
    }
    return $this->configurator;
  }

  /**
   * Provides an instance of DatacashReportControllerInterface.
   *
   * @return DatacashReportControllerInterface
   *   Instance of DatacashReportControllerInterface.
   *
   * @throws \Exception
   */
  public function getController() {
    // Check if configurator is available, otherwise we cannot proceed ahead
    // and need to throw an Exception
    if (empty($this->configurator)) {
      throw new InvalidConfiguratorException("Datacash Report configurator instance not found.");
    }
    $this->controller = new DatacashReportController($this->configurator);
    return $this->controller;
  }
}