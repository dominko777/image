<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CarModelModification */

$this->title = 'Create Car Model Modification';
$this->params['breadcrumbs'][] = ['label' => 'Car Model Modifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-model-modification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
