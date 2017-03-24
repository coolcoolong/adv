<?php
/**
 * Created by PhpStorm.
 * User: kim
 * Date: 2017/3/23
 * Time: 17:33
 */

namespace backend\controllers;

use backend\components\Controller;

class IndexController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}