<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Mission_Controller extends Base_Controller
{

    public function index()
    {        
        // Load view
        $this->view->load('mission/mission');
    }

}