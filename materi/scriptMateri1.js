// script.js
function createYouTubePlayer(playerId, videoId) {
  return new YT.Player(playerId, {
    height: '360',
    width: '640',
    videoId: videoId,
    playerVars: {
      'autoplay': 0,
      'rel': 0,
      'showinfo': 0,
    },
  });
}

function onYouTubeIframeAPIReady() {
  const videoContainers = document.querySelectorAll('.video-container');
  videoContainers.forEach((container) => {
    const videoId = container.dataset.videoId;
    const playerId = `player-${videoId}`;

    const playerDiv = document.createElement('div');
    playerDiv.setAttribute('id', playerId);
    container.appendChild(playerDiv);

    const player = createYouTubePlayer(playerId, videoId);
    container.addEventListener('click', () => {
      player.playVideo();
    });
  });
}
