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
if (!empty($url_components['query'])){
    parse_str($url_components['query'], $params);
    //print_r($params);
} else { 
    echo "query doesn't exist in parse_str";
}
$Filerdata;
foreach ($decoded_json as $value){
    if ($value->PostName == $params['position']){
        $Filerdata = $value;
    }
}
$PositionName= $Filerdata->PostName;
$PostFullName= $Filerdata->PostFullName;
$departmentId= $Filerdata->department;
$departmentName= $Filerdata->departmentName;
$PostName= $Filerdata->PostName;
?>
<!-- End of Header Section -->
<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
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
                        <a class="text-decoration-none text-color-primary">Position Details</a>
                    </li>
                    <li class="text-transform-none text-color-dark me-2">
                        <a class="text-decoration-none text-color-grey-lighten cursornotallowed">Personal Details</a>
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
    <!-- positionDetails -->
    <form role="form" class="needs-validation" method="post" data-query = "?dept=<?= $departmentId?>&position=<?= $PostName?>" action="./personaldetails?dept=<?= $departmentId?>&position=<?= $PostName?>" id="positionDetails">
        <div class="row p-2">
            <div class="col-lg-7 mb-4 mb-lg-0" style="margin:auto">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Department <span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                            <select class="form-select form-control h-auto py-2" name="deptType" id="deptType" required>
                            <option value='<?= $departmentId?>'><?= $departmentName?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Position Applying for <span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                            <select class="form-select form-control h-auto py-2" name="PositionApplied" id="PositionApplied" required>
                                <option value='<?= $PostFullName?>'><?= $PostFullName?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="form-group col">
                        <div class="custom-checkbox-1">
                            <input id="WillingnessforNightShift" type="checkbox" name="createAccount" checked required/>
                            <label for="createAccount">Willingness of night shift? <span class="text-color-danger">*</span></label>
                        </div>
                    </div>
                </div> -->
                <div class="form-group col-md-6">
                    <!-- <span id="WillingnessforNightShift" hidden></span> -->
                  <label class="form-label">Willingness of night shift? <span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="WillingnessforNightShift" data-msg-required="Please select at least one option." id="WillingnessforNightShift" value="Yes" required=""> Yes
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="WillingnessforNightShift" data-msg-required="Please select at least one option." id="NightShift-No" value="No" required=""> No
                        </label>
                     </div>
                  </div>
                  <span style="display:none;color:red" id="WarningDayShift">Unfortunately, currently we don't have openings for the day shift.</span>
               </div>


                <div class="row" style="display:none">
               <div class="form-group col">
                  <label class="form-label" id="relavantExperience"><span class="text-color-danger">*</span></label>
                  <div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="previouslyWorked" data-msg-required="Please select at least one option." id="previouslyWorked" value="Yes" required="" checked> Yes
                        </label>
                     </div>
                     <div class="form-check form-check-inline">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="previouslyWorked" data-msg-required="Please select at least one option." id="previouslyWorked" value="No" required=""> No
                        </label>
                     </div>
                  </div>
               </div>
            </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">How did you know about this opening? <span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                            <select class="form-select form-control h-auto py-2" id="SourceOfInformationType" name="jobOpening" required>
                                <option value="" selected>Select any option</option>
                                <option value="Job Portals">Job Portals</option>
                                <!-- <option value="Newspapers">Newspapers</option> -->
                                <option value="Social Media">Social Media</option>
                                <option value="Walk-In">Walk-In</option>
                                <option value="Referral">Referral</option>
                                <option value="Campus">Campus</option>
                                <option value="Job Fair">Job Fair</option>
                                <option value="Billboard">Billboard</option>
                                <!-- <option value="Radio">Radio</option> -->
                                <option value="Consultancy">Consultancy</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Job Portals -->
                <div class="row" id="JobPortals">
                    <div class="form-group col-md-6">
                        <label class="form-label">Name of the Job Portal?<span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                            <select class="form-select form-control h-auto py-2" id="jobportalname" required>
                                <option value="0" selected>Select any option</option>
                                <option value="Naukri.com">Naukri.com</option>
                                <option value="Indeed.com">Indeed.com</option>
                                <option value="Linkedin.com">Linkedin.com</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="row" id="SocialMedia">
                    <div class="form-group col-md-6">
                        <label class="form-label">Name of the Social Media?<span class="text-color-danger">*</span></label>
                        <div class="custom-select-1">
                            <select class="form-select form-control h-auto py-2" id="socialmedianame" name="SocialMediaSelect" required>
                                <option value="0" selected>Select any option</option>
                                <option value="Facebook.com">Facebook.com</option>
                                <option value="Linkedin.com">Linkedin.com</option>
                                <option value="Instagram.com">Instagram.com</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Referal -->
                <div class="row" id="Referral">
                    <div class="form-group col-md-4">
                        <label class="form-label">Referral Name <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="Referral" id="R1Person" value="0" required />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label">Designation at Fusion</label>
                        <input type="text" class="form-control h-auto py-2" name="Designation" id="R1Designation" value="" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label">Phone<span class="text-color-danger"></label>
                        <input type="text" class="form-control h-auto py-2" name="Phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" id="R1Contact" value="" />
                    </div>
                </div>

                <!-- campus -->
                <div class="row" id="Campus">
                    <div class="form-group col-md-6">
                        <label class="form-label">Name of the Campus <span class="text-color-danger">*</span></label>
                        <input type="text" class="form-control h-auto py-2" name="Campus" id="campusname" value="0" required />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Location of the Campus</label>
                        <input type="text" class="form-control h-auto py-2" id="campuslocation" value="0" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <div class="custom-checkbox-1 p-0">
                            <button type="submit" id="positionDetailSubmit" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3">Next
                                <i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="<?= $baseurl2 ?>/js/apply.js?d=<?= date("Y-m-d-H-i-s", time()) ?>"></script>
<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->