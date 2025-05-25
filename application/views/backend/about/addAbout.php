<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">News & event</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Add content</span>
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
                    <form id="formGallery" method="post" action="<?php echo base_url() ?>save_About"
                        enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="about_title" id="title" class="form-control"
                                    placeholder="Title" autoaboutplete="off" value="<?php echo set_value('title') ?>">

                                <?= form_error('about_title', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Description <span class="red">*</span></label>
                            <div class="col-md-9">
                                <textarea name="about_description" id="description" class="form-control"
                                    autoaboutplete="off"></textarea>
                                <span id="description" class="error"></span>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Type <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="about_type" id="title" class="form-control" placeholder="Type" autoaboutplete="off" value="<?php echo set_value('title') ?>">

                                <?php //form_error('about_type', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Image <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="file" id="image" class="form-control-file" name="about_image" autoaboutplete="off">

                                <?php //form_error('about_image', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="image" class="error"></span>
                            </div>
                        </div> -->

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

        <!--Table Part Start-->
        <div class="card mb-3" id="userTable">
            <div class="card-header">
                <i class="fas fa-table"></i>
                All News & Event List
            </div>
            <span id="updateTable">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 20%">Title</th>
                                    <!-- <th style="width: 10%">Type</th> -->
                                    <th style="width: 25%">Description</th>
                                    <!-- <th style="width: 20%">Image</th> -->
                                    <th style="width: 20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">

                                <?php
                if(isset($AllAbout)):
                    $i = 1;
                    foreach($AllAbout as $about):
                        ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $about->about_title ?></td>
                                    <!-- <td><?php //echo $about->about_type ?></td> -->
                                    <td><?php echo $about->about_description ?></td>
                                    <!-- <td>
                        <img style="width: 100px;" src="<?php //echo base_url() ?>/uploads/About/<?php echo  $about->about_image?>" alt="">
                    </td> -->
                                    <td>
                                        <a href="<?php echo base_url() ?>edit_comonpart/<?php echo $about->about_id ?>"
                                            class="btn btn-warning" d>edit<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                        <a onclick="return confirm('Are you sure to delete this data ? ')"
                                            href="<?php echo base_url() ?>delete_About/<?php echo $about->about_id ?>"
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