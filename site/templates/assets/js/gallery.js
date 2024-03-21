// Include Lightbox
import PhotoSwipeLightbox from "photoswipe/dist/photoswipe-lightbox.esm.js";

// Select all galleries
const galleries = document.querySelectorAll(".pswp-gallery");
const gallerySelector = []; // Empty array to store selectors

galleries.forEach((gallery) => {
  gallerySelector.push(`#${gallery.id}`); // Add each gallery ID to the array
});

const finalSelector = gallerySelector.join(","); // Join IDs with commas

// PhotoSwipe
const lightbox = new PhotoSwipeLightbox({
  // may select multiple "galleries"
  gallery: finalSelector,
  // Elements within gallery (slides)
  children: "a",
  // setup PhotoSwipe Core dynamic import
  pswpModule: () => import("photoswipe"),
});
lightbox.init();

// Shop Gallery
// Get all galleries that have number in the ID tag
const numGalleriesFilter = gallerySelector.filter((gallery) =>
  /\d/.test(gallery)
);

const numGalleries = document.querySelectorAll(numGalleriesFilter);

numGalleries.forEach((item) => {
  if (item) {
    item.previousElementSibling.addEventListener("click", function () {
      // load gallery from a single thumb
      lightbox.loadAndOpen(0, {
        gallery: item,
      });
    });
  }
});
