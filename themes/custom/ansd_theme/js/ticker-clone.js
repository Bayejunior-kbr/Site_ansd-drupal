window.addEventListener('load', function () {
  var track = document.querySelector('.ansd-ticker-track');
  if (!track) return;

  track.innerHTML += track.innerHTML;

  var pixelsPerSecond = 35;
  var fullWidth = track.scrollWidth / 2;
  var duration = fullWidth / pixelsPerSecond;

  track.style.animation = 'none';
  void track.offsetWidth;
  track.style.animation = 'ansd-ticker-scroll ' + duration + 's linear infinite';
});