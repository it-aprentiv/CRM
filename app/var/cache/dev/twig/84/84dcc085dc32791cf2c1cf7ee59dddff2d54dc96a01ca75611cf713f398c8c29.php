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

/* formation/childs/liste.commentaires.html.twig */
class __TwigTemplate_af4a0016a0ef5dfc76a2e61314c15d8796860e043e04d64fac2d450bc18cea11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/liste.commentaires.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/liste.commentaires.html.twig"));

        // line 1
        echo "<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm text-center\">Date création</th>
        <th class=\"col-sm text-center\">Commentaires</th>
        <th class=\"col-sm text-center\">Action</th>
        <th class=\"col-sm text-center\">Date Action</th>
        <th class=\"col-sm text-center\">Qui</th>
        <th class=\"col-sm text-center\">Statut action</th>
        ";
        // line 11
        echo "    </tr>
    </thead>
    <tbody id=\"commentaires_collection\">
    ";
        // line 14
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "data", [], "any", false, false, false, 14), "commentaires", [], "any", false, false, false, 14)) > 0)) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 15, $this->source); })()), "commentaires", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 16
                echo "            <tr class=\"row\">
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 19
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "dateAdd", [], "any", false, false, false, 19), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 24
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "texteNote", [], "any", false, false, false, 24), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "idAction", [], "any", false, false, false, 29), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 34
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "dateAction", [], "any", false, false, false, 34), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "idUserAction", [], "any", false, false, false, 39), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
                // line 44
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["form"], "idActionStatut", [], "any", false, false, false, 44), 'widget', ["attr" => ["disabled" => "true"]]);
                echo "
                    </div>
                </td>
                ";
                // line 54
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
        }
        // line 57
        echo "    </tbody>
</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/childs/liste.commentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 57,  124 => 56,  117 => 54,  111 => 44,  103 => 39,  95 => 34,  87 => 29,  79 => 24,  71 => 19,  66 => 16,  61 => 15,  59 => 14,  54 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm text-center\">Date création</th>
        <th class=\"col-sm text-center\">Commentaires</th>
        <th class=\"col-sm text-center\">Action</th>
        <th class=\"col-sm text-center\">Date Action</th>
        <th class=\"col-sm text-center\">Qui</th>
        <th class=\"col-sm text-center\">Statut action</th>
        {#<th class=\"col-sm\">Action</th>#}
    </tr>
    </thead>
    <tbody id=\"commentaires_collection\">
    {% if formation_form.vars.data.commentaires|length > 0 %}
        {% for form in formation_form.commentaires %}
            <tr class=\"row\">
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.dateAdd, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.texteNote, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.idAction, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.dateAction, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.idUserAction, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                <td class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_widget(form.idActionStatut, {'attr': {'disabled': 'true'}} ) }}
                    </div>
                </td>
                {#<<td>
                    div>
                        <a href=\"#\" data-comment-id=\"{{ form.vars.value.id }}\" class=\"delete-stagiaire\" title=\"Supprimer\" style=\"font-size: 140%;\" >
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </div>
                </td>#}
            </tr>
        {% endfor %}
    {% endif %}
    </tbody>
</table>

", "formation/childs/liste.commentaires.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/liste.commentaires.html.twig");
    }
}
