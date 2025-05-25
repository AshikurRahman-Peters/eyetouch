<div class="home-content">

    <div class="home-element">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div class="shoptop">
                    <a class="hot-container-link mindfordesign" href="<?php echo base_url('shop');?>">
                        <div class="hot-image-title light">
                            <div class="hot-topic">FIND YOUR THING</div>
                            <div class="hot-link">Shop our product range</div>
                        </div>
                    </a>
                </div> -->
                <div class="campaign shoptop">
                    <a class="hot-container-link mindfordesign" href="<?php echo base_url();?>/shop/newarrival">
                        <div class="hot-image-title light">
                            <div class="hot-topic">NEW ARRIVAL</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home-element">
        <div class="row">
            <?php
        if (isset($AllProductData)) :
            foreach ($AllProductData as $product) :
        ?>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class='flex-cat-block'>
                    <div class='flex-cat-img'>
                        <a href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>">
                            <img src='<?php echo base_url(); ?>/uploads/product/<?php echo $product->pro_image ?>'>
                        </a>
                        <div class='flex-cat-button'>
                            <a href="#"><?php echo substr($product->pro_title,0, 17).'..'; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;
        endif; ?>
        </div>
    </div>

    <div class="home-element">
        <div class="row">
            <?php $offer_two=$this->db->query("SELECT * FROM tbl_featured WHERE status = 1 order by id asc limit 3")->result();
                                                            foreach ($offer_two as $key => $value) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a class="product-link" href="<?php echo base_url().'shop/'.url_title($value->title, '-', true)?>">
                    <div>
                        <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $value->image;?>"></img>
                    </div>
                    <div class="hero-link">
                        <?php echo $value->title;?>

                    </div>
                </a>
            </div>
            <?php }?>

        </div>
    </div>
</div>


<!--/grids-->
<?php //$this->load->view('frontend/partials/brands') 
?>