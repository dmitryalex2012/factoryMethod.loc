<?php

namespace app\models;

use yii\db\ActiveRecord;

class DBLoggerModel extends ActiveRecord
{
    public function saveToDB ($saving)
    {
        $this->Data = $saving;
        $this->Time = date('r');
        $this->save();
    }
}
