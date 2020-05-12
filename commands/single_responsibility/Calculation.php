<?php

namespace app\commands\single_responsibility;

class Calculation
{
    public $result;

    public function calculate ($first, $second, $sign){
//        $result = 0;
        switch ($sign){
            case "+": $this->result = $first + $second; break;
            case "-": $this->result = $first - $second; break;
            case "*": $this->result = $first * $second; break;
            case "/": $this->result = $first / $second; break;
        }

        return $this->result;
    }
}
