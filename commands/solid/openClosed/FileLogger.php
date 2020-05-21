<?php

namespace app\commands\solid\openClosed;


class FileLogger implements ILogger
{
    public function SaveToFile ($saving, $result)
    {
        if ($result === "error"){
            $fileName = "errors.txt";
        } else{
            $fileName = "results.txt";
        }
        $saving = $saving . "  " . date('r') . " (Open/closed principle)";
        file_put_contents($fileName, $saving . PHP_EOL, FILE_APPEND);   // "PHP_EOL" - from new string
    }                                                                               //      "FILE_APPEND" make new file if it's absent

    public function log($saving, $result)
    {
        $this->SaveToFile($saving, $result);
    }
}
