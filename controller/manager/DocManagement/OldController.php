<?php
    include "../Controller.php";

    Class ListController extends Controller{
        public function __construct(){
            parent::__construct();
            $act = isset($_GET["act"])?$_GET["act"]:"";
            // var_dump($_GET["act"]);
            // die();
            switch ($act) {
                case 'delete':
                    $token = isset($_GET["token"])?$_GET["token"]:0;
                    $info = $this->Model->fetchOne("select * from documents where token='$token'");
                    unlink("../../".$info['image']);
                    $this->Model->execute("delete from documents where token='$token'");
                    echo "<meta http-equiv='refresh' content='0; URL=controller/manager/index.php?controller=DocManagement/Old'>";
                    break;
            }
            $number = $this->Model->count("select * from documents where status_id = 2");
            // so ban ghi hien thi tren 1 trang
            $num_page = 10;
            // so trang can hien thi
            $page_show = ceil($number/$num_page);
            // lay trang hien tai tren thanh url
            $page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;
            $form = ($page-1)*$num_page;
            $data = $this->Model->fetch("
                select * from documents
                left join users
                on documents.author_id = users.id
                left join status
                on documents.status_id = status.id
                left join areas
                on documents.area_id = areas.id
                where documents.status_id = 2"
            );
            include "../../view/manager/document/olddoc.php";
        }
    }
    new ListController();
?>