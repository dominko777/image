<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CarModelModification */

$this->title = 'Update Car Model Modification: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Car Model Modifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-model-modification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
