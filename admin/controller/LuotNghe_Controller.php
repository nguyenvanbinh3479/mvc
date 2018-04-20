<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class LuotNghe_Controller extends Base_Controller
{
    /**
    * action index: show all luotnghes
    * method: GET
    */
    public function index()
    {        
        $this->model->load('LuotNghe');
        $list_luotnghe = $this->model->LuotNghe->all();
        $data = array(
            'title' => 'index',
            'list_luotnghe' => $list_luotnghe
        );

        // Load view
        $this->view->load('luotnghes/index', $data);
    }

    /**
    * action show: show a luotnghe
    * method: GET
    */
    public function show()
    {        
        $this->model->load('LuotNghe');
        $luotnghe = $this->model->LuotNghe->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'luotnghe' => $luotnghe
        );

        // Load view
        $this->view->load('luotnghes/show', $data);
    }

    /**
    * action create: create a luotnghe
    * method: GET
    */
    public function create()
    {        
        $this->view->load('luotnghes/create');
    }

     /**
    * action store: save a luotnghe to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('LuotNghe');
        $this->model->LuotNghe->baihat_id = $_POST['baihat_id'];
        $this->model->LuotNghe->user_id = $_POST['user_id'];
        $this->model->LuotNghe->ngay = $_POST['ngay'];
        $this->model->LuotNghe->save();

        go_back();
    }

    /**
    * action edit: show form edit a luotnghe
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('LuotNghe');
        $luotnghe = $this->model->LuotNghe->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'luotnghe' => $luotnghe
        );

        // Load view
        $this->view->load('luotnghes/edit', $data);
    }

    /**
    * action edit: update luotnghe database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('LuotNghe');
        $luotnghe = $this->model->LuotNghe->findById($_POST['id']);
        $luotnghe->baihat_id = $_POST['baihat_id'];
        $luotnghe->user_id = $_POST['user_id'];         
        $luotnghe->ngay = $_POST['ngay'];         
        $luotnghe->update();

        go_back();
    }

    /**
    * action delete: show form edit a luotnghe
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('LuotNghe');
        $luotnghe = $this->model->LuotNghe->findById($_GET['id']);
        $luotnghe->delete();

        go_back();
    }
}
