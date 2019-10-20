<?php
include "../Controller.php";
// include "../../Model/Model.php";
    class login extends Controller{
        public function __construct(){
         parent::__construct();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $check = $this->Model->fetchOne("select * from users where email='$email'");
            if( isset($check["email"]) ) {
                if(($password) == $check["password"] ){
                    $_SESSION["account"] = $email;
                    $_SESSION["user_name"] = $check["user_name"];
                    if($check["role_id"] == 1){
                        header("location: ../admin/");
                    }else{
                        if($check["role_id"] == 2){
                            header("location: ../manager/");
                        }else{
                            header("location: ../author/");
                        }
                    }
                }
            }
        }
            include "../../view/user/Login.php";
        }
    }
    new login();
?>