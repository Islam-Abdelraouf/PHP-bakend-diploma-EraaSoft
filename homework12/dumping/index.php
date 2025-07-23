<?php

require_once('dumper.php');
require_once('web-dumper.php');
require_once('console-dumper.php');

$web = new WebDumper;
$console = new ConsoleDumper;

if (PHP_SAPI == "cli") {
    echo "Class Name: " . $console->getClassName() . "\n";
    $console->dumpData('data');
} else {
    echo "Class Name: " . $web->getClassName() . "<br>";
    $web->dumpData('data');
}
