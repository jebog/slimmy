<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

/**
 * App Instance settings
 */
$settings = require __DIR__ . '/../bootstrap/settings.php';

/**
 * App Instance
 */
$app = new Slim\App($settings);

/**
 * Contains Container items
 */
require __DIR__ . '/../bootstrap/container.php';

/**
 * Contains routes
 */
require __DIR__ . '/../bootstrap/routes.php';