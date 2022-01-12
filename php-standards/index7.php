<?php

    include "./vendor/autoload.php";

    use Monolog\Logger;
    use Monolog\Handler\BrowserConsoleHandler;

    // create a log channel
    $log = new Logger('my_app');

    $log->pushHandler(new BrowserConsoleHandler(/*Logger::WARNING*/));

    foreach (range(1, 10) as $foo) {
        $log->debug('Something is happening.', ['foo' => $foo]);
    }

    $log->warning('Maybe bad.');

    $log->error('Bad.');

    $log->critical('Super Bad.');

    echo "Check the logs to see whats happening in here...";

?>