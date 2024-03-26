<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->
<?php include("loader.php"); ?>

<section class="section section-with-shape-divider position-relative bg-light py-2 border-0 m-0">
    <div class="col-lg-7 text-center text-lg-center py-5 py-lg-0 align-self-center px-2" style="margin:auto">

        <div class="card border-0 bg-color-light">
            <div class="card px-lg-4 py-4 box-shadow-6 border-radius-2">

                <h1 class="text-color-primary font-weight-bold text-6 ls-0 pb-2 mb-1">Inquire now</h1>
                <p>Write to us, we'll respond promptly!</p>

                <form class="contact-form form-style-3" id="BodyEmail1" method="POST">
                    <!-- <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div> -->

                    <div class="row row-gutter-sm">
                        <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name1" required="" placeholder="Your Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32">
                        </div>
                        <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                            <input type="text" value="" data-msg-required="Please enter your phone number." class="form-control" name="phone" id="phone1" required="" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="10" maxlength="15">
                        </div>
                    </div>
                    <div class="row row-gutter-sm">
                        <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email1" required="" placeholder="Your Email">
                        </div>
                        <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                            <input type="text" value="" data-msg-required="Please enter the Company Name." maxlength="100" class="form-control" name="Company" id="CompanyName" required="" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="row row-gutter-sm">

                        <div class="form-group col-md-6 p-0 px-3 m-0 my-2">
                            <div class="dropdown" data-control="checkbox-dropdown">
                                <label class="dropdown-label text-3" style="padding: 16px;background-color: #F4F4F4;border: none;height:47px;">Select</label>

                                <div class="dropdown-list" style="z-index: 1;" id="checkBox">

                                    <label class="dropdown-option">
                                        <input type="checkbox" value="Recruitment Services" name="dropdown-group" value="0" />
                                        Recruitment Services
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" value="Insurance Services" name="dropdown-group" value="1" />
                                        Insurance Services
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" value="Accounting&Bookkeeping Service" name="dropdown-group" value="2" />
                                        Accounting&Bookkeeping Service
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" value="Data Annotation Services" name="dropdown-group" value="3" />
                                        Data Annotation Services
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" value="Health Care Services" name="dropdown-group" value="4" />
                                        Health Care Services
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" value="Customer Support Services" name="dropdown-group" value="5" />
                                        Customer Support Services
                                    </label>

                                    <!-- <label class="dropdown-option">
                  <input type="checkbox" name="dropdown-group" value="5" />
                  Interest
                </label> -->
                                    <label class="dropdown-option">
                                        <input type="checkbox" value=" Other Services" name="dropdown-group" value="6" />
                                        Other Services
                                    </label>
                                </div>
                            </div>
                            <!-- <label class="form-label"><span class="text-color-danger">*</span></label> -->
                            <!-- <div class="custom-select-1" class="chosen-select">
                        <select class="form-select form-control h-auto py-2"  id="checkBox" name="Services" required>
                               <option value="" selected>Select Services</option>
                                <option value="Recruitment Services"><span>Recruitment Services</option>
                                <option value="Insurance Serviceswspapers">Insurance Services</option>
                                <option value="Accounting&Bookkeeping Services">Accounting&Bookkeeping Services</option>
                                <option value="Data Annotation Services">Data Annotation Services</option>
                                <option value="Health Care Services">Health Care Services</option>
                                <option value="Customer Support Services">Customer Support Services</option>
                                <option value="Others">Others</option>
                            </select>
                        </div> -->
                        </div>
                        <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                            <input type="text" value="" maxlength="100" class="form-control" name="Where did you find us?" id="source" required="" data-msg-email="" placeholder="Where did you find us?">
                        </div>
                    </div>
                    <div class="row row-gutter-sm p-0 px-3 m-0 my-2">
                        <h5 class="mb-0">When would you like to schedule your consultation call?</h5>
                        <hr class="m-0 p-0">

                        <div class="form-group col-lg-4 p-0 px-3 m-0 my-2">
                            <label>Date</label>
                            <input type="date" value="" data-msg-required="Please enter Date." data-msg-email="Please enter date" maxlength="100" class="form-control" name="date" id="date" required="" placeholder="dd-mm-yyyy">
                        </div>

                        <div class="form-group col-lg-4 p-0 px-3 m-0 my-2">
                            <label>Time</label>
                            <input type="time" value="" data-msg-required="Please enter time" class="form-control" id="time" required="">
                        </div>
                        <!-- <div class="form-group col-lg-4 p-0 px-3 m-0 my-2">
                            <label>Time</label>
                            <input type="time" value="" data-msg-required="Please enter Time." maxlength="100"
                                class="form-control" name="time" id="time" required="" placeholder="Time">
                        </div> -->
                        <div class="form-group col-lg-4 p-0 px-3 m-0 my-2">
                            <div class="custom-input-box">
                                <!-- <i class="fa fa-search icons text-color-primary" style="top:8px !important;left:8px !important"></i> -->
                                <label>Timezone</label>
                                <input class="form-control" list="productName" autocomplete="off" type="text" name="source" id="timezone" placeholder="Select Timezone" required />
                                <datalist id="productName">
                                    <!-- <option value="">Select Timezone</option> -->
                                    <option>(GMT -12:00) Eniwetok, Kwajalein</option>
                                    <option>(GMT -11:00) Midway Island, Samoa</option>
                                    <option>(GMT -10:00) Hawaii</option>
                                    <option>(GMT -9:30) Taiohae</option>
                                    <option>(GMT -9:00) Alaska</option>
                                    <option>(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                    <option>(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                    <option>(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                    <option>(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                    <option>(GMT -4:30) Caracas</option>
                                    <option>(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                    <option>(GMT -3:30) Newfoundland</option>
                                    <option>(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                    <option>(GMT -2:00) Mid-Atlantic</option>
                                    <option>(GMT -1:00) Azores, Cape Verde Islands</option>
                                    <option>(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                    <option>(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                    <option>(GMT +2:00) Kaliningrad, South Africa</option>
                                    <option>(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                    <option>(GMT +3:30) Tehran</option>
                                    <option>(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                    <option>(GMT +4:30) Kabul</option>
                                    <option>(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                    <option>(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                    <option>(GMT +5:45) Kathmandu, Pokhara</option>
                                    <option>(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                    <option>(GMT +6:30) Yangon, Mandalay</option>
                                    <option>(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                    <option>(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                    <option>(GMT +8:45) Eucla</option>
                                    <option>(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                    <option>(GMT +9:30) Adelaide, Darwin</option>
                                    <option>(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                    <option>(GMT +10:30) Lord Howe Island</option>
                                    <option>(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                    <option>(GMT +11:30) Norfolk Island</option>
                                    <option>(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                    <option>(GMT +12:45) Chatham Islands</option>
                                    <option>(GMT +13:00) Apia, Nukualofa</option>
                                    <option>(GMT +14:00) Line Islands, Tokelau</option>
                                </datalist>
                            </div>
                        </div>
                        <!-- <div class="form-group col-lg-4 p-0 px-3 m-0 my-2">
                            <label>Timezone</label>
                            <select data-msg-required="Please enter the subject. " id="timezone" class="form-control text-3 h-auto py-2" name="timezone" id="timezone" required="">
                                <option value="">Select Timezone</option>
                                <option value="Eastern Time (US Canada)">Eastern Time (US Canada)</option>
                                <option value="Pacific Time (US Canada)">Pacific Time (US Canada)</option>
                                <option value="Central Time (US Canada)">Central Time (US Canada)</option>
                                <option value="Mountain Time (US Canada)">Mountain Time (US Canada)</option>
                                <option value="Montreal (Canada - Quebec)">Montreal (Canada - Quebec)</option>
                                <option value="Sydney (Australia - New South Wales)">Sydney (Australia - New South Wales)</option>
                                <option value="Perth (Australia - Western Australia)">Perth (Australia - Western Australia)</option>
                                <option value="British Summer Time( UK)">British Summer Time( UK)</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="form-group col p-0 px-3 m-0 my-2">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="2" class="form-control" name="message" id="note1" required="" placeholder="Please specify what would you like to discuss?"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-0">
                            <button class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3" id="SubmitConsult">SUBMIT
                                NOW</button>
                        </div>
                    </div>
            </div>
            </form>

        </div>
    </div>

    </div>
</section>
<script>
    const date = document.querySelector('[type="date"]')
    let today = new Date().toISOString().split('T')[0]
    date.setAttribute("min", today)
    let productName = document.querySelector("#productName")
    let timezone = document.querySelector("#timezone")

    let optionStr = document.createElement("option")
    optionStr.textContent = new Date().toString().match(/([A-Z]+[\+-][0-9]+.*)/)[1]
    optionStr.setAttribute("selected", "")
    optionStr.setAttribute("value", new Date().toString().match(/([A-Z]+[\+-][0-9]+.*)/)[1])
    //`<option selected>${new Date().toString().match(/([A-Z]+[\+-][0-9]+.*)/)[1]}</option>`
    productName.appendChild(optionStr)
    timezone.value = new Date().toString().match(/([A-Z]+[\+-][0-9]+.*)/)[1]
    //     $('#date').datetimepicker({
    //   format: 'dd-mm-yyyy'
    // });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= $baseurl2 ?>/js/consultation.js?d=<?= date("Y-m-d-H-i-s", time()) ?>"></script>
<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->