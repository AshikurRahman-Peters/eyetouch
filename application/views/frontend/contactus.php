<!-- /banner_bottom_agile_info -->
<!-- <div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>C<span>ontact Us </span></h3> -->
<!--/w3_short-->
<!-- <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="<?php //echo base_url('home') 
                                    ?>">Home</a><i>|</i></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div> -->
<!--//w3_short-->
<!-- </div>
</div> -->


<div class="breadcrumbs">
    <div class="container">
        <div class="title-breadcrumb">
            Contact Us
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>

            <li><a href="">Contact Us | </a></li>
        </ul>

    </div>
</div>

<!--/contact-->
<div class="banner_bottom_agile_info">
    <div class="container" style="text-align: center;">

        <?php
                    if($success = $this->session->userdata('success')){
                        echo "<span style=\"color: green; font-size: 18px;\">$success</span>";
                    }
                    elseif($error = $this->session->userdata('error')){
                        echo "<span style=\"color: red; font-size: 18px\">$error</span>";
                    }

                                       echo validation_errors();

                    ?>

        <?php
        if (isset($getContact)) :
            foreach ($getContact as $contact) :
        ?>

        <div class="contact-grid-agile-w3s" style="text-align: center; align-items:center;">
            <div class="col-md-4 contact-grid-agile-w3">
                <div class="contact-grid-agile-w31">
                    <h4>
                        <i class="fa fa-map-marker" aria-hidden="true"> Address</i>
                    </h4>
                    <p><?php echo $contact->address ?></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid-agile-w3">
                <div class="contact-grid-agile-w32">
                    <h4>
                        <i class="fa fa-phone" aria-hidden="true"> Call Us </i>
                    </h4>
                    <p><?php echo $contact->phone ?><span>, <br><?php echo $contact->phone2 ?></span></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid-agile-w3">
                <div class="contact-grid-agile-w33">
                    <h4>
                        <i class="fa fa-envelope-o" aria-hidden="true"> Email </i>
                    </h4>
                    <p><a href="mailto:info@example.com"><?php echo $contact->email ?></a>, <br><span><a
                                href="mailto:info@example.com"><?php echo $contact->email2 ?></a></span></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <?php endforeach;
        endif; ?>
    </div>


</div>
<div class="container">
    <div class="row">
        <div class="contact-w3-agile1 col-md-12 map" data-aos="flip-right">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
                class="map" style="border:0; width:100%; height:230px"></iframe>
        </div>
    </div>
    <style>
    p {
        margin: 0 0 0px;
    }

    .ico {
        padding: 3px 7px 2px 8px;
        margin: 3px;
        border: 1px solid;
        display: inline-block;
        font-size: 24px;
    }
    </style>
    <div class="row">
        <div class="col-md-6 ">
            <h4>For More <span>Information</span></h4>
            <div class="mail-agileits-w3layouts">
                <i class="fa fa-volume-control-phone"> Telephone:</i>
                <p><?php echo $contact->phone ?></p>

            </div>
            <div class="mail-agileits-w3layouts">
                <i class="fa fa-envelope-o"> Mail: </i>
                <a href="mailto:info@example.com">
                    <p><?php echo $contact->email ?></p>
                </a>
            </div>
            <div class="mail-agileits-w3layouts">
                <i class="fa fa-map-marker"> Location: </i>
                <p> Mirpur 60 feet road, Mirpur 2,Dhaka, Bangladesh.</p>
                <div class="clearfix"> </div>
            </div>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
                <li class="share">SHARE ON : </li>
                <li class="ico"><a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="ico"><a href="#">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </li>
                <li class="ico"><a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li class="ico"><a href="#">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-6 ">
            <h4 class="white-w3ls">Contact <span>Form</span></h4>
            <form action="<?php echo base_url('message_submit'); ?>" method="post">
                <div class="form-group required">
                    <input type="name" id="name" name="name" value="" required="" placeholder="Enter your Name "
                        class="form-control">
                </div>
                <div class="form-group required">
                    <input type="phone" id="phone" name="phone" value="" required="" placeholder="phone or mobile no"
                        class="form-control">
                </div>
                <div class="form-group required">
                    <input type="email" id="email" name="email" value="" required="" placeholder="Enter Your E-mail"
                        class="form-control">
                </div>
                <div class="form-group required">
                    <input type="subject" id="subject" name="subject" value="" required="" placeholder="Subject"
                        class="form-control">
                </div>
                <div class="form-group required">
                    <textarea type="message" id="message" name="message" value="" required="" placeholder="Message"
                        class="form-control"></textarea>
                </div>

                <input type="submit" value="SEND">
            </form>
        </div>
    </div>

</div>
<!--//contact-->


<!--/grids-->
<?php $this->load->view('frontend/partials/brands') 
?>