<?php

class WebDumper extends Dumper
{
    public function dumpData($data)
    {
        $data .= "<br> from web";
        die($data);
    }
}
