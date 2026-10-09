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

/* themes/custom/ansd_theme/templates/node--page_basique.html.twig */
class __TwigTemplate_aa10988d120ac0a64bc4ee09c9ad2214 extends Template
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
        yield "<article class=\"ansd-node-basic";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_page_phare", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ansd-phare-page";
        }
        yield "\">
  ";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <div class=\"ansd-node-basic__image\">
      ";
            // line 4
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 7
        yield "  <div class=\"ansd-node-basic__body\">
    <h1 class=\"ansd-node-basic__title\">";
        // line 8
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>
    ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_texte", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "      <div class=\"ansd-node-basic__text\">
        ";
            // line 11
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_texte", [], "any", false, false, true, 11), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 14
        yield "  </div>
</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "content", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ansd_theme/templates/node--page_basique.html.twig";
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
        return array (  80 => 14,  74 => 11,  71 => 10,  69 => 9,  65 => 8,  62 => 7,  56 => 4,  53 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ansd_theme/templates/node--page_basique.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\custom\\ansd_theme\\templates\\node--page_basique.html.twig");
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
        static $filters = ["escape" => 4];
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
