<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Frequence */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Frequences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<script>

function refreshPage() {
   setTimeout("location.reload(true);",5000)"
}

</script>

<body onload="refreshPage()">

<div class="frequence-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'iduser',
            'date',
            'hour',
            'delay',
            'idclass',
        ],
    ]) ?>

</div>
</body>
