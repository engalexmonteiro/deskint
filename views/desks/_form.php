<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Desks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idroom')->dropDownList($array_rooms) ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip_addressv6')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
