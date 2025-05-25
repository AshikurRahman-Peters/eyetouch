<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Team member</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Edit Team</span>
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

                <?php
                    if(isset($editTeam)):
                        foreach($editTeam as $team):
                ?>

                <div class=" col-md-12">
                    <form id="formGallery" method="post" action="<?php echo base_url() ?>update_team/<?php echo $team->id ?>" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="" class="form-control" placeholder="Title" autocomplete="off" value="<?php echo $team->name; ?>">

                                <?= form_error('name', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Description <span class="red">*</span></label>
                            <div class="col-md-9">
                                <textarea name="description" id="description" class="form-control" autocomplete="off"><?php echo $team->description; ?></textarea>
                                <span id="description" class="error"></span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Image <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="file" id="image" class="form-control-file" name="image" autocomplete="off">

                                <img style="width: 60px;" src="<?php echo base_url() ?>/uploads/team/<?php echo  $team->image?>" alt="">

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
                    <script>
                        CKEDITOR.replace('description');
                    </script>

                </div>

                <?php endforeach; endif; ?>

            </div>
        </div>

        <!--Form Part End-->

        <!-- Dynamic Body Content End -->
        <!-- ============================================================================ -->

    </div>
</div>