<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SupportController extends Controller
{
	public function actionIndex()
	{
		return $this->render('support');
	}
}
