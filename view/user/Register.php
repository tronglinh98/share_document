<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themekita.com/atlantis/livepreview/examples/demo1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 12:45:49 GMT -->
<head>
    <base href="http://localhost/btl/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="http://demo.themekita.com/atlantis/livepreview/examples/assets/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="public/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['public/assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/atlantis.min.css">
</head>
<body>
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

    <script src="public/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="public/assets/js/core/popper.min.js"></script>
    <script src="public/assets/js/core/bootstrap.min.js"></script>
    <script src="public/assets/js/atlantis.min.js"></script>
    <script type="text/javascript" src="public/embed/themeracde8.js?id=75937"></script>
</body>

</html>

