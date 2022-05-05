// #### First Observer ####
const observerOne = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      return;
    }
  });
});

observerOne.observe(document.querySelector(".title-slider"));

// #### Second Observer ####
const observerTwo = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      return;
    }
  });
});

observerTwo.observe(document.querySelector(".title-slider.two"));

// #### Third Observer ####
const observerThree = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      return;
    }
  });
});

observerThree.observe(document.querySelector(".title-slider.three"));

// #### Footer Observer ####
const footerObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      return;
    }
  });
});

footerObserver.observe(document.querySelector(".title-slider.footer"));
