require('./bootstrap');

$(document).ready(function(){

  $('.slidestop').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  prevArrow:$('.anterior'),
	  nextArrow:$('.proximo'),
	  infinite: true,
	  speed: 500,
	  fade: true,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 480,
        settings: {

          arrows:false
        }
      }]
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
        infinite: true
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
        autoplaySpeed: 5000,
        slidesToScroll: 1,
        arrows:false
      }
    }
  ]
  });
  


  let scrollItem = document.querySelector('.topHeader');
  let bottom = document.querySelector('.bott');
  let logo = document.querySelector('.iconz');
  let itens = document.querySelectorAll('.itens');
  let inputhamburguer = document.querySelector('.hamburguerr');
  let inputhamburguer2 = document.querySelector('.hamburguerrr');
  let menuprincipal = document.querySelector('.menuprincipal');
  let menuprincipal2 = document.querySelector('.menuprincipal2');
  let modal = document.querySelector('.modalll');
  let corpo = document.querySelector('body');
  let formContato = document.querySelector('.formContato');
  let topHeader = document.querySelector('.topHeader');
  let cabeca = document.querySelector('#head');
  let construtora = document.querySelector('#construtora');
  let empreendimentos = document.querySelector('.empreendimentos');
  let parallax = document.querySelector('#parallax');
  let noticias = document.querySelector('#noticias');
  let links = document.querySelector('.links');
  let footer = document.querySelector('footer');
  let cabecanoticias = document.querySelector('.cabecanoticias');
  let cabecaempreendimentos = document.querySelector('.cabecaempreendimentos');
  let visualizarnoticias = document.querySelector('#visualizarnoticias');
  let close = document.querySelector('.close');
  let aviso = document.querySelector('.aviso');
  
  let falle = document.querySelector('.falle');
  let avisoemail = document.querySelector('.avisoemail');

  if(avisoemail){
    setTimeout(function(){
      $('.avisoemail').fadeOut();
    },5000);
  }
  
  
  
      function scroll () {
          if(window.pageYOffset>100){
            scrollItem.classList.add('scrolll');
            bottom.classList.remove('btn-outline-light');
            bottom.classList.add('btn-outline-dark');
            bottom.style.color='#a5b0b7';
            bottom.style.borderColor = '#a5b0b7';
            inputhamburguer.style.color = '#25355f';
            inputhamburguer.style.backgroundColor = '#25355f';
            bottom.onmouseover = function(){
              this.style.color = 'white';
              this.style.borderColor = '#25355f';
              this.style.backgroundColor = '#25355f';
            }
            bottom.onmouseout = function(){
              this.style.color='#a5b0b7';
              this.style.borderColor = '#a5b0b7';
              this.style.backgroundColor = 'transparent';
            }


            logo.src = 'http://localhost:8000/img/ZECONOriginal.png';
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
            inputhamburguer.style.color = 'white';
            inputhamburguer.style.backgroundColor = 'white';
            bottom.onmouseover = function(){
              this.style.color = 'white';
              this.style.borderColor = '#25355f';
              this.style.backgroundColor = '#25355f';
            }
            bottom.onmouseout = function(){
              bottom.style.color='white';
              bottom.style.borderColor = 'white';
              this.style.backgroundColor = 'transparent';
            }


            logo.src = 'http://localhost:8000/img/ZECON.png';
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
       

       

      //  function modalin(){
      //     modal.style.display = 'flex';
      //     corpo.style.overflow = 'hidden';
      //     modal.style.style = 'blur(0)';
      //     if(cabeca){
      //       cabeca.style.filter = 'blur(2px)';
      //     }
      //     if(construtora){
      //       construtora.style.filter = 'blur(2px)';
      //     }
      //     if(empreendimentos){
      //       empreendimentos.style.filter = 'blur(2px)';
      //     }
      //     if(links){
      //       links.style.filter = 'blur(2px)';
      //     }
      //     if(noticias){
      //       noticias.style.filter = 'blur(2px)';
      //     }
      //     if(footer){
      //       footer.style.filter = 'blur(2px)';
      //     }
      //     if(topHeader){
      //       topHeader.style.filter = 'blur(2px)';
      //     }
      //     if(parallax){
      //       parallax.style.filter = 'blur(2px)';
      //     }
      //     if(menuprincipal){
      //       menuprincipal.style.filter = 'blur(2px)';
      //     }
      //     if(menuprincipal2){
      //       menuprincipal2.style.filter = 'blur(2px)';
      //     }
      //     if(cabecaempreendimentos){
      //       cabecaempreendimentos.style.filter = 'blur(2px)';
      //     }
      //     if(cabecanoticias){
      //       cabecanoticias.style.filter = 'blur(2px)';
      //     }
      //     if(visualizarnoticias){
      //       visualizarnoticias.style.filter = 'blur(2px)';
      //     }
      //     $('.modalll').fadeIn("slow");

      //     setTimeout(function(){
      //       formContato.style.height = '640px';
      //     },1);
      //  }
      //  bottom.addEventListener('click',function(e){
      //    e.preventDefault();
      //    modalin()

      //  });

      //  function modalout(){
      //     modal.style.display = 'none';
      //     corpo.style.overflow = 'auto';

      //     if(cabeca){
      //       cabeca.style.filter = 'blur(0)';
      //     }
      //     if(construtora){
      //       construtora.style.filter = 'blur(0)';
      //     }
      //     if(empreendimentos){
      //       empreendimentos.style.filter = 'blur(0)';
      //     }
      //     if(links){
      //       links.style.filter = 'blur(0)';
      //     }
      //     if(noticias){
      //       noticias.style.filter = 'blur(0)';
      //     }
      //     if(footer){
      //       footer.style.filter = 'blur(0)';
      //     }
      //     if(topHeader){
      //       topHeader.style.filter = 'blur(0)';
      //     }
      //     if(parallax){
      //       parallax.style.filter = 'blur(0)';
      //     }
      //     if(menuprincipal){
      //       menuprincipal.style.filter = 'blur(0)';
      //     }
      //     if(menuprincipal2){
      //       menuprincipal2.style.filter = 'blur(0)';
      //     }
      //     if(cabecaempreendimentos){
      //       cabecaempreendimentos.style.filter = 'blur(0)';
      //     }
      //     if(cabecanoticias){
      //       cabecanoticias.style.filter = 'blur(0)';
      //     }
      //     if(visualizarnoticias){
      //       visualizarnoticias.style.filter = 'blur(0)';
      //     }

      //     $('.modalll').fadeOut("slow");
      //     setTimeout(function(){
      //     formContato.style.height = '0';
      //   },1);
      //  }
      //  falle.addEventListener('click',function(e){
      //     e.preventDefault();
      //     modalin()
      //  });
      //  modal.addEventListener('click',function(){
      //      modalout();
      //      if(menuativo==true){
      //        document.body.style.overflow = 'hidden';
      //      }else{
      //       document.body.style.overflow = 'auto';
      //      }
      //  });

      //   close.addEventListener('click',function(e){
      //     e.stopPropagation();
      //       modalout();
      //       if(menuativo==true){
      //         document.body.style.overflow = 'hidden';
      //       }else{
      //        document.body.style.overflow = 'auto';
      //       }
      //   });

      //  formContato.addEventListener('click',function(e){
      //    e.stopPropagation();
      //  });


      
      
      // enviar.addEventListener('click',function(e){
      //   e.preventDefault();
      //   aviso.classList.remove('alert-success');
      //   aviso.classList.remove('alert-danger');
      //   aviso.classList.add('alert-primary');
      //   aviso.innerHTML = 'Carregando...';

      //   var nome = document.querySelector('.nome');
      //   var email = document.querySelector('.email');
      //   var mensagem = document.querySelector('.Mensagem');

      //   $('.aviso').fadeIn();

      //   $.ajax({
      //     type: "GET", 
      //     url: "api/email", 
      //     async: true,
      //     data: 'nome='+nome.value+'&email='+email.value+'&mensagem='+mensagem.value, 
      //     success: function(data) { 
      //       nome.value = '';
      //       email.value = '';
      //       mensagem.value = '';
      //       console.log(data);
      //       $('.aviso').fadeOut();
      //         setTimeout(function(){
      //           aviso.classList.remove('alert-primary');
      //           aviso.classList.remove('alert-danger');
      //           aviso.classList.add('alert-success');
      //           aviso.innerHTML = data;
      //           $('.aviso').fadeIn();
      //           setTimeout(function(){
      //           $('.aviso').fadeOut();
      //           },5000);
      //         },500);
              
            
      //       },//sucesso
      //       error: function(data){
      //         $('.aviso').fadeOut();
      //         setTimeout(function(){
      //           aviso.classList.remove('alert-success');
      //           aviso.classList.remove('alert-primary');
      //           aviso.classList.add('alert-danger');
      //           aviso.innerHTML = 'Não foi possivel enviar a mensagem';
      //           $('.aviso').fadeIn();
      //           setTimeout(function(){
      //           $('.aviso').fadeOut();
      //           },5000);
      //         },500);
      //         console.log(data);
      //     }//error




      //   });//ajax
  
      // });//enviar


      let menuativo = false;

      function prevent(e){
        e.preventDefault();
      }


      if(inputhamburguer){
        window.onscroll = scroll;
        inputhamburguer.addEventListener('click',function(){
          if(menuativo==false){
            document.body.style.overflow = 'hidden';
            menuprincipal.style.width = '100%';
            inputhamburguer.style.color = '#25355f';
            inputhamburguer.style.background = '#25355f';
            scrollItem.classList.add('scrolll');
            logo.src = 'http://localhost:8000/img/ZECONOriginal.png';
            
            menuativo=true;
          }else{
            document.body.style.overflow = 'auto';
            menuprincipal.style.width = '0';
            inputhamburguer.style.color = 'white';
            inputhamburguer.style.background = 'white';
            scrollItem.classList.remove('scrolll');
            logo.src = 'http://localhost:8000/img/ZECON.png'; 
            
            menuativo=false;
          }
        });
      }else{
        inputhamburguer2.addEventListener('click',function(){
          if(menuativo==false){
            document.body.style.overflow = 'hidden';
            menuprincipal2.style.width = '100%';
            menuativo=true;
          }else{
            document.body.style.overflow = 'auto';
            menuprincipal2.style.width = '0';        
            menuativo=false;
          }
        });
      }
      

      
      $('.whatsapp').mask('(99) 99999-9999');
      

      
 });//fim do document



