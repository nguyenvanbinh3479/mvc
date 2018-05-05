<?php
class Album_Model{
	public $id;
  	public $anh;
	public $ten;
	public $casi_id;
	public $theloai_id;
	public $ngay;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from albums';
		$result = mysqli_query($conn, $sql);
		$list_album = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $album = new Album_Model();
            $album->id = $row['id'];
            $album->anh = 'public/img/albums/'.$row['anh'];
            $album->ten = $row['ten'];
            $album->casi_id = $row['casi_id'];
            $album->theloai_id = $row['theloai_id'];
            $album->ngay = $row['ngay'];
            $list_album[] = $album;            
        }

        return $list_album;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO albums (anh, ten, casi_id, theloai_id, ngay) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("ssii", $this->anh, $this->ten, $this->casi_id, $this->theloai_id, $this->ngay);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from albums where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $album = new Album_Model();
        $album->id = $row['id'];
        $album->anh = 'public/img/albums/'.$row['anh'];
        $album->ten = $row['ten'];
        $album->casi_id = $row['casi_id'];
        $album->theloai_id = $row['theloai_id'];
        $album->ngay = $row['ngay'];
        return $album;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from albums where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE albums SET anh=?, ten=?, casi_id=?, theloai_id=?, ngay=? WHERE id=?");
		$stmt->bind_param("ssiisi", $this->anh, $this->ten, $this->casi_id, $this->theloai_id, $this->ngay, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}
}
