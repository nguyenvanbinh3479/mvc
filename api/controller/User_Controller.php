<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class User_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function login()
	{
		$json = [];

		if (isset($_POST['email']) && isset($_POST['password'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$this->model->load('User');
			$result = $this->model->User->login($email, $password);

			http_response_code(200);
			if (isset($result->id)) {
				echo '{';
				echo "\"user\":";

				array_push($json, array(
					'id' => $result->id,
					'infor' => array(
						'email' => $result->email,
						'password' => $result->password
						),
					'role' => $result->role,
					'status' => $result->status,
					'token' => $result->token
					)
				);
				echo json_encode($json);

				echo '}';
			}
			
		}
	}

	public function register()
	{

		if (isset($_POST['email']) && isset($_POST['password'])) {

			$this->model->load('User');
	        $this->model->User->email = $_POST['email'];
	        $this->model->User->password = $_POST['password'];
	        //$this->model->User->role = $_POST['role'];
	        //$this->model->User->status = $_POST['status'];
	        //$this->model->User->token = csrf_token();
	        $id = $this->model->User->save();

	        if (isset($id) && $id != 0) {
	        	echo "{\"register_success:[\"\"id:\"$id]}";
	        }else {
	        	echo "{null}";
	        }

		}
	}

	public function newPassword()
	{

		if (isset($_POST['email']) && isset($_POST['password'])) {
			$this->model->load('User');
			$user = $ID = $this->model->User->findByEmail($_POST['email']);

			if (isset($user->id)) {
				$this->model->load('User');
				$this->model->User->id = $user->id;
				$this->model->User->password = $_POST['password'];
				$this->model->User->email = $user->email;
				$this->model->User->role = $user->role;
				$this->model->User->status = $user->status;
				$this->model->User->token = $user->token;

				$this->model->User->update();
			}
		}
	}

}

/* End of file User_Controller.php */
/* Location: ./application/controllers/User_Controller.php */