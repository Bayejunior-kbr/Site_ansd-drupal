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
class __TwigTemplate_a02620c47de537f8fcdf1fe7d157a01e extends Template
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

<section class=\"ansd-hero";
        // line 3
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ansd-hero--no-content";
        }
        yield "\">
  <video class=\"ansd-hero-video\" autoplay muted loop playsinline>
    <source src=\"";
        // line 5
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/video/Drone_filming_building_architecture_202608151235.mp4\" type=\"video/mp4\">
  </video>
  <div class=\"ansd-hero-overlay\"></div>

  <div class=\"ansd-site-header\">
    ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ticker", [], "any", false, false, true, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "      <div class=\"ansd-ticker\">
        <span class=\"ansd-ticker-label\">FLASH STAT</span>
        <div class=\"ansd-ticker-viewport\">
          <div class=\"ansd-ticker-track\">
            <div class=\"ansd-ticker-copy\">";
            // line 15
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ticker", [], "any", false, false, true, 15), "html", null, true);
            yield "</div>
            <div class=\"ansd-ticker-copy\">";
            // line 16
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ticker", [], "any", false, false, true, 16), "html", null, true);
            yield "</div>
          </div>
        </div>
      </div>
    ";
        }
        // line 21
        yield "
    <header class=\"ansd-navbar\">
      <div class=\"ansd-navbar-top\">
        <button class=\"ansd-menu-toggle\" type=\"button\" id=\"ansd-menu-toggle\" aria-label=\"Menu\" aria-expanded=\"false\" aria-controls=\"ansd-primary-menu\">
          <span class=\"ansd-burger\"></span>
          MENU
        </button>

       <div class=\"ansd-navbar-logo\">
  <a href=\"";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
    <img src=\"";
        // line 31
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/LOGO ANSD HD.png\" alt=\"ANSD - Agence Nationale de la Statistique et de la Démographie\">
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
        // line 53
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 53), "html", null, true);
        yield "
        </div>
      </nav>
    </header>
  </div>

  ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "    <div class=\"ansd-hero-content\">
      ";
            // line 61
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 61), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 64
        yield "</section>
";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_publication", [], "any", false, false, true, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "  <section class=\"ansd-home-featured\" aria-label=\"Publication à la une\">
    ";
            // line 68
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_publication", [], "any", false, false, true, 68), "html", null, true);
            yield "
  </section>
";
        }
        // line 71
        yield "

<div class=\"ansd-page-wrapper\">

  ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "    <div class=\"ansd-breadcrumb\">
      ";
            // line 77
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 77), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 80
        yield "
  ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "    <div class=\"ansd-highlighted\">
      ";
            // line 83
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 83), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 86
        yield "
  ";
        // line 87
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "    <div class=\"ansd-help\">
      ";
            // line 89
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 89), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 92
        yield "
  <div class=\"ansd-main-layout\">

    ";
        // line 95
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "      <aside class=\"ansd-sidebar ansd-sidebar-first\">
        ";
            // line 97
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 100
        yield "
    <main class=\"ansd-main-content\" role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>

      ";
        // line 104
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 104), "html", null, true);
        yield "

      ";
        // line 106
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "        <div class=\"ansd-tabs\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 107), "html", null, true);
            yield "</div>
      ";
        }
        // line 109
        yield "
      ";
        // line 110
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 111), "html", null, true);
            yield "
      ";
        }
        // line 113
        yield "
      ";
        // line 114
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 114), "html", null, true);
        yield "
    </main>

    ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "      <aside class=\"ansd-sidebar ansd-sidebar-second\">
        ";
            // line 119
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 119), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 122
        yield "
  </div>
  </div>

  ";
        // line 126
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 127
            yield "  <footer class=\"ansd-footer\">
    ";
            // line 128
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "      <div class=\"ansd-footer-top\">
        ";
                // line 130
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 130), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 133
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "      <div class=\"ansd-footer-bottom-wrap\">
        ";
                // line 135
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 135), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 138
            yield "  </footer>
";
        }
        // line 140
        yield "


";
        // line 144
        yield "<script>
  (function () {
    var header = document.querySelector(\x27.ansd-site-header\x27);
    var navbarTop = document.querySelector(\x27.ansd-navbar-top\x27);
    var menuBtn = document.getElementById(\x27ansd-menu-toggle\x27);
    var menu = document.getElementById(\x27ansd-primary-menu\x27);
    var searchBtn = document.getElementById(\x27ansd-search-toggle\x27);
    var searchBox = document.getElementById(\x27ansd-search-box\x27);
    var mobile = window.matchMedia(\x27(max-width: 900px)\x27);

    function setMenuOffset() {
      if (navbarTop) {
        document.documentElement.style.setProperty(
          \x27--ansd-mobile-menu-top\x27, navbarTop.getBoundingClientRect().bottom + \x27px\x27
        );
      }
    }

    function updateHeader() {
      if (header) {
        header.classList.toggle(\x27is-scrolled\x27, window.scrollY > window.innerHeight - 150);
      }
      setMenuOffset();
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
    window.addEventListener(\x27resize\x27, function () {
      if (!mobile.matches) closeMenu();
      updateHeader();
    });
    document.addEventListener(\x27keydown\x27, function (event) {
      if (event.key === \x27Escape\x27) closeMenu();
    });
    updateHeader();
  })();
</script>
<script>
  (function () {
    var header = document.querySelector(\x27.ansd-site-header\x27);

    function updateScrolledHeader() {
      if (header) {
        header.classList.toggle(\x27is-scrolled\x27, window.scrollY > 20);
      }
    }

    window.addEventListener(\x27scroll\x27, updateScrolledHeader, { passive: true });
    window.addEventListener(\x27load\x27, updateScrolledHeader);
    updateScrolledHeader();
  })();
</script>
";
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
        return array (  312 => 144,  307 => 140,  303 => 138,  297 => 135,  294 => 134,  291 => 133,  285 => 130,  282 => 129,  280 => 128,  277 => 127,  275 => 126,  269 => 122,  263 => 119,  260 => 118,  258 => 117,  252 => 114,  249 => 113,  243 => 111,  241 => 110,  238 => 109,  232 => 107,  230 => 106,  225 => 104,  219 => 100,  213 => 97,  210 => 96,  208 => 95,  203 => 92,  197 => 89,  194 => 88,  192 => 87,  189 => 86,  183 => 83,  180 => 82,  178 => 81,  175 => 80,  169 => 77,  166 => 76,  164 => 75,  158 => 71,  152 => 68,  149 => 67,  147 => 66,  144 => 64,  138 => 61,  135 => 60,  133 => 59,  124 => 53,  99 => 31,  95 => 30,  84 => 21,  76 => 16,  72 => 15,  66 => 11,  64 => 10,  56 => 5,  49 => 3,  44 => 1,);
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
        static $tags = ["if" => 3];
        static $filters = ["escape" => 1];
        static $functions = ["attach_library" => 1, "path" => 30];
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
