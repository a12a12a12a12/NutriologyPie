<div class="information-top">
    <div class="top-left">
        <img class="ml-5 h-60 w-96 pb-2" src="<?php echo base_url(); ?>assets/images/information.png" alt="information">
        <h3 class="text-[#0B6B2C] ml-5 mt-2 text-center text-xl font-extrabold capitalize">the 7 Ingredients Should Have
        </h3>
    </div>
    <div class="top-right">
        <div class="title capitalize text-left text-2xl font-bold "> the 7 Ingredients Your Multivitamin
            Should Have:
        </div>
        <div class="text text-xl font-medium">
            1. Vitamin D
            2. Magnesium
            3. Calcium
            4. Zinc
            5. Iron
            6. Folate
            7. Vitamin B-12
            <br>
            <br>
            “I try to get all of my nutrients from my kitchen instead of my medicine cabinet, but as a realist, I know
            that meeting my nutrition needs all of the time is not possible,” says Bonnie Taub-Dix, RDN, creator of
            Better Than Dieting. On top of that, there may be other life factors that make supplementation necessary —
            pregnancy, menopause, or even chronic conditions.
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

<!-- <div class="information-middle container">
    <div class="info-middle-header text-[#C6643D] text-3xl font-bold pt-2 tracking-widest pb-2 uppercase">
        More top reading
    </div>
    <hr>
    <div class="information-topic">
        <div class="more-topic">
            <a href="#"><img class="ml-5 h-52 w-72 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                    alt="information"></a>
            <h3 class="text-[#0B6B2C] mt-2 text-left text-xl font-bold capitalize">the 7 Ingredients Should Have
            </h3>
        </div>
        <div class="more-topic">
            <a href="#"><img class="ml-5 h-52 w-72 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                    alt="information"></a>
            <h3 class="text-[#0B6B2C]  mt-2 text-left text-xl font-bold capitalize">the 7 Ingredients Should Have
            </h3>
        </div>
        <div class="more-topic">
            <a href="#"><img class="ml-5 h-52 w-72 pb-2" src="<?php echo base_url(); ?>assets/images/information.png"
                    alt="information"></a>
            <h3 class="text-[#0B6B2C] mt-2 text-left text-xl font-bold capitalize">the 7 Ingredients Should Have
            </h3>
        </div>
    </div>
</div> -->

<div class="information-middle container">
    <div class="info-middle-header text-[#C6643D] text-3xl font-bold pt-2 tracking-widest pb-2 uppercase">
        More top reading
    </div>
    <hr>
    <div class="information-topic">
        <?php echo $article_list; ?>
    </div>
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
</style>