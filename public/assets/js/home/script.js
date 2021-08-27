var btn = document.getElementById("btn-icone");
var container = document.querySelector("#hamb");
btn.addEventListener("click", function () {
    if (container.style.display === "block") {
        container.style.display = "none";
    } else {
        container.style.display = "block";
    }
});
