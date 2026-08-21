(function (Drupal, once) {
  'use strict';

  function initCarousel(container) {
    var pubs;
    try {
      pubs = JSON.parse(container.getAttribute('data-pubs') || '[]');
    } catch (e) {
      console.error('ansd-phare-pubs: data-pubs JSON invalide', e);
      return;
    }
    if (!pubs.length) {
      return;
    }

    var originalOrder = pubs.slice();
    var reversedOrder = pubs.slice().reverse();

    var perPage = parseInt(container.getAttribute('data-per-page'), 10) || 8;
    var currentPage = 0;
    var currentPubs = originalOrder;

    var grid = container.querySelector('.ansd-phare-pubs__grid');
    var dots = container.querySelector('.ansd-phare-pubs__dots');
    var prevBtn = container.querySelector('[data-role="prev"]');
    var nextBtn = container.querySelector('[data-role="next"]');
    var sortSelect = container.querySelector('.ansd-phare-pubs__filter');

    if (!grid) {
      return;
    }

    function buildDots() {
      if (!dots) {
        return;
      }
      dots.innerHTML = '';
      var totalPages = Math.ceil(currentPubs.length / perPage);
      for (var i = 0; i < totalPages; i++) {
        (function (index) {
          var dot = document.createElement('span');
          dot.className = 'dot' + (index === currentPage ? ' active' : '');
          dot.addEventListener('click', function () {
            currentPage = index;
            render();
          });
          dots.appendChild(dot);
        })(i);
      }
    }

    function render() {
      var totalPages = Math.ceil(currentPubs.length / perPage);
      grid.innerHTML = '';
      var start = currentPage * perPage;
      var items = currentPubs.slice(start, start + perPage);
      items.forEach(function (p) {
        var card = document.createElement('div');
        card.className = 'ansd-phare-pub';
        card.innerHTML =
          '<span class="ansd-phare-pub__num">' + p.num + ', ' + p.date + '</span>' +
          '<a href="' + p.link + '" class="ansd-phare-pub__link">Télécharger ↓</a>';
        grid.appendChild(card);
      });
      buildDots();
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        var totalPages = Math.ceil(currentPubs.length / perPage);
        currentPage = currentPage === 0 ? totalPages - 1 : currentPage - 1;
        render();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        var totalPages = Math.ceil(currentPubs.length / perPage);
        currentPage = currentPage === totalPages - 1 ? 0 : currentPage + 1;
        render();
      });
    }

    if (sortSelect) {
      sortSelect.addEventListener('change', function () {
        currentPubs = this.value === 'desc' ? originalOrder : reversedOrder;
        currentPage = 0;
        render();
      });
    }

    render();
  }

  Drupal.behaviors.ansdPharePubs = {
    attach: function (context) {
      once('ansd-phare-pubs', '.ansd-phare-pubs[data-pubs]', context).forEach(initCarousel);
    }
  };

})(Drupal, once);