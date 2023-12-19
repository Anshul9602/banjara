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
class __TwigTemplate_fef0cf91285ef8e1cc6682504577a827bbe013ff35cbefca2612aeb1f4efb019 extends \Twig\Template
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
\t.slick-next:before {
\t\tcontent: '';
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
</style>


<div id=\"content\" style=\"    background-color: #ddd6c8;\"></div>

<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 34
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 34);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 35);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"slider-area\" style=\"\">
\t<div class=\"row pt-5 pb-5\" style=\"    justify-content: space-around;\">

\t\t<div class=\"col-sm-12 text-center  pb-4\">
\t\t\t<h1 style=\"text-transform: capitalize;color:#de4d71;font-size: xxx-large;\">Shop By Saga</h1>
\t\t</div>
\t\t<br>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"image/new/l1/1.jpg\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\tTraditional Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">Further elaborate on the
\t\t\t\t\tskill/offered service.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"image/new/l1/4.jpg\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\tTraditional Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">Further elaborate on the
\t\t\t\t\tskill/offered service.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"image/new/l1/5.jpg\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;\">
\t\t\t\t\t\tTraditional Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">Further elaborate on the
\t\t\t\t\tskill/offered service.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"slider-area\" style=\"background:#de4d71;\">
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
<section class=\"container mt-5 mb-4 text-center\">
\t<style>
\t\t.serv-name4 {
\t\t\tposition: absolute;
\t\t\ttop: 50%;
\t\t\tleft: 50%;
\t\t\ttransform: translate(-50%, -50%);
\t\t\tfont-weight: 600;
\t\t\tbackground: #c6c6c5;
\t\t\tcolor: #32baa1;
\t\t\tpadding: 5px 16px;
\t\t\tfont-family: 'Hina Mincho' !important;
\t\t\tfont-size: 18px;
\t\t\ttext-transform: uppercase;
\t\t}
\t</style>

\t<div class=\"row pt-3 pb-3\">

\t\t<div class=\"col-md-4 \">

\t\t\t<a href=\"";
        // line 148
        echo ($context["gb1_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name4\">";
        // line 149
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 151
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>

\t\t</div>
\t\t<div class=\"col-md-8 \">
\t\t\t<a href=\"";
        // line 156
        echo ($context["gb2_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name4 \">";
        // line 157
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 159
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;max-height:385px;\" class=\"zoom serv-img\"
\t\t\t\t\ttitle=\"\" />
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-4 mt-3\">

\t\t\t<a href=\"";
        // line 165
        echo ($context["gb1_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name4\">";
        // line 166
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 168
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>

\t\t</div>
\t\t<div class=\"col-md-4 mt-3\">

\t\t\t<a href=\"";
        // line 174
        echo ($context["gb1_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name4\">";
        // line 175
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 177
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>

\t\t</div>
\t\t<div class=\"col-md-4 mt-3\">

\t\t\t<a href=\"";
        // line 183
        echo ($context["gb1_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name4\">";
        // line 184
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 186
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>

\t\t</div>

\t\t<div class=\"col-md-8 m-auto pt-5 pb-5\">
\t\t\t<h1 style=\"color:#32baa1;\">\"Chic, Crafted, Captivating
\t\t\t\t”
\t\t\t</h1>
\t\t</div>

\t</div>
</section>
<section class=\"  text-center\" style=\"background: #e6dfd9;\">
\t<br><br>
\t<div class=\"container pt-5 pb-5\">
\t\t<div class=\"row\" style=\"    align-items: center;\">
\t\t\t<div class=\"col-md-7 text-start\" style=\"text-align: start;\">
\t\t\t\t<h1 style=\"color:#de4d71;    font-size: xxx-large;\">Shop</h1>
\t\t\t\t<h1 style=\"color:#de4d71;    font-size: xxx-large;\">WHOLESALE</h1>
\t\t\t\t<br>
\t\t\t\t<p class=\"mt-4\" style=\"font-size: 26px;max-width:80%;\">Welcome to the Banjara Home Wholesale Purchase,
\t\t\t\t\twhere the art of handcrafted elegance meets your retail
\t\t\t\t\tvision. Our offerings encompass <span style=\"color:#de4d71;font-weight: 600;\">
\t\t\t\t\t\ta diverse range of
\t\t\t\t\t\tproducts, from luxurious cushions and rugs to
\t\t\t\t\t\texquisite poufs.</span> Explore collections that cater to every
\t\t\t\t\ttaste, allowing you to curate a selection that resonates
\t\t\t\t\twith your customer base.</p>
\t\t\t\t<button class=\"btn btn-primary mt-4\">Shop Now</button>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<img style=\"margin:auto;\" src=\"image/new/l1/41.png\" title=\"\" alt=\"\" class=\"img-responsive\" />
\t\t\t</div>
\t\t</div>
\t</div>


</section>
<section class=\"  text-center\" style=\"background: #fff;\">
\t<br><br>
\t<div class=\"container pt-5 pb-5\">
\t\t<div class=\"row\" style=\"    align-items: center;\">
\t\t\t<div class=\"col-md-12 text-center pb-5\" style=\"text-align: center;\">
\t\t\t\t<h1 style=\"color:#32baa1;    font-size: xxx-large;\">Artistry in every stitch</h1>
\t\t\t\t
\t\t\t\t
\t\t\t\t<h5 class=\"mt-2\">Read our blogs which connects you with our artistry</h5>
\t\t\t\t
\t\t\t</div>
\t\t\t<br>
\t\t\t
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
\t\t\t
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
\t\t\t
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
\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>


</section>
";
        // line 291
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
\t\t\t\t<div class=\"splide\" id=\"value\" role=\"group\" aria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t<ul class=\"splide__list\">

\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\"
\t\t\t\t\t\t\t\t\t\tstyle=\"width: 110px;background: white;    border-radius: 50%;padding: 20px;    margin: auto;\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<svg data-v-13a3f4da=\"\" viewBox=\"0 0 40 40\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 70px;background: transparent;\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-block h-10 w-10 fill-current icon icon--unique\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M37.8,20c-0.9-0.7-2.1-1.1-3.3-1.1l-0.2,0v0c-1.2,0-2.2,0.4-3.1,1.1L27,23.2c0,0-0.1,0-0.1-0.1c-0.9-0.7-2.1-1.1-3.3-1.1
\tl-9.9,0c-0.1,0-0.3,0.1-0.4,0.1l-7.1,5.4l0,0c-0.1-0.1-0.3-0.1-0.4-0.1c-0.1,0-0.3,0.1-0.4,0.1L2,30.2c-0.8,0.6-1.3,1.5-1.3,2.4
\tc0,0.9,0.5,1.8,1.3,2.4l4.2,3.2c0.8,0.6,1.9,1,2.9,1c1,0,2.1-0.3,2.9-1l3.3-2.6c0.1-0.1,0.2-0.3,0.3-0.4c0-0.1,0-0.2-0.1-0.4l10,0
\tc0,0,0,0,0,0c0.2,0,0.4-0.1,0.5-0.3l11.7-9.1c0.9-0.7,1.5-1.7,1.5-2.8C39.3,21.7,38.7,20.7,37.8,20z M13.9,33.6l-6.6-5.1l6.6-5.1
\th9.7c0.9,0,1.9,0.3,2.5,0.8c0.6,0.5,0.9,1.1,0.9,1.7c0,1.4-1.5,2.5-3.4,2.5h-6.8c-0.2,0-0.3,0.1-0.5,0.2c-0.1,0.1-0.2,0.3-0.2,0.5
\tc0,0.4,0.3,0.7,0.7,0.7h6.8c2.6,0,4.7-1.7,4.7-3.9c0-0.6-0.2-1.2-0.5-1.7l4.1-3.2c0.6-0.5,1.5-0.8,2.5-0.8c0.9,0,1.9,0.3,2.5,0.8
\tc0.6,0.5,0.9,1.1,0.9,1.7c0,0.6-0.3,1.2-0.9,1.7l-11.7,9.1L13.9,33.6z M13.8,35.2l-2.6,2c-1.1,0.9-3.1,0.9-4.2,0l-4.2-3.2
\tc-0.5-0.4-0.8-0.9-0.8-1.4c0-0.5,0.3-1,0.8-1.4L5.8,29L13.8,35.2z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17,17.3l12.7,0.5c0.4,0,0.7-0.3,0.7-0.6l0.4-10.9c0-0.4-0.3-0.7-0.6-0.7l-3.4-0.1l0-0.7c0-1-0.2-1.9-0.6-2.7
\tc-0.5-0.8-1.3-1.3-2.1-1.3c-0.9,0-1.7,0.4-2.2,1.1C21.3,2.5,21,3.4,21,4.5l0,0.7L17.5,5c-0.4,0-0.7,0.3-0.7,0.6l-0.4,10.9
\tC16.4,16.9,16.7,17.2,17,17.3z M21,8.1c0.1,0.1,0.3,0.2,0.5,0.2c0.3,0,0.7-0.3,0.7-0.6l0-1.1l3.2,0.1l0,1.1c0,0.4,0.3,0.7,0.6,0.7
\tc0,0,0,0,0,0c0.2,0,0.3-0.1,0.5-0.2c0.1-0.1,0.2-0.3,0.2-0.5l0-1.1l2.7,0.1l-0.4,9.5l-11.4-0.4l0.4-9.5l2.7,0.1l0,1.1
\tC20.8,7.8,20.9,8,21,8.1z M25.5,5.3l-3.2-0.1l0-0.7c0-0.7,0.2-1.4,0.6-1.8c0.3-0.4,0.7-0.6,1.1-0.6c0,0,0,0,0,0
\tc0.4,0,0.8,0.2,1.1,0.7c0.3,0.5,0.5,1.2,0.4,1.9L25.5,5.3z M24,1L24,1L24,1L24,1z\"></path>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.3,11.5c0.9,0.5,1.9,0.8,2.9,0.9c-0.4,0.9-0.5,2-0.5,3c-0.9-0.5-1.9-0.9-2.9-0.9C8,14,8.2,13.4,8.3,12.8
\tC8.3,12.4,8.3,11.9,8.3,11.5 M6.1,8c1.9,3,1.4,6.6-0.9,8.1c0.7-0.4,1.4-0.6,2.2-0.6c2,0,4.1,1.2,5.4,3.4c-1.9-3-1.4-6.6,0.9-8.1
\tc-0.7,0.4-1.4,0.6-2.2,0.6C9.6,11.4,7.5,10.2,6.1,8L6.1,8z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name1 mt-4\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:18px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\tNot sold on Amazon
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<p class=\"price mb-10 mt-2\" style=\"color:  #7b8a88;line-height: 1.2; \">


\t\t\t\t\t\t\t\t\t\tStand out from the crowd with products that are not on third-party
\t\t\t\t\t\t\t\t\t\tmarketplaces.


\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\"
\t\t\t\t\t\t\t\t\t\tstyle=\"width: 110px;background: white;    border-radius: 50%;padding: 20px;    margin: auto;\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<svg data-v-13a3f4da=\"\" viewBox=\"0 0 40 40\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 70px;background: transparent;\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-block h-10 w-10 fill-current icon icon--social-good\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M25.8,11.7v1.9c0,1.2,0.6,1.3,1.6,1.3h4.9v1.4C31.5,16.6,31,17.3,31,18l-8.8,2.2c-0.4-0.7-1.2-1.1-2-1.2
    c-1.4-0.1-2.7,0.9-2.8,2.4l-8.7,2.2c-0.2-0.4-0.6-0.6-1-0.8v-1.4h4.9c1,0,1.6-0.1,1.6-1.3v-1.9H0v1.9c0,1.2,0.6,1.3,1.6,1.3h4.9
    v1.4c-0.7,0.3-1.2,0.9-1.3,1.6c-0.1,1.1,0.7,2,1.7,2.1s2-0.7,2.1-1.7l8.6-2.2c0.1,0.1,0.1,0.3,0.2,0.4v9.3h-1.8
    c-1,0-1.3,0.3-1.3,1.3v0.6H11c-0.4,0-0.6,0.3-0.6,0.6s0.3,0.6,0.6,0.6H29c0.4,0,0.6-0.3,0.6-0.6s-0.3-0.6-0.6-0.6h-3.9v-0.6
    c0-1-0.3-1.3-1.3-1.3h-1.8v-9.3c0.3-0.4,0.5-1,0.5-1.5c0-0.1,0-0.1,0-0.1l8.7-2.2c0.2,0.4,0.6,0.6,1,0.8c1,0.3,2.1-0.2,2.5-1.2
    c0.3-1-0.2-2.1-1.2-2.5V15h4.9c1,0,1.6-0.1,1.6-1.3v-1.9H25.8z M32.3,18.2c0-0.1,0-0.2,0.1-0.2c0-0.1,0.1-0.2,0.2-0.3
    c0.1-0.1,0.2-0.1,0.4-0.1c0.1,0,0.3,0.1,0.4,0.1c0.2,0.1,0.3,0.3,0.3,0.5c0,0.4-0.3,0.6-0.6,0.6c-0.1,0-0.3-0.1-0.4-0.1
    c-0.1-0.1-0.2-0.2-0.2-0.4C32.3,18.3,32.3,18.2,32.3,18.2z M38.7,13v0.6H27.1V13H38.7z M16.1,34.3v-0.6h7.7v0.6H16.1z M21,20.7
    c0.1,0.1,0.2,0.2,0.2,0.4c0.1,0.1,0.1,0.3,0.1,0.4c0,0.7-0.6,1.3-1.3,1.3c-0.5,0-0.9-0.3-1.2-0.7c-0.1-0.1-0.1-0.3-0.1-0.4
    c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.3c0.1-0.6,0.7-1,1.3-1C20.4,20.3,20.7,20.5,21,20.7z M19.2,24c0.3,0.1,0.5,0.1,0.8,0.1
    c0.3,0,0.5,0,0.8-0.1v8.4h-1.6V24z M12.9,19.5v0.6H1.3v-0.6H12.9z M6.5,24.6c0-0.2,0.1-0.4,0.3-0.5C6.8,24,7,24,7.1,24
    c0.1,0,0.2,0,0.3,0.1v0.1h0.1c0.1,0.1,0.1,0.2,0.2,0.3c0,0,0,0.1,0,0.1c0,0.4-0.3,0.6-0.6,0.6S6.5,25,6.5,24.6z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.6,16.9h5c0.5,0,0.9-0.2,1.2-0.6c0.3-0.6,0.1-1.4-0.6-2.7c-0.2-0.3-0.3-0.5-0.4-0.8c-0.6-1.1-1-1.8-2.6-1.8
    c-1.6,0-2,0.7-2.7,1.9L4,13.7c-0.8,1.3-1,2.1-0.6,2.7C3.6,16.7,4.1,17,4.6,16.9z M7.1,12.4c0.9,0,0.9,0.1,1.5,1.2L9,14.3
    c0.3,0.4,0.5,0.8,0.6,1.3H4.6c0.1-0.5,0.3-0.9,0.6-1.3l0.4-0.8C6.1,12.5,6.2,12.4,7.1,12.4z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7.1,10.9c1.2,0,2.2-1,2.2-2.2s-1-2.2-2.2-2.2s-2.2,1-2.2,2.2S5.9,10.9,7.1,10.9z M7.1,7.8C7.6,7.9,8,8.2,8,8.7
    c0,0.5-0.4,0.9-0.9,0.9S6.2,9.2,6.2,8.7C6.2,8.2,6.6,7.8,7.1,7.8z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M37.9,4.4h-10v6.1h10V4.4z M29.2,9.2V5.7h7.4v3.5H29.2z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M32.9,6c-0.8,0-1.5,0.6-1.5,1.5s0.6,1.5,1.5,1.5c0.8,0,1.5-0.6,1.5-1.5S33.7,6,32.9,6z M32.9,7.9c-0.3,0-0.5-0.2-0.5-0.5
    S32.6,7,32.9,7c0.3,0,0.5,0.2,0.5,0.5C33.4,7.7,33.2,7.9,32.9,7.9z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name1 mt-4\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:18px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\tSocial Good
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<p class=\"price mb-10 mt-2\" style=\"color:  #7b8a88;line-height: 1.2; \">

\t\t\t\t\t\t\t\t\t\tSocial products contribute to the well-being of people, animals and our planet.

\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\"
\t\t\t\t\t\t\t\t\t\tstyle=\"width: 110px;background: white;    border-radius: 50%;padding: 20px;    margin: auto;\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<svg data-v-13a3f4da=\"\" viewBox=\"0 0 40 40\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 70px;background: transparent;\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-block h-10 w-10 fill-current icon icon--eco-friendly\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20,39.1c-0.2,0-0.4-0.1-0.6-0.3L4.1,22.5C-1,17.1-1.4,10,3.2,5.1c2.6-2.7,5.7-4.2,8.7-4.2
\tc3,0.1,5.8,1.3,7.9,3.5L20,4.5l0.1-0.1c2.1-2.1,4.9-3.4,7.9-3.5c3.1,0,6.2,1.5,8.7,4.2c4.6,4.8,4.2,12-0.9,17.4L20.6,38.9
\tC20.4,39,20.2,39.1,20,39.1z M20.8,36.3l13.9-14.9c4.5-4.8,4.8-11,0.9-15.2c-2.3-2.4-4.9-3.7-7.6-3.7s-5.2,1.3-7.5,3.7
\tc-0.2,0.2-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.6-0.2c-2.3-2.4-4.9-3.7-7.5-3.7S6.6,3.8,4.3,6.2c-3.9,4.2-3.6,10.5,0.9,15.2l14,14.9
\tV23.5H19c-0.5,0.1-0.9,0.1-1.4,0.1c-1.4,0-2.8-0.4-4-1.3c-1.9-1.5-2.8-4.1-2.7-7.9v-0.8h0.8c3.7,0.1,6.3,1.2,7.7,3.1l0.2,0.3
\tl0.2-0.3c0.2-0.7,0.6-1.4,1-2c1.8-2.5,5.2-3.8,10-4h0.8v0.8c0.1,4.9-1.1,8.3-3.5,10.2c-1.5,1.1-3.3,1.6-5.1,1.6
\tc-0.6,0-1.2-0.1-1.9-0.2l-0.2,0L20.8,36.3z M12.4,15.6c0.1,2.6,0.8,4.5,2.1,5.5c0.8,0.6,1.9,0.9,2.9,0.9h0.5L16,20.1
\tc-0.1-0.2-0.2-0.4-0.2-0.6c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.8-0.3,1.1,0c0,0,0,0,0,0l1.7,1.7v-0.5c0-0.9-0.3-1.7-0.8-2.4
\tc-1-1.4-2.8-2.2-5.4-2.4h-0.2L12.4,15.6z M24.3,16.4c0.4,0,0.8,0.4,0.8,0.8c0,0.2-0.1,0.4-0.2,0.5l-3.2,4h0.4c0.3,0,0.5,0,0.8,0
\tc1.5,0,3-0.4,4.2-1.3c1.9-1.5,2.8-4.1,2.9-7.9v-0.2h-0.2c-3.8,0.3-6.3,1.4-7.7,3.3c-0.8,1.1-1.1,2.5-1.1,3.8V20l2.7-3.4
\tC23.9,16.4,24.1,16.4,24.3,16.4L24.3,16.4z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name1 mt-4\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:18px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\tEco Friendly
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<p class=\"price mb-10 mt-2\" style=\"color:  #7b8a88;line-height: 1.2; \">

\t\t\t\t\t\t\t\t\t\tSustainability is a top priority for many of our brands.
\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\"
\t\t\t\t\t\t\t\t\t\tstyle=\"width: 110px;background: white;    border-radius: 50%;padding: 20px;    margin: auto;\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<svg data-v-13a3f4da=\"\" viewBox=\"0 0 40 40\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 70px;background: transparent;\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-block h-10 w-10 fill-current icon icon--handmade\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.6,40c-3,0-6-1.5-9.1-4.6c-5.7-5.7-5.2-12.5-2.9-17L10.4,3c0.4-0.9,1.2-1.5,2.1-1.8
\t\tc0.4-0.1,0.7-0.2,1.1-0.1c0.6,0,1.1,0.1,1.6,0.4c1.5,0.8,2.2,2.4,1.9,4.1v0.2l-0.1,0.2l-2.2,4.2l0.3,0.2l9.3-9.3
\t\tC26-0.3,28.2-0.4,29.7,1c0.4,0.4,0.7,0.8,0.9,1.3l0.1,0.3l0.3-0.3c1.4-1.4,3.7-1.4,5.1,0c1.2,1.2,1.4,3.1,0.4,4.6l-0.1,0.2l0.3,0.1
\t\tc0.5,0.2,1,0.4,1.4,0.8c1.4,1.4,1.4,3.7,0,5.1l-2.2,2.2l0.3,0.1c0.5,0.2,0.9,0.4,1.3,0.8c1.4,1.4,1.4,3.7,0,5.1L22.7,36
\t\tC20.1,38.7,17.4,40,14.6,40z M13.7,2.9c-0.2,0-0.4,0-0.6,0.1c-0.4,0.1-0.8,0.5-1,0.9L4.2,19.2c-2.6,5-1.5,11.1,2.6,14.9
\t\tc1.2,1.2,4.1,4.1,7.7,4.1c2.3,0,4.7-1.1,6.9-3.4L36,20.2c0.3-0.3,0.5-0.8,0.5-1.3c0-1-0.8-1.8-1.8-1.8c-0.5,0-0.9,0.2-1.2,0.5
\t\tl-5.3,5.3l-1.3-1.3l9.7-9.7c0.7-0.7,0.7-1.8,0-2.5c0,0,0,0,0,0c-0.3-0.3-0.8-0.5-1.3-0.5c-0.5,0-0.9,0.2-1.3,0.5l-9.7,9.7l-1.3-1.3
\t\tL34.8,6.1c0.3-0.3,0.5-0.8,0.5-1.3c0-0.5-0.2-0.9-0.5-1.3c-0.7-0.7-1.8-0.7-2.5,0L20.6,15.2l-1.3-1.3l9.1-9.1
\t\tc0.7-0.7,0.7-1.8,0-2.5c-0.3-0.3-0.8-0.5-1.3-0.5c-0.5,0-0.9,0.2-1.3,0.5l-14,14c-0.2,0.2-0.4,0.3-0.6,0.3c-0.1,0-0.3,0-0.4-0.1
\t\tl-0.1-0.1c-0.5-0.2-0.6-0.8-0.4-1.2l5-9.7c0.4-0.9,0.1-2-0.8-2.4C14.2,2.9,13.9,2.9,13.7,2.9L13.7,2.9z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.2,32.5c-0.3,0-0.5-0.1-0.7-0.3l-4.3-4.6c-1.7-1.8-1.8-4.2-0.3-5.9c0.8-0.9,1.8-1.4,3-1.4
\t\tc0.8,0,1.5,0.2,2.1,0.7l0.1,0.1l0.1-0.1c0.6-0.5,1.4-0.7,2.2-0.7c1.1,0,2.2,0.5,3,1.4c1.5,1.6,1.4,4.1-0.3,5.8l-4.3,4.6
\t\tC15.7,32.4,15.5,32.5,15.2,32.5z M12.9,22.2c-0.6,0-1.2,0.3-1.6,0.8c-1,1.1-0.6,2.4,0.3,3.3l3.6,3.9l3.6-3.9
\t\tc0.8-0.9,1.2-2.3,0.3-3.3c-0.4-0.5-1-0.8-1.6-0.8c-0.6,0-1.2,0.3-1.6,0.8c-0.4,0.4-1,0.4-1.3,0C14.1,22.6,13.6,22.3,12.9,22.2
\t\tL12.9,22.2z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name1 mt-4\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:18px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\tHandmade
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<p class=\"price mb-10 mt-2\" style=\"color:  #7b8a88;line-height: 1.2; \">

\t\t\t\t\t\t\t\t\t\tMake a difference with unique products that are created with great effort and
\t\t\t\t\t\t\t\t\t\tlove.

\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\"
\t\t\t\t\t\t\t\t\t\tstyle=\"width: 110px;background: white;    border-radius: 50%;padding: 20px;    margin: auto;\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<svg data-v-13a3f4da=\"\" viewBox=\"0 0 40 40\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 70px;background: transparent;\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-block h-10 w-10 fill-current icon icon--eco\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.2,40c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h2.2v-5l-4.2-4.2l-0.1,0c-1.1,0.4-2.2,0.7-3.4,0.7
\tc-1.1,0-2.3-0.3-3.3-0.8c-2.9-1.7-4.6-5.6-4.9-11.8l0-0.8l0.8,0.1c6.1,0.4,10.1,2,11.7,5c1.5,2.6,0.6,5.5,0.2,6.5l0,0.1l3.3,3.2
\tV17.3l-0.1-0.1c-1.1-0.5-3.7-1.8-4.5-4.8c-0.9-3.2,0.7-7.2,4.8-11.8L20,0l0.6,0.6c4.1,4.6,5.8,8.6,4.9,11.8
\tc-0.8,2.9-3.4,4.3-4.5,4.8l-0.1,0.1v14.1l3.1-3.1l0-0.1c-0.4-1.1-1.3-4,0.2-6.6c1.7-2.9,5.6-4.6,11.7-5l0.8-0.1l0,0.8
\tc-0.3,6.2-2,10.2-4.9,11.8c-1,0.6-2.1,0.9-3.3,0.9c-1.1,0-2.3-0.2-3.3-0.7L25,29.3l-4.1,4.2v5H23c0.4,0,0.7,0.3,0.7,0.7
\tc0,0.4-0.3,0.7-0.7,0.7L17.2,40z M5,18.3c0.4,5.1,1.8,8.3,4.1,9.6c0.8,0.4,1.7,0.7,2.6,0.6c0.7,0,1.4-0.1,2-0.3l0.3-0.1l-1.8-1.8
\tH9.3c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h1.5L7.8,22c-0.3-0.3-0.3-0.7,0-1c0,0,0,0,0,0c0.3-0.3,0.7-0.3,1,0l1.7,1.7v-1
\tc0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v2.5l2.9,2.9l0.1-0.3c0.5-1.5,0.3-3.1-0.4-4.5c-1.3-2.3-4.5-3.7-9.5-4.1H4.9L5,18.3z
\t M26.1,28.2l0.3,0.1c0.6,0.2,1.3,0.3,2,0.3c0.9,0,1.8-0.2,2.6-0.6c2.3-1.3,3.7-4.5,4.1-9.6v-0.2h-0.2c-5,0.4-8.2,1.8-9.5,4.1
\tc-0.7,1.4-0.8,3.1-0.4,4.6l0.1,0.3l2.9-2.9v-2.6c0-0.4,0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7v1.1l1.8-1.8c0.3-0.3,0.7-0.3,1,0
\tc0,0,0,0,0,0c0.3,0.3,0.3,0.7,0,1c0,0,0,0,0,0l-2.9,2.9h1.3c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7h-2.7L26.1,28.2z M22.3,9.9
\tc0.4,0,0.7,0.3,0.7,0.7c0,0.2-0.1,0.4-0.2,0.5l-2,2v2.6l0.3-0.2c1.4-0.7,2.5-2,2.9-3.5c0.7-2.6-0.6-5.8-3.9-9.7L20,2.2l-0.1,0.2
\tc-3.2,3.8-4.5,7.1-3.8,9.6c0.5,1.5,1.5,2.7,2.9,3.5l0.3,0.2v-4.2l-1.8-1.8c-0.3-0.3-0.3-0.7,0-1c0.1-0.1,0.3-0.2,0.5-0.2
\tc0.2,0,0.4,0.1,0.5,0.2l0.8,0.8V7c0-0.4,0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7v4.1l0.9-0.9C21.9,10,22.1,9.9,22.3,9.9z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name1 mt-4\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:18px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\tOrganic
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<p class=\"price mb-10 mt-2\" style=\"color:  #7b8a88;line-height: 1.2; \">

\t\t\t\t\t\t\t\t\t\tMany of our brands use natural or organic materials in their products.

\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 20px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\"
\t\t\t\t\t\t\t\t\t\tstyle=\"width: 110px;background: white;    border-radius: 50%;padding: 20px;    margin: auto;\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<svg data-v-13a3f4da=\"\" viewBox=\"0 0 40 40\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 70px;background: transparent;\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-block h-10 w-10 fill-current icon icon--locally-produced\">
\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20,0C13.6,0.1,8.4,5.3,8.5,11.8c0,1.3,0.2,2.7,0.7,3.9c0,0.1,0,0.2,0.1,0.3l10,23.6c0.2,0.4,0.6,0.6,1,0.4
\tc0.2-0.1,0.3-0.2,0.4-0.4l9.8-23.1c0-0.1,0.1-0.2,0.1-0.2l0.1-0.3c0-0.1,0.1-0.2,0.1-0.2c0.5-1.3,0.7-2.6,0.7-3.9
\tC31.6,5.4,26.4,0.1,20,0C20,0,20,0,20,0z M20.8,18.4l2.1-2.1c0.3-0.3,0.2-0.8-0.1-1.1c-0.3-0.3-0.7-0.3-1,0l-1,1v-4.4
\tc0-0.4-0.4-0.8-0.8-0.8s-0.8,0.4-0.8,0.8v2.6l-0.8-0.8c-0.3-0.3-0.8-0.3-1.1,0c0,0,0,0,0,0c-0.3,0.3-0.3,0.8,0,1.1l2,2v4.4
\tc-1.6-0.8-2.9-2.2-3.5-3.9C15,14.5,16.4,10.9,20,6.7c3.6,4.2,5,7.8,4.3,10.5c-0.6,1.7-1.8,3.1-3.5,3.9V18.4z M29.3,15.4
\tc0,0.1,0,0.1,0,0.2l-8.5,19.8V22.8c1.2-0.5,4.1-2,5-5.2c1-3.5-0.8-7.7-5.2-12.7l-0.6-0.7L19.4,5c-4.4,4.9-6.1,9.2-5.1,12.6
\tc0.9,3.1,3.7,4.7,5,5.2v12.5l-8.3-19.4v-0.1l-0.1-0.3c0-0.1,0-0.1,0-0.2c-0.4-1.1-0.7-2.4-0.7-3.6C10,6.2,14.4,1.7,20,1.6
\tc5.6,0.1,10,4.6,9.9,10.2C29.9,13,29.7,14.2,29.3,15.4z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name1 mt-4\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:18px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\tLove for Local
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<p class=\"price mb-10 mt-2\" style=\"color:  #7b8a88;line-height: 1.2; \">

\t\t\t\t\t\t\t\t\t\tDistinguish yourself locally with an assortment consisting of inspiring brands.
\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>




\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<div class=\"container separation pb-3\" style=\"background: #fcf4e6;\">
\t<div class=\"row\">
\t\t<div class=\"col-12\" style=\"margin-top:25px\">
\t\t\t<script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
\t\t\t<div class=\"elfsight-app-8674d6d0-1d23-4bf6-a003-4f998062b560\"></div>
\t\t</div>
\t</div>
</div>


<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
\t\tnew Splide('#shapeSlider', {
\t\t\ttype: 'loop',
\t\t\tdrag: 'free',
\t\t\tfocus: 'center',
\t\t\tperPage: 5,
\t\t\tspaceBetween: 30,
\t\t\tautoplay: true,

\t\t\tbreakpoints: {
\t\t\t\t240: {
\t\t\t\t\tperPage: 2,
\t\t\t\t\tspaceBetween: 5
\t\t\t\t},
\t\t\t\t640: {
\t\t\t\t\tperPage: 2,
\t\t\t\t\tspaceBetween: 5
\t\t\t\t},
\t\t\t\t767: {
\t\t\t\t\tperPage: 3,
\t\t\t\t\tspaceBetween: 5
\t\t\t\t},
\t\t\t\t1024: {
\t\t\t\t\tspaceBetween: 20,
\t\t\t\t\tperPage: 3,
\t\t\t\t},
\t\t\t},
\t\t\tfocus: \"center\",
\t\t}).mount();
\t\t// new arrival
\t\tnew Splide('#new', {
\t\t\ttype: 'loop',
\t\t\tdrag: 'free',
\t\t\tfocus: 'center',
\t\t\tperPage: 5,
\t\t\tautoplay: true,
\t\t\tspaceBetween: 30,
\t\t\tbreakpoints: {
\t\t\t\t240: {
\t\t\t\t\tperPage: 2,
\t\t\t\t\tspaceBetween: 5
\t\t\t\t},
\t\t\t\t640: {
\t\t\t\t\tperPage: 2,
\t\t\t\t\tspaceBetween: 5
\t\t\t\t},
\t\t\t\t767: {
\t\t\t\t\tperPage: 3,
\t\t\t\t\tspaceBetween: 5
\t\t\t\t},
\t\t\t\t1024: {
\t\t\t\t\tspaceBetween: 20,
\t\t\t\t\tperPage: 3,
\t\t\t\t},
\t\t\t},
\t\t\tfocus: \"center\",
\t\t}).mount();

\t\t// values

\t\tnew Splide('#value', {
\t\t\ttype: 'loop',
\t\t\tdrag: 'free',
\t\t\tfocus: 'center',
\t\t\tperPage: 5,
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
        // line 701
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
        return array (  801 => 701,  389 => 291,  282 => 186,  277 => 184,  273 => 183,  264 => 177,  259 => 175,  255 => 174,  246 => 168,  241 => 166,  237 => 165,  228 => 159,  223 => 157,  219 => 156,  211 => 151,  206 => 149,  202 => 148,  90 => 38,  81 => 35,  76 => 34,  72 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
