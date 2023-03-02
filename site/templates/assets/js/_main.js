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
} while (i < 5);

// Events toggle
const eventContainer = document.querySelectorAll(".events > div");

for (const el of eventContainer) {
  el.addEventListener('click', () => {
    // console.log(i.target);
    el.classList.toggle("--expanded");
  });
}
