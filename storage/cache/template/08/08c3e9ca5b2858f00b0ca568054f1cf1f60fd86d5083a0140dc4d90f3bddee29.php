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
class __TwigTemplate_2890339c6e0ca9b01b6e53303060fe10bbd79e936b74c4fcba649bc3bc5ec63d extends \Twig\Template
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
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!-- <![endif] -->

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t<title>
\t\t";
        // line 13
        echo ($context["title"] ?? null);
        echo "
\t</title>
\t<base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\" />
\t";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t";
        }
        // line 19
        echo "\t";
        if (($context["keywords"] ?? null)) {
            // line 20
            echo "\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t";
        }
        // line 22
        echo "
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap\" rel=\"stylesheet\">

\t<!-- Bootstrap CSS -->
\t<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
\t<script
\t\tsrc=\"https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js\"></script>

\t<link href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css\" rel=\"stylesheet\" />
\t<script src=\"<?php echo base_url(); ?>/assets/js/splide-extension-auto-scroll.js\"></script>
\t<link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\" />
\t<!-- Pe-icon-7-stroke CSS -->
\t<link rel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\" />
\t<!-- Font-awesome CSS -->
\t<link rel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\" />
\t<!-- Slick slider css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\" />
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/slick-theme.css\" />
\t<!-- animate css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/animate.css\" />
\t<!-- Nice Select css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\" />
\t<!-- jquery UI css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\" />
\t<!-- main style css -->
\t<link rel=\"stylesheet\" href=\"assets/css/style.css?v1.1\" />
\t<!-- jQuery JS -->
\t<script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>
\t<style>
\t\t.btn {
\t\t\tpadding: 14px 30px;
\t\t}

\t\tbody,
\t\thtml {
\t\t\toverflow-x: hidden;
\t\t}

\t\t.h3 {
\t\t\tfont-size: 30px;
\t\t}

\t\t@media screen and (max-width:650px) {
\t\t\t.desktop-menu ul li a {
\t\t\t\tcolor: #333;
\t\t\t\tfont-size: 14px;
\t\t\t}
\t\t\t.serv-name11 {
\t\t\t\t
\t\t\t\ttop: 75% !important;
\t\t\t\tleft: 25% !important;
\t\t\t\t
\t\t\t\tpadding: 10px 35px;
\t\t\t\t
\t\t\t\tfont-size: 15px !important;
\t\t\t\t
\t\t\t\tmin-width: 100px !important;
\t\t\t\t
\t\t\t}


\t\t}

\t\t.price-old {
\t\t\ttext-decoration: line-through;

\t\t}

\t\t.wishlist_link {
\t\t\tposition: absolute;
\t\t\ttop: 15px;
\t\t\tright: 25px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: rgb(255, 255, 255, 0.5);
\t\t\tcursor: pointer;
\t\t\twidth: 37px;
\t\t\theight: 37px;
\t\t\ttext-align: center;
\t\t}

\t\t.wishlist_link .pe-7s-like {
\t\t\tline-height: 38px;
\t\t}

\t\t.alert-success {
\t\t\twidth: 22%;
\t\t\tposition: fixed;
\t\t\tcolor: #155724;
\t\t\tbackground-color: #d4edda;
\t\t\tborder-color: #c3e6cb;
\t\t\ttext-align: center;
\t\t\tleft: 35%;
\t\t\ttop: 16%;
\t\t\tz-index: 99;
\t\t}
\t</style>
\t";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 121
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 121);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 121);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 121);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 124
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 128
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 128);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 128);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 131
            echo "\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t<link rel=\"stylesheet\" href=\"assets/css/edit.css\" />
</head>

<body>
\t<!-- Start Header Area -->
\t<header class=\"header-area\">
\t\t<!-- main header start -->
\t\t";
        // line 141
        echo "\t\t\t<div class=\"main-header \" id=\"header\"> <!-- header middle area start -->
\t\t\t\t<div class=\"header-main-area\">
\t\t\t\t\t<div class=\"top-strip\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row p-3\">
\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\" style=\"    text-align: end;\">
\t\t\t\t\t\t\t\t\t<p style=\"color:#fff;\">GET 15% DISCOUNT ON YOUR FIRST PURCHASE. USE CODE :
\t\t\t\t\t\t\t\t\t\t<span class=\"color:#eda941;font-weight: 600;font-size: 20px;\">FIRST15</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row align-items-center ptb-5\">

\t\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t\t<div class=\"col-md-3 text-center p-3\">
\t\t\t\t\t\t\t\t<div style=\"width:160px\" id=\"logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 161
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto\" src=\"";
        // line 162
        echo ($context["logo"] ?? null);
        echo "\" title=\"\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive logo-home\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- start logo area -->

\t\t\t\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t\t\t\t<div class=\"main-menu-area\">
\t\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 172
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div style=\"max-width:80%; float:right\"
\t\t\t\t\t\t\t\t\tclass=\"header-right d-flex align-items-center justify-content-end w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"header-configure-area w-100\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav justify-content-space-around w-100\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header-search-container mr-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"search-trigger d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/3.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive logo-home\" />
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"header-search-box d-none animated fadeInLeft\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search_top\" placeholder=\"Search\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"header-search-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"search_icon_top header-search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/3.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive logo-home\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 198
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/2.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive \" />
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 203
        if (($context["logged"] ?? null)) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 205
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 208
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 211
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 214
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 215
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 218
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 224
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 225
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/w.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive \" />
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 232
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/1.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive \" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 236
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
\t\t\t
\t\t\t<div class=\"mobile-header d-lg-none d-md-block sticky\"> <!-- mobile header top start -->
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-12 top-strip\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row p-1\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\" style=\"    text-align: end;\">
\t\t\t\t\t\t\t\t\t\t<p style=\"color:#fff;font-size: 12px;\">GET 15% DISCOUNT ON YOUR FIRST PURCHASE. USE CODE :
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight: 600;font-size: 12px;\">FIRST15</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"mobile-main-header\">
\t\t\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 270
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 271
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">
\t\t\t\t\t\t\t\t\t<div class=\"mini-cart-wrap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\"
\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 277
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 280
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"padding-left: 10px;\"><a href=\"";
        // line 284
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"
\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 285
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:25px;\" src=\"image/icons/new/w.png\"
\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive \" />
\t\t\t\t\t\t\t\t\t</a></div>
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
\t\t\t<aside class=\"off-canvas-wrapper\">
\t\t\t\t<div class=\"off-canvas-overlay\"></div>
\t\t\t\t<div class=\"off-canvas-inner-content\">
\t\t\t\t\t<div class=\"btn-close-off-canvas\">
\t\t\t\t\t\t<i class=\"pe-7s-close\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"off-canvas-inner\">
\t\t\t\t\t\t<!-- search box start -->
\t\t\t\t\t\t<div class=\"search-box-offcanvas\">
\t\t\t\t\t\t\t";
        // line 314
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- search box end -->
\t\t\t\t\t\t<!-- mobile menu start -->
\t\t\t\t\t\t<div class=\"mobile-navigation\">
\t\t\t\t\t\t\t<!-- mobile menu navigation start -->
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t";
        // line 321
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
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" id=\"myaccount\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 337
        if (($context["logged"] ?? null)) {
            // line 338
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 339
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 342
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 345
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 348
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 349
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 352
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 355
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
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t+91-9001709690</a>
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
\t\t\t</aside>
\t\t\t";
        // line 379
        echo ($context["slide_cart"] ?? null);
        echo "
\t</header>
\t<script>
\t\t\$(document).ready(function () {
\t\t\t\$(\".close-offer-strip\").click(function () {
\t\t\t\t\$(\".top-strip\").slideUp();
\t\t\t})
\t\t})
\t</script>

\t<script>
\t\t\$('.search-btn-mobile').click(function (e) {
\t\t\te.preventDefault();
\t\t\tif (\$(this).prev().val() != \"\") {
\t\t\t\tlocation = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(this).prev().val()) + '&description=true';
\t\t\t}
\t\t})

\t\t\$('.header-search-btn').click(function (e) {
\t\t\te.preventDefault();
\t\t\tif (\$(\"#search_top\").val() != \"\") {
\t\t\t\tlocation = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(\"#search_top\").val()) + '&description=true';
\t\t\t}
\t\t})
\t\t\$('.bot_btn').click(function (e) {
\t\t\tconsole.log(\"bt\");
\t\t\te.preventDefault();
\t\t\tif (\$(\"#search_bot\").val() != \"\") {
\t\t\t\tlocation = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(\"#search_bot\").val()) + '&description=true';
\t\t\t}
\t\t})
\t\t\$('.bot_btn').click(function (e) {
\t\t\te.preventDefault();
\t\t\tif (\$(this).prev().val() != \"\") {
\t\t\t\tlocation = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(this).prev().val()) + '&description=true';
\t\t\t}
\t\t})
\t</script>";
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
        return array (  618 => 379,  592 => 355,  584 => 352,  576 => 349,  573 => 348,  565 => 345,  557 => 342,  549 => 339,  546 => 338,  544 => 337,  525 => 321,  515 => 314,  483 => 285,  479 => 284,  472 => 280,  466 => 277,  457 => 271,  453 => 270,  416 => 236,  409 => 232,  399 => 225,  395 => 224,  390 => 221,  382 => 218,  374 => 215,  371 => 214,  363 => 211,  355 => 208,  347 => 205,  344 => 204,  342 => 203,  332 => 198,  303 => 172,  290 => 162,  286 => 161,  264 => 141,  255 => 133,  246 => 131,  241 => 130,  230 => 128,  226 => 127,  223 => 126,  214 => 124,  209 => 123,  196 => 121,  192 => 120,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
