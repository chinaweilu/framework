<?php

use Yaf\Application;

define("APP_PATH", dirname(__DIR__));

$app = new Application(APP_PATH . "/config/application.ini");

$app->bootstrap()->run();