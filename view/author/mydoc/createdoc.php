<div class="row" style="background: #FAFAFA; width: 50%; margin: 20px auto; padding: 20px">
    <div class="col-md-12">
        <form action="controller/author/index.php?controller=MyDoc/createdoc&act=add" method="Post" enctype="multipart/form-data">
            <div id="form1" class="upload-btn-wrapper">
                <button class="btn">CHọn File ...</button>
                <input type="file" id="doc" name="doc" class="doc" onchange="getFile()"/>
            </div>

            <div id='form2' class="col-md m-auto container-signin animated" style="display: none">
                <p class="text-center" style="font-size: 35px; font-family: 'Times New Roman', Times, serif;">Thêm tài
                    liệu mới</p>
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <label for="title">Tiêu đề</label>
                        <input id="title" name="title" type="text" class="form-control input-border-bottom" required
                               style="font-size: 16px; ">
                    </div>
                    <div class="form-group form-floating-label">
                        <label for="summary">Tóm tắt</label>
                        <input id="summary" name="summary" type="text" class="form-control input-border-bottom" required
                               style="font-size: 16px; ">
                    </div>
                    <div class="form-group text-left">
                        <label for="area_name" class="placeholder">Lĩnh vực</label>
                        <select class="form-control" name="area" id="area" style="font-size: 1.6rem; ">
                            <?php foreach ($areas as $key => $area) { ?>
                                <option value="<?php echo $area['id']; ?>"><?php echo $area['area_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group text-left" style="font-size: 15px;">
                        <label for="category" class="placeholder">Ảnh đại diện</label>
                        <input id="image" name="image" type="file" class="input-border-bottom" required>
                    </div>

                    <div class="form-action" style="text-align: center;">
                        <a style="font-size: medium;" href="controller/author/index.php?controller=MyDoc/createdoc"
                           id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Trở về</a>
                        <button style="font-size: medium;" type="submit" class="btn btn-primary btn-rounded btn-login">
                            Thêm lĩnh vực mới
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
<style>
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .btn {
        border: 2px solid gray;
        color: gray;
        background-color: white;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 20px;
        font-weight: bold;
    }

    .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }
</style>

<script>
    // function test() {
    //     document.getElementById("form1").style.display = "none";
    //     document.getElementById("form2").style.display = "inline";
    //     let file = $('#doc')[0].files[0];
    //     if (file){
    //         document.getElementById("title").value = file.name;
    //     }
    // }

    function getFile(){
        if ($('#doc')[0].files[0]) {
            document.getElementById("form1").style.display = "none";
            document.getElementById("form2").style.display = "inline";

            let fullPath = doc.value.split('.')[0];
            let filename = fullPath.replace(/^.*[\\\/]/, '');
            document.getElementById("title").value = filename;

            let extension = doc.value.split('.')[1];
        }
    }
</script>

