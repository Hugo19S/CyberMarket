var menuButton = document.getElementById("menu-button");
var menu = document.getElementById("menu");
var menu_list = document.getElementById("list-menu");
var content = document.getElementById('content');

menuButton.addEventListener("click", function() {
  if (menu_list.style.display === "none") {
    menu_list.style.display = "block";
    menu.style.backgroundColor = "#9FC5F8";
    menuButton.classList.remove("active");
    content.style.width = "95vw";
  } 
  else {
    menu_list.style.display = "none";
    menu.style.backgroundColor = "transparent";
    menuButton.classList.add("active");
    content.style.width = "100vw";
    
  }
});