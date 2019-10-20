<?php
include "../Controller.php";

Class ListController extends Controller{
    public function __construct(){
        parent::__construct();
        $act = isset($_GET["act"])?$_GET["act"]:"";
        switch ($act) {
            case 'cancel':
                $token = isset($_GET["token"])?$_GET["token"]:0;
                $this->Model->execute("update documents set status_id=3 where token='$token'");
                echo "<meta http-equiv='refresh' content='0; URL=controller/manager/index.php?controller=DocManagement/List'>";
                break;
            case 'confirm':
                $token = isset($_GET["token"])?$_GET["token"]:0;
                $this->Model->execute("update documents set status_id=2 where token='$token'");
                echo "<meta http-equiv='refresh' content='0; URL=controller/manager/index.php?controller=DocManagement/List'>";
                break;
        }
        $number = $this->Model->count("select * from documents where status_id = 1");
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
                where documents.status_id = 1"
        );
        include "../../view/manager/document/newdoc.php";
    }
}
new ListController();
?>