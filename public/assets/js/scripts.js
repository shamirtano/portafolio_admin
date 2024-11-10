let skills_value = document.querySelectorAll(".skills__value");

function animateProgressBar(element, percentage) {
    element.style.width = percentage + "%";
    element.textContent =
        element.textContent.split(" - ")[0] + " - " + percentage + "%";
}

document.addEventListener("DOMContentLoaded", function (json_data) {
    let progressValues = JSON.parse(json_data).data;
    progressValues.forEach((value, index) => {
        let progressBar = document.getElementById("progress-bar-" + index);
        let percentage = value.porcentaje;
        progressBar.style.animation = "progress 2s forwards";
        setTimeout(
            () => {
                animateProgressBar(progressBar, percentage);
            },
            2000 * (index + 1),
        );
    });
});
