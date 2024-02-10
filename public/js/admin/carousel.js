
function loadShow(arrayItems, active) {
    let stt = 0;

    if (window.innerWidth <= 768) {
        arrayItems[active].style.transform = `none`;
        arrayItems[active].style.zIndex = 1;
        arrayItems[active].style.filter = 'none';
        arrayItems[active].style.opacity = 1;

        for (var i = active + 1; i < arrayItems.length; i++) {
            stt++;
            arrayItems[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
            arrayItems[i].style.zIndex = -stt;
            arrayItems[i].style.filter = 'blur(5px)';
            arrayItems[i].style.opacity = stt > 2 ? 0 : 0.6;
        }

        stt = 0;

        for (var i = active - 1; i >= 0; i--) {
            stt++;
            arrayItems[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
            arrayItems[i].style.zIndex = -stt;
            arrayItems[i].style.filter = 'blur(5px)';
            arrayItems[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
    } else {
        // Reset styles if window width is greater than 768
        for (var i = 0; i < arrayItems.length; i++) {
            arrayItems[i].style.transform = 'none';
            arrayItems[i].style.zIndex = 'auto';
            arrayItems[i].style.filter = 'none';
            arrayItems[i].style.opacity = 1;
        }
    }
}

function manageDisplayBasedOnWindowWidth(arrayItems, active, next, prev) {
    let widthWindows = window.innerWidth;

    if (widthWindows <= 768) {
        loadShow(arrayItems, active);
        next.onclick = function () {
            active = active + 1 < arrayItems.length ? active + 1 : active;
            loadShow(arrayItems, active);
        };
        prev.onclick = function () {
            active = active - 1 >= 0 ? active - 1 : active;
            loadShow(arrayItems, active);
        };
    } else {
        // Reset styles if window width is greater than 768
        for (var i = 0; i < arrayItems.length; i++) {
            arrayItems[i].style.transform = 'none';
            arrayItems[i].style.zIndex = 'auto';
            arrayItems[i].style.filter = 'none';
            arrayItems[i].style.opacity = 1;
        }
    }
}
/**To last 5 product added -> Home Page*/
let productHome = document.querySelectorAll('.additions .productItem');
let next = document.getElementById('nextProduct');
let prev = document.getElementById('prevProduct');

let activeProduct = 2;
//let activeOrder

/**To last 5 orders -> Home Page*/
let orderHome = document.querySelectorAll('.tbody-orders .row_order_table');
let nextOrder = document.getElementById('nextOrder');
let prevOrder = document.getElementById('prevOrder');

let activeOrder = 2;

manageDisplayBasedOnWindowWidth(productHome, activeProduct, next, prev)
manageDisplayBasedOnWindowWidth(orderHome, activeOrder, nextOrder, prevOrder)

window.addEventListener('resize', function () {
    manageDisplayBasedOnWindowWidth(productHome, activeProduct, next, prev);
    manageDisplayBasedOnWindowWidth(orderHome, activeOrder, nextOrder, prevOrder)
})
