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

/* encaissement/new.html.twig */
class __TwigTemplate_5f9d41c5a4a3e4bbfcefae3aebb0e22a1782a8750b20464b1642c0c30b5cc5e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/new.html.twig"));

        // line 5
        $context["textButton"] = "Enregistrer";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "encaissement/new.html.twig", 1);
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

        echo "Encaissements Edit - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Encaissement_Controller");
        echo "\" title=\"Liste des encaissements\">Liste des encaissements</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Encaissement</li>
            </ol>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">ENCAISSEMENT FACTURE ";
        // line 26
        echo ((((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 26, $this->source); })()) == "dossier")) ? ("DOSSIER") : ("DOMICILIATION/LOCATION"));
        echo "</h2>

    ";
        // line 28
        $this->loadTemplate("encaissement/form_encaissement.html.twig", "encaissement/new.html.twig", 28)->display(twig_array_merge($context, ["type" => "create", "source" => (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 28, $this->source); })())]));
        // line 29
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    ";
        // line 39
        $this->loadTemplate("Common/commentaire-js.html.twig", "encaissement/new.html.twig", 39)->display($context);
        // line 40
        echo "
    <script>
        \$(function () {
        ";
        // line 44
        echo "                    \$(\".js-datepicker\").each(function () {
                        \$(this).datepicker({
                            'format': 'dd/mm/yyyy',
                            'autoclose': true,
                            'clearBtn': true,
                            'language': 'fr',
                        });
                    });

                    \$(document).on('change', '#encaissement_payeur', function (params) {
                        let valuePay = \$(this).val();
                        // Ne pas effacer les valeurs au chargement de la page
                        let isTrigger = params.isTrigger;

                        if (valuePay == '0') {
                            setElementReeadOnly('.cli_choice', true, isTrigger);
                            setElementReeadOnly('.opca_choice', false, isTrigger);
                        } else if (valuePay == '1') {
                            setElementReeadOnly('.cli_choice', false, isTrigger);
                            setElementReeadOnly('.opca_choice', true, isTrigger);
                        } else {
                            setElementReeadOnly('.cli_choice', false, isTrigger);
                            setElementReeadOnly('.opca_choice', false, isTrigger);
                        }
                    });

                    ";
        // line 73
        echo "
                    \$('#encaissement_taux_commission').trigger('change');

                    \$(document).on('change', '#encaissement_taux_commission', function () {
                        let taux = parseInt(\$(this).val());
                        let mntEnc = treatChrTonumber(\$('#encaissement_montantHTEncaisse').val());
                        let montantComms = mntEnc * taux / 100;
                        //
                        \$('#encaissement_montant_commission').val(new Intl.NumberFormat().format(montantComms));
                    });

                    \$('#encaissement_payeur').trigger('change', [\"first\"]);

        ";
        // line 87
        echo "                    \$('#encaissement_societes').select2({
                        placeholder: \"--Sélectionnez--\",
                        minimumInputLength: 3,
                        allowClear: true,
                        ajax: {
                            url: '";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.client.asynch-search");
        echo "',
                            data: function (params) {
                                var query = {
                                    search: params.term,
                                    byid: true
                                };
                                // Query parameters will be ?search=[term]&type=public
                                return query;
                            },
                            processResults: function (data) {
                                var dataResults = data.results !== undefined ? data.results : [];
                                return {
                                    results: \$.map(dataResults, function (item) {
                                        return {
                                            text: item.text,
                                            id: item.id
                                        };
                                    })
                                };
                            }
                        }
                    });

                    let societeData = {};
        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["societes_liees"]) || array_key_exists("societes_liees", $context) ? $context["societes_liees"] : (function () { throw new RuntimeError('Variable "societes_liees" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 117
            echo "                    societeData = {
                        id: \"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "idSociete", [], "any", false, false, false, 118), "html", null, true);
            echo "\",
                        text: '";
            // line 119
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "societe", [], "any", false, false, false, 119), "js"), "html", null, true);
            echo "'
                    };

                    var newOption = new Option(societeData.text, societeData.id, true, true);
                    \$('#encaissement_societes').append(newOption).trigger('change');
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        ";
        // line 126
        echo "
                    \$('#encaissement_opca').select2({
                        placeholder: \"--Sélectionnez--\",
                        minimumInputLength: 3,
                        allowClear: true,
                        ajax: {
                            url: '";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.list-asynch");
        echo "',
                            data: function (params) {
                                var query = {
                                    search: params.term
                                };
                                // Query parameters will be ?search=[term]&type=public
                                return query;
                            }
                        }
                    });
        ";
        // line 142
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["encaissement_infos"]) || array_key_exists("encaissement_infos", $context) ? $context["encaissement_infos"] : (function () { throw new RuntimeError('Variable "encaissement_infos" does not exist.', 142, $this->source); })()), "opca_id", [], "any", false, false, false, 142))) {
            // line 143
            echo "                    let opcaData = {
                        id: \"";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["encaissement_infos"]) || array_key_exists("encaissement_infos", $context) ? $context["encaissement_infos"] : (function () { throw new RuntimeError('Variable "encaissement_infos" does not exist.', 144, $this->source); })()), "opca_id", [], "any", false, false, false, 144), "html", null, true);
            echo "\",
                        text: '";
            // line 145
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["encaissement_infos"]) || array_key_exists("encaissement_infos", $context) ? $context["encaissement_infos"] : (function () { throw new RuntimeError('Variable "encaissement_infos" does not exist.', 145, $this->source); })()), "opca_nom_str", [], "any", false, false, false, 145), "js"), "html", null, true);
            echo "'
                    };

                    var newOption = new Option(opcaData.text, opcaData.id, true, true);
                    \$('#encaissement_opca').append(newOption).trigger('change');
        ";
        }
        // line 151
        echo "
                    \$('#autocomplete-facture').select2({
                        placeholder: \"-- Sélectionnez une référence facture --\",
                        minimumInputLength: 2,
                        allowClear: true,
                        ajax: {
                            url: '";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.facture.asynch-search");
        echo "',
                            data: function (params) {
                                var query = {
                                    search: params.term
                                };
                                // Query parameters will be ?search=[term]&type=public
                                return query;
                            }
                        }
                    });


        ";
        // line 170
        echo "                    \$('#add-facture-avoir').on('click', function (e) {
                        e.preventDefault();
                        const facId = \$('#autocomplete-facture').val();

                        if (facId) {
                            // Récupérer le form
                            let factureAvoirInfosRequest = \$.ajax({
                                url: '";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.encaissement.factures-avoirs-infos");
        echo "',
                                method: 'POST',
                                data: {fid: facId}
                            });

                            factureAvoirInfosRequest.done(function (response) {
                                \$(response).appendTo(\$('#factures-wrapper'));

                                let factiInforequest = \$.ajax({
                                    url: '";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.encaissement.factures-avoirs-infosdetail");
        echo "',
                                    method: 'POST',
                                    data: {fid: facId}
                                });

                                factiInforequest.done(function (response) {
                                    const factInfo = response;
                                    const encHtField = \$('#encaissement_montantHTEncaisse');
                                    const encTtcField = \$('#encaissement_montantTTCEncaisse');
                                    let newEncHTval = common.parseFloatValue(treatChrTonumber(encHtField.val())) + common.parseFloatValue(factInfo.totalRegleHt);
                                    let newEncTTCval = common.parseFloatValue(treatChrTonumber(encTtcField.val())) + common.parseFloatValue(factInfo.mntTtc);


                                    encHtField.val(common.formatMoney(newEncHTval));
                                    encTtcField.val(common.formatMoney(newEncTTCval));
                                    encHtField.trigger('change');
                                    calculaterestedu();
                                });
                            });
                            // Ajouter le form facture/avoir
                        }
                    });
        ";
        // line 209
        echo "
                    \$(document).on('click', '.remove-facture-liee', function () {
                        let \$factureItem = \$(this).closest('fieldset');
                        let facId = \$factureItem.find('.id_fact').val();
                        \$factureItem.remove();

                        let factiInforequest = \$.ajax({
                            url: '";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.encaissement.factures-avoirs-infosdetail");
        echo "',
                            method: 'POST',
                            data: {fid: facId}
                        });

                        factiInforequest.done(function (response) {
                            const factInfo = response;
                            const encHtField = \$('#encaissement_montantHTEncaisse');
                            const encTtcField = \$('#encaissement_montantTTCEncaisse');
                            let newEncHTval = common.parseFloatValue(treatChrTonumber(encHtField.val())) - common.parseFloatValue(factInfo.totalRegleHt);
                            let newEncTTCval = common.parseFloatValue(treatChrTonumber(encTtcField.val())) - common.parseFloatValue(factInfo.mntTtc);

                            encHtField.val(common.formatMoney(newEncHTval));
                            encTtcField.val(common.formatMoney(newEncTTCval));

                            encHtField.trigger('change');
                            calculaterestedu();
                        });
                    });

                    \$(\"#encaissement_montantTTCEncaisse\").on('keyup', function () {
                        calculaterestedu();
                    });

                });
                \$(document).ready(function () {
                    calculaterestedu();
                });

                function calculaterestedu() {

                    var mntttcTotal = 0;
                    \$(\".montantttcfacture\").each(function () {
                        var mntttc = common.parseMoney(\$(this).val());
                        if (mntttc == '') {
                            mntttc = '0.00';
                        }
                        mntttcTotal += parseFloat(mntttc);
                    });
                    var mntttcpaye = common.parseMoney(\$(\"#encaissement_montantTTCEncaisse\").val());
                    if (mntttcpaye == '') {
                        mntttcpaye = '0.00';
                    }
                    
                    // APR-154 : Calcul montant
                    var montantTTCAvoir = common.parseMoney(\$('#montant-ttc-avoir').val());
                    
                    var diff = mntttcTotal - parseFloat(mntttcpaye) - montantTTCAvoir;
                    \$(\"#encaissement_restedu\").val(diff).blur();
                }

                function treatChrTonumber(charNumber) {
                    charNumber = charNumber.replace(/\\s/g, '').replace(',', '.');
                    return charNumber;
                }

                function setElementReeadOnly(eltClassName, value, isOnload) {
                    \$(eltClassName).each(function (index) {
                        if (!isOnload) {
                            // Préserver les valeurs au chargement de la page
                            \$(this).val('');
                            \$(this).find('.form-check-input').prop('checked', false);
                        }
                        \$(this).prop('readonly', value);
                        \$(this).find('.form-check-input').prop('disabled', value);
                    });
                }
    </script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.date-until-now').datepicker(
                    {
                        'format': 'dd/mm/yyyy',
                        'autoclose': true,
                        endDate: new Date(),
                        'language': 'fr',
                    }
            );
    
            // Si type règlement = chèque : rendre obligatoire 
            \$('#encaissement_typereglclient').on('change', function() {
                var typeReglement = \$(this).val();
                
                if (typeReglement === 'cheque') {
                   \$('#encaissement_chequeattencaiss').prev('legend').addClass('required');
                   \$('#encaissement_chequeattencaiss input').attr('required', 'required');
                   \$('#encaissement_chequeattencaiss label').attr('required', 'required');
                   
                   \$('#encaissement_datecheque').prev('label').addClass('required');
                   \$('#encaissement_datecheque').attr('required', 'required');
                   
                   \$('#encaissement_dtvalidite').prev('label').addClass('required');
                   \$('#encaissement_dtvalidite').attr('required', 'required');
               } else {
                   \$('#encaissement_chequeattencaiss').prev('legend').removeClass('required');
                   \$('#encaissement_chequeattencaiss input').removeAttr('required');
                   \$('#encaissement_chequeattencaiss label').removeClass('required');
                   
                   \$('#encaissement_datecheque').prev('label').removeClass('required');
                   \$('#encaissement_datecheque').removeAttr('required');
                   
                   \$('#encaissement_dtvalidite').prev('label').removeClass('required');
                   \$('#encaissement_dtvalidite').removeAttr('required');
               }
                
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "encaissement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 216,  393 => 209,  368 => 186,  356 => 177,  347 => 170,  332 => 157,  324 => 151,  315 => 145,  311 => 144,  308 => 143,  306 => 142,  293 => 132,  285 => 126,  283 => 125,  271 => 119,  267 => 118,  264 => 117,  260 => 116,  233 => 92,  226 => 87,  211 => 73,  183 => 44,  178 => 40,  176 => 39,  166 => 33,  156 => 32,  145 => 29,  143 => 28,  138 => 26,  128 => 19,  123 => 17,  118 => 14,  108 => 13,  93 => 8,  83 => 7,  64 => 3,  53 => 1,  51 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Encaissements Edit - CRM Aprentiv v2.0{% endblock %}

{% set textButton = 'Enregistrer' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <a href=\"{{ path('Liste_Encaissement_Controller') }}\" title=\"Liste des encaissements\">Liste des encaissements</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Encaissement</li>
            </ol>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">ENCAISSEMENT FACTURE {{ source == 'dossier' ? 'DOSSIER' : 'DOMICILIATION/LOCATION'}}</h2>

    {% include 'encaissement/form_encaissement.html.twig' with {'type':'create', source : source} %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    {% include 'Common/commentaire-js.html.twig' %}

    <script>
        \$(function () {
        {# Utilisation date picker pour les filtres de type date #}
                    \$(\".js-datepicker\").each(function () {
                        \$(this).datepicker({
                            'format': 'dd/mm/yyyy',
                            'autoclose': true,
                            'clearBtn': true,
                            'language': 'fr',
                        });
                    });

                    \$(document).on('change', '#encaissement_payeur', function (params) {
                        let valuePay = \$(this).val();
                        // Ne pas effacer les valeurs au chargement de la page
                        let isTrigger = params.isTrigger;

                        if (valuePay == '0') {
                            setElementReeadOnly('.cli_choice', true, isTrigger);
                            setElementReeadOnly('.opca_choice', false, isTrigger);
                        } else if (valuePay == '1') {
                            setElementReeadOnly('.cli_choice', false, isTrigger);
                            setElementReeadOnly('.opca_choice', true, isTrigger);
                        } else {
                            setElementReeadOnly('.cli_choice', false, isTrigger);
                            setElementReeadOnly('.opca_choice', false, isTrigger);
                        }
                    });

                    {#\$(document).on('change', '#encaissement_montantHTEncaisse', function () {
                        \$('#encaissement_taux_commission').trigger('change');
                    });#}

                    \$('#encaissement_taux_commission').trigger('change');

                    \$(document).on('change', '#encaissement_taux_commission', function () {
                        let taux = parseInt(\$(this).val());
                        let mntEnc = treatChrTonumber(\$('#encaissement_montantHTEncaisse').val());
                        let montantComms = mntEnc * taux / 100;
                        //
                        \$('#encaissement_montant_commission').val(new Intl.NumberFormat().format(montantComms));
                    });

                    \$('#encaissement_payeur').trigger('change', [\"first\"]);

        {# Autocompletion recherche societe -->> #}
                    \$('#encaissement_societes').select2({
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
                            },
                            processResults: function (data) {
                                var dataResults = data.results !== undefined ? data.results : [];
                                return {
                                    results: \$.map(dataResults, function (item) {
                                        return {
                                            text: item.text,
                                            id: item.id
                                        };
                                    })
                                };
                            }
                        }
                    });

                    let societeData = {};
        {% for societe in societes_liees %}
                    societeData = {
                        id: \"{{ societe.idSociete }}\",
                        text: '{{ societe.societe|e('js') }}'
                    };

                    var newOption = new Option(societeData.text, societeData.id, true, true);
                    \$('#encaissement_societes').append(newOption).trigger('change');
        {% endfor %}
        {# Autocompletion recherche commercical <<-- #}

                    \$('#encaissement_opca').select2({
                        placeholder: \"--Sélectionnez--\",
                        minimumInputLength: 3,
                        allowClear: true,
                        ajax: {
                            url: '{{ path('crm.opca.list-asynch') }}',
                            data: function (params) {
                                var query = {
                                    search: params.term
                                };
                                // Query parameters will be ?search=[term]&type=public
                                return query;
                            }
                        }
                    });
        {% if encaissement_infos.opca_id is not null %}
                    let opcaData = {
                        id: \"{{ encaissement_infos.opca_id }}\",
                        text: '{{ encaissement_infos.opca_nom_str|e('js') }}'
                    };

                    var newOption = new Option(opcaData.text, opcaData.id, true, true);
                    \$('#encaissement_opca').append(newOption).trigger('change');
        {% endif %}

                    \$('#autocomplete-facture').select2({
                        placeholder: \"-- Sélectionnez une référence facture --\",
                        minimumInputLength: 2,
                        allowClear: true,
                        ajax: {
                            url: '{{ path('crm.facture.asynch-search') }}',
                            data: function (params) {
                                var query = {
                                    search: params.term
                                };
                                // Query parameters will be ?search=[term]&type=public
                                return query;
                            }
                        }
                    });


        {#  Ajout de nouvelle facture --> #}
                    \$('#add-facture-avoir').on('click', function (e) {
                        e.preventDefault();
                        const facId = \$('#autocomplete-facture').val();

                        if (facId) {
                            // Récupérer le form
                            let factureAvoirInfosRequest = \$.ajax({
                                url: '{{ path('crm.encaissement.factures-avoirs-infos') }}',
                                method: 'POST',
                                data: {fid: facId}
                            });

                            factureAvoirInfosRequest.done(function (response) {
                                \$(response).appendTo(\$('#factures-wrapper'));

                                let factiInforequest = \$.ajax({
                                    url: '{{ path('crm.encaissement.factures-avoirs-infosdetail') }}',
                                    method: 'POST',
                                    data: {fid: facId}
                                });

                                factiInforequest.done(function (response) {
                                    const factInfo = response;
                                    const encHtField = \$('#encaissement_montantHTEncaisse');
                                    const encTtcField = \$('#encaissement_montantTTCEncaisse');
                                    let newEncHTval = common.parseFloatValue(treatChrTonumber(encHtField.val())) + common.parseFloatValue(factInfo.totalRegleHt);
                                    let newEncTTCval = common.parseFloatValue(treatChrTonumber(encTtcField.val())) + common.parseFloatValue(factInfo.mntTtc);


                                    encHtField.val(common.formatMoney(newEncHTval));
                                    encTtcField.val(common.formatMoney(newEncTTCval));
                                    encHtField.trigger('change');
                                    calculaterestedu();
                                });
                            });
                            // Ajouter le form facture/avoir
                        }
                    });
        {#  Ajout de nouvelle facture <-- #}

                    \$(document).on('click', '.remove-facture-liee', function () {
                        let \$factureItem = \$(this).closest('fieldset');
                        let facId = \$factureItem.find('.id_fact').val();
                        \$factureItem.remove();

                        let factiInforequest = \$.ajax({
                            url: '{{ path('crm.encaissement.factures-avoirs-infosdetail') }}',
                            method: 'POST',
                            data: {fid: facId}
                        });

                        factiInforequest.done(function (response) {
                            const factInfo = response;
                            const encHtField = \$('#encaissement_montantHTEncaisse');
                            const encTtcField = \$('#encaissement_montantTTCEncaisse');
                            let newEncHTval = common.parseFloatValue(treatChrTonumber(encHtField.val())) - common.parseFloatValue(factInfo.totalRegleHt);
                            let newEncTTCval = common.parseFloatValue(treatChrTonumber(encTtcField.val())) - common.parseFloatValue(factInfo.mntTtc);

                            encHtField.val(common.formatMoney(newEncHTval));
                            encTtcField.val(common.formatMoney(newEncTTCval));

                            encHtField.trigger('change');
                            calculaterestedu();
                        });
                    });

                    \$(\"#encaissement_montantTTCEncaisse\").on('keyup', function () {
                        calculaterestedu();
                    });

                });
                \$(document).ready(function () {
                    calculaterestedu();
                });

                function calculaterestedu() {

                    var mntttcTotal = 0;
                    \$(\".montantttcfacture\").each(function () {
                        var mntttc = common.parseMoney(\$(this).val());
                        if (mntttc == '') {
                            mntttc = '0.00';
                        }
                        mntttcTotal += parseFloat(mntttc);
                    });
                    var mntttcpaye = common.parseMoney(\$(\"#encaissement_montantTTCEncaisse\").val());
                    if (mntttcpaye == '') {
                        mntttcpaye = '0.00';
                    }
                    
                    // APR-154 : Calcul montant
                    var montantTTCAvoir = common.parseMoney(\$('#montant-ttc-avoir').val());
                    
                    var diff = mntttcTotal - parseFloat(mntttcpaye) - montantTTCAvoir;
                    \$(\"#encaissement_restedu\").val(diff).blur();
                }

                function treatChrTonumber(charNumber) {
                    charNumber = charNumber.replace(/\\s/g, '').replace(',', '.');
                    return charNumber;
                }

                function setElementReeadOnly(eltClassName, value, isOnload) {
                    \$(eltClassName).each(function (index) {
                        if (!isOnload) {
                            // Préserver les valeurs au chargement de la page
                            \$(this).val('');
                            \$(this).find('.form-check-input').prop('checked', false);
                        }
                        \$(this).prop('readonly', value);
                        \$(this).find('.form-check-input').prop('disabled', value);
                    });
                }
    </script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.date-until-now').datepicker(
                    {
                        'format': 'dd/mm/yyyy',
                        'autoclose': true,
                        endDate: new Date(),
                        'language': 'fr',
                    }
            );
    
            // Si type règlement = chèque : rendre obligatoire 
            \$('#encaissement_typereglclient').on('change', function() {
                var typeReglement = \$(this).val();
                
                if (typeReglement === 'cheque') {
                   \$('#encaissement_chequeattencaiss').prev('legend').addClass('required');
                   \$('#encaissement_chequeattencaiss input').attr('required', 'required');
                   \$('#encaissement_chequeattencaiss label').attr('required', 'required');
                   
                   \$('#encaissement_datecheque').prev('label').addClass('required');
                   \$('#encaissement_datecheque').attr('required', 'required');
                   
                   \$('#encaissement_dtvalidite').prev('label').addClass('required');
                   \$('#encaissement_dtvalidite').attr('required', 'required');
               } else {
                   \$('#encaissement_chequeattencaiss').prev('legend').removeClass('required');
                   \$('#encaissement_chequeattencaiss input').removeAttr('required');
                   \$('#encaissement_chequeattencaiss label').removeClass('required');
                   
                   \$('#encaissement_datecheque').prev('label').removeClass('required');
                   \$('#encaissement_datecheque').removeAttr('required');
                   
                   \$('#encaissement_dtvalidite').prev('label').removeClass('required');
                   \$('#encaissement_dtvalidite').removeAttr('required');
               }
                
            });
        });
    </script>
{% endblock %}", "encaissement/new.html.twig", "/var/www/templates/encaissement/new.html.twig");
    }
}
