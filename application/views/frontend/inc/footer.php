<div class="footer-container">
    <div id="footer" style="" class="container-fluid no-margin-padding">
        <div class="row" style="background: #f3f3f3">
            <div class="ftbl" style="margin: 0 auto; padding: 40px 0; display: block;">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <i style="font-size: 1.5rem;" class="fa fa-lock"></i>
                    <div style="font-weight: 600; font-size: 1.2rem">All secure payment methods</div>
                    <img src="<?php echo base_url();?>img/sslcommerz.png"
                        style="max-width: 100%; height: auto; margin: 15px 0" alt="" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <i style="font-size: 1.5rem;" class="fa fa-smile-o"></i>
                    <div style="font-weight: 600; font-size: 1.2rem">Satisfaction guaranteed</div>
                    <div style="margin: 15px 0">Made with premium quality materials.<br /><b>Cozy yet lasts the
                            test of time</b></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <i style="font-size: 1.5rem;" class="fa fa-truck"></i>
                    <div style="font-weight: 600; font-size: 1.2rem">Worldwide delivery</div>
                    <img src="<?php echo base_url();?>img/delivery.png"
                        style="max-width: 100%; height: auto; margin: 15px 0" alt="" />
                </div>
            </div>
        </div>
        <div class="row" style="background: #37383f; color: var(--lgray); padding: 40px 0;">
            <div class="ftbl" style="margin: 0 auto; display: block;">
                <div class="col-md-6 text-center" style="margin-bottom: 20px;">
                    <div class="pull-left text-left" style="width: 100%;">
                        <div class="ftbl-text" style="font-weight: 500; width: 90%; margin-top: 18px;"><i
                                style="font-size: larger;color: var(--orange);margin-right: 8px"
                                class="fa fa-envelope-o"></i>GET SPECIAL DISCOUNTS IN YOUR INBOX</div>
                        <div class="form-inline pull-left newsletter-form"
                            style="text-align: left; width: 100%; margin-left: 0px;">
                            <input
                                style="color: #fff;background: transparent;border: 0px;border-bottom: 1px solid white;border-radius: 0px;"
                                class="form-control mail-subscribe email-submit-input" type="email" name="email"
                                placeholder="Enter email to get offers, discounts and more." required>
                            <button class="btn btn-outline-sm btn-outline-warning mail-subscribe-btn"
                                type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center" style="margin-bottom: 20px;">
                    <div class="pull-left text-left" style="width: 100%;">
                        <div class="ftbl-text" style="font-weight: 500; width: 90%; margin-top: 18px"><i
                                style="font-size: larger;color: var(--orange);margin-right: 8px"
                                class="fa fa-phone"></i>FOR ANY HELP YOU MAY CALL US AT</div>
                        <div style="text-align: left; color: #aaa; margin-left: 20px">
                            <?php echo $getContact[0]->phone;?> <br />
                            <?php echo $getContact[0]->address;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background: #58595b; color: var(--lgray); font-size: .9rem; padding: 40px 0;">
            <div class="ftbl" style="margin: 0 auto; display: block;">
                <div class="col-lg-3 col-md-6 col-sm-12 text-left" style="margin-bottom: 20px;">
                    <div style="font-weight: bold; font-size: 1rem; margin-bottom: 20px; color: var(--orange)">
                        Eye Touch</div>
                    <li class="sub-item-list"><a class="no-style-link" href="<?php echo base_url('about_us'); ?>">ABOUT
                            US</a></li>
                    <?php $page = $this->db->query("select * from common_part where com_status = 1 ")->result(); 
                            foreach($page as $value){?>
                    <li class="sub-item-list"><a class="no-style-link"
                            href="<?php echo $value->com_type;?>"><?php echo $value->com_title;?></a>
                    </li>
                    <?php }?>
                    <li class="sub-item-list"><a class="no-style-link" href="contact-us.html">CONTACT US</a>
                    </li>
                    <ul style="margin: 0px; padding: 15px 0 0 0;">
                        <li class="text-center"
                            style="list-style:none; display: inline-block; background: #000; border-radius: .7rem; width: 1.4rem; height: 1.4rem;">
                            <a class="Eye Touch_social" style="color: white;" href="#" title="Facebook">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="text-center"
                            style="list-style:none; display: inline-block; background: #000; border-radius: .7rem; width: 1.4rem; height: 1.4rem;">
                            <a class="Eye Touch_social" style="color: white;" href="#" title="Twitter">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="text-center"
                            style="list-style:none; display: inline-block; background: #000; border-radius: .7rem; width: 1.4rem; height: 1.4rem;">
                            <a class="Eye Touch_social" style="color: white;" href="#" title="Google Plus">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li class="text-center"
                            style="list-style:none; display: inline-block; background: #000; border-radius: .7rem; width: 1.4rem; height: 1.4rem;">
                            <a class="Eye Touch_social" style="color: white;" href="#" title="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <!--<li class="text-center" style="list-style:none; display: inline-block; background: #000; border-radius: .7rem; width: 1.4rem; height: 1.4rem;">-->
                        <!--    <a class="Eye Touch_social" style="color: white;" href="https://www.pinterest.com/shajgoj/?eq=shajgoj&amp;etslf=4683" title="Pinterest">-->
                        <!--       <i class="fa fa-pinterest-p"></i>-->
                        <!--   </a>-->
                        <!--</li>-->
                    </ul>
                </div>
                <?php $category = $this->db->query("Select * from tbl_category where cat_status = 1 ")->result(); 
                        foreach ($category as $category_value) {?>
                <div class="col-lg-3 col-md-6 col-sm-12 text-left" style="margin-bottom: 20px;">

                    <div style="font-weight: bold; font-size: 1rem; margin-bottom: 20px;">
                        <?php echo $category_value->cat_name;?></div>
                    <?php $sub_category = $this->db->query("Select * from tbl_sub_category where status = 'a' and category_id = '$category_value->cat_id' limit 6")->result(); 
                                foreach ($sub_category as $sub_category_value) {?>
                    <li class="sub-item-list"><a class="no-style-link"
                            href="<?php echo base_url('shop/') . url_title($sub_category_value->sub_category_name, '-', true); ?>"><?php echo $sub_category_value->sub_category_name;?></a>
                    </li>
                    <?php }?>
                </div>
                <?php }?>

            </div>
        </div>
        <div class="row" style="background: #F3F3F3; font-size: .9rem;">
            <div style="width: 80%; margin: 0 auto; display: block; padding: 20px 0">
                Eye Touch prints a huge variety of custom clothing like T-shirts, hoodies and more. Your order
                is handled daily with a lot of ❤️️ from BANGLADESH !
                <br />
                <br />
                <div style="color: #aaaaaa">Copyright © 2024 Eye Touch. All Right Reserved</div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>/assets/js/localforage.min.js"></script>
<script type="text/javascript">
localforage.config({
    driver: localforage.INDEXDB
});
</script>
<script src="<?php echo base_url() ?>/assets/js/jquery-latest.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/tether.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap-select.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tinymce.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/rangeslider.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/w2ui-1.5.rc1.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/usp-polyfill.js"></script>
<script src="<?php echo base_url() ?>/assets/js/notify.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/swal.js" charset="utf-8"></script>
<script>
function openProductModal(productId) {
    var productArray = [];
    if (productId) {
        var base_url = "<?php echo base_url(); ?>";
        // Send AJAX request with product ID, selected size, and other details
        $.ajax({
            url: base_url + 'get_color_by_id', // Replace with your actual endpoint
            method: 'POST',
            data: {
                productId: productId, // Add the actual product ID
            },
            success: function(response) {
                var colorContainer = $(".color-seletcor-container");
                colorContainer.empty(); // Clear existing content


                if (response.length > 0) {
                    for (var i = 0; i < response.length; i++) {
                        var colorCode = response[i].colors_code;

                        // Create a color selector element with a click event
                        var colorSelector = $('<div class="color-selector list-inline-item" data-color="' +
                            colorCode + '" style="background-color: ' + colorCode +
                            '; cursor: pointer;"></div>').click(function() {
                            updateColorSelector($(this).data('color'));
                        });

                        colorContainer.append(colorSelector);
                    }

                    // Show the color container
                    colorContainer.show();
                } else {
                    // Hide the color container if there are no colors
                    colorContainer.hide();
                }
                // Function to update the color selector
                function updateColorSelector(selectedColor) {
                    $('.color-selector').removeClass('active');
                    $('.color-selector[data-color="' + selectedColor + '"]').addClass('active');
                }


            }
        });

        $.ajax({
            url: base_url + 'get_product_by_id', // Replace with your actual endpoint
            method: 'POST',
            data: {
                productId: productId, // Add the actual product ID
            },
            success: function(response) {

                productArray = response;
                var productDetails = {
                    title: productArray[0].pro_title,
                    photoUrl: "<?php echo base_url();?>uploads/product/" + productArray[0]
                        .pro_image,
                    sizes: [],
                    prices: {},
                    // colors: {}
                };

                // Populate sizes, prices, and colors dynamically
                for (var i = 0; i < productArray.length; i++) {
                    var size = productArray[i].size_name;
                    productDetails.sizes.push(size);
                    productDetails.prices[size] = productArray[i].pro_price + ' ৳';
                    // productDetails.colors[size] = productArray[i].colors_name;
                    // getRandomColor(); // You can replace this with your actual color logic
                }

                // Function to get a random color (for demonstration purposes)
                function getRandomColor() {
                    return '#' + Math.floor(Math.random() * 16777215).toString(16);
                }

                console.log(productDetails);

                // Update the modal content with the product details
                $('#productModal .card-title').text(productDetails.title);
                $('#productModal .productId').val(productArray[0].pro_id);
                $('#productModal .card-photo').attr('src', productDetails.photoUrl);

                // Clear existing size selectors inside the Premium_div container
                $('.Premium_div .size-selectors-container').empty();

                // Create size selectors dynamically inside Premium_div
                var sizeContainer = $('<ul>', {
                    class: 'size-selectors-container list-inline',
                    style: 'text-align: center;'
                });

                for (var i = 0; i < productDetails.sizes.length; i++) {
                    var sizeSelector = $('<li>', {
                        class: 'size-selector list-inline-item',
                        'data-size': productDetails.sizes[i],
                        text: productDetails.sizes[i],
                        click: function() {
                            handleSizeSelection($(this).data('size'));
                        }
                    });
                    sizeContainer.append(sizeSelector);
                }

                $('.Premium_div').append(sizeContainer);

                // Handle size selection
                function handleSizeSelection(selectedSize) {
                    $('.size-selector').removeClass('active');
                    $(`.size-selector[data-size="${selectedSize}"]`).addClass('active');

                    // Get selected color
                    //  var selectedColor = productDetails.colors[selectedSize];

                    // Display unit price and update color selector
                    $('.modal-price-text').text(productDetails.prices[selectedSize]);
                    $('.modal-price-text').val(productDetails.prices[selectedSize]);
                    //  updateColorSelector(selectedColor);
                }


                // Show the modal
                $('#productModal').modal('show');

                // Handle "Add to Cart" button click
                $('.addToCartBtn').off('click').on('click', function() {

                    var selectedproductSize = $('#productModal .size-selector.active').data(
                        'size');
                    var selectedproductColor = $('#productModal .color-selector.active').data(
                        'color');
                    var selectedColor = '';
                    if (selectedproductColor) {
                        selectedColor = selectedproductColor;
                    } else {
                        selectedColor = 'NO COlor';
                    }
                    var receivedProductId = $('#productModal .productId').val();
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
                                price: productDetails.prices[selectedproductSize],
                            },
                            success: function(response) {

                                var popup = document.getElementById('popup');
                                var popupMessage = document.getElementById(
                                    'popupMessage');

                                if (response === 'alreadyAdded') {
                                    popupMessage.innerHTML =
                                        '<img height="100px" src="<?php echo base_url() ?>img/sad.gif" alt="Error Icon" class="icon" /> </br>' +
                                        'This product size already added';
                                    popupMessage.style.color = 'red';
                                    popupMessage.style.fontSize = '28px';
                                    popup.style.display = 'flex';
                                } else {
                                    popupMessage.innerHTML =
                                        '<img height="100px" src="<?php echo base_url() ?>img/happy.gif" alt="Success Icon" class="icon" /></br>' +
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
                        alert('Please select a size before adding to cart.');
                    }
                })
            },
            error: function(error) {
                console.error('Error adding product to cart:', error);
            }
        });
    } else {
        alert('Please select a size before adding to cart.');
    }


}
</script>
<script>
$(document).on("click", ".open-mobile-link", function() {
    $(".mobile-login-opener").toggleClass("mobile-login-toggle");
    $(".open-mobile-link").find("i.fa-chevron-down").toggleClass("list-hidden");
    $(".open-mobile-link").find("i.fa-chevron-up").toggleClass("list-hidden");
});
</script>




</body>

</html>