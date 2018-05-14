<?php 
class YeuThich_Model{
    public $baihat_id;
    public $user_id;
	public $ngay;
	public $show = "";

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from yeuthichs';
		$result = mysqli_query($conn, $sql);
		$list_yeuthich = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $yeuthich = new YeuThich_Model();
            $yeuthich->baihat_id = $row['baihat_id'];
            $yeuthich->user_id = $row['user_id'];
            $yeuthich->ngay = $row['ngay'];
            $list_yeuthich[] = $yeuthich;            
        }

        return $list_yeuthich;
	}

	public function save(){
	   $conn = FT_Database::instance()->getConnection();
	    if ($this->check_yeuthich_exists($this->baihat_id, $this->user_id) == 0) {
	      $stmt = $conn->prepare("INSERT INTO yeuthichs (baihat_id, user_id, ngay) VALUES (?, ?, ?)");
	      $stmt->bind_param("iis", $this->baihat_id, $this->user_id, $this->ngay);
	      $rs = $stmt->execute();
	      $stmt->close();
	      return true;
	    } else {
	      //$this->delete();
	      return false;
	    }
	}


	public function check_yeuthich_exists($baihat_id, $user_id) {
	    $conn = FT_Database::instance()->getConnection();
	    $stmt = $conn->prepare("SELECT * FROM yeuthichs WHERE baihat_id = ? AND user_id = ?");
	    $stmt->bind_param("ii", $baihat_id, $user_id);
	    $stmt->execute();
	    $stmt->store_result();
	    $stmt->fetch();

	    if ($stmt->num_rows > 0) {
	        return $stmt->num_rows;
	     } else {
	        return 0;
	     }
  	}


    public function num_likes($baihat_id) {
	    $conn = FT_Database::instance()->getConnection();
	    $sql = "SELECT COUNT($baihat_id) as luot_like FROM yeuthichs WHERE baihat_id = $baihat_id";
	    $result = mysqli_query($conn, $sql);
	    if(!$result)
	      die('Error: ');
	    $row = mysqli_fetch_assoc($result);
	    $luot_like = $row['luot_like'];
	    return $luot_like;
  	}

	public function delete($baihat_id, $user_id){
		$conn = FT_Database::instance()->getConnection();
		if ($this->check_yeuthich_exists($this->baihat_id, $this->user_id) > 0){
			$sql = 'delete from yeuthichs where baihat_id = '.$baihat_id.' AND user_id = '.$user_id;
			mysqli_query($conn, $sql);

			return true;
		}else {
			return false;	
		}
	}

}
