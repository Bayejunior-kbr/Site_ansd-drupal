(function () {
  function initRegionsMap() {
    var mapContainer = document.getElementById('regions-leaflet-map');
    if (!mapContainer) return;

    var regionElements = document.querySelectorAll('.region-data');
    if (!regionElements.length) return;

    var map = L.map('regions-leaflet-map').setView([14.4974, -14.4524], 7);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var markersByTid = {};
    var select = document.getElementById('regions-filter-select');

    regionElements.forEach(function (el) {
      var name = el.getAttribute('data-name');
      var lat = parseFloat(el.getAttribute('data-lat'));
      var lng = parseFloat(el.getAttribute('data-lng'));
      var population = el.getAttribute('data-population');
      var tid = el.getAttribute('data-tid');

      if (isNaN(lat) || isNaN(lng)) return;

      var marker = L.marker([lat, lng]).addTo(map);

      var popupContent =
        '<strong>' + name + '</strong><br>' +
        'Population Totale: ' + (population || 'N/A') + '<br>' +
        '<a href="' + drupalSettings.path.baseUrl + 'taxonomy/term/' + tid + '">Voir plus</a>';

      marker.bindPopup(popupContent);
      markersByTid[tid] = { marker: marker, lat: lat, lng: lng };

      if (select) {
        var option = document.createElement('option');
        option.value = tid;
        option.textContent = name;
        select.appendChild(option);
      }
    });

    if (select) {
      select.addEventListener('change', function () {
        var selectedTid = select.value;

        if (!selectedTid) {
          map.setView([14.4974, -14.4524], 7);
          return;
        }

        var data = markersByTid[selectedTid];
        if (data) {
          map.setView([data.lat, data.lng], 14);
          data.marker.openPopup();
        }
      });
    }
  }

  document.addEventListener('DOMContentLoaded', initRegionsMap);
})();

(function () {
  function initContactMap() {
    var mapContainer = document.getElementById('contact-leaflet-map');
    if (!mapContainer) return;

    var map = L.map('contact-leaflet-map').setView([14.7167, -17.4677], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    L.marker([14.7167, -17.4677]).addTo(map)
      .bindPopup('Agence Nationale de la Statistique et de la Démographie')
      .openPopup();
  }

  document.addEventListener('DOMContentLoaded', initContactMap);
})();

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    var mapContainer = document.getElementById('contact-leaflet-map');
    if (!mapContainer) return;

    mapContainer.addEventListener('click', function () {
      var lat = mapContainer.getAttribute('data-lat');
      var lng = mapContainer.getAttribute('data-lng');
      if (!lat || !lng) return;
      window.open('https://www.google.com/maps?q=' + lat + ',' + lng, '_blank');
    });
  });
})();