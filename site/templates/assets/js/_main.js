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
const eventsParent = document.querySelector(".events");
const events = document.querySelectorAll(".events > div");

for (const event of events) {
  event.addEventListener('click', () => {

    event.dataset.expanded = "true";

    [...events]
      .filter(ev => ev.dataset.expanded = "true")
      .map(ev => { 
        if(ev !== event) {
          delete ev.dataset.expanded;
        }
      });
  });

}