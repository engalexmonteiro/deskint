<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FreqconfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Freqconfigs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="freqconfig-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Freqconfig', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'checkin',
            'timecheckin:datetime',
            'timecheckout:datetime',
            'timecheckintoclose:datetime',
            // 'tolerance',
            // 'idclassroom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
