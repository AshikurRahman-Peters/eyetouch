
<!DOCTYPE html>
<html>
<head>
    
    <script data-ad-client="ca-pub-9249197304595011" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
    <title>Clipping Path Service</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Looks, Shopping Online, Fashion Online" />
    <meta name="description" content="We are big and most popular online shopping portal, where you can purchase all type fashion and lifestyle item in one area." />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->
    <link href="<?php echo base_url() ?>/assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/frontend/css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/frontend/css/jquery-ui.css" type="text/css" media="screen" />
    <link href="<?php echo base_url() ?>/assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url() ?>/assets/frontend/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/frontend/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo base_url() ?>/assets/frontend/css/googleapiscss.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url() ?>/assets/frontend/css/googleapiscss2.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //for bootstrap working -->

</head>
<body>
<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            <?php if (!isset($_COOKIE['loginCheck'])) {?>
                <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
            <?php }  if (!isset($_COOKIE['loginCheck'])) {?>

                 <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>

            <?php }else{?>



                 <li> <a href="<?php echo base_url();?>Admin/logout" data-toggle="modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Logout (<?php echo $_COOKIE['first_name'];?>)</a></li>
           
           <?php }?>

            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 0151 6762 466 <?php // echo //$getContact[0]->phone ?></li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@newlooksbd.com">ashikurrahmanpeters@yahoo.com<?php //echo //$getContact[0]->email ?></a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">

        <div class="col-md-3 header-middle">
            <form action="<?php //echo base_url(check_searching_data) ?>" method="post">
                <input type="search" name="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>

        <!-- header-bot -->
        <div class="col-md-5 logo_agile">
            <h2><a href="<?php echo base_url('home') ?>"><img style="height:60px;width:60px;"src="<?php echo base_url() ?>/assets/frontend/logo.png">Clipping Path Service </a></h2>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                <li class="share">Share On : </li>
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="<?php echo base_url('home') ?>">Home <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item"><a class="menu__link" href="<?php //echo base_url('about_us'); ?>">About Us</a></li>


                            <li class="dropdown menu__item menu_display">
                                <a href="<?php echo base_url('Product_page'); ?>" class="dropdown-toggle menu__link" >Services<span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3 sub_menu_display">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="mens.html"><img src="<?php //echo base_url() ?>assets/frontend/images/top2.jpg" alt=" "/></a>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <?php
                                                    if(isset($categoryList)):
                                                     foreach($categoryList as $category):
                                                ?>
                                                <li><a href="<?php echo base_url(); ?>category/<?php //echo $category->cat_id; ?>"><?php echo $category->cat_name ?></a></li>
                                                <?php endforeach; endif; ?>
                                            </ul>
                                        </div>
                                </ul>
                            </li>


                            <li class=" menu__item"><a class="menu__link" href="<?php //echo base_url(/category/11); ?>">Pricing</a></li>

                            <li class=" menu__item"><a class="menu__link" href="<?php // echo base_url(category/10); ?>">Protfolio</a></li>

                            <li class=" menu__item"><a class="menu__link" href="<?php //echo base_url(category/13); ?>">Blog</a></li>
                            <li class=" menu__item"><a class="menu__link" href="<?php //echo base_url(); ?>">About Us</a></li>
                            <li class=" menu__item"><a class="menu__link" href="<?php //echo base_url('contact_us') ?>">Contact Info</a></li>
                            <li><button style="background-color:#2fdab8; color:white;padding:20px 2px"> Get A quote</button></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
<!-- 
        <div class="top_nav_right">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <button data-toggle="modal" data-target="#myModal3" class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>

            </div>
        </div> -->
        <div class="clearfix"></div>
    </div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                    <form action="#" id="login_form_action" method="post">

                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="email" id="email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" id="password" required="">
                            <label>password</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="<?php echo base_url(); ?>/assets/frontend/images/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->


<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>

                    <form id="customer_acc_cu_form" >
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="first_name" id="first_name" >
                            <label>First Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="last_name" id="last_name" >
                            <label>Last Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="email" id="email"  >
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" id="password" >
                            <label>password</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="phone" id="phone" >
                            <label>phone</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea class="form-control"  placeholder="Address Here" id="address" name="address" rows="3"></textarea>

                        </div>
                        <div class="styled-input">
                            <input type="text" name="zip_code" id="zip_code" >
                            <label>Zip Code </label>
                            <span></span>
                        </div>

                        <div class="styled-input">
                            <input type="text" name="city" id="city" >
                            <label>City</label>
                            <span></span>
                        </div>

                        <input type="hidden"  name="action" id="action" value="create" >
                        <input type="hidden"  name="id" id="id" value="create" >
                        <input type="submit" name="submit" id="submit" value="Sign Up">
                    </form>

                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="<?php echo base_url(); ?>/assets/frontend/images/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->

        <script src="<?php echo base_url() ?>assets/frontend/js/jquery-2.1.4.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(document).on("submit", "#customer_acc_id",function(e){
                    e.preventDefault();
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var username = $("#username").val();
                    var pass = $("#pass").val();


                        $.ajax({
                            url:"Customer/create_account",
                            method:"POST",
                            data: new FormData(this),
                            contentType:false,
                            processData:false,
                            success:function(data){
                                let r = JSON.parse(data);
                                alert(r.message);
                                if(r.success){
                                    window.location = self.location;
                                }
                            },
                            error: function(er){
                                alert(er.statusText);
                            }
                        });

                });
            });
        </script>

    </div>
</div>
<!-- //Modal2 -->


<!--Modal3-->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="badge-open" style="padding: 40px;">
               <span id="loadQuck">

               </span>

                <div class="subtotal" style="margin-top: 20px;">

                    <div class="row" style="display: inline-flex;">
                        <div class="col-xs-6 col-sm-offset-6">
                            <a href="<?php echo base_url();?>" class="btn btn-product cd-cart-btn pull-right">Browse Product</a>
                        </div>
                        <div class="col-xs-6 col-sm-offset-6">
                            <a href="<?php echo base_url('add_cart') ?>" class="btn btn-product cd-cart-btn pull-right">View Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>

<!--//Modal3-->


<script>
    $(document).ready(function(){
        var path = '<?php echo base_url();?>Product/cartLoadForOrderHome';
        function loadCartHtml(){
            $.ajax({
                url:path,
                method:"POST",
                beforeSend(){
                    $("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
                },
                success:function(data){
                    $("#loadQuck").html(data);

                }
            })
        }

        loadCartHtml();
        

        $(document).on('click','#remnoveItem',function(){
            var id = $(this).attr('data-id');
            var path= '<?php echo base_url();?>Product/removeCart';


            $.ajax({
                url:path,
                method:"POST",
                data:{id:id},
                success:function(data){
                    loadCartHtml();
                }

            })
        });

        $(document).on('change','#quantity_up',function(){

            var path= '<?php echo base_url();?>Product/quantiyUpdate';
            var id = $(this).attr('data-id');
            var qury = $(this).val();
            if (qury=='0'){
                alert('Minimum at last one quantity');
            }

            $.ajax({
                url:path,
                method:"POST",
                data:{id:id,qury:qury},
                success:function(data){
                    loadCartHtml();
                }

            });


        });
    });


    $(document).ready(function(){


        var path= '<?php echo base_url();?>Product/cartLoadForOrderHome';

        function loadCartHtml(){
            $.ajax({
                url:path,
                method:"POST",
                beforeSend(){
                    $("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
                },
                success:function(data){
                    $("#loadQuck").html(data);
                    
                }
            })
        }

        loadCartHtml();
    });

    // $(document).on('submit','#addToCartForm',function(e){
    //     e.preventDefault();
    //     var proId = $('#product_id',this).val();
    //     var path= '<?php// echo base_url();?>Product/productAddTocart';
    //     $.ajax({
    //         url:path,
    //         method:"POST",
    //         data:new FormData(this),
    //         contentType:false,
    //         processData:false,
    //         success:function(data){
    //             var path= '<?php// echo base_url();?>Product/cartLoadForOrderHome';

    //             $.ajax({
    //                 url:path,
    //                 method:"POST",
    //                 beforeSend(){
    //                     $("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
    //                 },
    //                 success:function(data){
    //                     $("#loadQuck").html(data);
    //                 }
    //             });

    //             if (data.trim()=="alreadyAdded"){
    //                 alert("Sorry!! product already added");

    //                 $('#myModal3').modal('show');

    //             }
    //             if (data.trim()=="cartAdded"){
    //                 alert("Success!! product  added");
    //                 $('#myModal3').modal('show');
    //             }
    //         }

    //     });
    // });


    $(document).on('submit','#customer_acc_cu_form',function(e){
        e.preventDefault();
        var first_name = $('#first_name',this).val();
        var last_name = $('#last_name',this).val();
        var email = $('#email',this).val();
        var password = $('#password',this).val();
        var phone = $('#phone',this).val();
        var address = $('#address',this).val();
        var zip_code = $('#zip_code',this).val();
        var city = $('#city',this).val();

        var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        var emailFormat = re.test($("#email",this).val());// this return result in boolean type



        if (first_name==''){
            alert("First Name Field is Required");
        }else if(last_name==""){
            alert("Last Name Field is Required");
        }else if(email==""){
        alert("Email Field is Required");
        }else if(!emailFormat){
            alert("Invlid Email");
        }else if(password==""){
            alert("Password Name Field is Required");
        }else if(address==""){
            alert("Addrss  Field is Required");
        }else if(zip_code==""){
            alert("Zip code  Field is Required");
        }else if(phone==""){
            alert("Phone  Field is Required");
        }else if(city==""){
            alert("City   Field is Required");
        }else{
            var path = '<?php echo base_url();?>product/c_cu';

                $.ajax({
                    url:path,
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    success:function(data){


                            if(data.trim()=="created"){

                                $('#myModal2').modal('hide');
                                $("#myModal").modal('show');
                                $('#customer_acc_cu_form')[0].reset();
                                // alert('Your account created success');
                            }
                            if(data.trim()=="notcreated"){
                                alert('Your account not created ');
                            }
                             if(data.trim()=="alreadyexit"){
                                alert('Sorry Your email already  Exists');
                            }

                    }
                })
        }

    });


    $(document).ready(function(){
        $(document).on('submit','#login_form_action',function(e){
            e.preventDefault();
            $email = $('#email',this).val();
            $password = $('#password',this).val();
            if ($email==''){
                alert('Email field is required')
            }else if($password==''){
                alert('Password field is required')

            }else{
                var path = '<?php echo base_url();?>product/c_login';

                $.ajax({
                    url:path,
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    success:function(data){
                        if (data.trim()=="login"){
                            
                            location.reload();
                        }

                        if (data.trim()=="notLogin"){
                            alert('Email or Password not match');
                        }


                    }
                })
            }


        })
    })

</script>






<!--grids-->
<!-- footer -->
<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <?php
            if(isset($aboutusData)):
                foreach($aboutusData as $about):
            ?>

            <h2><a href="<?php //echo base_url('about_us'); ?>"><img style="height:50px;width:50px;"src="<?php echo base_url() ?>assets/frontend/logo.png"> CLIPPING PATH SERVICE </a></h2>

            <p style="color:#ddd"><?php echo read_more($about->com_description, 100) ?></p>
            <?php endforeach; endif; ?>


            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href="<?php // echo base_url('home') ?>">Home</a></li>
                        <li><a href="<?php //echo base_url('men') ?>">Men's Wear</a></li>
                        <li><a href="<?php //echo base_url('women') ?>">Women's wear</a></li>
                        <li><a href="<?php //echo base_url('about_us') ?>">About</a></li>
                        <li><a href="<?php //echo base_url('contact_us') ?>">Contact</a></li>
                    </ul>
                </div>
                <?php
                    if(isset($getContact)):
                        foreach($getContact as $contact):
                ?>

                <div class="col-md-5 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Phone Number</h6>
                                <p style="color:#ddd">0151 6762 466<?php //echo $contact->phone ?></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:example@email.com">ashikurrahmanpeters@yahoo.com <?php //echo $contact->email2 ?></a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Location</h6>
                                <p style="color:#fff"><?php echo $contact->address ?></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; endif; ?>

                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="agile_newsletter_footer">
            <div class="col-sm-6 newsleft">
                <h3>SIGN UP FOR NEWSLETTER !</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form action="#" method="post">
                    <input type="email" placeholder="Enter your email..." name="email" required="">
                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container-fluid footer-bottom">
    <p class="copy-right">&copy; <?php echo date('Y'); ?>. All rights reserved | Design by <a href="http://www.ashikurrahmanpeters.com">Ashikur Rahman Peters</a></p>
</div>
<!-- //footer -->

<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-bottom">
                            <h3>Sign up for free</h3>
                            <form>
                                <div class="sign-up">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-up">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <h4>Re-type Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <input type="submit" value="REGISTER NOW" >
                                </div>

                            </form>
                        </div>
                        <div class="login-right">
                            <h3>Sign in with your account</h3>
                            <form>
                                <div class="sign-in">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="single-bottom">
                                    <input type="checkbox"  id="brand" value="">
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <div class="sign-in">
                                    <input type="submit" value="SIGNIN" >
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery-ui.js"></script>
<!-- //js -->
<script src="<?php echo base_url() ?>assets/frontend/js/modernizr.custom.js"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src="<?php echo base_url() ?>assets/frontend/js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- single -->
<script src="<?php echo base_url() ?>assets/frontend/js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="<?php echo base_url() ?>assets/frontend/js/easy-responsive-tabs.js"></script>

<script>
    $( function() {
        $( "#slider-range-max" ).slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2,
            slide: function( event, ui ) {
                $( "#amount" ).val( ui.value );
            }
        });
        $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
    } );
</script>

<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- FlexSlider -->
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->

<script type="text/javascript">
    $(document).ready(function(){

        $(".menu_display").hover(
            function () {
                $('.sub_menu_display').finish().slideDown('fast');
            },
            function () {
                $('.sub_menu_display').finish().slideUp('fast');
            }
        );

    })
</script>

<!-- //script for responsive tabs -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.easing.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/bootstrap.js"></script>
</body>
</html>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ksde block">
                               <div class="module so-extraslider-ltr home3_extra_style3">
                                   <h3 class="modtitle">Feature Items</h3>
                                   <div class="modcontent">
                                       <div id="so_extra_slider_528" class="so-extraslider buttom-type1 preset00-6 preset01-5 preset02-3 preset03-2 preset04-1 button-type1">
                                           <div class="box-banner">
                                               <div class="banners">
                                               </div>
                                           </div>
                                           <!-- Begin extraslider-inner -->
                                           <div class="extraslider-inner products-list grid" data-effect="none">
                                               <div class="item ">
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/25-234x234.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-82% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) ">
                                                                           Toshiba Pro 21&quot;(21:9) FHD IPS LED 1920X1080 HDMI(2)
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$50.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$279.99 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('104');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/19-234x234.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-70% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium ">
                                                                           Compact Portable Charger (Power Bank) with Premium
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$60.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$199.99 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('66');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                               </div>
                                               <div class="item ">
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/4-234x234.jpg" alt="Portable  Compact Charger (External Battery) t45">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-40% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45 ">
                                                                           Portable Compact Charger (External Battery) t45
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$60.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$100.00 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('78');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/1-234x234.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-20% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus ">
                                                                           Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$100.00 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                               </div>
                                               <div class="item ">
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Charger  Compact Portable with Premium">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/11-234x234.jpg" alt="Charger  Compact Portable with Premium">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-20% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Charger  Compact Portable with Premium ">
                                                                           Charger Compact Portable with Premium with Premium
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$100.00 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('51');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (External Battery)">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/13-234x234.jpg" alt="Compact Portable Charger (External Battery)">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Compact Portable Charger (External Battery) ">
                                                                           Compact Portable Charger (External Battery)
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="price product-price">
                                                                           $80.00
                                                                       </span>
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('103');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                               </div>
                                               <div class="item ">
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (External Battery) T22">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/21-234x234.jpg" alt="Compact Portable Charger (External Battery) T22">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-20% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Compact Portable Charger (External Battery) T22 ">
                                                                           Compact Portable Charger (External Battery) T22
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$100.00 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('88');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/26-234x234.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-20% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium ">
                                                                           Lorem Ipsum dolor at vero eos et iusto odi with Premium
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$100.00 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('105');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                               </div>
                                               <div class="item ">
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Mammo Diablo except to obtain some advan from">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/6-234x234.jpg" alt="Mammo Diablo except to obtain some advan from">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-20% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Mammo Diablo except to obtain some advan from ">
                                                                           Mammo Diablo except to obtain some advan from
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$100.00 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('110');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/29-234x234.jpg" alt="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                                   <span class="label-product label-sale">-11% </span>
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly) ">
                                                                           Seneo PA046 Fast Charger Wireless Sleep-Friendly)
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="old-price product-price">$89.00 </span>&nbsp;&nbsp;
                                                                       <span class="price-old">$100.00 </span>&nbsp;
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('86');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                               </div>
                                               <div class="item ">
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (External Battery) T21">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/14-234x234.jpg" alt="Compact Portable Charger (External Battery) T21">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="Compact Portable Charger (External Battery) T21 ">
                                                                           Compact Portable Charger (External Battery) T21
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="price product-price">
                                                                           $100.00
                                                                       </span>
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('75');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                                   <div class="item-wrap product-layout style1 ">
                                                       <div class="product-item-container">
                                                           <div class="left-block ">
                                                               <div class="product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview">
                                                                   <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="True Wireless Stereo Bluetooth 4.2 Headphones">
                                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/20-234x234.jpg" alt="True Wireless Stereo Bluetooth 4.2 Headphones">
                                                                   </a>
                                                               </div>
                                                               <div class="box-label">
                                                               </div>
                                                           </div>
                                                           <div class="right-block">
                                                               <div class="caption">
                                                                   <h4 class="font-ct">
                                                                       <a href="product.html" target="_self" title="True Wireless Stereo Bluetooth 4.2 Headphones ">
                                                                           True Wireless Stereo Bluetooth 4.2 Headphones
                                                                       </a>
                                                                   </h4>

                                                                   <div class="content_price price font-ct">
                                                                       <span class="price product-price">
                                                                           $100.00
                                                                       </span>
                                                                   </div>
                                                               </div>
                                                               <div class="button-group2">
                                                                   <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('95');"> <span>Add to Cart</span></button>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- End item-wrap-inner -->
                                                   </div>
                                                   <!-- End item-wrap -->
                                               </div>
                                           </div>
                                       </div>


                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_g1nr  block">
                               <div class="row">
                                   <div class="banner-25 col-sm-6 banners">
                                       <div>
                                           <a class="bn-shadow" href="#" title="Banner 25">
                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/banners/home6/banner25.jpg" alt="Static Image">
                                           </a>
                                       </div>
                                   </div>
                                   <div class="banner-26 col-sm-6  banners">
                                       <div>
                                           <a class="bn-shadow" href="#" title="Banner 26">
                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/banners/home6/banner26.jpg" alt="Static Image">
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>




                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_kjmz block">
                                       <div class="banner-21 banner">
                                           <div>
                                               <a class="bn-shadow" href="#" title="Banner 24">
                                                   <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/banners/home6/banner21.jpg" alt="Static Image">
                                               </a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hksd block">
                                       <div class="module so-listing-tabs-ltr home3_listingtab_style2">
                                           <div class="head-title">
                                               <h3 class="modtitle">Digital & Electronic</h3>
                                           </div>
                                           <div class="modcontent">
                                               <div id="so_listing_tabs_727" class="so-listing-tabs first-load module">
                                                   <div class="ltabs-wrap">
                                                       <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="button-group2" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-margin="0">
                                                           <!--Begin Tabs-->
                                                           <div class="ltabs-tabs-wrap">
                                                               <span class="ltabs-tab-selected"></span>
                                                               <span class="ltabs-tab-arrow">▼</span>
                                                               <div class="item-sub-cat">
                                                                   <ul class="ltabs-tabs cf">
                                                                       <li class="ltabs-tab tab-sel" data-category-id="40" data-active-content=".items-category-40">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/94.jpg" title="CASE" alt="CASE" style="background:#fff" />
                                                                           </div>
                                                                           <span class="ltabs-tab-label">
                                                                               CASE
                                                                           </span>
                                                                       </li>
                                                                       <li class="ltabs-tab " data-category-id="41" data-active-content=".items-category-41">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/93.jpg" title="Cell & Cable" alt="Cell & Cable" style="background:#fff" />
                                                                           </div><span class="ltabs-tab-label">Cell & Cable</span>
                                                                       </li>
                                                                       <li class="ltabs-tab " data-category-id="42" data-active-content=".items-category-42">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/88.jpg" title="Headphone" alt="Headphone" style="background:#fff" />
                                                                           </div>
                                                                           <span class="ltabs-tab-label">
                                                                               Headphone
                                                                           </span>
                                                                       </li>
                                                                       <li class="ltabs-tab " data-category-id="43" data-active-content=".items-category-43">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/90.jpg" title="Laptops" alt="Laptops" style="background:#fff" />
                                                                           </div>
                                                                           <span class="ltabs-tab-label">
                                                                               Laptops
                                                                           </span>
                                                                       </li>
                                                                       <li class="ltabs-tab " data-category-id="44" data-active-content=".items-category-44">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/87.jpg" title="Mobile & Table" alt="Mobile & Table" style="background:#fff" />
                                                                           </div>
                                                                           <span class="ltabs-tab-label">
                                                                               Mobile & Table
                                                                           </span>
                                                                       </li>
                                                                       <li class="ltabs-tab " data-category-id="45" data-active-content=".items-category-45">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/91.jpg" title="Sound" alt="Sound  " style="background:#fff" />
                                                                           </div>
                                                                           <span class="ltabs-tab-label">
                                                                               Sound
                                                                           </span>
                                                                       </li>
                                                                       <li class="ltabs-tab " data-category-id="46" data-active-content=".items-category-46">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/89.jpg" title="USB & HDD" alt="USB & HDD" style="background:#fff" />
                                                                           </div>
                                                                           <span class="ltabs-tab-label">
                                                                               USB & HDD
                                                                           </span>
                                                                       </li>
                                                                       <li class="ltabs-tab " data-category-id="47" data-active-content=".items-category-47">
                                                                           <div class="ltabs-tab-img">
                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/category/92.jpg" title="Video & Camera" alt="Video & Camera" style="background:#fff" />
                                                                           </div>
                                                                           <span class="ltabs-tab-label">
                                                                               Video & Camera
                                                                           </span>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                           <!-- End Tabs-->
                                                       </div>
                                                       <div class="wap-listing-tabs products-list grid">
                                                           <div class="ltabs-items-container">
                                                               <div class="ltabs-items ltabs-items-selected items-category-40" data-total="12">
                                                                   <div class="ltabs-items-inner ltabs-slider ">
                                                                       <div class="ltabs-item ">
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (External Battery)">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/13-270x270.jpg" alt="Compact Portable Charger (External Battery)">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Compact Portable Charger (External Battery)" target="_self">
                                                                                                   Compact Portable Charger (External Batte..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               $80.00
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('103');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Charger  Compact Portable with Premium">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/11-270x270.jpg" alt="Charger  Compact Portable with Premium">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                           <span class="label-product label-sale">-20%</span>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Charger  Compact Portable with Premium" target="_self">
                                                                                                   Charger Compact Portable with Premium with Premium
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               <span class="price-new">$80.00</span>
                                                                                               <span class="price-old">$100.00</span>
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('51');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="ltabs-item ">
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (External Battery) T21">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/14-270x270.jpg" alt="Compact Portable Charger (External Battery) T21">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Compact Portable Charger (External Battery) T21" target="_self">
                                                                                                   Compact Portable Charger (External Batte..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               $100.00
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('75');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (External Battery) T22">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/21-270x270.jpg" alt="Compact Portable Charger (External Battery) T22">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                           <span class="label-product label-sale">-20%</span>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Compact Portable Charger (External Battery) T22" target="_self">
                                                                                                   Compact Portable Charger (External Batte..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               <span class="price-new">$80.00</span>
                                                                                               <span class="price-old">$100.00</span>
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('88');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="ltabs-item ">
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/26-270x270.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                           <span class="label-product label-sale">-20%</span>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" target="_self">
                                                                                                   Lorem Ipsum dolor at vero eos et iusto o..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               <span class="price-new">$80.00</span>
                                                                                               <span class="price-old">$100.00</span>
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('105');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Mammo Diablo except to obtain some advan from">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/6-270x270.jpg" alt="Mammo Diablo except to obtain some advan from">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                           <span class="label-product label-sale">-20%</span>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Mammo Diablo except to obtain some advan from" target="_self">
                                                                                                   Mammo Diablo except to obtain some advan..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               <span class="price-new">$80.00</span>
                                                                                               <span class="price-old">$100.00</span>
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('110');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="ltabs-item ">
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/4-270x270.jpg" alt="Portable  Compact Charger (External Battery) t45">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                           <span class="label-product label-sale">-40%</span>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Portable  Compact Charger (External Battery) t45" target="_self">
                                                                                                   Portable Compact Charger (External Batt..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               <span class="price-new">$60.00</span>
                                                                                               <span class="price-old">$100.00</span>
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('78');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="LG 29UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 HDMI(2)">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/28-270x270.jpg" alt="LG 29UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 HDMI(2)">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="LG 29UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 HDMI(2)" target="_self">
                                                                                                   LG 29UC97-S 29"(21:9) FHD IPS LED 2560X..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               $101.00
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('40');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="ltabs-item ">
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/19-270x270.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                           <span class="label-product label-sale">-70%</span>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Compact Portable Charger (Power Bank) with Premium" target="_self">
                                                                                                   Compact Portable Charger (Power Bank) wi..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               <span class="price-new">$60.00</span>
                                                                                               <span class="price-old">$199.99</span>
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('66');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="SamSung 23UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 ">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/5-270x270.jpg" alt="SamSung 23UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 ">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="SamSung 23UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 " target="_self">
                                                                                                   SamSung 23UC97-S 29"(21:9) FHD IPS LED ..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               $279.99
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('64');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="ltabs-item ">
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Luma Extrem ich toil and pain can pcure him">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/9-270x270.jpg" alt="Luma Extrem ich toil and pain can pcure him">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                           <span class="label-product label-sale">-20%</span>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Luma Extrem ich toil and pain can pcure him" target="_self">
                                                                                                   Luma Extrem ich toil and pain can pcure ..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               <span class="price-new">$400.00</span>
                                                                                               <span class="price-old">$500.00</span>
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('60');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div class="item-inner product-thumb trg transition product-layout">
                                                                               <div class="product-item-container">
                                                                                   <div class="left-block ">
                                                                                       <div class="<?php echo base_url("assets/frontend/"); ?>image product-<?php echo base_url("assets/frontend/"); ?>image-container so-quickview ">
                                                                                           <a class="lt-<?php echo base_url("assets/frontend/"); ?>image" href="product.html" target="_self" title="Compact Portable Charger (External Battery) T23">
                                                                                               <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/product/electronic/17-270x270.jpg" alt="Compact Portable Charger (External Battery) T23">
                                                                                           </a>
                                                                                       </div>
                                                                                       <div class="box-label">
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="right-block">
                                                                                       <div class="caption">
                                                                                           <h4>
                                                                                               <a href="product.html" title="Compact Portable Charger (External Battery) T23" target="_self">
                                                                                                   Compact Portable Charger (External Batte..
                                                                                               </a>
                                                                                           </h4>
                                                                                           <p class="price">
                                                                                               $1,000.00
                                                                                           </p>
                                                                                       </div>
                                                                                       <div class="button-group2">
                                                                                           <button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('68');"> <span>Add to cart</span></button>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="ltabs-items items-category-41 grid" data-total="8">
                                                                   <div class="ltabs-loading"></div>
                                                               </div>
                                                               <div class="ltabs-items items-category-42 grid" data-total="8">
                                                                   <div class="ltabs-loading"></div>
                                                               </div>
                                                               <div class="ltabs-items items-category-43 grid" data-total="8">
                                                                   <div class="ltabs-loading"></div>
                                                               </div>
                                                               <div class="ltabs-items items-category-44 grid" data-total="8">
                                                                   <div class="ltabs-loading"></div>
                                                               </div>
                                                               <div class="ltabs-items items-category-45 grid" data-total="8">
                                                                   <div class="ltabs-loading"></div>
                                                               </div>
                                                               <div class="ltabs-items items-category-46 grid" data-total="8">
                                                                   <div class="ltabs-loading"></div>
                                                               </div>
                                                               <div class="ltabs-items items-category-47 grid" data-total="8">
                                                                   <div class="ltabs-loading"></div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4kdf block">
                                       <div class="banner-layout-5 row clearfix">
                                           <div class="banner-22 col-sm-4  banners">
                                               <div>
                                                   <a class="bn-shadow" href="#" title="Banner 22">
                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/banners/home6/banner22.jpg" alt="Static Image">
                                                   </a>
                                               </div>
                                           </div>
                                           <div class="banner-23 col-sm-4 banners">
                                               <div>
                                                   <a class="bn-shadow" href="#" title="Banner 23">
                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/banners/home6/banner23.jpg" alt="Static Image">
                                                   </a>
                                               </div>
                                           </div>
                                           <div class="banner-24 col-sm-4  banners">
                                               <div>
                                                   <a class="bn-shadow" href="#" title="Banner 24">
                                                       <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/banners/home6/banner24.jpg" alt="Static Image">
                                                   </a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>