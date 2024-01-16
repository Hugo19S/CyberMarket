function swiper() {
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            centeredSlide: true,
            fade: true,
            grabCursor: true,
            pagination: {
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 4,
                },
            },
        });
    });
}


function sideMenu() {
    var menuButton = document.getElementById("menu-button");
    var menu = document.getElementById("menu");
    var menu_list = document.getElementById("list-menu");
    var content = document.getElementById('content');

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
}


function sideBar() {
    const sidebarButtons = document.querySelectorAll('[data-sidebar-toggle]');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    sidebarButtons.forEach(button => {
        button.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            overlay.classList.toggle('hidden');
        });
    });

}


