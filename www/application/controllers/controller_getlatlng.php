<?php
class Controler_Getlatlng extends Controller{
	function __construct(){
		$this->model = new Model_Getlatlng();
	}
	
	function action_index(){
		$data = $this->model->get_data();
		echo json_encode($data);
	}
}