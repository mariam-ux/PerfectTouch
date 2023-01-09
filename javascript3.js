const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop:true,
    autoplay:true,
    effect:"fade",
    speed: 600,
    parallax: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
