/* À coller à la fin de themes/custom/ansd_theme/js/script.js */
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.view-notre-histoire .view-content').forEach(function (content) {
    var rows = Array.from(content.querySelectorAll(':scope > .views-row'));
    if (rows.length < 2 || content.dataset.historySliderReady) return;
    content.dataset.historySliderReady = 'true';

    var slider = document.createElement('div');
    slider.className = 'ansd-history-slider';
    slider.setAttribute('aria-label', 'Historique des directeurs généraux');

    var viewport = document.createElement('div');
    viewport.className = 'ansd-history-viewport';
    var track = document.createElement('div');
    track.className = 'ansd-history-track';
    viewport.appendChild(track);
    slider.appendChild(viewport);

    rows.forEach(function (row) {
      row.classList.add('ansd-history-slide');
      track.appendChild(row);
    });

    var controls = document.createElement('div');
    controls.className = 'ansd-history-controls';
    var dots = document.createElement('div');
    dots.className = 'ansd-history-dots';
    var buttons = document.createElement('div');
    buttons.className = 'ansd-history-buttons';
    var current = 0;
    var timer;

    function render() {
      rows.forEach(function (row, i) {
        var offset = i - current;
        var abs = Math.abs(offset);
        var x = offset * 62;
        var scale = abs === 0 ? 1 : abs === 1 ? 0.8 : 0.65;
        var rotate = offset * -22;
        var z = -abs * 220;
        var opacity = abs > 2 ? 0 : abs === 0 ? 1 : abs === 1 ? 0.55 : 0.25;

        row.style.transform = 'translateX(-50%) translateX(' + x + '%) translateZ(' + z + 'px) rotateY(' + rotate + 'deg) scale(' + scale + ')';
        row.style.opacity = opacity;
        row.style.zIndex = String(100 - abs);
        row.style.pointerEvents = abs === 0 ? 'auto' : 'none';
        row.setAttribute('aria-hidden', i === current ? 'false' : 'true');
      });
      dots.querySelectorAll('button').forEach(function (dot, i) {
        dot.setAttribute('aria-current', i === current ? 'true' : 'false');
      });
    }

    function goTo(index) {
      current = (index + rows.length) % rows.length;
      render();
    }

    function restart() {
      window.clearInterval(timer);
      timer = window.setInterval(function () { goTo(current + 1); }, 6000);
    }

    rows.forEach(function (_, index) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'ansd-history-dot';
      dot.setAttribute('aria-label', 'Afficher le directeur ' + (index + 1));
      dot.addEventListener('click', function () { goTo(index); restart(); });
      dots.appendChild(dot);
    });

    [['←', 'Précédent', -1], ['→', 'Suivant', 1]].forEach(function (item) {
      var button = document.createElement('button');
      button.type = 'button';
      button.className = 'ansd-history-button';
      button.textContent = item[0];
      button.setAttribute('aria-label', item[1]);
      button.addEventListener('click', function () { goTo(current + item[2]); restart(); });
      buttons.appendChild(button);
    });

    controls.appendChild(dots);
    controls.appendChild(buttons);
    slider.appendChild(controls);
    content.replaceChildren(slider);

    slider.addEventListener('mouseenter', function () { window.clearInterval(timer); });
    slider.addEventListener('mouseleave', restart);

    render();
    restart();
  });
});

/* Reveal au scroll pour la présentation — bidirectionnel */
document.addEventListener('DOMContentLoaded', function () {
  var lines = document.querySelectorAll('.ansd-reveal__line');
  if (!lines.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      } else {
        entry.target.classList.remove('is-visible');
      }
    });
  }, { threshold: 0.3, rootMargin: '0px 0px -10% 0px' });

  lines.forEach(function (line) { observer.observe(line); });
});


document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.ansd-pub-archives__toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      btn.classList.toggle('is-open');
      btn.nextElementSibling.classList.toggle('is-open');
    });
  });
});