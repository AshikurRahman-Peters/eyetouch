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
                    <a class="btn btn-outline-primary " href="<?php base_url() ?>add_sub_category">Add Sub Category</a>
                    </br>
                    <form id="formGallery" method="post" action="<?php echo base_url() ?>save_category">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Category Name <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="cat_name" id="title" class="form-control" placeholder="Name"
                                    autocomplete="off" value="<?= set_value('cat_name'); ?>">
                                <?= form_error('cat_name', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="title" class="error"></span>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Image <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="file" name="cat_logo" id="cat_logo" class="form-control-file"  autocomplete="off">

                                <?php //form_error('cat_logo', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="image" class="error"></span>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <div class="offset-2 col-md-9">
                                <button type="submit" id="saveBtn" class="btn btn-outline-primary">Save </button>
                                <button type="reset" id="resetBtn" class="btn btn-outline-default btn-outline-outline">Reset</button>
                            </div>
                        </div>
                    </form>
                    <a href="<?= base_url() ?>Dashboard">Home</a>

                </div>

            </div>
        </div>

        <!--Form Part End-->

        <!--=============================================================================================-->

        <!--Table Part Start-->
        <div class="card mb-3" id="userTable">
            <div class="card-header">
                <i class="fas fa-table"></i>
                All Category List
            </div>
            <span id="updateTable">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 25%">Name</th>
                                    <th style="width: 20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">

                                <?php
                                if (isset($getAllCategory)) :
                                    $i = 1;
                                    foreach ($getAllCategory as $category) :
                                ?>

                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $category->cat_name ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>/edit_category/<?php echo $category->cat_id ?>"
                                            class="btn btn-outline-warning" d>edit<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                        <a onclick="return confirm('Are you sure to delete this data ? ')"
                                            href="<?php echo base_url() ?>/delete_category/<?php echo $category->cat_id ?>"
                                            title="Delete This" class="btn btn-outline-danger ">delete<i class="fa fa-trash-o"
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
        <!-- ============================================================================ -->

    </div>
</div>