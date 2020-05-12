<?php

namespace app\commands\single_responsibility;

class Logger
{
    public function saveToFile ($file, $temp){
        file_put_contents($file, $temp . PHP_EOL, FILE_APPEND);
    }
}
