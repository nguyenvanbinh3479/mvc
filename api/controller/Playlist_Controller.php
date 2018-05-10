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
			$list_playlist = array();			
			$this->model->load('PlayList');
			$list_playlist = $this->model->PlayList->all();
			if (isset($list_playlist[0]->id)) {
				echo json_encode($list_playlist, JSON_UNESCAPED_UNICODE);
			}else {
				echo 'khong';
			}
		}

	}

 ?>