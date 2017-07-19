<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Frequence */

$this->title = "outro";
$this->params['breadcrumbs'][] = ['label' => 'Frequences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="frequence-view">


    <h1><?= Html::encode($this->title) ?></h1>
    
    ID card: <?= $card ?> <br>

   Checkin:  <? echo ($freqconfig->checkin) ? "Aberto" : "Fechado"?>  <br>

   User: <?= $user->name ?> <br>





</div>
