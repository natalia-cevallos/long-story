function ajaxCall(method, url, callbackFunction){
  var myAjax = new XMLHttpRequest();

  myAjax.onreadystatechange = function() {
    if(myAjax.readyState === 4 && myAjax.status === 200){
      var resultado = JSON.parse(myAjax.responseText);
      callbackFunction(resultado.contenido);
    }
  };

  myAjax.open(method,url);
  myAjax.send();
}

var urlPaises = 'http://pilote.techo.org/?do=api.getPaises';
var urlRegiones = 'http://pilote.techo.org/?do=api.getRegiones?idPais=';
ajaxCall('GET', urlPaises, getPaises)

function getPaises (resultado){
  var paises = document.getElementById('country');

  var optionI = document.createElement('option');
  optionI.innerText = 'Elegí un país'
  optionI.setAttribute('value', 0);
  paises.append(optionI);

  for(var x in resultado){
    var option = document.createElement('option');
    option.innerText = x;
    option.setAttribute('value', resultado[x]);
    paises.append(option);
  }

  paises.onchange = function(){
    var idPais = 1;
    ajaxCall('GET', urlRegiones + 1, getProvincias);
  }
}

  function getProvincias(resultado){
  var provincias = document.getElementById('provincias');

  var optionInicial = document.createElement('option');
  optionInicial.innerText = 'Elegí una provincia'
  optionInicial.setAttribute('value', 0);
  provincias.append(optionInicial);

  for(var x in resultado){
    var option = document.createElement('option');
    option.innerText = x;
    option.setAttribute('value', resultado[x]);
    provincias.append(option);
  }
}

// function ocultar(){
//   if (document.getElementById('paises').getAttribute("option").getAttribute("value").checked){
//     document.getElementById('provincias').style.display = none;
//   }
// }
