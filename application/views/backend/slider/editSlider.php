<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Slider</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Edit Slider</span>
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
                        if(isset($editSlider)):
                            foreach($editSlider as $slider):
                    ?>

                    <form id="formGallery" method="post" action="<?php echo base_url() ?>update_slider/<?php echo $slider->id ?>" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title" autocomplete="off" value="<?php echo $slider->title ?>">
                                <?= form_error('title', '<span style="color: #ff0002">', '</span>'); ?>

                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Slider Slogan <span class="red">*</span></label>
                            <div class="col-md-9">
                                <textarea name="slogan" id="description" class="form-control" autocomplete="off"><?php echo  $slider->slogan ?></textarea>
                                <span id="description" class="error"></span>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Image <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="file" id="image" class="form-control-file" name="image" autocomplete="off">
                                <img style="width: 100px;" src="<?php echo base_url() ?>/uploads/slider/<?php echo  $slider->image ?>" alt="">

                                <?= form_error('image', '<span style="color: #ff0002">', '</span>'); ?>
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