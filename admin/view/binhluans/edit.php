<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <form method="post" action="admin.php">
                        <input type="hidden" name="id" value="<?php echo $binhluan->id; ?>">
                        <input type="hidden" name="c" value="binhluan">
                        <input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit binhluan </h2>
						</div>
						<div class="row">   		
							<label>bai hat: </label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="baihat_id">
                                <?php
                                foreach ($list_baihat as $value)
                                {
                                    $baihat = (array) $value;
                                    $id = $baihat['id'];
                                    $baihat_id = $binhluan->baihat_id;
                                    $name = $baihat['ten'];
                                    if ($baihat_id == $id) {
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
							<label>user: <?php print_r($binhluan->ngay)?></label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="user_id">
                                <?php
                                foreach ($list_user as $value)
                                {
                                    $user = (array) $value;
                                    $id = $user['id'];
                                    $user_id = $binhluan->user_id;
                                    $name = $user['email'];
                                    if ($user_id == $id) {
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
							<label>noi dung:</label>
						</div>
						<div class="row">   	
                        <textarea class="form-control" rows="10" cols="10" class="form-control p-2 m-2" name="noi_dung"><?php echo $binhluan->noi_dung; ?></textarea>
						</div>
                        
						<div class="row">   		
							<label>ngay:</label>
						</div>
						<div class="row">   	
							<input type="date" class="form-control p-2 m-2" name="ngay" value="<?php echo $binhluan->ngay; ?>">
						</div>

						<div class="row">   
                            <button class="btn btn-danger p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                          
                            <button class="btn btn-danger p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=binhluan" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>