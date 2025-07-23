<?php

abstract class ConsoleDumper extends Dumper
{
    public function dumpData($data)
    {
        $data .= "<br> from console";
        die($data);
    }
}
