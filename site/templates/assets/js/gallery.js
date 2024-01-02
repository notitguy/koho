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