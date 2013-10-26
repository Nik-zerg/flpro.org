<?php

class ContactsController extends Controller
{
    public function init() {
        $this->defaultAction = 'all'; 
        $this->layout='contacts';
        parent::init();
    }
    
    public function actionAll()
    {
        $this->render('list');
    }

    public function actionAssociates()
    {
        $this->render('list');
    }
    
    public function actionClients()
    {
        $this->render('list');
    }

    public function actionCompetitors()
    {
        $this->render('list');
    }

    public function actionEmployees()
    {
        $this->render('list');
    }

    public function actionManagers() {
        $this->render('list');
    }

    public function actionMentor() {
        $this->render('list');
    }
        
    public function actionPartners() {
        $this->render('list');
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