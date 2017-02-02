<?php

class VaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		echo $this->view->render('va', 'index');
    }

	public function ballsbluffAction()
	{
		echo $this->view->render('ballsbluff', 'index');
	}
}

