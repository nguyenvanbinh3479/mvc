<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $chitietplaylist->id; ?>">
						<input type="hidden" name="c" value="chitietplaylist">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit chitietplaylist</h2>
						</div>
						<div class="row">   		
							<label>playlist:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="playlist_id">
                                <?php
                                foreach ($list_playlist as $value)
                                {
                                    $playlist = (array) $value;
                                    $id = $playlist['id'];
                                    $playlist_id = $chitietplaylist->playlist_id;
                                    $name = $playlist['ten'];
                                    if ($playlist_id == $id) {
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
							<label>baihat:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="baihat_id">
                                <?php
                                foreach ($list_baihat as $value)
                                {
                                    $baihat = (array) $value;
                                    $id = $baihat['id'];
                                    $baihat_id = $chitietplaylist->baihat_id;
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
                            <button class="btn btn-warning p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                          
                            <button class="btn btn-warning p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=chitietplaylist" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>