<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->
<!-- position start -->
<?php include("loader.php"); ?>

<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="font-weight-bold text-color-dark text-10">Apply Now</h1>
         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb d-block text-center text-5">
               <li><a href=".">Home</a></li>
               <li class="active">Careers</li>
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
<section id="formData">
   <div class="container">
      <div class="row">
         <div class="col">
            <ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
               <li class="text-transform-none me-2">
                  <a href="#" id="PositionDetailsHref" class="text-decoration-none text-color-grey-lighten">Position
                     Details</a>
               </li>
               <li class="text-transform-none text-color-dark me-2">
                  <a href="#" id="PersonalDetailsHref" class="text-decoration-none text-color-grey-lighten">Personal
                     Details</a>
               </li>
               <li class="text-transform-none text-color-grey-lighten">
                  <a href="<?= $baseurl2 ?>/educationaldetails" class="text-decoration-none text-color-grey-lighten">Educational Details</a>
               </li>
               <li class="text-transform-none text-color-grey-lighten">
                  <a class="text-decoration-none text-color-grey-lighten text-color-primary">Working Experience</a>
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
   <!-- <form role="form" class="needs-validation" method="post" action="" id="educationalDetails">
      <div class="row">
         <div class="col-lg-7 mb-4 mb-lg-0" style="margin:auto">
         <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">10<sup>th</sup> Standard</h2>    
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">School Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="firstName" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Board <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="lastName" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Percentage <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="firstName" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Passing Year <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="country" required>
                        <option value="" selected>Select Passing Year</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                     </select>
                  </div>
               </div>
            </div>
      
      
      
            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">12<sup>th</sup> Standard</h2>    
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">School Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="firstName" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Board <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="lastName" value="" required />
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Percentage <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="firstName" value="" required />
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Passing Year <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="country" required>
                        <option value="" selected>Select Passing Year</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                     </select>
                  </div>
               </div>
            </div>
      
      
            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Graduation</h2>    
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Degree <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="country" required>
                        <option value="" selected>Select Degree</option>
                        <option value="BA">BA</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-md-6">
                    <label class="form-label">Status of Completion <span class="text-color-danger">*</span></label>
                    <div>   
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="option1" required=""> Completed
      </label>
      </div>
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="option2" required=""> Result Awaited
      </label>
      </div>
                    </div>
       </div>
            </div>
      
      
            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Post Graduation</h2>
            <div class="row">
               <div class="form-group col">
                    <label class="form-label">have you done post graduation? <span class="text-color-danger">*</span></label>
                    <div>   
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="option1" required=""> Yes
      </label>
      </div>
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="option2" required=""> No
      </label>
      </div>
                    </div>
       </div>
            </div>
        
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Degree <span class="text-color-danger">*</span></label>
                  <div class="custom-select-1">
                     <select class="form-select form-control h-auto py-2" name="country" required>
                        <option value="" selected>Select Degree</option>
                        <option value="MA">MA</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-md-6">
                    <label class="form-label">Status of Completion <span class="text-color-danger">*</span></label>
                    <div>   
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="option1" required=""> Completed
      </label>
      </div>
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="option2" required=""> Result Awaited
      </label>
      </div>
                    </div>
       </div>
            </div>
      
      
            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Certificates/Diploma/Courses</h2>
            <div class="row">
               <div class="form-group col">
                    <label class="form-label">do you have any other Courses? <span class="text-color-danger">*</span></label>
                    <div>   
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="option1" required=""> Yes
      </label>
      </div>
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="option2" required=""> No
      </label>
      </div>
                    </div>
       </div>
            </div>
      
      
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Name <span class="text-color-danger">*</span></label>
                  <input type="text" class="form-control h-auto py-2" name="firstName" value="" required="">
               </div>
               <div class="form-group col-md-6">
                    <label class="form-label">Status of Completion <span class="text-color-danger">*</span></label>
                    <div>   
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="option1" required=""> Completed
      </label>
      </div>
      <div class="form-check form-check-inline">
      <label class="form-check-label">
         <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="option2" required=""> Result Awaited
      </label>
      </div>
                    </div>
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
   <!-- Working Experience   -->
   <form role="form" class="needs-validation" id="workingExperience">
      <div class="row p-2">
         <div class="col-lg-7 mb-4 mb-lg-0" style="margin:auto">
            <div class="row">
               <div class="form-group col-md-6">
                  <label class="form-label">Working Experience <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="WorkingExperienceRadio" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="Yes" required=""> Yes
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="WorkingExperienceRadio" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="No" required=""> No
                        </label>
                     </div>
                  </div>
               </div>
               <div class="form-group col-md-6">
                  <label class="form-label">Have you previously worked with FBSPL? <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="previouslyWorked" data-msg-required="Please select at least one option." id="tabContent9Radio1" value="Yes" required=""> Yes
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="previouslyWorked" data-msg-required="Please select at least one option." id="tabContent9Radio2" value="No" required=""> No
                        </label>
                     </div>
                  </div>
               </div>
               <div id="workingExperienceDiv" class="d-none">
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label class="form-label">Company Name <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="WE1CompanyName" maxlength="150" id="WE1CompanyName" value="" />
                     </div>
                     <div class="form-group col-md-6">
                        <label class="form-label">Department <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="WE1Departement" maxlength="150" id="WE1Departement" value="" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label class="form-label">Roles and Responsibilities <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="WE1RoleandResposibilities" maxlength="150" id="WE1RoleandResposibilities" value="" />
                     </div>
                     <div class="form-group col-md-6">
                        <label class="form-label">Last Drawn Montlhy CTC <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="WE1LastDrawnSalary" maxlength="20" id="WE1LastDrawnSalary" value="" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label class="form-label">Experience (In Years) <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="WE1ExperienceInYears" maxlength="10" id="WE1ExperienceInYears" value="" />
                     </div>
                  </div>
               </div>
               
            </div>
            <!-- <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Refer a buddy and get rewarded</h2>
            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Name of the buddy</label>
                  <input type="text" class="form-control h-auto py-2" name="buddyName" maxlength="150" id="buddyName" value="" />
               </div>
            </div>

            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control h-auto py-2" name="buddyEmail" maxlength="50" id="buddyEmail" value="" />
               </div>
            </div>

            <div class="row">
               <div class="form-group col">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control h-auto py-2" name="buddyPhone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" id="buddyPhone" value="" />
               </div>
            </div> -->

            <div class="row">
               <div class="form-group col-6">
                  <div class="custom-checkbox-1 p-0">
                     <button type="button" id="previousBtn" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3"><i class="fas fa-arrow-left mx-2"></i> Previous </button>
                  </div>
               </div>
               <div class="form-group col-6">
                  <div class="custom-checkbox-1 p-0" style="text-align:end">
                     <button type="submit" id="submitBtn" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3">Submit <i class="fas fa-arrow-right ms-2"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
   <!-- <button type="button" id="new" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3">Next <i class="fas fa-arrow-right ms-2"></i></button> -->

</section>

<section id="formSuccess" style="display:none;">
   <div class="container">
      <section class="http-error py-0" style="height:80vh">
         <div class="row justify-content-center py-3">
            <div class="col-7 text-center">
               <div class="http-error-main">
                  <!-- fa fa-circle-exclamation text-danger mb-2-->
                  <i class="fa fa-thumbs-up text-primary mb-2" style="font-size: 100px;"></i>
                  <h1 class=" text-5 font-weight-bold text-color-dark mb-2"></h1>
                  <p class="text-3 mt-2 line-height-8">
                  </p>
               </div>
               <div id="showResponse" style="display:none">
                  <div class="Copylabel">
                     Registration Id:
                  </div>
                  <div class="copy-text pb-0" style="margin: auto;width: max-content;">
                     <input type="text" class="text" value="" />
                     <button><i class="fa fa-clone"></i></button>
                  </div>
                  <div class="Copylabel">
                     Email:
                  </div>
                  <div class="copy-text pb-0" style="margin: auto;width: max-content;margin-bottom: 10px;">
                     <input type="text" class="text" value="" />
                     <button><i class="fa fa-clone"></i></button>
                  </div>
                  <div class="Copylabel" style="font-weight: 500;color: #f95a5a;width: max-content;padding-bottom: 14px;">
                     Please note down the registration ID and email for your upcoming process.
                  </div>
               </div>
               <a href="<?= $baseurl2 ?>/careers" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3"><i class="fas fa-arrow-left ms-2"></i> GO BACK TO CAREER PAGE</a>
            </div>
         </div>
      </section>
   </div>
</section>

</div>
</section>
<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<script src="<?= $baseurl2 ?>/js/workingexperience.js?d=<?= date("Y-m-d-H-i-s", time()) ?>"></script>
<!-- End of Footer Section -->