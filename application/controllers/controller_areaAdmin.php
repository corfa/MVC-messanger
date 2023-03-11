<?php

class Controller_AreaAdmin extends Controller
{
	function __construct()
	{
		$this->model = new Model_AreaAdmin();
		$this->view = new View();
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
