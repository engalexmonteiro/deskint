<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Frequence */

$this->title = 'Create Frequence';
$this->params['breadcrumbs'][] = ['label' => 'Frequences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frequence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
