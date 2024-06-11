// navigationHamburger
const mobileMenuOpenButton = document.querySelector("#mobile-menu-open");
const mobileMenuCloseButton = document.querySelector("#mobile-menu-close");
const nav = document.querySelector("#nav");

mobileMenuOpenButton.addEventListener("click", () => {
  // change visibility when the hamburger is clicked
  nav.classList.toggle("hidden");
  mobileMenuOpenButton.classList.add("hidden");
  mobileMenuCloseButton.classList.remove("hidden");
});

mobileMenuCloseButton.addEventListener("click", () => {
  // change visibility when the close button is clicked
  nav.classList.toggle("hidden");
  mobileMenuOpenButton.classList.remove("hidden");
  mobileMenuCloseButton.classList.add("hidden");
});
