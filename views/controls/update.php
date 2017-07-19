<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Controls */

$this->title = 'Update Controls: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="controls-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'array_devices' => $array_devices,
    ]) ?>

</div>
