let menuButton = document.getElementById("menu-button-admin");
let menu = document.getElementById("menu-admin");
let menu_list = document.getElementById("list-menu-admin");
let content = document.getElementById('content-admin');

menuButton.addEventListener("click", function () {
    if (menu_list.style.display === "none") {
        menu_list.style.display = "block";
        menu.style.backgroundColor = "#9FC5F8";
        menuButton.classList.remove("active");
        content.style.width = "95vw";
    } else {
        menu_list.style.display = "none";
        menu.style.backgroundColor = "transparent";
        menuButton.classList.add("active");
        content.style.width = "100vw";

    }
});



