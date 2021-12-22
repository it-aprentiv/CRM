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

/* catalogue/form.html.twig */
class __TwigTemplate_9daa0013b894589a4cd87ab5c1c4a11b8807dc71b55e077707f7eda072e0938a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'commentaires' => [$this, 'block_commentaires'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
<fieldset>
    <div class=\"row\">
        <div class=\"col-sm\">
            <div class=\"form-group text-center\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 6, $this->source); })()), "nomFormation", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Intitulé du stage"]);
        // line 8
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 9, $this->source); })()), "nomFormation", [], "any", false, false, false, 9), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm\">
            <div class=\"form-group text-center\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 14, $this->source); })()), "intraInter", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Type"]);
        // line 16
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 17, $this->source); })()), "intraInter", [], "any", false, false, false, 17), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm\">
            <div class=\"form-group text-center\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 22, $this->source); })()), "dureeJ", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Durée stage en J"]);
        // line 24
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 25, $this->source); })()), "dureeJ", [], "any", false, false, false, 25), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 29, $this->source); })()), "dureeH", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Durée stage en H"]);
        // line 31
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 32, $this->source); })()), "dureeH", [], "any", false, false, false, 32), 'widget');
        echo "
        </div>

    </div>
</fieldset>
<br>
<fieldset>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group text-center\">
                                <label class=\"font-weight-bold\">Lieu de stage</label>
                                <nav class=\"nav nav-tabs\">
                                    ";
        // line 48
        $context["address_vivienne"] = twig_constant("App\\Constants\\AddressFormation::VIVIENNE_ADDRESS");
        // line 49
        echo "                                    ";
        $context["address_societe"] = (((isset($context["address_societe"]) || array_key_exists("address_societe", $context))) ? ((isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 49, $this->source); })())) : (""));
        // line 50
        echo "                                    ";
        if (("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "                                        <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                    ";
        } elseif (("R" ==         // line 52
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 52, $this->source); })()))) {
            // line 53
            echo "                                        <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Autre</a>
                                    ";
        }
        // line 55
        echo "                                </nav>
                                <div class=\"tab-content\">
                                    ";
        // line 57
        $context["address_vivienne"] = twig_constant("App\\Constants\\AddressFormation::VIVIENNE_ADDRESS");
        // line 58
        echo "                                    ";
        if (("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 58, $this->source); })()))) {
            // line 59
            echo "                                        <div class=\"tab-pane active\" id=\"p1\">
                                            ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 60, $this->source); })()), "lieuFormation", [], "any", false, false, false, 60), 'widget', ["attr" => ["placeholder" =>             // line 61
(isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 61, $this->source); })()), "value" =>             // line 62
(isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 62, $this->source); })()), "readonly" => "readonly"]]);
            // line 66
            echo "
                                        </div>
                                    ";
        } elseif (("R" ==         // line 68
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 68, $this->source); })()))) {
            // line 69
            echo "                                        <div class=\"tab-pane active\" id=\"p1\">
                                            <div class=\"tab-pane\" id=\"p1\">
                                                ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 71, $this->source); })()), "lieuFormation", [], "any", false, false, false, 71), 'widget');
            echo "
                                            </div>
                                        </div>
                                    ";
        }
        // line 75
        echo "                                    <input type=\"hidden\" id=\"address_client\" value=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    Date de Formation
                </div>
                <div class=\"card-body\">
                    <div class=\"form-group text-center\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 90, $this->source); })()), "dateDebut", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date debut"]);
        // line 92
        echo "
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 93, $this->source); })()), "dateDebut", [], "any", false, false, false, 93), 'widget');
        echo "
                    </div>
                    <div class=\"form-group text-center\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 96, $this->source); })()), "dateFin", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date fin"]);
        // line 98
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 99, $this->source); })()), "dateFin", [], "any", false, false, false, 99), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <div class=\"card-header font-weight-bold\">Prix vente HT</div>
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 111, $this->source); })()), "tarJ", [], "any", false, false, false, 111), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par J"]);
        // line 113
        echo "
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 114, $this->source); })()), "tarJ", [], "any", false, false, false, 114), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 117, $this->source); })()), "tarHtDj", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par 1/2 J"]);
        // line 119
        echo "
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 120, $this->source); })()), "tarHtDj", [], "any", false, false, false, 120), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 123, $this->source); })()), "tarHtH", [], "any", false, false, false, 123), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par H"]);
        // line 125
        echo "
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 126, $this->source); })()), "tarHtH", [], "any", false, false, false, 126), 'widget');
        echo "
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <div class=\"card-header font-weight-bold\">Coût formateur HT</div>
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 137, $this->source); })()), "coutJ", [], "any", false, false, false, 137), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par J"]);
        // line 139
        echo "
                                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 140, $this->source); })()), "coutJ", [], "any", false, false, false, 140), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 143, $this->source); })()), "coutDemiJ", [], "any", false, false, false, 143), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par 1/2 J"]);
        // line 145
        echo "
                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 146, $this->source); })()), "coutDemiJ", [], "any", false, false, false, 146), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 149, $this->source); })()), "coutH", [], "any", false, false, false, 149), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par H"]);
        // line 151
        echo "
                                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 152, $this->source); })()), "coutH", [], "any", false, false, false, 152), 'widget');
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</fieldset>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"row\">
            ";
        // line 167
        $this->displayBlock('commentaires', $context, $blocks);
        // line 171
        echo "        </div>
    </div>
</div>
<br>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <p class=\"text-center\">
            <button class=\"btn btn-primary save-catalog\" type=\"submit\">";
        // line 178
        echo (((isset($context["catalogue"]) || array_key_exists("catalogue", $context))) ? ("MAJ Catalogue") : ("Ajouter"));
        echo "</button>
        </p>
    </div>
</div>
";
        // line 182
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 182, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 167
    public function block_commentaires($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        // line 168
        echo "                ";
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "catalogue/form.html.twig", 168)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 168, $this->source); })()), "commentaires", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "prototype", [], "any", false, false, false, 168), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 168, $this->source); })()), "commentaires", [], "any", false, false, false, 168)]));
        // line 169
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 169, $this->source); })()), "commentaires", [], "any", false, false, false, 169), "setRendered", [], "any", false, false, false, 169);
        // line 170
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 170,  339 => 169,  336 => 168,  326 => 167,  316 => 182,  309 => 178,  300 => 171,  298 => 167,  280 => 152,  277 => 151,  275 => 149,  269 => 146,  266 => 145,  264 => 143,  258 => 140,  255 => 139,  253 => 137,  239 => 126,  236 => 125,  234 => 123,  228 => 120,  225 => 119,  223 => 117,  217 => 114,  214 => 113,  212 => 111,  197 => 99,  194 => 98,  192 => 96,  186 => 93,  183 => 92,  181 => 90,  164 => 75,  157 => 71,  153 => 69,  151 => 68,  147 => 66,  145 => 62,  144 => 61,  143 => 60,  140 => 59,  137 => 58,  135 => 57,  131 => 55,  127 => 53,  125 => 52,  122 => 51,  119 => 50,  116 => 49,  114 => 48,  95 => 32,  92 => 31,  90 => 29,  83 => 25,  80 => 24,  78 => 22,  70 => 17,  67 => 16,  65 => 14,  57 => 9,  54 => 8,  52 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formation_form,{'attr':{'class':'list-filter'}}) }}
<fieldset>
    <div class=\"row\">
        <div class=\"col-sm\">
            <div class=\"form-group text-center\">
                {{ form_label(formation_form.nomFormation, 'Intitulé du stage', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(formation_form.nomFormation) }}
            </div>
        </div>
        <div class=\"col-sm\">
            <div class=\"form-group text-center\">
                {{ form_label(formation_form.intraInter, 'Type', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(formation_form.intraInter) }}
            </div>
        </div>
        <div class=\"col-sm\">
            <div class=\"form-group text-center\">
                {{ form_label(formation_form.dureeJ, 'Durée stage en J', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(formation_form.dureeJ) }}
            </div>
        </div>
        <div class=\"col-sm\">
            {{ form_label(formation_form.dureeH, 'Durée stage en H', {
                'label_attr': {'class': 'font-weight-bold'}
            }) }}
            {{ form_widget(formation_form.dureeH) }}
        </div>

    </div>
</fieldset>
<br>
<fieldset>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group text-center\">
                                <label class=\"font-weight-bold\">Lieu de stage</label>
                                <nav class=\"nav nav-tabs\">
                                    {% set address_vivienne = constant('App\\\\Constants\\\\AddressFormation::VIVIENNE_ADDRESS') %}
                                    {% set address_societe = (address_societe is defined)? address_societe : '' %}
                                    {% if 'A' == type_formation %}
                                        <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                    {% elseif 'R' == type_formation %}
                                        <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Autre</a>
                                    {% endif %}
                                </nav>
                                <div class=\"tab-content\">
                                    {% set address_vivienne = constant('App\\\\Constants\\\\AddressFormation::VIVIENNE_ADDRESS') %}
                                    {% if 'A' == type_formation %}
                                        <div class=\"tab-pane active\" id=\"p1\">
                                            {{ form_widget(formation_form.lieuFormation, { 'attr': {
                                                'placeholder': address_vivienne ,
                                                'value': address_vivienne ,
                                                'readonly': 'readonly',
                                            }
                                            })
                                            }}
                                        </div>
                                    {% elseif 'R' == type_formation %}
                                        <div class=\"tab-pane active\" id=\"p1\">
                                            <div class=\"tab-pane\" id=\"p1\">
                                                {{ form_widget(formation_form.lieuFormation) }}
                                            </div>
                                        </div>
                                    {% endif %}
                                    <input type=\"hidden\" id=\"address_client\" value=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    Date de Formation
                </div>
                <div class=\"card-body\">
                    <div class=\"form-group text-center\">
                        {{ form_label(formation_form.dateDebut, 'Date debut', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(formation_form.dateDebut) }}
                    </div>
                    <div class=\"form-group text-center\">
                        {{ form_label(formation_form.dateFin, 'Date fin', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(formation_form.dateFin) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <div class=\"card-header font-weight-bold\">Prix vente HT</div>
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                {{ form_label(formation_form.tarJ, 'Tarif par J', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(formation_form.tarJ) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(formation_form.tarHtDj, 'Tarif par 1/2 J', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(formation_form.tarHtDj) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(formation_form.tarHtH, 'Tarif par H', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(formation_form.tarHtH) }}
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\">
                        <div class=\"card-header font-weight-bold\">Coût formateur HT</div>
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                {{ form_label(formation_form.coutJ, 'Tarif par J', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(formation_form.coutJ) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(formation_form.coutDemiJ, 'Tarif par 1/2 J', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(formation_form.coutDemiJ) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(formation_form.coutH, 'Tarif par H', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(formation_form.coutH) }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</fieldset>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"row\">
            {% block commentaires %}
                {% include 'Common/commentaire-bloc.html.twig' with { prototype: formation_form.commentaires.vars.prototype, commentaires: formation_form.commentaires } %}
                {% do formation_form.commentaires.setRendered %}
            {% endblock %}
        </div>
    </div>
</div>
<br>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <p class=\"text-center\">
            <button class=\"btn btn-primary save-catalog\" type=\"submit\">{{ catalogue is defined? 'MAJ Catalogue': 'Ajouter' }}</button>
        </p>
    </div>
</div>
{{ form_end(formation_form) }}", "catalogue/form.html.twig", "/home/jeremy/Bureau/project/app/templates/catalogue/form.html.twig");
    }
}
