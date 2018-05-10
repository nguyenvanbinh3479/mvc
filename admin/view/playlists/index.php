<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="black">
                                    <h4 class="title">Danh Sách Playlists</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="">
                                          <th>STT</th>
                                          <th>user</th>
                                          <th>ten</th>
                                          <th>anh</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($list_playlist as $playlist) { ?>    
                                        <tr>
                                          <td><?php echo increment_once($index); ?></td>
                                              <?php 
                                                foreach($list_user as $user){
                                                $arr_playlist = (array)$playlist;
                                                $arr_user = (array)$user;
                                                if($arr_user['id'] == $arr_playlist['user_id']){
                                                ?><td><?php echo $arr_user['email']; ?></td><?php
                                                }
                                              }?>
                                          <td><?php echo $playlist->ten; ?></td>
                                          <td><img src="<?php echo $playlist->anh; ?>" style="width: 50px; height: 50px;"></img></td>      
                                          <td><a href="admin.php?c=playlist&a=edit&id=<?php echo $playlist->id; ?>">Edit</a></td>
                                          <td><a href="admin.php?c=playlist&a=delete&id=<?php echo $playlist->id; ?>">Delete</a></td>
                                        </tr>
                                      <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn" type="submit" style="padding: 12px 0"><a href="admin.php?c=playlist&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>