<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Category</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Add Category</span>
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
                    if(isset($editSubCategoryData)):
                        foreach($editSubCategoryData as $sub_category):
                    ?>

                    <form id="formGallery" method="post"
                        action="<?php echo base_url() ?>update_sub_category/<?php echo $sub_category->sub_category_id ?>">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Select Category <span class="red">*</span></label>
                            <div class="col-md-8">

                                <select class="form-control form-select-lg" name="category_id">
                                    <?php
                                if (isset($getAllCategory)) :
                                    $i = 1;
                                    foreach ($getAllCategory as $category) :
                                ?>
                                    <option value="<?php echo $category->cat_id; ?>"
                                        <?php echo ($category->cat_id == $sub_category->category_id) ? 'selected' : ''; ?>>
                                        <?php echo $category->cat_name; ?>
                                    </option>
                                    <?php endforeach;
                                endif; ?>
                                </select>

                                <?= form_error('cat_name', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="title" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Sub Category Name <span class="red">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="sub_category_name" id="title" class="form-control"
                                    placeholder="Name" autocomplete="off"
                                    value="<?= $sub_category->sub_category_name ?>">
                                <?= form_error('sub_category_name', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="offset-3 col-md-8">
                                <button type="submit" id="saveBtn" class="btn btn-outline-primary">Update </button>
                                <button type="reset" id="resetBtn"
                                    class="btn btn-outline-default btn-outline-outline">Reset</button>
                            </div>
                        </div>
                    </form>

                    <?php endforeach; endif; ?>


                </div>

            </div>
        </div>

        <!--Form Part End-->


        <!-- ============================================================================ -->
        <!-- ============================================================================ -->

    </div>
</div>