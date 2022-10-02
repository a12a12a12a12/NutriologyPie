<div class="main-message">
    <div class="messaging bg-[#E3D5BA]">
        <div class="message-text text-left text-4xl pt-4 text-[#BF6741] font-bold">
            Messaging
        </div>
    </div>
    <div class="box">
        <div class="left">
            <div class="experts ml-2">
                <a class="expert-active" href="<?php echo base_url().'chat/with/'.$active_user->with_who;?>">
                    <div class="expert-image">
                        <img class="h-20 w-20 rounded-full" src="<?php echo $active_user->path; ?>"
                            alt="profile images">
                    </div>
                    <div class="chart-infor">
                        <div class="expert-name text-[#BF6741] text-2xl font-bold pb-3">
                            <?php echo $active_user->with_who; ?>
                        </div>
                        <div class="expert-job text-[#5C5C5C] text-base">
                            <p class="text-clip overflow-hidden ..."> <?php echo $active_user->message; ?></p>
                        </div>
                    </div>
                    <div class="time">
                        <div class="time-text text-[#5C5C5C] text-xl">
                            <?php echo explode(" ",$active_user->time)[1]; ?>
                        </div>
                    </div>
                </a>
                <?php echo $chat_user_list; ?>
            </div>
        </div>

        <div class="right">
            <div class="top border-b-2">
                <div class="">
                    <img class="h-16 w-16 rounded-full mt-2 mb-2 ml-2" src="<?php echo $active_user->path; ?>"
                        alt="profile images">
                </div>
                <div class="expert-name text-[#BF6741] text-2xl font-bold pb-3 pl-2 pt-3">
                    <?php echo $active_user->with_who; ?>
                    <div class="expert-job text-[#5C5C5C] text-base pt-2 capitalize">
                        <p> <?php echo $active_user->tag; ?></p>
                    </div>
                </div>
            </div>
            <div class="middle pt-2" id="message">
                <div class="expert-message pb-4">
                    <img class="h-16 w-16 rounded-full mt-2 mb-2 ml-2"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="profile images">
                    <div class="message text-base">
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                    </div>
                    <div class="time text-base font-medium">
                        <p>8:17pm </p>
                    </div>
                </div>
                <div class="user-message pb-4 mr-2">
                    <div class="time text-base font-medium">
                        <p>8:25pm </p>
                    </div>
                    <div class="message text-base">
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                    </div>
                </div>

            </div>
            <div class="bottom pt-2">
                <div class="nest-bottom w-full">
                    <div class="left">
                        <img class="h-12 w-12 rounded-full" src="<?php echo base_url(); ?>assets/images/logo.png""
                                alt=" profile images">
                    </div>
                    <div class="middle">
                        <div class="message-input w-full">
                            <input type="text" class="w-full h-12 rounded-full pl-4 pr-4" id="content" name="message"
                                placeholder="Type your message here...">
                        </div>
                    </div>
                    <div class="right">
                        <button type="submit" id="btn"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                            onclick="testing()">
                            Send
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
// $(document).ready(function() {

function testing() {
    const message = $('#content').val();
    if (message != '') {
        $.ajax({
            url: "<?php echo base_url().'chat/send_message'; ?>",
            method: "GET",
            data: {
                message: message,
                with_who: "<?php echo $active_user->with_who; ?>"
            },
            success: function() {
                console.log("success");
                $('#content').val('');
            }
        });
    }
}

// function load_message() {
// $.ajax({
//     url: "<?php echo base_url(); ?>chat/fetch_message",
//     method: "GET",
//     data: {
//         with_who: 'mia'
//     },
//     success: function(response) {
//         if (response == "") {
//             $('#message').html(response);
//         } else {
//             var obj = JSON.parse(response);
//             if (obj.length > 0) {
//                 var items = [];
//                 $.each(obj, function(i, val) {
//                     if (val.username == <?php echo $active_user->with_who; ?>) {} else {}

//                 });
//                 $('#message').append.apply($('#message'), items);
//             } else {
//                 $('#message').html("");
//             };
//         };
//     }
// });
// }
// load_message();
// let timeInMs = Math.random() * (3000);
// setInterval(load_message, timeInMs);
// });
</script>



<style>
.main-message {
    position: relative;
    height: 100vh;
}

.messaging {
    height: 15em;
    letter-spacing: 0.2em;
    position: absolute;
    width: 100%;
}

.main-message .message-text {
    left: 8%;
    position: absolute;
}

.box {
    position: absolute;
    top: 10%;
    left: 8%;
    border-radius: 30px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    background: rgba(255, 255, 255, 0.94);
    border-radius: 20px;
    height: 85%;
    width: 80%;
}

.box .left {
    flex-basis: 40%;
    padding-top: 1em;
}

.box .right {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    height: 100%;
    width: 90%;
    margin-left: 1em;
}

.box .right .top {
    width: 100%;
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
}

.box .right .middle {
    width: 100%;
    flex: 6;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    overflow: auto;
    overflow-x: hidden;
}

.box .right .middle .message {
    background: rgba(0, 102, 255, 0.63);
    box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.25);
    border-radius: 4px;
    color: #FFFFFF;
    min-width: 4em;
    min-height: 4em;
    margin-left: 1em;
    padding: 1em 1em;
}

.box .right .middle .message p {
    word-spacing: 0.2em;
}

.box .right .middle .expert-message {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    width: 60%;
}

.box .right .middle .expert-message .time {
    align-self: flex-end;
    margin-left: 0.5em;
    color: rgba(0, 0, 0, 0.6);
}

.box .right .middle .user-message {
    align-self: flex-end;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    width: 60%;
}

.box .right .middle .user-message .time {
    align-self: flex-end;
    color: rgba(0, 0, 0, 0.6);
}

.box .right .bottom {
    width: 100%;
    flex: 1.25;
}

.box .right .bottom .nest-bottom {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    background: rgba(231, 224, 224, 0.3);
    border-radius: 10px;
    padding: 0.5em 0.5em;
}

.box .right .bottom .nest-bottom .left {
    flex: 1;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}

.box .right .bottom .nest-bottom .middle {
    width: 100%;
    flex: 8;
}

.box .right .bottom .nest-bottom .middle input:focus {
    outline: none;
}

.box .right .bottom .nest-bottom .right {
    flex: 1;
}

.experts {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    height: 90%;
    width: 90%;
    overflow: auto;
    overflow-x: hidden;
    border-top: 1px solid rgba(0, 0, 0, 0.25);
    padding-top: 0.5em;
}

/* width */
::-webkit-scrollbar {
    padding-top: 0.5em;
    width: 10px;
    height: 10px;
    border-radius: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: rgba(217, 217, 217, 1);
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}

.expert {
    margin-top: 1em;
    border-radius: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    flex-basis: 13%;
    flex-shrink: 0;
    width: 80%;
    border-top: 1px solid rgba(0, 0, 0, 0.25);
    cursor: pointer;
    background: rgba(215, 203, 203, 0.17);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.experts .expert-active {
    background: rgba(87, 62, 62, 0.12);
    width: 90%;
    flex-basis: 16%;
    margin-top: 1em;
    border-radius: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.25);
    cursor: pointer;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.expert-active .expert-image {
    padding-left: 0.5em;
    padding-top: 0.5em;
    padding-bottom: 0.5em;
    flex: 2;
}

.expert-active .chart-infor {
    width: 0;
    padding-top: 0.5em;
    flex-basis: 20%;
    flex: 5;
}

.expert-active .chart-infor p {
    text-overflow: ellipsis;
    white-space: nowrap;
}

.expert-active .time {
    padding-top: 0.5em;
    padding-right: 0.5em;
    flex: 1;
    align-self: flex-start;
}

.experts a:hover {
    text-decoration: none;
    background: rgba(87, 62, 62, 0.12);
    width: 90%;
    flex-basis: 16%;
    transition: 0.5s;
}

.experts a:focus {
    text-decoration: none;
    background: rgba(87, 62, 62, 0.12);
    width: 90%;
    flex-basis: 16%;
    transition: 0.5s;
}


.expert .expert-image {
    padding-left: 0.5em;
    padding-top: 0.5em;
    padding-bottom: 0.5em;
    flex: 2;
}

.expert .chart-infor {
    width: 0;
    padding-top: 0.5em;
    flex-basis: 20%;
    flex: 5;
}

.expert .chart-infor p {
    text-overflow: ellipsis;
    white-space: nowrap;
}

.expert .time {
    padding-top: 0.5em;
    padding-right: 0.5em;
    flex: 1;
    align-self: flex-start;
}
</style>