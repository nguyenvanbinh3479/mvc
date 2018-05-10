<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $baihat->id; ?>">
						<input type="hidden" name="c" value="baihat">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit baihat</h2>
						</div>
						<div class="row">   		
							<label>Ca si: </label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="casi_id">
                                <?php
                                foreach ($list_casi as $value)
                                {
                                    $casi = (array) $value;
                                    $id = $casi['id'];
                                    $casi_id = $baihat->casi_id;
                                    $name = $casi['ten'];
                                    if ($casi_id == $id) {
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
							<label>Album:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="album_id">
                                <?php
                                foreach ($list_album as $value)
                                {
                                    $album = (array) $value;
                                    $id = $album['id'];
                                    $album_id = $baihat->album_id;
                                    $name = $album['ten'];
                                    if ($album_id == $id) {
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
							<label>The Loai:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="theloai_id">
                                <?php
                                foreach ($list_theloai as $value)
                                {
                                    $theloai = (array) $value;
                                    $id = $theloai['id'];
                                    $theloai_id = $baihat->theloai_id;
                                    $name = $theloai['ten'];
                                    if ($theloai_id == $id) {
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
							<label>Tac Gia:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="tacgia_id">
                                <?php
                                foreach ($list_tacgia as $value)
                                {
                                    $tacgia = (array) $value;
                                    $id = $tacgia['id'];
                                    $tacgia_id = $baihat->tacgia_id;
                                    $name = $tacgia['ten'];
                                    if ($tacgia_id == $id) {
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
							<label>Ten Bai Hat:</label>
						</div>
						<div class="row">
								<input type="text" class="form-control p-2 m-2" name="ten" value="<?php echo $baihat->ten; ?>">
						</div>
						<div class="row">   		
							<label>Anh:</label>
						</div>
                        <div class="row">
                            <label class="btn btn-primary btn-file">
                                Browse <input type="file" accept="image/*" name="anh" style="display: none;" onchange="loadFile(event)">
                                <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                                </script>
                            </label>
                            <img id="output" style="width: 300px; height: 200px;" src="public/img/songs/<?php echo $baihat->anh; ?>"/>
						</div>
						<div class="row">   		
							<label>Loi Bai Hat:</label>
						</div>
						<div class="row">
                            <textarea class="form-control" rows="10" cols="50" class="form-control p-2 m-2" name="loi_bai_hat"><?php echo $baihat->loi_bai_hat; ?></textarea>
						</div>
						<div class="row">   		
							<label>Link:</label>
						</div>
						<div class="row">
                            <input type="file" accept="audio/*" name="link"><?php echo $baihat->link?>
						</div>
						<div class="row">   		
							<label>Ngay:</label>
						</div>
						<div class="row">   	
							<input type="date" class="form-control p-2 m-2" name="ngay" value="<?php echo $baihat->ngay; ?>">
						</div>
						<div class="row">   
                            <button class="btn btn-primary p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                          
                            <button class="btn btn-primary p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=baihat" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>