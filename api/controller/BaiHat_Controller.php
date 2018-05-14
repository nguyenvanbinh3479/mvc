<?php 
//SELECT baihats.ten, COUNT(baihats.id) as 'nghe_nhieu' from baihats, luotnghes WHERE baihats.id = luotnghes.baihat_id GROUP BY luotnghes.baihat_id ORDER BY nghe_nhieu DESC
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class BaiHat_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function topFiveMusic()
	{
		$json = [];
		echo '{';
		echo "\"topfive\":";
		$list_baihat = array();
		$this->model->load('BaiHat');
		$list_baihat = $this->model->BaiHat->topFiveMusic();

		if ($list_baihat != 0) {
			http_response_code(200);
			for ($i = 0; $i < count($list_baihat); $i++) {
				array_push($json, [
					"id" => $list_baihat[$i]->id,
					"ten" => $list_baihat[$i]->ten,
					"casi_id" => $list_baihat[$i]->casi_id,
					"anh" => $list_baihat[$i]->anh,
					"link" => $list_baihat[$i]->link
				]);
			}
		}else {
			http_response_code(401);
			array_push($json, [
				'message' => 'false'
			]);
		}
		echo json_encode($json, JSON_UNESCAPED_UNICODE);
		echo '}';
	}

	public function InfoMusic(){
		$json = [];
		echo '{';
		echo "\"infor\":";
		$this->model->load('BaiHat');
		$BaiHat = $this->model->BaiHat->InfoMusic($_POST['id']);
		if (!is_int($BaiHat)) {
			http_response_code(200);
			array_push($json, [
				"id" => $BaiHat->id,
				"casi_id" => $BaiHat->casi_id,
				"casi_id" => $BaiHat->casi_id,
				"theloai_id" => $BaiHat->theloai_id,
				"tacgia_id" => $BaiHat->tacgia_id,
				"ten" => $BaiHat->ten,
				"anh" => $BaiHat->anh,
				"loi_bai_hat" => $BaiHat->loi_bai_hat,
				"link" => $BaiHat->link,
				"ngay" => $BaiHat->ngay
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

	public function AllMusic(){
		$this->model->load('BaiHat');
		$list_baihat = array();
		$list_baihat = $this->model->BaiHat->all();
		if ($list_baihat != null) {
			echo json_encode($list_baihat, JSON_UNESCAPED_UNICODE);
		}else {
			echo 'khong';
		}
	}

	public function getLyric(){
		$json = [];
		echo '{';
		echo "\"loibaihat\":";
		$this->model->load("BaiHat");
		$result = $this->model->BaiHat->getLyric($_POST['id']);

		if ($result == 0) {
			http_response_code(200);
			array_push($json, [
				"loibaihat" => $result 
			]);
		}else {
			http_response_code(401);
			array_push($json, [
				"loibaihat" => "false"
			]);
		}
		echo json_encode($json);
		echo '}';
	}

}
 ?>
