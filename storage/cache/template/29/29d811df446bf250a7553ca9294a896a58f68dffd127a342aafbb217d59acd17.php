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
class __TwigTemplate_7a09a7f2226a642d74e9445c7ab4f60b409e649944168ceaaad305c9487ab7b5 extends \Twig\Template
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 17
            echo "\t\t\t\t<div>

\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 19);
            echo "\">
\t\t\t\t\t\t<p class=\"serv-name11 \">Shop this
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 23);
            echo "\">
\t\t\t\t\t\t<p class=\"serv-name12 \">View All
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 27);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/51.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_63_151\">
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
\t\t<div class=\"col-md-3 col-6\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_61_149\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/41.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_61_149\">
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
\t\t<div class=\"col-md-3 col-6\">
\t\t\t<div class=\"product-card text-center\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=60_126_150\">
\t\t\t\t\t\t<img style=\"z-index: 99999999;\" src=\"image/new/l1/11.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<a href=\"index.php?route=product/category&path=60_126_150\">
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
\t<div class=\"row p-md-5 p-2 sth\" style=\"    justify-content: space-around;\">


\t\t<div class=\"col-md-6 d-flex text-center\" style=\"    justify-content: center;\">
\t\t\t<span><img style=\"margin:auto;width:50px;\" src=\"image/icons/new/41.png\" title=\"\" alt=\"\"
\t\t\t\t\tclass=\"img-responsive logo-home\" /></span>
\t\t\t<h1 class=\"p-2\"
\t\t\t\tstyle=\"color:  #fff;text-transform: none;font-family: 'Radley', sans-serif;letter-spacing: 2.5px;font-weight: 500;\">
\t\t\t\tShop the Handmade
\t\t\t</h1>
\t\t\t<span><img style=\"margin:auto;width:50px;\" src=\"image/icons/new/41.png\" title=\"\" alt=\"\"
\t\t\t\t\tclass=\"img-responsive logo-home\" /></span>
\t\t</div>

\t</div>
</section>
<section class=\"  text-center\" style=\"background:#fcf5e7;\">

\t<div class=\"container pt-md-5 pb-md-4 pb-2\">
\t\t<div class=\"row pt-3 pb-3 sth1\" style=\"max-width: 90%;margin:auto;\">

\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 133
        echo ($context["gb1_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 135
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 136
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 143
        echo ($context["gb2_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 145
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 146
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 153
        echo ($context["gb3_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 155
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 156
        echo ($context["gb3_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 163
        echo ($context["gb4_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 165
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 166
        echo ($context["gb4_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 173
        echo ($context["gb5_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 175
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 176
        echo ($context["gb5_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 183
        echo ($context["gb6_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 185
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 186
        echo ($context["gb6_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>


\t\t\t<div class=\"col-md-8 m-auto pt-md-5 pb-md-5 pt-4 pb-3\">
\t\t\t\t<h1 class=\"pt-3\" style=\"color:#32baa1;font-family: 'Radley', serif;font-weight: 500;font-size: 45px;\">
\t\t\t\t\t\"Chic, Crafted, Captivating
\t\t\t\t\t”
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


\t\t<div class=\"row mob1\"
\t\t\tstyle=\" align-items: center;min-width:900px;position: absolute;top: 70%;left: 50%;transform: translate(-50%, -50%);\">

\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"index.php?route=common/Blog2\">
\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/6.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
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
\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/7.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
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
\t\t\t\t\t\t<img style=\"width:95%;\" src=\"image/icons/new/8.png\" alt=\"\" title=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
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
        // line 318
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
\t\t\t\t<h1 style=\"text-transform:none;color:#de4d71;font-size:55px;font-weight: 200;\">On the Gram @Banjarahome_
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t</div>
</section>

<style>
\t.eapps-instagram-feed-title {
\t\tdisplay: none !important;
\t}

\t#instagram-section {
\t\t/* Add any additional styling for the Instagram section */
\t}

\t.instagram-post {
\t\tposition: relative;

\t}

\t.post-overlay {
\t\tposition: absolute;
\t\ttop: 0;
\t\tleft: 0;
\t\twidth: 100%;
\t\theight: 100%;
\t\tbackground: rgba(0, 0, 0, 0.8);
\t\t/* Adjust the background color and transparency as needed */
\t\tcolor: #fff;
\t\t/* Adjust the text color as needed */
\t\tpadding: 20px;
\t\tbox-sizing: border-box;
\t\topacity: 0;
\t\tvisibility: hidden;
\t\ttransition: opacity 0.3s ease, visibility 0.3s ease;
\t}

\t.instagram-post:hover .post-overlay {
\t\topacity: 1;
\t\tvisibility: visible;
\t}
</style>
<div class=\" separation mobp1\" style=\"background: #fcf4e6;\">
\t<div class=\"container pb-3\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"margin-top:25px\">
\t\t\t\t";
        // line 381
        if (($context["instagram_data"] ?? null)) {
            // line 382
            echo "\t\t\t\t<div id=\"instagram-section\">
\t\t\t\t\t<h2></h2>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["instagram_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 386
                echo "\t\t\t\t\t\t<div class=\"col-md-4 p-2\">
\t\t\t\t\t\t\t<div class=\"instagram-post\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 388
                echo twig_get_attribute($this->env, $this->source, $context["post"], "permalink", [], "any", false, false, false, 388);
                echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t";
                // line 389
                if (twig_get_attribute($this->env, $this->source, $context["post"], "is_video", [], "any", false, false, false, 389)) {
                    // line 390
                    echo "\t\t\t\t\t\t\t\t\t<!-- Video tag or other video handling logic -->
\t\t\t\t\t\t\t\t\t<video controls style=\"width: 100%;\">
\t\t\t\t\t\t\t\t\t\t<source src=\"";
                    // line 392
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "media_url", [], "any", false, false, false, 392);
                    echo "\" type=\"video/mp4\">
\t\t\t\t\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 396
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "media_url", [], "any", false, false, false, 396);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "caption", [], "any", false, false, false, 396);
                    echo "\" style=\"width: 100%;\">
\t\t\t\t\t\t\t\t\t";
                }
                // line 398
                echo "
\t\t\t\t\t\t\t\t\t<!-- Add other post information as needed -->
\t\t\t\t\t\t\t\t\t<div class=\"post-overlay m-0\" style=\"display: none; align-items: center;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row text-center justify-content-center p-4\">
\t\t\t\t\t\t\t\t\t\t\t<p style=\"width:30%;\"><i style=\"font-size: 30px;\" class=\"fa fa-heart\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 404
                echo twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 404);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mt-3\">";
                // line 405
                echo twig_slice($this->env, nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "caption", [], "any", false, false, false, 405), "html", null, true)), 0, 150);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 412
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 415
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script>
\tdocument.addEventListener('DOMContentLoaded', function () { // values

\t\tnew Splide('#value', {
\t\t\ttype: 'loop',
\t\t\tdrag: 'free',
\t\t\tfocus: 'center',
\t\t\tperPage: 3,
\t\t\tspaceBetween: 40,

\t\t\tautoScroll: {
\t\t\t\tspeed: 1
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
\t\t\t\t\tperPage: 3
\t\t\t\t}
\t\t\t},
\t\t\tfocus: \"center\"
\t\t}).mount(window.splide.Extensions);

\t})
</script>
";
        // line 457
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
        return array (  608 => 457,  564 => 415,  559 => 412,  546 => 405,  542 => 404,  534 => 398,  526 => 396,  519 => 392,  515 => 390,  513 => 389,  509 => 388,  505 => 386,  501 => 385,  496 => 382,  494 => 381,  429 => 318,  295 => 186,  291 => 185,  286 => 183,  276 => 176,  272 => 175,  267 => 173,  257 => 166,  253 => 165,  248 => 163,  238 => 156,  234 => 155,  229 => 153,  219 => 146,  215 => 145,  210 => 143,  200 => 136,  196 => 135,  191 => 133,  86 => 30,  77 => 27,  70 => 23,  63 => 19,  59 => 17,  55 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
