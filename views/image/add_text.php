<?php

use kartik\color\ColorInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Image */

$this->title = 'Add Text: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Add Text';
?>
<div class="image-add-text">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textInput() ?>

    <?php
        $files = \yii\helpers\FileHelper::findFiles(Yii::getAlias('@webroot/fonts'));
        $filenames = [];
        foreach ($files as $file) {
            $file = basename($file);
            $filenames[$file] = $file;
        }
        echo $form->field($model, 'font')->dropDownList(
            $filenames,
            ['prompt'=>'Выберите шрифт']);
    ?>

    <?= $form->field($model, 'color')->widget(ColorInput::classname(), [
    'options' => ['placeholder' => 'Выберите цвет ...'],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
