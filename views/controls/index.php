<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ControlsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Controls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controls-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Controls', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'iddevice',
            'command',
            'ircode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
