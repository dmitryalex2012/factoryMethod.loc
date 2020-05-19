<?php

namespace app\commands\solid\openClosed;


class DBLogger implements ILogger
{
    public function SaveToDB ($first, $second, $sign, $result)
    {
//        \Yii::setAlias('@modelDBLogger', '\app\models\DBLogger()');
        $DB = new \app\models\DBLogger();
//        $DB = \Yii::getAlias('@modelDBLogger');

        $saving = $first . $sign . $second . "=" . $result ."  " . date('r');
//        $DB->select->


//        if ($result === "error"){
//            $fileName = "errors.txt";
//        } else{
//            $fileName = "results.txt";
//        }
//
//        $saving = $first . $sign . $second . "=" . $result ."  " . date('r') . " (Open/closed principle + DB)";
//        file_put_contents($fileName, $saving . PHP_EOL, FILE_APPEND);
    }

    public function log($first, $second, $sign, $result)
    {
        $this->SaveToDB($first, $second, $sign, $result);
    }

}
