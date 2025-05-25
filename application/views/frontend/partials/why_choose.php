<div class="schedule-bottom">

    <?php
        if(isset($whyChoose)):
            foreach($whyChoose as $data):
    ?>

    <div class="col-md-6 agileinfo_schedule_bottom_left">
        <img src="<?php echo base_url(); ?>/uploads/commonpart/<?php echo $data->com_image ?>" alt=" " class="img-responsive" />
    </div>
    <div class="col-md-6 agileits_schedule_bottom_right">
        <div class="w3ls_schedule_bottom_right_grid">
            <h3><?php echo $data->com_title ?></h3>
            <p><?php echo $data->com_description ?></p>
            <div class="clearfix"> </div>
        </div>
    </div>

    <?php endforeach; endif; ?>

    <div class="clearfix"> </div>
</div>