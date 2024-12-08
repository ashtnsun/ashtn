const images = document.querySelectorAll(".myImage");

images.forEach(function(image) {
    image.addEventListener("mouseover", function() {
    image.style.transform = "scale(1.2)";
    });

    image.addEventListener("mouseout", function() {
    image.style.transform = "scale(1)";
    });
});