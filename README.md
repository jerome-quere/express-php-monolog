express-php-monolog
===================

Monolog module for express-php


```php

require_once('express.phar');
require_once('express-monolog.phar');


use express\express;

date_default_timezone_set('UTC');

$app = express::module('app', ['core', 'monolog']);

$app->config(function ($logger, $loggerHandlerFactory) {
    $logger->pushHandler($loggerHandlerFactory->streamHandler('php://stderr', $logger->WARNING));
  });

$app->run(function ($logger) {
    $logger->debug('this is a debug');
    $logger->warning('this is a warning');
  });

express::run()

```