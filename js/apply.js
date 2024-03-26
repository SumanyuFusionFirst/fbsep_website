const deptType = document.getElementById("deptType");
const PositionApplied = document.getElementById("PositionApplied");
const WillingnessforNightShift = document.getElementById(
  "WillingnessforNightShift"
);
const SourceOfInformationType = document.getElementById(
  "SourceOfInformationType"
);
const jobportalname = document.getElementById("jobportalname");
const socialmedianame = document.getElementById("socialmedianame");
const campusname = document.getElementById("campusname");
const campuslocation = document.getElementById("campuslocation");
const R1Person = document.getElementById("R1Person");
const R1Designation = document.getElementById("R1Designation");
const R1Contact = document.getElementById("R1Contact");
const JobPortals = document.getElementById("JobPortals");
const SocialMedia = document.getElementById("SocialMedia");
const Referral = document.getElementById("Referral");
const Campus = document.getElementById("Campus");
const jobOpening = document.getElementsByName("jobOpening")[0];
const Department = document.getElementById("deptType");
const Position = document.getElementById("PositionApplied");
const relavantExperience = document.getElementById("relavantExperience");
const previouslyWorked = document.getElementsByName("previouslyWorked");
// const NightShiftNo = document.getElementById("NightShift-No");
const WarningDayShift = document.getElementById("WarningDayShift");
const dayShiftRadioButton = document.getElementById('NightShift-No');
// const nightShiftRadioButton = document.getElementById('NightShift-Yes');
const positionDetailSubmit = document.getElementById("positionDetailSubmit");

dayShiftRadioButton.addEventListener('change', function() {
  if (dayShiftRadioButton.checked) {
      WarningDayShift.style.display = "block";
      positionDetailSubmit.disabled = true;
  }
});
WillingnessforNightShift.addEventListener('change', function() {
  if (WillingnessforNightShift.checked) {
      WarningDayShift.style.display = "none";
      positionDetailSubmit.disabled = false;
  }
});
// if(NightShiftNo.value == "No"){
  
// }
let form = document.getElementById("positionDetails");

let displayNone = () => {
  JobPortals.style.display = "none";
  Array.from(JobPortals.querySelectorAll("input, select")).forEach((e) => {
    e.value = "0";
  });
  SocialMedia.style.display = "none";
  Array.from(SocialMedia.querySelectorAll("input, select")).forEach((e) => {
    e.value = "0";
  });
  Referral.style.display = "none";
  Array.from(Referral.querySelectorAll("input, select")).forEach((e) => {
    e.value = "0";
  });
  Campus.style.display = "none";
  Array.from(Campus.querySelectorAll("input, select")).forEach((e) => {
    e.value = "0";
  });
};

displayNone();

let displayData = (e) => {
  displayNone();
  document.getElementById(`${e}`).style.display = "flex";
  let values = document
    .getElementById(`${e}`)
    .querySelectorAll("input, select");
  Array.from(values).forEach((e) => {
    e.value = "";
  });
};

jobOpening.addEventListener("change", (e) => {
  let value = e.target.value;
  switch (value) {
    case "Job Portals":
      displayData("JobPortals");
      break;
    case "Social Media":
      displayData("SocialMedia");
      break;
    case "Referral":
      displayData("Referral");
      break;
    case "Campus":
      displayData("Campus");
      break;
    default:
      displayNone();
  }
});

let getQuery = () => {

  const urlSearchParams = new URLSearchParams(window.location.search);
  const params = Object.fromEntries(urlSearchParams.entries());

  // let CurrentPosition = JSON.parse(localStorage.getItem("CurrentPosition"))
  // if (params.dept && params.position) {
    // Department.innerHTML = `<option value="${CurrentPosition.deptType}" selected>${CurrentPosition.deptType}</option>`
    // Department.classList.add('is-valid')
    // Position.innerHTML = `<option value="${CurrentPosition.PositionApplied}" selected>${CurrentPosition.PositionApplied}</option>`
    // Position.classList.add('is-valid')
    // if(CurrentPosition.relavantExperience && CurrentPosition.relavantExperience != ""){
    //   relavantExperience.textContent = CurrentPosition.relavantExperience
    //   relavantExperience.closest(".row").style.display = "flex"
    // }
  // } else {
  //   window.location.href = `${document
  //     .getElementById("myBase")
  //     .getAttribute("data-href")}/current-openings`;
  // }
  
  if(localStorage.getItem("campaignDetail")){
    let campaignDetail = JSON.parse(localStorage.getItem("campaignDetail"));
    if (campaignDetail !== "" && campaignDetail !==  null) {
      const y = new URLSearchParams(JSON.parse(localStorage.getItem("campaignDetail")).campaignDetail)
      document.getElementById(`SourceOfInformationType`).value = 'Social Media';
      const firstLetter = y.get('utm_source').charAt(0).toUpperCase();
      const result = firstLetter + y.get('utm_source').slice(1) + ".com";
      document.getElementById(`socialmedianame`).value = result
      // document.getElementById(`socialmedianame`).value = JSON.parse(localStorage.getItem("campaignDetail")).campaignDetail.split("&utm_medium")[0]?.split('?utm_source=')[1]
      document.getElementById(`SourceOfInformationType`).disabled = true;
    }
  }
  
  let PersonalDetails = JSON.parse(localStorage.getItem("positionDetails"));
  if (PersonalDetails) {
    document.getElementById(`SourceOfInformationType`).value =
      PersonalDetails.SourceOfInformationType;
    if (PersonalDetails.previouslyWorked) {
      Array.from(previouslyWorked).forEach((e) => {
        if (e.value == PersonalDetails.previouslyWorked) {
          e.checked = true;
        }
      });
    }
    try {
      displayData(PersonalDetails.SourceOfInformationType.replaceAll(" ", ""));
    } catch (e) {
      console.log("Ignore");
    }
    let arr = [
      "jobportalname",
      "socialmedianame",
      "campusname",
      "campuslocation",
      "R1Person",
      "R1Designation",
      "R1Contact",
    ];
    for (let i = 0; i < arr.length; i++) {
      if (PersonalDetails[arr[i]] != "0") {
        document.getElementById(`${arr[i]}`).value = PersonalDetails[arr[i]];
      }
    }
  }
};

getQuery();



positionDetailSubmit.addEventListener("click", (e) => {
  
  if (form.checkValidity() == false) {
    return;
  } else {
    
    let positionDetails = new Object();
    let inputs = document
      .querySelectorAll("#positionDetails div div")[0]
      .querySelectorAll("input, select");
    // let positionDetails = new Object()
    // positionDetails.deptType =
    // positionDetails.PositionApplied =
    // positionDetails.WillingnessforNightShift =
    // positionDetails.SourceOfInformationType =
    // positionDetails.jobportalname =
    // positionDetails.socialmedianame =
    // positionDetails.campusname =
    // positionDetails.campuslocation =
    // positionDetails.R1Person =
    // positionDetails.R1Designation =
    // positionDetails.R1Contact =
    // "jobportalname","socialmedianame", "campusname", "campuslocation", "R1Person", "R1Designation", "R1Contact"

    Array.from(inputs).forEach((e, i) => {
      
      let id = e.getAttribute("id");
      if (id == "previouslyWorked") {
        arr = document.getElementsByName(id);
        if (arr[0].closest(".row").style.display == "none") {
          positionDetails[id] = "";
        } else {
          Array.from(arr).forEach((e) => {
            if (e.checked == true) {
              positionDetails[id] = e.value;
            }
          });
        }
      } else {
        
        if (id == "WillingnessforNightShift") {
          positionDetails[id] = document.getElementById(id).checked;
          // WillingnessforNightShift.value = true
        } else if(id == "NightShift-No") {
          positionDetails[id] = document.getElementById(id).checked;
          // WillingnessforNightShift.value = false
        }
        else{
          positionDetails[id] = document.getElementById(id).value;
        }
        console.log(id);
      }
    });

    let preiousQuery = document
      .querySelector("[data-query]")
      .getAttribute("data-query");
      
    positionDetails["queryString"] = preiousQuery;
    localStorage.setItem("positionDetails", JSON.stringify(positionDetails));
  }
});
