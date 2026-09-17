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

/* themes/custom/ansd_theme/templates/content/views-view-fields--acces-aux-bases-de-donnees--block-1.html.twig */
class __TwigTemplate_e5249e95c33b577eb5099288e667959b extends Template
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
        $context["lien"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 1), "field_db_lien", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), "uri", [], "any", false, false, true, 1);
        // line 2
        if ((is_string($_v0 = ($context["lien"] ?? null)) && is_string($_v1 = "internal:") && str_starts_with($_v0, $_v1))) {
            // line 3
            yield "  ";
            $context["lien"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(Twig\Extension\CoreExtension::replace(($context["lien"] ?? null), ["internal:" => ""]));
        }
        // line 5
        yield "
<article class=\"ansd-db-card\">
  <div class=\"ansd-db-card-img\">
    <a href=\"";
        // line 8
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("lien", $context)) ? (Twig\Extension\CoreExtension::default(($context["lien"] ?? null), "#")) : ("#")), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">
      ";
        // line 9
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_db_logo", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9), "html", null, true);
        yield "
    </a>
  </div>
  <div class=\"ansd-db-card-body\">
    <h3>
      <a href=\"";
        // line 14
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("lien", $context)) ? (Twig\Extension\CoreExtension::default(($context["lien"] ?? null), "#")) : ("#")), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 14), "content", [], "any", false, false, true, 14), "html", null, true);
        yield "</a>
    </h3>
    <p>
      <a class=\"ansd-db-card-link\" href=\"";
        // line 17
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("lien", $context)) ? (Twig\Extension\CoreExtension::default(($context["lien"] ?? null), "#")) : ("#")), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">Voir plus <span>→</span></a>
    </p>
  </div>
</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["row", "fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ansd_theme/templates/content/views-view-fields--acces-aux-bases-de-donnees--block-1.html.twig";
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
        return array (  77 => 17,  69 => 14,  61 => 9,  57 => 8,  52 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ansd_theme/templates/content/views-view-fields--acces-aux-bases-de-donnees--block-1.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\custom\\ansd_theme\\templates\\content\\views-view-fields--acces-aux-bases-de-donnees--block-1.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 2];
        static $filters = ["replace" => 3, "escape" => 8, "default" => 8];
        static $functions = ["path" => 3];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "replace", 1 => "escape", 2 => "default"],
                [0 => "path"],
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
