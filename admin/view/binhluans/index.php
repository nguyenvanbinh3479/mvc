<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Danh Sách Bình Luận</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-danger">
                                          <th>STT</th>
                                          <th>bai hat</th>
                                          <th>user</th>
                                          <th>noi_dung</th>
                                          <th>ngay</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($list_binhluan as $binhluan) { ?>    
                                          <tr>
                                            <td><?php echo increment_once($index); ?></td>
                                            <?php 
                                                $arr = (array) $list_baihat;
                                                foreach ($arr as $key => $value) {
                                                    $baihat = (array) $value;
                                                    if ($baihat['id'] == $binhluan->baihat_id)   
                                                    echo '<td> '. $baihat['ten'] .' </td>';
                                                }
                                            ?>

                                            <?php 
                                                $arr = (array) $list_user;
                                                foreach ($arr as $key => $value) {
                                                    $user = (array) $value;
                                                    if ($user['id'] == $binhluan->user_id)   
                                                    echo '<td> '. $user['email'] .' </td>';
                                                }
                                            ?>
                                            <td><textarea class="form-control" rows="2" cols="30" disabled> <?php echo $binhluan->noi_dung; ?></textarea></td>
                                            <td><?php $date = date_create($binhluan->ngay); echo date_format($date, "d/m/Y"); ?></td>
                                            <td><a href="admin.php?c=binhluan&a=edit&id=<?php echo $binhluan->id; ?>">Edit</a></td>
                                            <td><a href="admin.php?c=binhluan&a=delete&id=<?php echo $binhluan->id; ?>">Delete</a></td>
                                          </tr>
                                        <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row col-lg-8">   
                            <button class="btn btn-danger" type="submit" style="padding: 12px 0"><a href="admin.php?c=binhluan&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                          </div>
                        </div>
                      </div>

<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>