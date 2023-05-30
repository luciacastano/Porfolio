/* -------------------- PARTE DE LAS SKILLS  -------------------- */
// llamamos a los iconos y a la información de cada skill
const skillIcons = document.querySelectorAll('.my_skills i');
const infoBox = document.querySelectorAll('.my_skills .info');

// addEventListener a cada icono para mostrarlos/ocultarlos
skillIcons.forEach((icon, index) => {
  icon.addEventListener('click', () => {
    infoBox[index].classList.toggle('show'); // alternamos visibilidad de información cada vez que clicamos sobre un icono
  });
});


/* -------------------- PARTE DEL FORMULARIO  -------------------- */
// llamamos al botón y al formulario por el id
const formButton = document.getElementById('formButton');
const contactForm = document.getElementById('contactForm');

let formVisible = false; // variable para comprobar la visibilidad del formulario (boolean)

// función para cambiar la visibilidad del formulario a través del botón creado
function changeVisibility() {
  if (formVisible) {
    contactForm.style.display = 'none';
    formVisible = false; // establecemos display de contactForm en oculto y actualizamos formVisible a false
  } else {
    contactForm.style.display = 'block';
    formVisible = true; // establecemos display de contactForm en visible y actualizamos formVisible a true
  }
}

// addEventListener al botón para mostrar/ocultar el formulario, aplicamos la función desde el js en vez de desde el html
formButton.addEventListener('click', function(event) {
  event.preventDefault(); // comportamiento predeterminado del enlace para evitar que nos lleve a otra página
  changeVisibility(); // llamamos para mostrar/ocultar el formulario de acuerdo al estado actual de formVisible
});