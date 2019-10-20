<?php 
	include "../Controller.php";

	class register extends Controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$email = $_POST["email"];
					$mail = $this->Model->fetch("select * from users where email = '$email'");
					$count = 0;
					foreach ($mail as $key => $value) {
						if($email == $value['email']){
							$count = $count + 1;
						}
					}
					$password = md5($_POST["password"]);
					$role_id = 3;
					$password2 = md5($_POST["confirmpassword"]);
					if($password != $password2){
						// echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=register&err=false'>";
						echo "Mật khẩu không chính xác";
						break;
					}elseif ($count != 0){
						// echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=register&err=false2'>";
						echo "Email đã tồn tại";
						break;
					} else{
						$token = new Token();
						$tooken = sha1($name).md5($name.$password).$token->generate(15);
						$this->Model->execute("insert into users(name, email, password, role_id, token) values('$name', '$email', '$password', '$role_id', '$tooken')");
						header("location: ../author/");
						break;
					}
					
			}
			include "../../view/user/register.php";
		}
	}
	new register();
 ?>