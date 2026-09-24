<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/ansd_theme/templates/page.html.twig */
class __TwigTemplate_0ea94b13bc2df9622dfe34e4113a07c4 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ansd_theme/enquetes-tabs"), "html", null, true);
        yield "
";
        // line 2
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ansd_theme/ticker-clone"), "html", null, true);
        yield "

<section class=\"ansd-hero";
        // line 4
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ansd-hero--no-content";
        }
        yield "\">
  <video class=\"ansd-hero-video\" autoplay muted loop playsinline>
    <source src=\"";
        // line 6
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/video/Drone_filming_building_architecture_202608151235.mp4\" type=\"video/mp4\">
  </video>
  <div class=\"ansd-hero-overlay\"></div>

  <div class=\"ansd-site-header\">
    ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ticker", [], "any", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "      <div class=\"ansd-ticker\">
        <span class=\"ansd-ticker-label\">FLASH STAT</span>
        <div class=\"ansd-ticker-viewport\">
          <div class=\"ansd-ticker-track\">
            <div class=\"ansd-ticker-copy\">";
            // line 16
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ticker", [], "any", false, false, true, 16), "html", null, true);
            yield "</div>
            <div class=\"ansd-ticker-copy\">";
            // line 17
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ticker", [], "any", false, false, true, 17), "html", null, true);
            yield "</div>
          </div>
        </div>
      </div>
    ";
        }
        // line 22
        yield "
    <header class=\"ansd-navbar\">
      <div class=\"ansd-navbar-top\">
        <button class=\"ansd-menu-toggle\" type=\"button\" id=\"ansd-menu-toggle\" aria-label=\"Menu\" aria-expanded=\"false\" aria-controls=\"ansd-primary-menu\">
          <span class=\"ansd-burger\"></span>
          MENU
        </button>

       <div class=\"ansd-navbar-logo\">
  <a href=\"";
        // line 31
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
    <img src=\"";
        // line 32
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/LOGO.png\" alt=\"ANSD - Agence Nationale de la Statistique et de la Démographie\">
  </a>
</div>

        <button class=\"ansd-navbar-search\" type=\"button\" id=\"ansd-search-toggle\" aria-label=\"Recherche\" aria-expanded=\"false\" aria-controls=\"ansd-search-box\">
          RECHERCHE
          <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <circle cx=\"11\" cy=\"11\" r=\"7\"></circle>
            <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
          </svg>
        </button>
      </div>

      <div class=\"ansd-search-box\" id=\"ansd-search-box\" hidden>
        <form action=\"/drupalwebsite/search\" method=\"get\" class=\"ansd-search-form\">
          <input type=\"text\" name=\"keys\" placeholder=\"Rechercher sur le site...\" autocomplete=\"off\">
          <button type=\"submit\">OK</button>
        </form>
      </div>

      <nav class=\"ansd-primary-menu\" id=\"ansd-primary-menu\">
        <div class=\"region region-primary-menu\">
          ";
        // line 54
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54), "html", null, true);
        yield "
        </div>
      </nav>
        </header>
  </div>

  ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language_switcher", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "    <div class=\"ansd-lang-float\" id=\"ansd-lang-float\">
      <button class=\"ansd-lang-toggle\" type=\"button\" id=\"ansd-lang-toggle\" aria-label=\"Changer de langue\" aria-expanded=\"false\" aria-controls=\"ansd-lang-menu\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
          <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
          <line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line>
          <path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path>
        </svg>
      </button>
      <div class=\"ansd-lang-menu\" id=\"ansd-lang-menu\" hidden>
        ";
            // line 70
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language_switcher", [], "any", false, false, true, 70), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 74
        yield "
  ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "    <div class=\"ansd-hero-content\">
      ";
            // line 77
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 77), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 80
        yield "</section>
";
        // line 82
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_publication", [], "any", false, false, true, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "  <section class=\"ansd-home-featured\" aria-label=\"Publication à la une\">
    ";
            // line 84
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_publication", [], "any", false, false, true, 84), "html", null, true);
            yield "
  </section>
";
        }
        // line 87
        yield "

<div class=\"ansd-page-wrapper\">

  ";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "    <div class=\"ansd-breadcrumb\">
      ";
            // line 93
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 93), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 96
        yield "
  ";
        // line 97
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "    <div class=\"ansd-highlighted\">
      ";
            // line 99
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 99), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 102
        yield "
  ";
        // line 103
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "    <div class=\"ansd-help\">
      ";
            // line 105
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 105), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 108
        yield "
  <div class=\"ansd-main-layout\">

    ";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "      <aside class=\"ansd-sidebar ansd-sidebar-first\">
        ";
            // line 113
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 113), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 116
        yield "
    <main class=\"ansd-main-content\" role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>

      ";
        // line 120
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 120), "html", null, true);
        yield "

      ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "        <div class=\"ansd-tabs\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 123), "html", null, true);
            yield "</div>
      ";
        }
        // line 125
        yield "
      ";
        // line 126
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 127), "html", null, true);
            yield "
      ";
        }
        // line 129
        yield "
      ";
        // line 130
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 130), "html", null, true);
        yield "
    </main>

    ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "      <aside class=\"ansd-sidebar ansd-sidebar-second\">
        ";
            // line 135
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 135), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 138
        yield "
  </div>
  </div>

  ";
        // line 142
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 143
            yield "  <footer class=\"ansd-footer\">
    ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "      <div class=\"ansd-footer-top\">
        ";
                // line 146
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 146), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 149
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 150
                yield "      <div class=\"ansd-footer-bottom-wrap\">
        ";
                // line 151
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 151), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 154
            yield "  </footer>
";
        }
        // line 156
        yield "


";
        // line 160
        yield "<script>
  (function () {
    // Injecte le CSS directement, indépendamment du fichier style.css et de son cache
    var styleTag = document.createElement(\x27style\x27);
    styleTag.textContent = `
      @media (min-width: 901px) {
        .ansd-ticker {
          position: fixed !important;
          top: 0 !important;
          left: 0 !important;
          right: 0 !important;
          z-index: 500 !important;
        }
        .ansd-navbar {
          margin-top: var(--ansd-ticker-height, 42px) !important;
        }
        .ansd-primary-menu.ansd-menu-stuck {
          position: fixed !important;
          top: var(--ansd-ticker-height, 42px) !important;
          left: 0 !important;
          right: 0 !important;
          z-index: 499 !important;
          background: #ffffff !important;
          box-shadow: 0 8px 24px rgba(15, 38, 61, 0.12) !important;
        }
        .ansd-primary-menu.ansd-menu-stuck .ansd-menu-item > a {
          color: #152333 !important;
          filter: none !important;
        }
        .ansd-primary-menu.ansd-menu-stuck .ansd-menu-item:hover > a {
          background: rgba(11, 83, 148, 0.08) !important;
          color: var(--ansd-primary, #0b5394) !important;
        }
      }
    `;
    document.head.appendChild(styleTag);

    var header = document.querySelector(\x27.ansd-site-header\x27);
    var navbarTop = document.querySelector(\x27.ansd-navbar-top\x27);
    var menuBtn = document.getElementById(\x27ansd-menu-toggle\x27);
    var menu = document.getElementById(\x27ansd-primary-menu\x27);
    var searchBtn = document.getElementById(\x27ansd-search-toggle\x27);
    var searchBox = document.getElementById(\x27ansd-search-box\x27);
    var mobile = window.matchMedia(\x27(max-width: 900px)\x27);
    var ticker = document.querySelector(\x27.ansd-ticker\x27);

    function setMenuOffset() {
      if (navbarTop) {
        document.documentElement.style.setProperty(
          \x27--ansd-mobile-menu-top\x27, navbarTop.getBoundingClientRect().bottom + \x27px\x27
        );
      }
    }

    function setHeaderHeights() {
      if (ticker) {
        document.documentElement.style.setProperty(
          \x27--ansd-ticker-height\x27, ticker.getBoundingClientRect().height + \x27px\x27
        );
      }
    }

    function updateHeader() {
      var isScrolled = (window.scrollY || document.body.scrollTop || document.documentElement.scrollTop) > 70;
      if (header) {
        header.classList.toggle(\x27is-scrolled\x27, isScrolled);
      }
      if (menu && !mobile.matches) {
        menu.classList.toggle(\x27ansd-menu-stuck\x27, isScrolled);
      } else if (menu) {
        menu.classList.remove(\x27ansd-menu-stuck\x27);
      }
      setMenuOffset();
      setHeaderHeights();
    }

    function closeMenu() {
      if (!menu || !menuBtn) return;
      menu.classList.remove(\x27is-open\x27);
      menuBtn.setAttribute(\x27aria-expanded\x27, \x27false\x27);
      document.body.classList.remove(\x27ansd-menu-open\x27);
    }

    if (menuBtn && menu) {
      menuBtn.addEventListener(\x27click\x27, function () {
        var isOpen = menu.classList.toggle(\x27is-open\x27);
        menuBtn.setAttribute(\x27aria-expanded\x27, isOpen ? \x27true\x27 : \x27false\x27);
        document.body.classList.toggle(\x27ansd-menu-open\x27, isOpen);
        setMenuOffset();
      });
    }

    if (searchBtn && searchBox) {
      searchBtn.addEventListener(\x27click\x27, function () {
        var isHidden = searchBox.hasAttribute(\x27hidden\x27);
        searchBox.toggleAttribute(\x27hidden\x27, !isHidden);
        searchBtn.setAttribute(\x27aria-expanded\x27, isHidden ? \x27true\x27 : \x27false\x27);
        if (isHidden) {
          var input = searchBox.querySelector(\x27input\x27);
          if (input) input.focus();
        }
      });
    }

    if (menu) {
      menu.addEventListener(\x27click\x27, function (event) {
        var link = event.target.closest(\x27.ansd-menu-item > a\x27);
        if (!link || !mobile.matches || !link.parentElement.querySelector(\x27:scope > .ansd-submenu\x27)) return;
        event.preventDefault();
        link.parentElement.classList.toggle(\x27is-open\x27);
      });
    }

    window.addEventListener(\x27scroll\x27, updateHeader, { passive: true });
document.body.addEventListener(\x27scroll\x27, updateHeader, { passive: true });
    window.addEventListener(\x27resize\x27, function () {
      if (!mobile.matches) closeMenu();
      updateHeader();
    });
    document.addEventListener(\x27keydown\x27, function (event) {
      if (event.key === \x27Escape\x27) closeMenu();
    });
    updateHeader();
  })();
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "base_path", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ansd_theme/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  339 => 160,  334 => 156,  330 => 154,  324 => 151,  321 => 150,  318 => 149,  312 => 146,  309 => 145,  307 => 144,  304 => 143,  302 => 142,  296 => 138,  290 => 135,  287 => 134,  285 => 133,  279 => 130,  276 => 129,  270 => 127,  268 => 126,  265 => 125,  259 => 123,  257 => 122,  252 => 120,  246 => 116,  240 => 113,  237 => 112,  235 => 111,  230 => 108,  224 => 105,  221 => 104,  219 => 103,  216 => 102,  210 => 99,  207 => 98,  205 => 97,  202 => 96,  196 => 93,  193 => 92,  191 => 91,  185 => 87,  179 => 84,  176 => 83,  174 => 82,  171 => 80,  165 => 77,  162 => 76,  160 => 75,  157 => 74,  150 => 70,  139 => 61,  137 => 60,  128 => 54,  103 => 32,  99 => 31,  88 => 22,  80 => 17,  76 => 16,  70 => 12,  68 => 11,  60 => 6,  53 => 4,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ansd_theme/templates/page.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\custom\\ansd_theme\\templates\\page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 4];
        static $filters = ["escape" => 1];
        static $functions = ["attach_library" => 1, "path" => 31];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
                [0 => "attach_library", 1 => "path"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
