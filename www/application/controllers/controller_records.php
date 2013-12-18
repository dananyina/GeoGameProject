<?php
class Controller_Records extends Controller
{
	function __construct()
    {
        $this->model = new Model_Records();
        $this->view = new View();
    }

    function action_index()
    {	
		$data = $this->model->get_data();
		$this->view->generate("records_view.php", "template_view.php", $data);
    }
}