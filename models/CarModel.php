<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_model".
 *
 * @property int $id
 * @property string $name
 * @property int $year
 *
 * @property CarModelModification[] $carModelModifications
 */
class CarModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car_model';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'year'], 'required'],
            [['year'], 'integer'],
            [['name'], 'string', 'max' => 10],
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
            'year' => 'Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModifications()
    {
        return $this->hasMany(CarModelModification::className(), ['car_model_id' => 'id']);
    }

    public static function getYearsList() {
        $currentYear = 1930;
        $yearFrom = 2013;
        $yearsRange = range($yearFrom, $currentYear);
        return array_combine($yearsRange, $yearsRange);
    }
}
