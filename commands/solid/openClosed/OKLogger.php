<?php

namespace app\commands\solid\openClosed;

interface ILogger
{
    public function log ($first, $second, $sign, $result);
}


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


class DBLogger implements ILogger
{
    public function SaveToDB ($first, $second, $sign, $result)
    {
//        if ($result === "error"){
//            $fileName = "errors.txt";
//        } else{
//            $fileName = "results.txt";
//        }
        $fileName = "errors.txt";

        $saving = $first . $sign . $second . "=" . $result ."  " . date('r') . " (Open/closed principle + DB)";
        file_put_contents($fileName, $saving . PHP_EOL, FILE_APPEND);
    }

    public function log($first, $second, $sign, $result)
    {
        $this->SaveToDB($first, $second, $sign, $result);
    }

}


