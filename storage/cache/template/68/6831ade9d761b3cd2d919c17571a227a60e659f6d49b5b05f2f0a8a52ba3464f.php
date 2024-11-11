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

/* default/template/common/blog2.twig */
class __TwigTemplate_e9bd9c29cc20735eb355f7e732de2b5cc9db4bedf9a1c578795ff14e36c18424 extends \Twig\Template
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
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 13
            echo "\t\t\t\t<div>

\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 15);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<div style=\"background-image: url('image/new/l1/a_back.png');\">
\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-10 m-auto\">

\t\t\t\t<h3 class=\"text-center\" style=\"margin: 10%;\">At Banjara Home, every product tells a tale – a story spun
\t\t\t\t\tby skilled
\t\t\t\t\tartisans who breathe life into threads and transform them into works of art.
\t\t\t\t\tIn this journey through craftsmanship, let's unravel the artistry that defines
\t\t\t\t\teach piece and meet the hands behind the magic.</h3>



\t\t\t\t<h3 class=\"text-center col-md-10\"
\t\t\t\t\tstyle=\"margin: 5% auto;color:#de4d71;     font-weight: 500;   font-family: 'Radley', sans-serif;\">
\t\t\t\t\t\"Banjara Home: Where Threads Tell Tales, Craftsmanship
\t\t\t\t\tFinds a Home, and Every Comfort is a Chapter in Elegance.\"
\t\t\t\t</h3>

\t\t\t\t<div class=\"row mt-5\" style=\"justify-content: space-between;\">
\t\t\t\t\t<div class=\"col-md-5 \" style=\"align-items: center;\">
\t\t\t\t\t\t<h3 style=\"color: black;margin-top: 15%;\">The Design Symphony:
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    margin-top: 5%;\">In the heart of our
\t\t\t\t\t\t\tcreative process lies a harmonious blend
\t\t\t\t\t\t\tof tradition and innovation. Designs are inspired by a
\t\t\t\t\t\t\tmyriad of influences, from ancient motifs that whisper tales
\t\t\t\t\t\t\tof heritage to contemporary strokes that dance with
\t\t\t\t\t\t\tmodern elegance. Each design is meticulously curated,
\t\t\t\t\t\t\tensuring that it not only captivates the eye but also
\t\t\t\t\t\t\tresonates with the soul of our brand.

\t\t\t\t\t\t</p><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/new/blog/1.png\" alt=\"\" style=\"width:100%;\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row \" style=\"margin-top: 5%;\">

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/new/blog/2.png\" alt=\"\" style=\"width:100%;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-1\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 pl-5\" style=\"align-items: center;\">
\t\t\t\t\t\t<h3 style=\"color:black;margin-top: 15%;text-align: end;\">From Thread to Textile:</h3>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    text-align: end;    margin-top: 5%;\">
\t\t\t\t\t\t\tThe journey from raw material to the finished product is a
\t\t\t\t\t\t\tmeticulous process. The artisans delicately handle each
\t\t\t\t\t\t\tthread, infusing it with skill, precision, and a touch of their
\t\t\t\t\t\t\town spirit. It's a dance of hands and hearts, transforming
\t\t\t\t\t\t\tthe material into a Banjara Home creation that carries not
\t\t\t\t\t\t\tjust beauty but also the soul of its creator.


\t\t\t\t\t\t</p><br><br>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row \" style=\"margin-top: 5%;\">


\t\t\t\t\t<div class=\"col-md-6 pl-5\" style=\"align-items: center;\">
\t\t\t\t\t\t<h3 style=\"color:black;margin-top: 15%;text-align: end;\">The Artisan's Canvas:</h3>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    text-align: end;    margin-top: 5%;\">
\t\t\t\t\t\t\tOur artisans are the maestros orchestrating this symphony
\t\t\t\t\t\t\tof design. Behind every creation is a skilled craftsman or
\t\t\t\t\t\t\tcraftswoman, their hands embroidered into stories with
\t\t\t\t\t\t\teach thread. They are the guardians of tradition, passing
\t\t\t\t\t\t\tdown age-old techniques from generation to generation.
\t\t\t\t\t\t\tThe fabric becomes their canvas, and with every pass, a
\t\t\t\t\t\t\tmasterpiece emerges.



\t\t\t\t\t\t</p><br><br>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-1\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/new/blog/3.png\" alt=\"\" style=\"width:100%;\">
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<br />


\t\t\t\t<div class=\"col-md-5\" style=\"height: 4px;background:#32baa1;margin:5% auto;\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 122
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/blog2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 122,  68 => 18,  59 => 15,  55 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/blog2.twig", "");
    }
}
