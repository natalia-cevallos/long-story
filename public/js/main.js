window.onload = function(){
  var boton1 = document.querySelector('#boton1');
  var boton2 = document.querySelector('#boton2');
  var body = document.querySelector('body');

  boton1.addEventListener("click", function(){
     document.body.classList.toggle('BgClass1');
  });

  boton2.addEventListener("click", function(){
     document.body.classList.toggle('BgClass2');
  });

};
