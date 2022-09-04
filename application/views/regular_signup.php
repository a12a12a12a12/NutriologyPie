<div class="container text-center">
    <div class="col-12" style = "margin-top:80px;">
        <?php echo form_open(base_url().'regular_signup/user_information'); ?>
    <div class = "row">
        <div class="col col-md-7 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide col-md-12 mt-3 pt-3" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2022/08/24/17/11/windmill-7408365_960_720.jpg" height = "1000" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="banner-text">
                                <h2>We are NutriologyPie!</h2>
                                <p>The problem we want to solve is to prevent young adult users being misinformed about health information online by build a website. Our most unique feature is browser extension.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2019/08/28/09/04/cat-4436154_960_720.jpg" height = "1000" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="banner-text">
                                <h2>This is unique!</h2>
                                <p>We will create a Browser Extension which will recommend relative reliable health information websites based on the title of the page and display information such as rating grades by experts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2022/02/18/07/27/lake-7020123_960_720.jpg" height = "1000" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="banner-text">
                                <h2>What we provide?</h2>
                                <p>We provide information in posts, stories, and short videos. Also address or reduce health and nutrition misinformation by inviting professionals to clarify or correct the misinformation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- <div class="row"> -->
        <div class = "col col-md-5 text-left"> 
            <div class="login-sec">
            <h2 class="text-center"><font color="#076efe">Sign up</font></h2>
            <form class="col-md-4 login-form">
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                    <input type="text" class="form-control" placeholder="Username" required="required" name="username">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('username'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                    <input type="password" class="form-control" placeholder="Password" required="required" name="password">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $error; ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Confirm your password</label>
                    <input type="password" class="form-control" placeholder="Confirm your Password" required="required" name="confirm_password">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('confirm_password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Email</label>
                    <input type="text" class="form-control" placeholder="Email" required="required" name="email">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
                </div>
                <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox" name="remember"> Remember me</label>
                    <a href="<?php echo base_url(); ?>forgotpassword" class="float-right">Forgot Password?</a>
                    <a href="<?php echo base_url(); ?>signup" class="float-right">Don't have an account? Sign up now!</a>
                </div>
            </form>
        </div>
    </div>
            <!-- </div> -->
        </div>

        <!-- <div class="row">

            <div class="col-md-4 login-sec">
            <h2 class="text-center"><font color="#076efe">Sign up</font></h2>

            <form class="login-form">
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                    <input type="text" class="form-control" placeholder="Username" required="required" name="username">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('username'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                    <input type="password" class="form-control" placeholder="Password" required="required" name="password">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $error; ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Confirm your password</label>
                    <input type="password" class="form-control" placeholder="Confirm your Password" required="required" name="confirm_password">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('confirm_password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Email</label>
                    <input type="text" class="form-control" placeholder="Email" required="required" name="email">
                    <div class="form-group" style="color:red;">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
                </div>
                <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox" name="remember"> Remember me</label>
                    <a href="<?php echo base_url(); ?>forgotpassword" class="float-right">Forgot Password?</a>
                    <a href="<?php echo base_url(); ?>signup" class="float-right">Don't have an account? Sign up now!</a>
                </div>
            </form>
        </div> -->


<!-- </div> -->
        <?php echo form_close(); ?>
    </div>
</div>