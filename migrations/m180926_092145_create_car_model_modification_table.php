<?php

use yii\db\Migration;

/**
 * Handles the creation of table `car_model_modification`.
 */
class m180926_092145_create_car_model_modification_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('car_model_modification', [
            'id' => $this->primaryKey(),
            'name' => $this->string(10)->notNull(),
            'car_model_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-car_model_id',
            'car_model_modification',
            'car_model_id'
        );

        $this->addForeignKey(
            'fk-car_model_id',
            'car_model_modification',
            'car_model_id',
            'car_model',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-car_model_id',
            'car_model_modification'
        );

        $this->dropIndex(
            'idx-car_model_id',
            'car_model_modification'
        );

        $this->dropTable('car_model_modification');
    }
}
