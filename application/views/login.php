<div class="container">
      <div class="col-4 offset-4">
			<?php echo form_open(base_url().'login/check_login'); ?>
				<h2 class="text-center">Login</h2>       
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" required="required" name="username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" required="required" name="password">
					</div>
					<div class="form-group">
					<?php echo $error; ?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Log in</button>
					</div>
					<div class="clearfix" style = "text-align: center">
						<label class="text-center">Don't have an account?</label>
						<a href="<?php echo base_url(); ?>regular_signup">Sign up</a>
					</div> 
					<div class="clearfix">
						<h1>1234miaaaaa</h1>
						<label class="float-left form-check-label"><input type="checkbox" name="remember"> Remember me</label>
						<a href="#" class="float-right">Forgot Password?</a>
					</div>    
			<?php echo form_close(); ?>
	</div>
</div>
