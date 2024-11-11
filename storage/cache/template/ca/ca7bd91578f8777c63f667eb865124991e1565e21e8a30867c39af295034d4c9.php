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
class __TwigTemplate_2879afff38e8506c2a7b031fb33a33c42053fe2c976b7def534ed775b7f09ae5 extends \Twig\Template
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
        // line 14
        echo ($context["title"] ?? null);
        echo "
\t\t</title>
\t\t<base href=\"";
        // line 16
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 23
        echo "
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap\" rel=\"stylesheet\">

\t\t<!-- Bootstrap CSS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js\"></script>

\t\t<link href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css\" rel=\"stylesheet\"/>
\t\t<script src=\"<?php echo base_url(); ?>/assets/js/splide-extension-auto-scroll.js\"></script>
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
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">

\t\t<script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Radley:ital,wght@1,400&display=swap\" rel=\"stylesheet\">
\t\t<style>
\t\t\t.btn {
\t\t\t\tpadding: 14px 30px;
\t\t\t}

\t\t\tbody,
\t\t\thtml {
\t\t\t\toverflow-x: hidden;
\t\t\t}

\t\t\t.h3 {
\t\t\t\tfont-size: 30px;
\t\t\t}
\t\t\t.desk {
\t\t\t\tdisplay: block;
\t\t\t}
\t\t\t.mobl {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t@media only screen and (max-width:650px) {
\t\t\t\t.desk {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t\t.mobl {
\t\t\t\t\tdisplay: block;
\t\t\t\t}
\t\t\t\t.desktop-menu ul li a {
\t\t\t\t\tcolor: #333;
\t\t\t\t\tfont-size: 14px;
\t\t\t\t}

\t\t\t\t.serv-name11 {

\t\t\t\t\ttop: 75% !important;
\t\t\t\t\tleft: 32% !important;

\t\t\t\t\tpadding: 5px 20px !important;

\t\t\t\t\tfont-size: 13px !important;

\t\t\t\t\tmin-width: 100px !important;

\t\t\t\t}

\t\t\t\t.serv-name12 {

\t\t\t\t\ttop: 75% !important;
\t\t\t\t\tleft: 70% !important;

\t\t\t\t\tpadding: 5px 20px !important;

\t\t\t\t\tfont-size: 13px !important;

\t\t\t\t\tmin-width: 100px !important;

\t\t\t\t}

\t\t\t\th1,
\t\t\t\th2,
\t\t\t\th3 {
\t\t\t\t\tfont-size: 18px !important;
\t\t\t\t}

\t\t\t\tp {
\t\t\t\t\tfont-size: 14px !important;
\t\t\t\t}
\t\t\t\t.sth span img {
\t\t\t\t\twidth: 35px !important;
\t\t\t\t}
\t\t\t\t.sth1 {
\t\t\t\t\tmax-width: 100% !important;
\t\t\t\t}
\t\t\t\t.serv-name7 {
\t\t\t\t\tmin-width: 100px !important;
\t\t\t\t\tpadding: 5px 20px !important;
\t\t\t\t\t    font-size: 13px !important;
\t\t\t\t}
\t\t\t\t.btn-primary {
\t\t\t\t\tfont-size: 15px !important;
\t\t\t\t\tpadding: 8px 15px !important;
\t\t\t\t}
\t\t\t\t.serv-name71 {
\t\t\t\t\tleft: 24% !important;
\t\t\t\t}
\t\t\t\t.mob1 {
\t\t\t\t\tmin-width: 370px !important;
\t\t\t\t\ttop: 85% !important;
\t\t\t\t\tleft: 54% !important;

\t\t\t\t}
\t\t\t\t.mobp {
\t\t\t\t\tpadding-top: 10%;
\t\t\t\t}
\t\t\t\t.mobp1 {
\t\t\t\t\tpadding-top: 2%;
\t\t\t\t}


\t\t\t\t.mob1 h5 {
\t\t\t\t\tfont-size: 12px !important;

\t\t\t\t}
\t\t\t\t.info-list li a {
\t\t\t\t\tfont-size: 13px !important;
\t\t\t\t}
\t\t\t\t.mob1 img {
\t\t\t\t\twidth: 75% !important;

\t\t\t\t}
\t\t\t\th4,
\t\t\t\th5,
\t\t\t\th6 {
\t\t\t\t\tfont-size: 15px !important;
\t\t\t\t}
\t\t\t}

\t\t\t.price-old {
\t\t\t\ttext-decoration: line-through;

\t\t\t}

\t\t\t.wishlist_link {
\t\t\t\tposition: absolute;
\t\t\t\ttop: 15px;
\t\t\t\tright: 25px;
\t\t\t\tborder-radius: 50%;
\t\t\t\tbackground: rgb(255, 255, 255, 0.5);
\t\t\t\tcursor: pointer;
\t\t\t\twidth: 37px;
\t\t\t\theight: 37px;
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.wishlist_link .pe-7s-like {
\t\t\t\tline-height: 38px;
\t\t\t}

\t\t\t.alert-success {
\t\t\t\twidth: 22%;
\t\t\t\tposition: fixed;
\t\t\t\tcolor: #155724;
\t\t\t\tbackground-color: #d4edda;
\t\t\t\tborder-color: #c3e6cb;
\t\t\t\ttext-align: center;
\t\t\t\tleft: 35%;
\t\t\t\ttop: 16%;
\t\t\t\tz-index: 99;
\t\t\t}
\t\t</style>
\t\t<style>
\t\t\t@import url('https://fonts.cdnfonts.com/css/carlito');
\t\t\t@import url('https://fonts.cdnfonts.com/css/radley');

\t\t\t.slick-next:before {
\t\t\t\tcontent: '';
\t\t\t}

\t\t\th1,
\t\t\th2 {
\t\t\t\tfont-family: 'Carlito';
\t\t\t\tfont-weight: 600;
\t\t\t}

\t\t\th3,
\t\t\th4,
\t\t\th5,
\t\t\t
\t\t\th6 {
\t\t\t\tfont-family: 'Radley', 'Georgia', serif;
\t\t\t}

\t\t\t.slick-prev:before {
\t\t\t\tcontent: '';
\t\t\t}

\t\t\t.splide__pagination {
\t\t\t\tdisplay: none !important;
\t\t\t}

\t\t\t.splide__arrow {
\t\t\t\ttop: 45% !important;
\t\t\t}

\t\t\t.serv-name5 {
\t\t\t\tposition: absolute;
\t\t\t\ttop: 80%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t\tfont-weight: 600;
\t\t\t\tbackground: #32baa1;
\t\t\t\tcolor: #fff;
\t\t\t\tpadding: 10px 35px;
\t\t\t\t    letter-spacing: 1.5px !important;
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-transform: capitalize;
\t\t\t}

\t\t\t.serv-name11 {
\t\t\t\tposition: absolute;
\t\t\t\ttop: 80%;
\t\t\t\tleft: 40%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t\tfont-weight: 600;
\t\t\t\tbackground: #32baa1;
\t\t\t\tcolor: #fff;
\t\t\t\tpadding: 10px 35px;
\t\t\t\t    letter-spacing: 1.5px !important;
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-transform: capitalize;
\t\t\t\tmin-width: 230px;
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.serv-name12 {
\t\t\t\ttext-align: center;
\t\t\t\tmin-width: 230px;
\t\t\t\tposition: absolute;
\t\t\t\ttop: 80%;
\t\t\t\tleft: 60%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t\tfont-weight: 600;
\t\t\t\tbackground: #32baa1;
\t\t\t\tcolor: #fff;
\t\t\t\tpadding: 10px 35px;
\t\t\t\t    letter-spacing: 1.5px !important;
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-transform: capitalize;
\t\t\t}

\t\t\t.serv-name7 {
\t\t\t\ttext-align: center;
\t\t\t\tmin-width: 250px;
\t\t\t\tposition: absolute;
\t\t\t\ttop: 80%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t\tfont-weight: 600;
\t\t\t\tbackground: #32baa1;
\t\t\t\tcolor: #fff;
\t\t\t\tpadding: 10px 35px;
\t\t\t\t    letter-spacing: 1.5px !important;
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-transform: capitalize;
\t\t\t}
\t\t\t.serv-name71 {

\t\t\t\tposition: absolute;
\t\t\t\ttop: 80%;
\t\t\t\tleft: 17%;
\t\t\t\ttransform: translate(-50%, -50%);
    letter-spacing: 1.5px !important;
\t\t\t\t
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-transform: capitalize;
\t\t\t}

\t\t\t.serv-name4 {


\t\t\t\tfont-weight: 600;

\t\t\t\tcolor: #fff;
\t\t\t\tpadding: 5px 16px;
\t\t\t\t
\t\t\t\tfont-size: 18px;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tbackground: #32baa1;
\t\t\t\t    letter-spacing: 1.5px !important;
\t\t\t}

\t\t\t.imgc {
\t\t\t\tborder-radius: 50% 50% 0 0;
\t\t\t\tborder: 1px solid #32baa1;
\t\t\t}
\t\t\t.artmh {
\t\t\t\tmin-height: 210px;
\t\t\t}
\t\t\t.buymh {
\t\t\t\tmin-height: 400px;
\t\t\t}
\t\t</style>
\t\t";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 349
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 349);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 349);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 349);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 352
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 355
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 356
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 356);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 356);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 359
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "\t\t<link rel=\"stylesheet\" href=\"assets/css/edit.css\"/>
\t</head>

\t<body>
\t\t<!-- Start Header Area -->
\t\t<header class=\"header-area\">
\t\t\t<!-- main header start -->
\t\t\t";
        // line 369
        echo "\t\t\t\t<div
\t\t\t\tclass=\"main-header \" id=\"header\"> <!-- header middle area start -->
\t\t\t\t<div class=\"header-main-area\">
\t\t\t\t\t<div class=\"top-strip\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\" style=\"    text-align: end;\">
\t\t\t\t\t\t\t\t\t<p style=\"color:#fff;\">GET 15% DISCOUNT ON YOUR FIRST PURCHASE. USE CODE :
\t\t\t\t\t\t\t\t\t\t<span class=\"color:#eda941;font-weight: 600;font-size: 20px;\">FIRST15</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row align-items-end \">

\t\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t\t<div class=\"col-md-3 text-center \">
\t\t\t\t\t\t\t\t<div style=\"width:200px\" id=\"logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 391
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto\" src=\"";
        // line 392
        echo ($context["logo"] ?? null);
        echo "\" title=\"\" alt=\"\" class=\"img-responsive logo-home\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- start logo area -->

\t\t\t\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t\t\t\t<div class=\"main-menu-area\">
\t\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 401
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div style=\"max-width:80%; float:right;padding-bottom:20px;\" class=\"header-right d-flex align-items-center justify-content-end w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"header-configure-area w-100\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav justify-content-space-around w-100\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header-search-container mr-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"search-trigger d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/3.png\" title=\"\" alt=\"\" class=\"img-responsive logo-home\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"header-search-box d-none animated fadeInLeft\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search_top\" placeholder=\"Search\" class=\"header-search-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"search_icon_top header-search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/3.png\" title=\"\" alt=\"\" class=\"img-responsive logo-home\"/>

\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 423
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/2.png\" title=\"\" alt=\"\" class=\"img-responsive \"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 427
        if (($context["logged"] ?? null)) {
            // line 428
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 429
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 432
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 435
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 438
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 439
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 442
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 445
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 448
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/w.png\" title=\"\" alt=\"\" class=\"img-responsive \"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 453
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/1.png\" title=\"\" alt=\"\" class=\"img-responsive \"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 456
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

\t\t\t<div
\t\t\t\tclass=\"mobile-header d-lg-none d-md-block sticky\">
\t\t\t\t<!-- mobile header top start -->
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-12 top-strip\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row p-1\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\" style=\"    text-align: end;\">
\t\t\t\t\t\t\t\t\t\t<p style=\"color:#fff;font-size: 12px;\">GET 15% DISCOUNT ON YOUR FIRST PURCHASE.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUSE CODE :
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight: 600;font-size: 12px;\">FIRST15</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"mobile-main-header\">
\t\t\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 493
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 494
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">
\t\t\t\t\t\t\t\t\t<div class=\"mini-cart-wrap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 499
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 502
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 507
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:25px;\" src=\"image/icons/new/w.png\" title=\"\" alt=\"\" class=\"img-responsive \"/>
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
        // line 536
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
        // line 544
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
        // line 559
        if (($context["logged"] ?? null)) {
            // line 560
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:black;\"href=\"";
            // line 561
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:black;\"href=\"";
            // line 564
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:black;\"href=\"";
            // line 567
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 570
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:black;\"href=\"";
            // line 571
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:black;\"href=\"";
            // line 574
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 577
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
\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+91-9001709690\">
\t\t\t\t\t\t\t\t\t\t\t+91-9001709690</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:banjarahome@gmail.com\">banjarahome@gmail.com</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- offcanvas widget area end -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t";
        // line 601
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

";
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
        return array (  838 => 601,  812 => 577,  804 => 574,  796 => 571,  793 => 570,  785 => 567,  777 => 564,  769 => 561,  766 => 560,  764 => 559,  746 => 544,  735 => 536,  701 => 507,  693 => 502,  687 => 499,  679 => 494,  675 => 493,  635 => 456,  629 => 453,  619 => 448,  614 => 445,  606 => 442,  598 => 439,  595 => 438,  587 => 435,  579 => 432,  571 => 429,  568 => 428,  566 => 427,  557 => 423,  532 => 401,  520 => 392,  516 => 391,  492 => 369,  483 => 361,  474 => 359,  469 => 358,  458 => 356,  454 => 355,  451 => 354,  442 => 352,  437 => 351,  424 => 349,  420 => 348,  93 => 23,  87 => 21,  84 => 20,  78 => 18,  76 => 17,  72 => 16,  67 => 14,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}