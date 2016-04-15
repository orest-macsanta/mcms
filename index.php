<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
//error_reporting(0);

require_once 'config.inc.php';
require 'smarty.inc.php';
require ROOT_PATH . '/includes/db.inc.php';
require_once ROOT_PATH . '/includes/engine.inc.php';

$oEngine = new Engine();
$oEngine->LoadModule();
