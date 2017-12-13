var form = document.querySelector('#login');
var campos = form.elements;

for (var i = 0; i < campos.length; i++) {
  if (campos[i].type != 'submit') {
      campos[i].addEventListener('blur', function () {
        this.className = '';
        var error = this.nextElementSibling;
        if (this.value.trim() === '') {
          this.className = 'error';
          error.innerHTML = 'El campo es obligatorio';
        } else {
          error.innerHTML = '';
          this.className = '';
        }
      });
  }
}
