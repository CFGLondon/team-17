<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ChallengeController extends Controller
{
	public function actionIndex()
	{
		return $this->render('challenge');
	}
}
