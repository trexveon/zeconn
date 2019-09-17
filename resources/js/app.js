require('./bootstrap');

$(document).ready(function(){

      $('.slidestop').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  // autoplay: true,
	  autoplaySpeed: 7000,
	  prevArrow:$('.anterior'),
	  nextArrow:$('.proximo'),
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
	});


    $('.anuncioss').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 7000,
	  prevArrow:$('.esqemp'),
	  nextArrow:$('.diremp'),
	  infinite: true,
	  speed: 500,
	  lazyLoad: 'ondemand',
	   responsive: [
    // {
    //   breakpoint: 1024,
    //   settings: {
    //     slidesToShow: 3,
    //     slidesToScroll: 3,
    //     infinite: true,
    //     dots: true
    //   }
    // },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});

 });

T
var a = document.querySelector('.a').style.display = 'flex';
