<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/btl/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <title>ShareDocument</title>
</head>

<body>
    <!-- start login/logout -->
    <div class="nav-login d-flex justify-content-end">
        <div>
            <span><a href="#">Đăng nhập</a></span>
            <span>|</span>
            <span><a href="#">Đăng ký</a></span>
        </div>
    </div>
    <!-- end login/logout -->
    <!-- start header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="BTL_HDV/view/pages/home.php">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danh mục lĩnh vực
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Pháp luật</a>
                        <a class="dropdown-item" href="#">Kinh tế</a>
                        <a class="dropdown-item" href="#">Y tế</a>
                        <a class="dropdown-item" href="#">Kỹ thuật</a>
                    </div>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Đăng tài liệu</a> -->
                    <a href="controller/author/index.php?controller=MyDoc/createdoc">
                                 <span class="sub-item">Đăng tài liệu</span>
                              </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tài liệu của tôi</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm tài liệu.."
                    aria-label="Tìm tài liệu">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </nav>
    <!-- end header -->

    <!-- start content -->
    <div class="pg-body">
      <?php
         if(file_exists($controller))
            include $controller;
       ?>
   </div> <!-- pg-body -->
    <!-- end content -->
    <!-- start footer -->
    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4 bg-dark">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold text-white">Nhóm 1</h5>
                    <p class="text-white">
                        Đề tài: chia sẻ dữ liệu theo chuyên ngành.
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold text-white">Thành viên</h5>
                    <p class="text-white">
                        Lê Xuân Mười
                    </p>
                    <p class="text-white ">Vũ Thị Thu Hường</p>
                    <p class="text-white">Nguyễn Chí Công</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Text -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-white">© 2019 Copyright:
            <a href="#"> ShareDocument.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- end footer -->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>