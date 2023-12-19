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
class __TwigTemplate_d355ef5e2fd676a9cd853f57d26671f9378e99c2dc81dabca8f1b8540e4a6ecb extends \Twig\Template
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
\t\t";
        // line 19
        if (($context["collection"] ?? null)) {
            // line 20
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                echo "\t\t\t\t<div class=\"col-md-3 col-sm-3 mb-3 mobile-padding-0\">

\t\t\t\t\t<a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">
\t\t\t\t\t\t

\t\t\t\t\t\t<img src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                echo "\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"text-start \">
\t\t\t\t\t\t<h2 class=\"text-start pb-4\" style=\"color: #de4d71;    text-align: center;\">View all</h2>
\t\t\t\t\t</a>

\t\t\t\t\t<h6 class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">EMBROIDERED CUSHION CATALOGS</h6>
\t\t\t\t\t<h6 class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">PRINTED CUSHION CATALOGS</h6>
\t\t\t\t\t<h6 class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">RUGS & THROWS CATALOGS</h6>
\t\t\t\t\t<h6 class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">POUF & OTTOMANS CATALOGS</h6>
\t\t\t\t\t<h6 class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">UPHOLSTERY FURNITURE CATALOGS</h6>
\t\t\t\t\t<h6 class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">VINTAGE CATALOGS</h6>
\t\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t";
        }
        // line 42
        echo "\t</section>


\t";
        // line 45
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
        return array (  104 => 45,  99 => 42,  96 => 41,  75 => 26,  69 => 23,  65 => 21,  60 => 20,  58 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/collection.twig", "");
    }
}
