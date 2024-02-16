document.addEventListener("DOMContentLoaded", function () {
    var statusElements = document.querySelectorAll(".status");

    statusElements.forEach(function (statusElement) {
        var statusTextElement = statusElement.querySelector("#status-text");
        var statusText = statusTextElement.innerText.trim();
        var backgroundColor;

        switch (statusText) {
            case "Completo":
                backgroundColor = "#ccffcc";
                statusElement.style.border = "1px solid #00cc00";
                break;
            case "Pendente":
                backgroundColor = "#ffffcc";
                statusElement.style.border = "1px solid #cccc00";
                break;
            case "Cancelado":
                backgroundColor = "#ffb3b3";
                statusElement.style.border = "1px solid #cc0000";
                break;
            default:
                backgroundColor = "gray";
                break;
        }

        statusElement.style.backgroundColor = backgroundColor;
    });
});
