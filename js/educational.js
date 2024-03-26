SchoolName10th = document.getElementById('SchoolName10th');
Board10th = document.getElementById('Board10th');
Percentage10th = document.getElementById('Percentage10th');
YearofPassing10th = document.getElementById('YearofPassing10th');
SchoolName12th = document.getElementById('SchoolName12th');
Board12th = document.getElementById('Board12th');
Percentage12th = document.getElementById('Percentage12th');
YearofPassing12th = document.getElementById('YearofPassing12th');
GraduationDegree = document.getElementById('GraduationDegree');
Graduation_Status_of_Completion = document.getElementsByName('Graduation_Status_of_Completion');
PostGraduationDegree = document.getElementById('PostGraduationDegree');
PostGraduation_Status_of_Completion = document.getElementsByName('PostGraduation_Status_of_Completion');
PostGraduationRadio = document.getElementsByName('PostGraduationRadio');
otherCoursesCheckBox = document.getElementsByName('otherCoursesCheckBox');
otherCourses = document.getElementById('otherCourses');
OStatus = document.getElementsByName('OStatus');
PostGraduation = document.getElementsByName('PostGraduation');
nextBtn = document.getElementById('nextBtn');
hidePostG = document.getElementById('hidePostG');
hideCourses = document.getElementById('hideCourses');
form = document.getElementById('educationalDetails');
previousBtn = document.getElementById('previous');
ugCompleted = document.getElementById('ugCompleted');
ugAwaited = document.getElementById('ugAwaited');
// PrecentCheck10 = document.getElementById('PrecentCheck10');
// PrecentCheck12 = document.getElementById('PrecentCheck12');
// PrecentCheckGrad = document.getElementById('PrecentCheckGrad');
// PrecentCheckPostGrad = document.getElementById('PrecentCheckPostGrad');
DiplomaNotEligible = document.getElementById('DiplomaNotEligible');

pgCompleted = document.getElementById('pgCompleted');
pgAwaited = document.getElementById('pgAwaited');

GBoard = document.getElementById('GBoard');
GPercentage = document.getElementById('GPercentage');
GYearofPassing = document.getElementById('GYearofPassing');

GCurrentSemester = document.getElementById('GCurrentSemester');
GCurrentPassingYear = document.getElementById('GCurrentPassingYear');

PBoard = document.getElementById('PBoard');
PPercentage = document.getElementById('PPercentage');
PYearofPassing = document.getElementById('PYearofPassing');

PCurrentSemester = document.getElementById('PCurrentSemester');
PCurrentPassingYear = document.getElementById('PCurrentPassingYear');

let today = new Date().toISOString().split('T')[0]
PCurrentPassingYear.setAttribute("min", today)
GCurrentPassingYear.setAttribute("min", today)

PositionDetailsHref = document.getElementById("PositionDetailsHref")

let getQueryStr = JSON.parse(localStorage.getItem("positionDetails"))
if(getQueryStr){
  PositionDetailsHref = document.getElementById("PositionDetailsHref")
  PositionDetailsHref.setAttribute('href', `${document.getElementById("myBase").getAttribute("data-href")}/positiondetails${getQueryStr.queryString}`)
  PersonalDetailsHref = document.getElementById("PersonalDetailsHref")
  PersonalDetailsHref.setAttribute('href', `${document.getElementById("myBase").getAttribute("data-href")}/personaldetails${getQueryStr.queryString}`)
}

let displayNoneForDegree = (e, y) => {
  
  document.getElementById(e.id).style.display = e.display
  document.getElementById(y.id).style.display = y.display
}

// function isNumberPercent(evt) {
  
//   const input= document.getElementById(evt.target.id)
//   evt = (evt) ? evt : window.event;
//   var charCode = (evt.which) ? evt.which : evt.keyCode;
//   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
//    return false;
//   }
//   if(input.value.length == 2 ){
//     input.value = `${input.value}`
//   }
//     if(input.value < 45 && input.value !=0){
//       PrecentCheck10.style.display = "block"
//       return false;
//     }else{
//       PrecentCheck10.style.display = "none"
//     }
 
  
//   return true;
// }

// function validateInput() {
//   
//   var inputElement = document.getElementById("Percentage10th");
//   var inputElement1 = document.getElementById("Percentage10th-error");
//   var inputValue = parseFloat(inputElement.value);

//   if (isNaN(inputValue) || inputValue < 45) {
//     // Set custom validity message for min constraint
//     inputElement.setCustomValidity("Unfortunately, you are not eligible. The eligibility criteria is 45 or above percentage.");
//   } else {
//     // Reset custom validity message
//     inputElement.setCustomValidity("");
//   }
//   // Trigger validation manually
//   var form = inputElement.closest('form');
//   form.reportValidity();
// }

function requiredDegree(x, y){
  
  if(x == "Completed"){
    let inputsAwaited = document.querySelectorAll(`#${y}Awaited input`)
    inputsAwaited.forEach(e => {
      // e.value = ""
      e.removeAttribute("required")
    })

    let inputsCompleted = document.querySelectorAll(`#${y}Completed input`)
    let selectCompleted = document.querySelector(`#${y}Completed select`)
    inputsCompleted.forEach(e => {
      // e.value = ""
      e.setAttribute("required", "")
    })
    // selectCompleted.value = ""
    selectCompleted.setAttribute("required", "")
  }
  if(x == "Result Awaited"){
    let inputsCompleted = document.querySelectorAll(`#${y}Completed input`)
    let selectCompleted = document.querySelector(`#${y}Completed select`)
    inputsCompleted.forEach(e => {
      // e.value = ""
      e.removeAttribute("required", "")
    })
    // selectCompleted.value = ""
    selectCompleted.removeAttribute("required")

    let inputsAwaited = document.querySelectorAll(`#${y}Awaited input`)
    inputsAwaited.forEach(e => {
      // e.value = ""
      e.setAttribute("required", "")
    })
  }
}

Array.from(Graduation_Status_of_Completion).forEach(e => {
  e.addEventListener("click", x => {
    let objOne = {}
    let objTwo = {}
    if (x.target.value == "Completed") {
      objOne.id = "ugCompleted"
      objOne.display = "block"
      objTwo.id = "ugAwaited"
      objTwo.display = "none"
      displayNoneForDegree(objOne, objTwo)
      requiredDegree("Completed", "ug")
    } else {
      objOne.id = "ugCompleted"
      objOne.display = "none"
      objTwo.id = "ugAwaited"
      objTwo.display = "block"
      displayNoneForDegree(objOne, objTwo)
      requiredDegree("Result Awaited", "ug")
    }
  })
})

Array.from(PostGraduation_Status_of_Completion).forEach(e => {
  e.addEventListener("click", x => {
    let objOne = {}
    let objTwo = {}
    if (x.target.value == "Completed") {
      objOne.id = "pgCompleted"
      objOne.display = "block"
      objTwo.id = "pgAwaited"
      objTwo.display = "none"
      displayNoneForDegree(objOne, objTwo)
      requiredDegree("Completed", "pg")
    } else {
      
      objOne.id = "pgCompleted"
      objOne.display = "none"
      objTwo.id = "pgAwaited"
      objTwo.display = "block"
      displayNoneForDegree(objOne, objTwo)
      requiredDegree("Result Awaited", "pg")
    }
  })
})

const Obj = new Object;
function getValue(obj) {
  let data = "none"
  Array.from(obj).forEach(e => {
    if (e.checked == true && (e.value == "Yes" || e.value == "Completed")) {
      data = true
    }
    if (e.checked == true && (e.value == "No" || e.value == "Result Awaited")) {
      data = false
    }
  })
  return data
}

function hideNextDivs1(e) {
  if (e.value === 'No') {
    hideCourses.style.display = 'none'
    otherCourses.removeAttribute("required")
    otherCourses.value = ""
    OStatus.forEach(e => {
      
      e.removeAttribute("required")
      e.checked = false
    })
  } else {
    
    hideCourses.style.display = 'flex'
    otherCourses.setAttribute("required", "")
    OStatus.forEach(e => e.setAttribute("required", ""))
  }
}

Array.from(otherCoursesCheckBox).forEach(e => {
  e.addEventListener('click', (x) => {
    hideNextDivs1(x.target)
  })
})

function hideNextDivs2(e) {
  if (e.value === 'No') {
    PostGraduationDegree.removeAttribute("required")
    PostGraduationDegree.value = ""
    pgCompleted.style.display = "none"
    pgAwaited.style.display = "none"
    PostGraduation_Status_of_Completion.forEach(e => {
      e.checked = false
      e.removeAttribute("required")
    })
    hidePostG.style.display = 'none'
  } else {
    hidePostG.style.display = 'flex'
    
    PostGraduationDegree.setAttribute("required", "")
    PostGraduation_Status_of_Completion.forEach(e => e.setAttribute("required", ""))
  }
}

Array.from(PostGraduationRadio).forEach(e => {
  e.addEventListener('click', (x) => {
    hideNextDivs2(x.target)
  })
})

let currentYear = new Date().getFullYear();
let earliestYear = 1970;
while (currentYear >= earliestYear) {
  let dateOption = document.createElement('option');
  dateOption.text = currentYear;
  dateOption.value = currentYear;
  YearofPassing10th.append(dateOption)
  
  currentYear -= 1;
}
// function clearYearOfPassing12th() {
//   YearofPassing12th.innerHTML = '';
// }

// function calculate10Year(){
//   
//   let year10pass = YearofPassing10th.value
//   let currentYear1 = new Date().getFullYear();
//   clearYearOfPassing12th();
//   while (currentYear1 >= year10pass) {
//     let dateOption = document.createElement('option');
//     dateOption.text = (currentYear1 + 1).toString();;
//     dateOption.value = (currentYear1 + 1).toString();;
//     YearofPassing12th.append(dateOption)
//     
//     currentYear1 -= 1;
//   }
// }
function calculate10Year() {
  
  let year10pass = YearofPassing10th.value;
  let currentYear1 = new Date().getFullYear();
  clearYearOfPassing12th();
  let placeholderOption = document.createElement('option');
    placeholderOption.text = 'Select Passing Year';
    placeholderOption.value = '';
    placeholderOption.disabled = true;
    YearofPassing12th.append(placeholderOption);

  while (currentYear1 > year10pass) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear1;
      dateOption.value = currentYear1;
      YearofPassing12th.append(dateOption);
      
      currentYear1 -= 1;
  }
  YearofPassing12th.selectedIndex = 0;
}
function calculate12Year() {
  let year10pass = YearofPassing12th.value;
  let currentYear1 = new Date().getFullYear();
  clearGYearofPassing();
  let placeholderOption = document.createElement('option');
    placeholderOption.text = 'Select Passing Year';
    placeholderOption.value = '';
    placeholderOption.disabled = true;
    GYearofPassing.append(placeholderOption);

  while (currentYear1 > year10pass) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear1;
      dateOption.value = currentYear1;-
      GYearofPassing.append(dateOption);
      currentYear1 -= 1;
  }
  GYearofPassing.selectedIndex = 0;
}
function calculateGradYear() {
  let year10pass = GYearofPassing.value;
  let currentYear1 = new Date().getFullYear();
  clearPYearofPassing();
  let placeholderOption = document.createElement('option');
    placeholderOption.text = 'Select Passing Year';
    placeholderOption.value = '';
    placeholderOption.disabled = true;
    PYearofPassing.append(placeholderOption);

  while (currentYear1 > year10pass) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear1;
      dateOption.value = currentYear1;-
      PYearofPassing.append(dateOption);
      currentYear1 -= 1;
  }
  PYearofPassing.selectedIndex = 0;
}
let SOCDisable = document.getElementById("SOCDisable")
function DiplomaCheck() {
  if(GraduationDegree.value == "Diploma"){
    DiplomaNotEligible.style.display = "block"
    SOCDisable.style.display = "none"
    nextBtn.disabled = true
  }else{
    DiplomaNotEligible.style.display = "none"
    SOCDisable.style.display = "block"
    nextBtn.disabled = false
  }
}
function updateMaxDate() {
  const currentDate = new Date();
  const maxDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 6, currentDate.getDate());
  
  const datepicker = document.getElementById('GCurrentPassingYear');
  datepicker.setAttribute('max', maxDate.toISOString().split('T')[0]);
}
function updateMaxDatePost() {
  const currentDate = new Date();
  const maxDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 6, currentDate.getDate());
  
  const datepicker = document.getElementById('PCurrentPassingYear');
  datepicker.setAttribute('max', maxDate.toISOString().split('T')[0]);
}

function clearYearOfPassing12th() {
  YearofPassing12th.innerHTML = '';
}
function clearGYearofPassing() {
  GYearofPassing.innerHTML = '';
}
function clearPYearofPassing() {
  PYearofPassing.innerHTML = '';
}

// function getMonths(id) {
//   let currentYear1 = new Date().getFullYear();
//   let earliestYear2 = 1970;
//   while (currentYear1 >= earliestYear2) {
//     let dateOption = document.createElement('option');
//     dateOption.text = currentYear1;
//     dateOption.value = currentYear1;
//     id.append(dateOption)
//     currentYear1 -= 1;
//   }
// }

// getMonths(GYearofPassing)
// getMonths(PYearofPassing)

function addValue(o, n) {

  let value = null
  if (n == true) {
    Array.from(o).forEach(e => {

      if (e.value == "Completed" || e.value == "Yes") {
        e.click()
      }
    })
  } else {
    Array.from(o).forEach(e => {

      if (e.value == "Result Awaited" || e.value == "No") {

        e.click()
      }
    })
  }
}

let getQuery = () => {
  let PersonalDetails = JSON.parse(localStorage.getItem("PersonalDetails"))
  if (PersonalDetails == null) {
    window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/personaldetails`
  }
  let educationalDetailsData = JSON.parse(localStorage.getItem("educationalDetails"))
  hidePostG.style.display = 'none'
  hideCourses.style.display = 'none'

  if (educationalDetailsData) {
    
    let typeTextData = { ...educationalDetailsData }
    let arr = ["Graduation_Status_of_Completion", "OStatus", "PostGraduation_Status_of_Completion", "otherCoursesCheckBox", "PostGraduationRadio"]
    for (let each of arr) {
      delete typeTextData[each]
    }
    if (typeTextData) {
      for (let data in typeTextData) {
        document.getElementById(data).value = typeTextData[data]
      }
    }
    for (let each of arr) {

      let data = document.getElementsByName(each)
      let value = educationalDetailsData[each]
      addValue(data, value)
    }
  }
}

getQuery()

function SaveToLocal() {
  
  localStorage.removeItem("educationalDetails");
  const data = document.querySelector('form').querySelectorAll("input[type='text'],input[type='date'],select");
  Array.from(data).forEach(e => {
    let id = e.getAttribute('id')
    Obj[id] = document.getElementById(id).value
  })
  Obj.Graduation_Status_of_Completion = getValue(Graduation_Status_of_Completion)
  Obj.PostGraduation_Status_of_Completion = getValue(PostGraduation_Status_of_Completion)
  Obj.OStatus = getValue(OStatus)

  Obj.otherCoursesCheckBox = getValue(otherCoursesCheckBox)
  Obj.PostGraduationRadio = getValue(PostGraduationRadio)
  
  localStorage.setItem('educationalDetails', JSON.stringify(Obj))
  window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/workingexperience`
}

function previousPage() {
  
  window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/personaldetails${getQueryStr.queryString}`
}


nextBtn.addEventListener('click', e => {
  
  //e.preventdefault()
  if (theme.PluginValidation.isFormValid() == false) {
    return
}
  // if (e.target.closest('form').checkValidity() == false) {
  //   return
  // }
  SaveToLocal()
})
previousBtn.addEventListener('click', previousPage)

