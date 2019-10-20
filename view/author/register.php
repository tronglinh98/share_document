<section>
	<div class="container">
        <div class="clearfix"></div>
        <div class="row d-flex justify-content-center my-3">
            <div class="col-sm-6 bg-white rounded">
                <h3 class="text-center">Sign Up</h3>
                <?php if(isset($_GET["err"]) && $_GET["err"]=="false"){ ?>
                <div class="alert alert-danger">
                    Nhập lại mật khẩu không đúng
                </div>
                <?php }elseif (isset($_GET["err"]) && $_GET["err"]=="false2") {?>
                <div class="alert alert-danger">
                    Email đã tồn tại
                </div>
                <?php } ?>
                <form action="Controller/Guest/index.php?controller=Register&act=add" method="Post">
                    <div class="login-form">
                        <div class="form-group">
                            <label for="name" class="placeholder">Họ tên</label>
                            <input  id="name" name="name" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="placeholder">Email</label>
                            <input  id="email" name="email" type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="placeholder">Số điện thoại</label>
                            <input  id="phone" name="phone" type="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder">Password</label>
                            <input  id="password" name="password" type="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword" class="placeholder">Confirm Password</label>
                            <input  id="confirmpassword" name="confirmpassword" type="password" class="form-control input-border-bottom" required>
                        </div>
                        <div class="form-group align-center">
                            <a href="index.php" id="show-signin" class="btn btn-danger btn-link btn-login mr-3">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-rounded btn-login">Đăng ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>