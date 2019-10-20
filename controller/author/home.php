<?php
// include "../Controller.php";
// class home extends Controller{
//     public function __construct(){
//         parent::__construct();
//         include "../../view/author/home.php";
//     }
// }
// new home();
include "../Controller.php";

class home extends Controller
{
    public function __construct()
    {
        parent::__construct();


        $number = $this->Model->count("select * from documents");
        // so ban ghi hien thi tren 1 trang
        $num_page = 10;
        // so trang can hien thi
        $page_show = ceil($number / $num_page);
        // lay trang hien tai tren thanh url
        $page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] : 1;
        $form = ($page - 1) * $num_page;

        $data = null;
        if (isset($_GET["area_id"])) {
            $data = $this->Model->fetch("
				select * from documents
				inner join areas
				on documents.area_id = areas.id  
				inner join users
				on documents.author_id = users.id
				where status_id = 2 && area_id = {$_GET["area_id"]}"
            );
        } else {
            $data = $this->Model->fetch("
				select * from documents
				inner join areas
				on documents.area_id = areas.id  
				inner join users
				on documents.author_id = users.id
				where status_id = 2"
            );
        }
        include "../../view/author/home.php";
    }
}

new home();
?>