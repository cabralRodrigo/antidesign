//carousel
document.addEventListener("DOMContentLoaded", function (event) {

  const brasilTour = document.querySelector(".JS__brasil-tour");
  if(brasilTour){
    new Swiper (brasilTour, {
      slidesPerView: 3,
      spaceBetween: 22,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
      },
    });
  }

});