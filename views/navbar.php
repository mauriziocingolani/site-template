<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use mauriziocingolani\yii2fmwkphp\Html;

NavBar::begin([
    'brandLabel' => Yii::$app->params['brandLabel'],
    'options' => [
        'class' => 'navbar-default navbar-fixed-top',
    ],
]);
$items = [
    [
        'label' => 'Home',
        'url' => ['/'],
        'active' => $this->context->id == 'site' && ($this->context->action->id == 'index' || $this->context->action->id == 'privacy'),
    ],
];

echo Nav::widget([
    'items' => $items,
    'options' => ['class' => 'navbar-nav navbar-right'],
]);
NavBar::end();
?>