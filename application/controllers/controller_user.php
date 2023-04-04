<?php

class Controller_User extends Controller
{
	function __construct()
	{
		$this->model = new Model_User();
		$this->view = new View();
	}
	
	function action_exit(){
		setcookie("id", -1,time()-60*60*24, "/");
		$this->view->generate('user_auth.php', 'template_view.php');
	}

	function action_create(){
			$db_ans=$this->model->create_user($_POST["login"],$_POST["password"]);
			if ($db_ans){
				$this->view->generate('user_create.php', 'template_view.php');
				
			}else{
			$this->view->generate('409_view.php', 'template_view.php');
			}
	}
	function action_auth(){
		$db_ans=$this->model->check_user($_POST["login"],$_POST["password"]);
		if ($db_ans!=-1){
			setcookie("id", $db_ans,time()+60*60*24, "/");
			header("Location: http://mvc-messanger/area");
			
		}else{
		$this->view->generate('403_view.php', 'template_view.php');
		}
}


	function action_index()
	{
		$this->view->generate('user_auth.php', 'template_view.php');
	}
}
