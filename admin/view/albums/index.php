<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Danh Sách Albums</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-success">
                                            <th>STT</th>
                                            <th>anh</th>
                                            <th>ten</th>
                                            <th>casi</th>
                                            <th>theloai</th>
                                            <th>Ngay</th>                                            
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($list_album as $album) { ?>    
                                        <tr>
                                            <td><?php echo increment_once($index); ?></td>
                                          <td><img src="<?php echo $album->anh; ?>" style="width: 50px; height: 50px;"></img></td>                                            
                                            <td><?php echo $album->ten; ?></td>
                                            <?php 
                                            $arr = (array) $list_casi;
                                            foreach ($arr as $key => $value) {
                                                $casi = (array) $value;
                                                if ($casi['id'] == $album->casi_id)   
                                                echo '<td> '. $casi['ten'] .' </td>';
                                            }
                                            ?>
                                            <?php 
                                            $arr = (array) $list_theloai;
                                            foreach ($arr as $key => $value) {
                                                $theloai = (array) $value;
                                                if ($theloai['id'] == $album->theloai_id)   
                                                echo '<td> '. $theloai['ten'] .' </td>';
                                            }
                                        
                                            ?>
                                            <td><?php $date = date_create($album->ngay); echo date_format($date, "d/m/Y"); ?></td>
                                            <td><a href="admin.php?c=album&a=edit&id=<?php echo $album->id; ?>">Edit</a></td>
                                            <td><a href="admin.php?c=album&a=delete&id=<?php echo $album->id; ?>">Delete</a</td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">   
                        <button class="btn btn-warning" type="submit" style="padding: 12px 0"><a href="admin.php?c=album&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>