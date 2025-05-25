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
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Add Product</span>
                <div>
                    <?php
                    if ($success = $this->session->userdata('success')) {
                        echo "<span style=\"color: green; font-size: 18px\">$success</span>";
                    } elseif ($error = $this->session->userdata('error')) {
                        echo "<span style=\"color: red; font-size: 18px\">$error</span>";
                    }

                    //                    echo validation_errors();

                    ?>
                </div>
            </div>

            <div class="card-body">
                <div class=" col-md-12">
                    <form id="formGallery" method="post" method="post" action="<?php echo base_url() ?>save_product"
                        enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="pro_title" id="title" class="form-control" placeholder="Title"
                                    autocomplete="off" value="<?php echo set_value('pro_title') ?>">

                                <?= form_error('pro_title', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Price <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="pro_price" id="title" class="form-control" placeholder="Price"
                                    autocomplete="off" value="<?php echo set_value('pro_price') ?>">

                                <?= form_error('pro_price', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Old Price <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="pro_old_price" id="title" class="form-control"
                                    placeholder="Old Price" autocomplete="off"
                                    value="<?php echo set_value('pro_old_price') ?>">

                                <?= form_error('pro_old_price', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Category <span class="red">*</span></label>
                            <div class="col-md-4">
                                <select name="cat_id" id="cat_id" class="form-control"
                                    onchange="loadSubcategories(this.value)">
                                    <option value="">Choose Product Category</option>
                                    <?php
                                    if (isset($categoryData)) :
                                        foreach ($categoryData as $data) :
                                    ?>
                                    <option value="<?php echo $data->cat_id ?>">
                                        <?php echo $data->cat_name ?></option>
                                    <?php endforeach;
                                     endif; ?>
                                </select>
                                <span id="cat_error" class="error"></span>
                            </div>
                            <label class="col-md-2 col-form-label">Sub Category <span class="red">*</span></label>
                            <div class="col-md-4">
                                <select name="sub_cat_id" id="sub_cat_id" class="form-control">
                                    <option value="">Choose Subcategory</option>
                                    <!-- Subcategory options will be dynamically loaded here using JavaScript -->
                                </select>
                                <span id="sub_cat_error" class="error"></span>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Brand<span class="red">*</span></label>
                            <div class="col-md-9">
                                <select name="brand_id" id="">
                                    <option value="">Choose Product Brand</option>
                                    <?php
                                   // $brand = $this->db->query("select * from tbl_brand where status=1")->result();
                                  //  foreach ($brand as $key => $value) { ?>
                                        <option class="form-control" value="<?php //echo $value->brand_id ?>"><?php //echo $value->title ?></option>
                                    <?php //} ?>

                                </select>

                                <span id="brand" class="error"></span>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label"><span class="red"></span></label>
                            <div class="col-md-3">
                                <label class="checkbox" id="active" value="1">
                                    <input type="checkbox" name="active" value="1">
                                    Is active
                                </label>
                            </div>
                            <div class="col-md-3">
                                <select name="future_product" id="future_product">
                                    <option value="HOT_DEAL">HOT DEAL</option>
                                    <option value="RESENT_PRODUCTS">RESENT PRODUCTS</option>
                                    <option value="FEATURE_ITEMS">FEATURE ITEMS</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Size<span class="red">*</span></label>
                            <div class="col-md-3">
                                <input type="text" name="size" id="title" class="form-control" placeholder="Title"
                                    autocomplete="off" value="<?php //echo set_value('pro_title') ?>">

                                <?php //form_error('size', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Description <span class="red">*</span></label>
                            <div class="col-md-9">
                                <textarea name="pro_description" id="description" class="form-control"
                                    autocomplete="off"></textarea>
                                <span id="description" class="error"></span>

                                <?= form_error('description', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Image <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="file" id="image" class="form-control-file" name="pro_image"
                                    autocomplete="off">

                                <?= form_error('pro_image', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="image" class="error"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-2 col-md-9">
                                <button type="submit" id="saveBtn" class="btn btn-primary">Save </button>
                                <button type="reset" id="resetBtn" class="btn btn-default btn-outline">Reset</button>
                            </div>
                        </div>
                    </form>

                    <script>
                    CKEDITOR.replace('description');
                    </script>

                </div>
            </div>
        </div>

        <!--Form Part End-->

        <!--=============================================================================================-->

        <style>
        .btn-warning {
            background-color: #36A95B;
            border-color: #36A95B;
            padding: 3px 5px;
            color: #fff;
            margin-bottom: 5px;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            padding: 4px 3px;
            margin-bottom: 5px;
        }
        </style>

        <!--Table Part Start-->
        <div class="card mb-3" id="userTable">
            <div class="card-header">
                <i class="fas fa-table"></i>
                All Product List
            </div>
            <span id="updateTable">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 10%">Title</th>
                                    <th style="width: 10%">Category</th>
                                    <th style="width: 20%">description</th>
                                    <th style="width: 10%">Price</th>
                                    <th style="width: 10%">Old Price</th>
                                    <th style="width: 10%">Image</th>
                                    <th style="width: 25%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">

                                <?php
                                if (isset($AllProductData)) :
                                    $i = 1;
                                    foreach ($AllProductData as $data) :
                                ?>

                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data->pro_title ?></td>
                                    <td><?php echo $data->cat_name ?></td>
                                    <td><?php echo read_more($data->pro_description, 50); ?></td>
                                    <td>tk <?php echo $data->pro_price ?></td>
                                    <td>tk <?php echo $data->pro_old_price ?></td>
                                    <td>
                                        <img style="width: 80px;"
                                            src="<?php echo base_url() ?>/uploads/product/<?php echo $data->pro_image ?>"
                                            alt="">
                                    </td>

                                    <td>
                                        <a href="<?php echo base_url() ?>edit_product/<?php echo $data->pro_id ?>"
                                            class="btn btn-warning" d>edit<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                        <a onclick="return confirm('Are you sure to delete this data ? ')"
                                            href="<?php echo base_url() ?>delete_product/<?php echo $data->pro_id ?>"
                                            title="Delete This" class="btn btn-danger ">delete<i class="fa fa-trash-o"
                                                aria-hidden="true"></i></a>

                                        <a href="<?php echo base_url() ?>add_size/<?php echo $data->pro_id ?>"
                                            class="btn btn-warning" d>size<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                        <a href="<?php echo base_url() ?>add_colors/<?php echo $data->pro_id ?>"
                                            class="btn btn-warning" d>colors<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                        <a href="<?php echo base_url() ?>add_image/<?php echo $data->pro_id ?>"
                                            class="btn btn-warning" d>image<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                    </td>
                                </tr>

                                <?php endforeach;
                                endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </span>
        </div>

        <!--Table Part End-->
        <!-- Dynamic Body Content End -->
        <!-- ============================================================================ -->

    </div>
</div>
<script>
function loadSubcategories(catId) {
    $.ajax({
        url: '<?php echo base_url('Category/get_subcategories'); ?>',
        type: 'POST',
        data: {
            cat_id: catId
        },
        dataType: 'json',
        success: function(response) {
            var subCatDropdown = $('#sub_cat_id');
            subCatDropdown.empty();
            subCatDropdown.append('<option value="">Choose Subcategory</option>');
            $.each(response, function(index, value) {
                subCatDropdown.append('<option name="sub_cat_id" id="sub_cat_id" value="' + value
                    .sub_category_id +
                    '">' + value
                    .sub_category_name + '</option>');
            });
        },
        error: function(error) {
            console.log(error);
        }
    });
}
// $(document).ready(function() {
//     $('#formGallery').submit(function(e) {
//         e.preventDefault();

//         var selectedSubCatId = $('#sub_cat_id').val();
//         var pro_description = $('#pro_description').val();
//         var editor = CKEDITOR.instances;
//         // Other form data
//         var formData = new FormData($(this)[0]);

//         console.log(editor.getData());
//         // return;
//         // Add selectedSubCatId to formData
//         formData.append('sub_cat_id', selectedSubCatId);
//         formData.append('pro_description', pro_description);
//         return;
//         // AJAX submission
//         $.ajax({
//             type: 'POST',
//             url: '<?php echo base_url() ?>save_product',
//             data: formData,
//             contentType: false,
//             processData: false,
//             success: function(response) {
//                 // console.log(response);
//                 // location.reload();
//             },
//             error: function(error) {
//                 // location.reload();
//             }
//         });
//     });
// });
</script>