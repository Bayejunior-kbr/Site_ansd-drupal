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

/* themes/custom/ansd_theme/templates/content/node--page-recensement.html.twig */
class __TwigTemplate_53dce1376a29c40172ccd72632520328 extends Template
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
        yield "<article";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ansd-recensement"], "method", false, false, true, 1), "html", null, true);
        yield ">

  <section class=\"ansd-recensement-hero\">
    ";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_hero", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "      <div class=\"ansd-recensement-hero-bg\">
        ";
            // line 6
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_hero", [], "any", false, false, true, 6), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 9
        yield "    <div class=\"ansd-recensement-hero-overlay\"></div>
    <div class=\"ansd-recensement-hero-content\">
      <h1>";
        // line 11
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>
      ";
        // line 12
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_badge", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "        <span class=\"ansd-recensement-badge\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_badge", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "html", null, true);
            yield "</span>
      ";
        }
        // line 15
        yield "    </div>
  </section>

  <div class=\"ansd-recensement-body\">

    <div class=\"ansd-recensement-back\">
      ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_retour", [], "any", false, false, true, 21), 0, [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_retour", [], "any", false, false, true, 22), "html", null, true);
            yield "
      ";
        } else {
            // line 24
            yield "        <a href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\">← Retour</a>
      ";
        }
        // line 26
        yield "    </div>

    <div class=\"ansd-recensement-layout\">

      ";
        // line 31
        yield "      <aside class=\"ansd-recensement-sidebar\">
        ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_logo", [], "any", false, false, true, 32), 0, [], "any", false, false, true, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "          <div class=\"ansd-recensement-sidebar__logo\">
            ";
            // line 34
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_logo", [], "any", false, false, true, 34), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 37
        yield "
        <nav class=\"ansd-recensement-sidebar__nav\">
          ";
        // line 39
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_rapport", [], "any", false, false, true, 39)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "            <div class=\"ansd-sidebar-item\">
              <span class=\"ansd-sidebar-item__label\">Rapports</span>
              ";
            // line 42
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_rapport", [], "any", false, false, true, 42), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 45
        yield "
          ";
        // line 46
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_donnees", [], "any", false, false, true, 46)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "            <div class=\"ansd-sidebar-item\">
              <span class=\"ansd-sidebar-item__label\">Données</span>
              ";
            // line 49
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_donnees", [], "any", false, false, true, 49), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 52
        yield "
          ";
        // line 53
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_microdonnees", [], "any", false, false, true, 53)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "            <div class=\"ansd-sidebar-item\">
              <span class=\"ansd-sidebar-item__label\">Micro-données</span>
              ";
            // line 56
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_microdonnees", [], "any", false, false, true, 56), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 59
        yield "
          ";
        // line 60
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_autres_ressources", [], "any", false, false, true, 60)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "            <div class=\"ansd-sidebar-item\">
              <span class=\"ansd-sidebar-item__label\">Autres ressources</span>
              ";
            // line 63
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_autres_ressources", [], "any", false, false, true, 63), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 66
        yield "        </nav>
      </aside>

      ";
        // line 70
        yield "      <div class=\"ansd-recensement-main\">
        <div class=\"ansd-recensement-main__text\">
          ";
        // line 72
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_texte", [], "any", false, false, true, 72), "html", null, true);
        yield "
        </div>
      </div>

    </div>

  </div>

</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ansd_theme/templates/content/node--page-recensement.html.twig";
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
        return array (  190 => 72,  186 => 70,  181 => 66,  175 => 63,  171 => 61,  169 => 60,  166 => 59,  160 => 56,  156 => 54,  154 => 53,  151 => 52,  145 => 49,  141 => 47,  139 => 46,  136 => 45,  130 => 42,  126 => 40,  124 => 39,  120 => 37,  114 => 34,  111 => 33,  109 => 32,  106 => 31,  100 => 26,  94 => 24,  88 => 22,  86 => 21,  78 => 15,  72 => 13,  70 => 12,  66 => 11,  62 => 9,  56 => 6,  53 => 5,  51 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ansd_theme/templates/content/node--page-recensement.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\custom\\ansd_theme\\templates\\content\\node--page-recensement.html.twig");
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
        static $filters = ["escape" => 1, "trim" => 39, "render" => 39];
        static $functions = ["url" => 24];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape", 1 => "trim", 2 => "render"],
                [0 => "url"],
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
