<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Desks */

$this->title = 'Update Desks: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Desks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="desks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'array_rooms' => $array_rooms,
    ]) ?>

</div>
