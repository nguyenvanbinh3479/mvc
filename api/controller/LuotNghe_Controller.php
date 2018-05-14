<?php 
	if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

/**
 * summary
 */
class LuotNghe_Controller extends Base_Controller
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

    public function LuotNgheTheoIDBaiHat(){
    	$json = [];
    	echo '{';
    	echo "\"luotnghe\":";
    	$this->model->load("BaiHat");
    	$result = $this->model->BaiHat->LuotNgheTuIDBaiHat($_POST['id']);
    	if ($result >= 0) {
    		http_response_code(200);
    		array_push($json, [
    			"luotnghe" => $result
    		]);
    	}else {
    		array_push($json, [
    			"message" => "false"
    		]);
    	}

    	echo json_encode($json, JSON_UNESCAPED_UNICODE);
    	echo "}";
    }

    public function PlusMusic(){
        $json = [];

        $this->model->load("LuotNghe");
        $result = $this->model->LuotNghe->PlusMusic($_POST['baihat_id'], $_POST['user_id'], $_POST['ngay']);

        echo '{';
        echo "\"Plus\":";
        if ($result > 0) {
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
}

 ?>