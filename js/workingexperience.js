buddyPhone = document.getElementById("buddyPhone");
buddyEmail = document.getElementById("buddyEmail");
buddyName = document.getElementById("buddyName");
previouslyWorked = document.getElementsByName("previouslyWorked");
WE1Departement = document.getElementById("WE1Departement");
WE1CompanyName = document.getElementById("WE1CompanyName");
WE1LastDrawnSalary = document.getElementById("WE1LastDrawnSalary");
WE1ExperienceInYears = document.getElementById("WE1ExperienceInYears");
WE1RoleandResposibilities = document.getElementById(
  "WE1RoleandResposibilities"
);
WE1LastDrawnSalary = document.getElementById("WE1LastDrawnSalary");
workingExperienceDiv = document.getElementById("workingExperienceDiv");
WorkingExperienceRadio = document.getElementsByName("WorkingExperienceRadio");
submitBtn = document.getElementById("submitBtn");
form = document.getElementById("workingExperience");

let copyText = document.querySelectorAll(".copy-text");
Array.from(copyText).forEach((e) => {
  e.querySelector("button").addEventListener("click", function () {
    let input = e.querySelector("input.text");
    input.select();
    document.execCommand("copy");
    e.classList.add("active");
    window.getSelection().removeAllRanges();
    setTimeout(function () {
      e.classList.remove("active");
    }, 2500);
  });
});

let campaignDetail = JSON.parse(localStorage.getItem("campaignDetail"));

let getQueryStr = JSON.parse(localStorage.getItem("positionDetails"));
if (getQueryStr) {
  PositionDetailsHref = document.getElementById("PositionDetailsHref");
  PositionDetailsHref.setAttribute(
    "href",
    `${document
      .getElementById("myBase")
      .getAttribute("data-href")}/positiondetails${getQueryStr.queryString}`
  );
  PersonalDetailsHref = document.getElementById("PersonalDetailsHref");
  PersonalDetailsHref.setAttribute(
    "href",
    `${document
      .getElementById("myBase")
      .getAttribute("data-href")}/personaldetails${getQueryStr.queryString}`
  );
}

let getQuery = () => {
  let educationalDetails = JSON.parse(
    localStorage.getItem("educationalDetails")
  );
  if (educationalDetails == null) {
    window.location.href = `${document
      .getElementById("myBase")
      .getAttribute("data-href")}/educationaldetails`;
  }
  let workingExperienceData = JSON.parse(
    localStorage.getItem("workingExperience")
  );
  if (workingExperienceData) {
    for (let data in workingExperienceData) {
      if (data == "previouslyWorked" || data == "WorkingExperienceRadio") {
        Array.from(document.getElementsByName(data)).forEach((e) => {
          if (e.value == workingExperienceData[data]) {
            e.click();
          }
        });
        continue;
      }
      if (data != "previouslyWorked" || data != "WorkingExperienceRadio") {
        document.getElementById(data).value = workingExperienceData[data];
        continue;
      }
    }
  }
};

function getValue(obj) {
  Array.from(obj).forEach((e) => {
    if (e.checked == true) {
      return e.value;
    } else {
      return "";
    }
  });
}

function hideNextDivs1(e) {
  if (e.value === "No") {
    workingExperienceDiv.classList.add("d-none");
    workingExperienceDiv.querySelectorAll("input").forEach((e) => {
      e.removeAttribute("required");
      e.value = "";
    });
  } else {
    workingExperienceDiv.classList.remove("d-none");
    workingExperienceDiv.querySelectorAll("input").forEach((e) => {
      e.setAttribute("required", "");
    });
  }
}

Array.from(WorkingExperienceRadio).forEach((e) => {
  e.addEventListener("click", (x) => {
    hideNextDivs1(x.target);
  });
});

function getValue(obj) {
  let data = "";
  Array.from(obj).forEach((e) => {
    if (e.checked == true) {
      data = e.value;
    }
  });
  return data;
}

function SaveToLocal() {
  
  const data = document
    .querySelector("form")
    .querySelectorAll("input[type='text']");
  let Obj = new Object();
  Array.from(data).forEach((e) => {
    let id = e.getAttribute("id");
    Obj[id] = document.getElementById(id).value;
  });
  Obj.previouslyWorked = document.querySelector(
    'input[name="previouslyWorked"]:checked'
  ).value;
  Obj.WorkingExperienceRadio = getValue(WorkingExperienceRadio);
  localStorage.setItem("workingExperience", JSON.stringify(Obj));
  sendDataToApi();
}

function getNextDayOfTheWeek(
  dayName,
  excludeToday = true,
  refDate = new Date()
) {
  const dayOfWeek = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"].indexOf(
    dayName.slice(0, 3).toLowerCase()
  );
  if (dayOfWeek < 0) return;
  refDate.setHours(0, 0, 0, 0);
  refDate.setDate(
    refDate.getDate() +
      +!!excludeToday +
      ((dayOfWeek + 7 - refDate.getDay() - +!!excludeToday) % 7)
  );
  return refDate;
}

function sendDataToApi() {
  let PersonalDetails = JSON.parse(localStorage.getItem("PersonalDetails"));
  let educationalDetails = JSON.parse(
    localStorage.getItem("educationalDetails")
  );
  let CurrentPosition = JSON.parse(localStorage.getItem("CurrentPosition"));
  let workingExperience = JSON.parse(localStorage.getItem("workingExperience"));
  let positionDetails = JSON.parse(localStorage.getItem("positionDetails"));
  
  // if(localStorage.getItem("campaignDetail")){

  // }
  let campaignDetail = JSON.parse(localStorage.getItem("campaignDetail"));

  let soruceTypeEnum = {
    "Job Portals": "1",
    // Newspapers: "2",
    "Social Media": "3",
    "Walk-In": "4",
    Referral: "5",
    Campus: "6",
    "Job Fair": "7",
    Billboard: "8",
    // Radio: "9",
    Consultancy: "10",
  };
  let jobTypeEnum = {
    "IT/Software": "2",
    BPO: "3",
    HR: "4",
    Networking: "5",
    Accounts: "6",
    Admin: "7",
    "Business Development": "8",
    RPO: "9",
    Marketing: "10",  
    "L&D": "11",
  };

  let data = {
    ...PersonalDetails,
    ...educationalDetails,
    ...CurrentPosition,
    ...positionDetails,
    ...workingExperience,
    ...campaignDetail
  };

  //data.DateOfInterview = getNextDayOfTheWeek("Saturday", false).toLocaleDateString()
  //data.deptType = jobTypeEnum[data.deptType]
  data.DateOfInterview = "30-March-2024";
  data.SourceOfInformationType = soruceTypeEnum[data.SourceOfInformationType];
  
  data.WillingnessforNightShift == true
    ? (data.WillingnessforNightShift = "Yes")
    : (data.WillingnessforNightShift = "No");
  data.PostGraduation_Status_of_Completion == true &&
  data.PostGraduation_Status_of_Completion == "none"
    ? (data.PostGraduation_Status_of_Completion = "Completed")
    : (data.PostGraduation_Status_of_Completion = "Result Awaited");
  data.Graduation_Status_of_Completion == true &&
  data.Graduation_Status_of_Completion == "none"
    ? (data.Graduation_Status_of_Completion = "Completed")
    : (data.Graduation_Status_of_Completion = "Result Awaited");
  data.OStatus == true && data.OStatus == "none"
    ? (data.OStatus = "Completed")
    : (data.OStatus = "Result Awaited");
  (data.WE2CompanyName = ""),
    (data.WE2Departement = ""),
    (data.WE2RoleandResposibilities = ""),
    (data.WE2LastDrawnSalary = ""),
    (data.WE2ExperienceInYears = ""),
    (data.aadhaar = data.aadhaar = data.aadhaar.replaceAll("-", ""));
  // data.spouseName = ""
  //pending

  data.appliedBefore = "";
  // data.home_phone = ""
  // data.PCurrentPassingYear = ""
  data.fatherName = data.fathername;
  console.log(data);

  for (let e in data) {
    if (data[e] == "0") {
      data[e] = "";
    }
  }

  let obj = {
    deptType: "3",

    PositionApplied: "Associate",

    appliedBefore: "",

    WillingnessforNightShift: "Yes",

    SourceOfInformationType: "5",

    jobportalname: "",

    socialmedianame: "",

    campusname: "",

    campuslocation: "",

    firstName: "test",

    lastName: "test",

    fatherName: "test",

    gender: "Male",

    email: "ganshyamvy11d2as31071997@gmail.com",

    dob: "01/13/2023",

    aadhaar: "165676556565",

    maritalStatus: "Single",

    spouseName: "",

    mobile: "6565566565",

    home_phone: "6565566565",

    currentAddress: "test",

    State: "Daman & Diu",

    City: "Daman",

    pin: "232323",

    permanentAddress: "test",

    permanentState: "Daman & Diu",

    permanentCity: "Daman",

    permanentPin: "232323",

    SchoolName10th: "test",

    Board10th: "test",

    Percentage10th: "89",

    YearofPassing10th: "1991",

    SchoolName12th: "test",

    Board12th: "test",

    Percentage12th: "67",

    YearofPassing12th: "1994",

    GraduationDegree: "BA",

    Graduation_Status_of_Completion: "Completed",

    GPercentage: "89",

    GBoard: "test",

    GYearofPassing: "1986",

    GCurrentSemester: "",

    PostGraduationDegree: "MA",

    PBoard: "test",

    PostGraduation_Status_of_Completion: "Completed",

    PPercentage: "90",

    PYearofPassing: "1989",

    PCurrentSemester: "",

    PCurrentPassingYear: "",

    otherCourses: "test",

    OStatus: "Completed",

    WE1CompanyName: "",

    WE1Departement: "",

    WE1RoleandResposibilities: "",

    WE1LastDrawnSalary: "",

    WE1ExperienceInYears: "",

    WE2CompanyName: "",

    WE2Departement: "",

    WE2RoleandResposibilities: "",

    WE2LastDrawnSalary: "",

    WE2ExperienceInYears: "",

    previouslyWorked: "No",

    DateOfInterview: " 14-January-2023",

    R1Person: "test",

    R1Designation: "test",

    R1Contact: "8778878787",

    image_url: "",

    resume_url: "",

    buddyName: "test",

    buddyEmail: "test@test.com",

    buddyPhone: "7877878878",
  };

  //   var settings = {
  //     "url": "https://erp.fusionfirst.com/careers",
  //     "method": "POST",
  //     "timeout": 0,
  //     "headers": {
  //         "Content-Type": "application/json",
  //         "Cookie": "connect.sid=s%3AVl73BKWygguS6YG1RMrsHe_9KED7OARU.3G6shXAIJ5M240PYjHUnfK7kpBWccJHxpa45WA6wVyQ"
  //     },
  //     "data": JSON.stringify({
  //         "email": "ganshyamvyasdddd31071997@gmail.com",
  //         "emaisdsdsdl": "ganshyamvyas31071997@gmail.com",
  //         "aadhaar": "123456789"
  //     }),
  // };
  // $.ajax(settings).done(function(response) {
  //     console.log(response);
  // });

  var settings = {
    url: "https://erp.fusionfirst.com/careers",
    method: "POST",
    timeout: 0,
    headers: {
      "Content-Type": "application/json",
      Cookie:
        "connect.sid=s%3AVl73BKWygguS6YG1RMrsHe_9KED7OARU.3G6shXAIJ5M240PYjHUnfK7kpBWccJHxpa45WA6wVyQ",
    },
    data: JSON.stringify(data),
  };
  document.querySelector(".loading-overlay").classList.remove("loading-bg");
  document.querySelector(".loading-overlay").classList.add("loading-tp-bg");
  document.querySelector(".loading-overlay").style.visibility = "visible";
  document.querySelector(".loading-overlay").style.opacity = "1";
  document.getElementById("messagesuccesss").innerHTML =
    "Loading please wait...";
  $.ajax(settings).done(function (response) {
    console.log(response);

    if (response.Success == true) {
      let obj = new Object();

      obj.Success = true;

      if (response.hasOwnProperty("ID") && response.hasOwnProperty("Email")) {
        obj.ID = response["ID"];
        obj.Email = response["Email"];
      }

      localStorage.clear();
      document.querySelector(".loading-overlay").style.opacity = "0";
      document.querySelector(".loading-overlay").style.visibility = "hidden";
      document
        .querySelector(".loading-overlay")
        .classList.remove("loading-tp-bg");
      document.querySelector(".loading-overlay").classList.add("loading-bg");

      window.location.href = `${document
        .getElementById("myBase")
        .getAttribute("data-href")}/career-thankyou?q=${btoa(
        JSON.stringify(obj)
      )}`;
    } else {
      let obj = new Object();

      obj.Success = false;

      if (response.hasOwnProperty("ID") && response.hasOwnProperty("Email")) {
        obj.ID = response["ID"];
        obj.Email = response["Email"];
      }
      obj.ErrorMessage = response.ErrorMessage;

      localStorage.clear();
      document.querySelector(".loading-overlay").style.opacity = "0";
      document.querySelector(".loading-overlay").style.visibility = "hidden";
      document
        .querySelector(".loading-overlay")
        .classList.remove("loading-tp-bg");
      document.querySelector(".loading-overlay").classList.add("loading-bg");

      window.location.href = `${document
        .getElementById("myBase")
        .getAttribute("data-href")}/career-thankyou?q=${btoa(
        JSON.stringify(obj)
      )}`;
    }

    // if (response.Success == true) {
    //   let className = "text-color-success";
    //   const showResponse = document.querySelectorAll("#showResponse input");
    //   const formSuccess = document.querySelector("#formSuccess");
    //   const formData = document.querySelector("#formData");
    //   formSuccess.style.display = "block";
    //   formData.style.display = "none";
    //   formSuccess.querySelector("h1").classList.add(className);
    //   formSuccess.querySelector("h1").textContent =
    //     "Congratulations! Your application has been successfully submitted.";
    //   if (response.hasOwnProperty("ID") && response.hasOwnProperty("Email")) {
    //     document.querySelector("#showResponse").style.display = "block";
    //     showResponse[0].value = response["ID"];
    //     showResponse[1].value = response["Email"];
    //   }
    // } else {
    //   const showResponse = document.querySelectorAll("#showResponse input");
    //   let className = "text-color-danger";
    //   const formSuccess = document.querySelector("#formSuccess");
    //   const formData = document.querySelector("#formData");
    //   formSuccess.style.display = "block";
    //   formData.style.display = "none";
    //   formSuccess.querySelector("h1").classList.add(className);
    //   formSuccess.querySelector("h1").textContent = response.ErrorMessage;
    //   if (response.hasOwnProperty("ID") && response.hasOwnProperty("Email")) {
    //     document.querySelector("#showResponse").style.display = "block";
    //     showResponse[0].value = response["ID"];
    //     showResponse[1].value = response["Email"];
    //   }
    // }
    //localStorage.clear();
    document.querySelector(".loading-overlay").style.opacity = "0";
    document.querySelector(".loading-overlay").style.visibility = "hidden";
    document
      .querySelector(".loading-overlay")
      .classList.remove("loading-tp-bg");
    document.querySelector(".loading-overlay").classList.add("loading-bg");
  });
}

submitBtn.addEventListener("click", (e) => {
  if (e.target.closest("form").checkValidity() == false) {
    return;
  }
  SaveToLocal();
  e.preventDefault();
});

function previousPage() {
  window.location.href = `${document
    .getElementById("myBase")
    .getAttribute("data-href")}/educationaldetails`;
}

getQuery();

previousBtn.addEventListener("click", previousPage);
