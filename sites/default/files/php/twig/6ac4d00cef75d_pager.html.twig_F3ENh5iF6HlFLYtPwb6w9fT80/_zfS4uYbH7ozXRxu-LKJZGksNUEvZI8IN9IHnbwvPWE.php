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

/* themes/contrib/bootstrap5/templates/navigation/pager.html.twig */
class __TwigTemplate_abe3d9fea1422c1e0c68795873384ba8 extends Template
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
        // line 34
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "  <nav class=\"pager\"  role=\"navigation\" aria-labelledby=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "\">
    <";
            // line 36
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield " id=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield ">
    <ul class=\"pagination js-pager__items\">
      ";
            // line 39
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "        <li class=\"page-item pager__item--first\">
          <a href=\"";
                // line 41
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), "addCLass", ["page-link"], "method", false, false, true, 41), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 42
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 43
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 43), "text", [], "any", true, true, true, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43), "text", [], "any", false, false, true, 43), t("« First"))) : (t("« First"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 47
            yield "      ";
            // line 48
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "        <li class=\"page-item pager__item--previous\">
          <a href=\"";
                // line 50
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "href", [], "any", false, false, true, 50), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "attributes", [], "any", false, false, true, 50), "addCLass", ["page-link"], "method", false, false, true, 50), "href", "title", "rel"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 51
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 52
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 52), "text", [], "any", true, true, true, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "text", [], "any", false, false, true, 52), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 56
            yield "      ";
            // line 57
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "        <li class=\"page-item disabled\">
          <span class=\"page-link\">&hellip;</span>
        </li>
      ";
            }
            // line 62
            yield "      ";
            // line 63
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 63));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 64
                yield "        <li class=\"page-item";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : ("")));
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" aria-current=\"page\"") : ("")));
                yield ">
          ";
                // line 65
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 66
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 67
                    yield "          ";
                } else {
                    // line 68
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 69
                    yield "          ";
                }
                // line 70
                yield "          <a href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 70), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "addCLass", ["page-link"], "method", false, false, true, 70), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">
              ";
                // line 72
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                yield "
            </span>";
                // line 74
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                // line 75
                yield "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 78
            yield "      ";
            // line 79
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "        <li class=\"page-item disabled\">
          <span class=\"page-link\">&hellip;</span>
        </li>
      ";
            }
            // line 84
            yield "      ";
            // line 85
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "        <li class=\"page-item pager__item--next\">
          <a href=\"";
                // line 87
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 87), "href", [], "any", false, false, true, 87), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 87), "attributes", [], "any", false, false, true, 87), "addCLass", ["page-link"], "method", false, false, true, 87), "href", "title", "rel"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 88
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 89
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 89), "text", [], "any", true, true, true, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 89), "text", [], "any", false, false, true, 89), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 93
            yield "      ";
            // line 94
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 95
                yield "        <li class=\"page-item pager__item--last\">
          <a href=\"";
                // line 96
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 96), "href", [], "any", false, false, true, 96), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 96), "attributes", [], "any", false, false, true, 96), "addCLass", ["page-link"], "method", false, false, true, 96), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 97
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 98
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 98), "text", [], "any", true, true, true, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 98), "text", [], "any", false, false, true, 98), t("Last »"))) : (t("Last »"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 102
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap5/templates/navigation/pager.html.twig";
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
        return array (  245 => 102,  238 => 98,  234 => 97,  226 => 96,  223 => 95,  220 => 94,  218 => 93,  211 => 89,  207 => 88,  199 => 87,  196 => 86,  193 => 85,  191 => 84,  185 => 80,  182 => 79,  180 => 78,  171 => 75,  169 => 74,  165 => 72,  155 => 70,  152 => 69,  149 => 68,  146 => 67,  143 => 66,  141 => 65,  134 => 64,  129 => 63,  127 => 62,  121 => 58,  118 => 57,  116 => 56,  109 => 52,  105 => 51,  97 => 50,  94 => 49,  91 => 48,  89 => 47,  82 => 43,  78 => 42,  70 => 41,  67 => 40,  64 => 39,  53 => 36,  46 => 35,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap5/templates/navigation/pager.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\themes\\contrib\\bootstrap5\\templates\\navigation\\pager.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 34, "for" => 63, "set" => 66];
        static $filters = ["escape" => 35, "t" => 35, "without" => 41, "default" => 43];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for", 2 => "set"],
                [0 => "escape", 1 => "t", 2 => "without", 3 => "default"],
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
