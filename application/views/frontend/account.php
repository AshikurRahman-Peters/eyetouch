<style>
.active {
    background-color: white;
    color: black;
    display: block !important;
}

.tab-pane {
    display: none;
}

.active-tab {
    background-color: #007bff;
    /* Change this to your desired active color */
    color: white;
}
</style>


<?php if (isset($_SESSION['first_name'])) { ?>
<div class="mobile-nav hidden-lg-up">
    <nav class="navbar navbar-light bg-faded">

        <button class="navbar-toggler pull-right toggler1" type="button" data-toggle="collapse"
            data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="navbar-light bg-faded p-4">
            <div class="list-group bg-faded">

                <a class="list-group-item list-group-item-action mobile-nav-item nav-link" href="#"
                    onclick="switchTab('1a')"><span class="pull-right">Billing Address</span></a>
                <a class="list-group-item list-group-item-action mobile-nav-item nav-link" href="#"
                    onclick="switchTab('2a')"><span class="pull-right">My Order</span></a>
                <a class="list-group-item list-group-item-action mobile-nav-item nav-link" href="#"
                    onclick="switchTab('3a')"><span class="pull-right"><i class="fa fa-user"></i> My
                        Account</span></a>

                <a class="list-group-item list-group-item-action mobile-nav-item" href=""><span class="pull-right"><i
                            class="fa-solid fa-right-from-bracket"></i> Logout</span></a>
            </div>
        </div>
    </div>
</div>






<div class="container-fluid seller-container-fluid">
    <div class="row">
        <div class="col-sm-1 seller-sidebar bg-faded hidden-md-down">
            <ul class="list-group seller-sidebar-items">
                <a class="nav-link" href="#" onclick="switchTab('1a')">
                    <li class="list-group-item cat-sidebar-list-seller 1a">
                        <h6 class="customiconfa"><i title="Account" class="fa fa-user"></i></h6>
                    </li>
                </a>

                <a class="nav-link" href="#" onclick="switchTab('2a')">
                    <li class="list-group-item cat-sidebar-list-seller 2a">
                        <h6 class="customiconfa"><i title="Order" class="fa fa-cart-shopping"></i></h6>

                    </li>
                </a>
                <a class="nav-link" href="#" onclick="switchTab('3a')">
                    <li class="list-group-item cat-sidebar-list-seller 3a">
                        <h6 class="customiconfa"><i title="Address" class="fa fa-address-card"></i></h6>
                    </li>
                </a>
                <a class="nav-link" href="<?php echo base_url(); ?>Product/logout_customer">
                    <li class="list-group-item cat-sidebar-list-seller">
                        <h6 class="customiconfa"><i title="Log Out" class="fa-solid fa-right-from-bracket"></i></h6>
                    </li>
                </a>

            </ul>
        </div>

        <div class="col-md-12 col-lg-11">

            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-pane active  m-3" id="1a">

                        <h3 style="text-align:center">My Profile</h3>

                        <aside class="col-md-12 col-sm-12 col-xs-12 ">
                            <div class="row">
                                <div id="content" class="col-sm-12 ">
                                    <div class="table-responsive">
                                        <?php
                                            $name = $_SESSION['first_name'];
                                            $phone = $_SESSION['phone'];
                                            $email = $_SESSION['email'];
                                            $address = $_SESSION['address'];
                                            ?>

                                        <form method="post" action="update_profile.php">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="name-addon">@</span>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="<?php echo $name; ?>" contenteditable="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="phone-addon"><i
                                                            class="fas fa-phone"></i></span>
                                                    <input type="text" class="form-control" id="phone" name="phone"
                                                        value="<?php echo $phone; ?>" contenteditable="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">E-mail:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="email-addon"><i
                                                            class="fas fa-envelope"></i></span>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        value="<?php echo $email; ?>" contenteditable="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="address-addon"><i
                                                            class="fas fa-map-marker-alt"></i></span>
                                                    <textarea class="form-control" id="address" name="address" rows="3"
                                                        contenteditable="true"><?php echo $address; ?></textarea>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>
                <div class="text-center">
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-11">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-pane" id="2a">
                        <div class="table-responsive">
                            <h3 style="text-align:center">My Orders</h3>
                            <table id="product-list" class="table table-hover table-table">

                                <thead>
                                    <tr>
                                        <td class="text-center">Product Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Quantity</td>
                                        <td class="text-left">Invoice</td>
                                        <td class="text-left">Status</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                </thead>
                                <?php
                                        $c_id = $_SESSION['c_id'];
                                       
                                        $order = $this->db->query("SELECT
                                        tbl_orders_master.*,
                                        tbl_orders.*,
                                        tbl_products.*
                                    FROM
                                        tbl_orders
                                    INNER JOIN tbl_orders_master ON tbl_orders.master_id = tbl_orders_master.order_m_id
                                    INNER JOIN tbl_customer ON tbl_orders.order_c_id = tbl_customer.c_id
                                    INNER join tbl_products on tbl_orders.order_pro_id = tbl_products.pro_id
                                    WHERE
                                                tbl_orders_master.c_id ='$c_id' 
                                             ")->result();
                                            
                                        ?>

                                <tbody>
                                    <?php
                                            foreach ($order as $key => $value) {
                                            ?>
                                    <tr>
                                        <td class="text-center"> <a href="product.html"><img style="width:30%"
                                                    src="<?php echo  base_url() ?>uploads/product/<?php echo $value->pro_image; ?>"
                                                    alt="G<?php echo $value->pro_title;?>"
                                                    title="<?php echo $value->pro_title;?>" class="img-thumbnail"></a>
                                        </td>
                                        <td class="text-left"><a href="#"><?php echo $value->pro_title;?></a><br>
                                        <td class="text-left"><a href="#"><?php echo $value->pro_quantity;?></a><br>
                                        </td>
                                        <td>
                                            <a
                                                href="<?php echo base_url(); ?>Product/view_master_detail/<?php echo $value->order_m_id ?>">
                                                <button class="btn btn-success btn-sm">view</button>
                                            </a>
                                        </td>

                                        <?php if ($value->order_status == 'p') { ?>
                                        <td><button class="btn btn-danger btn-sm" id="" data-id="p">pending</td>
                                        <?php } else if ($value->order_status == 's') { ?>
                                        <td><button class="btn btn-primary btn-sm" id="" data-id="s">shipping</td>
                                        <?php } else { ?>
                                        <td><button class="btn btn-success btn-sm" id="" data-id="d">delivered</td>
                                        <?php } ?>
                                        <td class="text-right"><?php echo $value->amount; ?> TK</td>
                                        <td class="text-right"><?php echo $value->total_amount;?> TK
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Function to switch tabs
function switchTab(tabId) {
    console.log(tabId);
    $('.nav-link').removeClass('active'); // Remove active class from all tab links
    $('.cat-sidebar-list-seller').removeClass('active'); // Remove active class from all tab links
    $('.tab-pane').removeClass('active'); // Remove active class from all tab content
    $('#' + tabId).addClass('active'); // Add active class to the selected tab content
    $('.' + tabId).addClass('active'); // Add active class to the selected tab content
}
</script>
<?php } ?>