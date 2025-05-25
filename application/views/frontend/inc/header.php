 <!DOCTYPE html>

 <html lang="en">

     <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

     <head>
         <meta charset="utf-8">

         <title>Eye Touch</title>

         <meta property="og:url" content="<?php echo base_url() ?>">

         <link rel="icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap-select.css">
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap-social.css">
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/tether.min.css" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/dataTables.bootstrap.min.css" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap-reboot.min.css" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/rangeslider.css" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/w2ui-1.5.rc1.min.css" />
         <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Fjalla+One&amp;display=swap" rel="stylesheet">
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/new_app1efc.css?v=65ac99a1a9fda" />
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/swal.css">
         <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap-datepicker.css" />
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
             integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
             crossorigin="anonymous" referrerpolicy="no-referrer" />
         <style>
         .mobile-login-toggle {
             height: auto !important;
             max-height: 1000px !important;
             transition: all 0.25s ease-in !important;
             opacity: 1 !important;
         }

         .mobile-nav-link {
             padding-top: 5px !important;
             padding-bottom: 5px !important;
         }

         .mobile-login-opener {
             top: 0;
             right: 0;
             opacity: 0;
             max-height: 0;
             transition: all 0.15s ease-out;
             overflow: hidden;
             position: fixed;
             top: 60px;
             background: #333;
             color: #FFF;
             z-index: 9999;
             width: 300px;
         }

         .list-hidden {
             display: none;
         }

         .cats {
             margin-left: 13px;
         }

         .cats a {
             text-decoration: none;
         }

         .viewall {
             font-style: italic;
         }

         .cat1_bold {
             font-weight: bold;
         }

         .cat3_name .cat-name {
             color: #888;
         }

         .cat1_childs,
         .cat2_childs {
             max-height: 1000px;
             transition: all 0.25s ease-in;
             opacity: 1;
         }

         .cat_hide {
             opacity: 0;
             max-height: 0;
             transition: all 0.15s ease-out;
             overflow: hidden;
         }

         .cat1_name,
         .cat2_name,
         .cat3_name {
             display: flex;
             padding: 8px 0px;
         }

         .cat-name {
             width: 100%;
             font-size: 15px;
             color: #000;
             line-height: 15px;
         }

         .cat-plus {
             padding: 0px 14px 0px 0px;
             line-height: .7rem;
         }

         .cat-header {
             padding-left: 10px;
             font-weight: bold;
             margin-top: 10px;
             margin-bottom: 2px;
             font-size: 1.1rem;
         }

         .jas-menu:hover .sub-menu {
             opacity: 1;
             visibility: visible;
         }

         .campaign {
             color: black;
         }

         .sub-menu {
             position: absolute !important;
             min-width: 100% !important;
             left: 0 !important;
             right: 0 !important;
             margin-top: 0;
             transition: none;
             display: table;
             opacity: 0;
             visibility: hidden;
             text-align: left;
             z-index: 10;
             padding: 0;
             box-shadow: 3px 3px 6px 0 rgb(0 0 0 / 10%);
             white-space: nowrap;
             background: #fff !important;
             height: 100% !important;
             width: calc(50vw);
             top: 85px;
         }

         .jas-menu>li:not(:last-child) {
             border-bottom: 0 solid;
         }

         .sub-menu>li:nth-child(2n) {
             background: #f7f7f7;
             height: 100%;
         }

         .sub-menu li a {
             font-weight: 400;
             font-size: 14px;
             color: #666;
             position: relative;
             text-decoration: none;
         }

         .sub-menu>li>a {
             font-weight: 500;
             font-size: 15px;
             color: #000;
         }

         .jas-menu>li>ul>.sub-column-item {
             display: table-cell;
         }

         .jas-menu ul li {
             line-height: 16px;
             padding: 10px 15px;
         }

         .sub-menu>li {
             display: table-cell;
             padding-left: 10px;
             min-width: 120px;
         }

         .sub-menu li {
             padding-top: 4px !important;
             padding-bottom: 4px !important;
             list-style: none;
         }

         .jas-menu li {
             font-size: 14px;
             list-style: none;
             position: relative;
         }

         .jas-menu .sub-column-item>a {
             color: #222;
             text-transform: uppercase;
             font-weight: 500;
             padding: 6px 0;
         }

         .sub-column-item .sub-column {
             padding: 0;
             left: 250px;
             top: 20%;
             padding-bottom: 15px;
         }

         .jas-menu ul li:not(:last-child) {
             border-bottom: 0 solid;
         }

         .sub-column-item .sub-column>li {
             padding: 6px 0;
         }

         .sub-menu li {
             padding-top: 4px !important;
             padding-bottom: 4px !important;
         }



         .account_ul {
             text-align: left;
             background: #484848;
             list-style: none;
             position: absolute;
             z-index: 9;
             width: 150px;
             right: 23px;
             transition: .3s ease-in;
             display: none;
             padding-left: 15px;
             z-index: 999;
         }

         .account_ul>li:not(:last-child) {
             border-bottom: 1px solid #76daff;
         }

         .account-item {
             color: #FFF;
         }

         .account-item:hover {
             color: #FFF;
         }

         .fab-account {
             cursor: pointer;
         }

         .mobile-nav-sidebar {
             overflow-y: scroll;
             height: calc(100vh - 60px);
             padding-bottom: 100px;
         }

         .mobile-nav-sidebar>.dark {
             background: #666;
             color: #f1f1f1;
             line-height: 25px;
             font-weight: normal;
         }

         .mobile-nav-sidebar>.dark:after {
             line-height: 25px;
         }

         .nav-sidebar-logged-in {
             display: block;
             float: left;
             width: 100%;
             background: #666;
             color: #eee;
             padding-top: 10px;
             padding-bottom: 10px;
             overflow-y: scroll;
             /* position: absolute; */
             top: 140px;
             bottom: 0px;
         }

         .nav-dash-item::after {
             after\ \{\ display: inline-block;
             font: normal normal normal 14px/1 FontAwesome;
             font-weight: normal;
             font-size: 14px;
             line-height: 1;
             font-size: inherit;
             text-rendering: auto;
             -webkit-font-smoothing: antialiased;
             -moz-osx-font-smoothing: grayscale;
             content: "\f054";
             float: right;
             vertical-align: middle;
             line-height: 35px;
             margin-right: 12px;
             font-weight: lighter;
             font-size: small;
             color: #b5b5b5;
         }

         .nav-dash-item {
             color: #FFF;
             line-height: 35px;
             padding-left: 10%;
         }

         .nav-dash-item>a {
             color: #E8E8E8;
             font-size: .9em;
         }

         .nav-dash-item i {
             margin-right: 5px;
             padding: 6px;
             font-size: .8em;
             border-radius: 1em;
             background: #4d4d4d;
             border-top: 1px solid #000;
             border-left: 1px solid #222;
             width: 24px;
             height: 24px;
         }

         .nav-seller {
             padding-bottom: 40px;
         }

         .mobile-nav-sidebar span {
             background: #666;
             color: #c8c8c8;
         }

         .search-home-mobile {
             background: #ddd;
             position: fixed;
             top: 60px;
             width: 100%;
             margin: 0 -10px !important;
             display: none;
             line-height: unset !important;
             white-space: nowrap;
         }

         .mobile-search-bar {
             width: 100%;
             position: relative;
             padding-bottom: 4px;
         }

         .mobile-search-bar span {
             top: 95% !important;
             margin: 0 auto;
             padding: 0px 10px;
             width: 100%;
             font-size: .9em;
         }

         .mobile-search-bar input {
             border-radius: 5px !important;
             border: 0px !important;
         }

         .nav-menu-desktop {
             position: absolute;
             width: 100%;
         }

         .nav-menu-home-mobile {
             position: fixed;
             width: 100%;
         }

         body {
             margin-top: 120px;
         }

         .sub-menu li a:hover {
             color: #04aeef;
         }

         #app-promo-modal .close {
             opacity: 1;
             position: absolute;
             right: 21px;
             top: 10px;
         }

         #app-promo-modal .close span {
             color: #282828;
             font-weight: bold;
             font-size: 40px;
         }

         @media(max-width: 996px) {
             #app-promo-modal .modal-dialog {
                 margin-top: 100px;
             }

             #app-promo-modal .close span {
                 font-size: 30px;
             }

             #app-promo-modal .close {
                 right: 18px;
             }

         }

         @media(max-width: 700px) {
             .mobile-login-opener {
                 width: 60vw;
             }
         }

         .fb-share-button>span {
             height: 24px !important;
         }

         .btn-primary {
             background-color: #007bff !important;
             color: white !important;
         }

         .btn-info {
             background-color: #17a2b8 !important;
             color: white !important;
         }

         .btn-success {
             background-color: #28a745 !important;
             color: white !important;
         }

         .btn-warning {
             background-color: #ffc107 !important;
             color: white !important;
         }

         .btn-danger {
             background-color: #ff0000 !important;
             color: white !important;
         }
         </style>

         <script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>

         <script src="<?php echo base_url() ?>/assets/js/intersection-observer.js"></script>

         <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/newhome2597.css">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/newhome.css">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/slick.css">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/slick-theme.css">

     </head>

     <body>

         <nav class="navbar navbar-light nav-menu-home nav-menu-home-mobile">
             <div class="no-style-link head-nav-link pull-left"
                 style="margin: 0px 7px 0px 7px;font-size: 20px;border-right: 1px solid #efefef;padding-right: 15px; line-height: 53px;"
                 onclick="toggleMobileSidebar(this);" data-open="true">
                 <img src="<?php echo base_url() ?>img/menu_icon.png" style="width: 20px;" class="menu-img-ref">
             </div>
             <a class="no-style-link" href="<?php echo base_url() ?>">
                 <img src="<?php echo base_url() ?>img/I-TOUCH-LOGO-05.png" alt="Home Logo" class="nav-logo mobile-logo"
                     style="display: inline; margin-top: -6px;" />
             </a>
             <div class="head-nav-link pull-right open-mobile-link" style="margin: -3px 14px 0px 7px;font-size: 17px;"
                 href="<?php echo base_url('add_cart') ?>">
                 <i class="fa fa-chevron-down"></i>
                 <i class="fa fa-chevron-up list-hidden"></i>
             </div>
             <a class="no-style-link head-nav-link pull-right" style="margin: -3px 14px 0px 7px;font-size: 17px;"
                 href="<?php echo base_url('add_cart') ?>">
                 <i class="fa fa-shopping-cart"></i>
                 <span class="badge badge-primary shopping-cart-badge"
                     style="font-size: .6rem; font-weight: bold; margin-left: 0;">
                     0
                 </span>
             </a>

             <a class="no-style-link head-nav-link pull-right"
                 style="margin: -3px 14px 0px 7px;font-size: 17px;padding-top: 0px;" href="#" onclick="search_toggle()">
                 <i class="fa fa-search"></i>
             </a>
             <div id="search-home-mobile" class="search-home-mobile">
                 <form action="<?php echo base_url('check_searching_data'); ?>" class="mobile-search-bar" method="post">
                     <input class="nav-text-input alg-search-box form-control" type="text" name="search"
                         placeholder="Search Products by Titles or Tags" />
                     <button type="submit" name="submit_search" class="newhome-search">
                         <i class="fa fa-search"></i>
                     </button>
                 </form>
             </div>
         </nav>
         <aside class="mobile-nav-sidebar">
             <div class="aside-refinement refinement-area">
                 <div class="aside-refinement-box">
                     <div id="aside-current-refinements-layout"></div>
                     <div id="aside-clear-refinements-layout"></div>
                 </div>
             </div>
             <div class="cat-header">
                 Categories
             </div>
             <div id="cats-layout">
                 <?php $category = $this->db->query("Select * from tbl_category where cat_status = 1")->result(); 
                        foreach ($category as $category_value) {?>
                 <div class="cats">
                     <div class="cat1_name">
                         <div class="cat-name"><?php echo $category_value->cat_name;?></div>
                         <div class="cat-plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                     </div>
                     <div class="cat1_childs cat_hide">
                         <?php $sub_category = $this->db->query("Select * from tbl_sub_category where status = 'a' and category_id = '$category_value->cat_id'")->result(); 
                                foreach ($sub_category as $sub_category_value) {?>
                         <div class="cats">
                             <div class="cat2_name">
                                 <a
                                     href="<?php echo base_url('shop/') . url_title($sub_category_value->sub_category_name, '-', true); ?>">
                                     <div class="cat-name viewall"><?php echo $sub_category_value->sub_category_name;?>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <?php }?>
                     </div>
                 </div>
                 <?php }?>


             </div>
         </aside>
         <div class="mobile-login-opener">
             <a class="no-style-link head-nav-link mobile-nav-link" href="<?php echo base_url('login');?>">
                 <div class="pull-left">
                     <div class="row" style="font-size: 1.0rem; font-weight: bold;">Login</div>
                     <div class="row" style="font-size: .9rem; color: #aaaaaa;">Enter Your Account</div>
                 </div>
             </a>
             <a class="no-style-link head-nav-link mobile-nav-link dark" href="track.html">
                 <div class="pull-left">
                     <div class="row" style="font-size: 1.0rem; font-weight: bold;">Track Order</div>
                     <div class="row" style="font-size: .9rem; color: #aaaaaa;">Know Your Order Status</div>
                 </div>
             </a>
         </div>
         <nav class="navbar navbar-light nav-menu-home nav-menu-desktop">
             <div
                 style="width: calc(100% + 20px);height: 35px;background: #f3f3f3;line-height: 35px; margin-left: -10px">
                 <div class="col-lg-2 text-center">
                     <div style="background: var(--green); color: #FFFFFF; width:100%; font-size: .8rem; ">
                         <i class="fa fa-truck" aria-hidden="true"></i>
                         <a style="color: white" href="<?php echo base_url('corporate');?>">Order Bulk</a>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <!-- <div
                         style="background: #333333; color: #fff; text-align: left; font-size: .9rem; font-weight: bold; display: table; margin-left: -15px; padding-right: 15px; padding-left: 15px">
                         <img style="height:30px" src="../img.icons8.com/color/48/000000/flash-on.png" /><a
                             style="color: white;"
                             href="shop1112.html?refinementList%5Bcats%5D%5B0%5D=Mens%20%3E%20Half%20Sleeve%20T-shirt%20%3E%20Printed">EXCLUSIVE
                             T-SHIRTS ON SALE | Limited time only <i class="fa fa-arrow-circle-right"></i></a>
                     </div> -->
                 </div>

                 <div class="col-lg-2 text-center">
                     <!-- <div style="background: #e5e5e5; color: #000; width:100%; font-size: .8rem; cursor:pointer"
                         class="regiontoggle">
                         <span style="color: #000"> Bangladesh </span> &nbsp;
                         <i class="fa fa-angle-down" aria-hidden="true"></i>
                     </div> -->
                 </div>
                 <div class="col-lg-1 text-center small-text" style="padding: 0px"><i class="fa fa-question-circle"
                         aria-hidden="true"></i>
                     <a style="color:#000" href="user-specification.html">Help</a>
                 </div>
                 <?php if (isset($_SESSION['first_name'])) {?>
                 <div class="col-lg-1 fab-account text-center small-text" style="padding: 0px">
                     <a href="<?php echo base_url('My_Account');?>"><i class="fa fa-sign-in" aria-hidden="true"></i>
                         Dashbord</a>
                 </div>
                 <?php }else{?>
                 <div class="col-lg-1 fab-account text-center small-text" style="padding: 0px"
                     onmouseover="accountHover()" onmouseout="accountHoverOut()">
                     <a href="<?php echo base_url('login');?>"><i class="fa fa-sign-in" aria-hidden="true"></i>
                         Login</a>
                     <ul id="account_ul" class="account_ul">
                         <li class="account_li"><a class="account-item" href="<?php echo base_url('login');?>">Login</a>
                         </li>
                         <li class="account_li"><a class="account-item"
                                 href="<?php echo base_url('register');?>">Register</a>
                         </li>
                         <li class="account_li"><a class="account-item"
                                 href="<?php echo base_url('ordertracking');?>">Order
                                 Tracking</a>
                         </li>
                     </ul>
                 </div>
                 <?php   } ?>

             </div>
             <div style="width: 100%; height: 85px; line-height: 85px">
                 <div class="col-lg-2" style="padding: 0px; text-align: center;">
                     <a class="no-style-link" href="<?php echo base_url() ?>">
                         <img src="<?php echo base_url() ?>img/I-TOUCH-LOGO-05.png" alt="Home Logo" class="nav-logo"
                             style="width: 180px; height: auto; vertical-align: middle; max-width: 100%;" />
                     </a>
                 </div>
                 <div class="col-lg-2 text-center jas-menu" style="line-height: 85px;">
                     <a class="no-style-link head-nav-link" href="<?php echo base_url('shop');?>">
                         <div class="row" style="font-size: 1.1rem; font-weight: bold;">Shop <div
                                 style="display:inline">
                                 <svg focusable="false" viewBox="0 0 16 14" width="10" height="10"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd"
                                         d="M.116 4.884l1.768-1.768L8 9.232l6.116-6.116 1.768 1.768L8 12.768.116 4.884z">
                                     </path>
                                 </svg>
                             </div>
                         </div>

                     </a>


                     <ul class="sub-menu">
                         <?php $category = $this->db->query("Select * from tbl_category where cat_status = 1")->result(); 
                        foreach ($category as $category_value) {?>


                         <li class="menu-item menu-item-has-children sub-column-item"><a
                                 href="<?php echo base_url('shop/') . url_title($category_value->cat_name, '-', true); ?>"><?php echo $category_value->cat_name;?></a>
                             <ul class="sub-column">
                                 <?php $sub_category = $this->db->query("Select * from tbl_sub_category where status = 'a' and category_id = '$category_value->cat_id'")->result(); 
                                foreach ($sub_category as $sub_category_value) {?>
                                 <li class="menu-item"><a
                                         href="<?php echo base_url('shop/') . url_title($sub_category_value->sub_category_name, '-', true); ?>"><?php echo $sub_category_value->sub_category_name;?></a>
                                 </li>
                                 <?php }?>
                             </ul>
                         </li>
                         <?php }?>

                     </ul>
                 </div>
                 <div class="col-lg-6">
                     <form method="post" action="<?php echo base_url('check_searching_data'); ?>"
                         class="nav-search-bar">
                         <input class="nav-text-input alg-search-box form-control" type="text" name="search"
                             placeholder="Search Products by Titles or Tags" />
                         <button type="submit" class="newhome-search" name="submit_search">
                             <i class="fa fa-search"></i>
                         </button>
                     </form>
                 </div>
                 <div class="col-lg-2 text-right" style="font-size: 1.5rem; padding: 0px;">

                     <div class="col-lg-6" style="position: relative">
                         <a class="no-style-link head-nav-link" style="position: absolute; top: 0; right: 0;"
                             href="<?php echo base_url('add_cart') ?>">

                             <i class="fa fa-shopping-cart"></i>
                             <span class="badge badge-primary shopping-cart-badge"
                                 style="font-size: .6rem; font-weight: bold; margin-left: 0;">
                                 0
                             </span>
                         </a>
                     </div>
                 </div>

             </div>
         </nav>

         <!-- all Modal  -->

         <!--//Modal3-->


         <style media="screen">
         .ais-tag-item {
             cursor: pointer;
         }

         .products-like-button {
             width: auto;
             position: absolute;
             top: 5px;
             left: 14px;
             height: auto;
             border: 0px;
             background: unset;
         }

         .products-share-button {
             position: absolute;
             top: 0px;
             right: 15px;
             background: unset;
             width: auto;
             border: 0px;
         }

         .products-cart-button {
             width: 100%;
             text-align: center;
             background: #333333;
             padding-top: 5px;
             padding-bottom: 5px;
             border: none;
             cursor: pointer;
             font-weight: 500;
             font-size: 13px;
             color: #FFF;
             position: relative;
             -webkit-transition: .3s ease;
             transition: .3s ease;
         }

         .card-view {
             width: 30%;
             font-size: .9rem;
             display: inline-block;
             float: left;
             padding: 0px 15px 0px 15px;
             margin: auto 0;
         }

         .card-title {
             text-align: center;
             font-weight: bold;
             margin: auto 0 7px 0;
             font-size: 13px;
         }

         img.card-photo {
             background: #FFF;
             width: 100%;
         }

         .modal-body.pricemodal-body {
             width: 70%;
             display: inline-block;
             float: left;
             border-left: 1px solid #eee;
         }

         ul.size-selectors-container.list-inline {
             position: relative;
         }

         ul.size-selectors-container.list-inline.error:after {
             content: "Please Select Size";
             position: absolute;
             top: -23px;
             font-size: .9rem;
             color: red;
             width: 100%;
             left: 0;
             text-align: center;
         }

         /* ul.list-inline.color-seletcor-container {
             position: relative;
         } */

         ul.list-inline.color-seletcor-container.error:after {
             content: "Please Select Color";
             position: absolute;
             top: -23px;
             font-size: .9rem;
             color: red;
             width: 100%;
             left: 0;
             text-align: center;
         }

         .addToCartBtn>i {
             display: none;
             font-size: 1rem;
             height: 1rem;
             width: 1rem;
             line-height: 1rem;
         }

         .modal-title>p {
             margin: 0px;
         }

         .card-text.truncate {
             padding: 0px 10px;
             font-size: 1rem;
             white-space: nowrap;
             margin-top: 0px;
             height: 1.5rem;
         }

         .products-share-button {
             display: none;
         }

         .products-cart-button>i {
             padding-right: 10px;
             font-size: 1.0rem;
         }

         .products-cart-button-loader {
             display: none;
         }

         .products-cart-button-loader {
             font-size: .8rem !important;
             line-height: 1rem;
             padding: 0px !important;
             color: #818a91;
         }

         div#cats {
             margin-top: 15px;
         }



         .algo-search>input {
             z-index: 4 !important;
         }



         #pagination {
             height: 20px;
         }

         body.still {
             height: 100vh !important;
             overflow: hidden;
         }

         ul.ais-RefinementList-list div.facet-item.checkitem.mens:before {
             content: "Mens";
             display: block;
             font-weight: bold;
             color: #03A9F4;

             font-family: monospace;
         }

         ul.ais-RefinementList-list div.facet-item.checkitem.sports:before {
             content: "Sports";
             display: block;
             font-weight: bold;
             color: #03A9F4;

             font-family: monospace;
         }

         ul.ais-RefinementList-list div.facet-item.checkitem.womens:before {
             content: "Womens";
             display: block;
             font-weight: bold;
             color: #03A9F4;

             font-family: monospace;
         }

         ul.ais-RefinementList-list div.facet-item.checkitem.kids:before {
             content: "Kids";
             display: block;
             font-weight: bold;
             color: #03A9F4;

             font-family: monospace;
         }

         ul.ais-RefinementList-list div.facet-item.checkitem.mask:before {
             content: "Premium cotton Mask";
             display: block;
             font-weight: bold;
             color: #03A9F4;

             font-family: monospace;
         }

         ul.ais-RefinementList-list div.facet-item.checkitem.wholesale:before {
             content: "Wholesale";
             display: block;
             font-weight: bold;
             color: #03A9F4;

             font-family: monospace;
         }

         ul.ais-RefinementList-list div.facet-item.checkitem.ppe:before {
             content: "PPE";
             display: block;
             font-weight: bold;
             color: #03A9F4;

             font-family: monospace;
         }

         .non_mediacal.show {
             display: block;
             width: 100%;
             text-align: center;
             font-size: .8rem;
             position: absolute;
             bottom: 125px;
             color: #000;
         }

         .non_mediacal.hide {
             display: none;
         }

         .discounted_amount {
             background: #333333;
             width: fit-content;
             position: absolute;
             left: 0;
             right: 0;
             margin-left: auto;
             color: #FFF;
             bottom: 91px;
             margin-right: auto;
             font-size: .8rem;
             line-height: 1.3rem;
         }

         .discounted_amount span {
             margin: 0px 7px 0px 7px;
         }

         .sale {
             position: absolute;
             top: 10px;
             right: 10px;
             color: #FFF;
             background: #f44336;
             font-size: 0.8rem;
             line-height: 1.3rem;
             /* border-bottom-left-radius: 7px; */
         }

         .sale span {
             margin: 0px 15px;
         }

         .Premium_pTag {
             display: none;
         }

         .size-selector {
             width: auto;
             min-width: 60px;
             padding: 5px;
             text-align: center;
             margin: 0px 10px 5px 0 !important;
             /* background-color: #fff; */
             border: 1px solid #9e9e9e;
             font-size: 14px;
             cursor: pointer;
             -webkit-transition: 0.4s ease-in-out;
             transition: 0.1s ease-in-out;
             border-radius: 0px !Important;
         }

         .size-selector-selected {
             width: auto;
             min-width: 60px;
             padding: 5px;
             text-align: center;
             margin: 0px 10px 5px 0 !important;
             background-color: #2bb673;
             border: 1px solid #9e9e9e;
             color: #FFF;
             font-size: 14px;
             cursor: pointer;
             -webkit-transition: 0.4s ease-in-out;
             transition: 0.1s ease-in-out;
             border-radius: 0px !Important;
         }

         ul.size-selectors-container {
             background-color: unset !Important;
             border: none !Important;
             border-radius: 0px !important;
             padding: 0px;
         }

         div.size-selectors-container {
             border-bottom: unset !Important;
         }

         div.size-selectors-container:hover {
             background: unset !important;
         }

         .products-like-button {
             display: none;
         }

         .level1 {
             color: #00aeef !important;
             font-weight: bold;
         }

         .level2 {
             margin-left: 15px;
             font-weight: bold;

         }

         .level3 {
             margin-left: 30px;
             color: #555 !important;
         }

         .level4 {
             margin-left: 45px;
         }

         .newarrival {
             /* font-size: 1rem !important; */
             margin-bottom: 5px;
             /* color: #FF5722 !important; */
             /* font-style: italic; */
         }

         .newarrival:after {
             content: "\f0e7";
             font: normal normal normal 14px/1 FontAwesome;
             padding-left: 8px;
             color: #FF9800;
         }

         .cat-header {
             padding-left: 0px;
             margin-top: 0px;
         }

         .algo-search button {
             background: #FFF;
             height: 37px;
             border: 1px solid #ddd;
         }


         @media(max-width: 996px) {
             .cart-table tbody td.spinner {
                 padding: 35% 0% !important;
             }

             .free_delivery {
                 font-size: 0.7rem;
                 line-height: 1.0rem;
                 padding: 0px 7px 0 2px;
                 font-style: italic;
             }

             .campaign {
                 font-size: 0.7rem;
                 line-height: 1.0rem;
                 padding: 0px 7px 0 2px;
             }

             .free_delivery img {
                 height: 16px;
             }


             .sale {
                 font-size: 0.7rem;
                 line-height: 1.0rem;
                 padding: 0px;
             }

             .card-view {
                 width: 100%;
                 display: flex;
                 padding: 0px 15px;
                 height: 70px;
                 background: #f8f8f8;
                 overflow: hidden;
                 color: #666666;
             }

             .card-title {
                 width: 100%;
                 margin: auto 0 auto 0;
             }

             .card-photo-container {
                 width: 25%;
             }

             .card-photo {
                 height: 100%;
                 width: auto !important;
             }

             .modal-body.pricemodal-body {
                 width: 100%;
                 display: inline-block;
                 float: left;
                 border: 0px;
             }

             .card-text {
                 font-size: .8em;
                 line-height: 1.2rem;
             }

             .card-text.truncate {
                 height: 1.9rem !important;
                 font-size: .7em !important;
                 white-space: unset !important;
                 word-break: break-word;
                 overflow: hidden;
                 line-height: 1rem !important;
                 margin-bottom: 4px !important;
             }

             .products-like-button {
                 top: 0px;
                 left: 9px;
             }

             #hits {
                 margin-left: 0px;
             }

             .algo-search button {
                 height: 35px;
                 line-height: 30px;
                 padding: 0px 10px;
                 background: #FFF;
                 border: 1px solid #ddd;
                 padding-bottom: 2px;
             }

             .discounted_amount {
                 bottom: 77px;
                 font-size: .7rem;
                 line-height: 1.0rem;
             }

             .non_mediacal.show {
                 bottom: 110px;
             }
         }

         .active {
             background-color: black;
             color: white;
         }

         .alert {
             padding: 20px;
             background-color: #f44336;
             color: white;
         }

         .closebtn {
             margin-left: 15px;
             color: white;
             font-weight: bold;
             float: right;
             font-size: 22px;
             line-height: 20px;
             cursor: pointer;
             transition: 0.3s;
         }

         .closebtn:hover {
             color: black;
         }

         .addToCartBtn {
             width: auto;
             margin-left: 20px;
             background: #333;
             color: #FFF;
         }

         .addToCartBtn :hover,
         .addToCartBtn :active,
         .addToCartBtn :focus {
             background-color: #111 !important;
         }

         /* Styles for the overlay */
         .overlay {
             display: none;
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background: rgba(0, 0, 0, 0.7);
             justify-content: center;
             align-items: center;
             z-index: 111111;
         }

         /* Styles for the popup */
         .popup {
             background: #fff;
             padding: 20px;
             border-radius: 5px;
             box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
             text-align: center;
         }

         /* Styles for the popup */
         .popup {
             background: #fff;
             padding: 20px;
             border-radius: 5px;
             box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
             text-align: center;
         }

         /* Close button style */
         .close-btn {
             cursor: pointer;
             font-size: 20px;
         }

         .color-seletcor-container .active {
             border: 2px solid #ccbfbf;
             transform: scale(1.2);

         }

         .color-selectors-container .active {
             border: 2px solid #ccbfbf;
             transform: scale(1.2);

         }

         .color-selector:hover {
             transform: none;
         }
         </style>
         <!-- Popup container -->
         <div class="overlay" id="popup">
             <div class="popup">
                 <span class="close-btn" onclick="closePopup()">&times;</span>
                 <p id="popupMessage"></p>

                 <img src="<?php echo base_url() ?>img/I-TOUCH-LOGO-05.png" alt="Home Logo" class="nav-logo mobile-logo"
                     style="display: inline; margin-top: -6px;" />
             </div>
         </div>

         <div class="modal fade pricemodal in" id="productModal" style="display: none;">
             <div class="modal-dialog" role="document">
                 <div class="modal-content" style="border: 0px;">
                     <div class="modal-header"
                         style="background: #ffffff;color: black;padding: 6px;margin-bottom: 15px;">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         <h5 class="modal-title pricemodal-header">
                             <p style="text-align:center">Price Details</p>
                         </h5>
                     </div>


                     <div class="card-view">
                         <div class="card-title"></div>

                         <input type="hidden" class="productId">
                         <div class="card-photo-container"><img class="card-photo" src="" alt="Loading.."
                                 style="background: rgb(255, 255, 255);"></div>
                     </div>
                     <div class="modal-body pricemodal-body">
                         <ul class="list-inline" style="text-align: center;">
                             <li class="list-inline-item" style="text-align: center;"><b>Choose Size</b></li>
                         </ul>
                         <ul class="size-selectors-container list-inline" style="text-align: center;">
                             <div class="size-selectors-container list-inline Premium_div"><span
                                     class="Premium_pTag pull-left"
                                     style="line-height: 15px; width: auto; font-size: 0.9rem; text-align: left; padding: 5px 0px;">Premium
                                     Sizes: <br><button class="Premium_pTag pull-left btn btn-link"
                                         style="line-height: 0px; font-size: 0.8rem;">Size Chart</button></span>


                             </div>
                         </ul>
                         <ul class="list-inline" style="text-align: center;">
                             <!-- <li class="list-inline-item" style="text-align: center;"><b>Choose Color</b></li> -->
                         </ul>
                         <ul class="list-inline color-seletcor-container" style="display: none; text-align: center;">
                             <div class="color-selector color-selector-selected list-inline-item" data-color="#ffffff"
                                 style="background-color: rgb(255, 255, 255); cursor: pointer;">
                                 <i class="fa fa-check"></i>
                             </div>
                         </ul>
                         <ul class="list-inline priceBox" style="text-align: center; display: block;">
                             <li class="list-inline-item" style="text-align: center;"><b>Unit Price:</b></li>
                             <p class="modal-discount-text"></p>
                             <p class="modal-price-text"></p>
                         </ul>
                     </div>
                     <div class="modal-footer pricemodal-footer" style="display: inline-table; width: 100%;"><button
                             class="modal-btn btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                         <button class="addToCartBtn  discard-button modal-btn btn btn-success pull-right">Add to Cart
                             <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></button>
                     </div>
                 </div>
             </div>
         </div>

         <script>
         $(document).on("click", ".cat1_name", function() {
             children = $(this).parent().find(".cat1_childs");
             if ($(children).hasClass("cat_hide")) {
                 $(children).removeClass("cat_hide");
                 $(children).find(".cat2_childs").each(function(index, elem) {
                     $(elem).addClass("cat_hide");
                 });
                 $(this).find('.cat-plus').html('<i class="fa fa-minus" aria-hidden="true"></i>');
                 $(".cat1_name .cat-name").addClass("cat1_bold");
             } else {
                 $(children).addClass("cat_hide");
                 $(children).find(".cat2_childs").each(function(index, elem) {
                     $(elem).addClass("cat_hide");
                 });
                 $(this).parent().find('.cat-plus').each(function(index, elem) {
                     $(elem).html('<i class="fa fa-plus" aria-hidden="true"></i>');
                 });
                 if ($(".cats .cat1_childs:not(.cat_hide)").length == 0) $(".cat1_name .cat-name").removeClass(
                     "cat1_bold");
             }
         });

         $(document).on("click", ".cat2_name", function() {
             children = $(this).parent().find(".cat2_childs");
             if ($(children).hasClass("cat_hide")) {
                 $(children).removeClass("cat_hide");
                 $(children).find(".cat3_childs").each(function(index, elem) {
                     $(elem).addClass("cat_hide");
                 });
                 $(this).find('.cat-plus').html('<i class="fa fa-minus" aria-hidden="true"></i>');
             } else {
                 $(children).addClass("cat_hide");
                 $(children).find(".cat3_childs").each(function(index, elem) {
                     $(elem).addClass("cat_hide");
                 });
                 $(this).parent().find('.cat-plus').each(function(index, elem) {
                     $(elem).html('<i class="fa fa-plus" aria-hidden="true"></i>');
                 });
             }
         });

         $(document).on("click", ".open-mobile-link", function() {
             $(".mobile-login-opener").toggleClass("mobile-login-toggle");
             $(".open-mobile-link").find("i.fa-chevron-down").toggleClass("list-hidden");
             $(".open-mobile-link").find("i.fa-chevron-up").toggleClass("list-hidden");
         });
         </script>

         <?php $s_id = session_id();
        $total_qty = $this->db->query("SELECT sum(pro_quantity) as total_qty FROM tbl_cart WHERE s_id='$s_id'")->row();
        ?>
         <script>
         var cartQuantity = '<?php echo isset($total_qty->total_qty) ? $total_qty->total_qty : 0;?>';

         $('.shopping-cart-badge').text(cartQuantity);

         function closePopup() {
             var popup = document.getElementById('popup');
             popup.style.display = 'none'; // Hide the popup
         }

         function search_toggle() {
             var search_nav_mobile = document.getElementById("search-home-mobile");
             if (search_nav_mobile.style.display == "none" || search_nav_mobile.style.display == "") {
                 search_nav_mobile.style.display = "block";
             } else {
                 search_nav_mobile.style.display = "none";
             }
         }

         function accountHover() {
             document.getElementById("account_ul").style.display = "block";
         }

         function accountHoverOut() {
             document.getElementById("account_ul").style.display = "none";
         }

         var mobileMenuVisible = false;

         function toggleMobileSidebar(elem) {
             if (!mobileMenuVisible) {
                 mobileMenuVisible = true;
                 document.querySelector('.mobile-nav-sidebar').style.transform = "translateX(100%)";
                 document.querySelector('.menu-img-ref').src = "<?php echo base_url();?>img/cross_icon.png";
             } else {
                 mobileMenuVisible = false;
                 document.querySelector('.mobile-nav-sidebar').style.transform = "translateX(0%)";
                 document.querySelector('.menu-img-ref').src = "<?php echo base_url();?>img/menu_icon.png";
             }
         }
         if (localStorage.getItem('IfThisIsApp')) {
             document.querySelector('.this-is-app-exit').style.display = "block";
         } else {}
         </script>


         <script type="text/javascript">
         $(document).on('submit', '#addToCartFormano', function(e) {
             e.preventDefault();
             var proId = $('#product_id', this).val();
             var qty36 = $('#qty36').val();
             var formData = new FormData(this);
             formData.append('q', qty36);
             var path = '<?php echo base_url(); ?>Product/productAddTocartAno';
             $.ajax({
                 url: path,
                 method: "POST",
                 data: formData,
                 contentType: false,
                 processData: false,
                 success: function(data) {
                     var path =
                         '<?php echo base_url(); ?>Product/cartLoadForOrderHome';

                     $.ajax({
                         url: path,
                         method: "POST",
                         beforeSend() {
                             // $("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
                         },
                         success: function(data) {
                             $("#loadQuck").html(data);
                         }
                     });

                     if (data.trim() == "alreadyAdded") {
                         alert("Sorry!! product already added");

                         $('#myModal3').modal('show');

                     }
                     if (data.trim() == "cartAdded") {
                         alert("Success!! product  added");
                         $('#myModal3').modal('show');
                     }
                 }

             });
         });
         // JavaScript function to handle the close button click event
         function closeAlert(closeButton) {
             // Get the parent element (the alert div)
             var alertElement = closeButton.parentElement;

             // Toggle the active class on the alert element
             alertElement.classList.toggle('active');

             // Hide the alert element after 2 seconds
             setTimeout(function() {
                 alertElement.style.display = 'none';
             }, 2000);
         }

         $(document).on('submit', '#customer_acc_cu_form', function(e) {
             e.preventDefault();
             var first_name = $('#first_name', this).val();
             // var last_name = $('#last_name', this).val();
             var email = $('#email', this).val();
             var password = $('#password', this).val();
             var phone = $('#phone', this).val();
             var address = $('#address', this).val();
             // var zip_code = $('#zip_code', this).val();
             // var city = $('#city', this).val();

             var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

             var emailFormat = re.test($("#email", this)
                 .val()); // this return result in boolean type



             if (first_name == '') {
                 alert("First Name Field is Required");
                 // } else if (last_name == "") {
                 // alert("Last Name Field is Required");
             } else if (email == "") {
                 alert("Email Field is Required");
             } else if (!emailFormat) {
                 alert("Invlid Email");
             } else if (password == "") {
                 alert("Password Name Field is Required");
             } else if (address == "") {
                 alert("Addrss Field is Required");
                 // } else if (zip_code == "") {
                 // alert("Zip code Field is Required");
             } else if (phone == "") {
                 alert("Phone Field is Required");
                 // } else if (city == "") {
                 // alert("City Field is Required");
             } else {
                 var path = '<?php echo base_url(); ?>product/c_cu';

                 $.ajax({
                     url: path,
                     method: "POST",
                     data: new FormData(this),
                     contentType: false,
                     processData: false,
                     success: function(data) {


                         if (data.trim() == "created") {

                             $('#myModal2').modal('hide');
                             $("#myModal").modal('show');
                             $('#customer_acc_cu_form')[0].reset();
                             alert('Your account created success');
                         }
                         if (data.trim() == "not created") {
                             alert('Your account not created ');
                         }
                         if (data.trim() == "already exit") {
                             alert('Sorry Your email already Exists');
                         }

                     }
                 })
             }

         });


         $(document).ready(function() {
             $(document).on('submit', '#login_form_action', function(e) {
                 e.preventDefault();
                 $email = $('#email', this).val();
                 $password = $('#password', this).val();
                 if ($email == '') {
                     alert('Email field is required')
                 } else if ($password == '') {
                     alert('Password field is required')

                 } else {
                     var path = '<?php echo base_url(); ?>product/tbl_orders_master';

                     $.ajax({
                         url: path,
                         method: "POST",
                         data: new FormData(this),
                         contentType: false,
                         processData: false,
                         success: function(data) {
                             if (data.trim() == "login") {
                                 window.location.replace(
                                     '<?php echo base_url('My_Account');?>')
                             }

                             if (data.trim() == "Access not match") {
                                 alert('Email or Password not match');
                             }


                         }
                     })
                 }


             })
         })
         </script>