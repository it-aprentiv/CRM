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

/* Common/client-ajax-js.html.twig */
class __TwigTemplate_62ce73f0c10ed73c5783b9397d3833ae7ac53221a393466fd102286701bb9b46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/client-ajax-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/client-ajax-js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new RuntimeError('Variable "attrs" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "').select2({
            placeholder: \"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new RuntimeError('Variable "attrs" does not exist.', 4, $this->source); })()), "placeholder", [], "any", false, false, false, 4), "html", null, true);
        echo "\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.contact.client.search_json");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                        limit: 20,
                        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["attrs"] ?? null), "structure", [], "any", true, true, false, 13)) {
            // line 14
            echo "                            structure: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new RuntimeError('Variable "attrs" does not exist.', 14, $this->source); })()), "structure", [], "any", false, false, false, 14), "html", null, true);
            echo "',
                        ";
        }
        // line 16
        echo "                        type: 'client'
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                processResults: function (data) {
                    return {
                        results: \$.map(data, function (item) {
                            return {
                                text: item.nomStr,
                                id: item.id
                            };
                        })
                    };
                }
            },
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/client-ajax-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  68 => 14,  66 => 13,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#{{ attrs.id }}').select2({
            placeholder: \"{{ attrs.placeholder }}\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.contact.client.search_json') }}',
                data: function (params) {
                    var query = {
                        search: params.term,
                        limit: 20,
                        {% if attrs.structure is defined %}
                            structure: '{{ attrs.structure }}',
                        {% endif %}
                        type: 'client'
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                processResults: function (data) {
                    return {
                        results: \$.map(data, function (item) {
                            return {
                                text: item.nomStr,
                                id: item.id
                            };
                        })
                    };
                }
            },
        });
    });
</script>", "Common/client-ajax-js.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/client-ajax-js.html.twig");
    }
}
