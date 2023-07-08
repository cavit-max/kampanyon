const slides = document.querySelector(".slides");
const preview = document.querySelector(".preview");
const images = preview.querySelectorAll("img");

let currentSlide = 0;
let width = 500;

function goToSlide(slide) {
  slides.style.transform = `translateX(-${slide * width}px)`;
  currentSlide = slide;
  setActiveClass();
}

function setActiveClass() {
  images.forEach(img => img.classList.remove("active"));
  images[currentSlide].classList.add("active");
}

images.forEach((img, index) => {
  img.addEventListener("click", () => {
    goToSlide(index);
  });
});

setActiveClass();

setInterval(() => {
  if (currentSlide === images.length - 1) {
    goToSlide(0);
  } else {
    goToSlide(currentSlide + 1);
  }
}, 5000);








