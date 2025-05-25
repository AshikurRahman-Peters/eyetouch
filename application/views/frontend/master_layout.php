<?php $this->load->view('frontend/inc/header'); ?>


<?php
    if(isset($content)){
        $this->load->view('frontend/'.$content);
    }
?>

<!--grids-->

<!-- footer -->
<?php $this->load->view('frontend/inc/footer') ?>