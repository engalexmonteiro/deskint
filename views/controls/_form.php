<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Controls */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="controls-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddevice')->dropDownList($array_devices) ?>

    <?= $form->field($model, 'command')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ircode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
