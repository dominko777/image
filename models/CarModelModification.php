<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_model_modification".
 *
 * @property int $id
 * @property string $name
 * @property int $car_model_id
 *
 * @property CarModel $carModel
 */
class CarModelModification extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car_model_modification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'car_model_id'], 'required'],
            [['car_model_id'], 'integer'],
            [['name'], 'string', 'max' => 10],
            [['car_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarModel::className(), 'targetAttribute' => ['car_model_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'car_model_id' => 'Car Model ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(CarModel::className(), ['id' => 'car_model_id']);
    }
}
