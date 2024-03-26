const caseName = document.currentScript.getAttribute("fileName");
const getLink = document.querySelector("[type='submit']");
const demoform = document.getElementById("demo-form");
const CasePDF = document.getElementById("CasePDF");
//let caseName = "Insurance1"
debugger
let localData = JSON.parse(localStorage.getItem(caseName));
let getUrl = document.getElementById("myBase").getAttribute("data-href");

checkLocalStorage();

function checkLocalStorage() {
  const urlSearchParams = new URLSearchParams(window.location.search);
  const params = Object.fromEntries(urlSearchParams.entries());
  if (params.q) {
    let data = JSON.parse(atob(params.q));
    if (data.key && new Date() < new Date(data.expiryDate)) {
      let a = document.querySelector(".custom-read-more-style-1");
      let data = document.querySelectorAll(".readmore-overlay");
      let AccessNow = document.querySelector('[data-bs-target="#formModal"]');
      //AccessNow.style.display = "none"
      AccessNow.remove();
      //Array.from(data).forEach(e => e.style.display = "none")
      Array.from(data).forEach((e) => e.remove());
      a.style.height = "max-content";
      a.style.overflowY = "auto";
    } else {
      let extraData = document.getElementById("extraData");
      extraData.remove();
    }
  }
}

function randomStr(len, arr) {
  var ans = "";
  for (var i = len; i > 0; i--) {
    ans += arr[Math.floor(Math.random() * arr.length)];
  }
  return ans;
}

console.log(randomStr(30, "0123456789qwertyuioplkjhgfdsazxcvbnm"));
getLink.addEventListener("click", (e) => {
  debugger
  e.preventDefault();
  if (demoform.checkValidity() == false) {
    return;
  } else {
    let key = randomStr(30, "0123456789qwertyuioplkjhgfdsazxcvbnm");
    let date = new Date();
    let obj = new Object();
    obj.expiryDate = date.setDate(date.getDate() + 7);
    obj.key = key;
    let currentUrlwithKey = `${document
      .getElementById("myBase")
      .getAttribute("data-href")}/${window.location.href.split("/")[3]}/${
      window.location.href.split("/")[4]
    }?q=${btoa(JSON.stringify(obj))}`;
    localStorage.setItem(caseName, JSON.stringify(obj));
    var name = demoform.querySelectorAll("input")[0].value;
    var email = demoform.querySelectorAll("input")[1].value;
    debugger
    // console.log(CasePDF.value)
    if(CasePDF.value != 0){
      var URL = CasePDF.value;
    }else{
      var URL = currentUrlwithKey;
      
    }
    // var URL = currentUrlwithKey;
    debugger
    var send_data = { email1: email, name1: name, url: URL };
    a = document.querySelectorAll("#getLink");
    a[0].closest("#formModal").style.display = "none";
    document.querySelector(".loading-overlay").classList.remove("loading-bg");
    document.querySelector(".loading-overlay").classList.add("loading-tp-bg");
    document.querySelector(".loading-overlay").style.visibility = "visible";
    document.querySelector(".loading-overlay").style.opacity = "1";
    document.getElementById("messagesuccesss").innerHTML =
      "Loading please wait...";
    sendEmail(send_data);
    //window.open(currentUrlwithKey, '_blank');
  }
});

function sendEmail(send_data) {
  $.ajax({
    url: `${getUrl}/php/cases`,
    type: "post",
    dataType: "json",
    data: send_data,
    success: function (result) {
      if (result.Data == "sent") {
        document.querySelector(".loading-overlay").style.opacity = "0";
        document.querySelector(".loading-overlay").style.visibility = "hidden";
        document
          .querySelector(".loading-overlay")
          .classList.remove("loading-tp-bg");
        document.querySelector(".loading-overlay").classList.add("loading-bg");
        document.getElementById("messagesuccesss").innerHTML =
          "Loading please wait...";
        window.location.href = `${document
          .getElementById("myBase")
          .getAttribute("data-href")}/mail-success`;
      }
    },
    error: function (result) {
      document.querySelector(".loading-overlay").style.opacity = "0";
      document.querySelector(".loading-overlay").style.visibility = "hidden";
      document
        .querySelector(".loading-overlay")
        .classList.remove("loading-tp-bg");
      document.querySelector(".loading-overlay").classList.add("loading-bg");
      console.log(result);
      alert("Internal Server Error");
    },
  });
}
