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

/* dossier/part/calendrier.html.twig */
class __TwigTemplate_9c349a2a1925ef3a24e43edc302580a89c91c833e94cfbbf0d595d3bb9915079 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/calendrier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/calendrier.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"formationModal\" role=\"dialog\">
    <div class=\"modal-dialog no-disabled modal-xl\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title edit-rdv text-center\">
                    Ajout dates formation
                </h5>
                <button type=\"button\" class=\"fas close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div id=\"listeSelection\">
                    <table class=\"table table-striped table-time\">
                        <thead>
                            <tr>
                                <th >Date début</th>
                                <th >Date fin</th>

                                <th class=\"text-center\"><input type=\"checkbox\" onchange=\"cocherMatin(this)\" id=\"h_matin\" name=\"h_matin\" />Matin</th>
                                <th class=\"text-center\"><input type=\"checkbox\" onchange=\"cocherAM(this)\" id=\"h_am\" name=\"h_am\" />AM</th>
                            </tr>
                        </thead>

                        <tr>
                            <td><input type=\"text\" class=\"datetimepick form-control\" name=\"debut\" id=\"debutEDT\"  readonly=\"true\" value=\"\" /></td>
                            <td><input type=\"text\" class=\"datetimepick form-control\" name=\"fin\" id=\"finEDT\"  readonly=\"true\" value=\"\" /></td>
                            <td class=\"group-input\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control mr-2\" name=\"matin\" id=\"d_heure_m\"  placeholder=\"09:30\" disabled=\"true\"/>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" name=\"am\" id=\"f_heure_m\"  placeholder=\"13:00\" disabled=\"true\" />
                                    </div>
                                </div>
                            </td>
                            <td class=\"group-input\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control mr-2\" name=\"matin\" id=\"d_heure_am\"  placeholder=\"14:00\" disabled=\"true\" ";
        // line 42
        if ((isset($context["edt"]) || array_key_exists("edt", $context))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["edt"]) || array_key_exists("edt", $context) ? $context["edt"] : (function () { throw new RuntimeError('Variable "edt" does not exist.', 42, $this->source); })()), "d_heure_am", [], "any", false, false, false, 42), "html", null, true);
            echo "\" ";
        }
        echo "/>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" name=\"am\" id=\"f_heure_am\"  placeholder=\"17:30\" disabled=\"true\" ";
        // line 45
        if ((isset($context["edt"]) || array_key_exists("edt", $context))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["edt"]) || array_key_exists("edt", $context) ? $context["edt"] : (function () { throw new RuntimeError('Variable "edt" does not exist.', 45, $this->source); })()), "f_heure_am", [], "any", false, false, false, 45), "html", null, true);
            echo "\" ";
        }
        echo "/>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <table class=\"table table-striped table-days\">
                        <thead>
                            <tr>
                                <th ><span>Lundi  </span></th>
                                <th ><span>Mardi  </span></th>
                                <th ><span>Mercredi  </span></th>
                                <th ><span>Jeudi  </span></th>
                                <th ><span>Vendredi  </span></th>
                                <th ><span>Samedi  </span></th>
                                <th ><span>Dimanche  </span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type=\"checkbox\" id=\"jour1\" name=\"jours\" class=\"jours\" value=\"1\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour2\" name=\"jours\" class=\"jours\" value=\"2\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour3\" name=\"jours\" class=\"jours\" value=\"3\" />&nbsp;&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour4\" name=\"jours\" class=\"jours\" value=\"4\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour5\" name=\"jours\" class=\"jours\" value=\"5\" />&nbsp;&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour6\" name=\"jours\" class=\"jours\" value=\"6\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour7\" name=\"jours\" class=\"jours\" value=\"0\" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div align=\"center\" style=\"width:90%;height:25px;margin:15px;\">
                        <input type=\"hidden\" name=\"duree_jours\" name=\"duree_jours\"/>
                        <button type=\"button\" id=\"calculerEDT\" class=\"btn btn-primary\">Calculer</button>
                    </div>

                </div>
            </div>


            ";
        // line 86
        echo "            <div align=\"center\" id=\"divEmploiDuTemps\">
                <div class=\"table-wrapper-scroll-y my-custom-scrollbar\" >
                    <table class=\"table table-striped table-calcul\"   >
                        <thead>
                            <tr>
                                <th class=\"text-center\">Date</th>
                                <th class=\"text-center\">Début</th>
                                <th class=\"text-center\">Fin</th>
                                <th class=\"text-center\">Durée</th>
                            </tr>
                        <thead>
                        <tbody id=\"tableEDT\"></tbody>
                    </table>
                </div>
                <div align=\"center\">
                    <table class=\"table table-striped \">
                        <tr>
                            <th>Nombre d'heures</th>
                            <th id=\"nbH\"></th>
                        </tr>
                    </table>
                </div>
            </div>

            <div class=\"modal-footer\">
                <div align=\"center\">
                    <button type=\"button\" id=\"ajouterEDT\" class=\"btn btn-primary\" onclick=\"ajouterDateFormation()\" >Ajouter</button>
                    <button class=\"popup-date-formation btn btn-secondary\" type=\"button\"  data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut_edt = document.getElementById(\"debutEDT\")
let current_set_date_edt = date_debut_edt.value;
let date_debut = document.getElementById(\"dossier_dateDebutPeriode\")
let current_set_date = date_debut.value;
setInterval(()=>{
    if(current_set_date_edt === date_debut_edt.value){

    }else{
        current_set_date_edt = date_debut_edt.value;
        \$('#finEDT').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date_edt)).datepicker('fill'); // setDate()
    }
      if(current_set_date === date_debut.value){

    }else{
        current_set_date = date_debut.value;
        \$('#dossier_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/part/calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 86,  96 => 45,  86 => 42,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"formationModal\" role=\"dialog\">
    <div class=\"modal-dialog no-disabled modal-xl\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title edit-rdv text-center\">
                    Ajout dates formation
                </h5>
                <button type=\"button\" class=\"fas close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div id=\"listeSelection\">
                    <table class=\"table table-striped table-time\">
                        <thead>
                            <tr>
                                <th >Date début</th>
                                <th >Date fin</th>

                                <th class=\"text-center\"><input type=\"checkbox\" onchange=\"cocherMatin(this)\" id=\"h_matin\" name=\"h_matin\" />Matin</th>
                                <th class=\"text-center\"><input type=\"checkbox\" onchange=\"cocherAM(this)\" id=\"h_am\" name=\"h_am\" />AM</th>
                            </tr>
                        </thead>

                        <tr>
                            <td><input type=\"text\" class=\"datetimepick form-control\" name=\"debut\" id=\"debutEDT\"  readonly=\"true\" value=\"\" /></td>
                            <td><input type=\"text\" class=\"datetimepick form-control\" name=\"fin\" id=\"finEDT\"  readonly=\"true\" value=\"\" /></td>
                            <td class=\"group-input\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control mr-2\" name=\"matin\" id=\"d_heure_m\"  placeholder=\"09:30\" disabled=\"true\"/>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" name=\"am\" id=\"f_heure_m\"  placeholder=\"13:00\" disabled=\"true\" />
                                    </div>
                                </div>
                            </td>
                            <td class=\"group-input\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control mr-2\" name=\"matin\" id=\"d_heure_am\"  placeholder=\"14:00\" disabled=\"true\" {% if edt is defined  %}value=\"{{ edt.d_heure_am }}\" {% endif %}/>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" name=\"am\" id=\"f_heure_am\"  placeholder=\"17:30\" disabled=\"true\" {% if edt is defined  %}value=\"{{ edt.f_heure_am }}\" {% endif %}/>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <table class=\"table table-striped table-days\">
                        <thead>
                            <tr>
                                <th ><span>Lundi  </span></th>
                                <th ><span>Mardi  </span></th>
                                <th ><span>Mercredi  </span></th>
                                <th ><span>Jeudi  </span></th>
                                <th ><span>Vendredi  </span></th>
                                <th ><span>Samedi  </span></th>
                                <th ><span>Dimanche  </span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type=\"checkbox\" id=\"jour1\" name=\"jours\" class=\"jours\" value=\"1\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour2\" name=\"jours\" class=\"jours\" value=\"2\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour3\" name=\"jours\" class=\"jours\" value=\"3\" />&nbsp;&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour4\" name=\"jours\" class=\"jours\" value=\"4\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour5\" name=\"jours\" class=\"jours\" value=\"5\" />&nbsp;&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour6\" name=\"jours\" class=\"jours\" value=\"6\" />&nbsp;</td>
                                <td><input type=\"checkbox\" id=\"jour7\" name=\"jours\" class=\"jours\" value=\"0\" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div align=\"center\" style=\"width:90%;height:25px;margin:15px;\">
                        <input type=\"hidden\" name=\"duree_jours\" name=\"duree_jours\"/>
                        <button type=\"button\" id=\"calculerEDT\" class=\"btn btn-primary\">Calculer</button>
                    </div>

                </div>
            </div>


            {#  Résumé dates et heures formation #}
            <div align=\"center\" id=\"divEmploiDuTemps\">
                <div class=\"table-wrapper-scroll-y my-custom-scrollbar\" >
                    <table class=\"table table-striped table-calcul\"   >
                        <thead>
                            <tr>
                                <th class=\"text-center\">Date</th>
                                <th class=\"text-center\">Début</th>
                                <th class=\"text-center\">Fin</th>
                                <th class=\"text-center\">Durée</th>
                            </tr>
                        <thead>
                        <tbody id=\"tableEDT\"></tbody>
                    </table>
                </div>
                <div align=\"center\">
                    <table class=\"table table-striped \">
                        <tr>
                            <th>Nombre d'heures</th>
                            <th id=\"nbH\"></th>
                        </tr>
                    </table>
                </div>
            </div>

            <div class=\"modal-footer\">
                <div align=\"center\">
                    <button type=\"button\" id=\"ajouterEDT\" class=\"btn btn-primary\" onclick=\"ajouterDateFormation()\" >Ajouter</button>
                    <button class=\"popup-date-formation btn btn-secondary\" type=\"button\"  data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut_edt = document.getElementById(\"debutEDT\")
let current_set_date_edt = date_debut_edt.value;
let date_debut = document.getElementById(\"dossier_dateDebutPeriode\")
let current_set_date = date_debut.value;
setInterval(()=>{
    if(current_set_date_edt === date_debut_edt.value){

    }else{
        current_set_date_edt = date_debut_edt.value;
        \$('#finEDT').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date_edt)).datepicker('fill'); // setDate()
    }
      if(current_set_date === date_debut.value){

    }else{
        current_set_date = date_debut.value;
        \$('#dossier_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
</script>", "dossier/part/calendrier.html.twig", "/var/www/templates/dossier/part/calendrier.html.twig");
    }
}
