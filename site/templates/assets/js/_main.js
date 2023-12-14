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

// Include Lightbox 
import PhotoSwipeLightbox from 'photoswipe/dist/photoswipe-lightbox.esm.js';

const lightbox = new PhotoSwipeLightbox({
  // may select multiple "galleries"
  gallery: '#gallery--home, #gallery--furniture, #gallery--events',

  // Elements within gallery (slides)
  children: 'a',

  // setup PhotoSwipe Core dynamic import
  pswpModule: () => import('photoswipe')
});
lightbox.init();

const galFurniture = document.querySelector('#galFurniture');

if (galFurniture) {
  
  galFurniture.addEventListener('click', function() {
    // load gallery from a single thumb
    lightbox.loadAndOpen(0, {
      gallery: document.querySelector('#gallery--furniture')
    })
    // captions
    lightbox.on('uiRegister', function() {
      lightbox.pswp.ui.registerElement({
        name: 'custom-caption',
        order: 9,
        isButton: false,
        appendTo: 'root',
        html: 'Caption text',
        onInit: (el, pswp) => {
          lightbox.pswp.on('change', () => {
            const currSlideElement = lightbox.pswp.currSlide.data.element;
            let captionHTML = '';
            if (currSlideElement) {
              // const hiddenCaption = currSlideElement.querySelector('.hidden-caption-content');
              const spanCaption = currSlideElement.querySelector('span');
              if (spanCaption) {
                // get caption from alt attribute
                captionHTML = spanCaption.innerText;
              }
              // if (hiddenCaption || spanCaption) {
              //   // get caption from element with class hidden-caption-content
              //   captionHTML = hiddenCaption.innerHTML;
              // } else {
              //   // get caption from alt attribute
              //   captionHTML = spanCaption.innerText;
              // }
            }
            el.innerHTML = captionHTML || '';
          });
        }
      });
    });
  });

}

// Snow https://codepen.io/ethancopping/pen/ExrGYGG
// document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM fully loaded and parsed");
  const snowContainer = document.querySelector(".snow-container");

  const particlesPerThousandPixels = 0.1;
  const fallSpeed = 0.25;
  const pauseWhenNotActive = true;
  const maxSnowflakes = 200;
  const snowflakes = [];

  let snowflakeInterval;
  let isTabActive = true;

  function resetSnowflake(snowflake) {
      const size = Math.random() * 5 + 1;
      const viewportWidth = window.innerWidth - size; // Adjust for snowflake size
      const viewportHeight = window.innerHeight;

      snowflake.style.width = `${size}px`;
      snowflake.style.height = `${size}px`;
      snowflake.style.left = `${Math.random() * viewportWidth}px`; // Constrain within viewport width
      snowflake.style.top = `-${size}px`;

      const animationDuration = (Math.random() * 3 + 2) / fallSpeed;
      snowflake.style.animationDuration = `${animationDuration}s`;
      snowflake.style.animationTimingFunction = "linear";
      snowflake.style.animationName =
          Math.random() < 0.5 ? "fall" : "diagonal-fall";

      setTimeout(() => {
          if (parseInt(snowflake.style.top, 10) < viewportHeight) {
              resetSnowflake(snowflake);
          } else {
              snowflake.remove(); // Remove when it goes off the bottom edge
          }
      }, animationDuration * 1000);
  }

  function createSnowflake() {
      if (snowflakes.length < maxSnowflakes) {
          const snowflake = document.createElement("div");
          snowflake.classList.add("snowflake");
          snowflakes.push(snowflake);
          snowContainer.appendChild(snowflake);
          resetSnowflake(snowflake);
      }
  }

  function generateSnowflakes() {
      const numberOfParticles =
          Math.ceil((window.innerWidth * window.innerHeight) / 1000) *
          particlesPerThousandPixels;
      const interval = 5000 / numberOfParticles;

      clearInterval(snowflakeInterval);
      snowflakeInterval = setInterval(() => {
          if (isTabActive && snowflakes.length < maxSnowflakes) {
              requestAnimationFrame(createSnowflake);
          }
      }, interval);
  }

  function handleVisibilityChange() {
      if (!pauseWhenNotActive) return;

      isTabActive = !document.hidden;
      if (isTabActive) {
          generateSnowflakes();
      } else {
          clearInterval(snowflakeInterval);
      }
  }

  generateSnowflakes();

  window.addEventListener("resize", () => {
      clearInterval(snowflakeInterval);
      setTimeout(generateSnowflakes, 1000);
  });

  document.addEventListener("visibilitychange", handleVisibilityChange);
// });
