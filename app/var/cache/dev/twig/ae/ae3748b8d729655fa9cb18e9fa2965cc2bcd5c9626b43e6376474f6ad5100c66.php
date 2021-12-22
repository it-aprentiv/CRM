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

/* competence/parts/_form.html.twig */
class __TwigTemplate_8d65ca645bcb32de2eaca49a37d3c68b6b8a6b0f3e8fb0109bfc96fed64aba7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/parts/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/parts/_form.html.twig"));

        // line 1
        echo "<div class=\"testForm\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "tagForm list-filter"]]);
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 \">
                <label class=\"title\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "competence", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Intitulé"]);
        // line 8
        echo "
                </label>
            </div>
            <div class=\"col-sm-4 \">
                <label class=\"title\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "themeformation", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "\tThème formation"]);
        // line 14
        echo "
                </label>
            </div>
            <div class=\"col-sm-4 \">
                <label class=\"title\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "themegenerale", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "\tThème générale"]);
        // line 20
        echo "
                </label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4 small-input required-field\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "competence", [], "any", false, false, false, 26), 'widget');
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "competence", [], "any", false, false, false, 27), 'errors');
        echo "
            </div>
            <div class=\"col-sm-4 small-input required-field\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "themeformation", [], "any", false, false, false, 30), 'widget');
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "themeformation", [], "any", false, false, false, 31), 'errors');
        echo "
            </div>
            <div class=\"col-sm-4 small-input required-field\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "themegenerale", [], "any", false, false, false, 34), 'widget');
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "themegenerale", [], "any", false, false, false, 35), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-4\">
                <label class=\"title\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "catalogueprogramme", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Programme"]);
        // line 42
        echo "
                </label>
                ";
        // line 44
        if ((((isset($context["competence"]) || array_key_exists("competence", $context)) &&  !(null === (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 44, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 44, $this->source); })()), "catalogueprogramme", [], "any", false, false, false, 44)))) {
            // line 45
            echo "                    (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 45, $this->source); })()), "catalogueprogramme", [], "any", false, false, false, 45), "html", null, true);
            echo ")
                ";
        }
        // line 47
        echo "            </div>
            <div class=\"col-sm-4\">
                <label class=\"title\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "evaluation", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Evaluation"]);
        // line 51
        echo "
                </label>
                ";
        // line 53
        if ((((isset($context["competence"]) || array_key_exists("competence", $context)) &&  !(null === (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 53, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 53, $this->source); })()), "evaluation", [], "any", false, false, false, 53)))) {
            // line 54
            echo "                    (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 54, $this->source); })()), "evaluation", [], "any", false, false, false, 54), "html", null, true);
            echo ")
                ";
        }
        // line 56
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "catalogueprogramme", [], "any", false, false, false, 60), 'widget');
        echo "
            </div>
            <div class=\"col-sm-4\">
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "evaluation", [], "any", false, false, false, 63), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12 mt-3\" style=\"text-align: center\">
                    <button class=\"btn btn-primary\" type=\"submit\" id=\"submdoss\"  style=\"border-radius: 5%;\">
                        ";
        // line 70
        if ((((isset($context["competence"]) || array_key_exists("competence", $context)) &&  !(null === (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 70, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 70, $this->source); })()), "catalogueprogramme", [], "any", false, false, false, 70)))) {
            // line 71
            echo "                            Modifier
                        ";
        } else {
            // line 73
            echo "                            Ajouter
                        ";
        }
        // line 75
        echo "                    </button>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "competence/parts/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 80,  175 => 75,  171 => 73,  167 => 71,  165 => 70,  155 => 63,  149 => 60,  143 => 56,  137 => 54,  135 => 53,  131 => 51,  129 => 49,  125 => 47,  119 => 45,  117 => 44,  113 => 42,  111 => 40,  103 => 35,  99 => 34,  93 => 31,  89 => 30,  83 => 27,  79 => 26,  71 => 20,  69 => 18,  63 => 14,  61 => 12,  55 => 8,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"testForm\">
    {{ form_start(data, { 'attr' : {'class': 'tagForm list-filter'}  }) }}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 \">
                <label class=\"title\">{{ form_label(data.competence, 'Intitulé', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
            </div>
            <div class=\"col-sm-4 \">
                <label class=\"title\">{{ form_label(data.themeformation, '\tThème formation', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
            </div>
            <div class=\"col-sm-4 \">
                <label class=\"title\">{{ form_label(data.themegenerale, '\tThème générale', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4 small-input required-field\">
                {{ form_widget(data.competence) }}
                {{ form_errors(data.competence) }}
            </div>
            <div class=\"col-sm-4 small-input required-field\">
                {{ form_widget(data.themeformation) }}
                {{ form_errors(data.themeformation) }}
            </div>
            <div class=\"col-sm-4 small-input required-field\">
                {{ form_widget(data.themegenerale) }}
                {{ form_errors(data.themegenerale) }}
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-4\">
                <label class=\"title\">{{ form_label(data.catalogueprogramme, 'Programme', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                {% if competence is defined and competence is not null and competence.catalogueprogramme is not empty %}
                    ({{ competence.catalogueprogramme }})
                {% endif %}
            </div>
            <div class=\"col-sm-4\">
                <label class=\"title\">{{ form_label(data.evaluation, 'Evaluation', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                {% if competence is defined and competence is not null and competence.evaluation is not empty %}
                    ({{ competence.evaluation }})
                {% endif %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                {{ form_widget(data.catalogueprogramme) }}
            </div>
            <div class=\"col-sm-4\">
                {{ form_widget(data.evaluation) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12 mt-3\" style=\"text-align: center\">
                    <button class=\"btn btn-primary\" type=\"submit\" id=\"submdoss\"  style=\"border-radius: 5%;\">
                        {% if competence is defined and competence is not null and competence.catalogueprogramme is not empty %}
                            Modifier
                        {% else %}
                            Ajouter
                        {% endif %}
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(data) }}
</div>
", "competence/parts/_form.html.twig", "/home/jeremy/Bureau/project/app/templates/competence/parts/_form.html.twig");
    }
}
