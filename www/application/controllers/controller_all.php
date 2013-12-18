<?php
Class Controller_All extends Controller{
	
	function __construct(){
		$this->model = new Model_All();
		$this->view = new View();
	}
	
	function action_index(){
		$data = $this->model->get_data();
		$this->view->generate("all_view.php", "template_view.php",$data);
	}
} 
