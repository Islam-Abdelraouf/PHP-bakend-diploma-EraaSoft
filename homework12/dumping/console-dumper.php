<?php

class ConsoleDumper extends Dumper
{
    public function dumpData($data)
    {
        $data .= "\nfrom console";
        die($data);
    }
}
