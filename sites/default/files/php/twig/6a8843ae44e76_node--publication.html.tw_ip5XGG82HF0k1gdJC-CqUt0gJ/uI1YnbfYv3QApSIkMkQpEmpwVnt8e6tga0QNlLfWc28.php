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

/* themes/custom/ansd_theme/templates/content/node--publication.html.twig */
class __TwigTemplate_43d4aae46b68b266b77ee57db21f0c46 extends Template
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
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ansd-pub-detail"], "method", false, false, true, 1), "html", null, true);
        yield ">

  <h1 class=\"ansd-pub-title\">";
        // line 3
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>

  <div class=\"ansd-pub-layout\">

    <div class=\"ansd-pub-main\">
      <h2>Dernière information</h2>
      <div class=\"ansd-pub-resume\">
        ";
        // line 10
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_resume", [], "any", false, false, true, 10), "html", null, true);
        yield "
      </div>
    </div>

    <aside class=\"ansd-pub-sidebar\">

      ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_derniere_publication", [], "any", false, false, true, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "        <p><strong>Dernière publication :</strong>
          ";
            // line 18
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_derniere_publication", [], "any", false, false, true, 18), "html", null, true);
            yield "
        </p>
      ";
        }
        // line 21
        yield "
      ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_publication", [], "any", false, false, true, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "        <p><strong>Prochaine parution :</strong>
          ";
            // line 24
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_publication", [], "any", false, false, true, 24), "html", null, true);
            yield "
        </p>
      ";
        }
        // line 27
        yield "
      <hr>

      ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_mise_en_ligne", [], "any", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <p><strong>Date de mise en ligne :</strong>
          ";
            // line 32
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_mise_en_ligne", [], "any", false, false, true, 32), "html", null, true);
            yield "
        </p>
      ";
        }
        // line 35
        yield "
     ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_document_pdf", [], "any", false, false, true, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "  <p>
    <strong>VERSION IMPRIMABLE</strong><br>
    ";
            // line 39
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_document_pdf", [], "any", false, false, true, 39), "html", null, true);
            yield "
  </p>
";
        }
        // line 42
        yield "
      ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_rapports_archives", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "  <div class=\"ansd-pub-archives\">
    <button type=\"button\" class=\"ansd-pub-archives__toggle\">
      Rapports et analyses
    </button>
    <div class=\"ansd-pub-archives__list\">
      ";
            // line 49
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_rapports_archives", [], "any", false, false, true, 49), "html", null, true);
            yield "
    </div>
  </div>
";
        }
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_donnees", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "  <div class=\"ansd-pub-archives\">
    <button type=\"button\" class=\"ansd-pub-archives__toggle\">
      Données
    </button>
    <div class=\"ansd-pub-archives__list\">
      ";
            // line 59
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_donnees", [], "any", false, false, true, 59), "html", null, true);
            yield "
    </div>
  </div>
";
        }
        // line 63
        yield "
    </aside>

  </div>
  ";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_presentation", [], "any", false, false, true, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "  <div class=\"ansd-pub-presentation\">
    <h2>Présentation de la publication</h2>
    ";
            // line 70
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_presentation", [], "any", false, false, true, 70), "html", null, true);
            yield "
  </div>
";
        }
        // line 73
        yield "
";
        // line 74
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_themes_similaires", [], "any", false, false, true, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "  <aside class=\"ansd-pub-themes-similaires\">
    <h3>Thèmes similaires</h3>
    ";
            // line 77
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_themes_similaires", [], "any", false, false, true, 77), "html", null, true);
            yield "
  </aside>
";
        }
        // line 80
        yield "
</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "label", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ansd_theme/templates/content/node--publication.html.twig";
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
        return array (  193 => 80,  187 => 77,  183 => 75,  181 => 74,  178 => 73,  172 => 70,  168 => 68,  166 => 67,  160 => 63,  153 => 59,  146 => 54,  144 => 53,  137 => 49,  130 => 44,  128 => 43,  125 => 42,  119 => 39,  115 => 37,  113 => 36,  110 => 35,  104 => 32,  101 => 31,  99 => 30,  94 => 27,  88 => 24,  85 => 23,  83 => 22,  80 => 21,  74 => 18,  71 => 17,  69 => 16,  60 => 10,  50 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ansd_theme/templates/content/node--publication.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\custom\\ansd_theme\\templates\\content\\node--publication.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 16];
        static $filters = ["escape" => 1];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
                [],
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
