<?php

include "./../Controller.php";

class DetailDocController extends Controller {
    public function __construct() {
        parent::__construct();

        $doc_id = isset($_GET["doc_id"])?$_GET["doc_id"]:"";

        $data = $this->Model->fetch("
				select * from documents
				left join users
				on documents.author_id = users.id 
                where documents.id = '$doc_id'"
        );
        include "../../view/author/mydoc/view_doc.php";
    }
}
new DetailDocController();