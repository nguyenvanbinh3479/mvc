<?php 
class BaiHat_Model{
	public $id;
	public $ten;
	public $anh;
	public $casi_id;
	public $album_id;
	public $theloai_id;
	public $link;
	
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
            $baihat->ten = $row['ten'];
			$baihat->anh = $row['anh'];
			$baihat->casi_id = $row['casi_id'];
			$baihat->album_id = $row['album_id'];
			$baihat->theloai_id = $row['theloai_id'];
			$baihat->link = $row['link'];
            $list_baihat[] = $baihat;            
        }

        return $list_baihat;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO baihats (ten, anh, casi_id, album_id, theloai_id, link) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiiis", $this->ten, $this->anh, $this->casi_id, $this->album_id, $this->theloai_id, $this->link);
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
        $baihat->ten = $row['ten'];
		$baihat->anh = $row['anh'];
		$baihat->casi_id = $row['casi_id'];
        $baihat->album_id = $row['album_id'];
		$baihat->theloai_id = $row['theloai_id'];
		$baihat->link = $row['link'];

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
		$stmt = $conn->prepare("UPDATE baihats SET ten=?, anh=?, casi_id=?, album_id=?, theloai_id=?, link=? WHERE id=?");
		$stmt->bind_param("ssiiisi", $this->ten, $this->anh, $this->casi_id,,$this->album_id, $this->theloai_id, $this->link, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}

}
