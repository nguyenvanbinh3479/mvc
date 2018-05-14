<?php 
class BaiHat_Model{
	public $id;
	public $casi_id;
	public $album_id;
	public $theloai_id;
	public $tacgia_id;
	public $ten;
	public $anh;
	public $loi_bai_hat;
	public $link;
	public $ngay;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from baihats';
		$result = mysqli_query($conn, $sql);
		$list_baihat = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
			$baihat = new BaiHat_Model();
            $baihat->id = $row['id'];
			$baihat->casi_id = $row['casi_id'];
			$baihat->album_id = $row['album_id'];
			$baihat->theloai_id = $row['theloai_id'];
			$baihat->tacgia_id = $row['tacgia_id'];
            $baihat->ten = $row['ten'];
			$baihat->anh = $row['anh'];
			$baihat->loi_bai_hat = $row['loi_bai_hat'];
			$baihat->link = $row['link'];
			$baihat->ngay = $row['ngay'];
			$list_baihat[] = $baihat;  
        }
        return $list_baihat;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO baihats (casi_id, album_id, theloai_id, tacgia_id, ten, anh, loi_bai_hat, link, ngay) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("iiiisssss", $this->casi_id, $this->album_id, $this->theloai_id, $this->tacgia_id, $this->ten, $this->anh, $this->loi_bai_hat, $this->link, $this->ngay);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from baihats where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $baihat = new BaiHat_Model();
        $baihat->id = $row['id'];
		$baihat->casi_id = $row['casi_id'];
        $baihat->album_id = $row['album_id'];
		$baihat->theloai_id = $row['theloai_id'];
		$baihat->tacgia_id = $row['tacgia_id'];
        $baihat->ten = $row['ten'];
		$baihat->anh = $row['anh'];
		$baihat->loi_bai_hat = $row['loi_bai_hat'];
		$baihat->link = $row['link'];
		$baihat->ngay = $row['ngay'];

        return $baihat;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from baihats where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE baihats SET casi_id=?, album_id=?, theloai_id=?, tacgia_id=?, ten=?, anh=?, loi_bai_hat=?, link=?, ngay=? WHERE id=?");
		$stmt->bind_param("iiiisssssi", $this->casi_id, $this->album_id, $this->theloai_id, $this->tacgia_id, $this->ten, $this->anh, $this->loi_bai_hat, $this->link, $this->ngay, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}


    public function topFiveMusic(){
    	$list_baihat = array();
     	$conn = FT_Database::instance()->getConnection(); 
     	$sql = "SELECT baihats.id,baihats.ten as 'tenbaihat',  casis.ten as 'tencasi', baihats.anh, baihats.link from baihats, luotnghes, casis, tacgias WHERE baihats.id = luotnghes.baihat_id && baihats.casi_id = casis.id && tacgias.id = baihats.tacgia_id GROUP BY luotnghes.baihat_id ORDER BY COUNT(baihats.id) DESC limit 5";

     	$result = mysqli_query($conn, $sql);
     	if(!$result)
			die('Error: '.mysqli_query_error());

		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)){
			$baihat = new BaiHat_Model();
	        $baihat->id = $row['id'];
	        $baihat->ten = $row['tenbaihat'];
			$baihat->casi_id = $row['tencasi'];
			$baihat->anh = $row['anh'];
			$baihat->link = $row['link'];
			array_push($list_baihat, $baihat); 
	        }
	        return $list_baihat;
		}else {
			return 0;
		}
		
    }

    public function newMusic(){
    	$list_baihat = array();
    	$conn = FT_Database::instance()->getConnection(); 
    	$sql = "";
    	
    	$result = mysqli_query($conn, $sql);
     	if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
			$baihat = new BaiHat_Model();
	        $baihat->id = $row['id'];
	        $baihat->ten = $row['tenbaihat'];
			$baihat->casi_id = $row['tencasi'];
			$baihat->anh = $row['anh'];
			$baihat->link = $row['link'];
			$baihat->ngay = $row['ngay'];
			array_push($list_baihat, $baihat); 
        }
        return $list_baihat;
    }

    public function findSongsFromPlaylist($id){
		$conn = FT_Database::instance()->getConnection();

		$sql ="SELECT baihats.id, baihats.ten, baihats.anh, casis.ten as 'ten_casi', baihats.link FROM baihats, chitietplaylists, casis WHERE chitietplaylists.baihat_id = baihats.id && baihats.casi_id = casis.id && chitietplaylists.playlist_id = " . $id;
		
		$result = mysqli_query($conn, $sql);
		$baihats = array();

		if(!$result)
			die('Error: ');

		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
		    $baihat = new BaiHat_Model();
		    $baihat->id = $row['id'];
		    $baihat->ten = $row['ten'];
		    $baihat->casi_id = $row['ten_casi'];
		    $baihat->anh = $row['anh'];
		    $baihat->link = $row['link'];

		    array_push($baihats, $baihat);
		}
		
		}else {
			return 0;
		}
		return $baihats;
	}

	public function InfoMusic($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT baihats.id, baihats.ten as 'ten_bai_hat', casis.ten as 'ten_ca_si', theloais.ten as 'ten_the_loai', tacgias.ten as 'ten_tac_gia', baihats.anh, baihats.loi_bai_hat, baihats.link, baihats.ngay FROM baihats, theloais, tacgias, casis WHERE baihats.casi_id = casis.id && baihats.tacgia_id = tacgias.id && baihats.theloai_id = theloais.id && baihats.id = " . $id;

		$result = mysqli_query($conn, $sql);
		$baihat = new BaiHat_Model();

		if(!$result)
			die('Error: ');

		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$baihat->id = $row['id'];
			$baihat->casi_id = $row['ten_ca_si'];
			$baihat->theloai_id = $row['ten_the_loai'];
			$baihat->tacgia_id = $row['ten_tac_gia'];
			$baihat->ten = $row['ten_bai_hat'];
			$baihat->anh = $row['anh'];
			$baihat->loi_bai_hat = $row['loi_bai_hat'];
			$baihat->link = $row['link'];
			$baihat->ngay = $row['ngay'];

			return $baihat;
		}else {
			return 0;
		}
		
	}

	public function showBaiHatYeuThichFromID($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT baihats.id, baihats.ten, casis.ten as 'ten_ca_si', baihats.anh, baihats.link FROM baihats, casis, yeuthichs WHERE baihats.casi_id = casis.id && baihats.id = yeuthichs.baihat_id && yeuthichs.user_id = " . $id;

		$result = mysqli_query($conn, $sql);
		$baihats = array();

		if(!$result)
			die('Error: ');
		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
		    $baihat = new BaiHat_Model();
		    $baihat->id = $row['id'];
		    $baihat->ten = $row['ten'];
		    $baihat->casi_id = $row['ten_ca_si'];
		    $baihat->anh = $row['anh'];
		    $baihat->link = $row['link'];

		    array_push($baihats, $baihat);
			}
		return $baihats;
		}else {
			return 0;
		}

	}

	public function LuotNgheTuIDBaiHat($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT COUNT(luotnghes.user_id) as 'luotnghe' FROM luotnghes WHERE luotnghes.baihat_id = " . $id;
		$result = mysqli_query($conn, $sql);
		if(!$result)
			die('Error: ');
		if ($result->num_rows > 0) {
			$result = mysqli_fetch_assoc($result);
			return $result['luotnghe'];
		}else {
			return -1;
		}
	}

	public function LuotThichTheoIDBaiHat($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT COUNT(yeuthichs.user_id) as 'luotthich' FROM yeuthichs WHERE yeuthichs.baihat_id = " . $id;
		$result = mysqli_query($conn, $sql);
		if(!$result)
			die('Error: ');
		if ($result->num_rows > 0) {
			$result = mysqli_fetch_assoc($result);
			return $result['luotthich'];
		}else {
			return -1;
		}
	}

	public function getLyric($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT loi_bai_hat FROM baihats WHERE id = " . $id;
	
		$result = mysqli_query($conn, $sql);
		if(!$result)
		die('Error: ');

		if ($result->num_rows > 0) {
			$result = mysqli_fetch_assoc($result);
			return $result['loi_bai_hat'];	
		}else {
			return 0;
		}
	}

}
 ?>