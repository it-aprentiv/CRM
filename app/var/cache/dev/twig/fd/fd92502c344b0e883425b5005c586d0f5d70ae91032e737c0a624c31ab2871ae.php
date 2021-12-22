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

/* Common/collection-function-js.html.twig */
class __TwigTemplate_6a44672f7fb1418400d1a45418913e40c3e3b06bdf426e9d176588ecedbfc396 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/collection-function-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/collection-function-js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    /**
     * get current reference for reference in collection of div
     *
     * @param collectionDiv
     * @param referenceDefault
     * @param numberLength
     * @returns {string}
     */
    function getNumberReference(collectionDiv, referenceDefault, numberLength) {
        var numReferences = [];
        var refLength = referenceDefault.length;
        var prefixLength = refLength - numberLength;
        var prefix = referenceDefault.substring(0, prefixLength);
        // for each input with reference value
        collectionDiv.find('.reference-in-collection').each(function () {
            var ref = \$(this).val();
            var refString = String(ref);
            console.log('id ' + \$(this).attr('id'), ref);
            // check if ref is not null or undefined, and if is a correct reference
            var isReference = ref && (refString.length === refLength) && (refString.search(prefix) === 0);
            if (isReference) {
                // get last 4 characters for reference
                var numberRef = parseInt(refString.substring(prefixLength - 1));
                numReferences.push(numberRef);
            }
        });
        var defaultNumberRef = parseInt(referenceDefault.substring(prefixLength - 1));
        var numberRef = numReferences.length == 0 ? 0 : numReferences.reduce(function(a,b) {
            return Math.max(a, b);
        });
        
        numberRef += 1;
        numberRef = numberRef > defaultNumberRef ? numberRef : defaultNumberRef;

        return prefix + String(numberRef).padStart(numberLength, '0');
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/collection-function-js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    /**
     * get current reference for reference in collection of div
     *
     * @param collectionDiv
     * @param referenceDefault
     * @param numberLength
     * @returns {string}
     */
    function getNumberReference(collectionDiv, referenceDefault, numberLength) {
        var numReferences = [];
        var refLength = referenceDefault.length;
        var prefixLength = refLength - numberLength;
        var prefix = referenceDefault.substring(0, prefixLength);
        // for each input with reference value
        collectionDiv.find('.reference-in-collection').each(function () {
            var ref = \$(this).val();
            var refString = String(ref);
            console.log('id ' + \$(this).attr('id'), ref);
            // check if ref is not null or undefined, and if is a correct reference
            var isReference = ref && (refString.length === refLength) && (refString.search(prefix) === 0);
            if (isReference) {
                // get last 4 characters for reference
                var numberRef = parseInt(refString.substring(prefixLength - 1));
                numReferences.push(numberRef);
            }
        });
        var defaultNumberRef = parseInt(referenceDefault.substring(prefixLength - 1));
        var numberRef = numReferences.length == 0 ? 0 : numReferences.reduce(function(a,b) {
            return Math.max(a, b);
        });
        
        numberRef += 1;
        numberRef = numberRef > defaultNumberRef ? numberRef : defaultNumberRef;

        return prefix + String(numberRef).padStart(numberLength, '0');
    }
</script>", "Common/collection-function-js.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/collection-function-js.html.twig");
    }
}
