<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Edit Contact</span>
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
                    if(isset($editContact)):
                        foreach($editContact as $contact):
                            ?>

                            <form id="formGallery" method="post" action="<?php echo base_url() ?>update_contact/<?php echo $contact->id; ?>">

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Address <span class="red">*</span></label>
                                    <div class="col-md-9">
                                        <textarea name="address" id="address" class="form-control" autocomplete="off"><?php echo $contact->address ?></textarea>
                                        <?= form_error('address', '<span style="color: #ff0002">', '</span>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Phone <span class="red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Email" value="<?php echo $contact->phone ?>" autocomplete="off">
                                        <?= form_error('phone', '<span style="color: #ff0002">', '</span>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Phone 2nd <span class="red"></span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone2" id="phone2" class="form-control" placeholder="Email" value="<?php echo $contact->phone2 ?>" autocomplete="off">
                                        <?= form_error('phone', '<span style="color: #ff0002">', '</span>'); ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Email <span class="red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $contact->email ?>" autocomplete="off">
                                        <?= form_error('email', '<span style="color: #ff0002">', '</span>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Email 2nd <span class="red"></span></label>
                                    <div class="col-md-9">
                                        <input type="email" name="email2" id="email2" class="form-control" placeholder="Email" value="<?php echo $contact->email2 ?>" autocomplete="off">
                                        <?= form_error('email', '<span style="color: #ff0002">', '</span>'); ?>
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
                        CKEDITOR.replace('address');
                    </script>

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