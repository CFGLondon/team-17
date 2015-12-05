<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ChallengeForm;

class ChallengeController extends Controller
{
	public function actionIndex()
	{
		$session = \Yii::$app->session;
		$request = \Yii::$app->request;
		$challengeForm = new ChallengeForm();
		
		if ($challengeForm->load($request->post()) && $challengeForm->submit())
		{
			$session->set('dump', $request->post('ChallengeForm'));
			return $this->redirect('@web/index.php?r=site/dump');
		}
		else
		{
			return $this->render('challenge', [
					'challengeForm' => $challengeForm
			]);
		}
	}
}
