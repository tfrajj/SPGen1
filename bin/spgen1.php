<?php

require __DIR__ . '/../vendor/autoload.php';

use SPGen1\Logger\ConsoleLogger as Logger;

/**
 * Print help message.
 */
function printHelp()
{
    echo "SPGen1 - Static site generator\n";
    echo "Usage:\n";
    echo "  php bin/spgen1 generate  - Generate the site.\n";
    echo "  php bin/spgen1 serve     - Serve the site locally.\n";
    echo "  php bin/spgen1 help      - Print this help message.\n";
    exit(0);
}

// Get the command from the command line arguments.
$command = $argv[1] ?? 'help';

switch ($command) {
    case 'generate':
        $logger = new Logger();

        $logger->log('Генерація сайту...');
        $logger->success('Сайт згенеровано!');
        $logger->warning('Увага! Це тільки приклад!');
        $logger->error('Помилка! Це тільки приклад!');
        $logger->debug('Це повідомлення для розробника');
    $logger->debug(['key' => 'value', 'key2' => 'value2']);
        break;

    case 'serve':
        $logger = new Logger();
        $logger->warning('Not implemented yet');
        break;

    case 'help':
    default:
        printHelp();
}
