<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Danh Sách Ca Sĩ</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-info">
                                            <th>STT</th>
                                            <th>ten</th>
                                            <th>thong_tin</th>
                                            <th>anh</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($list_casi as $casi) { ?>    
                                          <tr>
                                            <td><?php echo increment_once($index); ?></td>
                                            <td><?php echo $casi->ten; ?></td>
                                            <td><textarea class="form-control" rows="2" cols="30" disabled> <?php echo $casi->thong_tin; ?></textarea></td>                                                                                    
                                            <td><img src="<?php echo $casi->anh; ?>" style="width: 50px; height: 50px;"></img></td>
                                            <td><a href="admin.php?c=casi&a=edit&id=<?php echo $casi->id; ?>">Edit</a></td>
                                            <td><a href="admin.php?c=casi&a=delete&id=<?php echo $casi->id; ?>">Delete</a></td>
                                          </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn btn-info" type="submit" style="padding: 12px 0"><a href="admin.php?c=casi&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>