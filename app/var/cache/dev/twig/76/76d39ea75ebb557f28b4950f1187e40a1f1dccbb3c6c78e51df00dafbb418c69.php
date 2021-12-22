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

/* Common/commentaire-js.html.twig */
class __TwigTemplate_e75d2e409dbcf09f2ac62e48673a47c175f99c78c319c37698c1c91e68642c7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/commentaire-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/commentaire-js.html.twig"));

        // line 1
        echo "<!-- note -->
<script type=\"text/javascript\">

    var \$collectioncomment = \$(\"#commentaires_collection\");

    /**
     * fonction pour supprimer une ligne
     *
     * @param buttonDelete bouton pour activer suppression
     */
    function removeComment(buttonDelete) {
        var confirmDelete = window.confirm(\"Etes-vous sur de vouloir supprimer cette note ?\");

        if (confirmDelete) {
            var id = \$(buttonDelete).data('idrow');
            \$('tr#' + id).remove();
        }
    }

    function addnewcommentaire()
    {
        var newcomment = \$('#commentaire_prototype').html();
        newcomment = newcomment.replace(/__name__/g, \$collectioncomment.find(\"tr\").length + 1);
        let tr = \$(newcomment);
        tr.find('[name]').removeAttr('disabled');
        \$collectioncomment.append(tr);
        var lastTr = \$collectioncomment.find(\"tr:last-child\");
        lastTr.find(\".js-datepicker-note\").each(function () {
            \$(this).datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        lastTr.find('.delete-comment').on('click', function () {
            removeComment(this);
        });

        ";
        // line 41
        echo "        ";
        if ((isset($context["addAutocomplete"]) || array_key_exists("addAutocomplete", $context))) {
            // line 42
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["addAutocomplete"]) || array_key_exists("addAutocomplete", $context) ? $context["addAutocomplete"] : (function () { throw new RuntimeError('Variable "addAutocomplete" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "(lastTr);
        ";
        }
        // line 44
        echo "    }

    \$(document).ready(function () {
        \$('#btnajoutcom').click(function (e) {
            e.preventDefault();
            addnewcommentaire();
        });

        \$('.js-datepicker-note').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });

        \$('#commentaires_collection .delete-comment').on('click', function () {
            if (!\$(this).hasClass('disabled')) {
                removeComment(this);
            }
        });

        ";
        // line 65
        echo "        ";
        if ((isset($context["addAutocomplete"]) || array_key_exists("addAutocomplete", $context))) {
            // line 66
            echo "            \$collectioncomment.find('tr').each(function () {
                ";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["addAutocomplete"]) || array_key_exists("addAutocomplete", $context) ? $context["addAutocomplete"] : (function () { throw new RuntimeError('Variable "addAutocomplete" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "(\$(this));
            });
        ";
        }
        // line 70
        echo "    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/commentaire-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 70,  121 => 67,  118 => 66,  115 => 65,  93 => 44,  87 => 42,  84 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- note -->
<script type=\"text/javascript\">

    var \$collectioncomment = \$(\"#commentaires_collection\");

    /**
     * fonction pour supprimer une ligne
     *
     * @param buttonDelete bouton pour activer suppression
     */
    function removeComment(buttonDelete) {
        var confirmDelete = window.confirm(\"Etes-vous sur de vouloir supprimer cette note ?\");

        if (confirmDelete) {
            var id = \$(buttonDelete).data('idrow');
            \$('tr#' + id).remove();
        }
    }

    function addnewcommentaire()
    {
        var newcomment = \$('#commentaire_prototype').html();
        newcomment = newcomment.replace(/__name__/g, \$collectioncomment.find(\"tr\").length + 1);
        let tr = \$(newcomment);
        tr.find('[name]').removeAttr('disabled');
        \$collectioncomment.append(tr);
        var lastTr = \$collectioncomment.find(\"tr:last-child\");
        lastTr.find(\".js-datepicker-note\").each(function () {
            \$(this).datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        lastTr.find('.delete-comment').on('click', function () {
            removeComment(this);
        });

        {# call function to set autocompletion config #}
        {% if addAutocomplete is defined %}
        {{ addAutocomplete }}(lastTr);
        {% endif %}
    }

    \$(document).ready(function () {
        \$('#btnajoutcom').click(function (e) {
            e.preventDefault();
            addnewcommentaire();
        });

        \$('.js-datepicker-note').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });

        \$('#commentaires_collection .delete-comment').on('click', function () {
            if (!\$(this).hasClass('disabled')) {
                removeComment(this);
            }
        });

        {# set autocompletion config #}
        {% if addAutocomplete is defined %}
            \$collectioncomment.find('tr').each(function () {
                {{ addAutocomplete }}(\$(this));
            });
        {% endif %}
    });
</script>", "Common/commentaire-js.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/commentaire-js.html.twig");
    }
}
