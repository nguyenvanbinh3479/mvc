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
		$list_baihat = array();
		$json = [];
		$this->model->load('BaiHat');
		$list_baihat = $this->model->BaiHat->topFiveMusic();

		if (isset($list_baihat[0]->id)) {
			echo json_encode($list_baihat, JSON_UNESCAPED_UNICODE);
		}else {
			echo 'khong';
		}

	}
}
 ?>
