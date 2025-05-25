<div class="wrapper-div">
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div style="text-align:center;font-weight:bolder;">
                            <h3>Registration</h3>
                        </div>
                        <hr>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" id="customer_acc_cu_form">

                                <div class="form-group">
                                    <label for="name" class="control-label">Name</label>
                                    <input id="first_name" type="text" class="form-control" name="first_name" value=""
                                        required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value=""
                                        required="">
                                    <span class="has-error"><strong class="mail-already-exist"></strong></span>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">Mobile Phone</label>
                                    <input id="phone" type="text" placeholder="01XXXXXXXXX" class="form-control"
                                        name="phone" value="" pattern="(01)\d{9}" required="">
                                    <span class="has-error"><strong class="phone-already-exist"></strong></span>
                                </div>
                                <!-- 
                                <div class="form-group" style="display:none">
                                    <label for="otp" class="control-label">Mobile Phone</label>
                                    <input id="otp" type="hidden" placeholder="XXXXXX" class="form-control otpvalue"
                                        name="otp" value="" required="">
                                </div> -->

                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <input id="password" type="password" class="form-control" name="password"
                                        minlength="8" required="">
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" minlength="6"
                                        name="password_confirmation" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="control-label">Address </label>
                                    <input id="address" type="text" class="form-control" name="address" required="">
                                </div>
                                <input type="hidden" name="action" id="action" value="create">
                                <input type="hidden" name="id" id="id" value="create">
                                <div class="form-group">
                                    <button class="btn btn-block btn-success send-otp" type="submit" name="submit"
                                        id="submit" value="Sign Up">Register</button>
                                </div>
                            </form>

                            <p style="text-align:center;font-weight:bolder;">OR</p>
                            <div>
                                <a class="btn btn-block btn-social btn-facebook" style="position:center;"
                                    href="/login/facebook">
                                    <span class="fa fa-facebook"></span> Sign up with Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
        <!-- 
        <div class="modal fade otpmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mobile Verification</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>We have sent a verification code SMS to your phone number. Please insert the verification
                            code in this text field below.</p>
                        <input type="text" placeholder="Insert verification code here..." class="form-control modalotp"
                            name="otp" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary resend-otp">Resend Code</button>
                        <button type="button" class="btn btn-success total-data-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <div class="container-fluid">
    </div>
</div>