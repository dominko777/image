<?php

use yii\db\Migration;

/**
 * Handles the creation of table `car_model`.
 */
class m180926_091927_create_car_model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('car_model', [
            'id' => $this->primaryKey(),
            'name' => $this->string(10)->notNull(),
            'year' => $this->integer(4)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('car_model');
    }
}
