<?php

class Dumper
{
    public function dumpData($data){
        die ($data);
    }
    public function getClassName()
    {
        return __CLASS__;
    }
}
