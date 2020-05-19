<?php

namespace app\commands\solid\openClosed;

interface ILogger
{
    public function log ($first, $second, $sign, $result);
}
