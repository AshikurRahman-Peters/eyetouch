<style>
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

.mobile-nav-sidebar>.dark {
    background: #666;
    color: #FFF;
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
    position: absolute;
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

.nav-buyer {
    padding-bottom: 20px;
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

.cart-table tbody td.spinner {
    padding: 3% !important;
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

ul.list-inline.color-seletcor-container {
    position: relative;
}

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
    line-height: 1.5rem;
    margin-top: 0px;
    height: 1.5rem;
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

.Premium_pTag {
    display: none;
}

.products-cart-button-loader {
    font-size: 1em;
}

.products-cart-button {
    background: #00aeef;
    color: #FFF;
}

.cart-table td select {
    float: right;
    font-size: .8rem;
    line-height: 1.25rem;
    padding: 0rem 1rem;
    height: 2rem !important;
    border: none;
    background: #f8f8f8;
}

td.Price.price-container>* {
    display: inline-flex;
}

@media(max-width: 996px) {
    .cart-table tbody td.spinner {
        padding: 41% 0% !important;
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

    .cart-table td select {
        float: right;
        font-size: .8rem;
        line-height: 1.25rem;
        padding: 0rem 1rem;
        height: 1.5rem !important;
        border: none;
        background: #FFF;
    }

    .price-container::before,
    .subtotal-container::before {
        float: left;
        text-align: left;
    }

    .price-container,
    .subtotal-container {
        text-align: right;
    }

    .cart-table {
        width: 95%;
        margin: 0% 0% 0% 2.5%;
        background: #f8f8f8;
    }

    tr.new-designed-element {
        border-bottom: 10px solid #ffffff;
    }
}
</style>
<div class="modal fade viewmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title viewmodal-header">
                    Product Image
                </h4>
            </div>
            <div class="modal-body viewmodal-body">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3 style="text-align:center;">Your Cart</h3>
    <br>
    <div class="row">

        <table class="cart-table table table-hover table-condensed">

            <thead>
                <tr>
                    <th style="width:45%">Product</th>
                    <th style="width:10%">Unit Price</th>
                    <th style="width:15%">Size</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:12%" class="text-center">Subtotal</th>
                    <th style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $s_id = session_id();
        $stmt1 = "SELECT * FROM tbl_cart WHERE	s_id='$s_id'";

        $sql1  = $this->db->query($stmt1);
        $items = $sql1->result_array();
        $amountTotal = 0;
        foreach ($items as $key => $value) {
            $amount = $value['pro_price'] * $value['pro_quantity'];
            $amountTotal = $amountTotal + $amount; ?>

                <tr class="new-designed-element" style="position:relative" data-color="#ffffff"
                    data-type="mens polo t-shirt" data-productkey="71911" data-price="695" data-prevsize="XL"
                    data-prevqty="1">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 xs-product-photo product-photo">
                                <img class="img-responsive"
                                    src="<?php echo base_url() . 'uploads/product/' . $value["pro_image"];?> "
                                    data-frontimg="<?php echo base_url() . 'uploads/product/' . $value["pro_image"];?> "
                                    data-backimg="<?php echo base_url() . 'uploads/product/' . $value["pro_image"];?> "
                                    onclick="imagePopup(event)" style="background-color:#ffffff;">
                            </div>
                            <div class="col-sm-9">
                                <a href="<?php echo base_url('single/'). $value['pro_id'];?>">
                                    <h6 class="nomargin"><?php echo $value['pro_title'];?></h6>
                                </a>

                            </div>
                        </div>
                    </td>
                    <td data-th="Price" class="Price price-container">
                        <span>&nbsp;</span>
                        <span class="pull-right">৳ <?php echo $value['pro_price'];?></span>
                        <div class="pull-right">
                            <span style="color:#000">৳</span>
                            <span style="text-decoration: line-through;"
                                class="cart_item_regular_price"><?php echo $value['pro_old_price'];?></span>
                            &nbsp;
                        </div>
                    </td>
                    <td data-th="Size">
                        <select class="form-control cartinput-size-select" id="size_selected"
                            data-id="<?php echo $value['cart_id'];?>">
                            <?php
                                    $pro_sizes =$this->db->query("SELECT * FROM tbl_size where product_id ='".$value['pro_id']."'and size_status =1 ")->result();
                                    if(isset($pro_sizes))
                                    {
                                        foreach($pro_sizes as $pro_size){
                                            ?>
                            <option value="<?php echo $pro_size->size_name; ?>"
                                <?php if ($pro_size->size_name == $value['pro_size']) echo 'selected'; ?>>
                                <?php echo $pro_size->size_name; ?>
                            </option>

                            <?php }}?>
                        </select>
                    </td>
                    <td data-th="Quantity">
                        <select class="form-control cartinput-quantity" id="quantity_up"
                            data-id="<?php echo $value['cart_id'];?>">
                            <?php
                                    $pro_sizes =$this->db->query("SELECT * FROM tbl_size where product_id ='".$value['pro_id']."'and size_status =1 ")->result();
                                    if(isset($pro_sizes))
                                    {
                                        foreach ($pro_sizes as $pro_size) {
                                            $selectedQty = $value['pro_quantity'];
                                            
                                            // Assuming $pro_size->available_qty is a numeric quantity
                                            for ($qty = 1; $qty <= $pro_size->available_qty; $qty++) {
                                                $isSelected = ($qty == $selectedQty) ? 'selected' : '';
                                                ?>
                            <option value="<?php echo $qty; ?>" <?php echo $isSelected; ?>>
                                <?php echo $qty; ?>
                            </option>
                            <?php } ?>
                            <?php }}?>
                        </select>
                    </td>
                    <td data-th="Subtotal" class="text-center subtotal-container">
                        <!-- <span class="cart_regular_price_field" style="text-decoration: line-through;"><span
                                style="color:#000">৳</span> 800</span>&nbsp; -->
                        <span class="cartinput-price">৳ <?php echo $amount; ?></span>
                    </td>
                    <td class="actions" data-th="">
                        <!-- <button class="btn btn-info btn-sm cart-buttons addmoreBtn" data-productkey = '71911'  data-title = "Single Jersey Knitted Cotton Polo - Chocolate"  data-image = "/products/6217845399255-square.jpg" data-color="#ffffff"><i class="fa fa-plus"></i> Add another Size</button>
                                <button class="btn btn-danger btn-sm cart-buttons" onclick="removeFromCart(event)"><i class="fa fa-trash-o"></i> Remove</button> -->

                        <button class="btn btn-sm cart-buttons products-cart-button"
                            data-title="Single Jersey Knitted Cotton Polo - Chocolate"
                            data-image="/products/6217845399255-square.jpg" data-productkey="71911"
                            onclick="openProductModal('<?php echo $value['pro_id'];?>')" data-color="#ffffff"><i
                                class="fa fa-plus"></i> Add another Size <i
                                class="products-cart-button-loader fa fa-circle-o-notch fa-spin fa-3x fa-fw"
                                style="display: none;"></i></button>
                        <button class="btn btn-danger btn-sm cart-buttons" data-id="<?php echo $value['cart_id'];?>"
                            id="remnoveItem"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>

                <?php }?>
            </tbody>
        </table>
        <div style="text-align:center;">
            <div>
                <h4 style="padding-top: 15px;">Total Amount (৳): <del class="prev-total"></del><span
                        class="checkout-total"><?php echo $amountTotal ; ?></span></h4>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <a href="<?php echo base_url('add_checkout');?>" class="btn btn-block btn-warning" role="button">
                        <button type="button" name="button" class="btnproceed btn btn-block btn-success">Place
                            Order</button>
                    </a>
                    <br><br>
                    <a href="<?php echo base_url();?>shop/shopping" class="btn btn-block btn-warning"
                        role="button">Continue
                        Shopping</a>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <?php
        if (isset($getContact)){
          
        }
        ?>
        <br>
        <p
            style="font-style:italic;text-align:center; margin: 15px; padding: 15px; background:#f6f6f6; border: 0px solid; border-radius:5px;">
            * If you wish to make a bulk order, please call us at <span
                style="font-weight:bold"><?php echo $getContact[0]->phone;?> </span>
            or email
            at <span style="font-weight:bold"><?php echo $getContact[0]->email;?> </span> for more information.
        </p>
        <p>

        </p>
        <div class="row">
            <div class="alert-container col-sm-12" style="position:fixed; left:calc(50% - 43%); top: 18%; width:85%">
            </div>
        </div>

    </div>
    <br><br>
    <div class="col-sm-12">
        <h4 style="text-align: center;">You May Also Like</h4>

        <br>
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
                            <a class="product-link" href="#">
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
                                class="fa fa-plus"></i>&nbsp; Add to Cart</button>
                    </div>
                    <?php }}?>

                </div>
            </div>
        </div>


    </div>
    <div class="col-sm-1">

    </div>
</div>


<!-- Main Container  -->
<div class="container" id="loadCartHtml">



</div>


<!-- //Main Container -->


<section class="main-contain bg-white">
    <div class="container" id="loadCartHtml">

    </div>
</section>



<script>
function imagePopup(event) {
    var product = event.target.dataset;
    if (product.frontimg == "null") {
        document.querySelector('.viewmodal-body').innerHTML = '<img class="preview-img-front" src="' +
            product.backimg + '" style="background:' + event.target.style.backgroundColor +
            '; width: 75%; margin-left: 12.5%;"/>';
    } else if (product.backimg == "null") {
        document.querySelector('.viewmodal-body').innerHTML = '<img class="preview-img-back" src="'
        product
            .frontimg + '" style="background:' + event.target.style.backgroundColor +
            ';width: 75%; margin-left: 12.5%;"/>';
    } else {
        document.querySelector('.viewmodal-body').innerHTML =
            '<div class="row text-center"><button class="btn btn-sm btn-secondary" onClick="showFrontPreview()">Front Preview</button><button class="btn btn-sm btn-secondary" onClick="showBackPreview()">Back Preview</button></div><img class="preview-img-front" src="' +
            product.frontimg + '" style="background:' + event.target.style.backgroundColor +
            ';width: 75%; margin-left: 12.5%;"/>' + '</br>' + '<img class="preview-img-back" src="' + product
            .backimg + '" style="background:' + event.target.style.backgroundColor +
            ';width: 75%; margin-left: 12.5%; display:none;"/>';
    }
    document.querySelector('.viewmodal').style.zIndex = "2000";
    $('.viewmodal').modal('toggle');
}



var path = '<?php echo base_url();?>FrontendController/add_cart';

function loadCartHtml() {
    $.ajax({
        url: path,
        method: "POST",
        beforeSend() {
            $("#loadCartHtml").html(
                "<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
        },
        success: function(data) {
            $("#loadCartHtml").html(data);
        }
    })
}




// Remove Items

$(document).on('click', '#remnoveItem', function() {
    var id = $(this).attr('data-id');
    var path = '<?php echo base_url();?>Product/removeCart';


    $.ajax({
        url: path,
        method: "POST",
        data: {
            id: id
        },
        success: function(data) {
            location.reload();
        }

    })
});

$(document).on('change', '#quantity_up', function() {

    var path = '<?php echo base_url();?>Product/quantiyUpdate';
    var id = $(this).attr('data-id');
    var qury = $(this).val();
    if (qury == '0') {
        alert('Minimum at last one quantity');
    }

    $.ajax({
        url: path,
        method: "POST",
        data: {
            id: id,
            qury: qury
        },
        success: function(data) {
            location.reload();
        }

    });


});
$(document).on('change', '#size_selected', function() {

    var path = '<?php echo base_url();?>Product/quantiyUpdate';
    var id = $(this).attr('data-id');
    var size = $(this).val();
    if (size == '') {
        alert('Select product size please');
    }

    $.ajax({
        url: path,
        method: "POST",
        data: {
            id: id,
            size: size
        },
        success: function(data) {
            location.reload();
        }

    });


});
</script>

<!--grids-->
<!-- footer -->