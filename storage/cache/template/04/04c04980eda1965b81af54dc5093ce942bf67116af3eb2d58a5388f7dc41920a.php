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

/* default/template/extension/payment/ccavenuepay.twig */
class __TwigTemplate_21aa2f02041deb830348af6ec5a15792c381c609ce0ed8d71af8a2e88611d85e extends \Twig\Template
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
        // line 1
        echo ($context["form_response"] ?? null);
        echo "

<div class=\"buttons\">
<div class=\"pull-right\">
<a id=\"button-confirm\" class=\"button btn btn-primary\" onclick=\"\$('#ccavenuepay_standard_checkout').submit();\">
<span>";
        // line 6
        echo ($context["button_confirm"] ?? null);
        echo "</span>
</a>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/ccavenuepay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/ccavenuepay.twig", "");
    }
}
