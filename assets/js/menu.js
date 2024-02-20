document.addEventListener("DOMContentLoaded", function() {
    const toggleMenuButton = document.getElementById("toggleMenuButton");
    const menu = document.getElementById("menu");
    toggleMenuButton.addEventListener("click", function() {
        menu.classList.toggle("hidden");
    });
});