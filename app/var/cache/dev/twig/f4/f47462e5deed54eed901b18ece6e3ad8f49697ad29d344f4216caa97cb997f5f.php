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

/* formation/childs/liste.suiviom.html.twig */
class __TwigTemplate_53ef4b94d4c0529a894e83129d7dfc6b66d291c99f5a5888e377da52b009ff37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/liste.suiviom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/liste.suiviom.html.twig"));

        // line 1
        echo "<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm\">Réception facture</th>
        <th class=\"col-sm\">Mois facture</th>
        <th class=\"col-sm\">Heure fait</th>
        <th class=\"col-sm\">Heure restant</th>
        <th class=\"col-sm\">Date de la fature</th>
        <th class=\"col-sm\">N° de la fature</th>
        <th class=\"col-sm\">Montant HT</th>
        <th class=\"col-sm\">Date validation</th>
    </tr>
    </thead>
    <tbody id=\"suiviom_collection\">
    ";
        // line 15
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "data", [], "any", false, false, false, 15), "suiviMissions", [], "any", false, false, false, 15)) > 0)) {
            // line 16
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 16, $this->source); })()), "suiviMissions", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 17
                echo "            <tr class=\"row\">
                <td class=\"col-sm row\">
                    <div class=\"form-group text-center\">
                        ";
                // line 20
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "recepfac", [], "any", false, false, false, 20), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "moisfac", [], "any", false, false, false, 25), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 30
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "heurefait", [], "any", false, false, false, 30), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 35
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "heurerestant", [], "any", false, false, false, 35), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "datefac", [], "any", false, false, false, 40), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 45
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "numfac", [], "any", false, false, false, 45), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 50
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "montantht", [], "any", false, false, false, 50), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 55
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "datevalidation", [], "any", false, false, false, 55), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    ";
        }
        // line 61
        echo "    </tbody>
</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/childs/liste.suiviom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  138 => 60,  127 => 55,  119 => 50,  111 => 45,  103 => 40,  95 => 35,  87 => 30,  79 => 25,  71 => 20,  66 => 17,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm\">Réception facture</th>
        <th class=\"col-sm\">Mois facture</th>
        <th class=\"col-sm\">Heure fait</th>
        <th class=\"col-sm\">Heure restant</th>
        <th class=\"col-sm\">Date de la fature</th>
        <th class=\"col-sm\">N° de la fature</th>
        <th class=\"col-sm\">Montant HT</th>
        <th class=\"col-sm\">Date validation</th>
    </tr>
    </thead>
    <tbody id=\"suiviom_collection\">
    {% if formation_form.vars.data.suiviMissions|length > 0 %}
    {% for form in formation_form.suiviMissions %}
            <tr class=\"row\">
                <td class=\"col-sm row\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.recepfac, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.moisfac, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.heurefait, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.heurerestant, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.datefac, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.numfac, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.montantht, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.datevalidation, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
            </tr>
        {% endfor %}
    {% endif %}
    </tbody>
</table>

", "formation/childs/liste.suiviom.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/liste.suiviom.html.twig");
    }
}
