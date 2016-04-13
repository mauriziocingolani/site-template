<?php

use app\assets\MainAsset;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use mauriziocingolani\yii2fmwkphp\Html;
use kartik\social\GoogleAnalytics;

/* @var $this mauriziocingolani\yii2fmwkphp\View */
/* @var $content string */

MainAsset::register($this);
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title><?= Html::encode($this->title); ?></title>
        <?= Html::csrfMetaTags(); ?>
        <?php $this->registerMetaTag(['charset' => Yii::$app->charset]); ?>
        <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
        <?php $this->registerMetaTag(['name' => 'description', 'content' => $this->pageDescription]); ?>

        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>

        <link href="/images/favicon.ico" rel="icon" type="image/x-icon">

        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script type="text/javascript">
            window.cookieconsent_options = {
                "message": "Questo sito utilizza i Cookies per migliorare l'esperienza di navigazione.",
                "dismiss": "Accetto",
                "learnMore": "Informativa",
                "link": "<?= Yii::getAlias('@web'); ?>/privacy",
                "theme": "dark-bottom",
                "expiryDays": 7
            };
        </script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
        <!-- End Cookie Consent plugin -->

        <?php $this->head(); ?>
    </head>

    <body>
        <?php $this->beginBody(); ?>

        <!-- NAVBAR -->
        <?= $this->render('//navbar'); ?>

        <!-- CONTENUTO PRINCIPALE -->
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>

        <div class="content">
            <?= $content ?>
        </div>

        <!-- FOOTER -->
        <?= $this->render('//footer'); ?>

        <?php $this->endBody(); ?>
    </body>

    <!-- GOOGLE ANALYTICS -->
    <?= GoogleAnalytics::widget([]); ?>

</html>
<?php $this->endPage(); ?>