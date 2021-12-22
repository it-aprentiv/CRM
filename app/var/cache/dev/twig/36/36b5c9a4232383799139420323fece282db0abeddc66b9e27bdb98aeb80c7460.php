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

/* formation/om.word.html.twig */
class __TwigTemplate_73ec017a186b20803f4de3344d9f9cae5888896d9f98ac701a3494477b38ebb3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/om.word.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/om.word.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"text-center mt-2 text-primary text-uppercase\">Ordre de mission</h2>
            </div>
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col align-self-start\">
                                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/aprentiv-logo-2.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col align-self-end\">
                                <span class=\"float-sm-right\">";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_now"]) || array_key_exists("date_now", $context) ? $context["date_now"] : (function () { throw new RuntimeError('Variable "date_now" does not exist.', 21, $this->source); })()), "d/m/Y"), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>FORMATEUR</strong>:
                                    <div class=\"col\">
                                        <ul>
                                            <li><strong>Nom</strong>: ";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 34, $this->source); })()), "idFormateur", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 34, $this->source); })()), "idFormateur", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 34, $this->source); })()), "idFormateur", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34)), "html", null, true))) : (print ("")));
        echo "</li>
                                            <li><strong>Société</strong>: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 35, $this->source); })()), "idClient", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <strong>CLIENT</strong>:
                                    <div class=\"col\">
                                        <ul>
                                            <li><strong>Adresse</strong>: </li>
                                            <li><strong>Tel</strong>: </li>
                                            <li><strong>Port</strong>: </li>
                                            <li><strong>Personne à contacter</strong>: </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Type de formation</strong>:
                                    </span>
                                </td>
                                <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 61, $this->source); })()), "dossierType", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Durée de la formation</strong>:
                                    </span>
                                </td>
                                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->diffDate(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 69, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 69, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 69)), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Date de stage</strong>:
                                    </span>
                                </td>
                                <td>Du ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 77, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 77, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Lieu de formation</strong>:
                                    </span>
                                </td>
                                <td>
                                    ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 86, $this->source); })()), "lieu", [], "any", false, false, false, 86)) {
            // line 87
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 87, $this->source); })()), "lieu", [], "any", false, false, false, 87), "html", null, true);
            echo "
                                    ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 88
(isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 88, $this->source); })()), "idClient", [], "any", false, false, false, 88), "adresses", [], "any", false, false, false, 88), 0, [], "array", false, false, false, 88)) {
            // line 89
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 89, $this->source); })()), "idClient", [], "any", false, false, false, 89), "adresses", [], "any", false, false, false, 89), 0, [], "array", false, false, false, 89), "adresse", [], "any", false, false, false, 89), "html", null, true);
            echo "
                                    ";
        }
        // line 91
        echo "                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Taux horaire/journalier de la prestation</strong>:
                                    </span>
                                </td>
                                <td>
                                    ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 100, $this->source); })()), "pfmteurH", [], "any", false, false, false, 100) && twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 100, $this->source); })()), "pfmteurJ", [], "any", false, false, false, 100))) {
            // line 101
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 101, $this->source); })()), "pfmteurH", [], "any", false, false, false, 101), "html", null, true);
            echo " € HT /jour ou ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 101, $this->source); })()), "pfmteurJ", [], "any", false, false, false, 101), "html", null, true);
            echo " € HT /heure
                                    ";
        }
        // line 103
        echo "                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Effectifs</strong>:
                                    </span>
                                </td>
                                <td>";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["nb_stagiaires"]) || array_key_exists("nb_stagiaires", $context) ? $context["nb_stagiaires"] : (function () { throw new RuntimeError('Variable "nb_stagiaires" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Nom du (des) stagiaires</strong>:
                                    </span>
                                </td>
                                <td>
                                    ";
        // line 120
        if (((isset($context["nb_stagiaires"]) || array_key_exists("nb_stagiaires", $context) ? $context["nb_stagiaires"] : (function () { throw new RuntimeError('Variable "nb_stagiaires" does not exist.', 120, $this->source); })()) > 0)) {
            // line 121
            echo "                                        <ul>
                                            ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 122, $this->source); })()), "stagiaires", [], "any", false, false, false, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["stagiaire"]) {
                // line 123
                echo "                                                <li>";
                echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "nom", [], "any", false, false, false, 123)) . " ") . twig_get_attribute($this->env, $this->source, $context["stagiaire"], "prenom", [], "any", false, false, false, 123)), "html", null, true);
                echo "</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stagiaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                        </ul>
                                    ";
        }
        // line 127
        echo "                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Nous prévenons le client que vous allez le contacter dans les jours qui suivent afin de convenir des dates et horaires de stage.</p>
                <p class=\"text-justify\">Dès que vous aurez finalisé les modalités de stage avec le client (dates, horaires, lieu …), ou s’il souhaite reporter son stage à une date ultérieure, ou encore s’il annule une ou plusieurs dates prévues, nous vous remercions de bien vouloir avertir Patricia par mail pour le bon suivi des stages mis en place.</p>
                <p class=\"text-justify\">En cas de stage dans les locaux d’Aprentiv, ne pas oublier de nous contacter afin vous assurer de la disponibilité de la salle.</p>
                <p class=\"text-justify\">Pour rappel, en cas de désistement tardif de la part du client, charge à vous de leur demander de respecter un délai d’annulation d’au moins 48 heures, faute de quoi la séance sera décomptée.</p>
                <p class=\"text-justify\">Le règlement de votre facture se fera à 30 jours fin de mois sur justificatifs (Listes Emargement complétées et signées par le formateur et le(s) stagiaire(s)).</p>
                <p class=\"text-justify\">Pour tout ce qui concerne le suivi de vos paiements merci de vous adresser à laetitia@aprentiv.com</p>
                <p class=\"text-justify\">Annulation de mission : dans le cas ou la mission proposée n’entre pas dans le champ de vos compétences et/ou votre planning, merci d’en informer le Service administratif par mail.</p>
                <p class=\"text-justify\">Si le stage est annulé par le(s) stagiaire(s) partiellement ou en totalité, seul le nombre d’heures effectivement réalisées sera réglé.</p>
                <p class=\"font-italic text-justify\">NB : Le présent bon de commande n’autorise en aucune manière le formateur à user de son influence auprès des stagiaires pour les inciter à acheter des services ou des biens, de manière directe ou indirecte, sans notre accord explicite.</p>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <p><strong>Pour l'Aprentiv conseil</strong></p>
                        <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/formation/signature.jpg"), "html", null, true);
        echo "\" style=\"width: 50%;\" class=\"align-left\" alt=\"signature\" />
                    </div>
                    <div class=\"col-md-4\">
                        <p>
                            <strong>Signature du formateur</strong>
                            <span>(précédée de la mention \"Bon pour accord\")</span>
                        </p>
                    </div>
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/formation/opqf.jpg"), "html", null, true);
        echo "\" style=\"width: 49%;\" alt=\"logo\" />
                        <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/formation/charte-diversite.jpg"), "html", null, true);
        echo "\" style=\"width: 49%;\" alt=\"logo\" />
                    </div>
                </div>
                <p>La réception du présent ordre de mission signé par le formateur vaut contrat de prestation.</p>
                <div class=\"row\">
                    <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/formation/foot.jpg"), "html", null, true);
        echo "\" alt=\"foot\" style=\"width: 100%;\" />
                </div>
            </div>
        </div>
    </div>
</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/om.word.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 158,  270 => 153,  266 => 152,  254 => 143,  236 => 127,  232 => 125,  223 => 123,  219 => 122,  216 => 121,  214 => 120,  202 => 111,  192 => 103,  184 => 101,  182 => 100,  171 => 91,  165 => 89,  163 => 88,  158 => 87,  156 => 86,  142 => 77,  131 => 69,  120 => 61,  91 => 35,  87 => 34,  71 => 21,  65 => 18,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" type=\"text/css\"/>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"text-center mt-2 text-primary text-uppercase\">Ordre de mission</h2>
            </div>
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col align-self-start\">
                                <img src=\"{{ asset('crm/images/aprentiv-logo-2.png') }}\" />
                            </div>
                            <div class=\"col align-self-end\">
                                <span class=\"float-sm-right\">{{ date_now|date('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>FORMATEUR</strong>:
                                    <div class=\"col\">
                                        <ul>
                                            <li><strong>Nom</strong>: {{ (formation.idFormateur) ? formation.idFormateur.nom ~ ' ' ~ formation.idFormateur.prenom : '' }}</li>
                                            <li><strong>Société</strong>: {{ formation.idClient.nom }}</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <strong>CLIENT</strong>:
                                    <div class=\"col\">
                                        <ul>
                                            <li><strong>Adresse</strong>: </li>
                                            <li><strong>Tel</strong>: </li>
                                            <li><strong>Port</strong>: </li>
                                            <li><strong>Personne à contacter</strong>: </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Type de formation</strong>:
                                    </span>
                                </td>
                                <td>{{ formation.dossierType }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Durée de la formation</strong>:
                                    </span>
                                </td>
                                <td>{{ diff_date(formation.dateDebutPeriode, formation.dateFinPeriode) }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Date de stage</strong>:
                                    </span>
                                </td>
                                <td>Du {{ formation.dateDebutPeriode|date('d/m/Y') }} au {{ formation.dateFinPeriode|date('d/m/Y') }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Lieu de formation</strong>:
                                    </span>
                                </td>
                                <td>
                                    {% if formation.lieu %}
                                        {{ formation.lieu }}
                                    {% elseif formation.idClient.adresses[0] %}
                                        {{ formation.idClient.adresses[0].adresse }}
                                    {% endif %}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Taux horaire/journalier de la prestation</strong>:
                                    </span>
                                </td>
                                <td>
                                    {% if formation.pfmteurH and formation.pfmteurJ %}
                                        {{ formation.pfmteurH }} € HT /jour ou {{ formation.pfmteurJ }} € HT /heure
                                    {% endif %}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Effectifs</strong>:
                                    </span>
                                </td>
                                <td>{{ nb_stagiaires }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <span>
                                        <strong>Nom du (des) stagiaires</strong>:
                                    </span>
                                </td>
                                <td>
                                    {% if nb_stagiaires > 0 %}
                                        <ul>
                                            {% for stagiaire in formation.stagiaires %}
                                                <li>{{ stagiaire.nom|upper ~ ' ' ~ stagiaire.prenom }}</li>
                                            {% endfor %}
                                        </ul>
                                    {% endif %}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Nous prévenons le client que vous allez le contacter dans les jours qui suivent afin de convenir des dates et horaires de stage.</p>
                <p class=\"text-justify\">Dès que vous aurez finalisé les modalités de stage avec le client (dates, horaires, lieu …), ou s’il souhaite reporter son stage à une date ultérieure, ou encore s’il annule une ou plusieurs dates prévues, nous vous remercions de bien vouloir avertir Patricia par mail pour le bon suivi des stages mis en place.</p>
                <p class=\"text-justify\">En cas de stage dans les locaux d’Aprentiv, ne pas oublier de nous contacter afin vous assurer de la disponibilité de la salle.</p>
                <p class=\"text-justify\">Pour rappel, en cas de désistement tardif de la part du client, charge à vous de leur demander de respecter un délai d’annulation d’au moins 48 heures, faute de quoi la séance sera décomptée.</p>
                <p class=\"text-justify\">Le règlement de votre facture se fera à 30 jours fin de mois sur justificatifs (Listes Emargement complétées et signées par le formateur et le(s) stagiaire(s)).</p>
                <p class=\"text-justify\">Pour tout ce qui concerne le suivi de vos paiements merci de vous adresser à laetitia@aprentiv.com</p>
                <p class=\"text-justify\">Annulation de mission : dans le cas ou la mission proposée n’entre pas dans le champ de vos compétences et/ou votre planning, merci d’en informer le Service administratif par mail.</p>
                <p class=\"text-justify\">Si le stage est annulé par le(s) stagiaire(s) partiellement ou en totalité, seul le nombre d’heures effectivement réalisées sera réglé.</p>
                <p class=\"font-italic text-justify\">NB : Le présent bon de commande n’autorise en aucune manière le formateur à user de son influence auprès des stagiaires pour les inciter à acheter des services ou des biens, de manière directe ou indirecte, sans notre accord explicite.</p>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <p><strong>Pour l'Aprentiv conseil</strong></p>
                        <img src=\"{{ asset('crm/images/formation/signature.jpg') }}\" style=\"width: 50%;\" class=\"align-left\" alt=\"signature\" />
                    </div>
                    <div class=\"col-md-4\">
                        <p>
                            <strong>Signature du formateur</strong>
                            <span>(précédée de la mention \"Bon pour accord\")</span>
                        </p>
                    </div>
                    <div class=\"col-md-4\">
                        <img src=\"{{ asset('crm/images/formation/opqf.jpg') }}\" style=\"width: 49%;\" alt=\"logo\" />
                        <img src=\"{{ asset('crm/images/formation/charte-diversite.jpg') }}\" style=\"width: 49%;\" alt=\"logo\" />
                    </div>
                </div>
                <p>La réception du présent ordre de mission signé par le formateur vaut contrat de prestation.</p>
                <div class=\"row\">
                    <img src=\"{{ asset('crm/images/formation/foot.jpg') }}\" alt=\"foot\" style=\"width: 100%;\" />
                </div>
            </div>
        </div>
    </div>
</body>
</html>


", "formation/om.word.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/om.word.html.twig");
    }
}
