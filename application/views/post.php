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
                    document.getElementById("location").value =country;
                    }
                })
            })
        }
    }
</script>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container">
    <div class="col-6 offset-3" style = "margin-top:80px;"> 			
        <?php echo form_open_multipart('post/post_review'); ?>

        <div class="form-group">
            <label class="control-label" for="name">Title*</label>
            <input type="text" required="required" name="title" placeholder="Title" class="form-control">
            <div class="form-group" style="color:red;">
                <?php echo form_error('title'); ?>
            </div>
        </div><!-- End -->

        <div class="form-group">
            <label class="control-label" for="name">Category*</label>
            <input type="text" required="required"  name="category" placeholder="Category (e.g.Cancer Bodyhealth... using space to sepreared)" class="form-control">
            <div class="form-group" style="color:red;">
                <?php echo form_error('category'); ?>
            </div>
        </div><!-- End  -->

        <div class="form-group">
            <label class="control-label" for="message">Review*</label>
                <textarea rows="8" type="text" required="required" name="review" placeholder="Your review (at least 10 characters)" class="form-control"></textarea>
                <div class="form-group" style="color:red;">
                    <?php echo form_error('review'); ?>
                </div>
        </div><!-- End  -->

        <div class="file-drop-box" style="border: #999 5px dashed; width:500px; height:180px; padding:8px;">
            <div style="width:50%; margin:5% auto;">
                <h7> Drop Files Here OR</h7>
                <input class="upload-file" type="file" name="userfile[]" multiple="true">
            </div>
            <div class="card-text" style="text-align:center;">Max size 100000 and support jpg|png|jpeg</small>
            <br>
            <div class="form-group" style="color:red;">
                <?php echo $file_error; ?>
            </div>
        </div>
        

        <div class="form-group">
            <label class="control-label" for="message"></label>
                <input rows="8" type="hidden" name="location" id='location' value="">
        </div><!-- End  -->

        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" id="post_btn" value="upload"><i class="fa fa-edit"></i>Post</button>
        </div>
        <?php echo form_close(); ?>
	</div>	
</div>       
