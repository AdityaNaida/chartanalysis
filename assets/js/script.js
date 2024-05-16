const plansBtn = document.querySelector(".plans-btn");
const querryBtn = document.querySelector(".querries-btn");

function activeQuerry() {
  querryBtn.classList.add("bg-orange");
  plansBtn.classList.remove("bg-orange");
}

function activePlans() {
  querryBtn.classList.remove("bg-orange");
  plansBtn.classList.add("bg-orange");
}
