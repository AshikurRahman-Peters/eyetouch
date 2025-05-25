<!-- <div class="breadcrumbs">
    <div class="container">
        <div class="title-breadcrumb">
            About Eye Touch & Privacy Policy
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="<?php //echo base_url(); ?>"><i class="fa fa-home"></i></a></li>

            <li><a href="">About Us | </a></li>
        </ul>

    </div>
</div> -->


<div class="container">
    <div class="row">
        <?php $about=$this->db->query("select * from tbl_about where about_id=1")->row();?>
        <h3 style="border-bottom: 1px solid black;text-align:center">
            <?php echo $about->about_title;?>
        </h3>
        <p><?php echo $about->about_description;?></p>
    </div>
</div>


<!-- team -->
<div class="banner_bottom_agile_info team">
    <div class="container" style="text-align: center;">
        <h3 class="wthree_text_info">Our Team <span>Members</span></h3>
        <div class="inner_w3l_agile_grids">
            <?php
                if(isset($getTeamData)):
                    foreach($getTeamData as $team):
            ?>
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="<?php echo base_url() ?>uploads/team/<?php echo $team->image ?>" class="img-responsive"
                        alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4><?php echo $team->name ?></h4>
                            <p><?php echo $team->description ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<!-- //team -->
<!-- our bread -->
<!--/grids-->
<?php $this->load->view('frontend/partials/brands') 
?>