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
						if(isset($_POST["title"])){
							$title = $_POST["title"];
							$summary=$_POST["summary"];
							//$detail=$_POST["detail"];
							$detail="";

							$doc=$_FILES['doc']['name'];
							$sizedoc = $_FILES['doc']['size'];
						    $typedoc = $_FILES['doc']['type'];
						    $uploadDoc=0;

							$user_id = $id[0]["id"];
							$area_id = $_POST["area"];
							$status_id = 1;

							$max_size = 10485760;
						    $image = $_FILES['image']['name'];
						    $size = $_FILES['image']['size'];
						    $type = $_FILES['image']['type'];
						    $uploadIm=0;

						    if(isset($doc) && !empty($doc)){
						    	// lay duoi file
						    	$extension = substr($doc, strpos($doc, '.') + 1);
						    	$location2 = "public/files_up/";
						 		$url = $location2.time().$doc;
						    	//kiem tra xem co dung la file hinh anh hay khong

						    	if(($extension == "pdf" || $extension == "doc") && $extension == $sizedoc<=$max_size){
						        	if(move_uploaded_file($_FILES["doc"]["tmp_name"], "../../".$location2.time().$doc)){
						            	$smsg = "Upload thành công !";
						        	}else{
						            	$fmsg = "Upload Thất bại";
						        	}
							    	}else{
							        	$fmsg = "Tệp tải lên không quá 100 KiloBytes";
							    	}
						    }else{
						        $fmsg = "Chọn file upload";
						    }

						   //  if(isset($image) && !empty($image)){
						   //  	// lay duoi file
						   //  	$extension = substr($image, strpos($image, '.') + 1);
						   //  	$location2 = "public/images_up/";
						 		// $url_im = $location2.time().$image;
						   //  	//kiem tra xem co dung la file hinh anh hay khong
						   //  	if(($extension == "jpg" || $extension == "png")){
						   //      	if(move_uploaded_file($_FILES["image"]["tmp_name"], "../../".$location2.time().$image)){
						   //          	$smsg = "Upload thành công !";
						   //      	}else{
						   //          	$fmsg = "Upload Thất bại";
						   //      	}
							  //   	}else{
							  //       	$fmsg = "Chỉ hỗ trợ file JPEG và dung lượng không quá 100 KiloBytes";
							  //   	}
						   //  }else{
						   //      $fmsg = "Chọn file upload";
						   //  }



						    if(isset($image) && !empty($image)){
						    	// lay duoi file
						    	$extension = substr($image, strpos($image, '.') + 1);
						    	$location2 = "public/images_up/";
						 		$url_im = $location2.time().$image;
						    	
							    if(($extension=="jpg" || $extension=="jpeg" || $extension=="png")){
							    	$uploadIm=1;
							    }else{
							    	echo "Bạn chỉ được upload ảnh";
							    	$uploadIm=0;
							    }

							    if($size<=10485760){
							    	$uploadIm=1;
							    }else{
							    	echo "Kích thước ảnh tối đa là 10MB";
							    	$uploadIm=0;
							    }
							    if($uploadIm==0){
							    	echo "Đã xảy ra lỗi";
							    }
							    else{
							    	if(move_uploaded_file($_FILES["image"]["tmp_name"], "../../".$location2.time().$image)){
						            	$smsg = "Upload thành công !";
						        	}else{
						            	$fmsg = "Upload Thất bại";
						        	}
							    }

						    }else{
						        $fmsg = "Chọn file upload";
						    }

						    $token = new Token();
							//$token = sha1($name).md5($name.$password).$token->generate(15);

							$this->Model->execute("insert into documents values ('','$title','$summary','$detail','$url','$url_im','$user_id','$area_id','2019-09-09','2019-09-09','$status_id','fyguihj12378fghj')");
							echo "<meta http-equiv='refresh' content='0; URL=controller/author/index.php?controller=MyDoc/createdoc'>";
							//header("locatio n: /controller/author/index.php?controller=MyDoc/createdoc");
							break;
						}
				}
			}
			$areas = $this->Model->fetch("select * from areas");
			include "../../view/author/mydoc/createdoc.php";
		}
	}
	new AddController();
 ?>