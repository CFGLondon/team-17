<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\base\Object;
use yii\helpers\Html;

class LoginController extends Controller
{
	public function actionTry()
	{
		$session = \Yii::$app->session;
		$request = \Yii::$app->request;
		
		$clientId = '229XBT';
		$responseType = 'code';
		$scope = Html::encode('activity profile');
		$prompt = 'login';
		
		if ($session->get('try') == "loggedIn") {
			$session->set('try', 'reset');
			$session->set('dump', $request->post());
			$this->redirect('@web/index.php?r=site/dump');
		}
			
		else {
			$session->set('try', "loggedIn");
			
			return $this->redirect(
					"https://www.fitbit.com/oauth2/authorize?"
					."response_type=$responseType&"
					."client_id=$clientId&"
					."scope=$scope"
			);
		}		
	}
	
	public function actionSuccess()
	{
		return $this->render('success');
	}
}
