const heroSection = document.querySelector(".hero-container");
const querrySection = document.querySelector(".contact-wrapper");
const plansBtn = document.querySelector(".plans-btn");
const querryBtn = document.querySelector(".querries-btn");
const nestedNavbar = document.querySelector(".nested-nav");
const testimoniSlider = document.querySelector('.testimonials-slider');

function activeQuerry() {
  querryBtn.classList.add("bg-orange");
  plansBtn.classList.remove("bg-orange");
  querrySection.classList.add("visible");
  heroSection.classList.add("hide");
}

function activePlans() {
  querryBtn.classList.remove("bg-orange");
  plansBtn.classList.add("bg-orange");
  querrySection.classList.remove("visible");
  heroSection.classList.remove("hide");
}

function fadeInMenu() {
  nestedNavbar.classList.add("toFadein");
  nestedNavbar.classList.remove("toFadeout");
}

function fadeOutMenu() {
  nestedNavbar.classList.add("toFadeout");
  nestedNavbar.classList.remove("toFadein");
}

const coundownElement = document.querySelector(".count-down");
const coundownTime = 15 * 24 * 60 * 60 * 1000; //15 days in miliseconds
const localStorageKey = "coundownEndTime";
function getRemainingtime(endTime) {
  const now = new Date().getTime();
  return endTime - now;
}
function formatTime(miliseconds) {
  const totalSeconds = Math.floor(miliseconds / 1000);
  const days = Math.floor(totalSeconds / (24 * 60 * 60));
  const hours = Math.floor((totalSeconds % (24 * 60 * 60)) / 3600);
  const minutes = Math.floor((totalSeconds % 3600) / 60);
  const seconds = totalSeconds % 60;
  return `${days}<span>days</span>  : ${hours}<span>hrs</span> : ${minutes}<span>min</span> : ${seconds}<span>sec</span>`;
}
function startCoundown() {
  let endTime = localStorage.getItem(localStorageKey);
  if (!endTime || getRemainingtime(endTime) <= 0) {
    endTime = new Date().getTime() + coundownTime;
    localStorage.setItem(localStorageKey, endTime);
  }
  const updateTime = () => {
    const remainingTime = getRemainingtime(endTime);

    if (remainingTime <= 0) {
      endTime = new Date().getTime() + coundownTime;
      localStorage.setItem(localStorageKey, endTime);
    } else {
      coundownElement.innerHTML = formatTime(remainingTime);
    }
  };
  updateTime();
  setInterval(updateTime, 1000);
}

startCoundown();

function viewContactModal() {
  document.querySelector(".contact-modal-wrapper").classList.toggle("visible");
}


function rightClick() {
  testimoniSlider.scrollLeft += testimoniSlider.scrollWidth
}

function leftClick() {
  testimoniSlider.scrollLeft -= testimoniSlider.scrollWidth
}