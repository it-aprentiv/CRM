<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_24f44f7faa5a4226ef7d60a0aad249d01160f02932b01fb2be03715e90e6ecd6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Menu - CRM Aprentiv v2.0";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"row\">
        <div class=\"col-md-2\">
        </div>
        <div class=\"col-md-4 mt-3 \">
            <div class=\"card m-t-3 card-menu\">
                <div class=\"card-header\">
                    <h3 class=\"text-well\">GESTION</h3>
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user_menus"] ?? null), "gestion", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_gestion"]) {
            // line 17
            echo "                        <li class=\"list-group-item list-menu\">
                            <a class=\"menu\" href=\"";
            // line 18
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu_gestion"], "urlmenu", [], "any", false, false, false, 18))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menu_gestion"], "urlmenu", [], "any", false, false, false, 18))) : ("#"));
            echo "\">
                                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu_gestion"], "nomMenu", [], "any", false, false, false, 19), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_gestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-md-4 mt-3\">
            <div class=\"card card-menu\">
                <div class=\"card-header\">
                    <h3 class=\"text-well\">CREATION</h3>
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user_menus"] ?? null), "creation", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_creation"]) {
            // line 33
            echo "                        <li class=\"list-group-item list-menu\">
                            <a class=\"d-block w-100 menu\" href=\"";
            // line 34
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu_creation"], "urlmenu", [], "any", false, false, false, 34))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menu_creation"], "urlmenu", [], "any", false, false, false, 34))) : ("#"));
            echo "\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu_creation"], "nomMenu", [], "any", false, false, false, 35), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_creation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-md-2\">
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  113 => 35,  109 => 34,  106 => 33,  102 => 32,  91 => 23,  81 => 19,  77 => 18,  74 => 17,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/jeremy/Bureau/project/app/templates/home/index.html.twig");
    }
}
