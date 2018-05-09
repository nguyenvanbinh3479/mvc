<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!'); 

class Login_Controller extends Base_Controller
{

    public function index()
    {        
        // if(isset($_POST['email']) && isset($_POST['password'])){
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
        //     //kiem tra co ton tai khong
        //     $query = mysqli_query($conn,"SELECT email, password, role, status FROM users WHERE email='$email'");
    
        //     if(mysqli_num_rows($query) == 0){
        //         echo  "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //         exit;
        //     }
        //     //lay mat khau trong database
        //     $row = mysqli_fetch_array($query);
        //     //so sanh mat khau
        //     if($password != $row['password']){
        //         echo "<p>Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //         exit;
        //     }
    
        //     if($row['role'] != 'admin'){
        //         echo "<p>bạn không có quyền truy cập. Vui lòng quay lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //         exit;
        //     }
    
        //     if($row['status'] != 'visible'){
        //         echo "<p>Tài khoản của bạn đã bị chặn. Vui lòng quay lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //         exit;
        //     }
    
        //     //luu ten dang nhap
        //     $_SESSION['email'] = $email;
            
        //     $sql = "select email, password from users";     
        //     $query = $conn -> query($sql);
        //     if(mysqli_num_rows($query)){
        //         header('location: admin.php?c=home');
        //     }
        //     else{
        //         echo "error";
        //     }
        // }

        $this->model->load('User');
        $this->model->User->login($email, $password);
        $user = new User_Model();
        
        
        // Load view
        $this->view->load('login/login');
    }
}