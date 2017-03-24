<?php

namespace frontend\components;

class Controller extends \yii\web\Controller {

    public $layout = false;

    public function beforeAction($action) {
        parent::beforeAction($action);

        return true;
    }

}
