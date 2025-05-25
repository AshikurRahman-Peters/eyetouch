<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">District</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Add District</span>
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
                    <form id="formGallery" method="post" action="<?php echo base_url() ?>save_district">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">District Name <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="district_name" id="title" class="form-control"
                                    placeholder="Name" autocomplete="off" value="<?= set_value('district_name'); ?>">
                                <?= form_error('district_name', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="title" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Charge <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="charge" id="charge" class="form-control" placeholder="charge"
                                    autocomplete="off" value="<?= set_value('charge'); ?>">
                                <?= form_error('charge', '<span style="color: #ff0002">', '</span>'); ?>
                                <span id="title" class="error"></span>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Image <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="file" name="district_logo" id="district_logo" class="form-control-file"  autocomplete="off">

                                <?php //form_error('district_logo', '<span style="color: #ff0002">', '</span>'); ?>
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


                </div>

            </div>
        </div>

        <!--Form Part End-->

        <!--=============================================================================================-->

        <!--Table Part Start-->
        <div class="card mb-3" id="userTable">
            <div class="card-header">
                <i class="fas fa-table"></i>
                All District List
            </div>
            <span id="updateTable">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No.</th>
                                    <th style="width: 25%">Name</th>
                                    <th style="width: 25%">Charge</th>
                                    <th style="width: 20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">

                                <?php
                                if (isset($getAllDistrict)) :
                                    $i = 1;
                                    foreach ($getAllDistrict as $district) :
                                ?>

                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $district->district_name ?></td>
                                    <td><?php echo $district->charge ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>edit_district/<?php echo $district->district_id ?>"
                                            class="btn btn-warning" d>edit<i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>

                                        <a onclick="return confirm('Are you sure to delete this data ? ')"
                                            href="<?php echo base_url() ?>/delete_district/<?php echo $district->district_id ?>"
                                            title="Delete This" class="btn btn-danger ">delete<i class="fa fa-trash-o"
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