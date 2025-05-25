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
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Edit Size</span>
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

                    <?php
                        if(isset($editSize)):
                            foreach($editSize as $size):
                    ?>

                    <form id="formGallery" method="post"
                        action="<?php echo base_url() ?>update_size/<?php echo $size->size_id ?>">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Size <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="size_name" id="title" class="form-control" placeholder="Name"
                                    autocomplete="off" value="<?= $size->size_name; ?>">
                                <?= form_error('size_name', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Available Quntity<span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="available_qty" id="title" class="form-control"
                                    placeholder="available qty" autocomplete="off" value="<?= $size->available_qty; ?>">
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
                                <button type="submit" id="saveBtn" class="btn btn-primary">update </button>
                                <button type="reset" id="resetBtn" class="btn btn-default btn-outline">Reset</button>
                            </div>
                        </div>
                    </form>
                    <?php endforeach; endif; ?>

                </div>

            </div>
        </div>

        <!--Form Part End-->

        <!--=============================================================================================-->
        <!--Table Part End-->
        <!-- Dynamic Body Content End -->
        <!-- ============================================================================ -->
        <!-- ============================================================================ -->

    </div>
</div>