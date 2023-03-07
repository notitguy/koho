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