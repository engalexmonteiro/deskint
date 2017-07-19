<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Desks */

$this->title = 'Create Desks';
$this->params['breadcrumbs'][] = ['label' => 'Desks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'array_rooms' => $array_rooms,
    ]) ?>

</div>
