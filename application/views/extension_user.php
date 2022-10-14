<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<div class="extension">
    <header>
        <div class="logo-img">
            <img class="w-8 h-8 ml-5" src="https://deco3801-numpy.uqcloud.net/NutriologyPie/assets/img/logo.png"
                alt="logo image">
            <p class="pl-3 font-bold">Nutriology<span>Pie</span></p>
        </div>
        <div class="user-img">
            <img class="w-10 h-10 mr-5" src="https://deco3801-numpy.uqcloud.net/NutriologyPie/assets/img/image2.jpg"
                alt="user Image">
        </div>
    </header>
    <div class="main mx-2">
        <div class="top">
            <div class="top-left">
                <div class="top-header">
                    <div class="top-header-left">
                        <h1>Website Rate:</h1>
                    </div>
                    <dic class="add-wishlist">
                        <h1>Favorite</h1>
                        <button class="pl-2" onclick="toggle()">
                            <i class="bi bi-bookmark-star-fill" id="favorite" style="font-size:30px"></i>
                        </button>
                    </dic>
                </div>

                <div class="rate text-center" style="margin-left:200px">
                    <p>4.6<span>/5</span></p>
                    <div class="stars text-center ">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="bottom">
            <h1>Comments</h1>
            <div class="comment">
                <div class="message">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has
                        been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="expert-name">- by Henry W</div>
            </div>
            <div class="comment">
                <div class="message">abcd</div>
                <div class="expert-name">- by Henry W</div>
            </div>
            <div class="comment">
                <div class="message">abcd</div>
                <div class="expert-name">- by Henry W</div>
            </div>
            <div class="comment">
                <div class="message">abcd</div>
                <div class="expert-name">- by Henry W</div>
            </div>
        </div>

        <div class="bottom-down">
            <h1>Similar Articles </h1>
            <div class="articles">
                <div class="article pl-5">
                    <a href="'.$article->link.'">
                        <img class="w-40 h-20"
                            src="https://deco3801-numpy.uqcloud.net/NutriologyPie/assets/img/image2.jpg"
                            alt="information">
                    </a>
                    <p class="text-xs mt-2 capitalize ">leap into electronic ting,
                        remaining
                        essentially
                        unchanged. It
                        was popularised in the
                        1960s</p>
                </div>
                <div class="article pl-5">
                    <a href="'.$article->link.'">
                        <img class="w-40 h-20"
                            src="https://deco3801-numpy.uqcloud.net/NutriologyPie/assets/img/image2.jpg"
                            alt="information">
                    </a>
                    <p class="title text-center">abcd</p>
                </div>
                <div class="article pl-5">
                    <a href="'.$article->link.'">
                        <img class="w-40 h-20"
                            src="https://deco3801-numpy.uqcloud.net/NutriologyPie/assets/img/image2.jpg"
                            alt="information">
                    </a>
                    <p class="title text-center">abcd</p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
* {
    margin: 0;
    padding: 0;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

.extension {
    margin: 300px;
    height: 500px;
    width: 600px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}

h1 {
    font-size: 20px;
    font-weight: bold;
    color: rgba(11, 107, 44, 1);
    padding-left: 10px;
}

h2 {
    font-size: 15px;
    font-weight: 600;
    color: rgba(0, 119, 51, 1);
    margin-left: 10px;
    text-align: left;
}

header {
    height: 10%;
    width: 100%;
    background-color: #D9D9D9;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .user-img img {
    border-radius: 50%;
}

header .logo-img {
    display: flex;
    justify-self: flex-start;
    align-items: center;
    color: rgba(44, 143, 90, 1);
}

header .logo-img span {
    padding-left: 2px;
    color: rgba(105, 199, 97, 1);
}


.main {
    height: 85%;
}

.main .top {
    margin-top: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
    height: 30%;
}

.main .top .top-left {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: start;
}

.main .top .top-left .rate {
    padding: 10px;
    align-items: center;
}

.main .top .top-left .rate .stars {
    color: rgba(0, 119, 51, 1);

}

.main .top .top-left .rate p {
    text-align: center;
    font-size: 30px;
}

.main .top .top-left .rate span {
    padding-left: 1px;
    font-size: 10px;
}

.main .top .top-left .top-header {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

.main .top .top-left .top-header .add-wishlist {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}


.main .bottom {
    width: 100%;
    height: 30%;
    background: rgba(217, 217, 217, 0.44);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    overflow: auto;
    overflow-y: scroll;
}

.main .bottom-down {
    width: 100%;
    height: 38%;
    background: rgba(217, 217, 217, 0.44);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-top: 15px;
}

.main .bottom-down .articles {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-top: 3px;
    width: 100%;
    height: 100%;
}

.main .bottom-down .articles .article {
    height: 100%;
    width: 33%;
}

.main .bottom-down .articles .article p {
    height: 20%;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    font-weight: bold;

}

.main .bottom-down .articles .article img {
    border-radius: 10px;
}

.main .bottom-down .articles .article a:hover {
    opacity: 0.5;
    transition: 0.5s;
}

/* width */
::-webkit-scrollbar {
    padding-top: 0.5em;
    width: 5px;
    height: 3px;
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

.main .bottom .comment {
    margin-top: 2px;
    margin-left: 10px;
    width: 96%;
    height: 70%;
    min-height: 70%;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-bottom: 10px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}

.main .bottom .comment .message {
    height: 100%;
    width: 80%;
    font-size: 10px;
    font-weight: bold;
    color: rgba(44, 143, 90, 1);
    padding: 10px;

}

.main .bottom .comment .message p {
    height: 100%;
    width: 100%;
    word-wrap: break-all;
    margin: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}

.main .bottom .comment .expert-name {
    font-size: 10px;
    font-weight: bold;
    color: rgba(44, 143, 90, 1);
    align-self: flex-end;
}
</style>

<script>
function toggle() {
    let status;
    let x = document.getElementById("favorite");
    // if x class name == bi bi-bookmark-star-fill 
    if (x.className === "bi bi-bookmark-star-fill") {
        x.className = "bi bi-bookmark-star";
        status = 0;
    } else {
        x.className = "bi bi-bookmark-star-fill";
        status = 1;
    }
    $.ajax({
        url: "<?php echo base_url() . 'Extension_user/updateWishlist'; ?>",
        type: "GET",
        data: {
            status: status,
        },
        success: function(data) {
            console.log(status);
        }
    });
}
</script>