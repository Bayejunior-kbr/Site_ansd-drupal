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

/* themes/custom/ansd_theme/templates/content/taxonomy-term--regions.html.twig */
class __TwigTemplate_ed1a7bbff6dc2ad889e0c009569b0b36 extends Template
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
        $context["stats_nationales"] = Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block_content", 26);
        // line 2
        yield "
<article";
        // line 3
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ansd-region-detail"], "method", false, false, true, 3), "html", null, true);
        yield ">

  <div class=\"ansd-region-detail__wrapper\">
    <div class=\"ansd-region-detail__container\">

      <h1 class=\"ansd-region-detail__titre\">";
        // line 8
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
        yield "</h1>

      <div class=\"ansd-region-detail__contenu\">

        <div class=\"ansd-region-detail__carte\">
          ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_carte_region", [], "any", false, false, true, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "            ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_carte_region", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14), "html", null, true);
            yield "
          ";
        }
        // line 16
        yield "        </div>

        <div class=\"ansd-region-detail__service\">
          <h2>Service</h2>
          <table class=\"ansd-region-detail__table-service\">
            <tr>
              <td>Chef de service</td>
              <td>";
        // line 23
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_chef_service", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Adjoint Chef de service</td>
              <td>";
        // line 27
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_adjoint_chef_service", [], "any", false, false, true, 27), 0, [], "any", false, false, true, 27), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>BP</td>
              <td>";
        // line 31
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_bp", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Tel/Fax</td>
              <td>";
        // line 35
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone_fax", [], "any", false, false, true, 35), 0, [], "any", false, false, true, 35), "html", null, true);
        yield "</td>
            </tr>
          </table>
        </div>

      </div>

      <div class=\"ansd-region-detail__stats\">
        <table class=\"ansd-region-detail__table-stats\">
          <thead>
            <tr>
              <th>Indicateurs</th>
              <th>";
        // line 47
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
        yield "</th>
              <th>Sénégal</th>
              <th>Source</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Superficie en Km²</td>
              <td>";
        // line 55
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_superficie", [], "any", false, false, true, 55), 0, [], "any", false, false, true, 55), "html", null, true);
        yield "</td>
              <td>";
        // line 56
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_superficie", [], "any", false, false, true, 56), 0, [], "any", false, false, true, 56), "html", null, true);
        yield "</td>
              <td></td>
            </tr>
            <tr>
              <td>Population Masculine</td>
              <td>";
        // line 61
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_population_masculine", [], "any", false, false, true, 61), 0, [], "any", false, false, true, 61), "html", null, true);
        yield "</td>
              <td>";
        // line 62
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_population_masculine", [], "any", false, false, true, 62), 0, [], "any", false, false, true, 62), "html", null, true);
        yield "</td>
              <td>";
        // line 63
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_source_population", [], "any", false, false, true, 63), 0, [], "any", false, false, true, 63), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Population Féminine</td>
              <td>";
        // line 67
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_population_feminine", [], "any", false, false, true, 67), 0, [], "any", false, false, true, 67), "html", null, true);
        yield "</td>
              <td>";
        // line 68
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_population_feminine", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "html", null, true);
        yield "</td>
              <td>";
        // line 69
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_source_population", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Population</td>
              <td>";
        // line 73
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_population_totale", [], "any", false, false, true, 73), 0, [], "any", false, false, true, 73), "html", null, true);
        yield "</td>
              <td>";
        // line 74
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_population_totale", [], "any", false, false, true, 74), 0, [], "any", false, false, true, 74), "html", null, true);
        yield "</td>
              <td>";
        // line 75
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_source_population", [], "any", false, false, true, 75), 0, [], "any", false, false, true, 75), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Taux brut de scolarisation globale (%)</td>
              <td>";
        // line 79
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_taux_scolarisation", [], "any", false, false, true, 79), 0, [], "any", false, false, true, 79), "html", null, true);
        yield "</td>
              <td>";
        // line 80
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_taux_scolarisation", [], "any", false, false, true, 80), 0, [], "any", false, false, true, 80), "html", null, true);
        yield "</td>
              <td>";
        // line 81
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_source_scolarisation", [], "any", false, false, true, 81), 0, [], "any", false, false, true, 81), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Incidence pauvreté</td>
              <td>";
        // line 85
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_incidence_pauvrete", [], "any", false, false, true, 85), 0, [], "any", false, false, true, 85), "html", null, true);
        yield "</td>
              <td>";
        // line 86
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_incidence_pauvrete", [], "any", false, false, true, 86), 0, [], "any", false, false, true, 86), "html", null, true);
        yield "</td>
              <td>";
        // line 87
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_source_pauvrete", [], "any", false, false, true, 87), 0, [], "any", false, false, true, 87), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Taux d\x27alphabétisation général (%)</td>
              <td>";
        // line 91
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_taux_alphabetisation", [], "any", false, false, true, 91), 0, [], "any", false, false, true, 91), "html", null, true);
        yield "</td>
              <td>";
        // line 92
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_taux_alphabetisation", [], "any", false, false, true, 92), 0, [], "any", false, false, true, 92), "html", null, true);
        yield "</td>
              <td>";
        // line 93
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_source_alphabetisation", [], "any", false, false, true, 93), 0, [], "any", false, false, true, 93), "html", null, true);
        yield "</td>
            </tr>
            <tr>
              <td>Taux d\x27enregistrement des enfants à l\x27état civil (%)</td>
              <td>";
        // line 97
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_taux_enregistrement_enfant", [], "any", false, false, true, 97), 0, [], "any", false, false, true, 97), "html", null, true);
        yield "</td>
              <td>";
        // line 98
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats_nationales"] ?? null), "field_taux_enregistrement_enfant", [], "any", false, false, true, 98), 0, [], "any", false, false, true, 98), "html", null, true);
        yield "</td>
              <td>";
        // line 99
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_source_enregistrement", [], "any", false, false, true, 99), 0, [], "any", false, false, true, 99), "html", null, true);
        yield "</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "name", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ansd_theme/templates/content/taxonomy-term--regions.html.twig";
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
        return array (  239 => 99,  235 => 98,  231 => 97,  224 => 93,  220 => 92,  216 => 91,  209 => 87,  205 => 86,  201 => 85,  194 => 81,  190 => 80,  186 => 79,  179 => 75,  175 => 74,  171 => 73,  164 => 69,  160 => 68,  156 => 67,  149 => 63,  145 => 62,  141 => 61,  133 => 56,  129 => 55,  118 => 47,  103 => 35,  96 => 31,  89 => 27,  82 => 23,  73 => 16,  67 => 14,  65 => 13,  57 => 8,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ansd_theme/templates/content/taxonomy-term--regions.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\custom\\ansd_theme\\templates\\content\\taxonomy-term--regions.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 13];
        static $filters = ["escape" => 3];
        static $functions = ["drupal_entity" => 1];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "escape"],
                [0 => "drupal_entity"],
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
