<div class="container sed_container register_container">
    <h1 class="signTitle"> Discover well-rounded advice for your well-being</h1>
    <div class="col-7 offset-6">
        <div class="form-register">
            <?php echo form_open(base_url().'signup/check_signup_information'); ?>
                <div class="headingtext">Sign <span>Up</span></div>

                <div class="form-group">
                    <span>Username</span>
                    <input type="text" class="form-control" placeholder="Input your username" required="required" name="username">
                    <i class="fa fa-user" style="font-size:23px;"></i>
                    <div class="form-group3">
                        <?php echo form_error('username'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <span>Email Address</span>
                    <input type="email" class="form-control" placeholder="Input your email" required="required" name="email">
                    <i class="fa fa-envelope"></i>
                    <div class="form-group3">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <span>Password</span>
                    <input type="password" class="form-control" placeholder="Minimum 5 characters password" required="required" name="password">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                    <div><span id="span1"></span><span id="span2"></span><span id="span3"></span></div>
                    <div class="form-group3">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <span>Confirm Password</span>
                    <input type="password" class="form-control" placeholder="Type your password again" required="required" name="password2">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                    <div class="form-group3">
                        <?php echo form_error('password2'); ?>
                    </div>
                </div>

                <div class="form-group2">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>

                <div class="clogin">
                    <a href="<?php echo base_url(); ?>login"> Already have account ? <strong> Login </strong></a>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>