<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<?php include("loader.php"); ?>
<!-- End of Header Section -->
<!-- position start -->
<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="font-weight-bold text-color-dark text-10">Apply Now</h1>
         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb d-block text-center text-5">
               <li><a href=".">Home</a></li>
               <li class="active"><a href="careers.php">Careers</a></li>
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
                  <a href="#" id="PersonalDetailsHref" class="text-decoration-none text-color-grey-lighten">Personal Details</a>
               </li>
               <li class="text-transform-none text-color-grey-lighten">
                  <a class="text-decoration-none text-color-grey-lighten text-color-primary">Educational Details</a>
               </li>
               <li class="text-transform-none text-color-grey-lighten">
                  <a class="text-decoration-none text-color-grey-lighten cursornotallowed">Working Experience</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- positionDetails -->
   <!-- <form role="form" class="needs-validation" method="post" action="" id="positionDetails">
      <div class="row">
         <div class="col-lg-7 mb-4 mb-lg-0" style="margin:auto">
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Department <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="Department" required>
                        <option value="" selected>Select Department</option>
                        <option value="BPO">BPO</option>
                        <option value="IT/SOFTWARE">IT/SOFTWARE</option>
                        <option value="Marketing">Marketing</option>
                        <option value="HR">HR</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Position Applying for <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="Position" required>
                        <option value="" selected>Select Position</option>
                        <option value="BPO">BPO</option>
                        <option value="IT/SOFTWARE">IT/SOFTWARE</option>
                        <option value="Marketing">Marketing</option>
                        <option value="HR">HR</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col">
                  <div class="custom-checkbox-1">
                     <input id="createAccount" type="checkbox" name="createAccount" value="1" checked required/>
                     <label for="createAccount">Willingness of night shift? <span class="text-color-danger">*</span></label>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">How did you know about this opening? <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="opening" required>
                        <option value="" selected>Select any option</option>
                        <option value="BPO">BPO</option>
                        <option value="IT/SOFTWARE">IT/SOFTWARE</option>
                        <option value="Marketing">Marketing</option>
                        <option value="HR">HR</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col">
                  <div class="custom-checkbox-1 p-0">
                     <button type="submit" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3">Next <i class="fas fa-arrow-right ms-2"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </form> -->



   <!-- Personal Details   -->
   <!-- <form role="form" class="needs-validation" method="post" action="" id="personalDetails">
      <div class="row">
         <div class="col-lg-7 mb-4 mb-lg-0" style="margin:auto">
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">First Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="firstName" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Last Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="lastName" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Father Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="firstName" value="" required />
               </div>
               <div class="form-group col-md-6">
                    <label class="form-label">Gender <span class="text-color-danger">*</span></label>
                    <div>   
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="option1" required=""> Male
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="option2" required=""> Female
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio3" value="option3" required=""> Other
						</label>
					</div>
                    </div>
			    </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control h-auto py-2" name="Birth" value="" />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Marital Status <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="country" required>
                        <option value="" selected>Select Marital Status</option>
                        <option value="usa">Single</option>
                        <option value="spa">Married</option>
                     </select>
                  </div>
               </div>
            </div>

            <div class="row">
            <div class="form-group col-md-6">
                  <label class="form-label">Aadhar Number <span class="text-color-danger">*</span></label>
                  <input type="email" class="form-control h-auto py-2" name="email" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Email Address <span class="text-color-danger">*</span></label>
                  <input type="email" class="form-control h-auto py-2" name="email" value="" required />
               </div>
            </div>

            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Phone <span class="text-color-danger">*</span></label>
                  <input type="number" class="form-control h-auto py-2" name="phone" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Alternate Phone <span class="text-color-danger">*</span></label>
                  <input type="number" class="form-control h-auto py-2" name="phone" value="" required />
               </div>
            </div>

            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Country/Region <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="country" required>
                        <option value="Select Country" selected></option>
                        <option value="spa">India</option>
                        <option value="spa">United States</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Street Address <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="address1" value="" placeholder="House number and street name" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col">
                  <input type="text" class="form-control h-auto py-2" name="address2" value="" placeholder="Apartment, suite, unit, etc..." required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Town/City <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="city" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col">
                  <label class="form-label">State <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="state" required>
                        <option value="" selected></option>
                        <option value="ny">Nova York</option>
                        <option value="ca">California</option>
                        <option value="tx">Texas</option>
                        <option value="">Florida</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col">
                  <label class="form-label">ZIP <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="zip" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <div class="custom-checkbox-1 p-0">
                     <button type="submit" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3"><i class="fas fa-arrow-left mx-2"></i> Previous </button>
                  </div>
               </div>
               <div class="form-group col-md-6">
                  <div class="custom-checkbox-1 p-0" style="text-align:end">
                     <button type="submit" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3">NEXT <i class="fas fa-arrow-right ms-2"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form> -->

   <!-- Educational Details   -->
   <!-- class="needs-validation" -->
   <form role="form" class="needs-validation" method="post" action="workingexperience" id="educationalDetails">
      <div class="row p-2">
         <div class="col-lg-7 mb-4 mb-lg-0" style="margin:auto">
            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">10<sup>th</sup> Standard</h2>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">School Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="SchoolName10th" id="SchoolName10th" maxlength="150" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Board <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="Board10th" id="Board10th" maxlength="100" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Percentage <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="Percentage10th" maxlength="5"  id="Percentage10th" min="45" max="100" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Passing Year <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" id="YearofPassing10th" name="YearofPassing10th" onchange="calculate10Year()" required>
                        <option value="" selected>Select Passing Year</option>
                     </select>
                  </div>
               </div>
            </div>



            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">12<sup>th</sup> Standard</h2>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">School Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" id="SchoolName12th" name="SchoolName12th" maxlength="100" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Board <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="Board12th" id="Board12th" maxlength="100" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Percentage <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="Percentage12th" id="Percentage12th" maxlength="5"  min="45" max="100" value="" required />
                  <!-- onkeyup="return isNumberPercent12(event)" -->
                  <!-- <span class="text-color-danger" style="display: none;" id="PrecentCheck12">Unfortunately, you are not eligible. The eligibility criteria is 45 or above percentage.</span> -->
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Passing Year <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="YearofPassing12th" id="YearofPassing12th" onchange="calculate12Year()" required>
                        <option value="" selected>Select Passing Year</option>
                     </select>
                  </div>
               </div>
            </div>


            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Graduation</h2>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Degree <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="GraduationDegree" id="GraduationDegree" onchange="DiplomaCheck()" required>
                        <option value="" selected>Select Degree</option>
                        <option value="BA">Bachelor of Arts - B.A.</option>
                        <option value="BBA">Bachelor of Business Administration - B.B.A.</option>
                        <option value="BCOM">Bachelor of Commerce - B.Com.</option>
                        <option value="BCA">Bachelor of Computer Applications - B.C.A.</option>
                        <option value="BE">Bachelor of Engineering / Bachelor of Technology - B.E./B.Tech.</option>
                        <option value="BFA">Bachelor of Fine Arts - BFA / BVA</option>
                        <option value="BSC">Bachelor of Science - B.Sc.</option>
                        <option value="Diploma">Diploma (10+2)</option>
                        <option value="Diploma12th">After 12th Diploma</option>
                        <option value="Other">Other</option>
                     </select>
                  </div>
                  <span style="display:none;color:red" id="DiplomaNotEligible">Unfortunately, you are not eligible. Minimum eligibility criteria is Graduation.</span>
               </div>
               <div class="form-group col-md-6" id="SOCDisable">
                  <label class="form-label">Status of Completion <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="Graduation_Status_of_Completion" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="Completed" required> Completed
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="Graduation_Status_of_Completion" data-msg-required="Please select at least one option." id="tabContent9Radio2" onchange="updateMaxDate()"value="Result Awaited" required> Result Awaited
                        </label>
                     </div>
                  </div>
               </div>
            </div>


            <!-- under Graduate -->
            <div id="ugCompleted" style="display:none;">
               <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">If Completed?</h2>
               <div class="row">
                  <div class="form-group col-md-6">
                     <label class="form-label">University/College <span class="text-color-danger">*</span></label>
                     <input type="text" class="form-control h-auto py-2" name="GBoard" id="GBoard" maxlength="150" value="" />
                  </div>
                  <div class="form-group col-md-6">
                     <label class="form-label">Percentage <span class="text-color-danger">*</span></label>
                     <input type="text" class="form-control h-auto py-2" name="GPercentage" maxlength="5"  id="GPercentage" value="" min="45" max="100" />
                     <!-- onkeyup="return isNumberPercentGrad(event)" -->
                     <!-- <span class="text-color-danger" style="display: none;" id="PrecentCheckGrad">Unfortunately, you are not eligible. The eligibility criteria is 45 or above percentage.</span> -->
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col">
                     <label class="form-label">Passing Year <span class="text-color-danger">*</span></label>
                     <div class="custom-select-1">
                        <select class="form-select form-control h-auto py-2" id="GYearofPassing" name="GYearofPassing" onchange="calculateGradYear()">
                           <option value="" selected>Select Passing Year</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>

            <div id="ugAwaited" style="display:none;">
               <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">If Results awaited?</h2>
               <div class="row">
                  <div class="form-group col-md-6">
                     <label class="form-label">Semester <span class="text-color-danger">*</span></label>
                     <!-- <input type="text" class="form-control h-auto py-2" name="GCurrentSemester" id="GCurrentSemester" maxlength="100" value="Final Semester" disabled/> -->
                     <select class="form-select form-control h-auto py-2" id="GCurrentSemester" name="GCurrentSemester" required="">
                        <option value="Final Semester" selected="">Final Semester</option>
                     </select>
                  </div>
                  <div class="form-group col-md-6">
                     <label class="form-label">Tentative Month and Year of Passing <span class="text-color-danger">*</span></label>
                     <input type="date" class="form-control h-auto py-2" name="GCurrentPassingYear" id="GCurrentPassingYear" value="" />
                  </div>
               </div>
            </div>


            <!-- under Graduate -->


            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Post Graduation</h2>
            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Have you done post graduation? <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="PostGraduationRadio" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="Yes" required> Yes
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="PostGraduationRadio" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="No" checked required> No
                        </label>
                     </div>
                  </div>
               </div>
            </div>


            <div class="row" id='hidePostG'>
               <div class="form-group col-md-6">
                  <label class="form-label">Degree <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="PostGraduationDegree" id="PostGraduationDegree">
                        <option value="" selected>Select Degree</option>
                        <option value="MA">Master of Arts (MA)</option>
                        <option value="MSC">Master of Science (M.Sc)</option>
                        <option value="MCOM">Master of Commerce (M.Com)</option>
                        <option value="ME">Master of Engineering/Technology (ME/M.Tech)</option>
                        <option value="MLAW">Master of Law (LLM)</option>
                        <option value="MCA">Master of Computer Application (MCA)</option>
                        <option value="MBA">Master of Business Administration (MBA)</option>
                        <option value="PGM">Post Graduate Program in Management</option>
                        <option value="EXM">Executive Management Program</option>
                        <option value="MPSE">Post Graduate Diploma in Software Engineering</option>
                        <option value="MPGPEX">Post Graduate Programs for Executives (PGPEX)</option>
                        <option value="Other">Other</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Status of Completion <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="PostGraduation_Status_of_Completion" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="Completed"> Completed
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="PostGraduation_Status_of_Completion" data-msg-required="Please select at least one option." id="tabContent9Radio2" onchange="updateMaxDatePost()"  value="Result Awaited"> Result Awaited
                        </label>
                     </div>
                  </div>
               </div>
            </div>

            <!-- post Graduate -->
            <div id="pgCompleted" style="display:none;">
               <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">If Completed?</h2>
               <div class="row">
                  <div class="form-group col-md-6">
                     <label class="form-label">University/College <span class="text-color-danger">*</span></label>
                     <input type="text" class="form-control h-auto py-2" name="PBoard" id="PBoard" maxlength="150" value="" />
                  </div>
                  <div class="form-group col-md-6">
                     <label class="form-label">Percentage <span class="text-color-danger">*</span></label>
                     <input type="text" class="form-control h-auto py-2" name="PPercentage" maxlength="5"  min="45" max="100" id="PPercentage" value="" />
                     <!-- onkeyup="return isNumberPercentPostGRad(event)" -->
                     <!-- <span class="text-color-danger" style="display: none;" id="PrecentCheckPostGrad">Unfortunately, you are not eligible. The eligibility criteria is 45 or above percentage.</span> -->
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col">
                     <label class="form-label">Passing Year <span class="text-color-danger">*</span></label>
                     <div class="custom-select-1">
                        <select class="form-select form-control h-auto py-2" id="PYearofPassing" name="PYearofPassing">
                           <option value="" selected>Select Passing Year</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>

            <div id="pgAwaited" style="display:none;">
               <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">If Results awaited?</h2>
               <div class="row">
                  <div class="form-group col-md-6">
                     <label class="form-label">Semester <span class="text-color-danger">*</span></label>
                     <!-- <input type="text" class="form-control h-auto py-2" name="PCurrentSemester" id="PCurrentSemester" maxlength="100" value="Final Semester" disabled /> -->
                     <select class="form-select form-control h-auto py-2" id="PCurrentSemester" name="PCurrentSemester" required="">
                        <option value="Final Semester" selected="">Final Semester</option>
                     </select>
                  </div>
                  <div class="form-group col-md-6">
                     <label class="form-label">Tentative Month and Year of Passing <span class="text-color-danger">*</span></label>
                     <input type="date" class="form-control h-auto py-2" name="PCurrentPassingYear" id="PCurrentPassingYear" value="" />
                  </div>
               </div>
            </div>
            <!-- post Graduate -->


            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Certificates/Diploma/Courses</h2>
            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Do you have any other Courses? <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="otherCoursesCheckBox" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="Yes" required> Yes
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="otherCoursesCheckBox" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="No" checked required> No
                        </label>
                     </div>
                  </div>
               </div>
            </div>


            <div class="row" id='hideCourses'>
               <div class="form-group col-md-6">
                  <label class="form-label">Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" id="otherCourses" maxlength="150" name="otherCourses" maxlength="25" value="">
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Status of Completion <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="OStatus" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="Completed"> Completed
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="OStatus" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="Result Awaited"> Result Awaited
                        </label>
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
                     <button type="submit" id="nextBtn" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3">NEXT <i class="fas fa-arrow-right ms-2"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</section>
<!-- Footer Section starts from here -->
<script src="<?= $baseurl2 ?>/js/educational.js?d=<?= date("Y-m-d-H-i-s", time()) ?>"></script>
<!-- <script>
  
   function isNumberPercent12(evt) {
  const input= document.getElementById(evt.target.id)
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
   return false;
  }
  if(input.value.length == 2 ){
    input.value = `${input.value}`
  }
    if(input.value < 45 && input.value !=0){
      PrecentCheck12.style.display = "block"
      return false;
    }else{
      PrecentCheck12.style.display = "none"
    }
 
  
  return true;
}
function isNumberPercentGrad(evt) {
  
  const input= document.getElementById(evt.target.id)
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
   return false;
  }
  if(input.value.length == 2 ){
    input.value = `${input.value}`
  }
    if(input.value < 45 && input.value !=0){
      PrecentCheckGrad.style.display = "block"
      return false;
    }else{
      PrecentCheckGrad.style.display = "none"
    }
 
  
  return true;
}
function isNumberPercentPostGRad(evt) {
  
  const input= document.getElementById(evt.target.id)
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
   return false;
  }
  if(input.value.length == 2 ){
    input.value = `${input.value}`
  }
    if(input.value < 45 && input.value !=0){
      PrecentCheckPostGrad.style.display = "block"
      return false;
    }else{
      PrecentCheckPostGrad.style.display = "none"
    }
 
  
  return true;
} -->
<!-- </script> -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->