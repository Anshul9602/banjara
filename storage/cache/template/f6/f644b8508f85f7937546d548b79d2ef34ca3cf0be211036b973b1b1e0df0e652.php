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
class __TwigTemplate_946adde3fd523709672a1d003f4ec14d44ed3d9139700a00469b098d10246cc6 extends \Twig\Template
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
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">

\t<script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=Radley:ital@1&display=swap\" rel=\"stylesheet\">
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

\t\t.desk {
\t\t\tdisplay: block;
\t\t}

\t\t.mobl {
\t\t\tdisplay: none;
\t\t}

\t\t@media only screen and (max-width:650px) {
\t\t\t.desk {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t.mobl {
\t\t\t\tdisplay: block;
\t\t\t}

\t\t\t.desktop-menu ul li a {
\t\t\t\tcolor: #333;
\t\t\t\tfont-size: 14px;
\t\t\t}

\t\t\t.serv-name11 {

\t\t\t\ttop: 75% !important;
\t\t\t\tleft: 32% !important;

\t\t\t\tpadding: 5px 20px !important;

\t\t\t\tfont-size: 13px !important;

\t\t\t\tmin-width: 100px !important;

\t\t\t}

\t\t\t.serv-name12 {

\t\t\t\ttop: 75% !important;
\t\t\t\tleft: 70% !important;

\t\t\t\tpadding: 5px 20px !important;

\t\t\t\tfont-size: 13px !important;

\t\t\t\tmin-width: 100px !important;

\t\t\t}

\t\t\th1,
\t\t\th2,
\t\t\th3 {
\t\t\t\tfont-size: 18px !important;
\t\t\t}

\t\t\tp {
\t\t\t\tfont-size: 14px !important;
\t\t\t}

\t\t\t.sth span img {
\t\t\t\twidth: 35px !important;
\t\t\t}

\t\t\t.sth1 {
\t\t\t\tmax-width: 100% !important;
\t\t\t}

\t\t\t.serv-name7 {
\t\t\t\tmin-width: 100px !important;
\t\t\t\tpadding: 5px 20px !important;
\t\t\t\tfont-size: 13px !important;
\t\t\t}

\t\t\t.btn-primary {
\t\t\t\tfont-size: 15px !important;
\t\t\t\tpadding: 8px 15px !important;
\t\t\t}

\t\t\t.serv-name71 {
\t\t\t\tleft: 24% !important;
\t\t\t}

\t\t\t.mob1 {
\t\t\t\tmin-width: 370px !important;
\t\t\t\ttop: 85% !important;
\t\t\t\tleft: 54% !important;

\t\t\t}

\t\t\t.mobp {
\t\t\t\tpadding-top: 10%;
\t\t\t}


\t\t\t.mob1 h5 {
\t\t\t\tfont-size: 12px !important;

\t\t\t}

\t\t\t.info-list li a {
\t\t\t\tfont-size: 13px !important;
\t\t\t}

\t\t\t.mob1 img {
\t\t\t\twidth: 75% !important;

\t\t\t}

\t\t\th4,
\t\t\th5,
\t\t\th6 {
\t\t\t\tfont-size: 15px !important;
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
\t<style>
\t\t@import url('https://fonts.cdnfonts.com/css/carlito');
\t\t@import url('https://fonts.cdnfonts.com/css/radley');

\t\t.slick-next:before {
\t\t\tcontent: '';
\t\t}

\t\th1,
\t\th2 {
\t\t\tfont-family: 'Carlito';
\t\t\tfont-weight: 600;
\t\t}

\t\th3,
\t\th4,
\t\th5,
\t\th6 {
\t\t\tfont-family: 'Radley', sans-serif;
\t\t}

\t\t.slick-prev:before {
\t\t\tcontent: '';
\t\t}

\t\t.splide__pagination {
\t\t\tdisplay: none !important;
\t\t}

\t\t.splide__arrow {
\t\t\ttop: 45% !important;
\t\t}

\t\t.serv-name5 {
\t\t\tposition: absolute;
\t\t\ttop: 80%;
\t\t\tleft: 50%;
\t\t\ttransform: translate(-50%, -50%);
\t\t\tfont-weight: 600;
\t\t\tbackground: #32baa1;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px 35px;
\t\t\tletter-spacing: 1.5px !important;
\t\t\tfont-size: 20px;
\t\t\ttext-transform: capitalize;
\t\t}

\t\t.serv-name11 {
\t\t\tposition: absolute;
\t\t\ttop: 80%;
\t\t\tleft: 40%;
\t\t\ttransform: translate(-50%, -50%);
\t\t\tfont-weight: 600;
\t\t\tbackground: #32baa1;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px 35px;
\t\t\tletter-spacing: 1.5px !important;
\t\t\tfont-size: 20px;
\t\t\ttext-transform: capitalize;
\t\t\tmin-width: 230px;
\t\t\ttext-align: center;
\t\t}

\t\t.serv-name12 {
\t\t\ttext-align: center;
\t\t\tmin-width: 230px;
\t\t\tposition: absolute;
\t\t\ttop: 80%;
\t\t\tleft: 60%;
\t\t\ttransform: translate(-50%, -50%);
\t\t\tfont-weight: 600;
\t\t\tbackground: #32baa1;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px 35px;
\t\t\tletter-spacing: 1.5px !important;
\t\t\tfont-size: 20px;
\t\t\ttext-transform: capitalize;
\t\t}

\t\t.serv-name7 {
\t\t\ttext-align: center;
\t\t\tmin-width: 250px;
\t\t\tposition: absolute;
\t\t\ttop: 80%;
\t\t\tleft: 50%;
\t\t\ttransform: translate(-50%, -50%);
\t\t\tfont-weight: 600;
\t\t\tbackground: #32baa1;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px 35px;
\t\t\tletter-spacing: 1.5px !important;
\t\t\tfont-size: 20px;
\t\t\ttext-transform: capitalize;
\t\t}

\t\t.serv-name71 {

\t\t\tposition: absolute;
\t\t\ttop: 80%;
\t\t\tleft: 17%;
\t\t\ttransform: translate(-50%, -50%);
\t\t\tletter-spacing: 1.5px !important;

\t\t\tfont-size: 20px;
\t\t\ttext-transform: capitalize;
\t\t}

\t\t.serv-name4 {


\t\t\tfont-weight: 600;

\t\t\tcolor: #fff;
\t\t\tpadding: 5px 16px;

\t\t\tfont-size: 18px;
\t\t\ttext-transform: uppercase;
\t\t\tbackground: #32baa1;
\t\t\tletter-spacing: 1.5px !important;
\t\t}

\t\t.imgc {
\t\t\tborder-radius: 50% 50% 0 0;
\t\t\tborder: 1px solid #32baa1;
\t\t}

\t\t.artmh {
\t\t\tmin-height: 210px;
\t\t}

\t\t.buymh {
\t\t\tmin-height: 400px;
\t\t}
\t</style>
\t";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 353
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 353);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 353);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 353);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 356
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 360
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 360);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 360);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 363
            echo "\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "\t<link rel=\"stylesheet\" href=\"assets/css/edit.css\" />
</head>

<body>
\t<!-- Start Header Area -->
\t<header class=\"header-area\">
\t\t<!-- main header start -->
\t\t";
        // line 373
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
\t\t\t\t\t\t<div class=\"row align-items-end ptb-5\">

\t\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t\t<div class=\"col-md-3 text-center p-2\">
\t\t\t\t\t\t\t\t<div style=\"width:200px\" id=\"logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 393
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto\" src=\"";
        // line 394
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
        // line 404
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div style=\"max-width:80%; float:right;padding-bottom:15px;\"
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
        // line 430
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/2.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive \" />
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 435
        if (($context["logged"] ?? null)) {
            // line 436
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 437
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 440
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 443
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 446
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 447
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 450
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 453
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 456
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 457
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/w.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive \" />
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 464
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/1.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"\" alt=\"\" class=\"img-responsive \" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 468
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

\t\t\t<div class=\"mobile-header d-lg-none d-md-block sticky\">
\t\t\t\t<!-- mobile header top start -->
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-12 top-strip\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row p-1\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\" style=\"    text-align: end;\">
\t\t\t\t\t\t\t\t\t\t<p style=\"color:#fff;font-size: 12px;\">GET 15% DISCOUNT ON YOUR FIRST PURCHASE.
\t\t\t\t\t\t\t\t\t\t\tUSE CODE :
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
        // line 504
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 505
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">
\t\t\t\t\t\t\t\t\t<div class=\"mini-cart-wrap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"somefunction(); return false;\"
\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 511
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 514
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 519
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"margin:auto;width:25px;\" src=\"image/icons/new/w.png\" title=\"\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" class=\"img-responsive \" />
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
        // line 549
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- search box end -->
\t\t\t\t\t\t<!-- mobile menu start -->
\t\t\t\t\t\t<div class=\"mobile-navigation\">
\t\t\t\t\t\t\t<!-- mobile menu navigation start -->
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t";
        // line 556
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
        // line 572
        if (($context["logged"] ?? null)) {
            // line 573
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 574
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 577
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 580
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 583
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 584
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 587
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 590
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
        // line 614
        echo ($context["slide_cart"] ?? null);
        echo "
\t</header>
\t<script>
\t\t\$(document).ready(function () {
\t\t\t\$(\".close-offer-strip\").click(function () {
\t\t\t\t\$(\".top-strip\").slideUp();
\t\t\t})
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
        return array (  852 => 614,  826 => 590,  818 => 587,  810 => 584,  807 => 583,  799 => 580,  791 => 577,  783 => 574,  780 => 573,  778 => 572,  759 => 556,  749 => 549,  714 => 519,  706 => 514,  700 => 511,  691 => 505,  687 => 504,  648 => 468,  641 => 464,  631 => 457,  627 => 456,  622 => 453,  614 => 450,  606 => 447,  603 => 446,  595 => 443,  587 => 440,  579 => 437,  576 => 436,  574 => 435,  564 => 430,  535 => 404,  522 => 394,  518 => 393,  496 => 373,  487 => 365,  478 => 363,  473 => 362,  462 => 360,  458 => 359,  455 => 358,  446 => 356,  441 => 355,  428 => 353,  424 => 352,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}