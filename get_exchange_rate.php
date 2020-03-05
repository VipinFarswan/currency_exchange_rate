<?php

use \BenMajor\ExchangeRatesAPI\ExchangeRatesAPI;
use \BenMajor\ExchangeRatesAPI\Response;
use \BenMajor\ExchangeRatesAPI\Exception;

require_once 'vendor/autoload.php';

if(isset($_POST['currency_b']) && isset($_POST['currency_a'])) {
	$lookup = new ExchangeRatesAPI();
	$rates  = $lookup->addRate($_POST['currency_b'])->setBaseCurrency($_POST['currency_a'])->fetch();
	$data = $rates->getRates();
	echo round($data[$_POST['currency_b']], 2);
}
?>