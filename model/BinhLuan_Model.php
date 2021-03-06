<?php 
class BinhLuan_Model{
	public $id;
    public $baihat_id;
    public $user_id;
    public $noi_dung;
    public $ngay;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from binhluans';
		$result = mysqli_query($conn, $sql);
		$list_binhluan = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $binhluan = new BinhLuan_Model();
            $binhluan->id = $row['id'];
            $binhluan->baihat_id = $row['baihat_id'];
            $binhluan->user_id = $row['user_id'];
            $binhluan->noi_dung = $row['noi_dung'];
            $binhluan->ngay = $row['ngay'];
            $list_binhluan[] = $binhluan;            
        }

        return $list_binhluan;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO binhluans (baihat_id, user_id, noi_dung, ngay) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("iiss", $this->baihat_id, $this->user_id, $this->noi_dung, $this->ngay);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from binhluans where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $binhluan = new BinhLuan_Model();
        $binhluan->id = $row['id'];      
        $binhluan->baihat_id = $row['baihat_id'];
        $binhluan->user_id = $row['user_id'];
        $binhluan->noi_dung = $row['noi_dung'];
        $binhluan->ngay = $row['ngay'];
	
        return $binhluan;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from binhluans where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE binhluans SET baihat_id=?, user_id=?, noi_dung=?, ngay=? WHERE id=?");
		$stmt->bind_param("iissi", $this->baihat_id, $this->user_id, $this->noi_dung, $this->ngay, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}
}
