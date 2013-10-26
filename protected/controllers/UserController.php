<?php

class UserController extends Controller
{
	public function actionHistory()
	{
		$this->render('history');
	}

	public function actionInformation()
	{
		$this->render('information');
	}

	public function actionLogin()
	{
		$this->render('login');
	}
        
        public function actionSettings()
	{
		$this->render('login');
	}

	public function actionLogout()
	{
		$this->render('logout');
	}

	public function actionProfile()
	{
		$this->render('profile');
	}

	public function actionPwdrestore()
	{
		$this->render('pwdrestore');
	}

	public function actionRegistration()
	{
		$this->render('registration');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}