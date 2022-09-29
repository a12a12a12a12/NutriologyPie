<div class="information-top">
    <div class="top-left">
        <a href="<?php echo $top_article->link; ?>">
            <img class="ml-5 h-60 w-96 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                alt="information">
            <h3 class="text-[#0B6B2C] ml-5 mt-2 text-center text-xl font-extrabold capitalize">
                The Top rated article
            </h3>
        </a>
    </div>
    <div class="top-right">
        <div class="title capitalize text-left text-2xl font-bold "> <?php echo $top_article->title; ?>
        </div>
        <div class="text text-xl font-medium pl-5">
            <?php echo $top_article->title; ?>
        </div>
    </div>
</div>
<div class="information-middle container">
    <div class="info-middle-header text-[#C6643D] text-3xl font-bold pt-2 tracking-widest pb-2 uppercase">
        MORE ON THE TOPIC YOU WERE READING
    </div>
    <hr>
    <div class="information-topic">
        <div class="topic">
            <a href="#"><img class="ml-5 h-40 w-30 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                    alt="information"></a>
            <h3 class="text-[#0B6B2C] mt-2 text-left text-2xl font-bold capitalize">the 7 Ingredients Should Have
            </h3>
        </div>
        <div class="topic">
            <a href="#"><img class="ml-5 h-40 w-30 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                    alt="information"></a>
            <h3 class="text-[#0B6B2C]  mt-2 text-left text-2xl font-bold capitalize">the 7 Ingredients Should Have
            </h3>
        </div>
        <div class="topic">
            <a href="#"><img class="ml-5 h-40 w-30 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                    alt="information"></a>
            <h3 class="text-[#0B6B2C] mt-2 text-left text-2xl font-bold capitalize">the 7 Ingredients Should Have
            </h3>
        </div>
        <div class="topic">
            <a href="#"><img class="ml-5 h-40 w-30 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                    alt="information"></a>
            <h3 class="text-[#0B6B2C]  mt-2 text-left text-2xl font-bold capitalize">the 7 Ingredients Should Have
            </h3>
        </div>
    </div>
</div>

<div class="information-middle container">
    <div class="info-middle-header text-[#C6643D] text-3xl font-bold pt-2 tracking-widest pb-2 uppercase">
        More top reading
    </div>
    <hr>
    <div class="information-topic">
        <?php echo $article_list; ?>
    </div>
</div>

<div id="testing">

</div>






<style>
.information-top {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    height: 20em;
    width: 100%;
    background-color: #E3D5BA;
}

.information-top .top-right {
    padding-bottom: 5em;
    flex: 1;
    margin-left: 2em;
    display: flex;
    justify-content: start;
    flex-direction: column;
    align-items: flex-start;
}

.information-top .top-right .title {
    height: 2em;
    color: #0B6B2C;
}

.information-middle hr {
    border: 1px solid #d0e1e1;
}

.information-middle .information-topic {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: stretch;
    align-content: center;
}

.information-middle .information-topic .topic {
    width: 50%;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    margin-top: 2em;
    margin-bottom: 2em;
}

.information-middle .information-topic .topic h3 {
    padding-left: 1em;
    align-self: start;
}

.information-middle .information-topic .more-topic {
    width: 30%;
    margin-top: 2em;
    margin-bottom: 2em;
}

.information-middle .information-topic .more-topic h3 {
    padding-left: 2em;
}

a:hover {
    opacity: 0.8;
    text-decoration: none;
}
</style>

<!-- <script>
async function getArticle() {
    const response = await fetch(
        'http://localhost/NutriologyPie/information/fetch');
    console.log('====================================');
    console.log(response);
    console.log('====================================');
    const data = await response.json();
    console.log(data);
    return data;
}
getArticle();
// document.getElementById("testing").innerHTML =
//     "<div class='topic'>" +
//     "<a href ='#'><img class='ml-5 h-40 w-30 pb-2' src='<?php echo base_url(); ?>assets/images/information.png' alt ='information'></a>" +
//     "<h3 class = 'text-[#0B6B2C]  mt-2 text-left text-2xl font-bold capitalize'> the 7 Ingredients Should Have </h3>" +
//     "</div>";
</script> -->