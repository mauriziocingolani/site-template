<?php

use yii\helpers\Html;

/* @var $this mauriziocingolani\yii2fmwkphp\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>

<div class="container">

    <div class="site-error" style="min-height: 400px;">

        <h1><?= Html::encode($this->title) ?></h1>

        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>

    </div>

</div>