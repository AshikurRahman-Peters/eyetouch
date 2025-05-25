<style>
.col-sm-8 h1,
h2 {
    text-align: center;
}
</style>

<div class="wrapper-div">
    <div class="container">
    </div>
    <div class="container-fluid">
        <div class="row">

            <?php
        if(isset($Allcommonpart)):
            foreach($Allcommonpart as $data):
    ?>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <?php echo $data->com_description ?>
            </div>
            <div class="col-sm-2"></div>
            <?php endforeach; endif; ?>

        </div>
    </div>
</div>