jQuery(document).ready(function($){
  $('.slider-experts').slick({
    autoplay: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    vertical: false,
    touchMove: true,
    rows: 1,
    pauseOnHover: true,
    pauseOnFocuse: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  }); 
  $('.slider-partners').slick({
    autoplay: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    dots: false,
    arrows: false,
    vertical: false,
    touchMove: true,
    rows: 1,
    pauseOnHover: true,
    pauseOnFocuse: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
    ]
  }); 
})