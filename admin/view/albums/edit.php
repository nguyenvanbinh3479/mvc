<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $album->id; ?>">
						<input type="hidden" name="c" value="album">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit album</h2>
						</div>
						<div class="row">   		
							<label>anh:</label>
						</div>
						<div class="row">
                            <label class="btn btn-warning btn-file">
                                Browse <input type="file" accept="image/*" name="anh" style="display: none;" onchange="loadFile(event)">
                                <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                                </script>
                            </label>
                            <img id="output" style="width: 300px; height: 200px;" src="<?php echo $album->anh; ?>"/>
						</div>
						<div class="row">   		
							<label>ten:</label>
						</div>
						<div class="row">   	
							<input type="text" class="form-control p-2 m-2" name="ten" value="<?php echo $album->ten; ?>">
						</div>
						<div class="row">   		
							<label>casi:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="casi_id">
                                <?php
                                foreach ($list_casi as $value)
                                {
                                    $casi = (array)$value;
                                    $id = $casi['id'];
                                    $id_casi = $album->casi_id;
                                    $name = $casi['ten'];
                                    if ($id_casi == $id) {
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
							<label>theloai:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="theloai_id">
                                <?php
                                foreach ($list_theloai as $value)
                                {
                                    $theloai = (array)$value;
                                    $id = $theloai['id'];
                                    $id_theloai = $album->theloai_id;
                                    $name = $theloai['ten'];
                                    if ($id_theloai == $id) {
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
							<label>Ngay:</label>
						</div>
						<div class="row">   	
							<input type="date" class="form-control p-2 m-2" name="ngay" value="<?php echo $album->ngay; ?>">
						</div>
						<div class="row">   
                            <button class="btn btn-warning p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                           
                            <button class="btn btn-warning p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=album" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>