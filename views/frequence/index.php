<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FrequenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Frequences';
$this->params['breadcrumbs'][] = $this->title;
?>


<script type="text/javascript">
    window.onload = setupRefresh;

    function setupRefresh() {
      setTimeout("refreshPage();", 2000); // milliseconds
    }
    function refreshPage() {
       window.location = location.href;
    }
</script> 


<div class="frequence-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Frequence', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'iduser',
            'date',
            'hour',
            'delay',
            // 'idclass',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
