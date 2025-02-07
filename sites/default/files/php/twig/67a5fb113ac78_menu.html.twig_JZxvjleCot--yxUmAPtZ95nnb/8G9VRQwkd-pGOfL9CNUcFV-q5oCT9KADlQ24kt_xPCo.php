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

/* themes/custom/awesome/templates/menu/menu.html.twig */
class __TwigTemplate_c3b065b44991a816d068ee56d3508eaf extends Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 29, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        // line 72
        yield "
<div class=\"hamburger\">
    <span class=\"bar\"></span>
    <span class=\"bar\"></span>
    <span class=\"bar\"></span>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 31
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "    ";
            $macros["menus"] = $this;
            // line 33
            yield "    ";
            if (($context["items"] ?? null)) {
                // line 34
                yield "        ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield "            <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["main-menu"], "method", false, false, true, 35), "html", null, true);
                    yield ">
        ";
                } else {
                    // line 37
                    yield "            <ul class=\"main-menu-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                    yield "\">
        ";
                }
                // line 39
                yield "
        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    yield "            ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 42
                        yield "                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 42)) {
                            // line 43
                            yield "                <li";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 43), "addClass", ["main-menu__li below"], "method", false, false, true, 43), "html", null, true);
                            yield ">
                ";
                        } else {
                            // line 45
                            yield "                    <li";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 45), "addClass", ["main-menu__li"], "method", false, false, true, 45), "html", null, true);
                            yield ">

                ";
                        }
                        // line 48
                        yield "            ";
                    } else {
                        // line 49
                        yield "                <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [(("main-menu-" . (($context["menu_level"] ?? null) + 1)) . "__li")], "method", false, false, true, 49), "html", null, true);
                        yield ">
            ";
                    }
                    // line 51
                    yield "
            ";
                    // line 52
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52)) {
                        // line 53
                        yield "                ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 54
                            yield "                    <span class=\"main-menu__arrow\">
            ";
                            // line 55
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), ["class" => [("link-level-" . (($context["menu_level"] ?? null) + 1))]]), "html", null, true);
                            yield " <span class=\"a\">
                </span>
          </span>
                ";
                        } else {
                            // line 59
                            yield "                    ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 59), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), ["class" => [("link-level-" . (($context["menu_level"] ?? null) + 1))]]), "html", null, true);
                            yield "
                ";
                        }
                        // line 61
                        yield "                ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 61, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
            ";
                    } else {
                        // line 63
                        yield "                ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 63), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 63), ["class" => [("link-level-" . (($context["menu_level"] ?? null) + 1))]]), "html", null, true);
                        yield "
            ";
                    }
                    // line 65
                    yield "            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                yield "        </ul>
        </ul>

    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/awesome/templates/menu/menu.html.twig";
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
        return array (  179 => 67,  172 => 65,  166 => 63,  160 => 61,  154 => 59,  147 => 55,  144 => 54,  141 => 53,  139 => 52,  136 => 51,  130 => 49,  127 => 48,  120 => 45,  114 => 43,  111 => 42,  108 => 41,  104 => 40,  101 => 39,  95 => 37,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  66 => 31,  54 => 72,  49 => 29,  46 => 24,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/awesome/templates/menu/menu.html.twig", "/var/www/html/themes/custom/awesome/templates/menu/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "macro" => 31, "if" => 33, "for" => 40];
        static $filters = ["escape" => 35];
        static $functions = ["link" => 55];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link'],
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
