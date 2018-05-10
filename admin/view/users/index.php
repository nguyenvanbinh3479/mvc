<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Danh Sách Users</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-success">
                                            <th>STT</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        <tbody>
                                            <?php foreach ($list_user as $user) { ?>    
                                                <tr>
                                                    <td><?php echo increment_once($index); ?></td>
                                                    <td><?php echo $user->email; ?></td>
                                                    <td><?php echo $user->password; ?></td>
                                                    <td><?php echo $user->role; ?></td>
                                                    <td><?php echo $user->status; ?></td>
                                                    <td><a href="admin.php?c=user&a=edit&id=<?php echo $user->id; ?>">Edit</a></td>
                                                    <td><a href="admin.php?c=user&a=delete&id=<?php echo $user->id; ?>">Delete</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn btn-success" type="submit" style="padding: 12px 0"><a href="admin.php?c=user&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>