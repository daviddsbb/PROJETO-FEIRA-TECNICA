const prevButton = document.querySelector('.carousel-prev');
const nextButton = document.querySelector('.carousel-next');
const carouselItems = document.querySelector('.carousel-items');

let scrollAmount = 0;

prevButton.addEventListener('click', () => {
  carouselItems.scrollBy({
    top: 0,
    left: -1240, 
    behavior: 'smooth'
  });
});

nextButton.addEventListener('click', () => {
  carouselItems.scrollBy({
    top: 0,
    left: 1240, 
    behavior: 'smooth'
  });
});
