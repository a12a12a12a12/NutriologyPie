<div class="container sed_container register_container">
    <h1 class="signTitle"> Discover well-rounded advice for your well-being</h1>
    <div class="col-7 offset-6">
        <div class="form-register">
            <?php echo form_open(base_url() .'signup/'); ?>
                <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">') ?>
                <div class="headingtext">Sign <span>Up</span></div>
                <?php if ($this->session->flashdata('error')): ?>
                    <?php echo '<p class="alert alert-dismissable alert-danger">' . $this->session->flashdata('error') . '</p>'; ?>
                <?php endif; ?>
                <div class="form-group">
                    <span>Username</span>
                    <input type="text" class="form-control" placeholder="Input your username"
                                    required="required" name="username">
                    <i class="fa fa-user" style="font-size:23px;"></i>
                </div>
                <div class="form-group">
                    <span>Email Address</span>
                    <input type="email" class="form-control" placeholder="Input your email"
                                         required="required" name="email">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="form-group">
                    <span>Password</span>
                    <input type="password" class="form-control" id="pwd"
                                    placeholder="Minimum 8 characters password" required="required" name="password">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                    <div><span id="span1"></span><span id="span2"></span><span id="span3"></span></div>
                </div>
                <div class="form-group">
                    <span>Confirm Password</span>
                    <input type="password" class="form-control"
                                           placeholder="Type your password again" required="required" name="password2">
                    <i class="fa fa-lock" style="font-size:26px;"></i>
                </div>
                <div class="form-group2">
                    <button type="submit" class="btn btn-default">Register</button>
                </div>
                <div class="clogin">
                    <a href="<?php echo base_url(); ?>login"> Already have account ? <strong> Login </strong></a>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>