<?php 
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

	/**
	 * summary
	 */
	class Playlist_Controller extends Base_Controller
	{
	   
	   public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			//get plasylist
			$json = [];
			$list_playlist = array();			
			$this->model->load('PlayList');
			$list_playlist = $this->model->PlayList->all();
			if (isset($list_playlist[0]->id)) {
				http_response_code(200);
				for ($i = 0; $i < count($list_playlist); $i++) {
					array_push($json, [
						"id" => $list_playlist[$i]->id,
						"user_id" => $list_playlist[$i]->user_id,
						"ten" => $list_playlist[$i]->ten,
						"anh" => $list_playlist[$i]->anh,
						"ngay" => $list_playlist[$i]->ngay
					]);
				}
			}else {
				http_response_code(401);
				array_push($json, [
					'message' => 'false'
				]);
			}
			echo json_encode($list_playlist, JSON_UNESCAPED_UNICODE);
		}

		public function findSongsFromPlaylist(){
			$json =[];
			$baihats = array();
			$this->model->load('BaiHat');
			$baihats = $this->model->BaiHat->findSongsFromPlaylist($_POST['id']);
			if (count($baihats) > 0) {
				echo '{';
				echo "\"playlist\":";
				http_response_code(200);
				
				for ($i = 0; $i < count($baihats); $i++) {
					array_push($json, [
					"id" => $baihats[$i]->id,
					"ten" => $baihats[$i]->ten,
					"casi_id" => $baihats[$i]->casi_id,
					"anh" => $baihats[$i]->anh,
					"link" => $baihats[$i]->link
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

	}

 ?>