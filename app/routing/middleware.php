<?php

use app\routing\middleware\AccessControl;
use mako\http\routing\middleware\ContentSecurityPolicy;
use mako\http\routing\middleware\SecurityHeaders;
use mako\validator\input\http\routing\middleware\InputValidation;
use mako\toolbar\ToolbarMiddleware;

/** @var \mako\http\routing\Dispatcher $dispatcher */

//$dispatcher->registerMiddleware(AccessControl::class, priority: 1);
//$dispatcher->registerMiddleware(ContentSecurityPolicy::class);
//$dispatcher->registerMiddleware(SecurityHeaders::class);
//$dispatcher->registerMiddleware(InputValidation::class);

//$dispatcher->setMiddlewareAsGlobal([AccessControl::class]);

$dispatcher->registerMiddleware('toolbar', ToolbarMiddleware::class);
$dispatcher->setMiddlewarePriority(['toolbar' => 1]);
$dispatcher->setMiddlewareAsGlobal(['toolbar']);
