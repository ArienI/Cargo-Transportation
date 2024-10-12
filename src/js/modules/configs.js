const smoothScrollConfig = {
  speed: 900,
  speedAsDuration: true,
  updateURL: false,
};

const observerConfig = {
  scrollTop: {
    rootMargin: '600px',
    threshold: 1,
  },
};

const sliderConfig = {
  default: {
    slidesPerView: 1,
    spaceBetween: 30,
    watchSlidesProgress: true,
  },
  mainBanner: {
    speed: 800,
    parallax: true,
    loop: true,
    autoplay: {
      delay: 8000,
    },
    navigation: {
      prevEl: '#main-banner [data-to-slide="prev"]',
      nextEl: '#main-banner [data-to-slide="next"]',
    },
    pagination: {
      el: '#main-banner .slider__pagination',
      clickable: false,
    },
    breakpoints: {
      1200: {
        speed: 1200,
      },
    },
  },
};

export {
  smoothScrollConfig,
  observerConfig,
  sliderConfig
};
