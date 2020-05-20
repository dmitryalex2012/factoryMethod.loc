<?php

use yii\db\Migration;

/**
 * Class m200519_193756_DBlogger
 */
class m200519_193756_DBlogger extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("DBLoggerModel", [
            "Id" => $this->primaryKey(),
            "Data" => $this->string(),
            "Time" => $this->string(),
            "Notes" => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200519_193756_loggerDB cannot be reverted.\n";

        return false;
    }
}
