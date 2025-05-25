<div class="wrapper-div">

    <div class="container-fluid">
        <div id="homepage">
            <div class="row">
                <a href="<?php echo base_url('shop/home');?>">
                    <picture>
                        <?php $slider = $this->db->query("SELECT * FROM `tbl_slider` WHERE status=1 limit 1")->result();
                                            foreach ($slider as $key => $value) {
                                            ?>
                        <source media="(max-width: 480px)"
                            srcset="<?php echo base_url("/uploads/slider/") . $value->image;?>">
                        <source media="(max-width: 900px)"
                            srcset="<?php echo base_url("/uploads/slider/") . $value->image;?>">
                        <source media="(max-width: 1200px)"
                            srcset="<?php echo base_url("/uploads/slider/") . $value->image;?>">

                        <img src="<?php echo base_url("/uploads/slider/") . $value->image;?>" alt="Eye TouchHome Top">
                        <?php }?>
                    </picture>
                </a>
            </div>
            <div class="body-menu">
                <div class="body-menu-item">
                    <div class="skew">
                        <a class="no-style-link unskew" href="<?php echo base_url('shop');?>">SHOP NOW</a>
                    </div>
                    <?php $category = $this->db->query("Select * from tbl_category where cat_status = 1")->result(); 
                        foreach ($category as $category_value) {?>
                    <div>
                        <a class="no-style-link"
                            href="<?php echo base_url('shop/').$category_value->cat_name;?>"><?php echo $category_value->cat_name;?></a>
                    </div>
                    <?php }?>

                </div>
                <div class="body-menu-item app5p skew" style="display: list-item;">
                    <h6 style="text-align:center">
                        <Marquee>VIP Exclusive: Be the First to Shop Eye Touch New T-Shirt Collection. Limited Stock!
                        </Marquee>
                    </h6>
                    <!-- <div>
                        <div class="no-style-link unskew"
                            href="https://play.google.com/store/apps/details?id=Eye Touch.os.webview&amp;hl=en&amp;gl=US">
                            <span>GET 5% OFF ON APP</span>
                            <div>
                                <a class="no-style-link"
                                    href="https://play.google.com/store/apps/details?id=Eye Touch.os.webview&amp;hl=en&amp;gl=US">
                                    <img class="hidden-xs-down" src="img/newhome/playstorebadge.svg"
                                        alt="Eye TouchPlaystore badge">
                                    <img class="hidden-sm-up" src="img/newhome/playstore-square.png"
                                        alt="Eye TouchPlaystore badge">
                                </a>
                                <a class="no-style-link" href="https://apps.apple.com/app/Eye Touch/id1672120838">
                                    <img class="hidden-xs-down" src="img/newhome/Eye Touchappstore.svg"
                                        alt="Eye TouchAppstore badge">
                                    <img class="hidden-sm-up" src="img/newhome/appstore-square.png"
                                        alt="Eye TouchAppstore badge">
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>