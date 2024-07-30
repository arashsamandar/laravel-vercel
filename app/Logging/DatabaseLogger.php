<?php

namespace App\Logging;

use Monolog\Logger;
use App\Logging\DatabaseHandler;

class DatabaseLogger
{
    public function __invoke(array $config): Logger
    {
        $logger = new Logger('database');
        $logger->pushHandler(new DatabaseHandler());
        return $logger;
    }
}
