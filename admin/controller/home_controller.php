<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Home_Controller extends Base_Controller
{

    public function index()
    {        
        $this->model->load("BaiHat");
        $list_baihat = $this->model->BaiHat->all();

        $data = array(
            'title' => 'home',
            'list_baihat' => $list_baihat
        );

        // Load view
        $this->view->load('home/home',$data);
    }

}