<!DOCTYPE html>
<html class="no-js">
<head>
   <base href="http://localhost/btl/">
   <meta charset="utf-8">
   <title>Home</title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
   <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
   <link href='public/assets/font-face/helvetica.css' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="public/assets/css/bootstrap.css">
   <!-- <link rel="stylesheet" href="public/assets/css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="public/assets/css/atlantis.min.css">
   <link rel="stylesheet" href="public/assets/css/vendor/validation-engine.css">
   <link rel="stylesheet" type="text/css" href="public/assets/plugins/responsiveslides/responsiveslides.css">
   <link rel="stylesheet" href="public/assets/css/style.css">
   <link rel="stylesheet" href="public/assets/fonts/simple-line-icons.css">
   <link rel="stylesheet" href="public/assets/fonts/elegant-icons.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.css">
   <script src="public/assets/js/modernizr-2.6.2.min.js"></script>

   <link href="/dist/css/btr-menu.css" rel="stylesheet" />
</head>
<body style="background-color: #eeeeee;" class="home-v4">
<div class="boxed-layout">
   <header>
      <div id="top-bar">
         <div class="container">
            <div class="float-left" style="margin-left: -12rem">
               <div id="top-contacts">
                  <ul class="list-inline">
                     <li class="hidden-xs">
                        <i class="icon-call-in"></i>
                        <span>+(84) 966 773 898</span>
                     </li>
                     <li class="hidden-xs">
                        <a href="your%40email.html">
                           <i class="icon-envelope"></i>
                           <span class="hidden-xs">thuhuong1998hy@gmail.com</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="btn-group float-right">
               <div class="float-right" style="margin-left: 60rem">
                 
                  <?php if(isset($_SESSION['account'])){ ?>
                  <ul class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <li class="btn-group">
                           <a href="#" class="pm_item visible-xs">
                              <i class="icon-bag"></i> (2)
                           </a>
                        </li>
                     <li class="btn-group">
                     <a  href="index.php?controller=MyDoc/createdoc" class="pm_item" data-toggle="dropdown" title="login">
                        <i class="icon-login"></i>
                        <span class="hidden-sm hidden-xs"><?php echo $_SESSION['user_name'] ?></span>
                     </a></li>
                 </ul>
                 <div class="dropdown-menu col-sm-12" style="width: 200px; ">
                     <div class="dd-wrapper">
                        <div id="dd_login">
                           <div class="form-group text-center">
                             <a href="controller/author/index.php?controller=MyDoc/createdoc">Đăng tài liệu</a>
                           </div>
                        </div>
                        <div class="dd-delimiter"></div>
                        <div class="form-group text-center">
                           <a href="controller/author/index.php?controller=MyDoc/listdoc">Sản phẩm của tôi</a>
                        </div>
                        <div class="dd-delimiter"></div>
                        <div class="form-group text-center">
                           <a href="controller/author/index.php?act=logout">Đăng xuất</a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
               <?php }else{ ?>
                     <!-- <li class="btn-group" >
                        <a href="#" class="pm_item visible-xs">
                           <i class="icon-bag"></i> (2)
                        </a>
                     </li> -->
                     <div class="btn-group" style="border: 1px solid #000;">
                        <a  href="controller/author/index.php?act=login">Đăng nhập</a>
                     </div>
                     <div class="btn-group">
                        <a  href="controller/author/index.php?controller=register">Đăng ký</a>
                     </div>
                 </ul>
               </div>
            </li>
            <?php } ?>
               </ul>
            </div>
           </div>
         </div>
         </div>
      </div>
      </div>   
      <!-- top bar end -->
      <!-- header bar begin -->
      <div id="header-bar" style="background: #e8e8e8">
         <div class="container" style="background-image: url('banner5.jpg'); max-width: 100%; ">
            <div class="row">
               <div id="header-logo" class="col-md-6 col-sm-12">
                  <p style="font-size: 50px; width: 500px; ">ShareDocument</p>
               </div>
            </div>
         </div>
      <!-- header bar end -->
      <!-- main menu begin -->
      <div class="top-menu" style="text-align: center; background: #65B4CB;">
         <div class="container">
            <nav class="main-menu">
               <ul class="nav-menu" style="">
                  
                  <li class="nav-item" style="width: 200px; ">
                     <a href="controller/author/index.php" style="color: black; "><i class="icon-user"></i>Trang chủ</a>
                  </li>
                  <li class="nav-item"  style="width: 200px">
                     <a href="index.php" style="color: black;" ><i class="icon-screen-desktop"></i>Lĩnh vực</a>

                     <!-- <div class="float-right">
                       <div class="dropdown-menu col-sm-12">
                           <ul class="dd-wrapper">
                              <li class="form-group text-center">
                                 <a href="Controller/Guest/index.php?controller=GuestBuy/Create">Kinh tế</a>
                              </li>                             
                              <div class="dd-delimiter"></div>
                              <li class="form-group text-center">
                                 <a href="Controller/Guest/index.php?controller=GuestBuy/List">Kỹ thuật</a>
                              </li>
                              <div class="dd-delimiter"></div>
                              <li class="form-group text-center">
                                 <a href="Controller/Guest/index.php?act=logout">Giáo dục</a>
                              </li>
                           </ul>
                        </div>
                     </div> -->

                     <div class="float-right">
                       <div class="dropdown-menu col-sm-12">
                           <ul class="dd-wrapper">
                              <?php foreach ($areas as $key => $area) { ?>
                                    <li class="form-group text-center" value="<?php echo $area['id']; ?>"><?php echo $area['area_name']; ?>

                                 </li>
                                  <?php } ?>
                           </ul>
                        </div>
                     </div>
                  </li>

                  <li class="nav-item"  style="width: 200px">
                     <a href="controller/author/index.php?controller=MyDoc/listdoc" style="color: black;" ><span><i class="icon-user-female"></i>Tài liệu của tôi</span></a>
                  </li>
                  
                  <li  style="width: 200px"><!-- <a href="dangbai.html">Đăng tài liệu</a> -->
                     <a href="controller/author/index.php?controller=MyDoc/createdoc" style="color: black;" >
                        <span class="sub-item">Đăng tài liệu</span>
                     </a>
                  </li>
                  
               </ul>
            </nav>
         </div>
      </div>
      <!-- main menu end -->
      <!-- mobile menu begin -->
      <div class="mobile-menu">
         <nav>
            <div class="mobile-menu-button">
               MENU
               <a href="#" class="mobile-menu-toggler"><span></span><span></span><span></span></a>
            </div>
            <div class="mobile-menu-body">
               <div class="mobile-menu-search clearfix">
                  <form action="http://shop.azelab.com/">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                     </div>
                     <button type="submit" class="btn btn-default"><i class="icon-magnifier"></i></button>
                  </form>
               </div>
               <p><i class="icon-call-in"></i> + 1 (800) 2364 332 23 16</p>
               <p><i class="icon-envelope"></i>your@email.com</p>
            </div>
         </nav>
      </div>
      <!-- mobile menu end -->
   </header>
   <div class="pg-body">
      <?php
         if(file_exists($controller))
            include $controller;
       ?>
   </div> <!-- pg-body -->

   <footer>
      <div id="footer-3" style="background-color: grey !important">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-12">
                     <div class="information-box mobile-collapse">
                        <div class="title-type-2 mobile-collapse-header" style="color: black; font-style: weight; ">
                           Loại tài liệu
                        </div>
                        <ul class="list-unstyled mobile-collapse-body">
                           <li>
                              <a href="category.html">
                                 Tài liệu mới
                              </a>
                           </li>
                           <li>
                              <a href="category.html">
                                 Nhiều lượt xem
                              </a>
                           </li>
                           <li>
                              <a href="category.html">
                                 Nhiều lượt download
                              </a>
                           </li>
                           <li>
                              <a href="category.html">
                                 Tài liệu miễn phí
                              </a>
                           </li>
                           <li>
                              <a href="contact.html">
                                 Tài liệu hay
                              </a>
                           </li>
                        </ul>      
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-12">
                  </div>
               </div>
            </div>
         
      </div>
      <!-- footer-5 begin -->
      <div id="footer-5" style="background-color: black !important">
            <div class="container">
               <p class="copyright" style="font-weight: bold;">
                  © 2019 sharedoc.com<i class="icon_heart"></i> by Vũ Thị Thu Hường</a>
               </p>
            </div>
         
      </div>
   </footer>
</div> 
   <div class="modal fade" id="product-added" tabindex="-1" role="dialog" aria-labelledby="product-added" aria-hidden="true">
     <div class="modal-dialog modal-md">
       <div class="modal-content">
         <div class="modal-header">
            <a href="#" class="modal-close" data-dismiss="modal" aria-hidden="true"><i class="icon_close"></i></a>
            <h4 class="modal-title">Item was added to your shopping cart</h4>
         </div>
         <div class="modal-body">
            <div id="wishlist-product-group-modal" class="dropdown-product-list">
               <div class="dd-product-group" id="pr11">
                  <div class="dd-product-box pull-left">
                     <a href="#" title="product name">
                        <img src="public/assets/images/pr_2-small.jpg" alt="product name">
                     </a>
                  </div>
                  <div class="dd-product-desc pull-left">
                     <a class="title">Beautiful Fit Velvet Sweater For Him</a>
                     <div class="qty">1 x <span class="active">$700.00</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="row no-gutter">
               <div class="col-xs-6">
                  <button type="button" class="btn btn-md btn-third-col btn-w100">View Cart</button>
               </div>
               <div class="col-xs-6">
                  <button type="button" class="btn btn-md btn-third-col btn-w100" data-dismiss="modal">Continue Shopping</button>
               </div>
            </div>
         </div>
       </div>
     </div>
   </div>

   <div class="modal fade" id="info-box" tabindex="-1" role="dialog" aria-labelledby="product-added" aria-hidden="true">
     <div class="modal-dialog modal-md">
       <div class="modal-content">
         <div class="modal-header">
            <a href="#" class="modal-close" data-dismiss="modal" aria-hidden="true"><i class="icon_close"></i></a>
            <h4 class="modal-title">Information</h4>
         </div>
         <div class="modal-body modal-body-info">
            <p>Beautiful Fit Velvet Sweater has been added to comparison list</p>
         </div>
       </div>
     </div>
   </div>
   <script src="public/assets/js/jquery-1.11.0.min.js"></script>
   <script src="public/assets/js/jquery-ui-1.10.4.custom.min.js"></script>
   <script src="public/assets/js/bootstrap.min.js"></script>
   <script src="public/assets/js/jquery.bxslider.min.js"></script>
   <script src="public/assets/js/jquery-accessibleMegaMenu.js"></script>
   <script src="public/assets/js/jquery.validationEngine.js"></script>
   <script src="public/assets/js/jquery.validationEngine-en.js"></script>

   <script src="public/assets/plugins/responsiveslides/responsiveslides.min.js"></script>

   <script src="public/assets/js/plugins.js"></script>
   <script src="public/assets/js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>