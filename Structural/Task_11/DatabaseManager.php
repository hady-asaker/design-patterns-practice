<?php

namespace Structural\Task_11;
require_once "LoggerInterface.php";
require_once "FileLogger.php";
// require_once "DatabaseLogger.php";
// require_once "ExternalServiceLogger.php";

use Structural\DependencyInjection\Task11\FileLogger;
use Structural\DependencyInjection\Task11\LoggerInterface;

class DatabaseManager 
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function doSomeDatabaseStuff() {
        // do some database stuff
        return $this->logger->log('Database stuff done', ['level' => 'info']);
    }
}

$logger = new FileLogger('path/to/log/file.log', 'warning');
$databaseManager = new DatabaseManager($logger);

echo $databaseManager->doSomeDatabaseStuff();