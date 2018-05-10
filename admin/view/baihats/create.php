<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="c" value="baihat">
						<input type="hidden" name="a" value="store">
						<div class="row">   		
							<h2>Create baihat</h2>
						</div>
						<div class="row">   		
							<label>Ca si:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="casi_id">
								<?php foreach ($list_casi as $key => $value) {
									$arr = (array) $value;?>
									<option value="<?php print_r($arr['id']); ?> "> <?php print_r($arr['ten']) ; }?></option>
							</select>
						</div>
						<div class="row">   		
							<label>Album:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="album_id">
								<?php foreach ($list_album as $key => $value) { 
									$arr = (array) $value;?>
									<option value="<?php print_r($arr['id'])?>"> <?php print_r($arr['ten']); }?></option>
							</select>
						</div>
						<div class="row">   		
							<label>The Loai:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="theloai_id">
								<?php foreach ($list_theloai as $key => $value) {
									$arr = (array) $value;?>
									<option value="<?php print_r($arr['id'])?>"><?php print_r($arr['ten']); }?></option>
							</select>
						</div>
						<div class="row">   		
							<label>Tac Gia:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="tacgia_id">
								<?php foreach ($list_tacgia as $key => $value) {
									$arr = (array) $value;?>
									<option value="<?php print_r($arr['id'])?>"><?php print_r($arr['ten']); }?></option>
							</select>
						</div>
						<div class="row">   		
							<label>Ten Bai Hat:</label>
						</div>
						<div class="row">
								<input type="text" class="form-control p-2 m-2" name="ten" required>
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
                            <img id="output" style="width: 300px; height: 200px;"/>
						</div>
						<div class="row">   		
							<label>Loi Bai Hat:</label>
						</div>
						<div class="row">
                            <textarea class="form-control p-2 m-2" name="loi_bai_hat" required></textarea>
						</div>
						<div class="row">   		
							<label >Link:</label>
						</div>
						<div class="row">
                            <input type="file" accept="audio/*" name="link">
						</div>
						<div class="row">   		
							<label>Ngay:</label>
						</div>
						<div class="row">   		
							<input type="date" class="form-control p-2 m-2" name="ngay" required>                            
						</div>
						<div class="row">   
                            <button class="btn btn-primary p-2 m-2" onclick="ntf.showNotification('top','left')">Apply</button>
							<button class="btn btn-primary p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=baihat" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
						</div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>