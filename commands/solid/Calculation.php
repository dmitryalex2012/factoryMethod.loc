<?php

namespace app\commands\solid;

use app\commands\solid\openClosed\DBLogger;
use app\commands\solid\openClosed\FileLogger;
use app\commands\solid\singleResponsibility\SRLogger;


class Calculation
{
    public $result;
    public $saving;
    public $logger;

    public function __construct($argument)
    {                                   // Need ILoggger for argument in __construct.
        switch ($argument){             //          Example: public function __construct(ILogger $argument)
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

        $this->saving = $first . $sign . $second . "=" . $this->result;
    }


    private function checkOnZero ($first, $second, $sign)
    {
        if (($second == 0) && ($sign == "/")) {
            $this->result = "error";
            $this->saving = $first . $sign . $second . "=" . $this->result;
        } else {
            $this->calculation($first, $second, $sign);
        }
    }


    public function calculateSingle($first, $second, $sign)
    {
        $this->checkOnZero($first, $second, $sign);

        $this->logger->save($this->saving, $this->result);

        return $this->result;
    }


    public function calculateOpen($first, $second, $sign)
    {
        $this->checkOnZero($first, $second, $sign);

        $this->logger->log($this->saving, $this->result);

        return $this->result;
    }
}
