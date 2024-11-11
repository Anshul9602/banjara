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
class __TwigTemplate_6833dba33d4adb7192718fb8ac1ae09cc36f09a4d59a2e314340bd4dc4285882 extends \Twig\Template
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


<div id=\"content\" style=\"    background-color: #ddd6c8;\"></div>

<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 12
            echo "\t\t\t\t<div>

\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 14);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-10 m-auto\">
\t\t\t
\t\t\t<h2 class=\"text-center\" style=\"margin-top: 5%;\">Step into the Handmade luxe of Banjara Home,
\t\t\t\twhere tradition meets Modernity.</h2>
\t\t\t\t<div class=\"col-md-8\" style=\"margin: 10% auto;\">
\t\t\t\t\t<h5>\"Hello and a warm welcome to Banjara Home! I'm Sanjay Rathi, proud to carry
\t\t\t\t\t\tforward our family's legacy in home furnishings. Since 1985, we've been serving
\t\t\t\t\t\tcustomers from the streets of rural Rajasthan with top-notch products and
\t\t\t\t\t\toutstanding service. Over the years, our roots have spread, reaching new
\t\t\t\t\t\theights and serving customers not just locally but across borders.
\t\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t<div class=\"row mt-4\" style=\"justify-content: space-between;\">
\t\t\t\t<div class=\"col-md-5 \" style=\"align-items: center;\">
\t\t\t\t\t<p class=\"laptop\" style=\"font-size:16px;line-height:2;\">My personal journey in the export industry has been
\t\t\t\t\t\tquite an adventure, helping us explore new markets
\t\t\t\t\t\tworldwide. Fueled by this experience, I founded
\t\t\t\t\t\tBanjara Home in 2013 with a mission – to share
\t\t\t\t\t\tuniquely beautiful home goods globally.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"laptop\" style=\"font-size:16px;line-height:2;\">Here at Banjara Home, we're all about blending
\t\t\t\t\t\ttradition and creation. We cherish traditional
\t\t\t\t\t\ttechniques, support local artisans, and constantly
\t\t\t\t\t\tcreate fresh designs that capture both heritage and
\t\t\t\t\t\tmodern charm.
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<img src=\"image/about1.jpg\" alt=\"\" style=\"width:100%;\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t

\t\t\t</div>
\t\t\t<div class=\"row mt-4\" >
\t\t\t\t
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"image/about1.jpg\" alt=\"\" style=\"width:100%;\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 pl-5\" style=\"align-items: center;\">
\t\t\t\t\t<p class=\"laptop\" style=\"font-size:16px;line-height:2;\">My personal journey in the export industry has been
\t\t\t\t\t\tquite an adventure, helping us explore new markets
\t\t\t\t\t\tworldwide. Fueled by this experience, I founded
\t\t\t\t\t\tBanjara Home in 2013 with a mission – to share
\t\t\t\t\t\tuniquely beautiful home goods globally.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"laptop\" style=\"font-size:16px;line-height:2;\">Here at Banjara Home, we're all about blending
\t\t\t\t\t\ttradition and creation. We cherish traditional
\t\t\t\t\t\ttechniques, support local artisans, and constantly
\t\t\t\t\t\tcreate fresh designs that capture both heritage and
\t\t\t\t\t\tmodern charm.
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t

\t\t\t</div>
\t\t\t<br/>

\t\t</div>
\t</div>
</div>
";
        // line 91
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
        return array (  143 => 91,  67 => 17,  58 => 14,  54 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
