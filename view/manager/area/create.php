<div class="page-header">
    <h4 class="page-title">Thêm lĩnh vực mới</h4>
    <?php if(isset($_GET["err"]) && $_GET["err"]=="false"){ ?>
        <div class="alert alert-danger">
            Bạn phải nhập vào tên lĩnh vực
        </div>
    <?php } ?>
</div>

<div class="row">
    <div class="col-md-12">
        <form action="controller/manager/index.php?controller=AreaManagement/create&act=add" method="Post">
           <div class="col-md-8 m-auto container-signin animated">
                <h3 class="text-center">Thêm lĩnh vực mới</h3>
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input  id="fullname" name="name" type="text" class="form-control input-border-bottom" required>
                        <label for="fullname" class="placeholder">Tên lĩnh vực</label>
                    </div>
                    <div class="form-action">
                        <a href="controller/manager/index.php?controller=AreaManagement/list" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Trở về</a>
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Thêm lĩnh vực mới
                        </button>
                    </div>
                </div>
            </div> 
        </form>
    </div>
    
</div>

