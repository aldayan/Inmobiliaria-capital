const slides = document.querySelectorAll(".carousel img");
const dotsContainer = document.getElementById("dots");

let currentSlide = 0;

// Crear los dots
slides.forEach((_, index) => {
  const dot = document.createElement("span");
  dot.addEventListener("click", () => showSlide(index));
  dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll("#dots span");

function showSlide(index) {
  slides.forEach(slide => slide.classList.remove("active"));
  dots.forEach(dot => dot.classList.remove("active"));

  slides[index].classList.add("active");
  dots[index].classList.add("active");

  currentSlide = index;
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

// Iniciar carrusel automático
setInterval(nextSlide, 4000);

// Mostrar primero
showSlide(currentSlide);
