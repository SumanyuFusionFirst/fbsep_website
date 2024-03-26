<div class="row py-4">
    <div class="col-lg-8 text-center text-lg-start py-5 py-lg-0 align-self-center" style="margin:auto">

        <div class="card border-0 bg-color-light">
            <div class="card px-lg-5 py-5 box-shadow-6 border-radius-2">

                <h2 class="text-color-dark font-weight-bold text-6 ls-0 pb-2 mb-3">Let's Connect</h2>

                <form class="contact-form form-style-3" method="POST" id="BodyEmail">
                    <div class="row row-gutter-sm">
                        <div class="form-group col-lg-6 p-3">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" placeholder="Your Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32">
                        </div>
                        <div class="form-group col-lg-6 p-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number." class="form-control" name="phone" id="phone" required="" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10">
                        </div>
                    </div>
                    <div class="row row-gutter-sm">
                        <div class="form-group col-lg-6 p-3">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="" placeholder="Your Email">
                        </div>
                        <div class="form-group col-lg-6 p-3">
                            <input type="text" value="" maxlength="100" class="form-control" name="Where did you find us?" id="sub" placeholder="Where did you find us?" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col p-3">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="note" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-0">
                            <button class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3" id="SubmitData">Submit NOW<i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div class='col-md-12 text-center'>
    <h4 class='font-weight-semibold mb-2 pb-1 appear-animation animated fadeInUpShorter appear-animation-visible'> Share
        this Post</h4>
</div>
<div class='share-buttons-container'>
    <div class='share-list'> <a class='fb-h' onclick='return fbs_click()' target='_blank' title='FACEBOOK'> <img src='https://img.icons8.com/material-rounded/96/000000/facebook-f.png'> </a> <a class='tw-h' onclick='return tbs_click()' target='_blank' title='TWITTER'> <img src='https://img.icons8.com/material-rounded/96/000000/twitter-squared.png'> </a> <a class='li-h' onclick='return lbs_click()' target='_blank' title='LINKEDIN'> <img src='https://img.icons8.com/material-rounded/96/000000/linkedin.png'> </a> <a data-pin-do='buttonPin' data-pin-config='none' class='pi-h' onclick='return pbs_click()' target='_blank' title='PINTEREST'> <img src='https://img.icons8.com/ios-glyphs/90/000000/pinterest.png'> </a> </div>
</div>

<script src="<?= $baseurl2 ?>/js/mailer.js?d=<?= date("Y-m-d-H-i-s", time()) ?>"></script>