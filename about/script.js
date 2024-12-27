// Optional: Add any scroll-based animations
window.addEventListener("scroll", function () {
  const aboutSection = document.querySelector(".about-section");
  const windowHeight = window.innerHeight;
  const sectionPos = aboutSection.getBoundingClientRect().top;
  if (sectionPos < windowHeight - 100) {
    aboutSection.classList.add("active");
  }
});



window.addEventListener("scroll", function () {
  const cards = document.querySelectorAll(".founder-card");
  const windowHeight = window.innerHeight;
  const revealPoint = 150;

  cards.forEach((card) => {
    const cardTop = card.getBoundingClientRect().top;

    if (cardTop < windowHeight - revealPoint) {
      card.classList.add("active");
    } else {
      card.classList.remove("active");
    }
  });
});
