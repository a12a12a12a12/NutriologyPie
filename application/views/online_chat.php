<div class="container">
    <div class="text" id="collapseExample">
        <div class="card card-body" id="message" style = "width:500px; height:500px"; >

        </div>
    </div>
    <?php echo form_open(base_url().'online_chat/chat_information'); ?>
    <form>
    <input type = "text" id = "content" name="message">
    <button type="submit" class="btn btn-default" id = "btn">send</button>
    </form>
    <?php echo form_close(); ?>

</div>


<script>
    document.write(new Date());
    var request = new XMLHttpRequest();
    document.write('<br>');
    window.onload = function() {
        var btn = document.getElementById('btn');
        btn.onclick = function() {
            var ajax = new XMLHttpRequest();
            var message_object = document.getElementById('content');
            var message = message_object.value;
            var final_message = "content="+content;
            ajax.send(final_message);
        }
    }

    $(document).ready(function(){
        load_message();
            function load_message(){
                $.ajax({
                url:"<?php echo base_url(); ?>online_chat/fatch_message",
                success:function(response){
                    $('#message').html("");
                    if (response == "" ) {
                        $('#message').html(response);
                    }else{
                        var obj = JSON.parse(response);
                        if(obj.length>0){
                            var items=[];
                            $.each(obj, function(i,val){
                                //插入显示搜索结果的文本
                                items.push($("<p>").text(val.date));
                                items.push($("<p>").text(val.message));
                            });
                            $('#message').append.apply($('#message'), items);         
                        }else{
                            $('#message').html("There is no notification!");
                        }; 
                    };
                }
            });
            }
            load_message();       
            setInterval(load_message, 5000);
    });
    
        

</script>