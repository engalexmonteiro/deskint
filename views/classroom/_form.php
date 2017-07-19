<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\checkboxList;

/* @var $this yii\web\View */
/* @var $model app\models\Classroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classroom-form">

    <?php $form = ActiveForm::begin();
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'days')->textInput(['maxlength' => true]) ?> 


<!--     $form->field($model, 'days')->checkboxList(['Sunday'=>'Sunday','Monday'=>'Monday','Tuesday'=>'Tuesday','Wednesday'=>'Wednesday','Thursday'=>'Thursday','Friday'=>'Friday','Saturday'=>'Saturday'])  -->

    <?= $form->field($model, 'idroom')->dropDownList($array_rooms) ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
