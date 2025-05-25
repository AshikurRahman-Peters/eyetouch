<div class="wrapper-div">
    <div class="container">
    </div>
    <div class="container-fluid">
        <div class="modal fade commonmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border: 0px;">
                    <div class="modal-header" style="background: #2bb673; color: white;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title commonmodal-header">
                        </h4>
                    </div>
                    <div class="modal-body commonmodal-body">
                    </div>
                    <div class="modal-footer commonmodal-footer" style="display: inline-table; width: 100%;">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 style="text-align:center;">Track Your Order</h3>
            <hr>
        </div>
        <br><br>
        <!--<div class="row">
<div class="col-sm-3"></div>
<div class="nav-admin-search-bar">
		<input class="seller-data nav-admin-text-input form-control" type="text" name="find" placeholder="Your order reference number" />
		<button class="btn seller-search nav-admin-search-button" type="submit">Track</button>
</div>
</div>-->
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div>
                    <form method="POST">
                        <input type="hidden" name="_token" value="Y7b76gk73XUEXtKSdNPQOMsFGKwYwFmw4ZM6zQP1">
                        <input type="text" class="track form-control" placeholder="Order reference no."
                            name="order-ref"><br>
                        <input type="text" class="track-phone form-control" placeholder="Phone number on Invoice."
                            name="order-phone">
                        </br>
                        <input class="btn btn-success" type="submit" value="Track your order">
                    </form>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <br>
    </div>
</div>