<style>
    <?php echo time();?>
    .banner {
        padding: 0 0 10vh 0;
    }
    .banner-main {
        height: 60vh;
        color: #fff;
    }
    .banner-img {
        width: 100%;
        height: 60vh;
        background: url("images/img1 4.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
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
<!-- body -->
<div class="banner" data-aos="fade-down">
        <div class="banner-main main">
            <div class="banner-img">
                <div class="banner-layer">
                </div>
                <h1>WHO WE ARE
                </h1>
            </div>
        </div>
    </div>
    <!-- detail -->
    <div class="detail main">
        <h4 data-aos="fade-up">How We Got Here
        </h4>
        <p data-aos="fade-up">HSquare offers first-rate products and exceptional customer service to shoppers from the comfort of their own homes. We’re a business made up of innovators and forward-thinkers, with the drive and wherewithal to constantly update and improve the online shopping experience.
        </p>
        <p data-aos="fade-up">Our online store has become synonymous with quality, and we ensure a continuous variety of fantastic merchandise that fit any budget. Start shopping to see what we have to offer, and don’t hesitate to reach out with questions.</p>
    </div>