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
            bottom.style.color='#a5b0b7';
            bottom.style.borderColor = '#a5b0b7';
            bottom.onmouseover = function(){
              this.style.color = '#3f6f93';
              this.style.borderColor = '#3f6f93';
              this.style.backgroundColor = 'rgba(255,255,255,0.3)';
            }
            bottom.onmouseout = function(){
              bottom.style.color='#a5b0b7';
              bottom.style.borderColor = '#a5b0b7';
              this.style.backgroundColor = 'null';
            }


            logo.src = 'img/ZECONOriginal.png';
            itens.forEach((item)=>{
              item.style.color = '#a5b0b7';
              item.onmouseover = function() {
                this.style.color = "#3f6f93";
              }
              item.onmouseout = function() {
                this.style.color = "#a5b0b7";
              }
            });










          }else{
            scrollItem.classList.remove('scrolll');
            bottom.classList.add('btn-outline-light');
            bottom.classList.remove('btn-outline-dark');
            bottom.style.backgroundColor = 'transparent';
            bottom.style.color='white';
            bottom.style.borderColor = 'white';
            bottom.onmouseover = function(){
              this.style.color = '#a5b0b7';
              this.style.borderColor = 'none';
              this.style.backgroundColor = 'white';
            }
            bottom.onmouseout = function(){
              bottom.style.color='white';
              bottom.style.borderColor = 'white';
              this.style.backgroundColor = 'transparent';
            }


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




      var modal = document.querySelector('.modalll');
      var corpo = document.querySelector('body');
      var formContato = document.querySelector('.formContato');

      var topHeader = document.querySelector('.topHeader');
      var cabeca = document.querySelector('#head');
      var construtora = document.querySelector('#construtora');
      var empreendimentos = document.querySelector('.empreendimentos');
      var parallax = document.querySelector('#parallax');
      var noticias = document.querySelector('#noticias');
      var links = document.querySelector('.links');
      var footer = document.querySelector('footer');
      

       bottom.addEventListener('click',function(e){
         e.preventDefault();
          modal.style.display = 'flex';
          corpo.style.overflow = 'hidden';
          modal.style.style = 'blur(0)';
          cabeca.style.filter = 'blur(2px)';
          construtora.style.filter = 'blur(2px)';
          empreendimentos.style.filter = 'blur(2px)';
          links.style.filter = 'blur(2px)';
          noticias.style.filter = 'blur(2px)';
          footer.style.filter = 'blur(2px)';
          topHeader.style.filter = 'blur(2px)';
          parallax.style.filter = 'blur(2px)';
          $('.modalll').fadeIn("slow");

          setTimeout(function(){
            formContato.style.height = '640px';
          },1);

       });


       modal.addEventListener('click',function(){
          modal.style.display = 'none';
          corpo.style.overflow = 'auto';
          cabeca.style.filter = 'blur(0)';
          construtora.style.filter = 'blur(0)';
          empreendimentos.style.filter = 'blur(0)';
          links.style.filter = 'blur(0)';
          noticias.style.filter = 'blur(0)';
          footer.style.filter = 'blur(0)';
          topHeader.style.filter = 'blur(0)';
          parallax.style.filter = 'blur(0)';
          $('.modalll').fadeOut("slow");
          setTimeout(function(){
            formContato.style.height = '0';
          },1);
       });

       formContato.addEventListener('click',function(e){
         e.stopPropagation();
       });


      let aviso = document.querySelector('.aviso');
      let enviar = document.querySelector('.enviar');
      
      enviar.addEventListener('click',function(e){
        e.preventDefault();
        aviso.classList.remove('alert-success');
        aviso.classList.remove('alert-danger');
        aviso.classList.add('alert-primary');
        aviso.innerHTML = 'Caregando...';

        var nome = document.querySelector('.nome');
        var email = document.querySelector('.email');
        var mensagem = document.querySelector('.Mensagem');

        $('.aviso').fadeIn();

        $.ajax({
          type: "GET", 
          url: "api/email", 
          async: true,
          data: 'nome='+nome.value+'&email='+email.value+'&mensagem='+mensagem.value, 
          success: function(data) { 
            nome.value = '';
            email.value = '';
            mensagem.value = '';
            console.log(data);
            $('.aviso').fadeOut();
              setTimeout(function(){
                aviso.classList.remove('alert-primary');
                aviso.classList.remove('alert-danger');
                aviso.classList.add('alert-success');
                aviso.innerHTML = data;
                $('.aviso').fadeIn();
                setTimeout(function(){
                $('.aviso').fadeOut();
                },5000);
              },500);
              
            
            },//sucesso
            error: function(data){
              $('.aviso').fadeOut();
              setTimeout(function(){
                aviso.classList.remove('alert-success');
                aviso.classList.remove('alert-primary');
                aviso.classList.add('alert-danger');
                aviso.innerHTML = data;
                $('.aviso').fadeIn();
                setTimeout(function(){
                $('.aviso').fadeOut();
                },5000);
              },500);
           
          }//error




        });//ajax
  
      });//enviar


 });//fim do document


var a = document.querySelector('.a').style.display = 'flex';
