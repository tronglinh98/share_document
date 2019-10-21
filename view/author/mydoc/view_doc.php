<!DOCTYPE html>
<html>

<body>
<div align="center">
    <h1><b><?php echo $data[0]['title'] ?></b></h1>

    <h3>By <?php echo $data[0]['user_name'] ?></h3>
    <h3>Upload on <?php echo $data[0]['update_at'] ?></h3>

    <div>
        <i class="icon icon-eye"></i>
        <span> <?php echo $data[0]['view_count'] ?></span>
    </div>
    <div class="centered">
            <iframe src="<?php echo $data[0]['file_upload'] ?>#aligner=0" height="700px" width="70%">
        </iframe>
    </div>
</div>
</body>
</html>