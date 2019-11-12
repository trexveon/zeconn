  let enviar = document.querySelector('.enviarrrr');
  let erroNome= document.querySelector('.erroNome');
  let erroEmail= document.querySelector('.erroEmail');
  let errowpp= document.querySelector('.errowpp');
  let erroCompra= document.querySelector('.erroselect');
  let erroMensagem= document.querySelector('.erromensagem');
  let nome= document.querySelector('.nome');
  let email= document.querySelector('.email');
  let whatsapp= document.querySelector('.whatsapp');
  let compra= document.querySelector('.compra');
  let mensagem = document.querySelector('.Mensagem');


  function validacao(){
    let val = true;
    if(nome.value == ''){
      erroNome.innerHTML = 'Por favor preencha o campo de nome';
      nome.style.borderBottomColor = 'red';
      val = false;
    }else{
      erroNome.innerHTML = '';
      nome.style.borderBottomColor = '#999999';
      val = true;
    }
    var filtro = 	
          /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    if(!filtro.test(email)){
      erroEmail.innerHTML = 'Por favor preencha com um email valido';
      email.style.borderBottomColor = 'red';
      val = false;
    }else{
      erroEmail.innerHTML = '';
      email.style.borderBottomColor = '#999999';
      val = true;
    }
    if(whatsapp.value.length!='15'){
      errowpp.innerHTML = 'Por favor preencha com um número valido (DDD + número)';
      whatsapp.style.borderBottomColor = 'red';
      val = false;
    }else{
      errowpp.innerHTML = '';
      whatsapp.style.borderBottomColor = '#999999';
      val = true;
    }
    if(compra.value=''){
      erroCompra.innerHTML = 'Por favor selecione um item (DDD + número)';
      compra.style.borderBottomColor = 'red';
      val = false;
    }else{
      errowpp.innerHTML = '';
      compra.style.borderBottomColor = '#999999';
      val = true;
    }
    if(mensagem.value=''){
      erromensagem.innerHTML = 'Por favor não envie um campo vazio';
      mensagem.style.borderBottomColor = 'red';
      val = false;
    }else{
      erromensagem.innerHTML = '';
      mensagem.style.borderBottomColor = '#999999';
      val = true;
    }
    if(val==false)
    return false
  }


  enviar.addEventListener('click',function(e){
    verificar = validacao();
    if(verificar==false)
    return false
  });