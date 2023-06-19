const $openClose = document.getElementById("open-close");
const $aside = document.getElementById("aside");

$aside.classList.add("desplegar");

$openClose.addEventListener("click", () => {
  $aside.classList.toggle("desplegar");
});
