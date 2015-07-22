<?php
require_once __DIR__ . "/../vendor/autoload.php";

use DatacashReports\DatacashReportManager;

try {
  $manager = new DatacashReportManager();
  $manager->getConfigurator()->setEndPoint('https://testserver.datacash.com/reporting2/csvlist')
    ->setGroup('99008734')
    ->setUser('99008734')
    ->setPassword('RmgSprep1')
    ->setStartDate('2015-06-11 00:00:01')
    ->setEndDate('2015-06-11 23:59:00')
    ->setType('all');
  $response = $manager->getController()->download();
  $response = explode(PHP_EOL, trim($response));
  foreach ($response as $row) {
    $response_data[] = str_getcsv($row);
  }
  print_r($response_data);
}
catch (Exception $e) {
  echo "There was an error in the report download request." . PHP_EOL . $e->getMessage();
}
