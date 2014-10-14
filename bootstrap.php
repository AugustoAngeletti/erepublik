<?php
include_once('classes/Config.php');
include_once('classes/Autoloader.php');

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors',1);

Autoloader::init(Config::get('fulldir'));

setlocale(LC_ALL,"es_ES");
date_default_timezone_set("Europe/Madrid");
session_start();

