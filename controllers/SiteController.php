<?php

namespace app\controllers;

use Yii;
use app\components\WebsiteController;

class SiteController extends WebsiteController {

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

//    public function actionIndex() {
//        return $this->render('index');
//    }

    public function actionError() {
        
    }

}
