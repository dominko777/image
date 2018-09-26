<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $image_link
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    public $upload;
    public $text;
    public $font;
    public $color;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['upload'], 'required'],
            [['image_link'], 'string', 'max' => 255],
            [['upload'], 'image', 'extensions' => 'png, jpg, jpeg', 'maxWidth' => 800, 'maxHeight' => 800, 'maxSize' => 1024 * 500],
            [['text', 'font'], 'required'],
            [['text', 'font', 'color'], 'string']
        ];
    }

    public function scenarios() {
        $scenarios = parent::scenarios();
        $scenarios['upload'] = ['upload','image_link'];
        $scenarios['text'] = ['text','font', 'color'];
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_link' => 'Image Link',
            'iupload' => 'Image',
        ];
    }
}
