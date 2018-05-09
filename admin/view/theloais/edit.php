<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $theloai->id; ?>">
						<input type="hidden" name="c" value="theloai">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit theloai</h2>
						</div>
						<div class="row">   		
							<label>ten:</label>
						</div>
						<div class="row">   		
							<input type="text" class="form-control p-2 m-2" name="ten" value="<?php echo $theloai->ten; ?>">
						</div>
						<div class="row">   		
							<label>anh:</label>
						</div>
                        <div class="row">
                            <label class="btn btn-info btn-file">
                                Browse <input type="file" accept="image/*" name="anh" style="display: none;" onchange="loadFile(event)">
                                <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                                </script>
                            </label>
                            <img id="output" style="width: 300px; height: 200px;" src="<?php echo $theloai->anh; ?>"/>
						</div>
						<div class="row">   
                            <button class="btn btn-info p-2 m-2" onclick="alert('Add success !')">Apply</button>
							<button class="btn btn-info p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=theloai" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
						</div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>