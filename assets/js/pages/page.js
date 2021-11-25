

const bannerPage = new Swiper(".JS__page-banner", {
  loop: true,
  watchOverflow: true,
  slidesPerView: 1,
  effect: "fade",
  fadeEffect: {
      crossFade: true,
  }
});

if(bannerPage){

  $('.accordion-button').on('click', (e) => {
    
    let item = e.target.closest('.accordion-item'),
    index = Array.from(item.parentElement.children).indexOf(item);

    bannerPage.slideTo(index);

  });


}

