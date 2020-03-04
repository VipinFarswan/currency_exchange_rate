<?php

use \BenMajor\ExchangeRatesAPI\ExchangeRatesAPI;
use \BenMajor\ExchangeRatesAPI\Response;
use \BenMajor\ExchangeRatesAPI\Exception;

require_once 'vendor/autoload.php';

$lookup = new ExchangeRatesAPI();
$rates  = $lookup->addRate('INR')->setBaseCurrency('USD')->fetch();

//print_r($rates);
print_r($rates->getRates());
?>