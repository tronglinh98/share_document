<!DOCTYPE html>
<html lang="en">
<head>
   <base href="http://localhost/btl/">
   <meta charset="utf-8">
   <title>Đọc nhiều hơn</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="OneTech shop project">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
   <link rel="stylesheet" type="text/css" href="public/asset/styles/bootstrap4/bootstrap.min.css">
   <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="public/asset/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
   <link rel="stylesheet" type="text/css" href="public/asset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
   <link rel="stylesheet" type="text/css" href="public/asset/plugins/OwlCarousel2-2.2.1/animate.css">
   <link rel="stylesheet" type="text/css" href="public/asset/styles/blog_single_styles.css">
   <link rel="stylesheet" type="text/css" href="public/asset/styles/blog_single_responsive.css">
   <link rel="stylesheet" type="text/css" href="public/asset/styles/myCss.css">

</head>

<body>

<div class="super_container">
   
   <!-- Header -->
   
   <header class="header">

      <!-- Top Bar -->

      <div class="top_bar">
         <div class="container">
            <div class="row">
               <div class="col d-flex flex-row">
                  
                  <div class="top_bar_content ml-auto">
                     
                     <div class="top_bar_user">
                        <div class="user_icon"><img src="public/asset/images/user.svg" alt=""></div>
                        <div><a href="#">Đăng ký</a></div>
                        <div><a href="controller/user/LoginController.php">
                                 <span class="sub-item">Đăng nhập</span>
                              </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>      
      </div>

      <!-- Header Main -->

      <div class="header_main">
         <div class="container">
            <div class="row">

               <!-- Logo -->
               <div class="col-lg-2 col-sm-3 col-3 order-1">
                  <div class="logo_container">
                     <div class="logo"><a href="#">Chiase</a></div>
                  </div>
               </div>

               <!-- Search -->
               <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                  <div class="header_search">
                     <div class="header_search_content">
                        <div class="header_search_form_container">
                           <form action="#" class="header_search_form clearfix">
                              <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                              <!-- <div class="custom_dropdown">
                                 <div class="custom_dropdown_list">
                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                    <i class="fas fa-chevron-down"></i>
                                    <ul class="custom_list clc">
                                       <li><a class="clc" href="#">All Categories</a></li>
                                       <li><a class="clc" href="#">Computers</a></li>
                                       <li><a class="clc" href="#">Laptops</a></li>
                                       <li><a class="clc" href="#">Cameras</a></li>
                                       <li><a class="clc" href="#">Hardware</a></li>
                                       <li><a class="clc" href="#">Smartphones</a></li>
                                    </ul>
                                 </div>
                              </div> -->
                              <button type="submit" class="header_search_button trans_300" value="Submit"><img src="../../public/asset/images/search.jpg" alt=""></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      
      <!-- Main Navigation -->

      <nav class="main_nav">
         <div class="container">
            <div class="row">
               <div class="col">
                  
                  <div class="main_nav_content d-flex flex-row">

                     <!-- Categories Menu -->

                     <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                           <div class="cat_burger"><span></span><span></span><span></span></div>
                           <div class="cat_menu_text">Danh mục lĩnh vực</div>
                        </div>
                        <ul class="cat_menu">
                           <li><a href="blog.html">Pháp luật <i class="fas fa-chevron-right ml-auto"></i></a></li>
                           <li><a href="kinhte.html">Kinh tế<i class="fas fa-chevron-right"></i></a></li>
                           <li  >
                              <a href="kythuat.html">Kỹ thuật<i class="fas fa-chevron-right"></i></a>
                               
                           </li>
                           <li><a href="yte.html">Y tế<i class="fas fa-chevron-right"></i></a></li>
                           
                        </ul>
                        
                     </div>

                     <!-- Main Nav Menu -->

                     <div class="main_nav_menu " id="kc">
                        <ul class="standard_dropdown main_nav_dropdown">
                           <li><a href="index.php">Trang chủ<i class="fas fa-chevron-down"></i></a></li>
                           <li><!-- <a href="dangbai.html">Đăng tài liệu</a> -->
                              <a href="controller/author/index.php?controller=MyDoc/createdoc">
                                 <span class="sub-item">Đăng tài liệu</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">Tài liệu của tôi<i class="fas fa-chevron-down"></i></a>
                           </li>
                           <!-- <li><a href="#">Giới thiệu<i class="fas fa-chevron-down"></i></a></li> -->
                           <li><a href="#">Liên hệ<i class="fas fa-chevron-down"></i></a></li>
                        </ul>
                     </div>

                     <!-- Menu Trigger -->

                     <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                           <div class="menu_burger">
                              <div class="menu_trigger_text">menu</div>
                              <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </nav>
      
      <!-- Menu -->

      <div class="page_menu">
         <div class="container">
            <div class="row">
               <div class="col">
                  
                  <div class="page_menu_content">
                     
                     <div class="page_menu_search">
                        <form action="#">
                           <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                        </form>
                     </div>
                     <ul class="page_menu_nav">
                        <li class="page_menu_item has-children">
                           <a href="#">Language<i class="fa fa-angle-down"></i></a>
                           <ul class="page_menu_selection">
                              <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                           </ul>
                        </li>
                        <li class="page_menu_item has-children">
                           <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                           <ul class="page_menu_selection">
                              <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                           </ul>
                        </li>
                        <li class="page_menu_item">
                           <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item has-children">
                           <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                           <ul class="page_menu_selection">
                              <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                              <li class="page_menu_item has-children">
                                 <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                 <ul class="page_menu_selection">
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                 </ul>
                              </li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                           </ul>
                        </li>
                        <li class="page_menu_item has-children">
                           <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                           <ul class="page_menu_selection">
                              <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                           </ul>
                        </li>
                        <li class="page_menu_item has-children">
                           <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                           <ul class="page_menu_selection">
                              <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                              <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                           </ul>
                        </li>
                        <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                     </ul>
                     
                     <div class="menu_contact">
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </header>

<div class="main-panel">
      <div class="pg-body">
         <?php
            if(file_exists($controller))
              include $controller;
          ?>
      </div>
</div>
   <!-- Blog Posts -->



   <!-- Footer -->

   <footer class="footer" style="background: #D8D8D8; ">
      <div class="container">
         <div class="row">

            <div class="col-lg-3 footer_col">
               <div class="footer_column footer_contact">
                  <div class="logo_container">
                     <div class="logo"><a href="#">Share Document</a></div>
                  </div>
                  <div class="footer_phone">+38 068 005 3570</div>
                  <div class="footer_contact_text">
                     <p>198 nhổn</p>
                     <p>Từ Liêm hà nội</p>
                  </div>
                  
               </div>
            </div>

            <div class="col-lg-2 offset-lg-2">
               <div class="footer_column">
                  <div class="footer_title">Giới thiệu</div>
                  <ul class="footer_list">
                     <li><a href="#">Nhóm 1</a></li>
                     <li><a href="#">Vũ Thị Thu Hường</a></li>
                     <li><a href="#">Nguyễn Chí Công</a></li>
                     <li><a href="#">Lê Xuân Mười</a></li>
                     <li><a href="#"></a></li>
                  </ul>
                  <div class="footer_subtitle"></div>
                  <ul class="footer_list">
                     <li><a href="#"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </footer>

</div>

<script src="public/asset/js/jquery-3.3.1.min.js"></script>
<script src="public/asset/styles/bootstrap4/popper.js"></script>
<script src="public/asset/styles/bootstrap4/bootstrap.min.js"></script>
<script src="public/asset/plugins/greensock/TweenMax.min.js"></script>
<script src="public/asset/plugins/greensock/TimelineMax.min.js"></script>
<script src="public/asset/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="public/asset/plugins/greensock/animation.gsap.min.js"></script>
<script src="public/asset/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="public/asset/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="public/asset/plugins/parallax-js-master/parallax.min.js"></script>
<script src="public/asset/plugins/easing/easing.js"></script>
<script src="public/asset/js/blog_single_custom.js"></script>
</body>

</html>