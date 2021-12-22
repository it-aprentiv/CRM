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

/* formation/childs/liste.stagiaires.html.twig */
class __TwigTemplate_112c890aab434ffe36588a6d23b257d419a00e0e8e74a6bd9992feb2c3866027 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/liste.stagiaires.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/liste.stagiaires.html.twig"));

        // line 1
        echo "<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm\">Nom</th>
        <th class=\"col-sm\">Prénom</th>
        <th class=\"col-sm\">Email</th>
        <th class=\"col-sm\">Date de naissance</th>
        <th class=\"col-sm\">Niveau d'etude</th>
        <th class=\"col-sm\">N° sécurité social</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 13, $this->source); })()), "stagiaires", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 14, $this->source); })()), "stagiaires", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 15
                echo "            <tr class=\"row\">
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "nom", [], "any", false, false, false, 18), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 23
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "prenom", [], "any", false, false, false, 23), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "Email", [], "any", false, false, false, 28), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "dateNaissance", [], "any", false, false, false, 33), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "niveauetude", [], "any", false, false, false, 38), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 43
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "nsecuritesocial", [], "any", false, false, false, 43), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "    </tbody>
</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/childs/liste.stagiaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  120 => 48,  109 => 43,  101 => 38,  93 => 33,  85 => 28,  77 => 23,  69 => 18,  64 => 15,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm\">Nom</th>
        <th class=\"col-sm\">Prénom</th>
        <th class=\"col-sm\">Email</th>
        <th class=\"col-sm\">Date de naissance</th>
        <th class=\"col-sm\">Niveau d'etude</th>
        <th class=\"col-sm\">N° sécurité social</th>
    </tr>
    </thead>
    <tbody>
    {% if formation_form.stagiaires|length > 0 %}
        {% for form in formation_form.stagiaires %}
            <tr class=\"row\">
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.nom, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.prenom, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.Email, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.dateNaissance, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.niveauetude, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.nsecuritesocial, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
            </tr>
        {% endfor %}
    {% endif %}
    </tbody>
</table>

", "formation/childs/liste.stagiaires.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/liste.stagiaires.html.twig");
    }
}
