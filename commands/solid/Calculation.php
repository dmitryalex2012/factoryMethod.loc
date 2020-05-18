<?php

namespace app\commands\solid;

use app\commands\solid\openClosed\DBLogger;
use app\commands\solid\openClosed\FileLogger;
use app\commands\solid\openClosed\ILogger;
use app\commands\solid\singleResponsibility\SRLogger;


class Calculation
{
    public $result;
    public $logger;

//    public function __construct(ILogger $argument)
    public function __construct()
    {
//        $temp =  new SRLogger();
//        $temp =  new FileLogger();
//        $temp = $argument;


//        switch ($argument){
//            case "new SRLogger()":      $temp = new SRLogger();     break;
//            case "new FileLogger()":    $temp = new FileLogger();   break;
//            case "new DBLogger()":      $temp = new DBLogger();     break;

//            case "new FileLogger()":    $this->logger = new FileLogger();   break;
//            case "new SRLogger()":      $this->logger = new SRLogger();     break;
//            case "new DBLogger()":      $this->logger = new DBLogger();     break;
//        }

//        $this->logger = $temp;
//        $this->logger = $argument;

                        $this->logger = new FileLogger();

    }

    private function calculation($first, $second, $sign)
    {
        switch ($sign) {
            case "+":
                $this->result = $first + $second;
                break;
            case "-":
                $this->result = $first - $second;
                break;
            case "*":
                $this->result = $first * $second;
                break;
            case "/":
                $this->result = $first / $second;
                break;
        }
    }


    public function calculateSingle($first, $second, $sign)
    {
        if (($second == 0) && ($sign == "/")) {
            $this->result = "error";
        } else {
            $this->calculation($first, $second, $sign);
        }

        $this->logger->save($first, $second, $sign, $this->result);

        return $this->result;
    }


    public function calculateOpen($first, $second, $sign, $storagePointer)
    {
//        if (($second == 0) && ($sign == "/")) {
//            $this->result = "error";
//        } else {
//            $this->calculation($first, $second, $sign);
//        }
//
//        $this->logger->log($first, $second, $sign, $this->result);
//
//        return $this->result;
        return 5;
    }
}
