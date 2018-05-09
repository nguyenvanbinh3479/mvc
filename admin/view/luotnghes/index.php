<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Danh Sách Lượt Nghe</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>STT</th>
                                            <th>BaiHat</th>
                                            <th>User</th>
                                            <th>ngay</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list_luotnghe as $luotnghe) { ?>    
                                                <tr>
                                                    <td><?php echo increment_once($index); ?></td>
                                                    <?php 
                                                        foreach($list_baihat as $baihat){
                                                        $arr_luotnghe = (array)$luotnghe;
                                                        $arr_baihat = (array)$baihat;
                                                        if($arr_baihat['id'] == $arr_luotnghe['baihat_id']){
                                                        ?><td><?php echo $arr_baihat['ten']; ?></td><?php
                                                        }
                                                    }?>
                                                    <?php 
                                                        foreach($list_user as $user){
                                                        $arr_luotnghe = (array)$luotnghe;
                                                        $arr_user = (array)$user;
                                                        if($arr_user['id'] == $arr_luotnghe['user_id']){
                                                        ?><td><?php echo $arr_user['email']; ?></td><?php
                                                        }
                                                    }?>
                                                    <td><?php $date = date_create($luotnghe->ngay); echo date_format($date, "d/m/Y"); ?></td>
                                                    <td><a href="admin.php?c=luotnghe&a=edit&id=<?php echo $luotnghe->id; ?>">Edit</a></td>
                                                    <td><a href="admin.php?c=luotnghe&a=delete&id=<?php echo $luotnghe->id; ?>">Delete</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn btn-warning" type="submit" style="padding: 12px 0"><a href="admin.php?c=luotnghe&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>