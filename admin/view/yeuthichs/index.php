<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Danh Sách Yêu Thích</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-danger">
                                            <th>STT</th>
                                            <th>baihat</th>
                                            <th>user</th>
                                            <th>Ngay</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($list_yeuthich as $yeuthich) { ?>    
                                            <tr>
                                            <td><?php echo increment_once($index); ?></td>
                                            <?php 
                                                $arr = (array) $list_baihat;
                                                foreach ($arr as $key => $value) {
                                                    $baihat = (array) $value;
                                                    if ($baihat['id'] == $yeuthich->baihat_id)   
                                                    echo '<td> '. $baihat['ten'] .' </td>';
                                                }
                                            ?>
                                            <?php 
                                                $arr = (array) $list_user;
                                                foreach ($arr as $key => $value) {
                                                    $user = (array) $value;
                                                    if ($user['id'] == $yeuthich->user_id)   
                                                    echo '<td> '. $user['email'] .' </td>';
                                                }
                                            ?>
                                                <td><?php $date = date_create($yeuthich->ngay); echo date_format($date, "d/m/Y"); ?></td>                                                                               
                                            <td><a href="admin.php?c=yeuthich&a=delete&baihat_id=<?php echo $yeuthich->baihat_id; ?>&user_id=<?php echo $yeuthich->user_id?>">Delete</a></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn btn-danger" type="submit" style="padding: 12px 0"><a href="admin.php?c=yeuthich&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>