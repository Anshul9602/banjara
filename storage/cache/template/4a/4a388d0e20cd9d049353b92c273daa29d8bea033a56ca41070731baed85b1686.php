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

/* default/template/common/collection.twig */
class __TwigTemplate_20ef7ac9ab6b5e832ec6f5cc956a5fde6d795a755a3a06e71cfab0f63d6a430b extends \Twig\Template
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

<!-- Swiper Slider CSS-->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\"/>
<link
rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\"/>
<!-- Swiper JS -->
<style>
\t.slick-next:before {
\t\tcontent: '';
\t}
\t.slick-prev:before {
\t\tcontent: '';
\t}
</style>

<section class=\"container mt-5 mb-3 text-center\">
\t<div class=\"row \">
\t
\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-3 mobile-padding-0\">

\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t

\t\t\t\t\t\t<img src=\"image/new/ti/8.jpg\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"text-start \" >
\t\t\t\t\t\t<h5 class=\"text-start pb-4 mt-4\" style=\"color: #de4d71;    text-align: center;\">TRADITIONAL SAGA</h5>
\t\t\t\t\t</a>

\t\t\t\t\t<p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">EMBROIDERED CUSHION CATALOGS</p>
\t\t\t\t\t<p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">PRINTED CUSHION CATALOGS</p>
\t\t\t\t\t<p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">RUGS & THROWS CATALOGS</p>
\t\t\t\t\t<p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">POUF & OTTOMANS CATALOGS</p>
\t\t\t\t\t<p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">UPHOLSTERY FURNITURE CATALOGS</p>
\t\t\t\t\t<p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">VINTAGE CATALOGS</p>
\t\t\t\t</div>

\t\t\t
\t</section>


\t";
        // line 43
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/collection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 43,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/collection.twig", "");
    }
}
