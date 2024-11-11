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
class __TwigTemplate_99c32b84e2cdc64ebe57a3d6d7780bca1012e67299a6b61b57860cd24ecf468d extends \Twig\Template
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
            echo "\t\t\t\t\t<div>

\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 20);
            echo "\">
\t\t\t\t\t\t\t<p class=\"serv-name11 \">Shop this
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 24);
            echo "\">
\t\t\t\t\t\t\t<p class=\"serv-name12 \">View All
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 28);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</div>
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
\t<div class=\"row md-pt-5 pb-md-5 pb-2 m-0\" style=\"    justify-content: space-around;\">

\t\t<div class=\"col-sm-12 text-center  md-pb-4\">
\t\t\t<img class=\"desk\" src=\"image/new/b1/sgb2.png\" alt=\"\" width=\"100%\">
\t\t\t<img class=\"mobl\" src=\"image/new/b1/sgb3.png\" alt=\"\" width=\"100%\">
\t\t</div>
\t\t<br>
\t\t<div class=\"col-md-3 col-6\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_63_151\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/51.png\" alt=\"\" title=\"\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_63_151\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tTraditional Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The vintage banjara home
\t\t\t\t\t\t\t\t\t\tdecor for your soul space.

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3 col-6\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_61_149\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/41.png\" alt=\"\" title=\"\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_61_149\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tLuxé Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The Intricate embroidered
\t\t\t\t\t\t\t\t\t\tcushion made with love.


\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3 col-6\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_126_150\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/11.png\" alt=\"\" title=\"\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_126_150\">
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #000; text-transform: capitalize;    font-weight: 200;\">
\t\t\t\t\t\tModern Saga
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t\t<div style=\"height: 1px;background: #eda941;\"></div>
\t\t\t\t<p style=\"font-size: 18px;padding:10px 0;\">The timeless motifs, infused
\t\t\t\t\t\t\t\t\t\twith a modern aesthetic

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"slider-area\" style=\" background-image: url('image/new/b1/71.png');background-size: contain;\">
\t<div class=\"row p-md-5 p-2 sth\" style=\"    justify-content: space-around;\">


\t\t<div class=\"col-md-6 d-flex text-center\" style=\"    justify-content: center;\">
\t\t\t<span><img style=\"margin:auto;width:50px;\" src=\"image/icons/new/41.png\" title=\"\" alt=\"\" class=\"img-responsive logo-home\"/></span>
\t\t\t<h1 class=\"p-2\" style=\"color:  #fff;text-transform: none;font-family: 'Radley', sans-serif;letter-spacing: 2.5px;font-weight: 500;\">
\t\t\t\tShop the Handmade
\t\t\t</h1>
\t\t\t<span><img style=\"margin:auto;width:50px;\" src=\"image/icons/new/41.png\" title=\"\" alt=\"\" class=\"img-responsive logo-home\"/></span>
\t\t</div>

\t</div>
</section>
<section class=\"  text-center\" style=\"background:#fcf5e7;\">

\t<div class=\"container pt-md-5 pb-md-4 pb-2\">
\t\t<div class=\"row pt-3 pb-3 sth1\" style=\"max-width: 90%;margin:auto;\">

\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 128
        echo ($context["gb1_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 130
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\"/>
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 131
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 138
        echo ($context["gb2_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 140
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\"/>
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 141
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 148
        echo ($context["gb3_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 150
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\"/>
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 151
        echo ($context["gb3_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 158
        echo ($context["gb4_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 160
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\"/>
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 161
        echo ($context["gb4_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 168
        echo ($context["gb5_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 170
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\"/>
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 171
        echo ($context["gb5_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 178
        echo ($context["gb6_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 180
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\"/>
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 181
        echo ($context["gb6_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>


\t\t\t<div class=\"col-md-8 m-auto pt-md-5 pb-md-5 pt-4 pb-3\">
\t\t\t\t<h1 class=\"pt-3\" style=\"color:#32baa1;font-family: 'Radley', serif;font-weight: 500;font-size: 45px;\">\"Chic, Crafted, Captivating
\t\t\t\t\t\t\t\t\t\t”
\t\t\t\t</h1>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<section class=\"  text-center\">
\t<div class=\"image\" style=\"position: relative;\">
\t\t<a href=\"index.php?route=product/category&path=72_145\">
\t\t\t<p class=\"serv-name7 \">View all
\t\t\t</p>
\t\t</a>
\t\t<img src=\"image/new/b1/8.jpg\" alt=\"\" width=\"100%\">

\t</div>


</section>
<section class=\"  text-center\">
\t<div class=\"image\" style=\"position: relative;\">

\t\t<a href=\"index.php?route=common/wholesale\" class=\"serv-name71\">
\t\t\t<button class=\"btn btn-primary mt-4\" style=\"padding:20px 50px;\">View All</button>
\t\t</a>
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


\t\t<div class=\"row mob1\" style=\" align-items: center;min-width:900px;position: absolute;top: 70%;left: 50%;transform: translate(-50%, -50%);\">

\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=common/Blog2\">
\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/6.png\" alt=\"\" title=\"\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=common/Blog2\">
\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;    min-height: 60px;\">
\t\t\t\t\t\tMeet the Hands
\t\t\t\t\t</h5>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=common/Blog1\">
\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/7.png\" alt=\"\" title=\"\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=common/Blog1\">
\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;    min-height: 60px;\">
\t\t\t\t\t\tHouse of Handmade luxé
\t\t\t\t\t</h5>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/8.png\" alt=\"\" title=\"\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"\">
\t\t\t\t\t<h5 class=\"p-2 mt-3\" style=\"color:  #000; text-transform: capitalize;    min-height: 60px;\">
\t\t\t\t\t\tSustainability and Eco-Friendliness

\t\t\t\t\t</h5>
\t\t\t\t</a>

\t\t\t</div>

\t\t</div>

\t\t<img src=\"image/new/b1/10.jpg\" alt=\"\" width=\"100%\">

\t</div>


</section>

";
        // line 308
        echo "<style>
\t@media only screen and(max-width:650px) {
\t\t.mob_img {
\t\t\tbackground-image: url('image/new/mob-img.png');
\t\t\tbackground-size: cover;
\t\t}
\t}
</style>


<section class=\" top-picks  md-pt-4 pt-5\" style=\"background-image: url('image/new/insta.png');background-size: cover;\">
\t<div class=\" container pt-5 md-pb-5 pb-4 mob_img\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h1 style=\"text-transform:none;color:#de4d71;font-size:55px;font-weight: 200;\">On the Gram @Banjarahome_</h1>
\t\t\t</div>
\t\t</div>

\t</div>
</section>

<style>
\t.eapps-instagram-feed-title {
\t\tdisplay: none !important;
\t}
\t#instagram-section {
  /* Add any additional styling for the Instagram section */
}

.instagram-post {
  position: relative;
  
}

.post-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8); /* Adjust the background color and transparency as needed */
  color: #fff; /* Adjust the text color as needed */
  padding: 20px;
  box-sizing: border-box;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease, visibility 0.3s ease;
}

.instagram-post:hover .post-overlay {
  opacity: 1;
  visibility: visible;
}
</style>
<div class=\" separation mobp1\" style=\"background: #fcf4e6;\">
\t<div class=\"container pb-3\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"margin-top:25px\">
\t\t\t\t";
        // line 367
        if (($context["instagram_data"] ?? null)) {
            // line 368
            echo "\t\t\t\t\t<div id=\"instagram-section\">
\t\t\t\t\t\t<h2>Instagram Feed</h2>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["instagram_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 372
                echo "\t\t\t\t\t\t\t\t<div class=\"col-md-3 p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"instagram-post\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 374
                echo twig_get_attribute($this->env, $this->source, $context["post"], "media_url", [], "any", false, false, false, 374);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "caption", [], "any", false, false, false, 374);
                echo "\" style=\"height: 100%;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-overlay m-0\" style=\"display: flex;    align-items: center;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row text-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<p style=\"width:30%;\"><i style=\"    font-size: 30px;\" class=\"fa fa-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 378
                echo twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 378);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"width:30%;\"><i style=\"    font-size: 30px;\" class=\"fa fa-comment\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 380
                echo twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 380);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mt-3\">";
                // line 381
                echo twig_slice($this->env, nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "caption", [], "any", false, false, false, 381), "html", null, true)), 0, 150);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 388
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 391
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script>
\tdocument.addEventListener('DOMContentLoaded', function () { // values

new Splide('#value', {
type: 'loop',
drag: 'free',
focus: 'center',
perPage: 3,
spaceBetween: 40,

autoScroll: {
speed: 1
},
breakpoints: {
240: {
perPage: 2,
spaceBetween: 10
},
640: {
perPage: 2,
spaceBetween: 5
},
767: {
perPage: 3,
spaceBetween: 20
},
1024: {
spaceBetween: 30,
perPage: 3
}
},
focus: \"center\"
}).mount(window.splide.Extensions);

})
</script>
";
        // line 433
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  575 => 433,  531 => 391,  526 => 388,  513 => 381,  509 => 380,  504 => 378,  495 => 374,  491 => 372,  487 => 371,  482 => 368,  480 => 367,  419 => 308,  290 => 181,  286 => 180,  281 => 178,  271 => 171,  267 => 170,  262 => 168,  252 => 161,  248 => 160,  243 => 158,  233 => 151,  229 => 150,  224 => 148,  214 => 141,  210 => 140,  205 => 138,  195 => 131,  191 => 130,  186 => 128,  87 => 31,  78 => 28,  71 => 24,  64 => 20,  60 => 18,  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
