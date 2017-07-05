<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use app\services\UrlService;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    // public $css = [
    //         "/bootstrap/css/bootstrap.min.css";
    // ];
    // public $js = [
    //         "/jquery/jquery.min.js",
    //         "/bootstrap/js/bootstrap.min.js"
    // ];

    public function registerAssetFiles($view){
        //加一个版本号，目的：使浏览器获得最新的css和js文件
        $release= "20170522";
        $this->css = [
        // "/bootstrap/css/bootstrap.min.css",
        // "/css/app.css"
                 UrlService::buildUrl("/bootstrap/css/bootstrap.min.css",["v"=>$release]),
                 UrlService::buildUrl("/css/app.css")
        ];

        $this->js = [
        // "/jquery/jquery-3.2.1.min.js",
        // "/bootstrap/js/bootstrap.min.js"
                UrlService::buildUrl("/jquery/jquery-3.2.1.min.js"),
                UrlService::buildUrl("/bootstrap/js/bootstrap.min.js")
        ];

        parent::registerAssetFiles($view);
    }
}
