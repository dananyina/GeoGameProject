<?php
class Controller_Main extends Controller
{
	function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index()
    {	
		$data = $this->model->get_data();
        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
    
    function action_getjson(){
    	$data = $this->model->get_data();
    	echo json_encode($data);
    }
}
?>