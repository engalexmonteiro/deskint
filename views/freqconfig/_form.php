<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Freqconfig */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="freqconfig-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'checkin')->textInput() ?>

    <?= $form->field($model, 'timecheckin')->textInput() ?>

    <?= $form->field($model, 'timecheckout')->textInput() ?>

    <?= $form->field($model, 'timecheckintoclose')->textInput() ?>

    <?= $form->field($model, 'tolerance')->textInput() ?>

    <?= $form->field($model, 'idclassroom')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
