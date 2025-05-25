<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Admin</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Edit Admin</span>
                <div>
                    <?php
                    if($success = $this->session->userdata('success')){
                        echo "<span style=\"color: green; font-size: 18px\">$success</span>";
                    }
                    elseif($error = $this->session->userdata('error')){
                        echo "<span style=\"color: red; font-size: 18px\">$error</span>";
                    }

                    echo validation_errors();
                    ?>
                </div>
            </div>

            <div class="card-body">
                <div class=" col-md-12">

                    <?php
                        if(isset($editAdmin)):
                            foreach($editAdmin as $data):
                    ?>

                    <form id="formGallery" method="post" action="<?php echo base_url() ?>update_admin/<?php echo $data->id ?>" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="title" class="form-control" placeholder="Name" autocomplete="off" value="<?php echo $data->name ?>">

                                <span id="title" class="error"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="email" name="email" id="title" class="form-control" placeholder="Email" autocomplete="off" value="<?php echo $data->email ?>">

                                <span id="title" class="error"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Username<span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="username" id="title" class="form-control" placeholder="Username" autocomplete="off" value="<?php echo $data->username ?>">

                                <span id="title" class="error"></span>
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