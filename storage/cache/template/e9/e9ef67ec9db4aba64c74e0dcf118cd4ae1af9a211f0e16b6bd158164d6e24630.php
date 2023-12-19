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
class __TwigTemplate_54361a87298a7fd395d03a29ada0a3625ff9bc0d9a5e937e87a4b6d507803228 extends \Twig\Template
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
<style>
\t@import url('https://fonts.cdnfonts.com/css/carlito');
\t@import url('https://fonts.cdnfonts.com/css/radley');
\t.slick-next:before {
\t\tcontent: '';
\t}
h1,h2 {
\tfont-family: 'Carlito';
\tfont-weight: 600;
}
h3,h4,h5,h6 {
\tfont-family: 'Radley', sans-serif;
}
\t.slick-prev:before {
\t\tcontent: '';
\t}

\t.splide__pagination {
\t\tdisplay: none !important;
\t}

\t.splide__arrow {
\t\ttop: 45% !important;
\t}

\t.serv-name5 {
\t\tposition: absolute;
\t\ttop: 80%;
\t\tleft: 50%;
\t\ttransform: translate(-50%, -50%);
\t\tfont-weight: 600;
\t\tbackground: #32baa1;
\t\tcolor: #fff;
\t\tpadding: 10px 35px;
\t\tfont-family: 'Radley', sans-serif;
\t\tfont-size: 20px;
\t\ttext-transform: capitalize;
\t}
\t.serv-name11 {
\t\tposition: absolute;
\t\ttop: 80%;
\t\tleft: 40%;
\t\ttransform: translate(-50%, -50%);
\t\tfont-weight: 600;
\t\tbackground: #32baa1;
\t\tcolor: #fff;
\t\tpadding: 10px 35px;
\t\tfont-family: 'Radley', sans-serif;
\t\tfont-size: 20px;
\t\ttext-transform: capitalize;
\t\tmin-width: 180px;
\t\ttext-align:center;
\t}
\t.serv-name12 {
\t\ttext-align:center;
\t\tmin-width: 180px;
\t\tposition: absolute;
\t\ttop: 80%;
\t\tleft: 55%;
\t\ttransform: translate(-50%, -50%);
\t\tfont-weight: 600;
\t\tbackground: #32baa1;
\t\tcolor: #fff;
\t\tpadding: 10px 35px;
\t\tfont-family: 'Radley', sans-serif;
\t\tfont-size: 20px;
\t\ttext-transform: capitalize;
\t}

\t.serv-name7 {
\t\tposition: absolute;
\t\ttop: 80%;
\t\tleft: 50%;
\t\ttransform: translate(-50%, -50%);
\t\tfont-weight: 600;
\t\tbackground: #32baa1;
\t\tcolor: #fff;
\t\tpadding: 1% 5%;
\t\tfont-family: 'Radley', sans-serif;
\t\tfont-size: 22px;
\t\ttext-transform: capitalize;
\t}
</style>


<div id=\"content\" style=\"    background-color: #ddd6c8;\"></div>

<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 100
            echo "\t\t\t\t<div>
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 102);
            echo "\">
\t\t\t\t\t<p class=\"serv-name11 \">Shop this
\t\t\t\t\t</p></a>
\t\t\t\t<a href=\"";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 105);
            echo "\">
\t\t\t\t\t<p class=\"serv-name12 \">View All
\t\t\t\t\t</p></a>
\t\t\t\t\t<img src=\"";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 108);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"slider-area\" style=\"background:#fcf5e7;\">
\t<div class=\"row pt-5 pb-5\" style=\"    justify-content: space-around;\">

\t\t<div class=\"col-sm-12 text-center  pb-4\">
\t\t\t<h1 style=\"text-transform: capitalize;color:#de4d71;font-size: xxx-large;\">Shop By Saga</h1>
\t\t</div>
\t\t<br>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"image/new/l1/11.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tTraditional Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The vintage banjara home
decor for your soul space.

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"image/new/l1/41.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tLuxé Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The Intricate embroidered
cushion made with love.


\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"image/new/l1/51.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tModern Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The timeless motifs, infused
with a modern aesthetic

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"slider-area\" style=\" background-image: url('image/new/b1/71.png');background-size: contain;\">
\t<div class=\"row p-5\" style=\"    justify-content: space-around;\">


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
<section class=\"  text-center\" style=\"background:#e2eced;\">
\t<style>
\t\t.serv-name4 {


\t\t\tfont-weight: 600;

\t\t\tcolor: #fff;
\t\t\tpadding: 5px 16px;
\t\t\tfont-family: 'Radley', sans-serif;
\t\t\tfont-size: 18px;
\t\t\ttext-transform: uppercase;
\t\t\tbackground: #32baa1
\t\t}

\t\t.imgc {
\t\t\tborder-radius: 50% 50% 0 0;
\t\t\tborder: 1px solid #32baa1;
\t\t}
\t</style>
\t<div class=\"container pt-5 pb-4\">
\t\t<div class=\"row pt-3 pb-3\" style=\"max-width: 80%;margin:auto;\">

\t\t\t<div class=\"col-md-4 mt-3\">

\t\t\t\t<a href=\"";
        // line 229
        echo ($context["gb1_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 231
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 232
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-3\">

\t\t\t\t<a href=\"";
        // line 239
        echo ($context["gb2_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 241
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 242
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-3\">

\t\t\t\t<a href=\"";
        // line 249
        echo ($context["gb3_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 251
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 252
        echo ($context["gb3_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-3\">

\t\t\t\t<a href=\"";
        // line 259
        echo ($context["gb4_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 261
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 262
        echo ($context["gb4_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-3\">

\t\t\t\t<a href=\"";
        // line 269
        echo ($context["gb5_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 271
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 272
        echo ($context["gb5_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-3\">

\t\t\t\t<a href=\"";
        // line 279
        echo ($context["gb6_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 281
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 282
        echo ($context["gb6_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>


\t\t\t<div class=\"col-md-8 m-auto pt-5 pb-5\">
\t\t\t\t<h1 class=\"pt-5\" style=\"color:#32baa1;font-family: 'Radley', sans-serif;\">\"Chic, Crafted, Captivating
\t\t\t\t\t”
\t\t\t\t</h1>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<section class=\"  text-center\">
\t<div class=\"image\" style=\"position: relative;\">
\t\t<p class=\"serv-name7 \">View all </p>
\t\t<img src=\"image/new/b1/8.jpg\" alt=\"\" width=\"100%\">

\t</div>


</section>
<section class=\"  text-center\"
\tstyle=\" background-image: url('image/new/b1/9.jpg');background-size: cover;min-height:650px;\">
\t<br><br>
\t<div class=\"container pt-5 pb-5\">
\t\t<div class=\"row\" style=\"    align-items: center;\">
\t\t\t<div class=\"col-md-7 text-start\" style=\"text-align: start;\">

\t\t\t\t<p class=\"mt-4\" style=\"min-height:440px;\"></p>
\t\t\t\t<a href=\"index.php?route=common/wholesale\"><button class=\"btn btn-primary mt-4\" style=\"margin-left: 7%;padding: 3% 9%;\">View All</button></a>
\t\t\t</div>

\t\t</div>
\t</div>


</section>

<section class=\" mt-5 pt-5 pb-4   text-center\">
\t<div class=\"splide\" id=\"value\" role=\"group\" aria-label=\"Splide Basic HTML Example\">
\t\t<div class=\"splide__track\">
\t\t\t<ul class=\"splide__list\">

\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"\">
\t\t\t\t</li>
\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"\">
\t\t\t\t</li>
\t\t\t\t
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

<section class=\"  text-center\"
\tstyle=\" background-image: url('image/new/b1/10.jpg');background-size: cover;min-height:650px;\">
\t<br><br>
\t<div class=\"container pt-5 pb-5\">
\t\t<div class=\"row\" style=\"    align-items: center;max-width:80%; margin:auto;\">
\t\t\t<div class=\"col-md-12 text-start\" style=\"text-align: start;\">

\t\t\t\t<p class=\"mt-4\" style=\"min-height:260px;\"></p>
\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img style=\"width:100%;\" src=\"image/icons/new/6.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\tMeet the Hands
\t\t\t\t\t</h5>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img style=\"width:100%;\" src=\"image/icons/new/7.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\tHouse of Handmade luxé
\t\t\t\t\t</h5>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img style=\"width:100%;\" src=\"image/icons/new/8.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\tSustainability and Eco-Friendliness

\t\t\t\t\t</h5>
\t\t\t\t</a>

\t\t\t</div>

\t\t</div>
\t</div>


</section>

";
        // line 413
        echo "


<section class=\" top-picks mt-5 mb-5 pt-4 d-none\" style=\"background-color:rgb(245 243 238/1) ;\">
\t<div class=\" container pt-5 pb-5\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h3 style=\"text-transform:uppercase;\">Values we find important</h3>
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div class=\"row mt-1\">
\t\t\t<div class=\"col-md-12\" style=\"padding:0 10px;\">

\t\t\t</div>
\t\t</div>
\t</div>
</section>


<div class=\" separation \" style=\"background: #fcf4e6;\">
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
\t\t
\t\t
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
        // line 485
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
        return array (  598 => 485,  524 => 413,  391 => 282,  387 => 281,  382 => 279,  372 => 272,  368 => 271,  363 => 269,  353 => 262,  349 => 261,  344 => 259,  334 => 252,  330 => 251,  325 => 249,  315 => 242,  311 => 241,  306 => 239,  296 => 232,  292 => 231,  287 => 229,  167 => 111,  158 => 108,  152 => 105,  146 => 102,  142 => 100,  138 => 99,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
