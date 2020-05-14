<?php

namespace app\commands\single_responsibility;

class Calculation
{
    public $result;
    public $logger;

    public function __construct(Logger $argument)
    {
        $this->logger = $argument;
    }

    public function calculate($first, $second, $sign)
    {
        if (($second == 0) && ($sign == "/")) {
            $this->result = "error";
        } else {
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
        $saving = $first . $sign . $second . "=" . $this->result;
        $this->logger->saveToFile("results.txt", $saving);

        return $this->result;
    }
}
