<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<?php include("loader.php"); ?>
<?php
$carier_json = file_get_contents('positions.json');
$decoded_json = json_decode($carier_json, false);
$url =  isset($_SERVER['HTTPS']) &&
   $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
//print_r($url);
if (!empty($url_components['query'])) {
   parse_str($url_components['query'], $params);
   //print_r($params);
} else {
   echo "query doesn't exist in parse_str";
}
$Filerdata;
foreach ($decoded_json as $value) {
   if ($value->PostName == $params['position']) {
      $Filerdata = $value;
   }
}
$PositionName = $Filerdata->PostName;
$PostFullName = $Filerdata->PostFullName;
$departmentId = $Filerdata->department;
$departmentName = $Filerdata->departmentName;
$PostName = $Filerdata->PostName;
?>

<!-- End of Header Section -->
<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="font-weight-bold text-color-dark text-10">Apply Now</h1>
         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb d-block text-center text-5">
               <li><a href=".">Home</a></li>
               <li class="active"><a href="./careers">Careers</a></li>
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
<section>
   <div class="container">
      <div class="row">
         <div class="col">
            <ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
               <li class="text-transform-none me-2">
                  <a href="#" id="PositionDetailsHref" class="text-decoration-none text-color-grey-lighten">Position Details</a>
               </li>
               <li class="text-transform-none text-color-dark me-2">
                  <a class="text-decoration-none text-color-grey-lighten text-color-primary">Personal Details</a>
               </li>
               <li class="text-transform-none text-color-grey-lighten">
                  <a class="text-decoration-none text-color-grey-lighten cursornotallowed">Educational Details</a>
               </li>
               <li class="text-transform-none text-color-grey-lighten">
                  <a class="text-decoration-none text-color-grey-lighten cursornotallowed">Working Experience</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <form role="form" class="needs-validation" method="post" action="./educationaldetails" id="personalDetails">
      <div class="row p-2">
         <div class="col-lg-7 mb-4 mb-lg-0" style="margin:auto">
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">First Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" id='firstName' name="firstName" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Last Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" id="lastName" name="lastName" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Father Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" id="fathername" name="fathername" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Gender <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="gender" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="male" required=""> Male
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="gender" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="female" required=""> Female
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="gender" data-msg-required="Please select at least one option." id="tabContent9Radio3" value="other" required=""> Other
                        </label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Date of Birth<span class="text-color-danger">*</span></label>
                  <input type="date" class="form-control h-auto py-2" name="dob"  id="dob" value="" required/>
                  <!-- onblur="getAge(event)" -->
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Marital Status <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="maritalStatus" id="maritalStatus" required>
                        <option value="" selected>Select Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow">Widow</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                     </select>
                  </div>
               </div>
            </div>

            <div class="row" id="spouseField" style="display:none;">
               <div class="form-group col-md-12">
                  <label class="form-label">Spouse Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" id="spouseName" name="spouseName" value="" />
               </div>
            </div>

            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Aadhaar Number <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="aadhaar" id="aadhaar" maxlength="14" oninput="this.value = this.value.replace(/\D/g, '').split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join('-')" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Email Address <span class="text-color-danger">*</span></label>
                  <input type="email" class="form-control h-auto py-2" name="email" id="email" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Phone <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="mobile" id="mobile" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Alternate Phone<span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="home_phone" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="home_phone" value="" required/>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label mb-1 text-2">Upload Photo</label>
                  <input class="form-control d-block" type="file" name="Photo" id="Photo">
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label mb-1 text-2">Upload Resume</label>
                  <input class="form-control d-block" type="file" name="Resume" id="Resume">
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="row">
                     <div class="form-group col">
                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-4">Current Address</h2>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">Street Address <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="currentAddress" id="currentAddress" value="" placeholder="House number and street name" maxlength="150" required />
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">State <span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                           <select class="form-select form-control h-auto py-2" id="State" name="State" class="form-control" required>
                              <option value="">Select State</option>
                              <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                              <option value="Assam">Assam</option>
                              <option value="Bihar">Bihar</option>
                              <option value="Chandigarh">Chandigarh</option>
                              <option value="Chhattisgarh">Chhattisgarh</option>
                              <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                              <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Goa">Goa</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Haryana">Haryana</option>
                              <option value="Himachal Pradesh">Himachal Pradesh</option>
                              <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                              <option value="Jharkhand">Jharkhand</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Lakshadweep">Lakshadweep</option>
                              <option value="Madhya Pradesh">Madhya Pradesh</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Manipur">Manipur</option>
                              <option value="Meghalaya">Meghalaya</option>
                              <option value="Mizoram">Mizoram</option>
                              <option value="Nagaland">Nagaland</option>
                              <option value="Orissa">Orissa</option>
                              <option value="Pondicherry">Pondicherry</option>
                              <option value="Punjab">Punjab</option>
                              <option value="Rajasthan">Rajasthan</option>
                              <option value="Sikkim">Sikkim</option>
                              <option value="Tamil Nadu">Tamil Nadu</option>
                              <option value="Tripura">Tripura</option>
                              <option value="Uttar Pradesh">Uttar Pradesh</option>
                              <option value="Uttaranchal">Uttaranchal</option>
                              <option value="West Bengal">West Bengal</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">City/Village <span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                           <input type="text" class="form-control h-auto py-2" maxlength="50" id="City" name="City" value="" placeholder="City Name" required />
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">ZIP <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="pin" maxlength="6" onkeypress="return isNumber(event)" id="pin" value="" required />
                     </div>
                  </div>
               </div>
               <div class="col-md-6" id="SameAsCurrentDiv">
                  <div class="row">
                     <div class="form-group col-md-12 mb-0">
                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-0">Permanent Address</h2>
                     </div>
                     <div class="form-group col-md-12 mt-0">
                        <div class="custom-checkbox-1">
                           <input id="sameAddress" type="checkbox" name="sameAddress" value="1" />
                           <label for="sameAddress">Same as Current</label>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">Street Address <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" id="permanentAddress" maxlength="100" name="permanentAddress" value="" placeholder="House number and street name" required />
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">State <span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                           <select class="form-select form-control h-auto py-2" id="permanentState" name="permanentState" class="form-control" required>
                              <option value="">Select State</option>
                              <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                              <option value="Assam">Assam</option>
                              <option value="Bihar">Bihar</option>
                              <option value="Chandigarh">Chandigarh</option>
                              <option value="Chhattisgarh">Chhattisgarh</option>
                              <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                              <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Goa">Goa</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Haryana">Haryana</option>
                              <option value="Himachal Pradesh">Himachal Pradesh</option>
                              <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                              <option value="Jharkhand">Jharkhand</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Lakshadweep">Lakshadweep</option>
                              <option value="Madhya Pradesh">Madhya Pradesh</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Manipur">Manipur</option>
                              <option value="Meghalaya">Meghalaya</option>
                              <option value="Mizoram">Mizoram</option>
                              <option value="Nagaland">Nagaland</option>
                              <option value="Orissa">Orissa</option>
                              <option value="Pondicherry">Pondicherry</option>
                              <option value="Punjab">Punjab</option>
                              <option value="Rajasthan">Rajasthan</option>
                              <option value="Sikkim">Sikkim</option>
                              <option value="Tamil Nadu">Tamil Nadu</option>
                              <option value="Tripura">Tripura</option>
                              <option value="Uttar Pradesh">Uttar Pradesh</option>
                              <option value="Uttaranchal">Uttaranchal</option>
                              <option value="West Bengal">West Bengal</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">City/Village <span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                           <input type="text" class="form-control h-auto py-2" id="permanentCity" maxlength="50" name="permanentCity" value="" placeholder="City Name" required />
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="form-group col">
                        <label class="form-label">ZIP <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="permanentPin" maxlength="6" onkeypress="return isNumber(event)" id="permanentPin" value="" required />
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-6">
                  <div class="custom-checkbox-1 p-0">
                     <button type="button" id="previous" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3"><i class="fas fa-arrow-left mx-2"></i> Previous </button>
                  </div>
               </div>
               <div class="form-group col-6">
                  <div class="custom-checkbox-1 p-0" style="text-align:end">
                     <button type="submit" id="nextBtn" name="nextBtn" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3">NEXT <i class="fas fa-arrow-right ms-2"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="js/city.js"></script> -->
<script src="<?= $baseurl2 ?>/js/personal.js"></script>
<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->