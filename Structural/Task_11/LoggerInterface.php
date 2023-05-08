<?php

namespace Structural\DependencyInjection\Task11;

interface LoggerInterface
{
    public function log(string $message, array $context = []): void;
    public function setLogLevel(string $level): void;
}
