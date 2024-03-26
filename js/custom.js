document.querySelector(".header-container").style.height = "85px";
document.querySelector(".header-body").style.position = "fixed";
document.querySelector(".header-effect-shrink").style.height = "90px";
window.addEventListener("DOMContentLoaded", (event) => {
  const loadingOverlay = document.querySelector(".loading-overlay");
  setTimeout(() => {
    loadingOverlay.style.visibility = "hidden";
    loadingOverlay.style.opacity = "0";
  }, 150);
});

// CLOSE THE COOKIE MESSAGE WHEN THE USER CLICKS ON THE "THAT'S FINE" BUTTON
document.querySelector("#cookies-btn").addEventListener("click", () => {
  document.querySelector("#cookies").style.display = "none";
  // CALL THE SETCOOKIE() FUNCTION
  setCookie("cookie", true, 30);
});

// CREATES A COOKIE (EXPIRES IN 30 DAYS)
function setCookie(cName, cValue, expDays) {
  let date = new Date();
  date.setTime(date.getTime() + expDays * 24 * 60 * 60 * 1000);
  const expires = "expires=" + date.toUTCString();
  document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

// GRAB THE VALUE OF THE COOKIE
function getCookie(cName) {
  const name = cName + "=";
  const cDecoded = decodeURIComponent(document.cookie);
  const cArr = cDecoded.split("; ");
  let res;
  cArr.forEach((val) => {
    if (val.indexOf(name) === 0) res = val.substring(name.length);
  });
  return res;
}

// CHECK IF A COOKIE EXISTS
function cookieMessage() {
  // IF A COOKIE DOESN'T EXIST THEN DISPLAY THE COOKIE MESSAGE
  if (!getCookie("cookie"))
    document.querySelector("#cookies").style.display = "block";
  document.querySelector("#cookies").style.zIndex = "5";
}

// CALL THE COOKIEMESSAGE() FUNCTION ON PAGE LOAD
window.addEventListener("load", cookieMessage);
a = document.getElementsByClassName("vide-video-wrapper");
a[0].getElementsByTagName("video")[0].style.width = `${window.innerWidth}px`;
window.onresize = () => {
  a[0].getElementsByTagName("video")[0].style.width = `${window.innerWidth}px`;
};

setTimeout((e) => {
  console.clear();
}, 1000);

function fbs_click() {
  var pageLink = window.location.href;
  var pageTitle = String(document.title).replace(/\&/g, "%26");
  window.open(
    `http://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`,
    "sharer",
    "toolbar=0,status=0,width=626,height=436"
  );
  return false;
}

function tbs_click() {
  var pageLink = window.location.href;
  var pageTitle = String(document.title).replace(/\&/g, "%26");
  window.open(
    `https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}`,
    "sharer",
    "toolbar=0,status=0,width=626,height=436"
  );
  return false;
}

function lbs_click() {
  var pageLink = window.location.href;
  var pageTitle = String(document.title).replace(/\&/g, "%26");
  window.open(
    `https://www.linkedin.com/shareArticle?mini=true&url=${pageLink}&title=${pageTitle}`,
    "sharer",
    "toolbar=0,status=0,width=626,height=436"
  );
  return false;
}

function rbs_click() {
  var pageLink = window.location.href;
  var pageTitle = String(document.title).replace(/\&/g, "%26");
  window.open(
    `https://www.reddit.com/submit?url=${pageLink}`,
    "sharer",
    "toolbar=0,status=0,width=626,height=436"
  );
  return false;
}

function pbs_click() {
  var pageLink = window.location.href;
  var pageTitle = String(document.title).replace(/\&/g, "%26");
  window.open(
    `https://www.pinterest.com/pin/create/button/?&text=${pageTitle}&url=${pageLink}&description=${pageTitle}`,
    "sharer",
    "toolbar=0,status=0,width=626,height=436"
  );
  return false;
}
