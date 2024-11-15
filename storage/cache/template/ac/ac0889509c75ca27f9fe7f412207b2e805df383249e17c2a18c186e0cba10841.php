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
class __TwigTemplate_3b82a8befa0a285a438487e2c0fd39b60c47f41036d45d4da6e1c9b95152e3b1 extends \Twig\Template
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
<section class=\"slider-area\" style=\"background:;\">
\t<div class=\"row\" style=\"    justify-content: space-around;\">

\t\t<div class=\"col-sm-12 text-center pt-5\">
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
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #3F817B; text-transform:uppercase\">
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
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #3F817B; text-transform:uppercase\">
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
\t\t\t\t\t<h2 class=\"p-2\" style=\"color:  #3F817B; text-transform:uppercase\">
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

";
        // line 114
        echo "<section class=\"container top-picks mt-5 mb-5\">
\t<div class=\" \">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h3 style=\"text-transform:uppercase;\">Top Picks</h3>
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div class=\"row mt-1\">
\t\t\t<div class=\"col-md-12\" style=\"padding:0 10px;\">
\t\t\t\t<div class=\"splide\" id=\"shapeSlider\" role=\"group\" aria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t";
        // line 127
        if (($context["products"] ?? null)) {
            // line 128
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 129
                echo "\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 10px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 132);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 133);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 138);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 139
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 141);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 141);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 142);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 142);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 143);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #ee378a; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #ee378a; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 150
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 151);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:14px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"price mb-10\" style=\"color:  #3F817B; \">
\t\t\t\t\t\t\t\t\t\t";
                    // line 159
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 159)) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap\" class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 163);
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #1677BC;display:none;\">";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source,                         // line 166
$context["product"], "percent", [], "any", false, false, false, 166);
                        // line 167
                        echo "%
\t\t\t\t\t\t\t\t\t\t\tOFF</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap;color: #3F817B;\" class=\"price-old\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 171);
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 176);
                echo "');\">ADD
\t\t\t\t\t\t\t\t\t\tTO
\t\t\t\t\t\t\t\t\t\tCART</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "\t\t\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"mb-2\">
\t<a href=\"index.php?route=common/collection\"><img src=\"image/banner/Banjara_Banner_101.jpg\" alt=\"\"></a>

</section>
<section class=\"container top-picks mt-5 mb-5\">
\t<div class=\" \">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h3 style=\"text-transform:uppercase;\">New Arrival</h3>
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div class=\"row mt-1\">
\t\t\t<div class=\"col-md-12\" style=\"padding:0 10px;\">
\t\t\t\t<div class=\"splide\" id=\"new\" role=\"group\" aria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t";
        // line 207
        if (($context["newproducts"] ?? null)) {
            // line 208
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["newproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 209
                echo "\t\t\t\t\t\t\t<li class=\"splide__slide\" style=\"padding: 0 10px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 212);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;\" src=\"";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 213);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 214);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 214);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive pthumb\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 218);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 219
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 219)) {
                    // line 220
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 220);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 221);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 221);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 222);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 222);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 223);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #ee378a; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #ee378a; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 230
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 231);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product_name\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:  #3F817B; font-size:14px;height:24px;overflow: hidden; text-transform:uppercase\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 234);
                echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 237
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 237)) {
                    // line 238
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"price mb-10\" style=\"color:  #3F817B; \">
\t\t\t\t\t\t\t\t\t\t";
                    // line 239
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 239)) {
                        // line 240
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 240);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 242
                        echo "\t\t\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap\" class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 243
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 243);
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #1677BC;display:none;\">";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source,                         // line 246
$context["product"], "percent", [], "any", false, false, false, 246);
                        // line 247
                        echo "%
\t\t\t\t\t\t\t\t\t\t\tOFF</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap;color: #3F817B;\" class=\"price-old\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 251);
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 254
                    echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 256
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 256);
                echo "');\">ADD
\t\t\t\t\t\t\t\t\t\tTO
\t\t\t\t\t\t\t\t\t\tCART</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "\t\t\t\t\t\t\t";
        }
        // line 263
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"container mt-5 mb-4 text-center\">

\t<h3 class=\"pt-2\" style=\"text-transform:uppercase;\">Shop By Category</h3>
\t<br>
\t<div class=\"row mt-1\">

\t\t<div class=\"col-md-3 col-sm-3 mb-3 mobile-padding-0\">

\t\t\t<a href=\"";
        // line 278
        echo ($context["gb1_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name3\">";
        // line 279
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 281
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>

\t\t</div>
\t\t<div class=\"col-md-3 col-sm-3 mb-3 mobile-padding-0\">
\t\t\t<a href=\"";
        // line 286
        echo ($context["gb2_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name3 \">";
        // line 287
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 289
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"zoom serv-img\" title=\"\" />
\t\t\t</a>
\t\t</div>


\t\t<div class=\"col-md-6 col-sm-6 mb-3 mobile-padding-0\">
\t\t\t<a href=\"";
        // line 295
        echo ($context["gb3_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name2 \">";
        // line 296
        echo ($context["gb3_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 298
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"zoom serv-img\" title=\"\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"col-md-6  text-center serv-name1 mb-3\" style=\"margin-top:-24%;\">
\t\t\t<a href=\"";
        // line 303
        echo ($context["gb4_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name2  \">";
        // line 304
        echo ($context["gb4_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 306
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-3  text-center serv-name1 mb-3\">
\t\t\t<a href=\"";
        // line 310
        echo ($context["gb5_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name2 \">";
        // line 311
        echo ($context["gb5_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 313
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-3  text-center serv-name1 mb-3\">
\t\t\t<a href=\"";
        // line 317
        echo ($context["gb6_link"] ?? null);
        echo "\">
\t\t\t\t<p class=\"serv-name2  \">";
        // line 318
        echo ($context["gb6_title"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t<img src=\"image/";
        // line 320
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img\" title=\"\" />
\t\t\t</a>
\t\t</div>


\t</div>
</section>
<section class=\" top-picks mt-5 mb-5 pt-4 \" style=\"background-color:rgb(245 243 238/1) ;\">
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


<div class=\"container separation pb-3\">
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
        // line 734
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
        return array (  1005 => 734,  588 => 320,  583 => 318,  579 => 317,  572 => 313,  567 => 311,  563 => 310,  556 => 306,  551 => 304,  547 => 303,  539 => 298,  534 => 296,  530 => 295,  521 => 289,  516 => 287,  512 => 286,  504 => 281,  499 => 279,  495 => 278,  478 => 263,  475 => 262,  462 => 256,  458 => 254,  452 => 251,  446 => 247,  444 => 246,  443 => 245,  438 => 243,  435 => 242,  429 => 240,  427 => 239,  424 => 238,  422 => 237,  416 => 234,  410 => 231,  407 => 230,  401 => 226,  395 => 223,  389 => 222,  383 => 221,  378 => 220,  376 => 219,  372 => 218,  363 => 214,  359 => 213,  355 => 212,  350 => 209,  345 => 208,  343 => 207,  317 => 183,  314 => 182,  301 => 176,  297 => 174,  291 => 171,  285 => 167,  283 => 166,  282 => 165,  277 => 163,  274 => 162,  268 => 160,  266 => 159,  263 => 158,  261 => 157,  255 => 154,  249 => 151,  246 => 150,  240 => 146,  234 => 143,  228 => 142,  222 => 141,  217 => 140,  215 => 139,  211 => 138,  202 => 134,  198 => 133,  194 => 132,  189 => 129,  184 => 128,  182 => 127,  167 => 114,  90 => 38,  81 => 35,  76 => 34,  72 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
