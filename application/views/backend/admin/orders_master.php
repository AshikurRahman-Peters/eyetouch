<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Orders List</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->



        <!--Form Part End-->

        <!--=============================================================================================-->

        <!--Table Part Start-->
        <div class="card mb-3" id="userTable">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Orders list
            </div>
            <span id="updateTable">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">SL NO</th>
                                    <th style="width: 5%">Name</th>
                                    <th style="width: 25%">Phone</th>
                                    <th style="width: 25%">Address</th>
                                    <th style="width: 20%">Order time</th>
                                    <th style="width: 20%">Amount</th>
                                    <!-- <th style="width: 20%">Email</th> -->
                                    <th style="width: 20%">Login</th>
                                    <th style="width: 20%">detail</th>
                                    <th style="width: 20%">Status</th>
                                    <th style="width: 20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">

                                <?php if (isset($html)) {
                    echo $html;
                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </span>
        </div>

        <!--Table Part End-->



        <!-- Dynamic Body Content End -->
        <!-- ============================================================================ -->
        <!-- ============================================================================ -->

    </div>
</div>
<script type="text/javascript">
$(document).on('click', '#order_status_action', function(e) {
    e.preventDefault();
    var oid = $(this).attr('data-oid');
    var id = $(this).attr('data-id');
    var path = '<?php echo base_url();?>Admin/orderStatusUpdate';
    $.ajax({
        url: path,
        method: "POST",
        data: {
            oid: oid,
            id: id
        },
        success: function(data) {
            if (data.trim() == 'updated') {
                window.location.reload();
            }
        }
    });

});

$(document).on('click', '#view_master_detail', function() {
    var id = $(this).attr('data-id');

    var path = '<?php echo base_url();?>Product/view_master_detail';


    window.open("" + path + '/' + id + "", "_blank",
        "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=800,height=800");

});
</script>