<?php

//$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
define("URL", $_GET['url'] ?? '');