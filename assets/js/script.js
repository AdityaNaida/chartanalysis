const heroSection = document.querySelector(".hero-container-wrapper");
const querrySection = document.querySelector(".contact-wrapper");
const plansBtn = document.querySelector(".plans-btn");
const querryBtn = document.querySelector(".querries-btn");
const nestedNavbar = document.querySelector(".nested-nav");
const testimoniSlider = document.querySelector(".testimonials-slider");
const viewDetailsBtns = document.querySelectorAll(".viewdetails-btn");

const form = document.querySelector(".modal-form");
form.addEventListener("submit", function (e) {
  e.preventDefault();
  const name = document.getElementById("user_name").value;
  const email = document.getElementById("user_email").value;
  const number = document.getElementById("user_number").value;
  const whatsappNumber = 6289611092;
  const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0AContact Number: ${number}`;
  const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
  form.reset();

  window.location.href = whatsappURL;
});

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

try {
  function rightClick() {
    testimoniSlider.scrollLeft += testimoniSlider.scrollWidth;
  }

  function leftClick() {
    testimoniSlider.scrollLeft -= testimoniSlider.scrollWidth;
  }

  const swiper = new Swiper(".swiper", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    loop: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  viewDetailsBtns.forEach((e) => {
    e.addEventListener("click", () => {
      const prevElem = e.previousElementSibling;
      prevElem.classList.toggle("h-auto");
      if (prevElem.classList.contains("h-auto")) {
        e.textContent = "Hide Details";
      } else {
        e.textContent = "View Details";
      }
    });
  });
} catch (error) {}

const numberCounting = document.querySelectorAll(".achievement-count > span");
const intervalTime = 4000;
const observerOptions = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const val = entry.target;
      let startValue = 0;
      let endValue = parseInt(val.getAttribute("data-val"));
      let duration = Math.floor(intervalTime / endValue);

      let counter = setInterval(() => {
        startValue += 3;
        val.textContent = startValue;
        if (startValue >= endValue) {
          clearInterval(counter);
          val.textContent = endValue; // Ensure it ends exactly at endValue
        }
      }, duration);

      observer.unobserve(val);
    }
  });
}, observerOptions);

numberCounting.forEach((val) => {
  observer.observe(val);
});
