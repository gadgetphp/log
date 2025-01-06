<?php

declare(strict_types=1);

namespace Gadget\Log;

use Psr\Log\LoggerAwareTrait as PsrLoggerAwareTrait;
use Psr\Log\LogLevel;

trait LoggerAwareTrait
{
    use PsrLoggerAwareTrait;


    /**
     * System is unusable.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logEmergency(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }


    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logAlert(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::ALERT, $message, $context);
    }


    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logCritical(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }


    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logError(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::ERROR, $message, $context);
    }


    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logWarning(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::WARNING, $message, $context);
    }


    /**
     * Normal but significant events.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logNotice(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::NOTICE, $message, $context);
    }


    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logInfo(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::INFO, $message, $context);
    }


    /**
     * Detailed debug information.
     *
     * @param string|\Stringable $message
     * @param mixed[] $context
     * @return void
     */
    protected function logDebug(
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->log(LogLevel::DEBUG, $message, $context);
    }


    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string|\Stringable $message
     * @param mixed[] $context
     *
     * @return void
     */
    protected function log(
        mixed $level,
        string|\Stringable $message,
        array $context = []
    ): void {
        $this->logger?->log($level, $message, $context);
    }
}
