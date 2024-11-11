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

/* default/template/common/blog.twig */
class __TwigTemplate_2bf73f2513fa38f5828a5ab50342a4ee83eea3b6db3ce831164e7e74a5b99b75 extends \Twig\Template
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
\t\t\t\t
\t\t\t\t<div>

\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 14);
        echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t
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
\t<div class=\"container\" >
\t\t<div class=\"row\">
\t
\t\t\t<div class=\"col-md-10 m-auto\">
\t<h1 class=\"text-center col-md-10\" style=\"margin: 3% auto;color:#de4d71;     font-weight: 500;   font-family: 'Radley', sans-serif;\">“Tradition Rewoven”
</h1>
\t\t\t\t<h3 class=\"text-center col-md-10\" style=\"margin: 1% auto;color:#32baa1;     font-weight: 500;   font-family: 'Radley', sans-serif;\">“The Journey of Banjara Embroidery into Contemporary Elegance\"</h3>
\t\t\t\t<div class=\"col-md-8\" style=\"margin: 5% auto;\">
\t\t\t\t\t<h5 style=\"text-align: center;font-family: 'Avenir LT Std';\">In the heart of Banjara Home lies a tale spun with threads of tradition, an
ode to the timeless artistry of Banjara embroidery. Our journey begins with
the rich heritage of this craft, a tradition that whispers stories of nomadic
tribes and their vibrant culture.
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt-5\" style=\"justify-content: space-between;\">
\t\t\t\t\t<div class=\"col-md-5 \" style=\"align-items: center;\">
\t\t\t\t\t\t<h5>Connecting the Threads of Home:
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    margin-top: 15%;\">The motto is clear: connect the tradition to modern living
\t\t\t\t\t\t\twithout losing the essence. Banjara Home's contemporary
\t\t\t\t\t\t\tembroidered pieces are not just furnishings; We are storytellers,
\t\t\t\t\t\t\tconnecting your space to a heritage that spans generations.
\t\t\t\t\t\t\tEach piece invites you to be a part of this narrative, to weave
\t\t\t\t\t\t\ttradition into the fabric of your daily life.
\t
\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;\">Here at Banjara Home, we're all about
\t\t\t\t\t\t\tblending
\t\t\t\t\t\t\ttradition and creation. We cherish traditional
\t\t\t\t\t\t\ttechniques, support local artisans, and constantly
\t\t\t\t\t\t\tcreate fresh designs that capture both heritage and
\t\t\t\t\t\t\tmodern charm.
\t
\t
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/new/l1/22.png\" alt=\"\" style=\"width:100%;\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row \" style=\"margin-top: 5%;\">
\t
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/new/l1/33.png\" alt=\"\" style=\"width:100%;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\">
\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 pl-5\" style=\"align-items: center;\">
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    text-align: end;    margin-top: 20%;\">
\t\t\t\t\t\t\tEvery product we offer is a piece of our passion and pride.
\t\t\t\t\t\t\tWe've expanded our reach to over 15 countries, finding
\t\t\t\t\t\t\thomes in retail store chains and trusted wholesalers.
\t\t\t\t\t\t\tJoin us on this delightful journey where every piece is a
\t\t\t\t\t\t\tstory, every corner is adorned with warmth, and every
\t\t\t\t\t\t\tthread connects you to the Banjara Home family.
\t
\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t<p class=\"laptop\" style=\"font-size:18px;line-height:2;    text-align: end;\">Welcome to a world where
\t\t\t\t\t\t\ttradition meets modern
\t\t\t\t\t\t\tcreation, and your home becomes part of our global tale.
\t
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br />
\t
\t\t\t\t<h4 class=\"col-md-8  text-center\" style=\"margin: 7% auto;color:#32baa1;    font-size: 20px;\">\"In every
\t\t\t\t\tthread we craft, a story unfolds. Banjara Home: Where tradition meets creation, and
\t\t\t\t\tyour home becomes a chapter in our global tale.\"
\t\t\t\t</h4>
\t\t\t\t<div class=\"col-md-5\" style=\"height: 4px;background:#32baa1;margin:5% auto;\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 114
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 114,  84 => 31,  75 => 28,  71 => 26,  67 => 25,  53 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/blog.twig", "");
    }
}
