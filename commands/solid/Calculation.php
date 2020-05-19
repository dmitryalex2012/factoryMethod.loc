<?php

namespace app\commands\solid;

use app\commands\solid\openClosed\DBLogger;
use app\commands\solid\openClosed\FileLogger;
use app\commands\solid\singleResponsibility\SRLogger;


class Calculation
{
    public $result;
    public $logger;

//    public function __construct(ILogger $argument)
    public function __construct($argument)
    {
        switch ($argument){
            case "FileLogger":    $this->logger = new FileLogger();   break;
            case "DBLogger":      $this->logger = new DBLogger();     break;
            case "SRLogger":      $this->logger = new SRLogger();     break;
        }
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


    public function calculateOpen($first, $second, $sign)
    {
        if (($second == 0) && ($sign == "/")) {
            $this->result = "error";
        } else {
            $this->calculation($first, $second, $sign);
        }

        $this->logger->log($first, $second, $sign, $this->result);

        return $this->result;
//        return 5;
    }
}
