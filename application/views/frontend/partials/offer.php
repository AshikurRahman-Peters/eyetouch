<div class="home-element">

    <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <?php $offer_two=$this->db->query("SELECT * FROM tbl_featured WHERE status = 1 and  type = 'HOT_DEAL'")->row(); 
            
            if($offer_two):
            ?>
            <a class="product-link" href="<?php echo base_url().'shop/'.url_title($offer_two->title, '-', true)?>">
                <div>
                    <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_two->image;?>"></img>
                </div>
                <div class="hero-link">
                    <?php echo $offer_two->title;?>
                </div>
            </a>
            <?php endif; ?>
        </div>
        <?php
       $AllProductData = $this->db->query("select * from tbl_products where pro_status = 1 and 	future_product = 'HOT_DEAL'")->result();
        if (isset($AllProductData)) :
            foreach ($AllProductData as $product) :
        ?>

        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-3 col-xs-6">
            <a class="product-link" href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>">
                <div class="home-product">
                    <img src="<?php echo base_url(); ?>/uploads/product/<?php echo $product->pro_image ?>"></img>
                    <div class="product-info">
                        <div class="product-name"><?php echo substr($product->pro_title,0, 17).'..'; ?></div>
                    </div>
                    <div class="product-price">
                        <div>
                            <strong>৳ <?php echo $product->pro_price ?></strong> <strike>৳
                                <?php echo $product->pro_old_price ?></strike>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach;
        endif; ?>
    </div>
</div>