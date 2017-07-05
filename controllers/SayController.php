<?php
/**Class SayController ...*/

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\services\UrlServices;

class SayController extends Controller
{
    //验证
    public function actionHi(){
        echo UrlServices::buildUrl("/");
    }
  }
