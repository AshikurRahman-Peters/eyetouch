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
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Add Admin</span>
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
                    <form id="formGallery" method="post" action="<?php echo base_url() ?>save_admin" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="title" class="form-control" placeholder="Name" autocomplete="off" value="<?php echo set_value('name') ?>">

                                <?= form_error('name', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="email" name="email" id="title" class="form-control" placeholder="Email" autocomplete="off" value="<?php echo set_value('email') ?>">
                                <?= form_error('email', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="title" class="error"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Username<span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="username" id="title" class="form-control" placeholder="Username" autocomplete="off" value="<?php echo set_value('username') ?>">

                                <?= form_error('username', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Password <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="password" name="pass" id="title" class="form-control" placeholder="Password" autocomplete="off" value="">

                                <?= form_error('pass', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Confirm Password <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="password" name="con_pass" id="title" class="form-control" placeholder="Confirm Password" autocomplete="off" value="">

                                <?= form_error('con_pass', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>

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
                All Admin List</div>
            <span id="updateTable">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th style="width: 5%">No.</th>
                    <th style="width: 25%">Name</th>
                    <th style="width: 25%">Email</th>
                    <th style="width: 20%">Username</th>
                    <th style="width: 20%">Action</th>
                </tr>
                </thead>
                <tbody id="tableData">

                <?php
                    if(isset($getAdminData)):
                        $i = 1;
                        foreach($getAdminData as $data):
                ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data->name; ?></td>
                    <td><?= $data->email; ?></td>
                    <td><?= $data->username; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>edit_admin/<?php echo $data->id ?>" class="btn btn-warning" d >edit<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                            <a onclick="return confirm('Are you sure to delete this data ? ')"
                               href="<?php echo base_url() ?>delete_admin/<?php echo $data->id ?>"  title="Delete This"  class="btn btn-danger ">delete<i class="fa fa-trash-o" aria-hidden="true"></i></a>

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