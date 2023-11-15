
    document.addEventListener("DOMContentLoaded", function () {
        const menuIcon = document.getElementById("menu-icon");
        const nav = document.querySelector("header nav");

        menuIcon.addEventListener("click", function () {
            menuIcon.classList.toggle("active");
            nav.classList.toggle("active");
        });
    });
