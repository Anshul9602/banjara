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
class __TwigTemplate_6290b5a21a38d2006bc552943c42e35efbcb71d0521bfdc950f3ae82540e4d52 extends \Twig\Template
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

\th1,
\th2 {
\t\tfont-family: 'Carlito';
\t\tfont-weight: 600;
\t}

\th3,
\th4,
\th5,
\th6 {
\t\tfont-family: 'Radley', sans-serif;
\t}

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
\t\tmin-width: 230px;
\t\ttext-align: center;
\t}

\t.serv-name12 {
\t\ttext-align: center;
\t\tmin-width: 230px;
\t\tposition: absolute;
\t\ttop: 80%;
\t\tleft: 60%;
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
\t\ttext-align: center;
\t\tmin-width: 250px;
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
\t.serv-name71 {
\t\t
\t\tposition: absolute;
\t\ttop: 80%;
\t\tleft: 17%;
\t\ttransform: translate(-50%, -50%);
\t\t
\t\tfont-family: 'Radley', sans-serif;
\t\tfont-size: 20px;
\t\ttext-transform: capitalize;
\t}

\t.serv-name4 {


\t\tfont-weight: 600;

\t\tcolor: #fff;
\t\tpadding: 5px 16px;
\t\tfont-family: 'Radley', sans-serif;
\t\tfont-size: 18px;
\t\ttext-transform: uppercase;
\t\tbackground: #32baa1
\t}

\t.imgc {
\t\tborder-radius: 50% 50% 0 0;
\t\tborder: 1px solid #32baa1;
\t}
\t.artmh{
\t\tmin-height:210px;}
\t.buymh{
\t\tmin-height: 400px;}
\t
</style>


<div id=\"content\" style=\"    background-color: #ddd6c8;\"></div>

<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 146
            echo "\t\t\t\t<div>

\t\t\t\t\t<a href=\"";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 148);
            echo "\">
\t\t\t\t\t\t<p class=\"serv-name11 \">Shop this
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 152);
            echo "\">
\t\t\t\t\t\t<p class=\"serv-name12 \">View All
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t\t<img src=\"";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 156);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"slider-area\" style=\"background:#fcf5e7;\">
\t<div class=\"row pt-5 pb-5\" style=\"    justify-content: space-around;\">

\t\t<div class=\"col-sm-12 text-center  pb-4\" style=\"background-image: url('image/new/b1/sgb1.png');\">
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
\t\t\t\t\tdecor for your soul space.

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
\t\t\t\t\tcushion made with love.


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
\t\t\t\t\twith a modern aesthetic

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

\t<div class=\"container pt-5 pb-4\">
\t\t<div class=\"row pt-3 pb-3\" style=\"max-width: 90%;margin:auto;\">

\t\t\t<div class=\"col-md-4 mt-4 \" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 259
        echo ($context["gb1_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 261
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 262
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-4\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 269
        echo ($context["gb2_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 271
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 272
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-4\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 279
        echo ($context["gb3_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 281
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 282
        echo ($context["gb3_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 289
        echo ($context["gb4_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 291
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 292
        echo ($context["gb4_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 299
        echo ($context["gb5_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 301
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 302
        echo ($context["gb5_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 309
        echo ($context["gb6_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 311
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 312
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
<section class=\"  text-center\">
\t<div class=\"image\" style=\"position: relative;\">
\t\t
\t\t<a href=\"index.php?route=common/wholesale\" class=\"serv-name71\"><button class=\"btn btn-primary mt-4\"
\t\t\tstyle=\"padding:15px 40px;\">View All</button></a>
\t\t<img src=\"image/new/b1/9.jpg\" alt=\"\" width=\"100%\">

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
\t\t\t<div class=\"row\" style=\" align-items: center;max-width:80%;margin:auto;position: absolute;top: 52%;left: 15%;\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t<img style=\"width:80%;\" src=\"image/icons/new/6.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\t\tMeet the Hands
\t\t\t\t\t\t</h5>
\t\t\t\t\t</a>
\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t<img style=\"width:80%;\" src=\"image/icons/new/7.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\t\tHouse of Handmade luxé
\t\t\t\t\t\t</h5>
\t\t\t\t\t</a>
\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t<img style=\"width:80%;\" src=\"image/icons/new/8.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;\">
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
        // line 439
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
        // line 511
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
        return array (  624 => 511,  550 => 439,  421 => 312,  417 => 311,  412 => 309,  402 => 302,  398 => 301,  393 => 299,  383 => 292,  379 => 291,  374 => 289,  364 => 282,  360 => 281,  355 => 279,  345 => 272,  341 => 271,  336 => 269,  326 => 262,  322 => 261,  317 => 259,  215 => 159,  206 => 156,  199 => 152,  192 => 148,  188 => 146,  184 => 145,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
