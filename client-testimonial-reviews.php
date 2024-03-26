<!-- Header Section starts from here -->
<?php include("header-new2.php"); ?>
<?php include("loader.php"); ?>
<!-- End of Header Section -->
<!-- banner -->
<section class="bg-grey py-3 py-lg-5 pb-5 overflow-hidden">
  <div class="container">
    <div class="row">
      <ul class="breadcrumb d-block text-5">
        <li><a href="<?= $baseurl2 ?>">Home</a></li>
        <li class="active"><a href="<?= $baseurl2 ?>/about-fbspl">About</a></li>
        <li class="active"><a href="">Testimonial</a></li>
      </ul>
      <div class="col-sm-12 col-md-6 d-flex align-items-center position-relative p-0" id="bannerSection">
        <div class="mt-4 bannerDiv">
          <div class="position-relative">
            <h1 class="text-orange text-uppercase fw-light my-3 h4">
            FBSPL's Success Stories
            </h1>
            <h2 class="fw-light h1">
            Discover How FBSPL Has <br />
              <span class="text-orange fw-semibold"> Made a Difference</span>
            </h2>
            <!-- <p class="mt-2 text-3-5 text-align">
              Deep dive into stories of inspiration and success as our clients talk about the experiences, they have had with FBSPL. Discover what satisfied business leaders and entrepreneurs have to say before making a choice.
            </p> -->

            <a href="<?= $baseurl2 ?>/get-free-consultation">
              <button class="btn btn-primary px-5 my-3 height-50 fs-18p" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius: 25px !important;" id="GetInTouchClient">
                Get in Touch
              </button></a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mdShow pe-0">
        <div class="my-auto ms-md-auto">
          <img src="<?= $baseurl ?>/assets/testimonial/TestimonialBanner.png" alt="16+ years of Business Process Management" class="bannerImage" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner -->


<!-- Our Clients-mobile -->
<section class="clientSection container-fluid d-flex justify-content-center align-items-center d-md-none">

  <div class="container orangeRec-mobile">
    <div class="smallQuates">
      <img src="<?= $baseurl ?>/assets/testimonial/BigQuotes.svg"  srcset="" style="width:60%">
    </div>
    <div class="row" style="width: inherit;">
      <div class="col-12 mb-2" style="margin-top: 110px;">
        <div class="text-white">
          <h2 class="fw-light text-white h1">
            Our <span class="fw-semibold">Clients</span>
          </h2>
          <p class="text-white">
            Hear directly from our clients about their journey with us. Gain insights into how our services have revolutionized their operations and catalyzed their company’s growth.
          </p>
          <a href="<?= $baseurl2 ?>/contact-fbspl">
            <div class="text-white" id="LetsTalkClient">Let’s Talk <span><img src="<?= $baseurl ?>/assets/testimonial/letsTalkArrow.svg" width="40px" ></span></div>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <!-- <div class="row">
          <div class="col"> -->
        <div class="carousel-half-full-width-wrapper carousel-half-full-width-right">
          <div class="owl-carousel owl-theme carousel-half-full-width-right nav-bottom nav-bottom-align-left nav-style-1 nav-dark nav-font-size-lg mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 4}, '1200': {'items': 4}}, 'loop': true, 'nav': true, 'dots': true, 'margin': 21}">
            <div class="card d-flex">
              <img src="<?= $baseurl ?>/assets/testimonial/SimonPass.png" class="img-fluid" alt="Simon Pass">
              <div class="card-body d-flex flex-column flex-fill">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They are friendly, cost-effective, and do a great job</p>
                <h4 class="card-title text-intial text-orange mt-auto">Simon Pass</h4>
                <h5 class="text-intial fw-bold mb-1">Director</h5>
                <h5 class="text-intial fw-light mb-0">- Recruitment Agency</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Neil.png" class="img-fluid" alt="Neil Holloway">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They perform very well. They always complete the activity within the time scale that’s
                  requested </p>
                <h4 class="card-title text-intial text-orange mt-auto">Neil Holloway</h4>
                <h5 class="text-intial fw-bold mb-1">Founder </h5>
                <h5 class="text-intial fw-light mb-0">- Wilson Brook</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Bruce_Jones.png" class="img-fluid" alt="Bruce Jones">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They follow a clear methodology, learn quickly, and deliver fast results </p>
                <h4 class="card-title text-intial text-orange mt-auto">Bruce Jones</h4>
                <h5 class="text-intial fw-bold mb-1">Owner & President </h5>
                <h5 class="text-intial fw-light mb-0">- Jones & Associates</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Bruce_Lyons.png" class="img-fluid" alt="Bruce Lyons">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">I'm impressed with their dedication to ensuring I was satisfied with their service. </p>
                <h4 class="card-title text-intial text-orange mt-auto">Bruce Lyons </h4>
                <h5 class="text-intial fw-bold mb-1">Owner & Manager </h5>
                <h5 class="text-intial fw-light mb-0">- Coastal Pacific </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Our Clients-mobile -->


<!-- Our Clients-desktop -->
<section class="clientSection container-fluid d-flex justify-content-center align-items-center mdShow overflow-hidden">
  <div class="container orangeRec d-flex">
    <div class="bigQuates ms-5">
      <img src="<?= $baseurl ?>/assets/testimonial/BigQuotes.svg"  srcset="" style="width:60%">
    </div>
    <div class="row">
      <div class="col-4 my-auto">
        <div class="text-white ps-5 ">
          <h2 class="fw-light text-white h1">
            Our <span class="fw-semibold">Clients</span>
          </h2>
          <p class="text-white">
            Hear directly from our clients about their <br>journey with us. Gain insights into how our <br>services have revolutionized their <br>operations and catalyzed their <br> company’s growth.
          </p>
          <a href="<?= $baseurl2 ?>/contact-fbspl">
            <div class="text-white" id="LetsTalkClient">Let’s Talk <span><img src="<?= $baseurl ?>/assets/testimonial/letsTalkArrow.svg" width="40px" alt="16+ years of Business Process Management"></span></div>
          </a>
        </div>
      </div>


      <div class="col-8 my-auto">
        <!-- <div class="carousel-half-full-width-wrapper carousel-half-full-width-right">
          <div class="owl-carousel owl-theme carousel-half-full-width-right nav-bottom nav-bottom-align-left nav-style-1 nav-dark nav-font-size-lg mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false}">

            <div class="carousel-cards p-4" style="width: calc(100% - 50%);">
              <div class="row">
                <div class="col-5 position-relative">
                  <img src="<?= $baseurl ?>/assets/testimonial/CORSOLE IMAGE.png" class="carousel-cards-Img img-fluid" >
                  <div class="smallQuotes"></div>
                  <div class="float-end">
                    <h4 class="card-title text-intial text-orange mt-auto">James Oickle</h4>
                    <h5 class="text-intial fw-bold">President & CEO<span class="fw-light"></span></h5>
                  </div>
                </div>
                <div class="col-7">
                  <p class="carousel-cards-text">We reached out to <b>Fusion</b> in the Fall of 2022 as we were having issues recruiting a skilled and motivated workforce locally to fill back office roles in our organization. What started as a simple documentation validation exercise quickly grew into the team supporting more strategic review and reconciliation activities. The team has shown repeatedly that they are willing to take on more and more complicated tasks, and the leadership team is quick to rally and support their employees when things fall off track. This commitment has given us the confidence to start working with <b>Fusion</b> in a broader capacity, which includes client servicing, reconciliation, and accounting activities.
                  </p>
                  <p class="">
                    I would strongly recommend reaching out to the team to discuss your immediate needs, and to provide them the opportunity to show you what they are capable of. </p>
                </div>
              </div>
            </div>
            <div class="carousel-cards p-4">
              <div class="row">
                <div class="col-5 position-relative">
                  <img src="<?= $baseurl ?>/assets/testimonial/CORSOLE IMAGE.png" class="carousel-cards-Img img-fluid" >
                  <div class="smallQuotes"></div>
                  <div class="float-end">
                    <h4 class="card-title text-intial text-orange mt-auto">Simon Pass</h4>
                    <h5 class="text-intial fw-bold">Director <br><span class="fw-light">Recruitment Agency</span></h5>
                  </div>
                </div>
                <div class="col-7">
                  <p class="carousel-cards-text">
                    They are friendly, cost-effective, and do a great job
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-cards p-4">
              <div class="row">
                <div class="col-5 position-relative">
                  <img src="<?= $baseurl ?>/assets/testimonial/CORSOLE IMAGE.png" class="carousel-cards-Img img-fluid" >
                  <div class="smallQuotes"></div>
                  <div class="float-end">
                    <h4 class="card-title text-intial text-orange mt-auto">Simon Pass</h4>
                    <h5 class="text-intial fw-bold">Director <span class="fw-light">- Recruitment Agency</span></h5>
                  </div>
                </div>
                <div class="col-7">
                  <p class="carousel-cards-text">
                    They are friendly, cost-effective, and do a great job
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div> -->
        <div class="carousel-half-full-width-wrapper carousel-half-full-width-right">
          <div class="owl-carousel owl-theme carousel-half-full-width-right nav-bottom nav-bottom-align-left nav-style-1 nav-dark nav-font-size-lg mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 4}, '1200': {'items': 4}}, 'loop': true, 'nav': true, 'dots': true, 'margin': 21}">
            <div class="card d-flex">
              <img src="<?= $baseurl ?>/assets/testimonial/SimonPass.png" class="img-fluid" alt="Simon Pass">
              <div class="card-body d-flex flex-column flex-fill">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They are friendly, cost-effective, and do a great job</p>
                <h4 class="card-title text-intial text-orange mt-auto">Simon Pass</h4>
                <h5 class="text-intial fw-bold mb-1">Director</h5>
                <h5 class="text-intial fw-light mb-0">- Recruitment Agency</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Neil.png" class="img-fluid" alt="Neil Holloway">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They perform very well. They always complete the activity within the time scale that’s
                  requested </p>
                <h4 class="card-title text-intial text-orange mt-auto">Neil Holloway</h4>
                <h5 class="text-intial fw-bold mb-1">Founder </h5>
                <h5 class="text-intial fw-light mb-0">- Wilson Brook</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Bruce_Jones.png" class="img-fluid" alt="Bruce Jones">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They follow a clear methodology, learn quickly, and deliver fast results </p>
                <h4 class="card-title text-intial text-orange mt-auto">Bruce Jones</h4>
                <h5 class="text-intial fw-bold mb-1">Owner & President </h5>
                <h5 class="text-intial fw-light mb-0">- Jones & Associates</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Bruce_Lyons.png" class="img-fluid" alt="Bruce Lyons">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">I'm impressed with their dedication to ensuring I was satisfied with their service. </p>
                <h4 class="card-title text-intial text-orange mt-auto">Bruce Lyons </h4>
                <h5 class="text-intial fw-bold mb-1">Owner & Manager </h5>
                <h5 class="text-intial fw-light mb-0">- Coastal Pacific </h5>
              </div>
            </div>
            <div class="card d-flex">
              <img src="<?= $baseurl ?>/assets/testimonial/SimonPass.png" class="img-fluid" alt="Simon Pass">
              <div class="card-body d-flex flex-column flex-fill">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They are friendly, cost-effective, and do a great job</p>
                <h4 class="card-title text-intial text-orange mt-auto">Simon Pass</h4>
                <h5 class="text-intial fw-bold mb-1">Director</h5>
                <h5 class="text-intial fw-light mb-0">- Recruitment Agency</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Neil.png" class="img-fluid" alt="Neil Holloway">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They perform very well. They always complete the activity within the time scale that’s
                  requested </p>
                <h4 class="card-title text-intial text-orange mt-auto">Neil Holloway</h4>
                <h5 class="text-intial fw-bold mb-1">Founder </h5>
                <h5 class="text-intial fw-light mb-0">- Wilson Brook</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Bruce_Jones.png" class="img-fluid" alt="Bruce Jones">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">They follow a clear methodology, learn quickly, and deliver fast results </p>
                <h4 class="card-title text-intial text-orange mt-auto">Bruce Jones</h4>
                <h5 class="text-intial fw-bold mb-1">Owner & President </h5>
                <h5 class="text-intial fw-light mb-0">- Jones & Associates</h5>
              </div>
            </div>
            <div class="card flex-fill">
              <img src="<?= $baseurl ?>/assets/testimonial/Bruce_Lyons.png" class="img-fluid" alt="Bruce Lyons">
              <div class="card-body d-flex flex-column">
                <div class="smallQuotes"></div>
                <p class="card-text mb-0 mt-2 text-black">I'm impressed with their dedication to ensuring I was satisfied with their service. </p>
                <h4 class="card-title text-intial text-orange mt-auto">Bruce Lyons </h4>
                <h5 class="text-intial fw-bold mb-1">Owner & Manager </h5>
                <h5 class="text-intial fw-light mb-0">- Coastal Pacific </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
</section>
<!-- Our Clients-desktop -->



<!-- Watch, Know, Decide!  -->
<section class="container py-5">
  <h3 class="fw-light h1">
    Watch, Know,<span class="fw-semibold text-orange"> Decide!</span>
  </h3>
  <div class="row d-block d-md-none">
    <div class="col-sm-12 p-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Gregg Mora')">
          <img src="<?= $baseurl ?>/assets/testimonial/Gregg Mora.jpg" alt="Harnessing the Power of Client Feedback for Business Growth | Gregg Mora | FBSPL" class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">“I wasn’t getting consistency with my team that I had, and I was looking for a team that would be available while being teachable and reliable.” </p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Gregg Mora</h6>
        <h6 class="pt-1">Chief Financial Officer</h6>
      </div>
    </div>
    <div class="col-sm-12 p-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Arielle Barrow')">
          <img src="<?= $baseurl ?>/assets/testimonial/Arielle.jpg" alt="Fast, Accurate & Reliable Outsourcing Team | Word from our client Arielle Barrow" class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">“Fusion was by far the best choice for us. The experience has been flawless, I would say. The team exceeded all expectations if we talk about accuracy.”</p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Arielle Barrow </h6>
        <h6 class="pt-1">Customer Success Manager </h6>
      </div>
    </div>
    <div data-plugin-readmore="" data-plugin-options="{'buttonOpenLabel': 'View More<br> <i class=\'fas fa-chevron-down text-orange ms-1\'></i>', 'buttonCloseLabel': '<i class=\'fas fa-chevron-up text-orange ms-1\'></i> <br>View Less', 'align': 'center'}" class="position-relative px-0" style="height: 30px; overflow: hidden; max-height: none;">
      <div class="col-sm-12 p-3 d-flex">
        <div class="flex-fill d-flex flex-column">
          <figure class="successImageContainer" onclick="OpenYoutubeModel('Stacey DiSpigno')">
            <img src="<?= $baseurl ?>/assets/testimonial/Stacey.jpg" alt="Stacey DisPigno: Budget-Friendly Pricing That Exceeded Expectations" class="img-fluid successImage">
            <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
          </figure>
          <div class="podcastParra">
            <p class="pt-3 text-black">"We are a small start-up, so we need things that are cost effective, and when I started looking into all of the things you could help us with, the choice was made.” </p>
          </div>
          <h6 class="text-orange fw-semibold mb-0 mt-auto">Stacey DiSpigno</h6>
          <h6 class="pt-1">VP of Marketing and Business Development</h6>
        </div>
      </div>
      <div class="col-sm-12 p-3 d-flex">
        <div class="flex-fill d-flex flex-column">
          <figure class="successImageContainer" onclick="OpenYoutubeModel('Joey Cumley')">
            <img src="<?= $baseurl ?>/assets/testimonial/Joey Cumley.jpg" alt="FBSPL’s Success Story of a Fashion eCommerce business" class="img-fluid successImage">
            <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
          </figure>
          <div class="podcastParra">
            <p class="pt-3 text-black">“The quality of services has far exceeded any expectations that our company had, and the growth has been seamless ever since.”</p>
          </div>
          <h6 class="text-orange fw-semibold mb-0 mt-auto">Joey Cumley </h6>
          <h6 class="pt-1">Chief Commercial Officer (CCO) at Bombinate</h6>
        </div>
      </div>
      <div class="col-sm-12 p-3 d-flex">
        <div class="flex-fill d-flex flex-column">
          <figure class="successImageContainer" onclick="OpenYoutubeModel('Patty McNeil')">
            <img src="<?= $baseurl ?>/assets/testimonial/Patty McNeil.jpg" alt="Listen to our client how FBSPL team handle administrative tasks" class="img-fluid successImage">
            <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
          </figure>
          <div class="podcastParra">
            <p class="pt-3 text-black">“We needed to add more people to our team to take on the administrative tasks, and your team did that brilliantly.”</p>
          </div>
          <h6 class="text-orange fw-semibold mb-0 mt-auto">Patty McNeil</h6>
          <h6 class="pt-1">Vice President, Commercial Insurance</h6>
        </div>
      </div>
      <div class="col-sm-12 p-3 d-flex">
        <div class="flex-fill d-flex flex-column">
          <figure class="successImageContainer" onclick="OpenYoutubeModel('Ryan Luithly')">
            <img src="<?= $baseurl ?>/assets/testimonial/Ryan Luithly.jpg" alt="Listen to our FBSPL’s remarkable staffing solution from one of our clients." class="img-fluid successImage">
            <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
          </figure>
          <div class="podcastParra">
            <p class="pt-3 text-black">“The interesting story about how we found your services is when I was sleepless wondering how we will accomplish completion of so many tasks.”</p>
          </div>
          <h6 class="text-orange fw-semibold mb-0 mt-auto">Ryan Luithly</h6>
          <h6 class="pt-1">COO at Western Gold Insurance</h6>
        </div>
      </div>
      <div class="readmore-button-wrapper text-center" style="position: absolute; bottom: 0px; left: 0px; width: 100%; z-index: 2;">
        <a href="#" class="text-decoration-none text-black fw-bold">View More <br><i class="fas fa-chevron-down text-2 ms-1"></i></a>
      </div>
      <div class="readmore-overlay" style="background: linear-gradient(rgba(2, 0, 36, 0) 0%, #FAFAFA 100%); position: absolute; bottom: 0px; left: 0px; width: 100%; height: 100px; z-index: 1;"></div>
    </div>
  </div>
  <div class="row mdShow">
    <div class="col-lg-4 col-md-6 col-sm-12 ps-0 pb-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Gregg Mora')">
          <img src="<?= $baseurl ?>/assets/testimonial/Gregg Mora.jpg" alt="Harnessing the Power of Client Feedback for Business Growth | Gregg Mora | FBSPL" class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">“I wasn’t getting consistency with my team that I had, and I was looking for a team that would be available while being teachable and reliable.” </p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Gregg Mora</h6>
        <h6 class="pt-1">Chief Financial Officer</h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 ps-0 pb-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Arielle Barrow')">
          <img src="<?= $baseurl ?>/assets/testimonial/Arielle.jpg" alt="Fast, Accurate & Reliable Outsourcing Team | Word from our client Arielle Barrow" class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">“Fusion was by far the best choice for us. The experience has been flawless, I would say. The team exceeded all expectations if we talk about accuracy.”</p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Arielle Barrow </h6>
        <h6 class="pt-1">Customer Success Manager </h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 ps-0 pb-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Stacey DiSpigno')">
          <img src="<?= $baseurl ?>/assets/testimonial/Stacey.jpg" alt="Stacey DisPigno: Budget-Friendly Pricing That Exceeded Expectations" class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">"We are a small start-up, so we need things that are cost effective, and when I started looking into all of the things you could help us with, the choice was made.” </p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Stacey DiSpigno</h6>
        <h6 class="pt-1">VP of Marketing and Business Development</h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 ps-0 pb-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Joey Cumley')">
          <img src="<?= $baseurl ?>/assets/testimonial/Joey Cumley.jpg" alt=" FBSPL’s Success Story of a Fashion eCommerce business" class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">“The quality of services has far exceeded any expectations that our company had, and the growth has been seamless ever since.”</p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Joey Cumley </h6>
        <h6 class="pt-1">Chief Commercial Officer (CCO) at Bombinate</h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 ps-0 pb-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Patty McNeil')">
          <img src="<?= $baseurl ?>/assets/testimonial/Patty McNeil.jpg" alt="Listen to our client how FBSPL team handle administrative tasks" class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">“We needed to add more people to our team to take on the administrative tasks, and your team did that brilliantly.”</p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Patty McNeil</h6>
        <h6 class="pt-1">Vice President, Commercial Insurance</h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 ps-0 pb-3 d-flex">
      <div class="flex-fill d-flex flex-column">
        <figure class="successImageContainer" onclick="OpenYoutubeModel('Ryan Luithly')">
          <img src="<?= $baseurl ?>/assets/testimonial/Ryan Luithly.jpg" alt="Listen to our FBSPL’s remarkable staffing solution from one of our clients." class="img-fluid successImage">
          <img src="<?= $baseurl ?>/assets/testimonial/playBtn.svg"  class="overlay-successImage">
        </figure>
        <div class="podcastParra">
          <p class="pt-3 text-black">“The interesting story about how we found your services is when I was sleepless wondering how we will accomplish completion of so many tasks.”</p>
        </div>
        <h6 class="text-orange fw-semibold mb-0 mt-auto">Ryan Luithly</h6>
        <h6 class="pt-1">COO at Western Gold Insurance</h6>
      </div>
    </div>
  </div>

</section>
<!-- Watch, Know, Decide!  -->

<!-- Reliable and Top-notch: Clutch Review -->
<section class="bg-grey py-5 pb-5">
  <div class="container">
    <h3 class="fw-light h1" style="font-size:2.5rem !important">
      Reliable and Top-notch:<span class="fw-semibold text-orange"> Clutch Review</span>
    </h3>
    <div class="text-center">
      <!-- <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="8" data-height="300" data-nofollow="true" data-expandifr="true" data-scale="100" data-scale="100" data-reviews="2154825,2125473,2112865,2111887,2104862,2097696" data-clutchcompany-id="907308" style="max-width: 915px; margin: auto;"></div> -->
      <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="12" data-height="375" data-nofollow="true" data-expandifr="true" data-scale="100" data-scale="100" data-reviews="2154825,2125473,2112865,2111887,2104862,2097696,2084463,2076200,2062529,2062525,2054071,2050525" data-clutchcompany-id="907308"></div>
    </div>
  </div>
</section>
<!-- Reliable and Top-notch: Clutch Review -->

<!-- Our Success Stories -->
<!-- <section class="container py-5">
  <h1 class="fw-light">
    Our Success <span class="fw-semibold text-orange">Stories</span>
  </h1>
  <div class="row mt-5">
    <div class="owl-carousel owl-theme " data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': true, 'autoHeight': true, 'margin': 10}">
      <div>
        <a href="#">
          <figure class="successImageContainer">
            <img src="<?= $baseurl ?>/assets/testimonial/sucessStoryLaptop.png" class="img-fluid successImage"  />
            <figcaption class="caption d-flex flex-column p-2">
              <h5 class="float-start text-white fs16p">
                Database Management for <br />
                Insurance Broker
              </h5>
              <div class="d-flex justify-content-between">
                <div class="d-flex w-75 text-white fs-12p">
                  <div class="line w-25 my-auto me-2"></div>
                  READ MORE
                </div>
                <span class="float-end">
                  <img src="<?= $baseurl ?>/assets/testimonial/share.svg"  width="25" />
                </span>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
      <div>
        <a href="#">
          <figure class="successImageContainer">
            <img src="<?= $baseurl ?>/assets/testimonial/sucessStoryLaptop.png" class="img-fluid successImage"  />
            <figcaption class="caption d-flex flex-column p-2">
              <h5 class="float-start text-white fs16p">
                Database Management for <br />
                Insurance Broker
              </h5>
              <div class="d-flex justify-content-between">
                <div class="d-flex w-75 text-white fs-12p">
                  <div class="line w-25 my-auto me-2"></div>
                  READ MORE
                </div>
                <span class="float-end">
                  <img src="<?= $baseurl ?>/assets/testimonial/share.svg"  width="25" />
                </span>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
      <div>
        <a href="#">
          <figure class="successImageContainer">
            <img src="<?= $baseurl ?>/assets/testimonial/sucessStoryLaptop.png" class="img-fluid successImage"  />
            <figcaption class="caption d-flex flex-column p-2">
              <h5 class="float-start text-white fs16p">
                Database Management for <br />
                Insurance Broker
              </h5>
              <div class="d-flex justify-content-between">
                <div class="d-flex w-75 text-white fs-12p">
                  <div class="line w-25 my-auto me-2"></div>
                  READ MORE
                </div>
                <span class="float-end">
                  <img src="<?= $baseurl ?>/assets/testimonial/share.svg"  width="25" />
                </span>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
      <div>
        <a href="#">
          <figure class="successImageContainer">
            <img src="<?= $baseurl ?>/assets/testimonial/sucessStoryLaptop.png" class="img-fluid successImage"  />
            <figcaption class="caption d-flex flex-column p-2">
              <h5 class="float-start text-white fs16p">
                Database Management for <br />
                Insurance Broker
              </h5>
              <div class="d-flex justify-content-between">
                <div class="d-flex w-75 text-white fs-12p">
                  <div class="line w-25 my-auto me-2"></div>
                  READ MORE
                </div>
                <span class="float-end">
                  <img src="<?= $baseurl ?>/assets/testimonial/share.svg"  width="25" />
                </span>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
      <div>
        <a href="#">
          <figure class="successImageContainer">
            <img src="<?= $baseurl ?>/assets/testimonial/sucessStoryLaptop.png" class="img-fluid successImage"  />
            <figcaption class="caption d-flex flex-column p-2">
              <h5 class="float-start text-white fs16p">
                Database Management for <br />
                Insurance Broker
              </h5>
              <div class="d-flex justify-content-between">
                <div class="d-flex w-75 text-white fs-12p">
                  <div class="line w-25 my-auto me-2"></div>
                  READ MORE
                </div>
                <span class="float-end">
                  <img src="<?= $baseurl ?>/assets/testimonial/share.svg"  width="25" />
                </span>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
    </div>
  </div>
</section> -->
<!-- Our Success Stories -->

<!-- Modal CASE STUDY THANKU -->
<div class="modal fade" id="YoutubeModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="YoutubeModelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <button type="button" class="btn-close ms-auto position-absolute z-3 modalCrossButton" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0 overflow-hidden">
        <div class="ratio ratio-16x9 ratio-borders">
          <iframe width="560" height="315" id="youtubeIframe" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CaseStudyModal-->

<script>
  const OpenYoutubeModel = (name) => {
    document.getElementById("youtubeIframe").src = ""
    const modal = document.getElementById("YoutubeModel")
    const bootstrapModal = new bootstrap.Modal(modal);
    bootstrapModal.show();
    var link;
    switch (name) {
      case "Gregg Mora":
        link = "https://www.youtube.com/embed/_7r8UAGscX0";
        break;
      case "Arielle Barrow":
        link = "https://www.youtube.com/embed/WCmDv5Hc_sc";
        break;
      case "Joey Cumley":
        link = "https://www.youtube.com/embed/4_mO7V5tIoA";
        break;
      case "Patty McNeil":
        link = "https://www.youtube.com/embed/jmqjsSUhfKc";
        break;
      case "Ryan Luithly":
        link = "https://www.youtube.com/embed/KzKVauCbAAU";
        break;
      case "Stacey DiSpigno":
        link = "https://www.youtube.com/embed/aQXYtLrh2fE";
        break;
      default:
        link = "https://www.youtube.com/embed/_7r8UAGscX0";
    }
    document.getElementById("youtubeIframe").src = link
  }
  const seeNextDiv = (e, number) => {
    e.classList.add("d-none")
    if (e.id == "viewMore1") {
      document.getElementById("viewMore2").classList.remove("d-none")
    }
    const div = `div${number}`
    document.getElementById(div).classList.remove("d-none")
  }
</script>

<!-- Footer Section starts from here -->
<script src="<?= $baseurl ?>/assets/js/main.js"></script>
<script src="<?= $baseurl ?>/assets/js/owl.carousel.min.js"></script>
<?php include("footerhome-new2.php"); ?>
<!-- End of Footer Section -->