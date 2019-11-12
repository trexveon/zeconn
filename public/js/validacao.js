/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/validacao.js":
/*!***********************************!*\
  !*** ./resources/js/validacao.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var enviar = document.querySelector('.enviarrrr');
var erroNome = document.querySelector('.erroNome');
var erroEmail = document.querySelector('.erroEmail');
var errowpp = document.querySelector('.errowpp');
var erroCompra = document.querySelector('.erroselect');
var erroMensagem = document.querySelector('.erromensagem');
var nome = document.querySelector('.nome');
var email = document.querySelector('.email');
var whatsapp = document.querySelector('.whatsapp');
var compra = document.querySelector('.compra');
var mensagem = document.querySelector('.Mensagem');

function validacao() {
  var val = true;

  if (nome.value == '') {
    erroNome.innerHTML = 'Por favor preencha o campo de nome';
    nome.style.borderBottomColor = 'red';
    val = false;
  } else {
    erroNome.innerHTML = '';
    nome.style.borderBottomColor = '#999999';
    val = true;
  }

  var filtro = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

  if (!filtro.test(email)) {
    erroEmail.innerHTML = 'Por favor preencha com um email valido';
    email.style.borderBottomColor = 'red';
    val = false;
  } else {
    erroEmail.innerHTML = '';
    email.style.borderBottomColor = '#999999';
    val = true;
  }

  if (whatsapp.value.length != '15') {
    errowpp.innerHTML = 'Por favor preencha com um número valido (DDD + número)';
    whatsapp.style.borderBottomColor = 'red';
    val = false;
  } else {
    errowpp.innerHTML = '';
    whatsapp.style.borderBottomColor = '#999999';
    val = true;
  }

  if (compra.value = '') {
    erroCompra.innerHTML = 'Por favor selecione um item (DDD + número)';
    compra.style.borderBottomColor = 'red';
    val = false;
  } else {
    errowpp.innerHTML = '';
    compra.style.borderBottomColor = '#999999';
    val = true;
  }

  if (mensagem.value = '') {
    erromensagem.innerHTML = 'Por favor não envie um campo vazio';
    mensagem.style.borderBottomColor = 'red';
    val = false;
  } else {
    erromensagem.innerHTML = '';
    mensagem.style.borderBottomColor = '#999999';
    val = true;
  }

  if (val == false) return false;
}

enviar.addEventListener('click', function (e) {
  verificar = validacao();
  if (verificar == false) return false;
});

/***/ }),

/***/ 1:
/*!*****************************************!*\
  !*** multi ./resources/js/validacao.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Human\Desktop\Polaris\resources\js\validacao.js */"./resources/js/validacao.js");


/***/ })

/******/ });