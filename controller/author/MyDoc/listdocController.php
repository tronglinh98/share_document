<?php
	include "../Controller.php";
	Class ListController extends Controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from documents where token='$id'");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=MyDoc/listdoc'>";
					break;
			}
			if(isset($_SESSION['account'])){
				$email = $_SESSION['account'];
				$id = $this->Model->fetch("select id from users where email = '$email'");
				$user_id = $id[0]["id"];
				$number = $this->Model->count("select * from documents where author_id = '$user_id'");
				// so ban ghi hien thi tren 1 trang
				$num_page = 10;
				// so trang can hien thi
				$page_show = ceil($number/$num_page);
				// lay trang hien tai tren thanh url
				$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;
				$form = ($page-1)*$num_page;
				$data = $this->Model->fetch("
					select * from documents 
					left join areas 
					on documents.area_id = areas.id 
					left join status
					on documents.status_id = status.id
					where author_id = '$user_id'
					"
				);
				include "../../view/author/mydoc/listdoc.php";
			}
			else{
				include "../user/LoginController.php";
			}
		}
	}
	new ListController();
 ?>