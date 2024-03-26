// Services We offer

// window.onload = function() {
//   let modalId = window.location.hash;
//   modalId = modalId.slice(1,modalId.length) 
//   if (modalId === 'FreeAgencyAudit') {
//     const modalElement = document.getElementById(modalId);
//     if (modalElement) {
//       const modal = document.getElementById("FreeAgencyAudit")
//       const bootstrapModal = new bootstrap.Modal(modal);
//       bootstrapModal.show();
//     }
//   }
// };

function ShowDiv(e) {
  Array.from(document.getElementById('contentContainer').childNodes).filter(e => e.classList).forEach(e => e.classList.add("d-none"))
  Array.from(document.getElementsByClassName("divider-bottom-border")).forEach(e => e.classList.remove("btn-primary"))
  const divId = e.id.replace("Btn", "") + "Content";
  Array.from(document.getElementsByClassName("divider-bottom-border")).forEach(e => e.childNodes[1].classList.add("d-none"))
  if (divId) {
    e.classList.add("btn-primary")
    document.getElementById(divId).classList.remove("d-none")
    e.childNodes[1].classList.remove("d-none")
  }
}

function hideMenu(e) {
  const navbar = document.getElementById("navbarSupportedContent")
  if(navbar.classList.contains("d-none")){
    navbar.classList.remove("d-none")
  } else {
    navbar.classList.add("d-none")

  }
}

function SetColor(e) {
  Array.from(document.getElementsByClassName("nav-link")).forEach(e => e.classList.remove("active"))
  e.classList.add("active")
  document.getElementsByClassName('navbar-toggler')[0].click()
}

function closeAllModal() {
  Array.from(document.getElementsByClassName("btn-close ms-auto position-absolute z-3 modalCrossButton")).forEach(e => e.click())
}

// function SubmitCaseStudyForm(e) {
//   const CSfullName = document.getElementById("CSfullName")
//   const CScompanyEmail = document.getElementById("CScompanyEmail")
//   const CScompanyEmailHelpBlock = document.getElementById("CScompanyEmailHelpBlock")
//   const CSfullNameHelpBlock = document.getElementById("CSfullNameHelpBlock")
//   CSfullNameHelpBlock.classList.add("d-none")
//   CScompanyEmailHelpBlock.classList.add("d-none")
//   if (CSfullName.value.length < 3) {
//     CSfullNameHelpBlock.classList.remove("d-none")
//     event.preventDefault()
//   } else {
//     CSfullNameHelpBlock.classList.add("d-none")
//     event.preventDefault()
//   }
//   if (!CScompanyEmail.value) {
//     CScompanyEmailHelpBlock.classList.remove("d-none")
//     event.preventDefault()
//   } else if (! /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(CScompanyEmail.value)) {
//     CScompanyEmailHelpBlock.innerHTML = "* Please enter a correct email id!"
//     CScompanyEmailHelpBlock.classList.remove("d-none")
//     event.preventDefault()
//   } else {
//     CScompanyEmailHelpBlock.classList.add("d-none")
//     event.preventDefault()
//   }
//   closeAllModal()
//   showThankyouModal()
//   event.preventDefault()
// }

// function showThankyouModal() {
//   const modal = document.getElementById("CSSThankYou")
//   const bootstrapModal = new bootstrap.Modal(modal);
//   bootstrapModal.show();
// }


///Counter Jquery

$('.counting').each(function () {
  var $this = $(this),
    countTo = $this.attr('data-count');

  $({ countNum: $this.text() }).animate({
    countNum: countTo
  },
    {
      duration: 3000,
      easing: 'linear',
      step: function () {
        $this.text(Math.floor(this.countNum));
      },
      complete: function () {
        $this.text(this.countNum);
      }
    });
});

////
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    center: false,
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
  });
});

const swiper = new Swiper('.swiper-hero', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  effect: 'slide',

  // If we need pagination
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },

  // Navigation arrows
  // navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  // },

});