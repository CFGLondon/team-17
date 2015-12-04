<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class LoginController extends Controller
{
	public function actionSuccess()
	{
		return $this->render('success');
	}
}
