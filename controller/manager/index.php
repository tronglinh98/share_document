<?php
    session_start();
    include "../../connection.php";
    include "../../model/model.php";
    include "../../config/Token.php";
    if(isset($_GET["act"]) && $_GET["act"]=="logout"){
        session_destroy();
        header('location: index.php');
    }
    if(isset($_SESSION['account'])) {
        $controller = isset($_GET["controller"])?"../manager/".$_GET["controller"]."Controller.php":"../manager/home.php";
        include "../../view/manager/layout/index.php";
    }
    else {
        include "../user/LoginController.php";
    }

    // include "../../connection.php";
    // include "../../model/model.php";
    // $controller = isset($_GET["controller"])?"../manager/".$_GET["controller"]."Controller.php":"../manager/home.php";
    // include "../../view/manager/layout/index.php";