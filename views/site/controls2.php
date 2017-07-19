<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

<?php
$r = new HttpRequest('http://grc.icomp.ufam.edu.br/test.php', HttpRequest::METH_POST);
$r->setOptions(array('cookies' => array('lang' => 'de')));
$r->addPostFields(array('user' => 'mike', 'pass' => 's3c|r3t'));
$r->addPostFile('image', 'profile.jpg', 'image/jpeg');
try {
    echo $r->send()->getBody();
} catch (HttpException $ex) {
    echo $ex;
}
?>

</div>
