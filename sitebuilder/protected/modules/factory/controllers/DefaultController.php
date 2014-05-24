<?php

class DefaultController extends Controller
{
    public function init()
    {
        Yii::app()->theme = 'bootstrap';
        parent::init();
    }

	public function actionIndex()
	{
		$this->render('index');
	}
}