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

/* default/template/common/header.twig */
class __TwigTemplate_2dbfa19e8f425ffdc3251a81b7db0ebcae1dc193c548b5eb84c103fc0bb7396a extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!-- [if IE]><![endif] -->
<!-- [if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif] -->
<!-- [if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif] -->
<!-- [if (gt IE 9)|!(IE)]><! -->
\t<html
\tdir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!-- <![endif] -->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<title>
\t\t\t";
        // line 13
        echo ($context["title"] ?? null);
        echo "
\t\t</title>
\t\t<base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 19
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 20
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 22
        echo "
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap\" rel=\"stylesheet\">

\t\t<!-- Bootstrap CSS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"> </script>
    <script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js\"> </script>
  
    <link href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css\" rel=\"stylesheet\" />
<script src=\"<?php echo base_url(); ?>/assets/js/splide-extension-auto-scroll.js\"></script>
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\"/>
\t\t<!-- Pe-icon-7-stroke CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\"/>
\t\t<!-- Font-awesome CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\"/>
\t\t<!-- Slick slider css -->
\t\t<link rel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/slick-theme.css\"/>
\t\t<!-- animate css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/animate.css\"/>
\t\t<!-- Nice Select css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\"/>
\t\t<!-- jquery UI css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\"/>
\t\t<!-- main style css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/style.css?v1.1\"/>
\t\t<!-- jQuery JS -->
\t\t<script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>
\t\t<style>
\t\t\t.btn {
\t\t\t\tpadding: 14px 30px;
\t\t\t}
\t\t\tbody,
\t\t\thtml {
\t\t\t\toverflow-x: hidden;
\t\t\t}
\t\t\t.h3{
\t\t\t\tfont-size:30px;
\t\t\t}
\t\t\t@media screen and(max-width:650px) {
\t\t\t\t.desktop-menu ul li a {
\t\t\t\t\tcolor: #333;
\t\t\t\t\tfont-size: 14px;
\t\t\t\t}
\t\t\t}
\t\t\t.price-old {
\t\t\t\ttext-decoration: line-through;

\t\t\t}
\t\t\t.wishlist_link {
    position: absolute;
    top: 15px;
    right: 25px;
    border-radius: 50%;
    background: rgb(255, 255, 255, 0.5);
    cursor: pointer;
    width: 37px;
    height: 37px;
    text-align: center;
}
.wishlist_link .pe-7s-like{
\t    line-height: 38px;
}
.alert-success {
    width: 22%;
    position: fixed;
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
\t    left: 35%;
    top: 16%;
    z-index: 99;
}
\t\t</style>
\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 108
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 108);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 108);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 108);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 111
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 115
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 115);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 115);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 118
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t<link rel=\"stylesheet\" href=\"assets/css/edit.css\"/>
\t</head>
\t<body>
\t\t<!-- Start Header Area -->
\t\t<header
\t\t\tclass=\"header-area\">
\t\t\t<!-- main header start -->
\t\t\t<div
\t\t\t\tclass=\"main-header sticky \" id=\"header\">
\t\t\t\t<!-- header middle area start -->
\t\t\t\t<div class=\"header-main-area\">
\t\t\t\t\t<div class=\"top-strip\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-7 text-end\" style=\"    text-align: end;\">
\t\t\t\t\t\t\t\t\t<p style=\"color:black;\">GET 15% DISCOUNT ON YOUR FIRST PURCHASE. USE CODE:<span class=\"color:black;font-weight: 600;font-size: 16px;\">FIRST15</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-5 text-right\">
\t\t\t\t\t\t\t\t\t<p style=\"color:black;\">info@banjarahome.com &nbsp;&nbsp;&nbsp; +91-9001709690</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row align-items-center ptb-5\">

\t\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t\t<div class=\"col-lg-2 text-center\">
\t\t\t\t\t\t\t\t<div style=\"width:180px\" id=\"logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 151
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto\" src=\"";
        // line 152
        echo ($context["logo"] ?? null);
        echo "\" title=\"\" alt=\"\" class=\"img-responsive logo-home\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- start logo area -->

\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<div class=\"main-menu-area\">
\t\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 161
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t<div style=\"max-width:200px; float:right\" class=\"header-right d-flex align-items-center justify-content-end w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"header-configure-area w-100\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav justify-content-space-around w-100\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header-search-container mr-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"search-trigger d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"header-search-box d-none animated fadeInLeft\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search_top\" placeholder=\"Search\" class=\"header-search-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"search_icon_top header-search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 182
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 186
        if (($context["logged"] ?? null)) {
            // line 187
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 188
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 191
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 194
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 197
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 198
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 201
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 204
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 207
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 212
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 215
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- header middle area end -->
\t\t\t</div>
\t\t\t<!-- main header start -->
\t\t\t<!-- mobile header start -->
\t\t\t<!-- mobile header start -->
\t\t\t\t<div
\t\t\t\tclass=\"mobile-header d-lg-none d-md-block sticky\"> <!-- mobile header top start -->
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"mobile-main-header\">
\t\t\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 240
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 241
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">
\t\t\t\t\t\t\t\t\t<div class=\"mini-cart-wrap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 246
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 249
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"mobile-menu-btn\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- mobile header top start -->
\t\t\t</div>
\t\t\t<!-- mobile header end -->
\t\t\t<!-- mobile header end -->
\t\t\t<!-- offcanvas mobile menu start -->
\t\t\t<!-- off-canvas menu start -->
\t\t\t\t<aside class=\"off-canvas-wrapper\"> <div class=\"off-canvas-overlay\"></div>
\t\t\t\t<div class=\"off-canvas-inner-content\">
\t\t\t\t\t<div class=\"btn-close-off-canvas\">
\t\t\t\t\t\t<i class=\"pe-7s-close\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"off-canvas-inner\">
\t\t\t\t\t\t<!-- search box start -->
\t\t\t\t\t\t<div class=\"search-box-offcanvas\">
\t\t\t\t\t\t\t";
        // line 278
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- search box end -->
\t\t\t\t\t\t<!-- mobile menu start -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"mobile-navigation\">
\t\t\t\t\t\t\t<!-- mobile menu navigation start -->
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t";
        // line 286
        echo ($context["mob_menu"] ?? null);
        echo "
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<!-- mobile menu navigation end -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- mobile menu end -->
\t\t\t\t\t\t<div class=\"mobile-settings\">
\t\t\t\t\t\t\t<ul class=\"nav\">

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown mobile-top-dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" id=\"myaccount\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 301
        if (($context["logged"] ?? null)) {
            // line 302
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 303
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 306
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 309
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 312
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 313
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 316
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 319
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- offcanvas widget area start -->
\t\t\t\t\t\t<div class=\"offcanvas-widget-area\">
\t\t\t\t\t\t\t<div class=\"off-canvas-contact-widget\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"> +91-9001709690</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">info@banjarahome.com</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- offcanvas widget area end -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t";
        // line 342
        echo ($context["slide_cart"] ?? null);
        echo "
\t\t\t</header>
\t\t\t<script>
\t\t\t\t\$(document).ready(function () {
\$(\".close-offer-strip\").click(function () {
\$(\".top-strip\").slideUp();
})
})
\t\t\t</script>
 
      <script>
                                \$('.search-btn-mobile').click(function(e) {
                                    e.preventDefault();
                                    if (\$(this).prev().val() != \"\") {
                                        location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(this).prev().val()) + '&description=true';
                                    }
                                })

                                 \$('.header-search-btn').click(function(e) {
                                    e.preventDefault();
                                    if (\$(\"#search_top\").val() != \"\") {
                                        location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(\"#search_top\").val()) + '&description=true';
                                    }
                                })
                            </script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 342,  548 => 319,  540 => 316,  532 => 313,  529 => 312,  521 => 309,  513 => 306,  505 => 303,  502 => 302,  500 => 301,  482 => 286,  471 => 278,  439 => 249,  433 => 246,  425 => 241,  421 => 240,  393 => 215,  387 => 212,  377 => 207,  372 => 204,  364 => 201,  356 => 198,  353 => 197,  345 => 194,  337 => 191,  329 => 188,  326 => 187,  324 => 186,  315 => 182,  291 => 161,  279 => 152,  275 => 151,  242 => 120,  233 => 118,  228 => 117,  217 => 115,  213 => 114,  210 => 113,  201 => 111,  196 => 110,  183 => 108,  179 => 107,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
