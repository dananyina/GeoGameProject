<?php
class Controller_Records extends Controller
{
	function __construct()
    {
        $this->model = new Model_Controller();
    }

    function action_index()
    {	
		$data = $this->model->get_data();
    }
}
?>