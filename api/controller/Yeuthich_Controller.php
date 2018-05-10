<?php 
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

/**
 * summary
 */
class Yeuthich_Controller extends Base_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

    }

    public function showBaiHatYeuThichFromID(){
    	$id = $_POST['id'];

    	$this->model->load("BaiHat");
    	$baihats = $this->model->BaiHat->showBaiHatYeuThichFromID($id);

    	echo json_encode($baihats, JSON_UNESCAPED_UNICODE);
    }

    public function saveYeuThich(){
    	$this->model->load('YeuThich');
        $this->model->YeuThich->baihat_id = $_POST['baihat_id'];
        $this->model->YeuThich->user_id = $_POST['user_id'];
        $this->model->YeuThich->ngay = $_POST['ngay'];
        $this->model->YeuThich->save();
    }

    public function boyeuThich(){
    	$this->model->load('YeuThich');
    	$this->model->YeuThich->baihat_id = $_POST['baihat_id'];
    	$this->model->YeuThich->user_id = $_POST['user_id'];
    	$this->model->YeuThich->delete();
    }
}
?>