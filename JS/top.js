
const toTopButton = document.getElementById("toTopButton");

window.onscroll = function () {
if (window.pageYOffset > 300) {
toTopButton.style.display = "block";
} else {
toTopButton.style.display = "none";
}
};

function scrollToTop() {
window.scrollTo({ top: 0, behavior: 'smooth' });
}
