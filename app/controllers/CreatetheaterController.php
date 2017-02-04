<?php

class CreatetheaterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
	
	public function saveAction(){
		$theater = new Theater();
		
		$success = $theater->save(
		$this->request->getPost(),
		array(
		"theater_name",
		"theater_region",
		)
				);
				
				
				if($success) {
					//echo "Theater Saved";
					$this->view->disable();
					header('location:/unitedstatescivilwar/createTheater');
						
				} else {
					echo "Theater NOT saved";
					$message = $theater->getMessages();
					 foreach ($messsages as $message) {
					 	echo $message->getMessages(), "<br/>";
					 }
				}
				//$this->view->disable();				
					
	}

}

