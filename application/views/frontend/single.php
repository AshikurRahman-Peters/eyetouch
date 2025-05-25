<style>
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500&amp;display=swap');
</style>

<style media="screen">
.wrapper {
    text-align: center;
}

.wrapper .icon {
    position: relative;
    margin: 0px 10px;
    font-size: 22px;
    display: inline-block;
    align-items: center;
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    color: #333;
    text-decoration: none;
}

.wrapper .icon.facebook:hover span {
    color: #3b5999;
}

.wrapper .icon.twitter:hover span {
    color: #46c1f6;
}

.wrapper .icon.instagram:hover span {
    color: #e1306c;
}

.wrapper .icon.youtube:hover span {
    color: #de463b;
}


input[type="number"] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
}

.number-input {
    display: inline-flex;
    border: 1px solid #a1a1a1;
}

.number-input,
.number-input * {
    box-sizing: border-box;
}

.number-input button {
    outline: none;
    -webkit-appearance: none;
    background-color: transparent;
    border: none;
    align-items: center;
    justify-content: center;
    width: 2rem;
    height: 2rem;
    cursor: pointer;
    margin: 0;
    position: relative;
    box-shadow: none;
    font-size: 12px;
    background: #FFF;
    color: #000;
    outline: none !important;
}

.number-input input[type=number] {
    max-width: 4rem;
    padding: 0.5rem;
    border: none;
    font-size: 1rem;
    height: 2rem;
    text-align: center;
}

.add2cartContainer {
    display: inline-flex;
}

.btnAddToCart {
    width: auto;
    margin-left: 20px;
    background: #333;
    color: #FFF;
}

.btnAddToCart:hover,
.btnAddToCart:active,
.btnAddToCart:focus {
    background-color: #111 !important;
}

.btnOutOfStock {
    width: auto;
    background: #9e9e9e;
    color: #FFF;
}

.btnOutOfStock:hover,
.btnOutOfStock:active,
.btnOutOfStock:focus {
    background-color: #9e9e9e !important;
}

/* .product-details {
        background: #f8f8f8;
        padding: 15px;
        border-radius: 5px;
        box-shadow: rgb(50 50 93 / 25%) 0px 6px 12px -2px, rgb(0 0 0 / 30%) 0px 3px 7px -3px;
        font-size: .9rem;
        border: 1px solid #0000000f;
    } */

.product-details {
    background: unset;
    padding: 0px;
    font-size: .9rem;
}

.zoomWindow {
    background-color: {
            {
            $productid->color.' !important'
        }
    }

    ;
}

.thumbswitch {
    margin-top: 10px;
    padding: 0px 30px;
    text-align: center;
}

.thumbswitch img {
    width: 100px;
}

.thumbswitch .thumb {
    border: 1px solid #000;
    display: inline-block;
}

.tooltip {
    position: relative;
    display: inline-block;
    opacity: 1 !important;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 140px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 150%;
    left: 50%;
    margin-left: -75px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}

.affiliate_link_container {
    margin-top: 10px;
}

#affiliate_link {
    width: 100%;
    margin: 10px 0px;
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
    background-color: #000000;
    border: 1px solid #9e9e9e;
    color: #FFF;
    font-size: 14px;
    cursor: pointer;
    -webkit-transition: 0.4s ease-in-out;
    transition: 0.1s ease-in-out;
    border-radius: 0px !Important;
}

/* .self-product-description table {
        background: #ffffff;
        width: 100% !important;
        font-size: 13px;
        border-color: #f8f8f8;
        border-style: solid;
    } */

.self-product-description table {
    background: #f3f3f3;
    width: 100% !important;
    font-size: 13px;
    border-color: #ffffff;
    border-style: solid;
}

.self-product-description table td,
tr,
th {
    border-style: none solid solid none;
}

.product-image-container {
    width: 100%;
    margin-left: 0;
    overflow: visible;
}

.color_names_container {
    margin-bottom: 12px;
}

.color_container {
    display: flex;
    width: fit-content;
}

.color_container>div {
    height: 20px;
    line-height: 20px;
    font-size: 14px;
    padding: 0px 5px;
}

.badges {
    top: 15px;
    left: 30px;
    position: absolute;
}

.badges>div {
    margin-bottom: 5px;
}

.sale,
.free_delivery,
.out_of_stock {
    color: #fff;
    font-size: .9rem;
    padding: 0px 10px 0 10px;
    width: fit-content;
    font-weight: 500;
    text-transform: uppercase;
    box-shadow: 0px 0px 9px -3px #00000087;
}

.sale {
    background: #f44336;
}

.free_delivery {
    background: #ff9800;
}

.out_of_stock {
    background: #b1b1b1;
}

.campaign {
    font-family: monospace;
    background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
}

.out_of_stock_btn {
    background-color: #b1b1b1 !important;
    color: #fff;
}

.priceDiv {
    line-height: 1rem;
}

@media(max-width: 996px) {
    .badges {
        top: 10px;
        left: 25px;
    }

    .sale,
    .free_delivery {
        font-size: .7rem;
    }

    .wrapper-div {
        padding-top: 14px;
    }

    .thumbswitch img {
        width: 55px;
    }
}

input.form-control.ref-url-input {
    font-size: small;
    height: 30px;
    margin-right: 5px;
}

button.btn.btn-primary.ref-url-button {
    height: 30px;
    font-size: small;
    padding-top: 6px;
}

.ref-url-label {
    width: 100%;
    display: block;
    font-size: small;
    font-weight: bold;
}

.ref-url-container {
    margin-bottom: 10px;
}

.popupMessage1 img {
    width: 27% !important;
}
</style>



<script>
ifThisIsApp = new URLSearchParams(window.location.search);
if (ifThisIsApp.get("app") == "true") {
    localStorage.setItem('IfThisIsApp', true);
}
if (localStorage.getItem('IfThisIsApp')) {
    document.querySelector('.fb-customerchat').className = "customerchat-hide";
    document.querySelector('.customerchat-hide').style.display = "none";
}
</script>

<script type="text/javascript">
var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
var eventer = window[eventMethod];
var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
// Listen to message from child window
eventer(messageEvent, function(e) {
    if (e.data === "Iframe Login Done") {
        $('.commonmodal').modal('toggle');
        window.loggedInSuccess = true;
    }
}, false);

function inIframe() {
    try {
        return window.self !== window.top;
    } catch (e) {
        return true;
    }
}

function hideNavAndFooter() {
    if (inIframe()) {
        //console.log(window.location.href);
        if (window.location.href.includes("/login") || window.location.href.includes("/register")) {
            document.querySelector(".navbar").style.display = "none";
            document.querySelector(".mobile-nav-sidebar").style.display = "none";
            document.querySelector(".footer-container").style.display = "none";
            document.querySelector('.fb-customerchat').className = "customerchat-hide";
            document.querySelector('.customerchat-hide').style.display = "none";
        }
    }
}

function invokeLogin() {
    /*document.querySelector('.commonmodal-header').textContent = "Oops !!";
    document.querySelector('.commonmodal-body').style.overflow = "hidden";
    document.querySelector('.commonmodal-body').innerHTML =
        '<iframe id="loginIframe" src="/login" scrolling="no" style="width:100%; height:530px; overflow-y: hidden; overflow-x: hidden;"  marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" seamless="seamless" ></iframe>';
    $('.commonmodal').modal('toggle');
    */
    document.querySelector('.commonmodal-header').textContent = "Login is required";
    document.querySelector('.commonmodal-body').style.overflow = "hidden";
    document.querySelector('.commonmodal-body').innerHTML =
        '<div style="width: 100%; border: 0px solid; border-radius: 5px; background: #efefef; padding: 15px; text-align: left;">You need to Log in first to create a Wish List and add items to it. This ensures that your list will be saved in your account and will be available when you Log in again.</div><div style="width: 100%; padding: 15px; text-align:center;"><a class="btn btn-primary bulk-landing-start" href="/login">Login Now</a><br/><a href="/register" style="text-decoration:underline; font-size: 0.8rem;">New User? Click here to Register</a></div>';
    $('.commonmodal').modal('toggle');
}
window.onload = hideNavAndFooter;
</script>


<div class="wrapper-div">
    <div class="container">
    </div>
    <div class="container-fluid">
        <?php
if (isset($singleProduct)) {
    foreach ($singleProduct as $single) {

        $image_data = $this->db->query("
        select * from tbl_image image
        where image.product_id = '$single->pro_id' and image.status = 1            
        ")->result();
       
        $query_sub_cat=$this->db->query("Select * from tbl_sub_category where status ='a' and  sub_category_id ='$single->sub_category_id' ")->result();
       ?>

        <div class="home-element" style="margin-top: 30px" id="singleproduct">
            <div class="col-sm-12 col-md-6 col-lg-6 productfixed">
                <div class="product-image-container">
                    <img data-img_url="<?php echo base_url('uploads/product/') . $single->pro_image; ?>"
                        class="elZoom product-image tee-ui-front"
                        src="<?php echo base_url('uploads/product/') . $single->pro_image; ?>" alt="" />
                    <img data-img_url="<?php echo base_url('uploads/product/') . $single->pro_image; ?>"
                        style="display:none" class="elZoom product-image"
                        src="<?php echo base_url('uploads/product/') . $single->pro_image; ?>" alt="" />
                    <img data-img_url="<?php echo base_url('uploads/product/') . $single->pro_image; ?>"
                        style="display:none" class="elZoom product-image"
                        src="<?php echo base_url('uploads/product/') . $single->pro_image; ?>" alt="" />
                    <!-- <div class="badges">
                        <div class="sale">
                            <span>Sale</span>
                        </div>
                    </div> -->
                </div>

                <div class="thumbswitch">
                    <?php
                if (isset($image_data)) {
                foreach ($image_data as $single_image_data) {?>

                    <div data-img_url="<?php echo base_url('uploads/images/') . $single_image_data->image; ?>"
                        class="imageSwitch thumb"><img
                            src="<?php echo base_url('uploads/images/') . $single_image_data->image; ?>" alt="" /></div>
                    <?php } }?>

                </div>

                <script>
                $(document).ready(function() {
                    // Attach click event to each .imageSwitch element
                    $('.imageSwitch').on('click', function() {
                        // Get the data-img_url attribute value of the clicked element
                        var imgUrl = $(this).data('img_url');

                        // Update the source of the main product image
                        $('.product-image').attr('src', imgUrl);
                    });
                });
                </script>
                <br>

                <div class="product-related hidden-sm-down">
                    <?php 
                $sub_category_data = $this->db->query("select * from  tbl_products 
                where pro_id != '$single->pro_id' and sub_category_id = '$single->sub_category_id' and pro_status = 1 limit 1")->row();
                if($sub_category_data){
            
                    ?>



                    <h5 class="tiny-margin">Frequently Bought Together</h5>
                    <hr style="margin-top: -10px; border-top: 1px solid #000;">
                    <div class="row" style="margin: -7px; padding: 0px;">
                        <div class="" style="display:flex">
                            <a class="product-link"
                                href="<?php echo base_url(); ?>single/<?php echo $sub_category_data->pro_id ?>">
                                <img style="width: 170px"
                                    src="<?php echo base_url('uploads/product/') . $sub_category_data->pro_image; ?>"></img>
                            </a>
                            <div style="margin-left: 20px">
                                <div><a class="product-link"
                                        href="71874-mens-urban-edition-premium-full-sleeve-t-shirt-darkness.html">
                                        <h6><?php echo $sub_category_data->pro_title;?></h6>
                                </div></a>
                                <div>
                                    <div>
                                        <strong>৳ <?php echo $single->pro_price;?></strong> <strike>৳
                                            <?php echo $single->pro_old_price;?></strike>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }else{
                    
                } ?>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="product-details">
                    <div>
                        <h4 class="tiny-margin"><?php echo $single->pro_title;?></h4>

                        <div class="priceDiv">
                            <p style="font-family:Arial, Helvetica, sans-serif">
                                <span style="color:#949494; font-size: 15px">৳ </span><span class="regular_price_field"
                                    style="text-decoration: line-through; color:#949494;font-weight: bold;font-size: 17px;"><?php echo $single->pro_old_price;?></span>&nbsp;
                                <span style="color:#949494; font-size: 15px">৳ </span><span class="price_field"
                                    style="color:#000000;font-weight: bold;font-size: 25px;"
                                    value="<?php echo $single->pro_price;?>"><?php echo $single->pro_price;?></span>
                            </p>
                        </div>

                        <div>

                            <strong style="width: 80px; line-height: 36px;font-family: 'Rajdhani', sans-serif;">Select
                                Size: </strong>
                            <ul class="size-selectors-container list-inline asdf">
                                <div class="size-selectors-container list-inline" style="padding: 0px">
                                    <?php $size_data = $this->db->query("select * from tbl_size where product_id ='$single->pro_id' and size_status=1")->result(); 
                                    if (isset($size_data)) {
                                    foreach ($size_data as $size_value) {
                                    ?>
                                    <div class="size-selector list-inline-item" onclick="activateSizeSelector(this)"
                                        data-productid=" <?php echo $size_value->size_id;?>"
                                        data-size=" <?php echo $size_value->size_name;?>">
                                        <?php echo $size_value->size_name;?>
                                    </div>
                                    <?php }}?>
                                </div>
                                <span class="no-size-selected" style="color:rgb(230, 28, 28); display:none;">Please
                                    select a size &nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                            </ul>
                            <br>
                            <strong style="width: 80px; line-height: 36px; font-family: 'Rajdhani', sans-serif;">Select
                                Color: </strong>
                            <ul class="color-selectors-container list-inline">
                                <div class="color-selectors-container list-inline" style="padding: 0px">
                                    <?php $color_data = $this->db->query("select * from tbl_colors where product_id ='$single->pro_id' and colors_status=1")->result(); 
                                                if (isset($color_data)) {
                                                    foreach ($color_data as $color_value) {
                                                ?>
                                    <div class="color-selector list-inline-item" onclick="activateSelector(this)"
                                        data-productid="<?php echo $color_value->colors_id;?>"
                                        data-color="<?php echo $color_value->colors_name;?>"
                                        style="background-color: <?php echo $color_value->colors_code;?>;">
                                    </div>
                                    <?php }}?>
                                </div>
                                <span class="no-selector-selected" style="color: rgb(230, 28, 28); display:none;">Please
                                    select a color
                                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                </span>
                            </ul>
                        </div>
                        <br>
                        <div class="add2cartContainer">
                            <div class="number-input">
                                <button class="quantity-selector-step"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                        class="fa fa-minus"></i></button>
                                <input class="quantity qty quantity-selector" data-productid="72210" min=1
                                    name="quantity" value=1 type="number">
                                <input class="productId qty quantity-selector" name="productId"
                                    value="<?php echo $single->pro_id;?>" type="hidden">
                                <button class="quantity-selector-step"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                        class="fa fa-plus"></i></button>
                            </div>

                            <button class="btnAddToCart btn btn-success btn-block main-btnAddToCart"
                                data-photo="tee-ui-front" data-productid="72210" data-color="#FFFFFF" data-size=""
                                data-quantity=1><i class="fa fa-plus"></i> &nbsp;Add To Cart</button>
                        </div>

                        <hr style="border-top: 1px solid #000;">
                        <a href="https://wa.me/<?php echo str_replace(' ','-',$getContact[0]->phone);?>"
                            target="_blank">
                            <button class="btn btn-success "><i class="fa-brands  fa-whatsapp"></i>
                                <?php echo str_replace(' ','-',$getContact[0]->phone);?></button>
                        </a>
                        <a href="tel:<?php echo str_replace(' ','-',$getContact[0]->phone);?>">
                            <button class="btn btn-primary"><i class="fa-solid fa-phone"></i>
                                <?php echo str_replace(' ','',$getContact[0]->phone);?></button>
                        </a>
                        <hr style="border-top: 1px solid #000;">
                        <div class='self-product-description' style='padding: 0 0 15px 0'>
                            <?php echo $single->pro_description;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">

                <div class="fb-share-button"
                    data-href="https://Eye Touch.com/product/72210-mens-premium-jacket-solstice-black"
                    data-layout="button" data-size="small"><a target="_blank"
                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                        class="fb-xfbml-parse-ignore">Share</a></div>
                <a href="#" class="icon twitter">
                    <span><i class="fa-brands fa-twitter"></i></span>
                </a>
                <a href="#" class="icon instagram">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>

            </div>

        </div>
        <?php }}?>
    </div>

    <div class="product-related home-element" style="margin-top: 30px;">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h5 class="tiny-margin">You may also like</h5>
            <hr style="margin-top: -10px; border-top: 1px solid #000;">
            <div class="row" style="margin: -7px; padding: 0px;">
                <?php 
                $category_data = $this->db->query("select * from  tbl_products 
                where pro_id != '$single->pro_id' and cat_id = '$single->cat_id' and pro_status = 1 limit 12")->result();
                if($category_data){
                    foreach($category_data as $category_data_value){
                    ?>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-3 col-xs-6">

                    <div class="home-product">
                        <a class="product-link"
                            href="<?php echo base_url(); ?>single/<?php echo $category_data_value->pro_id ?>">
                            <img
                                src="<?php echo base_url('uploads/product/') . $category_data_value->pro_image; ?>"></img>
                        </a>
                        <div class="product-info">
                            <div class="product-name"><?php echo $category_data_value->pro_title;?></div>
                        </div>
                        <div class="product-price">
                            <div>
                                <strong>৳ <?php echo $category_data_value->pro_price;?></strong> <strike>৳
                                    <?php echo $category_data_value->pro_old_price;?></strike>
                            </div>
                        </div>
                    </div>
                    <button class="add2cartModal related_product_view btn btn-black btn-sm"
                        style="margin-top: 15px; width: 100%"
                        onclick="openProductModal('<?php echo  $category_data_value->pro_id; ?>')"><i
                            class="fa fa-plus"></i>&nbsp;
                        Add to Cart</button>
                </div>
                <?php }}?>

            </div>
        </div>
    </div>

    <div class="product-related home-element" style="margin-top: 30px;">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h5 class="tiny-margin">People also purchased</h5>
            <hr style="margin-top: -10px; border-top: 1px solid #000;">
            <div class="row" style="margin: -7px; padding: 0px;">
                <?php 
                $query =  $this->db->where('pro_status', 1)->order_by('pro_id', 'RANDOM')->limit(12)->get('tbl_products');
                $category_data = $query->result();
                if($category_data){
                    foreach($category_data as $category_data_value){
                    ?>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-3 col-xs-6">

                    <div class="home-product">
                        <a class="product-link"
                            href="<?php echo base_url(); ?>single/<?php echo $category_data_value->pro_id ?>">
                            <img
                                src="<?php echo base_url('uploads/product/') . $category_data_value->pro_image; ?>"></img>
                        </a>
                        <div class="product-info">
                            <div class="product-name"><?php echo $category_data_value->pro_title;?></div>
                        </div>
                        <div class="product-price">
                            <div>
                                <strong>৳ <?php echo $category_data_value->pro_price;?></strong> <strike>৳
                                    <?php echo $category_data_value->	pro_old_price;?></strike>
                            </div>
                        </div>
                    </div>
                    <button class="add2cartModal related_product_view btn btn-black btn-sm"
                        style="margin-top: 15px; width: 100%"
                        onclick="openProductModal('<?php echo  $category_data_value->pro_id; ?>')"><i
                            class="fa fa-plus"></i>&nbsp; Add to Cart</button>
                </div>
                <?php }}?>

            </div>
        </div>
    </div>

    <br><br>

</div>

<script type="text/javascript">
// JavaScript function to handle the onclick event and toggle the active class
function activateSizeSelector(clickedElement) {
    // Remove the active class from all elements with the same class
    var elements = document.getElementsByClassName("size-selector");
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove("active");
    }

    // Toggle the active class on the clicked element
    clickedElement.classList.toggle('active');
}

function activateSelector(clickedElement) {
    // Remove the active class from all elements with the same class
    var elements = document.getElementsByClassName("color-selector");
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove("active");
    }

    // Toggle the active class on the clicked element
    clickedElement.classList.toggle('active');
}

function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none'; // Hide the popup
}
// Handle "Add to Cart" button click
$('.btnAddToCart').off('click').on('click', function() {

    var selectedproductSize = $('#singleproduct .size-selector.active').data(
        'size');
    var selectedproductColor = $('#singleproduct .color-selector.active').data(
        'color');
    var selectedColor = '';
    if (selectedproductColor) {
        selectedColor = selectedproductColor;
    } else {
        selectedColor = 'NO COlor';
    }
    var receivedProductId = $('#singleproduct .productId').val();
    var quantity = $('#singleproduct .quantity').val();
    var receivedProductPrice = $('#singleproduct .price_field').text();

    // Check if a size is selected
    if (selectedproductSize) {
        // Send AJAX request with product ID, selected size, and other details
        $.ajax({
            url: '<?php echo base_url();?>/Product/productAddTocart', // Replace with your actual endpoint
            method: 'POST',
            data: {
                product_id: receivedProductId, // Add the actual product ID
                size: selectedproductSize,
                color: selectedColor,
                price: receivedProductPrice,
                quantity: quantity,
            },
            success: function(response) {




                var popup = document.getElementById('popup');
                var popupMessage = document.getElementById(
                    'popupMessage');

                if (response === 'alreadyAdded') {
                    popupMessage.innerHTML =
                        '<img height="100px" width="27%;" src="<?php echo base_url() ?>img/sad.gif" alt="Error Icon" class="icon" /> </br>' +
                        'This product size already added';
                    popupMessage.style.color = 'red';
                    popupMessage.style.fontSize = '28px';
                    popup.style.display = 'flex';
                } else {
                    popupMessage.innerHTML =
                        '<img height="100px" width="27%;" src="<?php echo base_url() ?>img/happy.gif" alt="Success Icon" class="icon" /></br>' +
                        'Product added successfully';
                    popupMessage.style.color = 'green';
                    popupMessage.style.fontSize = '28px';
                    popup.style.display = 'flex';
                }

                // Hide the message after 2 seconds
                setTimeout(function() {
                    popup.style.display = 'none';
                    location.reload();
                }, 2000);


                // Add any additional logic here after adding to cart
            },
            error: function(error) {
                console.error(
                    'Error adding product to cart:',
                    error);
            }
        });
    } else {
        alert('Please select a size & color before adding to cart.');
    }
})
</script>