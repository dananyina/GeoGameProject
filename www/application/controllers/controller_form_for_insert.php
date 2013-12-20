<?php
class Controller_Form_for_insert extends Controller{
	function __construct(){
		$this->view = new View();
	}
	
	function action_index(){
		$this->view->generate("form_for_insert_view.php", "template_view.php"/*,$_POST[""]*/);
	}
}