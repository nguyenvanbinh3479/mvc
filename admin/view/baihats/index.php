<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Danh Sách Bài Hát</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                          <th>STT</th>
                                          <th>Ca Si</th>
                                          <th>Album</th>
                                          <th>The Loai</th>
                                          <th>Tac Gia</th>
                                          <th>Ten</th>
                                          <th>Anh</th>
                                          <th>Loi Bai Hat</th>
                                          <th>Link</th>
                                          <th>Ngay</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($list_baihat as $baihat) { ?>    
                                        <tr>
                                          <td><?php echo increment_once($index); ?></td>
                                            <?php 
                                                $arr = (array) $list_casi;
                                                foreach ($arr as $key => $value) {
                                                    $casi = (array) $value;
                                                    if ($casi['id'] == $baihat->casi_id)   
                                                    echo '<td> '. $casi['ten'] .' </td>';
                                                }
                                            ?>

                                            <?php 
                                                $arr = (array) $list_album;
                                                foreach ($arr as $key => $value) {
                                                    $album = (array) $value;
                                                    if ($album['id'] == $baihat->album_id)   
                                                    echo '<td> '. $album['ten'] .' </td>';
                                                }
                                            ?>

                                            <?php 
                                                $arr = (array) $list_theloai;
                                                foreach ($arr as $key => $value) {
                                                    $theloai = (array) $value;
                                                    if ($theloai['id'] == $baihat->theloai_id)   
                                                    echo '<td> '. $theloai['ten'] .' </td>';
                                                }
                                            ?>
                                            <?php 

                                                $arr = (array) $list_tacgia;
                                                foreach ($arr as $key => $value) {
                                                    $tacgia = (array) $value;
                                                    if ($tacgia['id'] == $baihat->tacgia_id)   
                                                    echo '<td> '. $tacgia['ten'] .' </td>';
                                                }
                                            ?>

                                          <td><?php echo $baihat->ten; ?></td>
                                          <td><img src="<?php echo $baihat->anh; ?>" style="width: 50px; height: 50px;"></img></td>
                                          <td><textarea class="form-control" rows="2" cols="30" disabled> <?php echo $baihat->loi_bai_hat; ?></textarea></td>                                          
                                          <td><?php echo $baihat->link; ?></td>
                                          <td><?php $date = date_create($baihat->ngay); echo date_format($date, "d/m/Y"); ?></td>                                          
                                          <td><a href="admin.php?c=baihat&a=edit&id=<?php echo $baihat->id; ?>">Edit</a></td>
                                          <td><a href="admin.php?c=baihat&a=delete&id=<?php echo $baihat->id; ?>">Delete</a</td>
                                        </tr>
                                      <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn btn-primary" type="submit" style="padding: 12px 0"><a href="admin.php?c=baihat&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>