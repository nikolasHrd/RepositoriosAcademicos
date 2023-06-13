const $openClose = document.getElementById("open-close");
const $aside = document.getElementById("aside");

$openClose.addEventListener("click", () => {
  $aside.classList.toggle("desplegar");
});

const video = document.getElementById('video');

video.addEventListener('click', () => {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
});
