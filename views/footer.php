<?php

use mauriziocingolani\yii2fmwkphp\Html;
use rmrevin\yii\fontawesome\FA;
?>

<footer>

    <hr />

    <div class="container">

        <div class="row">

            <div class="col-sm-4">
                <strong>Yii2 Website Template</strong>
            </div>

            <div class="col-sm-4">
                <?= Html::a('Home', Yii::$app->homeUrl); ?><br />
                ...
            </div>

            <div class="col-sm-4 social">
                &copy;<?= Yii::$app->params['copyYear']; ?> - <u><?= Html::a('Privacy', '/privacy', ['class' => 'privacy']); ?></u><br />
                webdesign: <?= Html::a('m_cingolani', 'http://www.mauriziocingolani.it', ['target' => 'blank']); ?>
            </div>

        </div>

    </div>

</footer>