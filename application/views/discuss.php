<script type="text/javascript">
    window.onload=function(){
        var country = "";
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(function(res){
            console.log("res",res)
            let lat = res.coords.latitude
                let lng = res.coords.longitude
                
                $.ajax({
                method:'POST',
                url:`https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&sensor=true&key=AIzaSyAi1D09nUk5Pp7yHoxCXKR1nYlj_NrEK80&language=en`,
                success:function(data){
                    console.log(data)
                    country = (data.results[5].formatted_address);
                    document.getElementById("location").innerHTML=country;
                    }
                })
            })
        }
    }
</script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">        
    <nav class="navbar navbar-light bg-white">
        <a class="btn btn-outline-primary" role="button" id="button-addon2" href="<?php echo base_url(); ?>search" >
        Want to search for something? <i class="fa fa-search"></i>
        </a>
    </nav>

    <div class="container gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">  User Profile </div>
                        <a href="<?php echo base_url(); ?>map"><i class="fa fa-globe"></i>User Location</a>
                        <br><div id ="location" ></div>
                    </div>
                    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h7 text-muted">User Image</div>
                            <div class="h7"><img class="rounded-circle" width="45" height="45" src="<?php echo $path; ?>" alt="user image"></div>
                        </li>

                        <li class="list-group-item">
                            <div class="h7 text-muted">Username</div>
                            <div class="h7"><?php echo $username; ?></div>
                        </li>

                        <li class="list-group-item">
                            <div class="h7 text-muted">Email</div>
                            <div class="h7"><?php echo $email; ?></div>
                        </li>

                        <li class="list-group-item">
                            <div class="h7 text-muted">Birthday</div>
                            <div class="h7"><?php echo $birthday; ?></div>
                        </li>

                        <li class="list-group-item">
                            <div class="h7 text-muted">Phone</div>
                            <div class="h7"><?php echo $phone; ?></div>
                        </li>
                        
                        <li class="list-group-item">
                            <div class="h7 text-muted">MemberShip</div>
                            <div class="h7">
                                <div class="spinner-border text-warning spinner-border-sm" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <?php echo $membership ?>
                            </div>
                        </li>
                        
                    </ul>
                    <a type='submit' class='btn btn-lg btn-block btn-success' <?php echo $post; ?> href="<?php echo base_url(); ?>post">
                        <i class="fa fa-edit"></i> Post new thread 
                    </a>
                </div>
            </div>
            
            <div class="col-md-9 gedf-main">
                <?php foreach($comment_data as $comment): ?>
                    <div class="card gedf-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img class="rounded-circle" width="45" height="45" src="<?php echo $comment->path; ?>" alt="user image">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">@<?php echo $comment->username; ?></div>
                                        <div class="h7 text-muted"><?php echo $comment->email; ?></div>
                                        <div class="h7 text-muted"><?php echo $comment->location; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="card-link" href="#">
                                <h5 class="card-title"><?php echo $comment->title; ?></h5>
                            </a>

                            <p class="card-text">
                                <?php echo $comment->reviews; ?>
                                <br>
                                <?php if(($comment->fileupload)!= NULL & ($comment->fileupload)!= 's:0:"";'):?>
                                    <?php foreach(unserialize($comment->fileupload) as $multipath):?>
                                        <img class="img-thumbnail" width="180" height="180" src="<?php echo $multipath; ?>" alt="user reviews"> 
                                    <?php endforeach; ?>
                                <?php endif; ?>    
                            </p>

                            <div>
                                <span class="badge badge-primary"><?php echo $comment->category; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>    
            </div>

        </div>
    </div>

    
         
