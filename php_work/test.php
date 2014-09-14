<?php
	require_once dirname(__FILE__).'./log/main/php/Logger.php';
	Logger::configure(dirname(__FILE__).'./log/resources/appender_dailyfile.properties');
	
	$logger = Logger::getRootLogger();
	$logger->debug("Hello World!");
	
	Logger::configure(dirname(__FILE__).'./log/resources/appender_echo.properties');
	
	$logger = Logger::getRootLogger();
	$logger->debug("Hello World!");
	$logger->info("Hello World!");
	
	require_once("phpunitTest.php");   
	$s = new PHPUnit_TestSuite("calculatorTest");
	$r = PHPUnit::run($s);   
	echo $r->toString();   
	
	

?>