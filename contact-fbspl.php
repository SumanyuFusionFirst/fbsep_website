<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->
<?php include("loader.php"); ?>

<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-color-dark text-10">Contact Us</h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb d-block text-center text-5">
                    <li><a href=".">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
        </svg>
    </div>
</section>






<div class="container">

    <div class="row py-4">
        <div class="col-lg-8 text-center text-lg-start py-5 py-lg-0 align-self-center m-0 pt-0">

            <div class="card border-0 bg-color-light">
                <div class="card px-lg-5 py-5 box-shadow-6 border-radius-2">

                    <h2 class="text-color-dark font-weight-bold text-6 ls-0 pb-2 mb-3">Let's Connect</h2>

                    <form class="contact-form form-style-3" method="POST" id="BodyEmail">
                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" placeholder="Your Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32">
                            </div>
                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                <input type="text" value="" data-msg-required="Please enter your phone number." class="form-control" name="phone" id="phone" required="" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="10" maxlength="15">
                            </div>
                        </div>
                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="" placeholder="Your Email">
                            </div>
                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                <input type="text" value="" maxlength="100" class="form-control" name="Where did you find us?" id="sub" placeholder="Where did you find us?" required="" data-msg-email="" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col p-0 px-3 m-0 my-2">
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="note" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mb-2 mt-2">
                                <button class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3" id="SubmitData">Submit NOW<i class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3 p-0 px-3 m-0 my-2" style="align-self:center">

            <div class="overflow-hidden mb-1">
                <h4 class="text-dark mb-0 appear-animation animated maskUp appear-animation-visible text-6  " data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">Get in Touch</h4>
            </div>
            <!-- <div class="overflow-hidden mb-3">
                    <p class="lead text-4 mb-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="400"
                        style="animation-delay: 400ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at
                        risus.</p>
                </div>
                <div class="overflow-hidden">
                    <p class="mb-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur eget leo at velit imperdiet varius.</p>
                </div> -->

            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                <h4 class="text-dark pt-2 text-4">For Clients</h4>
                <ul class="list list-icons list-icons-style-3 mt-2">
                    <!-- <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 1234 Street Name, City
                            Name, United States</li> -->
                    <li><i class="fas fa-phone top-6"></i><a class="text-color-grey text-decoration-none " href="tel:+1-240-979-0061">+1-240-979-0061</a></li>
                    <li><i class="fas fa-phone top-6"></i><a class="text-color-grey text-decoration-none " href="tel:+44-788-331-8386">+44-788-331-8386</a></li>
                    <li><i class="fas fa-envelope top-6"></i> <a href="mailto:support@fusionfirst.com">support@fusionfirst.com</a></li>
                    
                </ul>
                <!-- <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                    </ul> -->
            </div>
            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                <h4 class="text-dark pt-2 text-4">For Any Escalations</h4>
                <ul class="list list-icons list-icons-style-3 mt-2">
                    <!-- <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 1234 Street Name, City
                            Name, United States</li> -->
                    <!-- <li><i class="fas fa-phone top-6"></i><a class="text-color-grey text-decoration-none " href="tel:+91-960-225-4863">+91-960-225-4863</a></li> -->
                    <li><i class="fas fa-envelope top-6"></i> <a href="mailto:escalation@fusionfirst.com">escalation@fusionfirst.com</a></li>

                </ul>
                <!-- <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                    </ul> -->
            </div>
            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                <h4 class="text-dark pt-2 text-4">For Job Seekers</h4>
                <ul class="list list-icons list-icons-style-3 mt-2">
                    <!-- <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 1234 Street Name, City
                            Name, United States</li> -->
                    <li><i class="fas fa-phone top-6"></i><a class="text-color-grey text-decoration-none " href="tel:+91-960-225-4863">+91-960-225-4863</a></li>
                    <li><i class="fas fa-envelope top-6"></i> <a href="mailto:hr@fusionfirst.com">hr@fusionfirst.com</a></li>

                </ul>
                <!-- <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                    </ul> -->
            </div>
            

        </div>

    </div>

</div>
<section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-0 m-0">
    <div class="shape-divider" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
        </svg>
    </div>
    <div class="row row-gutter-sm justify-content-center mb-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">
        <div class="row mt-5">
            <div class="col-md-3 col-lg-3  mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible d-flex" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms">
                    <img class="card-img-top" src="<?= $baseurl ?>/img/FBSPL/contact/USA.webp" alt="Card Image">
                    <div class="card-body flex-fill">
                        <h4 class="card-title text-color-dark mb-1 text-5 font-weight-bold">UNITED STATES</h4>
                        <p class="card-text mb-1 pb-1 " style="min-height: 60px"><b>Fusion E-Solutions LLC</b></p>
                        <p class="card-text mb-1 pb-1" style="min-height: 83px">1460 Pleasantville Rd<br />Briarcliff Manor, NY 10510</p>
                        <p class="card-text mb-2 pb-1"><a href="tel:+1-240-979-0061">+1-240-979-0061</a></p>


                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible  d-flex " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms">
                    <img class="card-img-top" src="<?= $baseurl ?>/img/FBSPL/contact/UK.webp" alt="Card Image">
                    <div class="card-body flex-fill">
                        <h4 class="card-title text-color-dark mb-1 text-5 font-weight-bold">UNITED KINGDOM</h4>
                        <p class="card-text mb-1 pb-1 " style="min-height: 60px"><b>Fusion Information Technology Ltd</b></p>
                        <p class="card-text mb-1 pb-1" style="min-height: 83px">281 Kenton Rd<br />Harrow, Middlesex, HA3 0HQ</p>
                        <p class="card-text mb-2 pb-1"><a href="tel:+44-788-331-8386">+44-788-331-8386</a></p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible  d-flex" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms">
                    <img class="card-img-top" src="<?= $baseurl ?>/img/FBSPL/contact/Canada.webp" alt="Card Image">
                    <div class="card-body flex-fill">
                        <h4 class="card-title text-color-dark mb-1 text-5 font-weight-bold">CANADA</h4>
                        <p class="card-text mb-1 pb-1 " style="min-height: 60px"><b>Fusion Global Business Solution Inc</b></p>
                        <p class="card-text mb-1 pb-1" style="min-height: 83px">197 Orton Park Rd<br />Scarborough (ON), M1G 3H2</p>
                        <p class="card-text mb-2 pb-1"><a href="tel:+1-240-979-0061">+1-240-979-0061</a></p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible  d-flex" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms">
                    <img class="card-img-top" src="<?= $baseurl ?>/img/FBSPL/contact/IndiaUdaipur.webp" alt="Card Image">
                    <div class="card-body flex-fill">
                        <h4 class="card-title text-color-dark mb-1 text-5 font-weight-bold">INDIA</h4>
                        <p class="card-text mb-1 pb-1 " style="min-height: 60px"><b>Fusion Business Solutions (P) Limited</b></p>
                        <p class="card-text mb-1 pb-1" style="min-height: 83px">F-37, IT Park, MIA Extension<br />Udaipur, Rajasthan, 313002</p>
                        <p class="card-text mb-2 pb-1"><a href="tel:+91-977-227-9996">+91-977-227-9996</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= $baseurl2 ?>/js/mailer.js?d=<?= date("Y-m-d-H-i-s", time()) ?>"></script>

<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->