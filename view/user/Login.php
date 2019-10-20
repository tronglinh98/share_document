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
<body class="login">
    <div class="wrapper wrapper-login">
    <form action="" method="Post">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Đăng nhập</h3>
            <div class="login-form">
                <div class="form-group form-floating-label">
                    <input id="username" name="email" type="email" class="form-control input-border-bottom" required>
                    <label for="username" class="placeholder">Email</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Password</label>
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
                <div class="row form-sub m-0">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label" for="rememberme">Remember Me</label>
                    </div>
                    
                    <a href="index.php?controller=Auth/Reset" class="link float-right">
                    Forget Password ?</a>
                </div>
                <div class="form-action mb-3">
                    <input type="submit" class="btn btn-primary btn-rounded btn-login" value="Sign In">
                </div>
                <div class="login-account">
                    <span class="msg">Don't have an account yet ?</span>
                    <a href="#" id="show-signup" class="link">Sign Up</a>
                </div>
            </div>
        </div>
    </form>
    </div>
    <script src="public/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="public/assets/js/core/popper.min.js"></script>
    <script src="public/assets/js/core/bootstrap.min.js"></script>
    <script src="public/assets/js/atlantis.min.js"></script>
    <script type="text/javascript" src="public/embed/themeracde8.js?id=75937"></script>
</body>

</html>