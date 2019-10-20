<?php
	include "../Controller.php";

	class editAreas extends Controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					if($_POST["name"] != ""){
						$name = $_POST["name"];
						$this->Model->execute("update areas set area_name='$name' where id='$id'");
						echo "<meta http-equiv='refresh' content='0; URL=controller/manager/index.php?controller=AreaManagement/list'>";
						break;
					}else{
						echo "<meta http-equiv='refresh' content='0; URL=controller/manager/index.php?controller=AreaManagement/edit&id=$id&err=false'>";
					}				
					default:
						$data = $this->Model->fetchOne("select * from areas where id='$id'");
						break;
			}
			include "../../view/manager/area/edit.php";
		}
	}
	new editAreas();
 ?>