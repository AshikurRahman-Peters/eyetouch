<div class="wrapper-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div style="text-align:center;font-weight:bolder;">
                    <h3>Sign In</h3>
                </div>
                <hr>
                <form role="form" method="POST" id="login_form_action" data-gtm-form-interact-id="0">
                    <input type="hidden" name="_token" value="03HtGoKxhyB1y6H4lAmTWnc4Aggzz5D4Ou0p8hwT">

                    <div class="form-group">
                        <label for="email" class="control-label">E-Mail Address</label>


                        <input id="email" type="email" class="form-control" name="email" value="" required=""
                            autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>


                        <input id="password" type="password" class="form-control" name="password" required=""
                            data-gtm-form-interact-field-id="0">
                    </div>
                    <div class="form-group">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>

                    </div>

                    <div class="form-group">

                        <button type="submit" value="Sign In" class="btn btn-block btn-success">
                            Login
                        </button>
                        <br>
                        <div class="text-center">
                            <a href="<?php echo base_url();?>reset">
                                Forgot Your Password?
                            </a> |
                            <a href="<?php echo base_url();?>register">
                                Registration
                            </a>
                        </div>

                    </div>
                    <p style="text-align:center;font-weight:bolder;">OR</p>
                    <div>
                        <a class="btn btn-block btn-social btn-facebook" style="position:center;"
                            href="https://www.facebook.com/v3.0/dialog/oauth?client_id=1242334735874818&amp;redirect_uri=https%3A%2F%2Fwww.EyeTouch.com%2Flogin%2Fcallback%2Ffacebook&amp;scope=email&amp;response_type=code&amp;state=nX4raKpxUbM37aCl8JZCmRTL8mSOXSFMeltr2Okm">
                            <span class="fa fa-facebook"></span> Sign in with Facebook
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <div class="container-fluid">
    </div>
</div>