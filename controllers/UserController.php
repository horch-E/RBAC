<?php
/**Class UserController ...*/

namespace app\controllers;

use app\controllers\common\BaseController;
use app\model\User;
use app\services\UrlServices;

class UserController extends BaseController{
	//伪登陆业务方法
	public function actionVlogin(){
		$uid = $this->get("uid",0);
		$reback_rul=UrlServices::buildUrl("/");
		if(!$uid){
			return $this->redirect($reback_rul);
		}
		$user_info=User::find()->where(['id'=>$uid])->one();
		if(!$user_info){
			return $this->redirect($reback_rul);
		}
		//cookie保存用户登录状态，所以cookie值需要加密，规则：user_auth_token +"#"+uid
		$user_auth_token = md5($user_info['id'].$user_info['name'].$user_info['email'].$_SERVER['HTTP_USER_AGENT']);
		$cookie_target=\Yii::$app->response->cookies;
		$cookie_target->add( new \yii\web\Cookies([
				"name"=>"imadagffgaf_888",
				"value"=>$user_auth_token."#".$user_info['id']
			])	);
		return $this->redirect($reback_rul);
	}

}