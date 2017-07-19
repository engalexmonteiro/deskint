<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FrequenceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="frequence-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'iduser') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'hour') ?>

    <?= $form->field($model, 'delay') ?>

    <?php // echo $form->field($model, 'idclass') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
