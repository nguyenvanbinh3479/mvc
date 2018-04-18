<?php
class Album_Model{
  public $id;
  public $anh;
  public $ten;
  public $thongtin;

    public function all(){
    $conn = FT_Database::instance()->getConnection();
    $sql = 'select * from tacgias';
    $result = mysqli_query($conn, $sql);
    $list_album = array();

    if(!$result)
      die('Error: '.mysqli_query_error());

    while ($row = mysqli_fetch_assoc($result)){
            $tacgia = new Album_Model();
            $tacgia->id = $row['id'];
            $tacgia->anh = $row['anh'];
            $tacgia->ten = $row['ten'];
            $tacgia->thongtin = $row['thongtin'];
            $list_tacgia[] = $tacgia;
        }

        return $list_tacgia;
  }

  public function save(){
    $conn = FT_Database::instance()->getConnection();
    $stmt = $conn->prepare("INSERT INTO tacgias (anh, ten, thongtin) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssi", $this->anh, $this->ten, $this->thongtin);
    $rs = $stmt->execute();
    $this->id = $stmt->insert_id;
    $stmt->close();
    return $rs;
  }

  public function findById($id){
    $conn = FT_Database::instance()->getConnection();
    $sql = 'select * from tacgia where id='.$id;
    $result = mysqli_query($conn, $sql);

    if(!$result)
      die('Error: ');

    $row = mysqli_fetch_assoc($result);
        $album = new Album_Model();
        $album->id = $row['id'];
        $album->anh = $row['anh'];
        $album->ten = $row['ten'];
        $album->thongtin = $row['thongtin'];

        return $album;
  }

  public function delete(){
    $conn = FT_Database::instance()->getConnection();
    $sql = 'delete from tacgias where id='.$this->id;
    $result = mysqli_query($conn, $sql);

    return $result;
  }

  public function update(){
    $conn = FT_Database::instance()->getConnection();
    $stmt = $conn->prepare("UPDATE albums SET anh=?, ten=?, thongtin=? WHERE id=?");
    $stmt->bind_param("ssii", $this->anh, $this->ten, $this->thongtin, $_POST['id']);
    $stmt->execute();
    $stmt->close();
  }

}
