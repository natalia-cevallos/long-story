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
ajaxCall('GET', urlPaises, getPaises)

function getPaises (resultado){
  var paises = document.getElementById('paises');

  for(var x in resultado){
    var option = document.createElement('option');
    option.innerText = x;
    option.setAttribute('value', resultado[x]);
    paises.append(option);
  }
}
