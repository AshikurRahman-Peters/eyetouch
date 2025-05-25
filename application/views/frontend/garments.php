<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>All Garments <span>Item </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="<?php echo base_url('home') ?>">Home</a><i>|</i></li>
                    <li>Garments</li>
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
        if(isset($garmentProduct)):
            foreach($garmentProduct as $product):
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
                                <?php
                                    if($product->pro_old_price){ ?>
                                        <del>tk- <?php echo $product->pro_old_price ?></del>
                                   <?php } ?>

                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Formal Blue Shirt" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; endif; ?>

    </div>
</div>