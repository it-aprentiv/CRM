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

/* home/stats.html.twig */
class __TwigTemplate_b63ca6b3977982b1952d061dbfd147a3eaf9822ed62ea79d3a2823f07afe0437 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/stats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/stats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Menu - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " 
    <div class=\"row\">
 
 
        <div class=\"col-md-12\">
            <canvas id=\"stats-by-month\"></canvas>
        </div>
        
        <div class=\"col-md-6\">
            <canvas id=\"stats-by-years\"></canvas>
        </div>   
        <div class=\"col-md-6\">
          <p>
            <label for=\"amount\">Entre :</label>
            <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:#f6931f; font-weight:bold;\">
          </p> 
        <div id=\"slider-range\"></div>
      </div>
    </div>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js\" integrity=\"sha256-D2tkh/3EROq+XuDEmgxOLW1oNxf0rLNlOwsPIUX+co4=\" crossorigin=\"anonymous\"></script>        
<script>
let labels = []
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statsDossiersMonth"]) || array_key_exists("statsDossiersMonth", $context) ? $context["statsDossiersMonth"] : (function () { throw new RuntimeError('Variable "statsDossiersMonth" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stats"]) {
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["stats"], "montantAccorde", [], "any", false, false, false, 29) || twig_get_attribute($this->env, $this->source, $context["stats"], "montantSigne", [], "any", false, false, false, 29))) {
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["stats"], "year", [], "any", false, false, false, 30) == 0)) {
                } else {
                    // line 32
                    echo "labels.push({
    label: `";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "month", [], "any", false, false, false, 33), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "year", [], "any", false, false, false, 33), "html", null, true);
                    echo "`,
    year: ";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "year", [], "any", false, false, false, 34), "html", null, true);
                    echo ",
    ";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, $context["stats"], "montantAccorde", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "mntAccord: parseInt(`";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "montantAccorde", [], "any", false, false, false, 36), "html", null, true);
                        echo "`),
    ";
                    } else {
                        // line 38
                        echo "mntAccord: 0,
    ";
                    }
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, $context["stats"], "montantSigne", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "mntSigne: parseInt(`";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "montantSigne", [], "any", false, false, false, 41), "html", null, true);
                        echo "`),
    ";
                    } else {
                        // line 43
                        echo "mntSigne: 0,
    ";
                    }
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["stats"], "montantFacture", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "mntFacture: parseInt(`";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "montantFacture", [], "any", false, false, false, 46), "html", null, true);
                        echo "`)
";
                    } else {
                        // line 48
                        echo "mntFacture: 0
";
                    }
                    // line 50
                    echo "})
";
                }
                // line 52
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "const ctx = document.getElementById('stats-by-month').getContext('2d');
const month = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels.map(d => d.label),
        datasets: [{
            label: 'Montant signé HT',
            data: labels.map(d => d.mntSigne),
            fill: false,
            backgroundColor: [
                'rgb(75, 64, 192)',
            ],
            borderColor: 'rgb(75, 64, 192)',
            tension: 0.1
        }, {
            label: 'Montant accordé HT',
            data: labels.map(d => d.mntAccord),
            fill: false,
            backgroundColor: [
                'rgb(75, 192, 192)',
            ],
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }, {
            label: 'Montant facturé HT',
            data: labels.map(d => d.mntFacture),
            fill: false,
            backgroundColor: [
                'rgb(75, 140, 192)',
            ],
            borderColor: 'rgb(75, 140, 192)',
            tension: 0.1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'CA mensuel',
                fullSize: true
            },
        }
    }
});

let labelsyear = [];
";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statsDossiersYear"]) || array_key_exists("statsDossiersYear", $context) ? $context["statsDossiersYear"] : (function () { throw new RuntimeError('Variable "statsDossiersYear" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stats"]) {
            // line 102
            if (((twig_get_attribute($this->env, $this->source, $context["stats"], "montantAccorde", [], "any", false, false, false, 102) || twig_get_attribute($this->env, $this->source, $context["stats"], "montantSigne", [], "any", false, false, false, 102)) || twig_get_attribute($this->env, $this->source, $context["stats"], "montantFacture", [], "any", false, false, false, 102))) {
                // line 103
                if ((twig_get_attribute($this->env, $this->source, $context["stats"], "year", [], "any", false, false, false, 103) == 0)) {
                    // line 104
                    echo "
";
                } else {
                    // line 106
                    echo "labelsyear.push({
    year: parseInt(`";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "year", [], "any", false, false, false, 107), "html", null, true);
                    echo "`),
    ";
                    // line 108
                    if (twig_get_attribute($this->env, $this->source, $context["stats"], "montantAccorde", [], "any", false, false, false, 108)) {
                        // line 109
                        echo "mntAccord: parseInt(`";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "montantAccorde", [], "any", false, false, false, 109), "html", null, true);
                        echo "`),
    ";
                    } else {
                        // line 111
                        echo "mntAccord: 0,
    ";
                    }
                    // line 113
                    if (twig_get_attribute($this->env, $this->source, $context["stats"], "montantSigne", [], "any", false, false, false, 113)) {
                        // line 114
                        echo "mntSigne: parseInt(`";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "montantSigne", [], "any", false, false, false, 114), "html", null, true);
                        echo "`),
    ";
                    } else {
                        // line 116
                        echo "mntSigne: 0,
    ";
                    }
                    // line 118
                    if (twig_get_attribute($this->env, $this->source, $context["stats"], "montantFacture", [], "any", false, false, false, 118)) {
                        // line 119
                        echo "mntFacture: parseInt(`";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "montantFacture", [], "any", false, false, false, 119), "html", null, true);
                        echo "`)
";
                    } else {
                        // line 121
                        echo "mntFacture: 0
";
                    }
                    // line 123
                    echo "  })
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "const ctx2 = document.getElementById('stats-by-years').getContext('2d');
const years = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: labelsyear.map(d => d.year),
        datasets: [{
            label: 'Montant signé HT',
            data: labelsyear.map(d => d.mntSigne),
            fill: false,
            backgroundColor: [
                'rgb(75, 64, 192)',
            ],
            borderColor: 'rgb(75, 64, 192)',
            tension: 0.1
        }, {
            label: 'Montant accordé HT',
            data: labelsyear.map(d => d.mntAccord),
            fill: false,
            backgroundColor: [
                'rgb(75, 192, 192)',
            ],

            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }, {
            label: 'Montant facturé HT',
            data: labelsyear.map(d => d.mntFacture),
            fill: false,
            backgroundColor: [
                'rgb(75, 140, 192)',
            ],
            borderColor: 'rgb(75, 140, 192)',
            tension: 0.1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'CA Annuel',
                fullSize: true
            },
        }
    }
});

setTimeout(() => {
    let numbersYear = labelsyear.filter(d => Number(d.year)).map(d => d.year)
    \$(function () {
        \$(\"#slider-range\").slider({
            range: true,
            min: Math.min(...numbersYear),
            max: Math.max(...numbersYear),
            values: [Math.min(...numbersYear), Math.max(...numbersYear)],
            slide: function (event, ui) {
                years.data.labels = labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.year)
                years.data.datasets = [{
                    label: 'Montant signé HT',
                    data: labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntSigne),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 64, 192)',
                    ],
                    borderColor: 'rgb(75, 64, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant accordé HT',
                    data: labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntAccord),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                    ],

                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant facturé HT',
                    data: labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntFacture),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 140, 192)',
                    ],
                    borderColor: 'rgb(75, 140, 192)',
                    tension: 0.1
                }]
                years.update()

                month.data.labels = labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.label)
                month.data.datasets = [{
                    label: 'Montant signé HT',
                    data: labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntSigne),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 64, 192)',
                    ],
                    borderColor: 'rgb(75, 64, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant accordé HT',
                    data: labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntAccord),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                    ],

                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant facturé HT',
                    data: labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntFacture),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 140, 192)',
                    ],
                    borderColor: 'rgb(75, 140, 192)',
                    tension: 0.1
                }]
                month.update()

                \$(\"#amount\").val(ui.values[0] + \" - \" + ui.values[1]);
            }
        });
        \$(\"#amount\").val(\$(\"#slider-range\").slider(\"values\", 0) +
            \" - \" + \$(\"#slider-range\").slider(\"values\", 1));
    });
}, 500)

        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 127,  285 => 123,  281 => 121,  275 => 119,  273 => 118,  269 => 116,  263 => 114,  261 => 113,  257 => 111,  251 => 109,  249 => 108,  245 => 107,  242 => 106,  238 => 104,  236 => 103,  234 => 102,  230 => 101,  182 => 55,  174 => 52,  170 => 50,  166 => 48,  160 => 46,  158 => 45,  154 => 43,  148 => 41,  146 => 40,  142 => 38,  136 => 36,  134 => 35,  130 => 34,  124 => 33,  121 => 32,  118 => 30,  116 => 29,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu - CRM Aprentiv v2.0{% endblock %}

{% block body %}
 
    <div class=\"row\">
 
 
        <div class=\"col-md-12\">
            <canvas id=\"stats-by-month\"></canvas>
        </div>
        
        <div class=\"col-md-6\">
            <canvas id=\"stats-by-years\"></canvas>
        </div>   
        <div class=\"col-md-6\">
          <p>
            <label for=\"amount\">Entre :</label>
            <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:#f6931f; font-weight:bold;\">
          </p> 
        <div id=\"slider-range\"></div>
      </div>
    </div>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js\" integrity=\"sha256-D2tkh/3EROq+XuDEmgxOLW1oNxf0rLNlOwsPIUX+co4=\" crossorigin=\"anonymous\"></script>        
<script>
let labels = []
{% for stats in statsDossiersMonth %}
{% if stats.montantAccorde or stats.montantSigne %}
{% if stats.year == 0 %}
{% else %}
labels.push({
    label: `{{ stats.month }}/{{ stats.year }}`,
    year: {{ stats.year }},
    {% if stats.montantAccorde %}
mntAccord: parseInt(`{{ stats.montantAccorde }}`),
    {% else %}
mntAccord: 0,
    {% endif %}
{% if stats.montantSigne %}
mntSigne: parseInt(`{{ stats.montantSigne }}`),
    {% else %}
mntSigne: 0,
    {% endif %}
{% if stats.montantFacture %}
mntFacture: parseInt(`{{ stats.montantFacture }}`)
{% else %}
mntFacture: 0
{% endif %}
})
{% endif %}

{% endif %}
{% endfor %}
const ctx = document.getElementById('stats-by-month').getContext('2d');
const month = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels.map(d => d.label),
        datasets: [{
            label: 'Montant signé HT',
            data: labels.map(d => d.mntSigne),
            fill: false,
            backgroundColor: [
                'rgb(75, 64, 192)',
            ],
            borderColor: 'rgb(75, 64, 192)',
            tension: 0.1
        }, {
            label: 'Montant accordé HT',
            data: labels.map(d => d.mntAccord),
            fill: false,
            backgroundColor: [
                'rgb(75, 192, 192)',
            ],
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }, {
            label: 'Montant facturé HT',
            data: labels.map(d => d.mntFacture),
            fill: false,
            backgroundColor: [
                'rgb(75, 140, 192)',
            ],
            borderColor: 'rgb(75, 140, 192)',
            tension: 0.1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'CA mensuel',
                fullSize: true
            },
        }
    }
});

let labelsyear = [];
{% for stats in statsDossiersYear %}
{% if stats.montantAccorde or stats.montantSigne or stats.montantFacture %}
{% if stats.year == 0 %}

{% else %}
labelsyear.push({
    year: parseInt(`{{ stats.year }}`),
    {% if stats.montantAccorde %}
mntAccord: parseInt(`{{ stats.montantAccorde }}`),
    {% else %}
mntAccord: 0,
    {% endif %}
{% if stats.montantSigne %}
mntSigne: parseInt(`{{ stats.montantSigne }}`),
    {% else %}
mntSigne: 0,
    {% endif %}
{% if stats.montantFacture %}
mntFacture: parseInt(`{{ stats.montantFacture }}`)
{% else %}
mntFacture: 0
{% endif %}
  })
{% endif %}
{% endif %}
{% endfor %}
const ctx2 = document.getElementById('stats-by-years').getContext('2d');
const years = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: labelsyear.map(d => d.year),
        datasets: [{
            label: 'Montant signé HT',
            data: labelsyear.map(d => d.mntSigne),
            fill: false,
            backgroundColor: [
                'rgb(75, 64, 192)',
            ],
            borderColor: 'rgb(75, 64, 192)',
            tension: 0.1
        }, {
            label: 'Montant accordé HT',
            data: labelsyear.map(d => d.mntAccord),
            fill: false,
            backgroundColor: [
                'rgb(75, 192, 192)',
            ],

            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }, {
            label: 'Montant facturé HT',
            data: labelsyear.map(d => d.mntFacture),
            fill: false,
            backgroundColor: [
                'rgb(75, 140, 192)',
            ],
            borderColor: 'rgb(75, 140, 192)',
            tension: 0.1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'CA Annuel',
                fullSize: true
            },
        }
    }
});

setTimeout(() => {
    let numbersYear = labelsyear.filter(d => Number(d.year)).map(d => d.year)
    \$(function () {
        \$(\"#slider-range\").slider({
            range: true,
            min: Math.min(...numbersYear),
            max: Math.max(...numbersYear),
            values: [Math.min(...numbersYear), Math.max(...numbersYear)],
            slide: function (event, ui) {
                years.data.labels = labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.year)
                years.data.datasets = [{
                    label: 'Montant signé HT',
                    data: labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntSigne),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 64, 192)',
                    ],
                    borderColor: 'rgb(75, 64, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant accordé HT',
                    data: labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntAccord),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                    ],

                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant facturé HT',
                    data: labelsyear.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntFacture),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 140, 192)',
                    ],
                    borderColor: 'rgb(75, 140, 192)',
                    tension: 0.1
                }]
                years.update()

                month.data.labels = labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.label)
                month.data.datasets = [{
                    label: 'Montant signé HT',
                    data: labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntSigne),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 64, 192)',
                    ],
                    borderColor: 'rgb(75, 64, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant accordé HT',
                    data: labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntAccord),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                    ],

                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }, {
                    label: 'Montant facturé HT',
                    data: labels.filter(d => d.year >= ui.values[0] && d.year <= ui.values[1]).map(d => d.mntFacture),
                    fill: false,
                    backgroundColor: [
                        'rgb(75, 140, 192)',
                    ],
                    borderColor: 'rgb(75, 140, 192)',
                    tension: 0.1
                }]
                month.update()

                \$(\"#amount\").val(ui.values[0] + \" - \" + ui.values[1]);
            }
        });
        \$(\"#amount\").val(\$(\"#slider-range\").slider(\"values\", 0) +
            \" - \" + \$(\"#slider-range\").slider(\"values\", 1));
    });
}, 500)

        </script>
{% endblock %}
", "home/stats.html.twig", "/var/www/templates/home/stats.html.twig");
    }
}
