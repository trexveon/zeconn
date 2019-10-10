require('./bootstrap');

$(document).ready(function(){

  $('.slidestop').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  // autoplay: true,
	  autoplaySpeed: 5000,
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
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
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
  


  var scrollItem = document.querySelector('.topHeader');
  var bottom = document.querySelector('.bott');
  var logo = document.querySelector('.iconz');
  var itens = document.querySelectorAll('.itens');

      function scroll () {
          if(window.pageYOffset>100){
            scrollItem.classList.add('scrolll');
            bottom.classList.remove('btn-outline-light');
            bottom.classList.add('btn-outline-dark');
            logo.src = 'img/ZECONOriginal.png';
            itens.forEach((item)=>{
              item.style.color = '#a5b0b7';
              item.onmouseover = function() {
                this.style.color = "black";
              }
              item.onmouseout = function() {
                this.style.color = "#a5b0b7";
              }
            });


          }else{
            scrollItem.classList.remove('scrolll');
            bottom.classList.add('btn-outline-light');
            bottom.classList.remove('btn-outline-dark');
            logo.src = 'img/ZECON.png';
            itens.forEach((item)=>{
              item.style.color = 'white';
              item.onmouseover = function() {
                this.style.color = "#a5b0b7";
              }
              item.onmouseout = function() {
                this.style.color = "white";
              }
            });
          }
       }

       window.onscroll = scroll;

 });


var a = document.querySelector('.a').style.display = 'flex';
