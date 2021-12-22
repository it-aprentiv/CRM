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

/* facture/ajouter.html.twig */
class __TwigTemplate_40b759e25615d1355f135293eaf2f8ef9a7761773524d090043f4c1305e29f5c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/ajouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/ajouter.html.twig", 1);
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

        echo "Facture - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wickedpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Factures_Avoirs_Controller");
        echo "\">Liste Factures et Avoirs</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">AJOUT DE FACTURE ET AVOIR</h2>
    ";
        // line 28
        $this->loadTemplate("facture/form.html.twig", "facture/ajouter.html.twig", 28)->display(twig_array_merge($context, ["type" => "create"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 33
        $this->loadTemplate("Common/commentaire-js.html.twig", "facture/ajouter.html.twig", 33)->display($context);
        // line 34
        echo "    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 38
        $this->loadTemplate("facture/Parts/facture_avoirs_dossier.js.html.twig", "facture/ajouter.html.twig", 38)->display($context);
        // line 39
        echo "    <script>
        // \$(document).on('click', '.delete-comment', function () {
        // removeComment(this);
        // });

        \$(\"#facture_avoir_dateCreation\").on(\"change\", function () {
            var date = \$(this).val();
            var tab = date.split(\"/\");
            var dd = tab[1] + \"/\" + tab[0] + \"/\" + tab[2];
            var dat = new Date(dd);
            dat.setMonth(dat.getMonth() + 3);
            \$(\"#datapayementestime\").datepicker('setDate', dat);
        });

        \$(\"#facture_avoir_dateCreation\").trigger('change');

        \$('.js-datepicker-note,.js-datepicker').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });


        \$('#facture_avoir_idOpca').select2({
            placeholder: \"-- opca --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.opca.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        \$('#facture_avoir_idContact').select2({
            placeholder: \"--Sélectionnez--\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.client.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        ";
        // line 97
        echo "        ";
        // line 98
        echo "            \$('#facture_avoir_totalHt, #facture_avoir_resteARegler, #facture_avoir_pourcentageTva, #facture_avoir_idAvoirLiee_idStructure').on('blur change', function () {
                let sFactTTC = \$('#facture_avoir_totalRegle').val();
                let fFactTTC = common.convertStringToFloat(sFactTTC);

                if (parseFloat(fFactTTC) > 0) {
                    let getNumFactureQuery = \$.ajax({
                        url: '";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_generate_numero");
        echo "',
                        data: { structure : \$('#facture_avoir_idAvoirLiee_idStructure option:selected').html() }
                    });
                    
                    getNumFactureQuery.done(function(response) {
                        
                        if (response.error === false) {
                            // MAJ champ référence facture
                            \$('#facture_avoir_ref').val(response.numero);
                        }
                    });
                } else {
                    \$('#facture_avoir_ref').val('');
                }
            });
        ";
        // line 120
        echo "        
        ";
        // line 122
        echo "        ";
        // line 123
        echo "            \$('#facture_avoir_idAvoirLiee_mntTtc, #facture_avoir_idAvoirLiee_pourcentageTva, #facture_avoir_idAvoirLiee_idStructure').on('blur change', function () {
                let sAvoirTTC = \$('#facture_avoir_idAvoirLiee_totalTtc').val();
                let fAvoirTTC = common.convertStringToFloat(sAvoirTTC);
                let sFactTTC = \$('#facture_avoir_totalRegle').val();
                let fFactTTC = common.convertStringToFloat(sFactTTC);

                if (fAvoirTTC > 0 && fFactTTC > 0) {
                    let getNumAvoirQuery = \$.ajax({
                        url: '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avoir_generate_numero");
        echo "',
                        data: { structure : \$('#facture_avoir_idAvoirLiee_idStructure option:selected').html() }
                    });
                    
                    getNumAvoirQuery.done(function(response) {
                        
                        if (response.error === false) {
                            // MAJ champ référence facture
                            \$('#facture_avoir_idAvoirLiee_ref').val(response.numero);
                        }
                    });
                } else {
                    // Ne pas générer d'avoir si Total TTC = 0
                    \$('#facture_avoir_idAvoirLiee_ref').val('');
                }
            });
        ";
        // line 148
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 148,  288 => 131,  278 => 123,  276 => 122,  273 => 120,  255 => 104,  247 => 98,  245 => 97,  230 => 84,  210 => 67,  180 => 39,  178 => 38,  172 => 34,  170 => 33,  165 => 32,  155 => 31,  145 => 28,  136 => 22,  132 => 21,  128 => 19,  118 => 18,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Facture - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/wickedpicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">



{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Factures_Avoirs_Controller') }}\">Liste Factures et Avoirs</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">AJOUT DE FACTURE ET AVOIR</h2>
    {% include 'facture/form.html.twig' with {'type':'create'} %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% include 'Common/commentaire-js.html.twig' %}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    {% include 'facture/Parts/facture_avoirs_dossier.js.html.twig' %}
    <script>
        // \$(document).on('click', '.delete-comment', function () {
        // removeComment(this);
        // });

        \$(\"#facture_avoir_dateCreation\").on(\"change\", function () {
            var date = \$(this).val();
            var tab = date.split(\"/\");
            var dd = tab[1] + \"/\" + tab[0] + \"/\" + tab[2];
            var dat = new Date(dd);
            dat.setMonth(dat.getMonth() + 3);
            \$(\"#datapayementestime\").datepicker('setDate', dat);
        });

        \$(\"#facture_avoir_dateCreation\").trigger('change');

        \$('.js-datepicker-note,.js-datepicker').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });


        \$('#facture_avoir_idOpca').select2({
            placeholder: \"-- opca --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.dossier.opca.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        \$('#facture_avoir_idContact').select2({
            placeholder: \"--Sélectionnez--\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.dossier.client.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        {# Génération des numéro facture #}
        {# Si total TTC a changé et > 0 => Mettre à jour numéro facture #}
            \$('#facture_avoir_totalHt, #facture_avoir_resteARegler, #facture_avoir_pourcentageTva, #facture_avoir_idAvoirLiee_idStructure').on('blur change', function () {
                let sFactTTC = \$('#facture_avoir_totalRegle').val();
                let fFactTTC = common.convertStringToFloat(sFactTTC);

                if (parseFloat(fFactTTC) > 0) {
                    let getNumFactureQuery = \$.ajax({
                        url: '{{ path('facture_generate_numero') }}',
                        data: { structure : \$('#facture_avoir_idAvoirLiee_idStructure option:selected').html() }
                    });
                    
                    getNumFactureQuery.done(function(response) {
                        
                        if (response.error === false) {
                            // MAJ champ référence facture
                            \$('#facture_avoir_ref').val(response.numero);
                        }
                    });
                } else {
                    \$('#facture_avoir_ref').val('');
                }
            });
        {# Génération numéro facture <-- #}
        
        {#Génération numéro avoir #}
        {# Si total TTC AVOIR a changé et > 0 => Mettre à jour numéro avoir #}
            \$('#facture_avoir_idAvoirLiee_mntTtc, #facture_avoir_idAvoirLiee_pourcentageTva, #facture_avoir_idAvoirLiee_idStructure').on('blur change', function () {
                let sAvoirTTC = \$('#facture_avoir_idAvoirLiee_totalTtc').val();
                let fAvoirTTC = common.convertStringToFloat(sAvoirTTC);
                let sFactTTC = \$('#facture_avoir_totalRegle').val();
                let fFactTTC = common.convertStringToFloat(sFactTTC);

                if (fAvoirTTC > 0 && fFactTTC > 0) {
                    let getNumAvoirQuery = \$.ajax({
                        url: '{{ path('avoir_generate_numero') }}',
                        data: { structure : \$('#facture_avoir_idAvoirLiee_idStructure option:selected').html() }
                    });
                    
                    getNumAvoirQuery.done(function(response) {
                        
                        if (response.error === false) {
                            // MAJ champ référence facture
                            \$('#facture_avoir_idAvoirLiee_ref').val(response.numero);
                        }
                    });
                } else {
                    // Ne pas générer d'avoir si Total TTC = 0
                    \$('#facture_avoir_idAvoirLiee_ref').val('');
                }
            });
        {# Génération numéro facture #}
    </script>
{% endblock %}", "facture/ajouter.html.twig", "/home/jeremy/Bureau/project/app/templates/facture/ajouter.html.twig");
    }
}
