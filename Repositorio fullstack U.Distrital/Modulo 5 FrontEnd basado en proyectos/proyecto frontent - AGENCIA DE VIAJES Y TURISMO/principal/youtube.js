// youtube.js

// Cargar la API de YouTube
function loadYouTubePlayerAPI() {
    const tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/player_api';
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  }
  
  // Crear el reproductor de YouTube
  function createYouTubePlayer() {
    new YT.Player('player', {
      videoId: 'icMPQ84mG1Y',
      events: {
        onStateChange: onPlayerStateChange,
      },
    });
  }
  
  // Cambiar el estado del reproductor cuando se hace clic en el video
  function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.PLAYING) {
      event.target.pauseVideo();
    } else if (event.data === YT.PlayerState.PAUSED) {
      event.target.playVideo();
    }
  }
  
  // Cargar la API de YouTube y crear el reproductor cuando esté listo
  window.onYouTubeIframeAPIReady = function () {
    createYouTubePlayer();
  };
  
  // Cargar la API de YouTube
  loadYouTubePlayerAPI();
  