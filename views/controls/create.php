<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Controls */

$this->title = 'Create Controls';
$this->params['breadcrumbs'][] = ['label' => 'Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controls-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'array_devices' => $array_devices
    ]) ?>

</div>
