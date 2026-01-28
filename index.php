<?php
require_once __DIR__ . "/core/start/config.php";

if (APP_DEBUG) {
    ini_set("display_errors", "1");
    ini_set("display_startup_errors", "1");
    error_reporting(E_ALL);
} else {
    ini_set("display_errors", "0");
}

require_once __DIR__ . "/core/start/router.php";
require_once __DIR__ . "/core/helper/function.php";
require_once __DIR__ . "/core/routes/web.php";