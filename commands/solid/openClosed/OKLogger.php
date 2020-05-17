<?php

namespace app\commands\solid\openClosed;


class FileLogger implements ILogger
{
    public function SaveToFile ($file, $temp)
    {
        file_put_contents($file, $temp . PHP_EOL, FILE_APPEND);
    }

    public function log($message)
    {
        $this->SaveToFile("results.txt", $message);
    }

}


class DBLogger implements ILogger
{
    public function SaveToDB ($temp)
    {
        $temp1 = $temp;     //  need save to DB
//        file_put_contents($file, $temp . PHP_EOL, FILE_APPEND);
    }

    public function log($message)
    {
        $this->SaveToDB($message);
    }

}


