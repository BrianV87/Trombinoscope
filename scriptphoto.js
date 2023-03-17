document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".galerie img");
    const options = {
      root: null,
      threshold: 0.1,
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("fade-in");
        } else {
          entry.target.classList.remove("fade-in");
        }
      });
    }, options);

    images.forEach((img) => {
      observer.observe(img);
    });
  });