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
        $this->createTable("DBLogger", [
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
        echo "m200519_193756_DBlogger cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200519_193756_DBlogger cannot be reverted.\n";

        return false;
    }
    */
}
