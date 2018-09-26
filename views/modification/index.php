<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CarModelModificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Car Model Modifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-model-modification-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Car Model Modification', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute'=>'model',
                'value'=>'model.name',
                'filter' => ArrayHelper::map(\app\models\CarModel::find()->asArray()->all(), 'id', 'name'),
                'label'=>'Модель'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
