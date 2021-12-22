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

/* security/login.html.twig */
class __TwigTemplate_a3b010e6379dc0085da209eddb4114b7f4535bead70972fe63d33ea5351465d3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Authentification - CRM Aprentiv";
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div id=\"login\">
        <h2 class=\"text-center text-white pt-5\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/aprentiv-logo.png"), "html", null, true);
        echo "\" alt=\"CRM Aprentiv\"/>
            C.R.M
        </h2>
        <div class=\"container\">
            <div id=\"login-row\" class=\"row justify-content-center align-items-center\">
                <div id=\"login-column\" class=\"col-md-6\">
                    <div class=\"col-md-12\">
                        <form id=\"login-form\" class=\"form\" action=\"\" method=\"post\">
                            <div class=\"card\">
                                <div class=\"card-header card-header-dark\">
                                    <h3 class=\"text-center text-white\">AUTHENTIFICATION - CRM</h3>
                                </div>
                                <br>
                                <div class=\"row vdivide\">
                                    <div class=\"col-md-5\">
                                        <img id=\"cle-img\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/authentification_cle.png"), "html", null, true);
        echo "\" alt=\"login\"/>
                                    </div>
                                    <div class=\"col-md-7 no-disabled\">
                                        <div class=\"card-body\">
                                            ";
        // line 32
        if (($context["error"] ?? null)) {
            // line 33
            echo "                                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 33), "security"), "html", null, true);
            echo "</div>
                                            ";
        }
        // line 35
        echo "                                            <div class=\"form-group\">
                                                <label for=\"username\" class=\"text-theme-dark\">Nom d'utilisateur </label><br>
                                                <input type=\"text\" name=\"username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" id=\"username\" class=\"form-control\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"password\" class=\"text-theme-dark\">Mot de passe</label><br>
                                                <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group text-center\">
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                                <input type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-theme-primary btn-md\" value=\"Se connecter\">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

        <div class=\"fixed-bottom door-footer\"></div>
        <img id=\"door-img\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/authentification-porte.png"), "html", null, true);
        echo "\" class=\"fixed-bottom\" alt=\"door\"/>
    </div>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 62,  119 => 44,  109 => 37,  105 => 35,  99 => 33,  97 => 32,  90 => 28,  72 => 13,  67 => 10,  63 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/templates/security/login.html.twig");
    }
}
