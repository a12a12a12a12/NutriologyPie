
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Pricing example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    

<div class="container py-3">
  <header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Become Our Membership</h1>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
      <div class="col">
        <div class="card mb-4 rounded-2 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Access the overviews of courses</li>
              <li>Access the reviews of courses</li>
              <li>Reviews can be sorted by time</li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-outline-primary" role="button" href="<?php echo base_url(); ?>signup"> Sign up for free </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-2 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Clike to like reviews</li>
              <li>Access average GPA of courses</li>
              <li>Access course content in detail</li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-primary <?php echo $disabled; ?>" role="button" href="<?php echo base_url(); ?>paypal">Get started </a>
          </div>
        </div>
      </div>
    </div>
  </body>

  <footer>
    <div class="form-group" style="text-align:center;">
      <?php echo $error; ?>
    </div>
  </footer>
</html>
