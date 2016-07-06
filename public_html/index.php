<?php
chdir(dirname(__DIR__));
ini_set("display_errors",1);
	require_once "vendor/autoload.php";
use Jsmake\SearchByZipCode;

	$zipCode = new SearchByZipCode();

	$cep = "65.080-341"; //Informe o CEP: "65.080-341"

	$response = $zipCode->setZipCode($cep)->runZipCode();



	var_dump($response->getAll());

