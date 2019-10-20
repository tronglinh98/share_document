<?php

    session_start();
    include "../../connection.php";
    include "../../model/model.php";
    include "../../config/Token.php";
    // include "../Controller.php"; 
    // class index extends Controller{
    //     public function __construct(){
    //         parent::__construct();            
    //         $areas = $this->Model->fetch("select * from areas");
    //         include "../../view/author/layout/index2.php";
    //     }
    // }
    // new index();
    if(isset($_GET["act"]) && $_GET["act"]=="logout"){
        session_destroy();
        header('location: index.php');
    }
    // if(isset($_SESSION['account'])) {
    //     $controller = isset($_GET["controller"])?"../author/".$_GET["controller"]."Controller.php":"../author/home.php";
    //     include "../../view/author/layout/index2.php";
    // }
    // else {
    //     include "../user/LoginController.php";
    // }
    if(isset($_GET["act"]) && $_GET["act"]=="Register") {
        include "../user/RegisterController.php";
    }
 //Khong dang nhap van xem dc trang chu   
    if(isset($_GET["act"]) && $_GET["act"]=="login") {
        include "../user/LoginController.php";
    } else{
        $controller = isset($_GET["controller"])?"../author/".$_GET["controller"]."Controller.php":"../author/home.php";
        include "../../view/author/layout/index2.php";
    }
    