<?php

$core = json_decode(file_get_contents(__DIR__ . "/../../database/core/info.json"), true);
define("CORE", $core);
unset($core);

$config = json_decode(file_get_contents(__DIR__ . "/../../database/config/app.json"), true);
define("APP_DEBUG", $config["app_debug"]);
define("APP_NAME", $config["app_name"]);
define("APP_URL", $config["app_url"]);
define("APP_LANG", $config["app_lang"]);
define("APP_THEME", $config["app_theme"]);
define("APP_SSL", $config["app_ssl"]);
define("APP_DATABASE", $config["database"]);
unset($config);

$template = json_decode(file_get_contents(__DIR__ . "/../../database/template/template.json"), true);
define("TEMPLATE", $template);
unset($template);