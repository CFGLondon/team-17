<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\DonateForm;
use app\models\SupportForm;
use app\models\BuyForm;
use yii\base\Object;
use yii\db\Query;

class SupportController extends Controller
{
	public function actionIndex($id)
	{
		$session = \Yii::$app->session;
		$request = \Yii::$app->request;
		
		$donateForm = new DonateForm();
		$buyForm = new BuyForm();
		$supportForm = new SupportForm();
		
		if ($donateForm->load($request->post()) && $donateForm->submit())
		{
			$session->set('donate', $request->post('DonateForm'));
			return $this->redirect('@web/index.php?r=support/donate');
		}
		
		else if ($buyForm->load($request->post()) && $buyForm->submit())
		{	
			$session->set('bought', $request->post('BuyForm'));
			return $this->redirect('@web/index.php?r=support/buy');
		}
		
		else if ($supportForm->load($request->post()) && $supportForm->submit())
		{
			$session->set('motive', $request->post('SupportForm'));
			return $this->redirect('@web/index.php?r=support/motivation');
		}
		
		$query = new Query;
        // compose the query
        $query->from('hero')
            ->where('Hid=:id', array(':id' => $id));
        $hero = $query->one();
		return $this->render('support', array('hero' => $hero));
	}
	
	public function actionBuy()
	{
		$session = \Yii::$app->session;
		
		$bought = $session->get('bought');
		
		return $this->render('boughtMiles', [
				'boughtMiles' => $bought
		]);
	}
	
	public function actionDonate()
	{
		$session = \Yii::$app->session;
	
		$donate = $session->get('donate');
	
		return $this->render('donationMade', [
				'donationMade' => $donate
		]);
	}
	
	public function actionMotivation()
	{
		$session = \Yii::$app->session;
	
		$motive = $session->get('motive');
	
		return $this->render('motivated', [
				'motivated' => $motive
		]);
	}
}
