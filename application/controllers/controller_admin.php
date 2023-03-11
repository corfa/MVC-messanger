<?php

class Controller_Admin extends Controller
{
	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}
	
	function action_exit(){
		setcookie("admin", -1,time()-60*60*24, "/");
		$this->view->generate('user_auth.php', 'template_view.php');
	}

	
function action_auth(){
	$db_ans=$this->model->check_admin($_POST["login"],$_POST["password"]);
	if ($db_ans!=-1){
		setcookie("admin","admin",time()+60*60*24, "/");
		header("Location: http://MVC/areaAdmin");
		
	}else{
	$this->view->generate('error/403_view.php', 'template_view.php');
	}
}




	function action_index()
	{
		$this->view->generate('admin_auth.php', 'template_view.php');
	}
}
