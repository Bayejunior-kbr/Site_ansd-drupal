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
class __TwigTemplate_015403dc97af542119a8a586559ffbc5 extends Template
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
            yield "        <p><strong>Dernière publication :</strong> ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_derniere_publication", [], "any", false, false, true, 17)))), "html", null, true);
            yield "</p>
      ";
        }
        // line 19
        yield "
      ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_publication", [], "any", false, false, true, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "        <p><strong>Prochaine parution :</strong> ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_publication", [], "any", false, false, true, 21)))), "html", null, true);
            yield "</p>
      ";
        }
        // line 23
        yield "
      <hr>

      ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_mise_en_ligne", [], "any", false, false, true, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "        <p><strong>Date de mise en ligne :</strong> ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date_mise_en_ligne", [], "any", false, false, true, 27)))), "html", null, true);
            yield "</p>
      ";
        }
        // line 29
        yield "
      ";
        // line 30
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_field_document_pdf_fichier", [], "any", false, false, true, 30), "isEmpty", [], "any", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "  <p>
    <strong>VERSION IMPRIMABLE</strong><br>
    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_field_document_pdf_fichier", [], "any", false, false, true, 33));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                yield "      <a href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 34), "fileuri", [], "any", false, false, true, 34)), "html", null, true);
                yield "\" download target=\"_blank\" rel=\"noopener noreferrer\">
        ";
                // line 35
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", true, true, true, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 35), "Télécharger")) : ("Télécharger")), "html", null, true);
                yield "
      </a>";
                // line 36
                if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br>";
                }
                // line 37
                yield "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 38
            yield "  </p>
";
        }
        // line 40
        yield "
      ";
        // line 41
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_rapports_archives_pdf", [], "any", false, false, true, 41), "isEmpty", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "  <div class=\"ansd-pub-archives\">
    <button type=\"button\" class=\"ansd-pub-archives__toggle\">
      Rapports et analyses
    </button>
    <div class=\"ansd-pub-archives__list\">
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_rapports_archives_pdf", [], "any", false, false, true, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                yield "        <a href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 48), "fileuri", [], "any", false, false, true, 48)), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
          ";
                // line 49
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", true, true, true, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 49), "Télécharger")) : ("Télécharger")), "html", null, true);
                yield "
        </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 52
            yield "    </div>
  </div>
";
        }
        // line 55
        yield "
      ";
        // line 56
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_donnees_pdf", [], "any", false, false, true, 56), "isEmpty", [], "any", false, false, true, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "  <div class=\"ansd-pub-archives\">
    <button type=\"button\" class=\"ansd-pub-archives__toggle\">
      Données
    </button>
    <div class=\"ansd-pub-archives__list\">
      ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_donnees_pdf", [], "any", false, false, true, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                yield "        <a href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 63), "fileuri", [], "any", false, false, true, 63)), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
          ";
                // line 64
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", true, true, true, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 64), "Télécharger")) : ("Télécharger")), "html", null, true);
                yield "
        </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 67
            yield "    </div>
  </div>
";
        }
        // line 70
        yield "
      ";
        // line 71
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_documents_de_reference_pdf", [], "any", false, false, true, 71), "isEmpty", [], "any", false, false, true, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "  <div class=\"ansd-pub-archives\">
    <button type=\"button\" class=\"ansd-pub-archives__toggle\">
      Documents de référence
    </button>
    <div class=\"ansd-pub-archives__list\">
      ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_documents_de_reference_pdf", [], "any", false, false, true, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 78
                yield "        <a href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 78), "fileuri", [], "any", false, false, true, 78)), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
          ";
                // line 79
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", true, true, true, 79)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 79), "Télécharger")) : ("Télécharger")), "html", null, true);
                yield "
        </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 82
            yield "    </div>
  </div>
";
        }
        // line 85
        yield "
      ";
        // line 86
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_themes_similaires", [], "any", false, false, true, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "    <div class=\"ansd-pub-archives\">
      <button type=\"button\" class=\"ansd-pub-archives__toggle\">
        Thèmes similaires
      </button>
      <div class=\"ansd-pub-archives__list\">
        ";
            // line 92
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_themes_similaires", [], "any", false, false, true, 92), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 96
        yield "
    </aside>

  </div>

    ";
        // line 101
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_graphe_iframe", [], "any", false, false, true, 101), "isEmpty", [], "any", false, false, true, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "    <div class=\"ansd-pub-graphe\">
      <h2>Graphe indicateur</h2>
      <div class=\"ansd-pub-graphe__embed\">
        ";
            // line 105
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_graphe_iframe", [], "any", false, false, true, 105), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 109
        yield "
  ";
        // line 110
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_presentation", [], "any", false, false, true, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "    <div class=\"ansd-pub-presentation\">
      <h2>Présentation de la publication</h2>
      ";
            // line 113
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_presentation", [], "any", false, false, true, 113), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 116
        yield "

</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "label", "content", "node", "loop"]);        yield from [];
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
        return array (  322 => 116,  316 => 113,  312 => 111,  310 => 110,  307 => 109,  300 => 105,  295 => 102,  293 => 101,  286 => 96,  279 => 92,  272 => 87,  270 => 86,  267 => 85,  262 => 82,  252 => 79,  247 => 78,  243 => 77,  236 => 72,  234 => 71,  231 => 70,  226 => 67,  216 => 64,  211 => 63,  207 => 62,  200 => 57,  198 => 56,  195 => 55,  190 => 52,  180 => 49,  175 => 48,  171 => 47,  164 => 42,  162 => 41,  159 => 40,  155 => 38,  140 => 37,  136 => 36,  132 => 35,  127 => 34,  110 => 33,  106 => 31,  104 => 30,  101 => 29,  95 => 27,  93 => 26,  88 => 23,  82 => 21,  80 => 20,  77 => 19,  71 => 17,  69 => 16,  60 => 10,  50 => 3,  44 => 1,);
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
        static $tags = ["if" => 16, "for" => 33];
        static $filters = ["escape" => 1, "trim" => 17, "striptags" => 17, "render" => 17, "default" => 35];
        static $functions = ["file_url" => 34];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for"],
                [0 => "escape", 1 => "trim", 2 => "striptags", 3 => "render", 4 => "default"],
                [0 => "file_url"],
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
