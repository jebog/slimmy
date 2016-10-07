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
 * Contains Middleware
 */
require __DIR__ . '/../bootstrap/middleware.php';

/**
 * Contains Middleware items
 */
require __DIR__ . '/../bootstrap/controllers.php';

/**
 * Contains routes
 */
require __DIR__ . '/../bootstrap/routes.php';