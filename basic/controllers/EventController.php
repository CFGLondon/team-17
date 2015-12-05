<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Controller;

class EventController extends Controller
{
	public function actionIndex()
	{
		return $this->render('event');
	}

    public function actionCreate()
    {
        return $this->render('create');
    }
}
