<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Product <span>Page </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="<?php echo base_url('home') ?>">Home</a><i>|</i></li>
                    <li>Product</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>
<!-- /banner_bottom_agile_info -->


<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <?php
        if(isset($AllProductData)):
            foreach($AllProductData as $product):
                ?>

                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="<?php echo base_url(); ?>/uploads/product/<?php echo $product->pro_image ?>" alt="" class="pro-image-front">
                            <img src="<?php echo base_url(); ?>/uploads/product/<?php echo $product->pro_image ?>" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>"><?php echo $product->pro_title ?></a></h4>
                            <div class="info-product-price">
                                <span class="item_price">tk- <?php echo $product->pro_price ?></span>
                             
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                               <form id="addToCartForm" method="post">
                                        <fieldset>
                                            <input type="hidden" name="product_id" id="product_id" value="<?php echo $product->pro_id;?>">

                                            <input type="submit" name="submit" value="Add to cart" class="button" id="addToCartProduct" data-id="<?php echo $product->pro_id;?>">
                                        </fieldset>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; endif; ?>

    </div>
</div>