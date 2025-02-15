<?php

require_once __DIR__ . '/functions.php';

define('BASE_URL', 'http://localhost:8000');

define('DB_HOST', 'localhost');
define('DB_PORT', '3358');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'php_mvc');

define('PUBLIC_PATH', '/public');
define('VIEW_PATH', realpath(__DIR__ . '/../src/views/') . '/');