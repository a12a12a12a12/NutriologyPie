<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/billing.css">
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body class="profile-page"> 
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('https://mintartco.com.au/wp-content/uploads/2019/05/trendy-wallpaper-designs-for-2019.jpg');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
                                <!-- user picture -->
	                            <!-- <img src="<?php echo base_url(); ?>assets/images/user.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid"> -->
                                <img src="<?php echo $profile_photo; ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
                                <!-- user name -->
	                            <h2 class="title"><?php echo $username; ?></h2>
								<h3 class="expert">Verified Expert</h3>
                                <!-- twitter link -->
								<a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                    <!-- personal information -->
                    <div class="row">
                        <div class="bio-row">
                            <!-- <p><span>Brithday: 26/09/1999</span></p> -->
                            <p><span>Brithday </span>: <?php echo $birthday; ?></p>
                        </div>
                        <div class="bio-row">
                            <!-- <p><span>Phone: 046282973</span></p> -->
                            <p><span>Phone </span>: <?php echo $phone; ?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Email </span>: <?php echo $email; ?></p>
                        </div>
                        <div class="bio-row">
                            <!-- <p><span>Email Verification </span>: Verified</p> -->
                            <?php if($verify_status == 1) : ?>
                            <p><span>Email Verification </span>: Verified</p>
                            <?php endif; ?>
                            <?php if($verify_status == 0) : ?>
                            <p><span>Email Verification </span>: Not Verified</p>    
                            <?php endif; ?>
                        </div>
                        
                        <div class="bio-row">
                            <?php if($membership == 1) : ?>
                            <p><span>Membership </span>: Member</p>
                            <?php endif; ?>
                            <?php if($membership == 0) : ?>
                            <p><span>Membership </span>: Not member</p>    
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                </div>
                <!-- selection row -->
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#expert" role="tab" data-toggle="tab">
                                  <i class="material-icons">Expert  </i>
                                  Uploads
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons">Favorite</i>
                                    Favorite
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#billing" role="tab" data-toggle="tab">
                                  <i class="material-icons">Billing</i>
                                    Plans & Payment
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
        
            <div class="tab-content tab-space">
                <!-- expert page -->
                <div class="tab-pane active gallery" id="expert">
                    <!-- Verified area -->
                    <div class="line" style="width:100%; height:1px; border-top: solid #D9D9D9"></div>
                    <div class="expert-title">
                        <h2>Verified By Me</h2>
                    </div>
                    <div class="articles">
                        <!-- <p>You need to add more</p> -->
                        <!-- <div class="art-box">
                            <div class="art-img">
                                <img src="<?php echo base_url(); ?>assets/images/food1.png" alt="image" >
                            </div>
                            <div class="art-info">
                                <a class="game-card__title" href="<?php echo $link; ?>"><?php echo $article_title; ?></a>
                                <div class="game-card__genre">This is categrory</div>
                            </div>
                            <div class="art-text">
                                <h3>Verified when</h3>
                            </div>
                        </div> -->
                    </div>

                    <!-- Upload area -->
                    <div class="line" style="width:100%; height:1px; border-top: solid #D9D9D9"></div>
                    <div class="expert-title">
                        <h3>Comment By Me</h3>
                    </div>
                    <div class="comment">
                        <p> You have added no comment yet. Read more</p>
                        <p> </p>
                    </div>
                </div>

                <!-- favorite page -->
                <div class="tab-pane text-center gallery " id="favorite">
                    <div class="line" style="width:100%; height:1px; border-top: solid #D9D9D9"></div>
                    <div class="row">
                        <div class="mb-4" style="margin-top:40px">
                            <h2>Check Out Your Favorites</h2>
                            <span class="detail">Learn more to protectyou and your family with NutriologyPie</span>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div><?php echo $fav_list; ?></div>
                    </div>            
                </div>
                <!-- billing page -->
                <div class="tab-pane text-center gallery" id="billing">
                    <div class="line" style="width:100%; height:1px; border-top: solid #D9D9D9"></div>
                    <div class="row mt-5 px-5">
                        <!-- Bank Account Details -->
                        <div  class="mb-4">
                            <h2 > Bank Account Details</h2>
                            <span class="detail"> Where your net pay will be deposited unless additional accounts are specified</span>
                        </div>
                    </div>
                        <!-- Detail form -->
                        <div class="row mt-5 px-5">
                             <!-- right box -->
                            <div class="col-md-8 offset-2">
                                    <div class="card card-blue hightlight p-3  mb-3">
                                        <span class="text-uppercase text-white" style="background-color: #2C8F5A; font-weight:500;  border-radius: 10px;font-size: 20px;padding: 10px;">Amount to recieve</span>
                                        <!-- <div class="d-flex flex-row align-items-end text-center mb-3"> -->
                                        <div class="text-center">
                                            <h1 class="mb-0 yellow">$549</h1> 
                                        </div>
                                    </div>
                                </div>


                            <div class="col-md-8 offset-2">
                                <div class="card p-3">
                                    <h6 class="text-uppercase" style="font-size:20px">Payment details</h6>
                                    <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>First Name</span> </div>
                                    <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Last Name</span> </div>
                                    
                                    <div class="row">
                                        <!-- <div class="col-md-6 d-flex flex-row">
                                            <div calss="inputbox mt-3 mr-2"><input type="text" name="name " class="form-control" required="required">  <span>Bank Name</span></div>
                                        </div> -->
                                        <div class="col-md-6">
                                            <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"> <span>Bank Name</span> </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex flex-row">
                                                <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required"> <span>Account Number</span> </div>
                                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>BSB</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <h6 class="text-uppercase" style="font-size:20px;">Billing Address</h6>
                                        <div class="row mt-3"> 
                                            <div class="col-md-6">
                                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Street Address</span> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Street Address Line 2</span> </div>
                                        </div>
                                        <div class="row mt-2"> 
                                            <div class="col-md-6">
                                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>City</span> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>State</span> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div  style="color: #0FA958; margin-top:10px; font-size:18px; font-weight:400">
                                    <span>Thank you for participate with NutriologyPie.</span>
                            </div>
                            <!-- save button -->
                            <div class="mt-4 mb-4 justify-content-between">
                                <button class="btn btn-success px-3">&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
	</div>
</body>