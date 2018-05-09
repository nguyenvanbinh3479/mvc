<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $luotnghe->id; ?>">
						<input type="hidden" name="c" value="luotnghe">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit luotnghe</h2>
						</div>
						<div class="row">   		
							<label>Bai Hat:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="baihat_id">
                            <?php
                                foreach ($list_baihat as $value)
                                {
                                    $baihat = (array)$value;
                                    $id = $baihat['id'];
                                    $id_baihat = $luotnghe->baihat_id;
                                    $name = $baihat['ten'];
                                    if ($id_baihat == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {

                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>
							</select>
						</div>
						<div class="row">   		
							<label>User:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="user_id">
                            <?php
                                foreach ($list_user as $value)
                                {
                                    $user = (array)$value;
                                    $id = $user['id'];
                                    $id_user = $luotnghe->user_id;
                                    $name = $user['email'];
                                    if ($id_user == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {

                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>
							</select>
						</div>
						<div class="row">   		
							<label>ngay:</label>
						</div>
						<div class="row">   	
							<input type="date" class="form-control p-2 m-2" name="ngay" value="<?php echo $luotnghe->ngay; ?>">
                            <td></td>
						</div>
						<div class="row">   
                        <button class="btn btn-warning p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                          
                        <button class="btn btn-warning p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=luotnghe" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					</div>
                    </form>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>