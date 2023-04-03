<?php

class Controller_AreaAdmin extends Controller
{
	function __construct()
	{
		$this->model = new Model_AreaAdmin();
		$this->view = new View();
	}
	function action_delUser(){
		if ($_COOKIE["admin"]){
			
            $this->model->del_user($_GET["id_user"]);
			$data=$this->model->get_all_users();
            $this->view->generate('areaAdmin.php', 'template_view.php',$data);
        }
		else{
			$this->view->generate('admin_auth.php', 'template_view.php');
			}
	}
	

	function action_showUserMessage(){
		if ($_COOKIE["admin"]){
			$data=[$this->model->get_send_messages($_GET["id_user"]),$this->model->get_recipient_messages($_GET["id_user"])];
            $this->view->generate('admin_message_view.php', 'template_view.php',$data);
        }
		else{
			$this->view->generate('admin_auth.php', 'template_view.php');
			}
	}
	

	function action_index()
	{
        if ($_COOKIE["admin"]){
            $data=$this->model->get_all_users();
            $this->view->generate('areaAdmin.php', 'template_view.php',$data);
        }
        else{
		$this->view->generate('admin_auth.php', 'template_view.php');
        }
	}
}
