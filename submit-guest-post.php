<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->
<?php include("loader.php"); ?>

<section
    class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded"
    data-bg-src="<?= $baseurl?>/img/demos/business-consulting-3/backgrounds/background-5.jpg"
    style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-color-dark text-10">Become a Guest Writer</h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb d-block text-center text-5">
                    <li><a href=".">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
        </svg>
    </div>
</section>



<div class="container">
<div class="row mt-3">
            <div class="col-lg-12 col-xl-12">
                <h3 class="text-6 text-transform-none text-color-dark font-weight-bold appear-animation p-0 mb-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">Interested in Becoming a FBSPL Guest Writer?</h3>
                <p class="text-3-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">Looking for a great new place to share your business expertise? Have a great idea that you think would be perfect for our readers? FBSPL is always looking for experts who are interested in contributing to our community. In addition, we love inspirational personal stories about career changes and start-ups.
                </p>
            </div>  
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-xl-12">
                <h3 class="text-6 text-transform-none text-color-dark font-weight-bold appear-animation p-0 mb-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">Read these submission guidelines</h3>
                <p class="text-3-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">Looking for a great new place to share your business expertise? Have a great idea that you think would be perfect for our readers? FBSPL is always looking for experts who are interested in contributing to our community. In addition, we love inspirational personal stories about career changes and start-ups.
                </p>
                <ul class="text-3-5 pb-0 mb-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                   <li>Your post must be original & when you submit a post or article, you give FBSPL copyright ownership of the post.</li>
                   <li>You can only have 1 self-serving link.</li>
                   <li>We only give ‘dofollow’ links to quality website</li>
                   <li>Your article must be 700-800 words and offer something valuable to our readers.</li>
                   <li>Images, graphs, stats and videos are encouraged, but it should be genuine, and links should be there. (Note: All data should have originated within the last two years)</li>
                   <li>Images should be sent as a separate attachment.</li>
                   <li>Outgoing links must be relevant to our blog. For example, linking to dating sites, SEO agencies, Credit-related sites, etc. aren’t allowed.</li>
                   <li><strong>Note: FBSPL team reserves the right to edit and adapt your guest blog content as we see fit and update it in the future for accuracy and comprehensiveness.</strong></li>
                </ul>
            </div>  
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-xl-12">
                <h3 class="text-6 text-transform-none text-color-dark font-weight-bold appear-animation p-0 mb-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">Writing Tip</h3>
                <p class="text-3-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">Include subheadings, images, blockquotes, bullet points, and shorter paragraphs which make the article more readable.
                </p>
                <p class="text-3-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">Topics We Cover</p>
                <ul class="text-3-5 pb-0 mb-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                   <li>Business process modelling</li>
                   <li>Advice from experts in fields related to career and job search topics</li>
                   <li>Content based on our services</li>
                   <li>Tips & tricks for small business to succeed</li>
                </ul>
            </div>  
        </div>
    <div class="row py-4">
        <div class="card px-lg-5 py-4 box-shadow-6 border-radius-2 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
            data-appear-animation-delay="650" style="animation-delay: 650ms;">

            <div class="offset-anchor" id="contact-sent"></div>


            <h2 class="font-weight-bold text-6 mt-2 mb-0">Submit Your Article Form</h2>
            <p class="mb-4">Please submit your post idea below. If we like your post, we will email you complete instructions to begin writing for us.</p>

            <form class="contact-form form-style-3"  method="POST"
                             id="GuestForm">
                <input type="hidden" value="true" name="emailSent" id="emailSent">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                            class="form-control text-3 h-auto py-2" name="name" id="name" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address."
                            data-msg-email="Please enter a valid email address." maxlength="150"
                            class="form-control text-3 h-auto py-2" name="email" id="email" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">Website</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="150"
                            class="form-control text-3 h-auto py-2" name="name" id="website" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">LinkedIn profile</label>
                        <input type="text" value="" data-msg-required="Please enter your email address."
                            data-msg-email="Please enter a valid email address." maxlength="100"
                            class="form-control text-3 h-auto py-2" name="email" id="linkedInprofile" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">Article Title</label>
                        <input type="text" value="" data-msg-required="Please enter Article Title." maxlength="200"
                            class="form-control text-3 h-auto py-2" name="name" id="articletitle" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">Target Keywords</label>
                        <input type="text" value="" data-msg-required="Please enter Target Keywords."
                            data-msg-email="Please enter a valid email address." maxlength="300"
                            class="form-control text-3 h-auto py-2" name="email" id="TargetKeywords" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">Article Description</label>
                        <input type="text" value="" data-msg-required="Please enter Article Description." maxlength="700"
                            class="form-control text-3 h-auto py-2" name="name" id="ArticleDescription" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-2">Article images</label>
                        <input class="form-control d-block" type="file" name="attachment" id="Articleimages">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-3">Author bio</label>
                        <input type="text" value="" data-msg-required="Please enter Author bio." maxlength="100"
                            class="form-control text-3 h-auto py-2" name="name" id="Authorbio" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-2">Headshot</label>
                        <input type="text" value="" data-msg-required="Please enter Headshot." maxlength="100"
                            class="form-control text-3 h-auto py-2" name="name" id="Headshot" required="">
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label mb-1 text-2">Subject</label>
                        <select data-msg-required="Please enter the subject." class="form-control text-3 h-auto py-2"
                            name="subject" id="subject" required="">
                            <option value="">...</option>
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                            <option value="Option 3">Option 3</option>
                            <option value="Option 4">Option 4</option>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="form-group col-md-6">
                        <p class="mb-2">Checkboxes</p>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" name="checkboxes[]" type="checkbox"
                                    data-msg-required="Please select at least one option." id="inlineCheckbox1"
                                    value="option1"> 1
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" name="checkboxes[]" type="checkbox"
                                    data-msg-required="Please select at least one option." id="inlineCheckbox1"
                                    value="option2"> 2
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" name="checkboxes[]" type="checkbox"
                                    data-msg-required="Please select at least one option." id="inlineCheckbox1"
                                    value="option3"> 3
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <p class="mb-2">Radios</p>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="radios"
                                    data-msg-required="Please select at least one option." id="inlineRadio1"
                                    value="option1"> 1
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="radios"
                                    data-msg-required="Please select at least one option." id="inlineRadio2"
                                    value="option2"> 2
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="radios"
                                    data-msg-required="Please select at least one option." id="inlineRadio3"
                                    value="option3"> 3
                            </label>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label mb-1 text-2">Any published content</label>
                        <input class="form-control d-block" type="file" name="attachment" id="publishedcontent">
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="form-group col-md-12 mb-4">
                        <label class="form-label mb-1 text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6"
                            class="form-control text-3 h-auto py-2" name="message" id="message" required=""></textarea>
                    </div>
                </div> -->
                <div class="row">
                    <div class="form-group col-md-12 mb-5 mt-4">
                    <button class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3" id="SubmitGuest">Submit NOW<i class="fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>    
<script src="<?= $baseurl2 ?>/js/guest.js?d=<?=date("Y-m-d-H-i-s", time())?>"></script>
    <!-- Footer Section starts from here -->
    <?php include("footerhome.php"); ?>
    <!-- End of Footer Section -->