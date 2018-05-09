<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="c" value="luotnghe">
						<input type="hidden" name="a" value="store">
						<div class="row">   		
							<h2>Create luotnghe</h2>
						</div>
						<div class="row">   		
							<label>Bai Hat:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="baihat_id">
								<?php foreach ($list_baihat as $key => $value) { 
									$arr = (array) $value;?>
                                    <option value="<?php print_r($arr['id']); ?> "> <?php print_r($arr['ten']);
                                 };?></option>
							</select>
						</div>
						<div class="row">   		
							<label>User:</label>
                        </div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="user_id">
								<?php foreach ($list_user as $key => $value) { 
									$arr = (array) $value;?>
                                    <option value="<?php print_r($arr['id']); ?> "> <?php print_r($arr['email']);
                                 };?></option>
							</select>
						</div>
						<div class="row">   		
							<label>ngay:</label>
						</div>
						<div class="row">   	
							<input type="date" class="form-control p-2 m-2" name="ngay" required>
                            
						</div>
						<div class="row">   
                            <button class="btn btn-warning p-2 m-2"  onclick="ntf.showNotification('top','left')">Apply</button>
							<button class="btn btn-warning p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=luotnghe" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
						</div>
                    </form>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>