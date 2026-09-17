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
        // line 54
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54), "html", null, true);
        yield "
        </div>
      </nav>
    </header>
  </div>

  ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "    <div class=\"ansd-hero-content\">
      ";
            // line 62
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 62), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 65
        yield "</section>
";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_publication", [], "any", false, false, true, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "  <section class=\"ansd-home-featured\" aria-label=\"Publication à la une\">
    ";
            // line 69
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_publication", [], "any", false, false, true, 69), "html", null, true);
            yield "
  </section>
";
        }
        // line 72
        yield "

<div class=\"ansd-page-wrapper\">

  ";
        // line 76
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "    <div class=\"ansd-breadcrumb\">
      ";
            // line 78
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 78), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 81
        yield "
  ";
        // line 82
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "    <div class=\"ansd-highlighted\">
      ";
            // line 84
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 84), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 87
        yield "
  ";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "    <div class=\"ansd-help\">
      ";
            // line 90
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 90), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 93
        yield "
  <div class=\"ansd-main-layout\">

    ";
        // line 96
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "      <aside class=\"ansd-sidebar ansd-sidebar-first\">
        ";
            // line 98
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 98), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 101
        yield "
    <main class=\"ansd-main-content\" role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>

      ";
        // line 105
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 105), "html", null, true);
        yield "

      ";
        // line 107
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "        <div class=\"ansd-tabs\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 108), "html", null, true);
            yield "</div>
      ";
        }
        // line 110
        yield "
      ";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 112), "html", null, true);
            yield "
      ";
        }
        // line 114
        yield "
      ";
        // line 115
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 115), "html", null, true);
        yield "
    </main>

    ";
        // line 118
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "      <aside class=\"ansd-sidebar ansd-sidebar-second\">
        ";
            // line 120
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 123
        yield "
  </div>
  </div>

  ";
        // line 127
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 128
            yield "  <footer class=\"ansd-footer\">
    ";
            // line 129
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "      <div class=\"ansd-footer-top\">
        ";
                // line 131
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 131), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 134
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "      <div class=\"ansd-footer-bottom-wrap\">
        ";
                // line 136
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 136), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 139
            yield "  </footer>
";
        }
        // line 141
        yield "


";
        // line 145
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
        header.classList.toggle(\x27is-scrolled\x27, window.scrollY > 20);
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
        return array (  316 => 145,  311 => 141,  307 => 139,  301 => 136,  298 => 135,  295 => 134,  289 => 131,  286 => 130,  284 => 129,  281 => 128,  279 => 127,  273 => 123,  267 => 120,  264 => 119,  262 => 118,  256 => 115,  253 => 114,  247 => 112,  245 => 111,  242 => 110,  236 => 108,  234 => 107,  229 => 105,  223 => 101,  217 => 98,  214 => 97,  212 => 96,  207 => 93,  201 => 90,  198 => 89,  196 => 88,  193 => 87,  187 => 84,  184 => 83,  182 => 82,  179 => 81,  173 => 78,  170 => 77,  168 => 76,  162 => 72,  156 => 69,  153 => 68,  151 => 67,  148 => 65,  142 => 62,  139 => 61,  137 => 60,  128 => 54,  103 => 32,  99 => 31,  88 => 22,  80 => 17,  76 => 16,  70 => 12,  68 => 11,  60 => 6,  53 => 4,  48 => 2,  44 => 1,);
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
