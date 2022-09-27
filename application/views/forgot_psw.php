<div class="container prim_container forgot_container">
    <h1 class="loginTitle"> Discover well-rounded advice for your well-being</h1>
        <div class="col-7 offset-6">
            <div class = "form-reset">
                <?php echo form_open(base_url().'forgot_password/validate'); ?>
                <div class="headingtext">Reset <span>Password</span></div>
                <div class="form-group">
                    <span>Email Address</span>
                    <input type="email" class="form-control" placeholder="Please input your email" required="required" name="email">
                    <i class="fa fa-envelope"></i>
                    <div class="form-group3">
<!--                        --><?php //echo $error; ?>
                    </div>
                </div>
                <div class="form-group">
                    <span>Net token</span>
                    <input type="text" class="form-control" placeholder="Please enter the token" required="required" name="email">
                    <i class="fa fa-code"></i>
                    <div class="form-group3">
<!--                        --><?php //echo $error; ?>
                    </div>
                </div>
                <div class="form-group">
                    <span>New Password</span>
                    <input type="password" class="form-control" id="pwd" placeholder="Minimum 8 characters password" required="required" name="password">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                    <div><span id="span1"></span><span id="span2"></span><span id="span3"></span></div>
                    <div class="form-group3">
<!--                        --><?php //echo $error; ?>
                    </div>
                </div>
                <div class="form-group">
                    <span>Confirm Password</span>
                    <input type="password" class="form-control" placeholder="Please input new password again" required="required" name="password2">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                    <div class="form-group3">
<!--                        --><?php //echo $error; ?>
                    </div>
                </div>
                <div class="form-group2">
                    <button type="submit" class="btn btn-default">Reset Password</button>
                </div>
                <div class="clogin">
                    <a href="<?php echo base_url(); ?>login"> Do not need to reset ? <strong> Login </strong></a>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>