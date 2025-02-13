<?php

namespace SPGen1\Logger;

/**
 * Interface LoggerInterface
 *
 * @package SPGen1\Logger
 */
interface LoggerInterface
{
  /**
   * Log a message
   *
   * @param string $message
   *   The message to log.
   *
   * @return void
   */
  public function log(string $message): void;

  /**
   * Log a success message
   *
   * @param string $message
   *   The success message to log.
   *
   * @return void
   */
  public function success(string $message): void;

  /**
   * Log a warning message.
   *
   * @param string $message
   *   The warning message to log.
   *
   * @return void
   */
  public function warning(string $message): void;

  /**
   * Log an error message
   *
   * @param string $message
   *   The error message to log.
   *
   * @return void
   */
  public function error(string $message): void;

  /**
   * Log a debug message
   *
   * @param mixed $message
   *   The debug message to log.
   *
   * @return void
   */
  public function debug(mixed $message): void;
}
