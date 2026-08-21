(function (Drupal, once) {
  Drupal.behaviors.ansdEnquetesTabs = {
    attach: function (context) {
      once('ansd-tabs', '.ansd-tab', context).forEach(function (tab) {
        tab.addEventListener('click', function () {
          var target = this.getAttribute('data-target');

          document.querySelectorAll('.ansd-tab').forEach(function (t) {
            t.classList.remove('active');
          });
          this.classList.add('active');

          var blockA = document.getElementById('block-ansd-theme-views-block-enquetes-et-etudes-block-1');
          var blockB = document.getElementById('block-ansd-theme-views-block-enquetes-et-etudes-block-2');

          [blockA, blockB].forEach(function (b) {
            if (b) b.style.display = 'none';
          });

          var activeBlock = document.getElementById(target);
          if (activeBlock) activeBlock.style.display = 'block';
        });
      });
    }
  };
})(Drupal, once);