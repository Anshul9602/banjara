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

/* default/template/common/home.twig */
class __TwigTemplate_0923bb1cbccee4d2de1e55eb4e9eeeaa903be07c51013013b2283300386e0376 extends \Twig\Template
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
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\" />
<!-- Swiper JS -->



<div id=\"content\" style=\"    background-color: #ddd6c8;\"></div>

<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 18
            echo "\t\t\t\t<div>

\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 20);
            echo "\">
\t\t\t\t\t\t<p class=\"serv-name11 \">Shop this
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 24);
            echo "\">
\t\t\t\t\t\t<p class=\"serv-name12 \">View All
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
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
<section class=\"slider-area\" style=\"background:#fcf5e7;\">
\t<div class=\"row pt-5 pb-5 m-0\" style=\"    justify-content: space-around;\">

\t\t<div class=\"col-sm-12 text-center  pb-4\" >
\t\t\t<img class=\"desk\"src=\"image/new/b1/sgb2.png\" alt=\"\" width=\"100%\">
\t\t\t<img class=\"mobl\"src=\"image/new/b1/sgb3.png\" alt=\"\" width=\"100%\">
\t\t</div>
\t\t<br>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_63\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/51.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_63\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tTraditional Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The vintage banjara home
\t\t\t\t\tdecor for your soul space.

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_61\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/41.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_61\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tLuxé Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The Intricate embroidered
\t\t\t\t\tcushion made with love.


\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_126\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/11.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_126\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tModern Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The timeless motifs, infused
\t\t\t\t\twith a modern aesthetic

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"slider-area\" style=\" background-image: url('image/new/b1/71.png');background-size: contain;\">
\t<div class=\"row p-md-5 p-1 sth\" style=\"    justify-content: space-around;\">


\t\t<div class=\"col-md-6 d-flex text-center\" style=\"    justify-content: center;\">
\t\t\t<span><img style=\"margin:auto;width:50px;\" src=\"image/icons/new/41.png\" title=\"\" alt=\"\"
\t\t\t\t\tclass=\"img-responsive logo-home\" /></span>
\t\t\t<h1 class=\"p-2\" style=\"color:  #fff; text-transform: capitalize;\">
\t\t\t\tShop the Handmade
\t\t\t</h1><span><img style=\"margin:auto;width:50px;\" src=\"image/icons/new/41.png\" title=\"\" alt=\"\"
\t\t\t\t\tclass=\"img-responsive logo-home\" /></span>
\t\t</div>

\t</div>
</section>
<section class=\"  text-center\" style=\"background:#fcf5e7;\">

\t<div class=\"container pt-5 pb-4\">
\t\t<div class=\"row pt-3 pb-3 sth1\" style=\"max-width: 90%;margin:auto;\">

\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 132
        echo ($context["gb1_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 134
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 135
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 142
        echo ($context["gb2_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 144
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 145
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 152
        echo ($context["gb3_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 154
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 155
        echo ($context["gb3_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 162
        echo ($context["gb4_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 164
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 165
        echo ($context["gb4_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 172
        echo ($context["gb5_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 174
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 175
        echo ($context["gb5_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 182
        echo ($context["gb6_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 184
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 185
        echo ($context["gb6_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>


\t\t\t<div class=\"col-md-8 m-auto pt-md-5 pb-md-5 pt-4 pb-3\">
\t\t\t\t<h1 class=\"pt-3\" style=\"color:#32baa1;font-family: 'Radley', sans-serif;\">\"Chic, Crafted, Captivating
\t\t\t\t\t”
\t\t\t\t</h1>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<section class=\"  text-center\">
\t<div class=\"image\" style=\"position: relative;\">
\t\t<a href=\"index.php?route=product/category&path=72_145\"><p class=\"serv-name7 \">View all </p></a>
\t\t<img src=\"image/new/b1/8.jpg\" alt=\"\" width=\"100%\">

\t</div>


</section>
<section class=\"  text-center\">
\t<div class=\"image\" style=\"position: relative;\">
\t\t
\t\t<a href=\"index.php?route=common/wholesale\" class=\"serv-name71\"><button class=\"btn btn-primary mt-4\"
\t\t\tstyle=\"padding:20px 50px;\">View All</button></a>
\t\t<img src=\"image/new/b1/9.jpg\" alt=\"\" width=\"100%\">

\t</div>


</section>


<section class=\" mt-5 pt-md-5 pb-4   text-center\">
\t<div class=\"splide\" id=\"value\" role=\"group\" aria-label=\"Splide Basic HTML Example\">
\t\t<div class=\"splide__track\">
\t\t\t<ul class=\"splide__list\">

\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"\">
\t\t\t\t</li>
\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"\">
\t\t\t\t</li>

\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"\">
\t\t\t\t</li>
\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t<img src=\"image/new/ti/7.jpg\" alt=\"\">
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>


</section>

<section class=\"  text-center\">
\t<div class=\"image\" style=\"position: relative;\">
\t\t
\t\t
\t\t\t<div class=\"row mob1\" style=\" align-items: center;min-width:900px;position: absolute;top: 70%;left: 50%;transform: translate(-50%, -50%);\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/6.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;    min-height: 60px;\">
\t\t\t\t\t\t\tMeet the Hands
\t\t\t\t\t\t</h5>
\t\t\t\t\t</a>
\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/7.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;    min-height: 60px;\">
\t\t\t\t\t\t\tHouse of Handmade luxé
\t\t\t\t\t\t</h5>
\t\t\t\t\t</a>
\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/8.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;    min-height: 60px;\">
\t\t\t\t\t\t\tSustainability and Eco-Friendliness
\t
\t\t\t\t\t\t</h5>
\t\t\t\t\t</a>
\t
\t\t\t\t</div>
\t
\t\t\t</div>
\t\t
\t\t<img src=\"image/new/b1/10.jpg\" alt=\"\" width=\"100%\">

\t</div>
\t


</section>

";
        // line 312
        echo "


<section class=\" top-picks  pt-4 \" style=\"background-color:#fcf4e6 ;\">
\t<div class=\" container pt-5 pb-5\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h1 style=\"text-transform:capitalize;\">On the Gram @Banjarahome_</h1>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
</section>


<div class=\" separation mobp\" style=\"background: #fcf4e6;\">
\t<div class=\"container pb-3\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"margin-top:25px\">
\t\t\t\t<script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
\t\t\t\t<div class=\"elfsight-app-8674d6d0-1d23-4bf6-a003-4f998062b560\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script>
\tdocument.addEventListener('DOMContentLoaded', function () {


\t\t// values

\t\tnew Splide('#value', {
\t\t\ttype: 'loop',
\t\t\tdrag: 'free',
\t\t\tfocus: 'center',
\t\t\tperPage: 3,
\t\t\tspaceBetween: 40,

\t\t\tautoScroll: {
\t\t\t\tspeed: 1,
\t\t\t},
\t\t\tbreakpoints: {
\t\t\t\t240: {
\t\t\t\t\tperPage: 2,
\t\t\t\t\tspaceBetween: 10
\t\t\t\t},
\t\t\t\t640: {
\t\t\t\t\tperPage: 2,
\t\t\t\t\tspaceBetween: 5
\t\t\t\t},
\t\t\t\t767: {
\t\t\t\t\tperPage: 3,
\t\t\t\t\tspaceBetween: 20
\t\t\t\t},
\t\t\t\t1024: {
\t\t\t\t\tspaceBetween: 30,
\t\t\t\t\tperPage: 3,
\t\t\t\t},
\t\t\t},
\t\t\tfocus: \"center\",
\t\t}).mount(window.splide.Extensions);

\t})

</script>";
        // line 379
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 379,  423 => 312,  294 => 185,  290 => 184,  285 => 182,  275 => 175,  271 => 174,  266 => 172,  256 => 165,  252 => 164,  247 => 162,  237 => 155,  233 => 154,  228 => 152,  218 => 145,  214 => 144,  209 => 142,  199 => 135,  195 => 134,  190 => 132,  87 => 31,  78 => 28,  71 => 24,  64 => 20,  60 => 18,  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
