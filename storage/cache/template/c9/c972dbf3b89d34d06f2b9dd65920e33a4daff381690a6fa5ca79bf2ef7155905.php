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

/* default/template/common/about.twig */
class __TwigTemplate_23cb38a08bb0c3ce8bc3b916f33895634174f2c29fcbdb309f36fecd32f95aa3 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "



";
        // line 10
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12 mb-5\" >
\t\t\t<br/><br/>
\t\t\t<h2>About Banjara Home

\t\t\t
\t\t\t</h2>
<div class=\"row mt-4\">
<div class=\"col-md-6 d-flex\"
style=\"align-items: center;\">
<p class=\"laptop\"style=\"font-size:16px;line-height:2;\">Hello and welcome to Banjara Home! My name is Sanjay Rathi, and I am proud to continue my family's tradition of entrepreneurship with our home Furnishings business.<br>
\t\t\t\t<br>

\t\t\t\tSince 1985, our family has been serving customers from the streets of rural Rajasthan, providing them with high-quality products and exceptional service. Over the years, we have expanded our reach domestically and have grown our business to new heights.<br><br>

\t\t\t\tMy personal experience in the export industry has also helped to shape our business, allowing us to explore new markets and reach customers around the world. With this knowledge, I started Banjara Home in 2013, with a focus on providing unique and beautiful home goods to customers around the globe.<br><br>
\t\t\t\tAt Banjara Home, we are committed to preserving traditional techniques and supporting local artisans, while also embracing innovation and exploring new design ideas. We are passionate about what we do, and we take pride in every product we offer. We export to over 15 countries to some of the most prominent retail store chains as well as prominent whole sellers.
\t\t\t\t<br><br>
\t\t\t</p>
</div>
<div class=\"col-md-6\" >
<img src=\"image/about1.jpg\" alt=\"\" style=\"width:100%;\">
</div>
<div class=\"container col-md-12 \"style=\"margin-top:4rem;\">
<img src=\"image/banner/Banjara_Banner_6.jpg\" alt=\"\" style=\"width:100%;\">
</div>
<div class=\"col-sm-12 mt-5 text-center\">
<h6>Thank you for considering Banjara Home for your home goods needs. We look forward to serving you!</h6>
\t\t
</div>

</div>
\t\t\t<br/>
\t\t\t
\t\t\t</div>
\t</div>
</div>
";
        // line 48
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 48,  44 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
