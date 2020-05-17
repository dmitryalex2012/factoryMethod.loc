<?php

namespace app\commands\solid\singleResponsibility;

class SRLogger
{
    public function saveToFile ($file, $temp){
        file_put_contents($file, $temp . PHP_EOL, FILE_APPEND);
    }
}
