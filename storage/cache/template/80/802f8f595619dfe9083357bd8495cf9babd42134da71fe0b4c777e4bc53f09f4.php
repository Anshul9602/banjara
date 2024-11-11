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

/* default/template/common/blog1.twig */
class __TwigTemplate_4be3cc4f62823711a728dcbc97cd12f557b581d59eef29410caf7b38bf2eec40 extends \Twig\Template
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

\t\t\t\t<div>

\t\t\t\t\t<img src=\"image/new/blog/blo1.png\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 26
            echo "\t\t\t\t<div>

\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 28);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<div style=\"background-image: url('image/new/l1/a_back.png');\">
\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-10 m-auto\">
\t\t\t\t<h1 class=\"text-center col-md-10\"
\t\t\t\t\tstyle=\"margin: 3% auto;color:#de4d71;     font-weight: 500;   font-family: 'Radley', sans-serif;\">
\t\t\t\t\t“Tradition Rewoven”
\t\t\t\t</h1>
\t\t\t\t<h3 class=\"text-center col-md-10\"
\t\t\t\t\tstyle=\"margin: 1% auto;color:#32baa1;     font-weight: 500;   font-family: 'Radley', sans-serif;\">
\t\t\t\t\t“The Journey of Banjara Embroidery into Contemporary Elegance\"</h3>
\t\t\t\t<div class=\"col-md-8\" style=\"margin: 5% auto;\">
\t\t\t\t\t<h5 style=\"text-align: center;font-family: 'Avenir LT Std';\">In the heart of Banjara Home lies a
\t\t\t\t\t\ttale spun with threads of tradition, an
\t\t\t\t\t\tode to the timeless artistry of Banjara embroidery. Our journey begins with
\t\t\t\t\t\tthe rich heritage of this craft, a tradition that whispers stories of nomadic
\t\t\t\t\t\ttribes and their vibrant culture.
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt-5\" style=\"justify-content: space-between;\">
\t\t\t\t\t<div class=\"col-md-5 \" style=\"align-items: center;\">
\t\t\t\t\t\t<h3 style=\"color: black;margin-top: 15%;font-family: 'Carlito';font-weight: 600;\">Connecting the Threads of Home:
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    margin-top: 5%;\">The motto is clear:
\t\t\t\t\t\t\tconnect the tradition to modern living
\t\t\t\t\t\t\twithout losing the essence. Banjara Home's contemporary
\t\t\t\t\t\t\tembroidered pieces are not just furnishings; We are storytellers,
\t\t\t\t\t\t\tconnecting your space to a heritage that spans generations.
\t\t\t\t\t\t\tEach piece invites you to be a part of this narrative, to weave
\t\t\t\t\t\t\ttradition into the fabric of your daily life.

\t\t\t\t\t\t</p><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/new/blog/4.png\" alt=\"\" style=\"width:100%;\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row \" style=\"margin-top: 5%;\">

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/new/blog/5.png\" alt=\"\" style=\"width:100%;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 pl-5\" style=\"align-items: center;\">
\t\t\t\t\t\t<h3 style=\"color:black;margin-top: 15%;font-family: 'Carlito';font-weight: 600;text-align: end;\">Embark on the Journey:</h3>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    text-align: end;    margin-top: 5%;\">
\t\t\t\t\t\t\tAs you explore Banjara Home's collection, you embark on a
\t\t\t\t\t\t\tjourney – a journey that transcends time, weaving tradition
\t\t\t\t\t\t\tinto the very fabric of your contemporary living space.
\t\t\t\t\t\t\tWelcome to a home where every thread is a connection to
\t\t\t\t\t\t\ttradition, and every piece is a testament to the
\t\t\t\t\t\t\ttransformative power of art.


\t\t\t\t\t\t</p><br><br>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br />


\t\t\t\t<div class=\"col-md-5\" style=\"height: 4px;background:#32baa1;margin:5% auto;\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 107
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/blog1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 107,  81 => 31,  72 => 28,  68 => 26,  64 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/blog1.twig", "");
    }
}
