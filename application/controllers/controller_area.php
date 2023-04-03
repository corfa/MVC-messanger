<?php

class Controller_Area extends Controller
{
	function __construct()
	{
		$this->model = new Model_Area();
		$this->view = new View();
	}
	
	function action_sendMessage(){
		if ($_COOKIE["id"]){
            $db_ans=$this->model->send_message($_COOKIE["id"],$_POST["title"],$_POST["text_message"],$_POST["recipient"]);
			if ($db_ans){
				header("Location: http://mvc-messanger/area");

			}
			else{
				$this->view->generate('error/user_not_found_error.php', 'template_view.php');

			}

        }
	}

	function action_index()
	{
        if ($_COOKIE["id"]){
            $data=[$this->model->get_send_messages($_COOKIE["id"]),$this->model->get_recipient_messages($_COOKIE["id"])];
            $this->view->generate('area.php', 'template_view.php',$data);
        }
        else{
		$this->view->generate('user_auth.php', 'template_view.php');
        }
	}
}
