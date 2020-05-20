<?php

namespace app\commands\solid\openClosed;

use app\models\DBLoggerModel;

class DBLogger implements ILogger
{
    public function SaveToDB ($saving)
    {
        $DB = new DBLoggerModel();
        $DB->saveToDB($saving);
    }

    public function log($saving, $result)
    {
        $this->SaveToDB($saving);
    }

}
