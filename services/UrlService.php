<?php
/**Class UrlService**/
namespace app\services;
use yii\helpers\Url;

//统一管理链接，并规范书写
class UrlService{
	//返回一个 内部链接

	public static function buildUrl($url,$params=[]){

		return Url::toRoute( array_merge([$url],$params));

	}

	//返回一个空连接

	public static function buildNullUrl(){

		return "javascript:void(0);";
	}

}