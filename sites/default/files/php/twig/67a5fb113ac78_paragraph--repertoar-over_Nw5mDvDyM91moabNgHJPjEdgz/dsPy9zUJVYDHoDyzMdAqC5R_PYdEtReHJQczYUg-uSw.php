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
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/awesome/templates/paragraph/paragraph--repertoar-overview.html.twig */
class __TwigTemplate_43458f93ee5ad1d817f49193aaabbca6 extends Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "<div class=\"repertoar-overview\">
  <div class=\"container\">
    ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 44)) {
            // line 45
            yield "      <div class=\"repertoar-background\">
        ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 46), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 49
        yield "    <div class=\"repertoar-overview__content\">
      <h2>Repertoar</h2>
      ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("repertoar", "all"), "html", null, true);
        yield "
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/awesome/templates/paragraph/paragraph--repertoar-overview.html.twig";
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
        return array (  63 => 51,  59 => 49,  53 => 46,  50 => 45,  48 => 44,  44 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/awesome/templates/paragraph/paragraph--repertoar-overview.html.twig", "/var/www/html/themes/custom/awesome/templates/paragraph/paragraph--repertoar-overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 44];
        static $filters = ["escape" => 46];
        static $functions = ["drupal_view" => 51];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['drupal_view'],
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
            }

            throw $e;
        }

    }
}
