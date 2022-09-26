<div class="container login_container">
    <h1 class="loginTitle"> Discover well-rounded advice for your well-being</h1>
      <div class="col-7 offset-6">
          <div class="form-content">
                <?php echo form_open(base_url().'login/check_login'); ?>
                    <h2 class="text-center">Nutriology <span>Pie</span></h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" required="required" name="username">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
                            <i class="fa fa-lock"></i>
                        </div>
                        <?php echo $error; ?>
                        <div class="clearfix">
                            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                            <a href="<?php echo base_url(); ?>forgot_psw" class="float-right">Forgot Password?</a>
                        </div>
                        <div class="form-group2">
                            <button type="submit" class="btn btn-primary btn-block">Log in</button>
                        </div>
                        <div class="cAccount">
                            <a href="<?php echo base_url(); ?>signup"> Doesn’t have account ? <strong> Register</strong></a>
                        </div>
                <?php echo form_close(); ?>
          </div>
	</div>
</div>
