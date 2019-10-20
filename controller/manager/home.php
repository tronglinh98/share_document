<?php
include "../Controller.php";
class home extends Controller{
    public function __construct(){
        parent::__construct();
        include "../../view/manager/Home.php";
    }
}
new home();
?>