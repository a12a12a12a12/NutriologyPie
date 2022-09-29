<?php echo form_open(base_url().'homepage/xxx'); ?>
    <div class="home-top">
        <div id="demo" class="carousel slide" data-ride="carousel"  data-interval="false">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/NutriologyPie/assets/img/home1.jpg">
                    <div class="carousel-caption">
                        <div class="col-md-7">
                            <h1 class="pb-2"><strong>Is coffee good or bad for your health?</strong> </h1>
                            <h3>Moderate coffee intake-about 2-5 cups a day-is linked to a lower likelihood of type 2 diabetes,heart disease,liver and endometrial cancers,Parkinson's disease,and depression.</h3>
                            <a class="btn btn-success btn-lg mt-4"  role="button" href="https://www.hsph.harvard.edu/news/hsph-in-the-news/is-coffee-good-or-bad-for-your-health/">Get Full Article</a>
                            <button type="button" class="btn btn-lg btn-dark mt-4">Get Similar Topics</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.cardekho.com/images/featuredcarimages/Maruti-Swift-17/Swift-new-0.jpg" alt="Chicago">
                    <div class="carousel-caption">
                        <div class="col-md-7">
                            <h1 class="pb-2"><strong>The WordPress Theme for Growth Hackers </strong> </h1>
                            <h4>The right look and feel to promote any product, service or online course.</h4>
                            <button type="button" class="btn btn-success mt-4">Buy Growthpress</button>
                            <button type="button" class="btn btn-dark mt-4">Get More Details</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.cardekho.com/images/featuredcarimages/Honda-WR-V-19/wrv-0.jpg" alt="New York">
                    <div class="carousel-caption">
                        <div class="col-md-7">
                            <h1 class="pb-2"><strong>The WordPress Theme for Growth Hackers </strong> </h1>
                            <h4>The right look and feel to promote any product, service or online course.</h4>
                            <button type="button" class="btn btn-success mt-4">Buy Growthpress</button>
                            <button type="button" class="btn btn-dark mt-4">Get More Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>


    <div class="home-bottom">
        <div class="row pb-6 text-center">
            <div class="header">
                <img class="pb-2" src="/NutriologyPie/assets/img/quickstart.png" width="250" height="65" alt="quick start">
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 py-2">
                <div class="box-carimage">
                    <img src="/NutriologyPie/assets/img/homepagetopic1.png" alt="homepage topic 1" width="300" height="200">
                </div>
                <div class="box-cartitle">
                    <h3>
                        <a href="<?php echo base_url(); ?>source" style=color:dimgray;> <b> Nutrition Topics </b></a>
                    </h3>
                </div>
            </div>

            <div class="col-md-4 py-2">
                <div class="box-carimage">
                    <img src="/NutriologyPie/assets/img/homepagetopic2.png" alt="homepage topic 2" width="300" height="200">
                </div>
                <div class="box-cartitle">
                    <h3>
                        <a href="<?php echo base_url(); ?>source" style=color:dimgray;> <b> Source Websites </b></a>
                    </h3>
                </div>
            </div>

            <div class="col-md-4 py-2">
                <div class="box-carimage">
                    <img src="/NutriologyPie/assets/img/homepagetopic3.png" alt="homepage topic 3" width="300" height="200">
                </div>
                <div class="box-cartitle">
                    <h3>
                        <a href="<?php echo base_url(); ?>expert" style=color:dimgray;> <b> Experts Online </b></a>
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="help py-5 bg-light">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h3>How can we help you?</h3>
                    <p>Feel free to post your question on our forum. Communicate with other users!</p>
                    <a type="button" class="btn btn-lg btn-success"  href="<?php echo base_url(); ?>discuss">Post your question</a>
                </div>
            </div>
        </div>
    </div>

    <div class="location py-5">
        <div class="container">
            <div class="row pb-4 text-center">
                <div class="col-md-12">
                    <h2>Find most popular 9 topics </h2>
                    <p> Our website will collect the 9 most recent nutrition issues that have confused the public and address or reduce health and nutrition misinformation by inviting professionals to clarify or correct the misinformation.</p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Abortion</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Addictive behaviour</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Air pollution</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Alcohol</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Anaemia</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Antimicrobial resistance</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Blood products</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Cancer</button>
                </div>
                <div class="col-md-4 box border py-4">
                    <button type="button" class="btn btn-light">Child health</button>
                </div>
            </div>

            <div class="row text-center pt-4">
                <div class="col-md-12">
                    <a class="btn btn-lg btn-success" href="<?php echo base_url(); ?>source">View other topics</a>
                </div>
            </div>
        </div>
    </div>


    
<?php echo form_close(); ?>









