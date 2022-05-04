// Observer one
const observerOne = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      return;
    }
  });
});

observerOne.observe(document.querySelector(".title-slider"));

// Observer two
const observerTwo = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      return;
    }
  });
});

observerTwo.observe(document.querySelector(".title-slider.two"));

// Observer three
const observerThree = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      return;
    }
  });
});

observerThree.observe(document.querySelector(".title-slider.three"));
