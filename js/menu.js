var ini = document.getElementById('inicio');
var volver = document.getElementById('volver');
var altura2 = ini.offsetTop+500;
window.addEventListener('scroll', function(){
	if (window.pageYOffset > altura2) {
		volver.classList.add('mostrar');
		volver.classList.remove('vovler');
	}else{
		volver.classList.add('volver');
		volver.classList.remove('mostrar');
	}
});

var bajar = document.getElementById('bajar');
var altura = ini.offsetTop;
window.addEventListener('scroll', function(){
	if (window.pageYOffset > altura) {
		bajar.classList.add('volver');
		bajar.classList.remove('bajar');
	}else{
		bajar.classList.add('bajar');
		bajar.classList.remove('volver');
	}
});