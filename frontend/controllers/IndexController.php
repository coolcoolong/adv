<?php
namespace frontend\controllers;

use frontend\components\Controller;
use Yii;

/**
 * Site controller
 */
class IndexController extends Controller
{

    public function actionIndex()
    {
        $baofei = 500000;
        $baonian = 15;
        $fan  = 7800;
        $year = 65;

        for ($i = 0; $i <= $year; $i++) {
            $fei = $fei2 = 0;
            if ($i < $baonian) {
                $fei = $baofei / $baonian;
                $fei2 = $baofei / $baonian - $fan;
                if ($i == 0) {
                    $fei2 = $baofei / $baonian;
                }
            }

            if ($i <= $baonian) {
                $zong = $baofei / $baonian * $i;
            }
            $zong2 = $zong + $fan * $i;
            echo $i . '|' . (int)$fei . '|' . (int)$fei2 . '|' . (int)$zong . '|' . (int)$zong2 . '|' . $zong * 1.05 . '|' . $zong2 * 1.05 . PHP_EOL ;
        }

    }

}
