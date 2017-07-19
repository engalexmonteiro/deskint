<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Controls */
/* @var $form ActiveForm */
?>
<div class="site-controls">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'iddevice') ?>
        <?= $form->field($model, 'command') ?>
        <?= $form->field($model, 'ircode') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-controls -->
