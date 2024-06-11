// navigationHamburger
const mobileMenuOpenButton = document.querySelector("#mobile-menu-open");
const mobileMenuCloseButton = document.querySelector("#mobile-menu-close");
const nav = document.querySelector("#nav");

mobileMenuOpenButton.addEventListener("click", () => {
  // make the nav visible via style
  nav.style.display = "block";
  mobileMenuCloseButton.style.display = "block";
  mobileMenuOpenButton.style.display = "none";
});

mobileMenuCloseButton.addEventListener("click", () => {
  // make the nav invisible via style
  nav.style.display = "none";
  mobileMenuCloseButton.style.display = "none";
  mobileMenuOpenButton.style.display = "block";
});
