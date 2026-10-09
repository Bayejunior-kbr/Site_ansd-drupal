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

/* themes/custom/ansd_theme/templates/node.html.twig */
class __TwigTemplate_2a002bb521cf25d8c163d34b1259aab4 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 1) == "page")) {
            // line 2
            yield "  <article class=\"ansd-page ansd-presentation\">
    <header class=\"ansd-presentation__hero\">
      <div class=\"ansd-presentation__hero-content\">
        <p class=\"ansd-presentation__eyebrow\">À propos de l’ANSD</p>
        <h1>";
            // line 6
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h1>
      </div>
    </header>

    <section class=\"ansd-reveal\">
  <div class=\"ansd-reveal__inner\">
    ";
            // line 12
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_texte_des_missions", [], "any", false, false, true, 12), "html", null, true);
            yield "
  </div>
</section>

    ";
            // line 16
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            yield "
  </article>
";
        } else {
            // line 19
            yield "  <article class=\"ansd-node-publication\">
    <div class=\"ansd-node-publication__cover\">";
            // line 20
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_couverture", [], "any", false, false, true, 20), "html", null, true);
            yield "</div>
    <div class=\"ansd-node-publication__body\">
      ";
            // line 22
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_nouveaute", [], "any", false, false, true, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"ansd-node-publication__badge\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_nouveaute", [], "any", false, false, true, 22), "html", null, true);
                yield "</div>";
            }
            // line 23
            yield "      <h1 class=\"ansd-node-publication__title\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h1>
      <div class=\"ansd-node-publication__summary\">";
            // line 24
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_resume", [], "any", false, false, true, 24), "html", null, true);
            yield "</div>
      ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_rapport", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"ansd-node-publication__action\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_rapport", [], "any", false, false, true, 25), "html", null, true);
                yield "</div>";
            }
            // line 26
            yield "    </div>
  </article>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "label", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ansd_theme/templates/node.html.twig";
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
        return array (  103 => 26,  97 => 25,  93 => 24,  88 => 23,  82 => 22,  77 => 20,  74 => 19,  68 => 16,  61 => 12,  52 => 6,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ansd_theme/templates/node.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\custom\\ansd_theme\\templates\\node.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 6];
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
