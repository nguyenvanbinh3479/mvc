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
		$this->model->load('BaiHat');
		$list_baihat = $this->model->BaiHat->topFiveMusic();

		if (isset($list_baihat[0]->id)) {
			echo json_encode($list_baihat, JSON_UNESCAPED_UNICODE);
		}else {
			echo 'khong';
		}

	}

public function InfoMusic($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT baihats.id, baihats.ten as 'ten_bai_hat', casis.ten as 'ten_ca_si', theloais.ten as 'ten_the_loai', tacgias.ten as 'ten_tac_gia', baihats.anh, baihats.loi_bai_hat, baihats.link FROM baihats, theloais, tacgias, casis WHERE baihats.casi_id = casis.id && baihats.tacgia_id = tacgias.id && baihats.theloai_id = theloais.id && baihats.id = " . $id;

		$result = mysqli_query($conn, $sql);
		$baihat = new BaiHat_Model();

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
		$baihat->id = $row['id'];
		$baihat->casi_id = $row['ten_ca_si'];
		$baihat->theloai_id = $row['ten_the_loai'];
		$baihat->tacgia_id = $row['ten_tac_gia'];
		$baihat->ten = $row['ten_bai_hat'];
		$baihat->anh = $row['anh'];
		$baihat->loi_bai_hat = $row['loi_bai_hat'];
		$baihat->link = $row['link'];

		return $baihat;
	}
}
 ?>
