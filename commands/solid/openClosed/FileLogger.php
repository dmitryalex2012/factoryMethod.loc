<?php

namespace app\commands\solid\openClosed;


class FileLogger implements ILogger
{
    public function SaveToFile ($first, $second, $sign, $result)
    {
        if ($result === "error"){
            $fileName = "errors.txt";
        } else{
            $fileName = "results.txt";
        }
        $saving = $first . $sign . $second . "=" . $result ."  " . date('r') . " (Open/closed principle)";
        file_put_contents($fileName, $saving . PHP_EOL, FILE_APPEND);

    }

    public function log($first, $second, $sign, $result)
    {
        $this->SaveToFile($first, $second, $sign, $result);
    }
}
