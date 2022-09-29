<div class="container prim_container forgot_container">
    <h1 class="loginTitle"> Discover well-rounded advice for your well-being</h1>
        <div class="col-7 offset-6">
            <div class = "form-reset">
                <div class="headingtext">Reset <span>Password</span></div>
                
                <?php echo form_open(base_url().'forgot_psw/send'); ?>
                <div class="form-group">
                    <span>Email Address</span>
                    <input type="email" class="form-control" placeholder="Please input your email" required="required" name="email">
                    <i class="fa fa-envelope"></i>
                    <div class="sendCode">
                        <button type="submit" class="btn2">Send</button>
                    </div>
                    <div class="form-group" style="color:red;">
                        <?php echo $error; ?>
                    </div>
                </div>
                <?php echo form_close(); ?>

                <?php echo form_open(base_url().'forgot_psw/reset_password'); ?>
                <div class="form-group">
                    <span>Net token</span>
                    <input type="text" class="form-control" placeholder="Please enter the token" required="required" name="verifycode">
                    <i class="fa fa-code"></i>
                    <div class="form-group3" style="color:red;">
                        <?php echo $token_error; ?>
                    </div>
                </div>

                <div class="form-group">
                    <span>New Password</span>
                    <input type="password" class="form-control" id="pwd" placeholder="Minimum 5 characters password" required="required" name="password">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                    <div><span id="span1"></span><span id="span2"></span><span id="span3"></span></div>
                    <div class="form-group3" style="color:red;">
                    `<?php echo form_error('password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <span>Confirm Password</span>
                    <input type="password" class="form-control" placeholder="Please input new password again" required="required" name="password2">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                    <div class="form-group3" style="color:red;">
                        <?php echo form_error('password2'); ?>
                    </div>
                </div>

                <div class="form-group2">
                    <button type="submit" class="btn btn-default">Reset Password</button>
                </div>
                <?php echo form_close(); ?>

                <div class="clogin">
                    <a href="<?php echo base_url(); ?>login"> Do not need to reset ? <strong> Login </strong></a>
                </div>
            </div>
        </div>
    </div>
</div>