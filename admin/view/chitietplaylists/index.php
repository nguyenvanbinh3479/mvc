<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Danh Sách Chi Tiết Playlists</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                          <th>STT</th>
                                          <th>playlist</th>
                                          <th>baihat</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($list_chitietplaylist as $chitietplaylist) { ?>    
                                        <tr>
                                          <td><?php echo increment_once($index); ?></td>
                                            <?php 
                                                $arr = (array) $list_playlist;
                                                foreach ($arr as $key => $value) {
                                                    $playlist = (array) $value;
                                                    if ($playlist['id'] == $chitietplaylist->playlist_id)   
                                                    echo '<td> '. $playlist['ten'] .' </td>';
                                                }
                                            ?>  

                                            <?php 
                                                $arr = (array) $list_baihat;
                                                foreach ($arr as $key => $value) {
                                                    $baihat = (array) $value;
                                                    if ($baihat['id'] == $chitietplaylist->baihat_id)   
                                                    echo '<td> '. $baihat['ten'] .' </td>';
                                                }
                                            ?>  
                                          <td><a href="admin.php?c=chitietplaylist&a=edit&id=<?php echo $chitietplaylist->id; ?>">Edit</a></td>
                                          <td><a href="admin.php?c=chitietplaylist&a=delete&id=<?php echo $chitietplaylist->id; ?>">Delete</a></td>
                                        </tr>
                                      <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn btn-warning" type="submit" style="padding: 12px 0"><a href="admin.php?c=chitietplaylist&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>