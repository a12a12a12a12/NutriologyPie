<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>


<div class="extension">
    <header>
    </header>
    <div class="main mx-4 mt-2">
        <div class="top">
            <div class="top-left">
                <h1>Website Rate:</h1>
                <div class="rate">
                    <p>4.6<span>/5</span></p>
                    <div class="stars">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
                <div class="select-rate text-center">
                    <h2>Type your Rate: </h2>
                    <input type="number" class="text-center">
                </div>
            </div>
            <div class="top-right">
                <h1>Choose The Topics</h1>
                <div class="topics mx-2">
                    <div class="topic" onclick="topicToggle(0)">
                        <a type="button">Healthy Eating</a>
                    </div>
                    <div class="topic" onclick="topicToggle(1)">
                        <a type="button">Meal Prep</a>
                    </div>
                    <div class="topic" onclick="topicToggle(2)">
                        <a type="button">Lifestyle Diets</a>
                    </div>
                    <div class="topic" onclick="topicToggle(3)">
                        <a type="button">Weight Control</a>
                    </div>
                    <div class="topic" onclick="topicToggle(4)">
                        <a type="button">Products</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <h1>Comments</h1>
            <div class="comment">
                <input type="text" value="-Write down your comment:">

            </div>
            <a type="button">Save</a>
        </div>
    </div>


</div>

<script>
function topicToggle(number) {
    // set the active topic
    let topics = document.getElementsByClassName("topic");
    for (let i = 0; i < topics.length; i++) {
        topics[i].classList.remove("topic-active");
    }
    topics[number].classList.add("topic-active");

}
</script>


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
    font-weight: 600;
    color: rgba(0, 119, 51, 1);
    margin-left: 20px;
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
}

.main {
    height: 85%;
    /* border: 1px solid #000; */
}

.main .top {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
    height: 50%;
}

.main .top .top-left {
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: start;
}

.main .top .top-left .rate {
    padding: 10px;
    align-self: center;
}

.main .top .top-left .rate p {
    text-align: center;
    font-size: 30px;
}

.main .top .top-left .rate span {
    padding-left: 1px;
    font-size: 10px;
}

.main .top .top-left .stars {
    color: rgba(44, 143, 90, 1);
}

.main .top .top-left .select-rate {
    margin-left: 10px;
}

.main .top .top-left .select-rate input {
    margin: 5px;
    margin-left: 15px;
    border: 1px solid #000;
}


.main .top .top-right {
    width: 50%;
    height: 100%;
    background: rgba(217, 217, 217, 0.44);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}

.main .top .top-right .topics {
    padding: 10px;
    height: 75%;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
}

.main .top .top-right .topics .topic {
    margin-left: 10px;
    font-size: 10px;
    padding: 5px;
    background: rgba(111, 109, 109, 0.7);
    border-radius: 10px;
    width: 45%;
    text-align: center;
    color: #FFFFFF;
    font-weight: bold;
    cursor: pointer;
}

.main .top .top-right .topics .topic:hover {
    background: #DAB950;
    transition: 0.25s;
}

.main .top .top-right .topics .topic-active {
    margin-left: 10px;
    font-size: 10px;
    padding: 5px;
    background: #DAB950;
    border-radius: 10px;
    width: 45%;
    text-align: center;
    color: #FFFFFF;
    font-weight: bold;
    cursor: pointer;
}

.main .bottom {
    width: 100%;
    height: 45%;
    background: rgba(217, 217, 217, 0.44);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-top: 15px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
}

.main .bottom .comment {
    margin-top: 2px;
    margin-left: 10px;
    width: 95%;
    height: 60%;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;

}

.main .bottom .comment input {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    border: 0px solid;
    background-color: transparent;
    padding-left: 15px;
}

.main .bottom .comment input:focus {
    outline: none;
}

.main .bottom a {
    margin-left: 10px;
    margin-top: 8px;
    font-size: 10px;
    padding: 5px;
    background: rgba(111, 109, 109, 0.7);
    border-radius: 10px;
    width: 20%;
    text-align: center;
    color: #FFFFFF;
    font-weight: bold;
    align-self: center;
    cursor: pointer;
}


.main .bottom a:hover {
    background: #DAB950;
    cursor: pointer;
    color: #FFFFFF;
    transition: 0.5s;
}
</style>