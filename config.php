<?php
require 'environment.php';

define("BASE", "http://localhost/cms/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'mtc_cms';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'mtc_cms';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>