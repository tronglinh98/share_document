<?php 
	include "../Controller.php";

	Class AddController extends Controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";

			if(isset($_SESSION['account'])){
				$email = $_SESSION['account'];
				$id = $this->Model->fetch("select id from users where email = '$email'");
			
				switch ($act) {
					case 'add':
						if(isset($_POST["name"])){
							$name = $_POST["name"];
							$user_id = $id[0]["id"];
							$this->Model->execute("insert into areas values ('','$name','$user_id')");
							echo "<meta http-equiv='refresh' content='0; URL=controller/manager/index.php?controller=AreaManagement/list'>";
							break;
						}
						else{
							header("location: controller/manager/index.php?controller=AreaManagement/create&err=false");
						}
						
				}
			}
			
			include "../../view/manager/area/create.php";
		}
	}
	new AddController();
 ?>