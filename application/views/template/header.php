<html>
        <head>
            <title>Nutriology Pie</title>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
            <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/signup.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/psw.css">
        </head>
        <body>
  <script>
        // Show select image using file input.
        function readURL(input) {
            $('#default_img').show();
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#select')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(200);

                };

                reader.readAsDataURL(input. files[0]);
            }
        }
    </script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo base_url(); ?>homepage">
          <img src="/NutriologyPie/assets/img/logo2.png" alt="Logo" style="width:190px;">
      </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a href="<?php echo base_url(); ?>homepage" class="text-success px-3 rounded-md"><b>Homepage</b></a>
              <a href="#" class="text-success px-3 rounded-md"><b>Dashboard</b></a>
              <a href="#" class="text-success px-3 rounded-md"><b>Team</b></a>
              <a href="#" class="text-success px-3 rounded-md"><b>Projects</b></a>
              <a href="#" class="text-success px-3 rounded-md"><b>Calendar</b></a>
          </li>
      </ul>

      <ul class="navbar-nav my-lg-0">
          <?php if(!$this->session->userdata('logged_in')) : ?>
              <li class="nav-item">
                  <a class="btn btn-dark btn-sm"  role="button" href="<?php echo base_url(); ?>signup"> Signup </a>
                  <a class="btn btn-dark btn-sm"  role="button" href="<?php echo base_url(); ?>login"> Login </a>
                  <a class="btn btn-warning btn-sm"  role="button" href="<?php echo base_url(); ?>membership"> Become Member
                      <div class="spinner-grow spinner-grow-sm" role="status">
                          <span class="sr-only">Loading...</span>
                      </div>
                  </a>
              </li>

          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
              <li class="nav-item">
                  <a class="btn btn-danger btn-sm"  role="button" href="<?php echo base_url(); ?>login/logout"> Logout </a>
                  <a class="btn btn-danger btn-sm"  role="button" href="<?php echo base_url(); ?>wishlist"> Wishlist </a>
                  <a class="btn btn-dark btn-sm"  role="button" href="<?php echo base_url(); ?>discuss"> Discussion </a>
                  <a class="btn btn-dark btn-sm"  role="button" href="<?php echo base_url(); ?>profile"> Change My Profile </a>
                  <a class="btn btn-warning btn-sm"  role="button" href="<?php echo base_url(); ?>membership"> Become Member
                      <div class="spinner-grow spinner-grow-sm" role="status">
                          <span class="sr-only">Loading...</span>
                      </div>
                  </a>
              </li>
          <?php endif; ?>
      </ul>

    </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>



