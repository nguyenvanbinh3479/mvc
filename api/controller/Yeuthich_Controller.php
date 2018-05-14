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

        $json = [];
    	$this->model->load("BaiHat");
    	$baihats = $this->model->BaiHat->showBaiHatYeuThichFromID($_POST['id']);

        if ($baihats != 0) {
            http_response_code(200);   
            array_push($json, [
                "id" => $baihats->id,
                "ten" => $baihats->ten,
                "casi_id" => $baihats->casi_id,
                "anh" => $baihats->anh,
                "link" => $baihats->link,
            ]);
        }
        else {
            http_response_code(401);
            array_push($json, [
                "message" => "false"
            ]);
        }

    	echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }

    public function saveYeuThich(){
        $json = [];
        echo '{';
        echo "\"saveYeuThich\":";
    	$this->model->load('YeuThich');
        $this->model->YeuThich->baihat_id = $_POST['baihat_id'];
        $this->model->YeuThich->user_id = $_POST['user_id'];
        $this->model->YeuThich->ngay = $_POST['ngay'];
        $result = $this->model->YeuThich->save();

        if ($result) {
            http_response_code(200);
            array_push($json, [
                "message" => "true"
            ]);
        }else {
            http_response_code(401);
            array_push($json, [
                "message" => "false"
            ]);
        }

        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        echo '}';
    }

    public function boyeuThich(){
        $json = [];
        echo '{';
        echo "\"boyeuThich\":";
    	$this->model->load('YeuThich');
    	$this->model->YeuThich->baihat_id = $_POST['baihat_id'];
    	$this->model->YeuThich->user_id = $_POST['user_id'];
    	$result = $this->model->YeuThich->delete($_POST['baihat_id'], $_POST['user_id']);

        if ($result) {
            http_response_code(200);
            array_push($json, [
                "message" => "true"
            ]);
        }else {
            http_response_code(401);
            array_push($json, [
                "message" => "false"
            ]);
        }

        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        echo '}';
    }

    public function CountYeuThich(){
        $json = [];
        $this->model->load('BaiHat');

        echo '{';
        echo "\"luotthich\":";
        $this->model->load("BaiHat");
        $result = $this->model->BaiHat->LuotThichTheoIDBaiHat($_POST['id']);
        if ($result >= 0) {
            http_response_code(200);
            array_push($json, [
                "luotthich" => $result
            ]);
        }else {
            array_push($json, [
                "message" => "false"
            ]);
        }

        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        echo "}";
    }

    public function check_yeuthich_exists(){
        $json = [];
        $this->model->load('YeuThich');
        echo '{';
        echo "\"is_yeuthich\":";
        $result = $this->model->YeuThich->check_yeuthich_exists($_POST['baihat_id'], $_POST['user_id']);
        if ($result > 0) {
            http_response_code(200);
            array_push($json, [
                'message' => 'true'
            ]);
        }else {
            http_response_code(401);
            array_push($json, [
                'message' => 'false'
            ]);
        }
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        echo '}';
    }
}
?>