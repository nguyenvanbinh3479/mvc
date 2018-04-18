<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Album_Controller extends Base_Controller
{
    /**
    * action index: show all albums
    * method: GET
    */
    public function index()
    {        
        $this->model->load('Album');
        $this->model->load('CaSi');
        $list_album = $this->model->Album->all();
        $list_casi = $this->model->CaSi->all();
        $data = array(
            'title' => 'index',
            'list_album' => $list_album,
            'list_casi' => $list_casi
        );

        // Load view
        $this->view->load('albums/index', $data);
    }

    /**
    * action show: show a album
    * method: GET
    */
    public function show()
    {        
        $this->model->load('Album');
        $album = $this->model->Album->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'album' => $album
        );

        // Load view
        $this->view->load('albums/show', $data);
    }

    /**
    * action create: create a album
    * method: GET
    */
    public function create()
    {        
        $this->view->load('albums/create');
    }

     /**
    * action store: save a album to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('Album');
        $this->model->Album->anh = $_POST['anh'];
        $this->model->Album->ten = $_POST['ten'];
        $this->model->Album->casi_id = $_POST['casi_id'];
        $this->model->Album->save();

        go_back();
    }

    /**
    * action edit: show form edit a album
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('Album');
        $album = $this->model->Album->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'album' => $album
        );

        // Load view
        $this->view->load('albums/edit', $data);
    }

    /**
    * action edit: update album database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('Album');
        $album = $this->model->Album->findById($_POST['id']);
        $album->anh = $_POST['anh'];
        $album->ten = $_POST['ten'];  
        $album->casi_id = $_POST['casi_id'];           
        $album->update();

        go_back();
    }

    /**
    * action delete: show form edit a album
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('Album');
        $album = $this->model->Album->findById($_GET['id']);
        $album->delete();

        go_back();
    }
}
