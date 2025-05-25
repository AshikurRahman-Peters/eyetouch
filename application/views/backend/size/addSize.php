<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Size</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Add Size</span>
                <div>
                    <?php
                    if($success = $this->session->userdata('success')){
                        echo "<span style=\"color: green; font-size: 18px\">$success</span>";
                    }
                    elseif($error = $this->session->userdata('error')){
                        echo "<span style=\"color: red; font-size: 18px\">$error</span>";
                    }

                    //                    echo validation_errors();
                    ?>
                </div>
            </div>

            <div class="card-body">
                <div class=" col-md-12">

                    <form id="formGallery" method="post" action="<?php echo base_url() ?>save_size">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Size <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="size_name" id="title" class="form-control" placeholder="Name"
                                    autocomplete="off" value="<?= set_value('size_name'); ?>">
                                <?= form_error('size_name', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Available Quntity <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="available_qty" id="title" class="form-control"
                                    placeholder="available qty" autocomplete="off"
                                    value="<?= set_value('available_qty'); ?>">
                                <?= form_error('available_qty', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>

                        <?php
                            if(isset($editProduct)):
                                foreach($editProduct as $product):
                        ?>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label"> <span class="red"></span></label>
                            <div class="col-md-9">
                                <input type="hidden" name="product_id" id="title" class="form-control"
                                    placeholder="Name" autocomplete="off" value="<?= $product->pro_id; ?>">
                            </div>
                        </div>
                        <?php endforeach; endif; ?>


                        <div class="form-group row">
                            <div class="offset-2 col-md-9">
                                <button type="submit" id="saveBtn" class="btn btn-primary">Save </button>
                                <button type="reset" id="resetBtn" class="btn btn-default btn-outline">Reset</button>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>

        <!--Form Part End-->

        <!--=============================================================================================-->

        <!--Table Part Start-->
        <div class="card mb-3" id="userTable">
            <div class="card-header">
                <i class="fas fa-table"></i>
                All Size List
            </div>
            <span id="updateTable">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 25%">Name</th>
                                    <th style="width: 25%">Available Quntity</th>
                                    <th style="width: 20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">

                                <?php
                if(isset($AllSize)):
                    $i = 1;
                    foreach($AllSize as $size):
                        ?>

                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $size['size_name'] ?></td>
                                    <td><?php echo $size['available_qty'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>edit_size/<?php echo $size['size_id'] ?>"
                                            class="btn btn-warning" d>edit<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                        <a style="display: none"
                                            onclick="return confirm('Are you sure to delete this data ? ')"
                                            href="<?php echo base_url() ?>delete_size/<?php echo $size['size_id'] ?>"
                                            title="Delete This" class="btn btn-danger ">delete<i class="fa fa-trash-o"
                                                aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <?php endforeach; endif; ?>

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