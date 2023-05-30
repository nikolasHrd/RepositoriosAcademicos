const $openClose = document.getElementById("open-close");
const $aside = document.getElementById("aside");

$openClose.addEventListener("click", () => {
  $aside.classList.toggle("hidden");
});