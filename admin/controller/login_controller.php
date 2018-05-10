<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!'); 

class Login_Controller extends Base_Controller
{
    
    public function index()
<<<<<<< HEAD
    {
            $show = "";
            $status = 4;
        if(isset($_POST['email']) && isset($_POST['password'])){

            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
            //kiem tra co ton tai khong
            $conn = FT_Database::instance()->getConnection();
            $query = mysqli_query($conn,"SELECT email, password, role, status FROM users WHERE email='$email'");
    
            if(mysqli_num_rows($query) == 0){
                $show = "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.";
                $status = 0;
            }
            //lay mat khau trong database
            $row = mysqli_fetch_array($query);
            //so sanh mat khau
            if($password != $row['password']){
                $show = "Mật khẩu không đúng. Vui lòng nhập lại.";
                $status = 1;
            }
    
            if($row['role'] != 'admin'){
                $show = "bạn không có quyền truy cập. Vui lòng quay lại.";
                $status = 2;
            }
    
            if($row['status'] != 'visible'){
                $show = "Tài khoản của bạn đã bị chặn. Vui lòng quay lại.";
                $status = 3;
            }
            
            //luu ten dang nhap
            $_SESSION['email'] = $email;
            
            $sql = "select email, password from users";     
            $query = $conn -> query($sql);
            if(mysqli_num_rows($query)){
                // header('location: admin.php?c=home');
            }
            else{
                echo "error";
            }
            
        }
        $data = array(
            'title' => 'index',
            'show' => $show,
            'status' => $status
        );

        
=======
    {        
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
            //kiem tra co ton tai khong
		    $conn = FT_Database::instance()->getConnection();
            $query = mysqli_query($conn,"SELECT email, password, role, status FROM users WHERE email='$email'");
            
            if(mysqli_num_rows($query) == 0){
                echo  "<script>alert('Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.')</script>";
            }
            else{
                //lay mat khau trong database
                $row = mysqli_fetch_array($query);
                //so sanh mat khau
                if($password != $row['password']){
                    echo "<script>alert('Mật khẩu không đúng. Vui lòng nhập lại.')</script>";
                
                }
                else{
                    if($row['role'] != 'admin'){
                        echo "<script>alert('bạn không có quyền truy cập. Vui lòng quay lại.')</script>";
                    }
                    else{
                        if($row['status'] != 'visible'){
                            echo "<script>alert('Tài khoản của bạn đã bị chặn. Vui lòng quay lại.')</script>";
                        }
                        else{
                             //luu ten dang nhap
                            $_SESSION['email'] = $email;
                                        
                            $sql = "select email, password from users";     
                            $query = $conn -> query($sql);
                            if(mysqli_num_rows($query)){
                                header('location: admin.php?c=home');
                            }
                            else{
                                echo "error";
                            }
                        }
                    }
                }
            }
        }
>>>>>>> d5cff37bf3d6b1a960a8f8f5cad12a70248105a7
        // Load view
        $this->view->load('login/login',$data);
    }
}