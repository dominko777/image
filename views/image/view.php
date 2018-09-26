<?php

use bigpaulie\social\share\Share;
use yii\helpers\Html;
use ymaker\social\share\widgets\SocialShare;

/* @var $this yii\web\View */
/* @var $model app\models\Image */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a('Добавить текст', ['image/add-text', 'id' => $model->id]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= Html::img('/web/' . $model->image_link) ?>

    <?= Share::widget([
        'title' => 'Изображение',
        'description' => 'Описание',
        'image' => '/web/' . $model->image_link,
    ]); ?>

</div>
