<?php 
	include "../Controller.php";

	Class AddController extends Controller{
		function create_priview($file) {
			
		}

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
							$detail=$_POST["detail"];

							$doc=$_FILES['doc']['name'];
							$sizedoc = $_FILES['doc']['size'];
						    $typedoc = $_FILES['doc']['type'];
						    $image = null;
						    
						   // $file_name = basename($doc, '.pdf');

						    // Convert this document
						    // Each page to single image
						   // $image = new imagick('uploads/'.$file_name.'.pdf');

						    $output_format = "jpeg"; 
						    $preview_page = "1"; 
						    $resolution = "300"; 
						    $output_file = "imagick_preview.jpg"; 

						    $path = '1571208692UML1.pdf';

						    $image = new Imagick(); 
						    $image->setResolution( $resolution, $resolution ); 
						    //$image->readImage( $doc . "[" . ($preview_page - 1) . "]" );
						    
						    $image->readImage( $path);  
						    $image->setImageFormat( $output_format ); 
						    file_put_contents( $output_file, $image, FILE_USE_INCLUDE_PATH );
						    echo file_get_contents($output_file);
						    return 1;
			

						    $max_size = 100000;
							$user_id = $id[0]["id"];
							$area_id = $_POST["area"];
							$status_id = 1;

						    if(isset($doc) && !empty($doc)){
						    	// lay duoi file
						    	$extension = substr($doc, strpos($doc, '.') + 1);
						    	$location = "public/files_up/";
						 		$url = $location.time().$doc;
						    	//kiem tra xem co dung la file hinh anh hay khong
						    	move_uploaded_file($_FILES["doc"]["tmp_name"], "../../".$location.time().$doc);

						    	if(($extension == "pdf" || $extension == "doc") && $extension == $sizedoc<=$max_size){
						        	if(move_uploaded_file($_FILES["doc"]["tmp_name"], "../../".$location.time().$doc)){
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
						   //  	$location = "public/images_up/";
						 		// $url = $location.time().$image;
						   //  	//kiem tra xem co dung la file hinh anh hay khong
						   //  	if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $extension == $size<=$max_size){
						   //      	if(move_uploaded_file($_FILES["image"]["tmp_name"], "../../".$location.time().$image)){
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
						    $token = new Token();
							//$token = sha1($name).md5($name.$password).$token->generate(15);

							$this->Model->execute("insert into documents values ('','$title','$summary','$detail','$doc','$image','$user_id','$area_id','2019-09-09','2019-09-09','$status_id','fyguihj12378fghj')");
							echo "<meta http-equiv='refresh' content='0; URL=controller/author/index.php?controller=MyDoc/createdoc'>";
							//header("location: /controller/author/index.php?controller=MyDoc/createdoc");
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