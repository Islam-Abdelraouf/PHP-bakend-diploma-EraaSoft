<?php

require_once('dumper.php');
require_once('web-dumper.php');
require_once('console-dumper.php');



if(PHP_SAPI == "cli"){

    ConsoleDumper::dumpData("data");
}