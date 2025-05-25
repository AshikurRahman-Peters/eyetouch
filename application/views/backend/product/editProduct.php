<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Product</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Edit Product</span>
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
                    if(isset($editProduct)):
                        foreach($editProduct as $product):
                    ?>

                    <form id="formGallery" method="post"
                        action="<?php echo base_url() ?>update_product/<?php echo $product->pro_id ?>"
                        enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="pro_title" id="title" class="form-control" placeholder="Title"
                                    autocomplete="off" value="<?php echo $product->pro_title ?>">

                                <?= form_error('pro_title', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Price <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="pro_price" id="title" class="form-control" placeholder="Price"
                                    autocomplete="off" value="<?php echo $product->pro_price ?>">

                                <?= form_error('pro_price', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Old Price <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="pro_old_price" id="title" class="form-control"
                                    placeholder="Old Price" autocomplete="off"
                                    value="<?php echo $product->pro_old_price ?>">

                                <?= form_error('pro_old_price', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Category <span class="red">*</span></label>
                            <div class="col-md-4">
                                <select name="cat_id" id="">
                                    <option value="">Choose Product Category</option>
                                    <?php
                                        $query=$this->db->query('Select * from tbl_category where cat_status =1')->result();
                                    if(isset($query)):
                                        foreach($query as $data):
                                            ?>

                                    <option class="form-control" value="<?php echo $data->cat_id ?>"
                                        <?php if($data->cat_id == $product->cat_id){ echo 'selected'; } ?>>
                                        <?php echo $data->cat_name ?></option>
                                    <?php endforeach; endif; ?>
                                </select>
                                <span id="title" class="error"></span>
                            </div>
                            <label class="col-md-2 col-form-label">Sub Category <span class="red">*</span></label>
                            <div class="col-md-4">
                                <select name="sub_category_id" id="">
                                    <option value="">Choose Product Category</option>
                                    <?php
                                        $query_sub_cat=$this->db->query("Select * from tbl_sub_category where status ='a' and  category_id ='$product->cat_id' ")->result();
                                    if(isset($query_sub_cat)):
                                        foreach($query_sub_cat as $query_sub_cat_data):
                                            ?>
                                    <option class="form-control"
                                        value="<?php echo $query_sub_cat_data->sub_category_id ?>"
                                        <?php if($query_sub_cat_data->sub_category_id == $product->sub_category_id){ echo 'selected'; } ?>>
                                        <?php echo $query_sub_cat_data->sub_category_name ?></option>
                                    <?php endforeach; endif; ?>
                                </select>
                                <span id="title" class="error"></span>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Brand <span class="red">*</span></label>
                            <div class="col-md-9">
                                <select name="brand_id" id="">
                                    <option value="">Choose Product Brand</option>
                                    <?php
                                    //     $query=$this->db->query('Select * from tbl_brand where status =1')->result();
                                    // if(isset($query)):
                                    //     foreach($query as $data):
                                            ?>

                                    <option class="form-control" value="<?php //echo $data->brand_id ?>"
                                        <?php //if($data->brand_id == $product->brand_id){ echo 'selected'; } ?>>
                                        <?php //echo $data->title ?></option>
                                    <?php //endforeach; endif; ?>
                                </select>
                                <span id="title" class="error"></span>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label"><span class="red"></span></label>
                            <div class="col-md-3">
                                <label class="checkbox" id="active" value="1">
                                    <input type="checkbox" name="active" value="1"
                                        <?php if($product->active == 1) { echo 'checked';}?>>
                                    Is active
                                </label>
                            </div>
                            <div class="col-md-5">
                                <select name="future_product" id="future_product">
                                    <option value="HOT_DEAL"
                                        <?php if ($product->future_product == 'HOT_DEAL') echo 'selected'; ?>>HOT DEAL
                                    </option>
                                    <option value="RESENT_PRODUCTS"
                                        <?php if ($product->future_product == 'RESENT_PRODUCTS') echo 'selected'; ?>>
                                        RESENT PRODUCTS</option>
                                    <option value="FEATURE_ITEMS"
                                        <?php if ($product->future_product == 'FEATURE_ITEMS') echo 'selected'; ?>>
                                        FEATURE ITEMS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Description <span class="red">*</span></label>
                            <div class="col-md-9">
                                <textarea name="pro_description" id="description" class="form-control"
                                    autocomplete="off"><?php echo $product->pro_description ?></textarea>
                                <span id="description" class="error"></span>

                                <?= form_error('pro_description', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Image <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="file" id="image" class="form-control-file" name="pro_image"
                                    autocomplete="off">
                                <img style="width: 80px;"
                                    src="<?php echo base_url() ?>/uploads/product/<?php echo $product->pro_image ?>"
                                    alt="">

                                <?= form_error('pro_image', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="image" class="error"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-2 col-md-9">
                                <button type="submit" id="saveBtn" class="btn btn-primary">Update </button>
                                <button type="reset" id="resetBtn" class="btn btn-default btn-outline">Reset</button>
                            </div>
                        </div>
                    </form>

                    <?php endforeach; endif; ?>

                    <script>
                    CKEDITOR.replace('description');
                    </script>

                </div>
            </div>
        </div>

        <!--Form Part End-->

        <!--=============================================================================================-->

        <!--Table Part End-->
        <!-- Dynamic Body Content End -->
        <!-- ============================================================================ -->

    </div>
</div>