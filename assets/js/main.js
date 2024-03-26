function ShowDiv(e) {
  Array.from(document.getElementById('contentContainer').childNodes).filter(e => e.classList).forEach(e => e.classList.add("d-none"))
  Array.from(document.getElementsByClassName("divider-bottom-border")).forEach(e => e.classList.remove("btn-primary"))
  Array.from(document.getElementsByClassName("divider-bottom-border")).forEach(e => e.childNodes[1].classList.add("d-none"))
  const divId = e.id.replace("Btn", "") + "Content";
  if (divId) {
    e.classList.add("btn-primary")
    document.getElementById(divId).classList.remove("d-none")
    e.childNodes[1].classList.remove("d-none")
  }
}


// Counter

$('.counting').each(function () {
    var $this = $(this),
      countTo = $this.attr('data-count');
  
    $({ countNum: $this.text() }).animate({
      countNum: countTo
    },
      {
        duration: 1000,
        easing: 'linear',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
        }
      });
  });


  
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
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


document.querySelector(".header-effect-shrink").style.height = "auto";
