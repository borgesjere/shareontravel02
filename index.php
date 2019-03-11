<?php 

session_start();
require "vendor/autoload.php";
use \shareontravel\App;

$app = new App();
$app->run();