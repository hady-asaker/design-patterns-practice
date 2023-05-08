<?php

namespace Structural\DependencyInjection\Task11;
require_once "LoggerInterface.php";

class FileLogger implements LoggerInterface {
    private string $logFilePath;
    private string $logLevel;

    public function __construct(string $logFilePath, string $logLevel = 'info') {
        $this->logFilePath = $logFilePath;
        $this->logLevel = $logLevel;
    }

    public function log(string $message, array $context = []): void {
        if ($this->shouldLog($context)) {
            $logMessage = date('[Y-m-d H:i:s]') . ' ' . $message . "\n";
            file_put_contents($this->logFilePath, $logMessage, FILE_APPEND);
            
        }
    }

    public function setLogLevel(string $level): void {
        $this->logLevel = $level;
    }

    private function shouldLog(array $context): bool {
        $level = $context['level'] ?? 'info';
        $levels = ['emergency', 'alert', 'critical', 'error', 'warning', 'notice', 'info', 'debug'];
        $currentLevelIndex = array_search($this->logLevel, $levels);
        $levelIndex = array_search($level, $levels);
        return $levelIndex <= $currentLevelIndex;
    }
}
