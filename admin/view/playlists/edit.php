<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $playlist->id; ?>">
						<input type="hidden" name="c" value="playlist">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit playlist</h2>
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
                                    $id_user = $playlist->user_id;
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
							<label>ten:</label>
						</div>
						<div class="row">   	
							<input type="text" class="form-control p-2 m-2" name="ten" value="<?php echo $playlist->ten; ?>">
						</div>
						<div class="row">   		
							<label>anh:</label>
						</div>
                        <div class="row">
                            <label class="btn btn-default btn-file">
                                Browse <input type="file" accept="image/*" name="anh" style="display: none;" onchange="loadFile(event)">
                                <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                                </script>
                            </label>
                            <img id="output" style="width: 300px; height: 200px;" src="public/img/playlists/<?php echo $playlist->anh; ?>"/>
						</div>
						<div class="row">   
                            <button class="btn p-2 m-2" type="submit"  onclick="alert('Add success !')">Apply</button>                          
                            <button class="btn p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=playlist" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
                    </form>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>