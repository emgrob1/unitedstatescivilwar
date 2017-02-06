<?php

class CreatearmiesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

	public function saveAction(){
		$armies = new Armies();
		$success = $armies->save(
		$this->request->getPost(),
		array(
		"battle_id",
		"theater_id",
		"armies_name",
		"general_id",
		)
		);
			if($success) {
					
					$this->view->disable();
					header('location:/unitedstatescivilwar/createArmies');
						
				} else {
					echo "Armies NOT saved";
					$message = $theater->getMessages();
					 foreach ($messsages as $message) {
					 	echo $message->getMessages(), "<br/>";
					 }
				}
	}
}

