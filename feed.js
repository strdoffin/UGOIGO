let currentIndex = 0;

function showSlide(index) {
  const cards = document.querySelector('.cards');
  const cardWidth = document.querySelector('.card').offsetWidth;
  const maxIndex = document.querySelectorAll('.card').length - 1;

  if (index > maxIndex) {
    currentIndex = 0;
  } else if (index < 0) {
    currentIndex = maxIndex;
  } else {
    currentIndex = index;
  }

  cards.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
}

function nextSlide() {
  showSlide(currentIndex + 1);
}

function prevSlide() {
  showSlide(currentIndex - 1);
}
