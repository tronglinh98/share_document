
<div class="row" style="background: #FAFAFA; width: 60%; margin: 20px auto; ">
    <div class="col-md-12">
        <form action="controller/author/index.php?controller=MyDoc/createdoc&act=add" method="Post" enctype="multipart/form-data" >
           <div class="col-md-8 m-auto container-signin animated">
                <h3 class="text-center">Thêm tài liệu mới</h3>
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <label for="title" class="placeholder">Title</label>
                        <input  id="title" name="title" type="text" class="form-control input-border-bottom" required>                        
                    </div>
                    <div class="form-group form-floating-label">
                        <label for="summary" class="placeholder">Summary</label>
                        <input  id="summary" name="summary" type="text" class="form-control input-border-bottom" required>                       
                    </div>
                    <div class="form-group form-floating-label">
                        <label for="detail" class="placeholder">Detail</label>
                        <input  id="detail" name="detail" type="text" class="form-control input-border-bottom" required>                        
                    </div>
                    <div class="form-group text-left">
                        <label for="area_name" class="placeholder">Area</label>
                        <select class="form-control" name="area" id="area" style="width: 200px;">
                            <?php foreach ($areas as $key => $area) { ?>
                              <option value="<?php echo $area['id']; ?>" style= "width: 100% !important"><?php echo $area['area_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group text-left">
                        <label for="doc" class="placeholder">File</label>
                        <input  id="doc" name="doc" type="file" class="input-border-bottom" required>
                    </div>
                    <div class="form-group text-left">
                        <label for="category" class="placeholder">Image</label>
                        <input  id="image" name="image" type="file" class="input-border-bottom" required>
                    </div>

                    <div class="form-action">
                        <a href="controller/author/index.php?controller=MyDoc/createdoc" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Trở về</a>
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Thêm lĩnh vực mới
                        </button>
                    </div>
                </div>
            </div> 
        </form>
    </div>
    
</div>