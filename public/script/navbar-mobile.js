document.addEventListener('DOMContentLoaded', () => {

    function actualiserNavbar() {
        const width = window.innerWidth;
        if (width <= 1093) {
            navbar.style.display = "none";
        } else {
            navbar.style.display = "block";
        }
    }

    window.addEventListener('resize', actualiserNavbar);

    const navbar = document.querySelector("nav");
    const menu = document.getElementById("menu");
    menu.addEventListener("click", () => {
        navbar.style.display = navbar.style.display === "none" ? "block" : "none";
    })
});