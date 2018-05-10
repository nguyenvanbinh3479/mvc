<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $user->id; ?>">
						<input type="hidden" name="c" value="user">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit user</h2>
						</div>
						<div class="row">   		
							<label>Email:</label>
						</div>
						<div class="row">   		
							<input type="text" class="form-control p-2 m-2" name="email" value="<?php echo $user->email; ?>">
						</div>
						<div class="row">   		
							<label>Password:</label>
						</div>
						<div class="row">   	
							<input type="password" class="form-control p-2 m-2" name="password" value="<?php echo $user->password; ?>">
						</div>
						<div class="row">   		
							<label>Role: </label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="role">
                                <?php 
                                $role = $user->role;
                                    if ($role == "admin") {
                                       echo "<option value='$role' selected>admin</option>";
                                       echo "<option value='user'>user</option>";
                                    }else {
                                       echo "<option value='$role' selected>user</option>";
                                       echo "<option value='admin'>admin</option>";
                                    }
                                ?>
							</select>
						</div>
						<div class="row">   		
							<label>Status:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="status">
                                <?php 
                                    $status = $user->status;
                                    $visible = "visible";
                                    if ($status == "visible") {
                                       echo "<option value='$status' selected>visible</option>";
                                       echo "<option value='disable'>disable</option>";
                                    }else {
                                       echo "<option value='$status' selected>disable</option>";
                                       echo "<option value='$visible'>visible</option>";
                                    }
                                ?>
							</select>
						</div>
						<div class="row">   
                            <button class="btn btn-success p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                          
                            <button class="btn btn-success p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=user" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
                    </form>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>