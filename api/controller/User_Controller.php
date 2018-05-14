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
		echo '{';
		echo "\"user\":";
		if (isset($_POST['email']) && isset($_POST['password'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$this->model->load('User');
			$result = $this->model->User->login($email, $password);

			if (isset($result->id)) {
				http_response_code(200);
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
				echo json_encode($json, JSON_UNESCAPED_UNICODE);

				echo '}';
			}
			
		}
	}

	public function register()
	{

		if (isset($_POST['email']) && isset($_POST['password'])) {
			$json = [];
			$this->model->load('User');
	        $this->model->User->email = $_POST['email'];
	        $this->model->User->password = $_POST['password'];
	        //$this->model->User->role = $_POST['role'];
	        //$this->model->User->status = $_POST['status'];
	        //$this->model->User->token = csrf_token();
	        $id = $this->model->User->save();

	        if (isset($id) && $id != 0) {
	        	http_response_code(200);
	        	array_push($json, [
	        		"id" => $id
	        	]);
	        }else {
	        	http_response_code(401);
	        	array_push($json, [
	        		'message' => 'false'
	        	]);
	        }
	        echo json_encode($json, JSON_UNESCAPED_UNICODE);
		}
	}

	public function newPassword()
	{
		$json = [];

		$this->model->load('User');
		$result = $this->model->User->newPassword($_POST['id'], $_POST['password']);

		if ($result > 0) {
			echo "{";
			echo "\"newPassword\":";
			http_response_code(200);
			array_push($json, [
				"message" => "true"
			]);
		}else {
			http_response_code(401);
			array_push($json, [
				'message' => 'false'
			]);
		}
		echo json_encode($json, JSON_UNESCAPED_UNICODE);
		echo '}';
	}

}

/* End of file User_Controller.php */
/* Location: ./application/controllers/User_Controller.php */