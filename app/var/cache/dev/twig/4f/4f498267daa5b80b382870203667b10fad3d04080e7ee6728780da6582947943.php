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

/* dossier/part/custom-extract-modal.html.twig */
class __TwigTemplate_f308575ffc79187fe6f94752fa02322aaea3ca3a64d746363063a256f0aa58fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/custom-extract-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/custom-extract-modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-scrollable\" role=\"document\">
        <div class=\"modal-content \">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "-modal-title\">";
        echo twig_escape_filter($this->env, (isset($context["titleModal"]) || array_key_exists("titleModal", $context) ? $context["titleModal"] : (function () { throw new RuntimeError('Variable "titleModal" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close not-disabling\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-danger check-missing\" style=\"display: none;\">
                    <div class=\"d-flex justify-content-center\"><p>Veuillez Sélectionner un élément a afficher.</p></div>
                </div>
                <form class=\"form list-filter\" id=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "-form\" target=\"_blank\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.extract");
        echo "\" method=\"post\">
                    <div class=\"form-row\">
                        <div class=\"col-md-4  column-to-display\">
                            <div class=\"extract-checkbox-bloc\">
                                ";
        // line 18
        if ( !twig_test_empty((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "                                    <h4>Statuts dossiers</h4>
                                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
                // line 21
                echo "                                        <div class=\"form-group row\">
                                            <div class=\"col-md-8\">
                                                <label class=\"form-check-label\" for=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "-statut-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "statut", [], "any", false, false, false, 23), "html", null, true);
                echo "</label>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <input id=\"";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "-statut-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" name=\"filter[statut][]\" class=\"form-check-input display-field\" type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" />
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                                ";
        }
        // line 31
        echo "                            </div>
                            ";
        // line 32
        if ( !twig_test_empty((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                                <div class=\"form-check\">
                                    <input id=\"displayAllStatus-";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" type=\"checkbox\" class=\"form-check-input display-all\" name=\"filter[displayAll]\" value=\"true\" />
                                    <label class=\"form-check-label \" for=\"displayAllStatus-";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\" >Tout sélectionner</label>
                                </div>
                            ";
        }
        // line 38
        echo "                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 40
        if ((isset($context["datePaiement"]) || array_key_exists("datePaiement", $context))) {
            // line 41
            echo "                                <h4>Date de paiement</h4>
                                <div class=\"form-row\">
                                    <div class=\"col-md-5\">
                                        <input class=\"form-control js-datepicker-month\" type=\"text\" name=\"filter[moiscom]\" placeholder=\"Mois...\" />
                                    </div>
                                    <div class=\"d-flex justify-content-center py-10\">&nbsp; - &nbsp;</div>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control js-datepicker-year\" type=\"text\" name=\"filter[anneecom]\" placeholder=\"Année...\" />
                                    </div>
                                </div>
                            ";
        }
        // line 52
        echo "                            ";
        if ((isset($context["allCommercials"]) || array_key_exists("allCommercials", $context))) {
            // line 53
            echo "                                <h4>Commercial</h4>
                                <div class=\"form-group\">
                                    <select name=\"filter[commercial]\" class=\"form-control\">
                                        <option value=\"\">Tous</option>
                                        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allCommercials"]) || array_key_exists("allCommercials", $context) ? $context["allCommercials"] : (function () { throw new RuntimeError('Variable "allCommercials" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commercial"]) {
                // line 58
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commercial"], "id", [], "any", false, false, false, 58), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commercial"], "nomPrenom", [], "any", false, false, false, 58), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commercial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                    </select>
                                </div>
                            ";
        }
        // line 63
        echo "                            <h4>Période</h4>
                            <div class=\"form-row\">
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-month\" type=\"text\" name=\"filter[debut_month]\" placeholder=\"Mois début...\" autocomplete=\"off\"/>
                                </div>
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-year\" type=\"text\" name=\"filter[debut_year]\" placeholder=\"Année début ...\" autocomplete=\"off\"/>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-month\" type=\"text\" name=\"filter[fin_month]\" placeholder=\"Mois fin...\" autocomplete=\"off\"/>
                                </div>
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-year\" type=\"text\" name=\"filter[fin_year]\" placeholder=\"Année fin...\" autocomplete=\"off\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 column-to-display\">
                            <h4>Elements à afficher</h4>
                            <div class=\"extract-checkbox-bloc\">
                                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["displayColumns"]) || array_key_exists("displayColumns", $context) ? $context["displayColumns"] : (function () { throw new RuntimeError('Variable "displayColumns" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["libelle"]) {
            // line 85
            echo "                                    <div class=\"form-group row\">
                                        <div class=\"col-md-8\">
                                            <label class=\"form-check-label\" for=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "-column-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["libelle"], "html", null, true);
            echo "</label>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <input id=\"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "-column-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" name=\"filter[columns][]\" class=\"form-check-input display-field\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" />
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['libelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "-column-\" />
                            </div>
                            <div class=\"form-check\">
                                <input id=\"displayAllColumns-";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "\" type=\"checkbox\" class=\"form-check-input display-all\" name=\"filter[displayAll]\" value=\"true\" />
                                <label class=\"form-check-label \" for=\"displayAllColumns-";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "\" >Tout sélectionner</label>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"filtreextract\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["typeExtract"]) || array_key_exists("typeExtract", $context) ? $context["typeExtract"] : (function () { throw new RuntimeError('Variable "typeExtract" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "\" />
                </form>
            </div>
            <div class=\"modal-footer list-filter\">
                <button type=\"submit\" name=\"filtreextract\" data-form=\"#";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "-form\" class=\"btn btn-info submit-extract\" >Continuer</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/part/custom-extract-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 106,  255 => 102,  248 => 98,  244 => 97,  237 => 94,  223 => 90,  213 => 87,  209 => 85,  205 => 84,  182 => 63,  177 => 60,  166 => 58,  162 => 57,  156 => 53,  153 => 52,  140 => 41,  138 => 40,  134 => 38,  128 => 35,  124 => 34,  121 => 33,  119 => 32,  116 => 31,  113 => 30,  99 => 26,  89 => 23,  85 => 21,  81 => 20,  78 => 19,  76 => 18,  67 => 14,  53 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"{{ id }}-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ id }}-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-scrollable\" role=\"document\">
        <div class=\"modal-content \">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"{{ id }}-modal-title\">{{ titleModal }}</h5>
                <button type=\"button\" class=\"close not-disabling\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-danger check-missing\" style=\"display: none;\">
                    <div class=\"d-flex justify-content-center\"><p>Veuillez Sélectionner un élément a afficher.</p></div>
                </div>
                <form class=\"form list-filter\" id=\"{{ id }}-form\" target=\"_blank\" action=\"{{ path('crm.dossier.extract') }}\" method=\"post\">
                    <div class=\"form-row\">
                        <div class=\"col-md-4  column-to-display\">
                            <div class=\"extract-checkbox-bloc\">
                                {% if status is not empty %}
                                    <h4>Statuts dossiers</h4>
                                    {% for statut in status %}
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-8\">
                                                <label class=\"form-check-label\" for=\"{{ id }}-statut-{{ statut.id }}\">{{ statut.statut }}</label>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <input id=\"{{ id }}-statut-{{ statut.id }}\" name=\"filter[statut][]\" class=\"form-check-input display-field\" type=\"checkbox\" value=\"{{ statut.id }}\" />
                                            </div>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>
                            {% if status is not empty %}
                                <div class=\"form-check\">
                                    <input id=\"displayAllStatus-{{ id }}\" type=\"checkbox\" class=\"form-check-input display-all\" name=\"filter[displayAll]\" value=\"true\" />
                                    <label class=\"form-check-label \" for=\"displayAllStatus-{{ id }}\" >Tout sélectionner</label>
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"col-md-4\">
                            {% if datePaiement is defined %}
                                <h4>Date de paiement</h4>
                                <div class=\"form-row\">
                                    <div class=\"col-md-5\">
                                        <input class=\"form-control js-datepicker-month\" type=\"text\" name=\"filter[moiscom]\" placeholder=\"Mois...\" />
                                    </div>
                                    <div class=\"d-flex justify-content-center py-10\">&nbsp; - &nbsp;</div>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control js-datepicker-year\" type=\"text\" name=\"filter[anneecom]\" placeholder=\"Année...\" />
                                    </div>
                                </div>
                            {% endif %}
                            {% if allCommercials is defined %}
                                <h4>Commercial</h4>
                                <div class=\"form-group\">
                                    <select name=\"filter[commercial]\" class=\"form-control\">
                                        <option value=\"\">Tous</option>
                                        {% for commercial in allCommercials %}
                                            <option value=\"{{ commercial.id }}\">{{ commercial.nomPrenom }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            {% endif %}
                            <h4>Période</h4>
                            <div class=\"form-row\">
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-month\" type=\"text\" name=\"filter[debut_month]\" placeholder=\"Mois début...\" autocomplete=\"off\"/>
                                </div>
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-year\" type=\"text\" name=\"filter[debut_year]\" placeholder=\"Année début ...\" autocomplete=\"off\"/>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-month\" type=\"text\" name=\"filter[fin_month]\" placeholder=\"Mois fin...\" autocomplete=\"off\"/>
                                </div>
                                <div class=\"col-md-6 py-2\">
                                    <input class=\"form-control js-datepicker-year\" type=\"text\" name=\"filter[fin_year]\" placeholder=\"Année fin...\" autocomplete=\"off\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 column-to-display\">
                            <h4>Elements à afficher</h4>
                            <div class=\"extract-checkbox-bloc\">
                                {% for key, libelle in displayColumns %}
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-8\">
                                            <label class=\"form-check-label\" for=\"{{ id }}-column-{{ key }}\">{{ libelle }}</label>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <input id=\"{{ id }}-column-{{ key }}\" name=\"filter[columns][]\" class=\"form-check-input display-field\" type=\"checkbox\" value=\"{{ key }}\" />
                                        </div>
                                    </div>
                                {% endfor %}
                                <input type=\"{{ id }}-column-\" />
                            </div>
                            <div class=\"form-check\">
                                <input id=\"displayAllColumns-{{ id }}\" type=\"checkbox\" class=\"form-check-input display-all\" name=\"filter[displayAll]\" value=\"true\" />
                                <label class=\"form-check-label \" for=\"displayAllColumns-{{ id }}\" >Tout sélectionner</label>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"filtreextract\" value=\"{{ typeExtract }}\" />
                </form>
            </div>
            <div class=\"modal-footer list-filter\">
                <button type=\"submit\" name=\"filtreextract\" data-form=\"#{{ id }}-form\" class=\"btn btn-info submit-extract\" >Continuer</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
", "dossier/part/custom-extract-modal.html.twig", "/var/www/templates/dossier/part/custom-extract-modal.html.twig");
    }
}
