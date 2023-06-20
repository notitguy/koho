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

// Include Lightbox 
import PhotoSwipeLightbox from 'photoswipe/dist/photoswipe-lightbox.esm.js';

const lightbox = new PhotoSwipeLightbox({
  // may select multiple "galleries"
  gallery: '#gallery--home',

  // Elements within gallery (slides)
  children: 'a',

  // setup PhotoSwipe Core dynamic import
  pswpModule: () => import('photoswipe')
});
lightbox.init();


