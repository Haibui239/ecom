<style>
    <?php echo time();?>
    .banner-sub {
        width: 100%;
        height: 60vh;
        background: url("images/img1 3.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .contact {
        padding: 10px 0;
    }
    .contact h1 {
        font-size: 1.5rem;
        font-weight: 300;
        text-align: center;
        padding: 10vh 0;
    }
    .contact h5 {
        text-align: center;
        font-size: 1rem;
        padding: 10px 0;
    }
    .contact-issue-box {
        width: 100%;
    }
    .contact-issue-box select {
        width: 100%;
    }
    .contact-us-form input,.contact-us-form select {
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: 1px solid #000;
        background-color: transparent;
        padding: 15px;
        font-size: 0.7rem;
    }
    .contact-us-form p {
        font-size: 0.7rem;
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
<!-- banner -->
    <div data-aos="fade-down" style="width: 100%;
        height: 60vh;
        background: url('images/img1 3.jpeg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;" class="banner-support"></div>
    <!-- contact -->
    <div class="contact" data-aos="fade-up">
        <h1>Contact Support</h1>
        <h5>How Can We Help?</h5>
        <div class="contact-us-form">
            <form action="">
                <div class="contact-name-box">
                    <p data-aos="fade-right">First Name</p>
                    <input type="text" placeholder="Enter your name" class="contact-name" data-aos="fade-right">
                </div>
                <div class="contact-email-box">
                    <p data-aos="fade-left">Last Name</p>
                    <input type="text" placeholder="Enter your email" class="contact-email" data-aos="fade-left">
                </div>
                <div class="contact-phone-box">
                    <p data-aos="fade-right">Email</p>
                    <input type="email" placeholder="Enter your phone number" class="contact-tel" data-aos="fade-right">
                </div>
                <div class="contact-add-box">
                    <p data-aos="fade-left">Phone</p>
                    <input type="tel" placeholder="Enter your address" class="contact-add" data-aos="fade-left">
                </div>
                <div class="contact-issue-box">
                    <p data-aos="fade-up">Issue</p>
                    <select name="" id="" data-aos="fade-up">
                        <option value="" selected disabled hidden>Choose one</option>
                        <option value="">Loggin into account</option>
                        <option value="">Completing payment</option>
                        <option value="">Viewing content</option>
                        <option value="">Uploading file</option>
                        <option value="">Other</option>
                    </select>
                </div>
                <p style="padding: 7px 0;" data-aos="fade-up">Message</p>
                <Textarea rows="4" placeholder="Type your message here..." class="contact-mess" data-aos="fade-up"></Textarea>
                <input type="submit" placeholder="Gửi" class="contact-submit" data-aos="fade-up">
            </form>
        </div>
    </div>