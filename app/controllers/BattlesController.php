<?php


use Phalcon\Mvc\Controller;

class BattlesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
	//	echo $this->view->render('index');
    }


	public function vaAction()
	{
			 echo $this->view->render('va', 'index');
			//echo $this->view->render('ballsbluff', 'index');
			
	}
	
	public function ballsbluffAction()
	{
		echo $this->view->render('ballsbluff', 'index');
	}
}

