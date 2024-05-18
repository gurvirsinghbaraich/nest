<?php

/**
 * Registering the autoloader provided by Composer
 */

use Nest\Framework\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Each incoming request is passed the application's HTTP kernel. 
 * A response is generated taht is then sent back to the
 * user's browser. 
 */
(require_once __DIR__ . '/../bootstrap/app.php')->handleRequest(Request::capture());
