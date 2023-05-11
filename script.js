const checkbox1 = document.getElementById("modeDarkToggle");
const checkbox2 = document.getElementById("modeDarkToggle2");
const carousel = document.getElementById("carouselExampleIndicators");
const hamburger = document.getElementById("hamburgerMobile");
const navMenu = document.querySelector(".nav-menu");

function darkmode() {
  var SetTheme = document.body;
  SetTheme.classList.toggle("dark-mode");
  var theme;
  if (SetTheme.classList.contains("dark-mode")) {
    console.log("Dark mode");
    theme = "DARK";
  } else {
    console.log("Light mode");
    theme = "LIGHT";
  }

  localStorage.setItem("PageTheme", JSON.stringify(theme));
}

setInterval(() => {
  let GetTheme = JSON.parse(localStorage.getItem("PageTheme"));
  console.log(GetTheme);
  if (GetTheme === "DARK") {
    document.body.classList = "dark-mode";
    checkbox1.checked = true;
    checkbox2.checked = true;
    carousel.classList.remove("carousel-dark");
  } else {
    document.body.classList = "";
    checkbox1.checked = false;
    checkbox2.checked = false;
    carousel.classList.add("carousel-dark");
  }
});

hamburger.addEventListener("click", () => {
  /* Toggle active class */
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");

  /* Toggle aria-expanded value */
  let menuOpen = navMenu.classList.contains("active");
  let newMenuOpenStatus = menuOpen;
  hamburger.setAttribute("aria-expanded", newMenuOpenStatus);
});

// close mobile menu
document.getElementById("hamburgerMobile");
n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
});

const hamburgerMenu = document.querySelector("#hamburger-menu");
const overlay = document.querySelector("#overlay");
const nav1 = document.querySelector("#nav-1");
const nav2 = document.querySelector("#nav-2");
const nav3 = document.querySelector("#nav-3");
const nav4 = document.querySelector("#nav-4");
const nav5 = document.querySelector("#nav-5");
const navItems = [nav1, nav2, nav3, nav4, nav5];

// Control Navigation Animation
function navAnimation(val1, val2) {
  navItems.forEach((nav, i) => {
    nav.classList.replace(`slide-${val1}-${i + 1}`, `slide-${val2}-${i + 1}`);
  });
}

function toggleNav() {
  // Toggle: Hamburger Open/Close
  hamburgerMenu.classList.toggle("active");

  //   Toggle: Menu Active
  overlay.classList.toggle("overlay-active");

  if (overlay.classList.contains("overlay-active")) {
    // Animate In - Overlay
    overlay.classList.replace("overlay-slide-left", "overlay-slide-right");

    // Animate In - Nav Items
    navAnimation("out", "in");
  } else {
    // Animate Out - Overlay
    overlay.classList.replace("overlay-slide-right", "overlay-slide-left");

    // Animate Out - Nav Items
    navAnimation("in", "out");
  }
}

// Events Listeners
hamburgerMenu.addEventListener("click", toggleNav);
navItems.forEach((nav) => {
  nav.addEventListener("click", toggleNav);
});
