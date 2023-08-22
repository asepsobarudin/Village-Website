// Hanberger Menu
var navbar = document.getElementById("navbar");
var navbar_top = document.getElementById("navbar_top");
var hamburger = document.getElementById("hamburger");
var value_hamburger = document.getElementById("value_hamburger");

function hamburger_menu() {
    if (hamburger.checked) {
        value_hamburger.classList.remove("hidden");
        value_hamburger.classList.add("block");
    } else {
        value_hamburger.classList.remove("block");
        value_hamburger.classList.add("hidden");
    }
}

hamburger.addEventListener("click", () => {
    hamburger_menu();
});

window.addEventListener("resize", () => {
    if (hamburger.checked) {
        hamburger.checked = false;
        hamburger_menu();
    }
});

window.addEventListener("scroll", function () {
    if (window.pageYOffset >= 50) {
        navbar_top.classList.remove("lg:top-0");
        navbar_top.classList.add("lg:top-[-40px]");

        navbar.classList.remove("lg:bg-color1");
        navbar.classList.remove("lg:top-[40px]");
        navbar.classList.add("lg:bg-color1/80");
        navbar.classList.add("lg:top-0");
    } else {
        navbar_top.classList.remove("lg:top-[-40px]");
        navbar_top.classList.add("lg:top-0");

        navbar.classList.remove("lg:top-0");
        navbar.classList.remove("lg:bg-color1/80");
        navbar.classList.add("lg:top-[40px]");
        navbar.classList.add("lg:bg-color1");
    }
});
// End Hanberger Menu

// Back to Top
var backToTopButton = document.getElementById("backToTop");
var container = document.getElementById("container");

window.addEventListener("scroll", function () {
    if (window.pageYOffset > 300) {
        backToTopButton.classList.remove("hidden");
        backToTopButton.classList.add("block");
    } else {
        backToTopButton.classList.remove("block");
        backToTopButton.classList.add("hidden");
    }
});

backToTopButton.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});
//End back to Top
