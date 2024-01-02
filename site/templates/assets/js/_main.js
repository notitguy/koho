// Add class after whole page load
const heroCockerel = document.querySelector(".hero-cockerel");

if (heroCockerel) {
  window.addEventListener("load", (event) => {
    heroCockerel.classList.add("flying-peanuts");
  });
}

// Duplicate running text
const container = document.querySelector(".running-text"),
      h2 = document.querySelector(".running-text h2");
      
if (h2) {
  const runningText = h2.textContent;
  const span = document.createElement("span");
  span.append(runningText);

  let i = 0;
  do {
    i += 1;
    const span = document.createElement("span");
    span.append(runningText);
    container.appendChild(span);
  } while (i < 15);
}

// Events toggle
const cards = document.querySelectorAll(".event__card");
const headers = document.querySelectorAll(".event__header");

if (cards && headers) {
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
}

// Swiper

// core version + navigation, pagination modules:
import Swiper, { Autoplay, EffectFade, EffectCards } from 'swiper';
// import Swiper and modules styles
// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

// init Swiper for reviews:
const swiper = new Swiper('.reviews__slider', {
  // configure Swiper to use modules
  modules: [EffectCards],
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

// init Swiper for plates:
const swiper2 = new Swiper(".plates", {
  modules: [EffectFade, Autoplay],
  effect: 'fade',
  autoplay: {
    delay: 2000,
  },
});


// Mobile nav
const mobileNav = document.querySelectorAll('nav.mobile, .quick-nav');
const floatingNav = document.querySelector('nav.mobile');
const menuElements = document.querySelectorAll('.nav-icon, .quick-nav a, .overlay');
const overlay = document.querySelector('.overlay');

menuElements.forEach(item => {
  item.addEventListener('click', () => {
    for (const el of mobileNav) {
      el.classList.toggle('--open');
    }
    overlay.classList.toggle('--blur');
  })
})
window.addEventListener('click', function(event) {
  if (!floatingNav.contains(event.target)) {
    mobileNav.forEach(el => {
      el.classList.remove('--open');
    });
    overlay.classList.remove('--blur');
  }
})

// give class to header on scroll
const header = document.querySelector('header');

window.onscroll = function() {

  if ( this.scrollY > 50 ) {
    header.classList.add('--scrolled');
  }
  else {
    header.classList.remove('--scrolled');
  }
  this.oldScroll = this.scrollY;
  
}

// Gallery
import("./gallery.js");

// Snow
import("./snow.js");
