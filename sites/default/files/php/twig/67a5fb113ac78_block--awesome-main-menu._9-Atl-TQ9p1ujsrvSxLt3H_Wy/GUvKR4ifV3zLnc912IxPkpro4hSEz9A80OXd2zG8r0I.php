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

/* themes/custom/awesome/templates/block/block--awesome-main-menu.html.twig */
class __TwigTemplate_24f2ee175c830bd1afd6ac871a1fe0ec extends Template
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
        // line 23
        yield "<div class=\"container\">
  <div class=\"header__navigation\">
    <div class=\"logo\">
      <img src=\"/themes/custom/awesome/src/images/logo.png\" alt=\"logo\">
    </div>
    <div class=\"menu\">
      ";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("main", 1, 0, true), "html", null, true);
        yield "
    </div>
  </div>
</div>

<!--kod pro translation
";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("language_block:language_interface", [], false), "html", null, true);
        yield "
-->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/awesome/templates/block/block--awesome-main-menu.html.twig";
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
        return array (  61 => 35,  52 => 29,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/awesome/templates/block/block--awesome-main-menu.html.twig", "/var/www/html/themes/custom/awesome/templates/block/block--awesome-main-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 29];
        static $functions = ["drupal_menu" => 29, "drupal_block" => 35];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_menu', 'drupal_block'],
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
