<?php

namespace app\commands\solid\singleResponsibility;

class SRLogger
{
    public function save ($saving, $result){
        if ($result === "error"){
            $fileName = "errors.txt";
        } else{
            $fileName = "results.txt";
        }
        $saving = $saving ."  " . date('r') . " (Single responsibility principle)";
        file_put_contents($fileName, $saving . PHP_EOL, FILE_APPEND);
    }
}
