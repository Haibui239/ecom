<!-- body -->
<style>
    <?php echo time();?>
    .banner {
    padding: 0 0 10vh 0;
    }
    .banner-main {
        background: url("images/img1 2.jpeg");
        height: 60vh;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .banner-layer {
        width: 100%;
        height: 60vh;
        background-color: #000;
        position: absolute;
        opacity: 0.5;
    }
    .banner-main h1 {
        z-index: 2;
        font-size: 1.5rem;
    }
    .detail {
        padding: 10vh 0;
        text-align: center;
    }
    .detail h4 {
        font-size: 1rem;
    }
    .detail p {
        font-size: 0.7rem;
        width: 60%;
        line-height: 2;
        margin: auto;
        padding: 10px 0;
    }
    .left,.right {
        display: none;
    }
    .content-home {
        width: 100%!important;
    }
    .banner-main {
        width: 100%;
    }

</style>
<div class="banner" data-aos="fade-up">
        <div class="banner-main main">
            <div class="banner-layer">
            </div>
            <h1>POLICIES AT HSQUARE
            </h1>
        </div>
    </div>
    <!-- detail -->
    <div class="detail main" >
        <h4 data-aos="fade-up">Things You Need to Know
        </h4>
        <p data-aos="fade-up">At HSquare, we want to give our customers the best shopping experience. That’s why we believe our store policies should be fair, clear and transparent. Read about them below, and contact us with questions.
        </p>
        <p data-aos="fade-up">Contact</p>
    </div>