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
  var lines = document.querySelectorAll('.block-field-blocknodepagefield-texte-des-missions .field__item p, .block-field-blocknodepagefield-texte-des-missions .field__item h4');
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

document.addEventListener('DOMContentLoaded', function () {
  var archiveLinks = document.querySelectorAll('.ansd-pub-archives__list a');
  archiveLinks.forEach(function (link) {
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener noreferrer');
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var links = document.querySelectorAll('.ansd-pub-sidebar a');
  links.forEach(function (link) {
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener noreferrer');
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var links = document.querySelectorAll('.ansd-pub-sidebar a, .ansd-pub-themes-similaires a');
  links.forEach(function (link) {
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener noreferrer');
  });
});

(function () {
  function revealRows() {
    var rows = document.querySelectorAll('.view-id-ressources .views-row');
    if (!rows.length) return;

    if (!('IntersectionObserver' in window)) return;

    rows.forEach(function (row) { row.classList.add('will-animate'); });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry, i) {
        if (entry.isIntersecting) {
          setTimeout(function () {
            entry.target.classList.remove('will-animate');
            entry.target.classList.add('is-visible');
          }, i * 60);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    rows.forEach(function (row) { observer.observe(row); });
  }

  document.addEventListener('DOMContentLoaded', revealRows);
})();


document.addEventListener('DOMContentLoaded', function () {
  var table = document.querySelector('.view-calendrier-de-publications table');
  if (!table) return;

  var headers = Array.from(table.querySelectorAll('thead th')).map(function (th) {
    return th.textContent.trim();
  });

  table.querySelectorAll('tbody tr').forEach(function (row) {
    Array.from(row.children).forEach(function (cell, i) {
      if (headers[i]) {
        cell.setAttribute('data-label', headers[i]);
      }
    });
  });
});

document.addEventListener('DOMContentLoaded', function () {

  const PER_PAGE = 5;

  document.querySelectorAll('.ansd-pub-archives__list').forEach(function (list) {
    const links = Array.from(list.querySelectorAll('a'));
    if (links.length <= PER_PAGE) return; // pas besoin de pagination

    let currentPage = 0;
    const totalPages = Math.ceil(links.length / PER_PAGE);

    // Créer les contrôles de pagination
    const controls = document.createElement('div');
    controls.className = 'ansd-pub-archives__pagination';

    const prevBtn = document.createElement('button');
    prevBtn.type = 'button';
    prevBtn.className = 'ansd-pub-archives__page-btn';
    prevBtn.textContent = '←';

    const pageInfo = document.createElement('span');
    pageInfo.className = 'ansd-pub-archives__page-info';

    const nextBtn = document.createElement('button');
    nextBtn.type = 'button';
    nextBtn.className = 'ansd-pub-archives__page-btn';
    nextBtn.textContent = '→';

    controls.appendChild(prevBtn);
    controls.appendChild(pageInfo);
    controls.appendChild(nextBtn);
    list.appendChild(controls);

    function render() {
      links.forEach(function (link, index) {
        const start = currentPage * PER_PAGE;
        const end = start + PER_PAGE;
        link.style.display = (index >= start && index < end) ? '' : 'none';
      });
      pageInfo.textContent = (currentPage + 1) + ' / ' + totalPages;
      prevBtn.disabled = currentPage === 0;
      nextBtn.disabled = currentPage === totalPages - 1;
    }

    prevBtn.addEventListener('click', function () {
      if (currentPage > 0) { currentPage--; render(); }
    });

    nextBtn.addEventListener('click', function () {
      if (currentPage < totalPages - 1) { currentPage++; render(); }
    });

    render();
  });

});


// Accordéon "Thèmes similaires" sur la fiche publication
document.addEventListener('DOMContentLoaded', function () {
  var box = document.querySelector('.ansd-pub-themes-similaires');
  if (!box) return;
  var heading = box.querySelector('h3');
  if (!heading) return;
  heading.addEventListener('click', function () {
    box.classList.toggle('is-open');
  });
});
// ===== Filtre dynamique Département selon Région (Répertoire des Localités) =====
(function () {
  const regionDepartements = {
    'DAKAR': ['Dakar', 'Guédiawaye', 'Pikine', 'Rufisque', 'Keur Massar'],
    'ZIGUINCHOR': ['Ziguinchor', 'Bignona', 'Oussouye'],
    'DIOURBEL': ['Diourbel', 'Bambey', 'Mbacké'],
    'SAINT-LOUIS': ['Saint-Louis', 'Dagana', 'Podor'],
    'TAMBACOUNDA': ['Tambacounda', 'Bakel', 'Goudiry', 'Koumpentoum'],
    'KAOLACK': ['Kaolack', 'Guinguinéo', 'Nioro du Rip'],
    'THIES': ['Thiès', 'Mbour', 'Tivaouane'],
    'LOUGA': ['Louga', 'Kébémer', 'Linguère'],
    'FATICK': ['Fatick', 'Foundiougne', 'Gossas'],
    'KOLDA': ['Kolda', 'Vélingara', 'Médina Yoro Foula'],
    'MATAM': ['Matam', 'Kanel', 'Ranérou'],
    'KAFFRINE': ['Kaffrine', 'Birkelane', 'Koungheul', 'Malem Hodar'],
    'KEDOUGOU': ['Kédougou', 'Salémata', 'Saraya'],
    'SEDHIOU': ['Sédhiou', 'Bounkiling', 'Goudomp']
  };

  function filterDepartements(regionSelect, deptWrapper) {
    const deptRadios = deptWrapper.querySelectorAll('.form-check.form-item-departement');
    const selectedRegionText = regionSelect.options[regionSelect.selectedIndex].text.trim();
    const allowedList = regionDepartements[selectedRegionText] || null;

    deptRadios.forEach(function (radioWrap) {
      const label = radioWrap.querySelector('label');
      const input = radioWrap.querySelector('input[type="radio"]');
      if (!label || !input) return;

      const labelText = label.textContent.trim();

      if (labelText === '- Tout -' || !allowedList) {
        radioWrap.style.display = '';
        return;
      }

      if (allowedList.includes(labelText)) {
        radioWrap.style.display = '';
      } else {
        radioWrap.style.display = 'none';
        if (input.checked) {
          const allOption = deptWrapper.querySelector('input[value="All"]');
          if (allOption) allOption.checked = true;
        }
      }
    });
  }

  function attachFilter(context) {
    const regionSelect = context.querySelector
  ? context.querySelector('[id^="edit-term-node-tid-depth"]')
  : document.querySelector('[id^="edit-term-node-tid-depth"]');
    const deptWrapper = context.querySelector('[id^="edit-departement--"][id$="--wrapper"]') 
  || document.querySelector('[id^="edit-departement--"][id$="--wrapper"]');

    if (!regionSelect || !deptWrapper) return;
    if (regionSelect.dataset.deptFilterAttached) return;
    regionSelect.dataset.deptFilterAttached = 'true';

    regionSelect.addEventListener('change', function () {
      filterDepartements(regionSelect, deptWrapper);
    });

    filterDepartements(regionSelect, deptWrapper);
  }

  // Premier chargement de page
  document.addEventListener('DOMContentLoaded', function () {
    attachFilter(document);
  });

  // Réattache après chaque mise à jour AJAX de Drupal (BEF, pager, etc.)
  if (typeof Drupal !== 'undefined' && Drupal.behaviors) {
    Drupal.behaviors.departementFilterDynamic = {
      attach: function (context) {
        attachFilter(context);
      }
    };
  }
})();
document.addEventListener('DOMContentLoaded', function () {
  var exportBtns = document.querySelectorAll('#export-csv-btn, #export-xls-btn');
  if (exportBtns.length) {
    var basePaths = {};
    exportBtns.forEach(function (btn) {
      basePaths[btn.id] = btn.getAttribute('href').split('?')[0];
    });

    function updateExportLinks() {
      exportBtns.forEach(function (btn) {
        btn.href = basePaths[btn.id] + window.location.search;
      });
    }

    updateExportLinks();

    var exposedForm = document.querySelector('.views-exposed-form');
    if (exposedForm) {
      exposedForm.addEventListener('submit', function () {
        setTimeout(updateExportLinks, 300);
      });
    }
  }
});

// ===== Transforme le tableau Répertoire des Localités en cartes sur mobile =====
(function () {
  function addDataLabels(context) {
    const table = context.querySelector
      ? context.querySelector('.view-repertoire-des-localites table')
      : document.querySelector('.view-repertoire-des-localites table');
    if (!table) return;

    const headers = Array.from(table.querySelectorAll('thead th')).map(th => th.textContent.trim());
    const rows = table.querySelectorAll('tbody tr');

    rows.forEach(function (row) {
      const cells = row.querySelectorAll('td');
      cells.forEach(function (cell, i) {
        if (headers[i]) {
          cell.setAttribute('data-label', headers[i]);
        }
      });
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    addDataLabels(document);
  });

  if (typeof Drupal !== 'undefined' && Drupal.behaviors) {
    Drupal.behaviors.localitesTableCards = {
      attach: function (context) {
        addDataLabels(context);
      }
    };
  }
})();
(function () {
  function initCarousel(carousel) {
    var slides = carousel.querySelectorAll('.ansd-actualite__slide');
    var nav = carousel.parentElement.querySelector('.ansd-actualite__carousel-nav');
    if (!nav || slides.length < 2) return;

    var current = 0;
    var prevBtn = nav.querySelector('.ansd-carousel-prev');
    var nextBtn = nav.querySelector('.ansd-carousel-next');

    function showSlide(index) {
      slides[current].classList.remove('is-active');
      current = (index + slides.length) % slides.length;
      slides[current].classList.add('is-active');
    }

    prevBtn.addEventListener('click', function () {
      showSlide(current - 1);
    });

    nextBtn.addEventListener('click', function () {
      showSlide(current + 1);
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-carousel]').forEach(initCarousel);
  });
})();


document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.ansd-parution-carousel').forEach(function (carousel) {
    var slides = carousel.querySelectorAll('.ansd-parution-slide');
    var dotsWrap = carousel.querySelector('.ansd-parution-dots');
    if (!slides.length || !dotsWrap) return;

    var current = 0;

    slides.forEach(function (_, i) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'ansd-parution-dot' + (i === 0 ? ' is-active' : '');
      dot.addEventListener('click', function () { goTo(i); });
      dotsWrap.appendChild(dot);
    });

    var dots = dotsWrap.querySelectorAll('.ansd-parution-dot');

    function goTo(index) {
      slides[current].classList.remove('is-active');
      dots[current].classList.remove('is-active');
      current = index;
      slides[current].classList.add('is-active');
      dots[current].classList.add('is-active');
    }

    setInterval(function () {
      goTo((current + 1) % slides.length);
    }, 6000);
  });
});

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-ansd-carousel]').forEach(function (car) {
      var slides = car.querySelectorAll('.ansd-parution-slide');
      if (!slides.length) return;

      var pageCount = Math.ceil(slides.length / 2);
      var page = 0, timer;
      var cur = car.querySelector('.ansd-cur');
      var tot = car.querySelector('.ansd-tot');
      if (tot) tot.textContent = pageCount;

      function show(n) {
        page = (n + pageCount) % pageCount;
        var start = page * 2;
        slides.forEach(function (s, k) {
          s.classList.toggle('is-active', k === start || k === start + 1);
        });
        if (cur) cur.textContent = page + 1;
      }

      function restart() {
        clearInterval(timer);
        timer = setInterval(function () { show(page + 1); }, 7000);
      }

      car.querySelector('.ansd-parution-next').addEventListener('click', function () { show(page + 1); restart(); });
      car.querySelector('.ansd-parution-prev').addEventListener('click', function () { show(page - 1); restart(); });

      show(0);
      restart();
    });
  });
})();