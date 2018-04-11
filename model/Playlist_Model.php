<?php
class Playlist_Model{
    public $id;
    public $ten;
	public $user_id;
	public $anh;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from playlists';
		$result = mysqli_query($conn, $sql);
		$list_playlist = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $playlist = new Playlist_Model();
            $playlist->id = $row['id'];
            $playlist->ten = $row['ten'];
			$playlist->user_id = $row['user_id'];
			$playlist->anh = $row['anh'];
			
            $list_playlist[] = $playlist;            
        }

        return $list_playlist;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO playlists (ten, user_id, anh) VALUES (?, ?, ?)");
		$stmt->bind_param("sis", $this->ten, $this->user_id, $this->anh);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from playlists where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $playlist = new playlist_Model();
        $playlist->id = $row['id'];
        $playlist->ten = $row['ten'];
        $playlist->user_id = $row['user_id'];
        $playlist->anh = $row['anh'];

        return $playlist;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from playlists where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE playlists SET ten=?, user_id=?, link=? WHERE id=?");
		$stmt->bind_param("sisi", $this->ten, $this->user_id, $this->link, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}

}