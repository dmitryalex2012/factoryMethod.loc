<?php

namespace app\commands\solid;
use app\commands\solid\singleResponsibility\SRLogger;


class Calculation
{
    public $result;
    public $logger;

    public function __construct(SRLogger $argument)
    {
        $this->logger = $argument;
    }

    private function calculation ($first, $second, $sign)
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
            $saving = $first . $sign . $second . "=" . "error";
            $this->logger->saveToFile("errors.txt", $saving);
            $this->result = "error";
        } else {
            $this->calculation($first, $second, $sign);
        }

        return $this->result;
    }

    public function calculateOpen($first, $second, $sign, $storagePointer)
    {
        if (($second == 0) && ($sign == "/")) {
            $this->result = "error";
        } else {
            $this->calculation($first, $second, $sign);
        }

        $saving = $first . $sign . $second . "=" . $this->result;
        $this->logger->saveToFile("results.txt", $saving);

        return $this->result;
    }
}
