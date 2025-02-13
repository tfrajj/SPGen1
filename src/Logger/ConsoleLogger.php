<?php

namespace SPGen1\Logger;

/**
 * Class ConsoleLogger
 *
 * @package SPGen1\Logger
 */
class ConsoleLogger implements LoggerInterface
{
  /**
   * Log a message.
   *
   * @param string $message
   *   The message to log.
   *
   * @param string|null $type
   *   The type of the message.
   *
   * @return void
   */
  public function log(string $message, string $type = null): void
  {
    if ($type) {
      $message = $this->getLogColorCode($type) . $message . "\033[0m";
    }

    echo $message . PHP_EOL;
  }

  /**
   * Get the color code for the log message.
   *
   * @param string $color
   *   The color of the log message.
   *
   * @return string
   *   The color code.
   */
  private function getLogColorCode(string $color): string
  {
    $colors = [
      'success' => "\033[1;32m",
      'warning' => "\033[1;33m",
      'error' => "\033[1;31m",
      'debug' => "\033[1;33m",
    ];

    return $colors[$color] ?? '';
  }

  /**
   * {@inheritDoc}
   */
  public function success(string $message): void
  {
    $this->log($message, 'success');
  }

  /**
   * {@inheritDoc}
   */
  public function warning(string $message): void
  {
    $this->log($message, 'warning');
  }

  /**
   * {@inheritDoc}
   */
  public function error(string $message): void
  {
    $this->log($message, 'error');
  }

  /**
   * {@inheritDoc}
   */
  public function debug(mixed $message): void
  {
    $this->log('');
    $this->log('Debug:', 'debug');
    $this->log(print_r($message, true));
    $this->log('');
  }
}
