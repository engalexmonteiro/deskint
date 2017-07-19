<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Classroom */

$this->title = 'Create Classroom';
$this->params['breadcrumbs'][] = ['label' => 'Classrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classroom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'array_rooms' => $array_rooms,
    ]) ?>

</div>
