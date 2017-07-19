<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FreqconfigSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="freqconfig-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'checkin') ?>

    <?= $form->field($model, 'timecheckin') ?>

    <?= $form->field($model, 'timecheckout') ?>

    <?= $form->field($model, 'timecheckintoclose') ?>

    <?php // echo $form->field($model, 'tolerance') ?>

    <?php // echo $form->field($model, 'idclassroom') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
