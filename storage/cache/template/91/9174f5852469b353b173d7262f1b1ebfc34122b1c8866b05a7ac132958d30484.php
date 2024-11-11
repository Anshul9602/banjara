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
class __TwigTemplate_94ae715b0d36facceb108ee4809800ce96ddf16f7a476ecaafa7a0f187ec38e5 extends \Twig\Template
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
\t\t<div class=\"col-sm-12 mb-5\">
\t\t\t
\t\t\t<h2 class=\"text-center mt-4\">Step into the Handmade luxe of Banjara Home,
\t\t\t\twhere tradition meets Modernity.</h2>
\t\t\t\t<div class=\"col-md-8\" style=\"margin: 10% auto;\">
\t\t\t\t\t<h5>\"Hello and a warm welcome to Banjara Home! I'm Sanjay Rathi, proud to carry
\t\t\t\t\t\tforward our family's legacy in home furnishings. Since 1985, we've been serving
\t\t\t\t\t\tcustomers from the streets of rural Rajasthan with top-notch products and
\t\t\t\t\t\toutstanding service. Over the years, our roots have spread, reaching new
\t\t\t\t\t\theights and serving customers not just locally but across borders.
\t\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-md-6 d-flex\" style=\"align-items: center;\">
\t\t\t\t\t<p class=\"laptop\" style=\"font-size:16px;line-height:2;\">Hello and welcome to Banjara Home! My name is Sanjay Rathi, and I am proud to continue my family's tradition of entrepreneurship with our home Furnishings business.<br>
\t\t\t\t\t\t<br>

\t\t\t\t\t\tSince 1985, our family has been serving customers from the streets of rural Rajasthan, providing them with high-quality products and exceptional service. Over the years, we have expanded our reach domestically and have grown our business to new heights.<br><br>

\t\t\t\t\t\tMy personal experience in the export industry has also helped to shape our business, allowing us to explore new markets and reach customers around the world. With this knowledge, I started Banjara Home in 2013, with a focus on providing unique and beautiful home goods to customers around the globe.<br><br>
\t\t\t\t\t\tAt Banjara Home, we are committed to preserving traditional techniques and supporting local artisans, while also embracing innovation and exploring new design ideas. We are passionate about what we do, and we take pride in every product we offer. We export to over 15 countries to some of the most prominent retail store chains as well as prominent whole sellers.
\t\t\t\t\t\t<br><br>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"image/about1.jpg\" alt=\"\" style=\"width:100%;\">
\t\t\t\t</div>
\t\t\t\t<div class=\"container col-md-12 \" style=\"margin-top:4rem;\">
\t\t\t\t\t<img src=\"image/banner/Banjara_Banner_6.jpg\" alt=\"\" style=\"width:100%;\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 mt-5 text-center\">
\t\t\t\t\t<h6>Thank you for considering Banjara Home for your home goods needs. We look forward to serving you!</h6>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<br/>

\t\t</div>
\t</div>
</div>
";
        // line 65
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
        return array (  117 => 65,  67 => 17,  58 => 14,  54 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
