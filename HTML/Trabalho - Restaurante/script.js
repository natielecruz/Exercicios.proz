var slideAtual = 0;
var slides = document.getElementsByClassName("slide");

function mostrarSlide(indice) {

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[indice].style.display = "block";
}

function nextSlide() {
  slideAtual++;

  if (slideAtual >= slides.length) {
    slideAtual = 0;
  }

  mostrarSlide(slideAtual);
}

function prevSlide() {
  slideAtual--;

  if (slideAtual < 0) {
    slideAtual = slides.length - 1;
  }

  mostrarSlide(slideAtual);
}

mostrarSlide(slideAtual);