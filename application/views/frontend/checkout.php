<!-- Main Container  -->
<style>
.so-onepagecheckout .checkout-cart .input-group-btn {
    display: inline;
}
</style>
<div class="overlay" id="popup1">
    <div class="popup">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <p id="popupMessage1"></p>

        <img src="<?php echo base_url() ?>img/I-TOUCH-LOGO-05.png" alt="Home Logo" class="nav-logo mobile-logo"
            style="display: inline; margin-top: -6px;" />
    </div>
</div>
<div class="container">

    <div class="row">
        <div id="content" class="col-sm-12 p-5" style="padding:20px">

            <div class="so-onepagecheckout layout1">
                <div class="col-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="checkout-content checkout-register">
                        <fieldset id="address">
                            <h5 class="secondary-title"><i class="fa fa-map-marker"></i>Your Shipping Address</h5>
                            <div class=" checkout-payment-form">
                                <div class="box-inner">
                                    <form method="post" id="order_address_form" class="form-horizontal form-payment">
                                        <div id="payment-new" style="display: block">
                                            <div class="form-group company-input">
                                                <input type="text" id="name" name="name" value="" required=""
                                                    placeholder="Full Name" class="form-control">
                                            </div>
                                            <div class="form-group required">
                                                <input type="phone" id="phone" name="phone" value="" required=""
                                                    placeholder="phone or mobile no" class="form-control">
                                            </div>

                                            <div class="form-group required">
                                                <select class="form-control" id="district_id" name="district_id">
                                                    <option value="0">Select a District</option>
                                                    <?php
                                                    $selectedDistrictId = isset($_SESSION['district_id']) ? $_SESSION['district_id'] : 0;
                                                    foreach ($district as $value) { ?>
                                                    <option value="<?php echo $value['district_id']; ?>"
                                                        data-charge="<?php echo $value['charge']; ?>"
                                                        <?php echo ($selectedDistrictId == $value['district_id']) ? 'selected' : ''; ?>>
                                                        <?php echo $value['district_name']; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group address-2-input">
                                                <textarea class="form-control"
                                                    placeholder="Delivery or shipping address here" id="address"
                                                    name="address" rows="3"></textarea>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input type="password" name="password" id="password" placeholder="Your Password" class="form-control">
                                            </div> -->

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
                        </fieldset>


                    </div>
                </div>

                <div class="col-right col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <section class="section-right">


                        <div class="checkout-content checkout-cart">
                            <h5 class="secondary-title"><i class="fa fa-shopping-cart"></i>Shopping Cart </h5>
                            <!-- <div class="shopping-cart-block" id="loadCartHtml">
                            </div> -->
                            <div class="box-inner">
                                <div class="table-responsive checkout-product">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-left name">Product Name</th>
                                                <th class="text-center quantity">Quantity</th>
                                                <th class="text-center checkout-price">Unit Price</th>
                                                <th class="text-right total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $s_id = session_id();
                                            $stmt1 = "SELECT * FROM tbl_cart WHERE s_id='$s_id'";
                                            $sql1  = $this->db->query($stmt1);
                                            $items = $sql1->result_array();
                                            $amountTotal = 0;

                                            foreach ($items as $key => $value) {
                                                $amount = $value['pro_price'] * $value['pro_quantity'];
                                                $amountTotal = $amountTotal + $amount;
                                            ?>
                                            <tr>
                                                <td class="text-left name">
                                                    <a href=""><img style="max-width: 25%;"
                                                            src="<?= base_url() ?>uploads/product/<?= $value['pro_image'] ?>"
                                                            alt="<?= $value['pro_title'] ?>"
                                                            title="<?= $value['pro_title'] ?>"></a>
                                                    <a href=""
                                                        class="product-name"><?= substr($value['pro_title'], 0, 10) . '...' ?></a>
                                                </td>
                                                <td class="text-left">
                                                    <div class="input-group btn-block" style="max-width: 300px;">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-default"
                                                                id="quantity-minus"
                                                                data-id="<?= $value['cart_id'] ?>"><i
                                                                    class="fa fa-minus"></i></button>
                                                        </span>
                                                        <input type="number" class="quantity-field form-control"
                                                            value="<?= $value['pro_quantity'] ?>" id="quantity_up"
                                                            data-id="<?= $value['cart_id'] ?>">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-default"
                                                                id="quantity-plus" data-id="<?= $value['cart_id'] ?>"><i
                                                                    class="fa fa-plus"></i></button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-original-title="Remove" id="remnoveItem"
                                                                data-id="<?= $value['cart_id'] ?>"><i
                                                                    class="fa fa-times-circle"></i></button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-right price"><?= $value['pro_price'] ?> TK</td>
                                                <td class="text-right total"><?= $amount ?> Tk</td>
                                            </tr>
                                            <?php } ?>

                                            <?php
                                        // if (isset($_SESSION['selected_district'])) {
                                        //     $DistrictCharge = $_SESSION['selected_district'];
                                        // } else {
                                            $DistrictCharge = 60;
                                        // }

                                        $grand = $amountTotal + $DistrictCharge;
                                        $delivery = 0;
                                        ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <input type="hidden" name="hidden_page_sub_total_amo"
                                                    id="hidden_page_sub_total_amo" value="<?= $amountTotal ?>">
                                                <td class="text-left">Sub-Total:</td>
                                                <td class="text-right"><?= $amountTotal ?> TK</td>
                                            </tr>
                                            <tr>
                                                <input type="hidden" name="delivary_charge" id="delivery_charge_value"
                                                    value="<?php echo  $DistrictCharge;?> ">
                                                <td class="text-left">Delivery:</td>
                                                <td class="text-right" id="delivary_charge"><?= $DistrictCharge ?> Tk
                                                </td>
                                            </tr>
                                            <tr>
                                                <input type="hidden" name="hidden_page_total_amount"
                                                    id="hidden_page_total_amount" value="<?= $grand ?>">
                                                <td class="text-left">Total:</td>
                                                <td class="text-right" id="grand_amont"><?= $grand ?> TK</td>
                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>

                                <div id="payment-confirm-button" class="payment-">
                                    <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Details</h2>
                                    <div class="checkbox" style="margin:5%">
                                        <label style="font-weight: 800;">
                                            <input style="font-weight: 800" type="checkbox" name="shipping_address"
                                                value="1" checked="checked"> Cash on Delivery
                                        </label>
                                    </div>
                                    <fieldset id="shipping-address" style="display:none">
                                        <div class=" checkout-shipping-form">
                                            <div class="box-inner">
                                                <p>payment information here</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
                                    </fieldset>
                                </div>

                                <?php
                                if (isset($_SESSION['first_name'])) {
                                ?>
                                <div class="confirm-order">
                                    <button id="orderNow" data-loading-text="Loading..."
                                        class="btn btn-primary button confirm-button">Confirm Order</button>
                                </div>
                                <?php } else { ?>
                                <div class="confirm-order">
                                    <button id="orderNow" data-loading-text="Loading..."
                                        class="btn btn-primary button confirm-button">Confirm Order</button>
                                </div>
                                <?php } ?>

                            </div>

                        </div>

                    </section>
                </div>
            </div>

        </div>
    </div>

</div>


<script>
$(document).ready(function() {
    // Attach change event to the district dropdown
    $('#district_id').change(function() {
        updateDeliveryChargeAndTotal();
    });

    // Attach input change event to quantity fields
    $('.quantity-field').change(function() {
        updateTotalAmount();
    });

    // Function to update the delivery charge and total amount
    function updateDeliveryChargeAndTotal() {
        var selectedDistrictId = $('#district_id')
            .val(); // Replace with your actual logic to get the selected district ID in JavaScript
        var chargeValue = 0;
        // Select the option and get the data-charge attribute
        var districtSelect = document.getElementById('district_id');
        var selectedOption = districtSelect.querySelector('option[value="' + selectedDistrictId + '"]');
        chargeValue = selectedOption.getAttribute('data-charge');


        // Check if the selected district is inside Dhaka or not
        var deliveryCharge = (chargeValue == null) ? 0 : chargeValue;

        $('#delivary_charge').text(deliveryCharge + ' Tk');

        // Update the hidden input value for further processing
        $('#delivery_charge_value').val(deliveryCharge);

        // Recalculate the total amount
        updateTotalAmount();
    }

    // Function to update the total amount
    function updateTotalAmount() {
        var amountTotal = <?php echo  $amountTotal; ?>;
        // console.log(amountTotal);
        // Loop through each product row


        // Get the current delivery charge
        var deliveryCharge = parseFloat($('#delivery_charge_value').val());

        // Calculate the grand total
        var grandTotal = amountTotal + deliveryCharge;
        // console.log(grandTotal);

        // Update the sub-total, delivery charge, and total in the HTML
        $('#hidden_page_sub_total_amo').val(amountTotal);
        $('#delivary_charge').text(deliveryCharge + ' Tk');
        $('#hidden_page_total_amount').val(grandTotal);
        $('#grand_amont').text(grandTotal + ' Tk');
        document.getElementById("hidden_page_total_amount").value = grandTotal;
    }

    // Initial update when the page loads
    updateDeliveryChargeAndTotal();
});





$(document).ready(function() {
    var path = '<?php echo base_url(); ?>Product/cartLoadForOrder';

    function loadCartHtml() {
        $.ajax({
            url: path,
            method: "POST",
            beforeSend() {
                //$("#loadCartHtml").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
            },
            success: function(data) {
                $("#loadCartHtml").html(data);
            }
        })
    }

    loadCartHtml();


    $(document).on('click', '#remnoveItem', function() {
        var id = $(this).attr('data-id');
        var path = '<?php echo base_url(); ?>Product/removeCart';


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

        var path = '<?php echo base_url(); ?>Product/quantiyUpdate';
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
    $(document).on('click', '#quantity-plus', function() {
        var path = '<?php echo base_url();?>Product/quantiyUpdate';
        var id = $(this).attr('data-id');
        var quantityField = $('#quantity_up[data-id="' + id + '"]');
        var quantity = parseInt(quantityField.val());
        quantityField.val(quantity + 1);
        var qury = quantity + 1; // Update qury with the new quantity

        if (qury == 0) {
            alert('Minimum at least one quantity');
            quantityField.val(1); // Reset quantity to 1 if it goes below 1
            return; // Don't proceed with the AJAX request if quantity is less than 1
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
            },
            error: function(xhr, status, error) {
                console.error("AJAX error: " + status + " - " + error);
            }
        });
    });

    $(document).on('click', '#quantity-minus', function() {
        var path = '<?php echo base_url();?>Product/quantiyUpdate';
        var id = $(this).attr('data-id');
        var quantityField = $('#quantity_up[data-id="' + id + '"]');
        var quantity = parseInt(quantityField.val());

        if (quantity > 1) {
            quantityField.val(quantity - 1);
            var qury = quantity - 1; // Update qury with the new quantity
        } else {
            alert('Minimum at least one quantity');
            return; // Don't proceed with the AJAX request if quantity is already 1
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
            },
            error: function(xhr, status, error) {
                console.error("AJAX error: " + status + " - " + error);
            }
        });
    });

    $(document).on('click', '#pleaseLogin', function(e) {
        e.preventDefault();
        $('#myModal').modal('show');
    });

    $(document).on('click', '#orderNow', function(e) {
        e.preventDefault();
        $('#order_address_form').submit();

    });

    $(document).on('submit', '#order_address_form', function(e) {
        e.preventDefault();
        var name = $('#name', this).val();
        var phone = $('#phone', this).val();
        var address = $('#address', this).val();
        var district_id = $('#district_id', this).val();
        if (name == '') {
            alert('Name field is required');
        } else if (phone == '') {
            alert('Phone field is required');
        } else if (address == '') {
            alert('Address field is required');
        } else if (district_id == '') {
            alert('District field is required');
        } else {

            var orderNow = 'orderNow';
            var path = '<?php echo base_url(); ?>Product/orderNow';
            var formData = new FormData(this);

            var sub_total_amo = $('#hidden_page_sub_total_amo').val();
            var delivary_charge = $('#delivery_charge_value').val();
            var total_amo = $('#hidden_page_total_amount').val();
            formData.append('sub_total_amo', sub_total_amo);
            formData.append('delivary_charge', delivary_charge);
            formData.append('total_amo', total_amo);
            //formData.append('insert_id', $insert_id);
            $.ajax({
                url: path,
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.trim() == 'cart_is_empty') {
                        alert('Please Product add to cart');
                        window.location.reload();
                    }
                    if (data.trim() == 'order_success') {



                        var popup = document.getElementById('popup1');
                        var popupMessage = document.getElementById(
                            'popupMessage1');

                        if (data.trim() == 'order_success') {
                            popupMessage.innerHTML =
                                '<img height="100px" src="<?php echo base_url() ?>img/sad.gif" alt="Error Icon" class="icon" /> </br>' +
                                'Thanks for your order';
                            popupMessage.style.color = 'green';
                            popupMessage.style.fontSize = '28px';
                            popup.style.display = 'flex';
                        } else {
                            popupMessage.innerHTML =
                                '<img height="100px" src="<?php echo base_url() ?>img/happy.gif" alt="Success Icon" class="icon" /></br>' +
                                'Order not Complitesd';
                            popupMessage.style.color = 'red';
                            popupMessage.style.fontSize = '28px';
                            popup.style.display = 'flex';
                        }

                        // Hide the message after 2 seconds
                        setTimeout(function() {
                            popup.style.display = 'none';
                            location.reload();
                        }, 2000);


                    }

                },
                error: function() {
                    alert('Error');
                }
            });
        }
    });

});
</script>