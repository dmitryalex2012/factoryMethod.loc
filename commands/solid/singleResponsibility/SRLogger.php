<?php

namespace app\commands\solid\singleResponsibility;

class SRLogger
{
    public function save ($first, $second, $sign, $result){
        if ($result === "error"){
            $fileName = "errors.txt";
        } else{
            $fileName = "results.txt";
        }
        $saving = $first . $sign . $second . "=" . $result ."  " . date('r') . " (Single responsibility principle)";
        file_put_contents($fileName, $saving . PHP_EOL, FILE_APPEND);
    }
}
