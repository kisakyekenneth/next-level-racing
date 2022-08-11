const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobliemmenu);

function mobliemmenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  dots: false,
  autoplay: true,
  slideTransition: "linear",
  autoplayTimeout: 4000,
  autoplaySpeed: 4000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$("#time").countdown("2024/01/01", function (event) {
  $(this).html(
    event.strftime(
      '<div class="clock"><span>%d</span> <p>Days</p></div> ' +
        '<div class="clock"><span>%H</span> <p>Hours</p></div> ' +
        '<div class="clock"><span>%M</span> <p>Minutes</p></div> ' +
        '<div class="clock"><span>%S</span> <p>Seconds</p></div> '
    )
  );
});
