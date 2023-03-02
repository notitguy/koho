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
const events = document.querySelectorAll(".events > div");

for (const event of events) {
  event.addEventListener('click', () => {

    // toggle data attribute
    !event.dataset.expanded ? event.dataset.expanded = "true" : delete event.dataset.expanded;

    // filter siblings and remove attribute
    [...events].filter(ev => {
      if (ev !== event && ev.dataset.expanded) {
        delete ev.dataset.expanded;
      }
    })
  });

}