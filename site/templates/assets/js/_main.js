// Duplicate running text
const container = document.querySelector(".running-text"),
      h2 = document.querySelector(".running-text h2"),
      runningText = h2.textContent,
      span = document.createElement("span");

span.append(runningText);

let i = 0;
do {
  i += 1;
  const span = document.createElement("span");
  span.append(runningText);
  container.appendChild(span);
} while (i < 15);

// Events toggle
const cards = document.querySelectorAll(".event__card");
const headers = document.querySelectorAll(".event__header");

for (const header of headers) {

  // select parent card, card body
  const card = header.parentElement;
  const body = header.nextElementSibling;

  header.addEventListener('click', () => {
    
    // toggle data attribute and body height
    if (!card.dataset.expanded) {
      card.dataset.expanded = "true";
      body.style.height = body.scrollHeight + 'px';
    } else {
      delete card.dataset.expanded;
      body.style.height = 0;
    }
    // filter other cards
    [...cards].filter(el => {
      if (el !== card && el.dataset.expanded) {
        delete el.dataset.expanded;
        el.lastElementChild.style.height = 0;
      }
    })
  });
}

// Swiper

// core version + navigation, pagination modules:
import Swiper, { Navigation, CardsEffect, EffectCards } from 'swiper';
// import Swiper and modules styles
// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

// init Swiper:
const swiper = new Swiper('.swiper', {
  // configure Swiper to use modules
  modules: [Navigation, EffectCards],
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  effect: 'cards',
  breakpoints: {
    480: {
      cardsEffect: {
        perSlideOffset: 30,
      },
    }
  },
  grabCursor: true,
  autoHeight: true,
});

// Expand/shrink review card

const reviewText = document.querySelectorAll('.review__text');

reviewText.forEach(el => {

  const reviewCard = el.parentElement;

  el.addEventListener('click', () => {

    if (!el.dataset.expanded) {
      el.dataset.expanded = "true";
      el.style.height = el.scrollHeight + 'px';
    } else {
      delete el.dataset.expanded;
      el.style.height = 130 + 'px';
    }

  })
});