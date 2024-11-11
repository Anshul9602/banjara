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

/* default/template/common/footer.twig */
class __TwigTemplate_3f413fb0ffd6aed8375a1308fa816be4b6dc4f669ecfc1ab3a954f515bc327a2 extends \Twig\Template
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
        echo "<style>
\t.the:hover {
\t\tcolor: #fff !important;
\t}

\t.float {
\t\tposition: fixed;
\t\twidth: 70px;
\t\theight: 70px;
\t\tbottom: 50px;
\t\tright: 45px;
\t\tbackground-color: #25d366;
\t\tcolor: #FFF;
\t\tborder-radius: 50px;
\t\ttext-align: center;
\t\tfont-size: 40px;
\t\tbox-shadow: 2px 2px 3px #999;
\t\tz-index: 100;
\t}

\t.info-list li a {
\t\tcolor: #fff;
\t\tletter-spacing: 1.9px;font-weight: 600;
\t}

\t.widget-body ul li p {
\t\tfont-size: 18px;
\t\tfont-weight: 600;
\t\tletter-spacing: 1.9px;

\t}
\tfooter .header-search-btn {
\t\tleft: auto;
\t\tright: 15px;
\t}
</style>


<footer style=\"border:thin solid #f1f1f1;background-image:url('image/new/b1/1.jpg');background-size: cover;\">
\t<div class=\"container pt-5\">
\t\t<div class=\"row pt-5 pb-5\" style=\"align-items: start;    justify-content: space-between;\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h3 style=\"color:#fff;font-family: 'Work Sans', sans-serif;\">Connect with<br>
\t\t\t\t\tHandmade Luxe living.
\t\t\t\t</h3>
\t\t\t\t<p class=\"pt-3\" style=\"color:#fff;font-size:18px;letter-spacing: 2.3px;\">By signing up for alerts, you agree to receive e-mails, calls and text messages from Banjara Home.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 header-search-container mt-3\">
\t\t\t\t<div class=\"header-search-box  \">
\t\t\t\t\t<input type=\"text\" id=\"search_bot\" placeholder=\"Search\" class=\"header-search-field\" style=\"    height: 60px;   \">
\t\t\t\t\t<button class=\"search_icon_top header-search-btn bot_btn\" style=\"    \">
\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/31.png\" title=\"\" alt=\"\" class=\"img-responsive logo-home\"/>
\t
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row pb-5\">
\t\t\t<div class=\"col-md-5  pt-5 d-flex justify-content-start \">
\t\t\t\t<div class=\"widget-item text-start\">
\t\t\t\t\t<h6 class=\"widget-title \">GET IN TOUCH</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-12 \" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t\t<p>PHONE: +91 90017 09690</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-12 \" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t\t<p>MON-SAT 10AM - 6PM IST</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-12\" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t\t<p>EMAIL: MAIL@BANJARAHOME.IN</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;color:#fff;letter-spacing: 1.9px;font-weight: 100;\">TO SEE MORE OF OUR WORK, VISIT OUR SOCIALS:</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mt-1 mb-3 text-start\">
\t\t\t\t\t\t\t\t\t<div class=\"row mt-4 d-flex justify-content-start\" style='max-width:auto; '>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 text-center p-0\" style=\"width:auto;\"><img src=\"image/icons/new/12.png\" width=\"40\"/></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 text-center p-0\" style=\"width:auto;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/banjara_home_india/\"><img src=\"image/icons/new/11.png\"width=\"60\"/></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 text-center p-0\" style=\"width:auto;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/banjara_home_india/\"><img src=\"image/icons/new/10.png\"width=\"60\"/></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-start\" style=\"width:auto;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/banjara_home_india/\" style=\"font-size: 26px;    font-family: 'Radley', 'Georgia', serif;    text-transform: lowercase;\">@banjarahome_</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-6 d-flex justify-content-start pt-5\">
\t\t\t\t<div class=\"widget-item text-start\">
\t\t\t\t\t<h6 class=\"widget-title\">NEED HELP</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/Faq\">
\t\t\t\t\t\t\t\t\tFAQS</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=account/account\">
\t\t\t\t\t\t\t\t\tTRACK ORDER</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/wholesale\">
\t\t\t\t\t\t\t\t\tBULK ORDERS</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t\t\tINTERNATIONAL CUSTOMER</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/Return\">
\t\t\t\t\t\t\t\t\tRETURN & EXCHANGE</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 d-flex justify-content-start pt-5 row\">
\t\t\t\t<div class=\"widget-item text-start col-md-12\">
\t\t\t\t\t<h6 class=\"widget-title\">ABOUT</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/About\">
\t\t\t\t\t\t\t\t\tOUR STORY</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/blog\">
\t\t\t\t\t\t\t\t\tBLOGS</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/shop\">
\t\t\t\t\t\t\t\t\t#BANJARAHOME_COMMUNITY</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t\t\tCONTACT US</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t\t<div class=\"col-md-12\" style=\"min-height: 300px;\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-12 d-none\" style=\"padding:12.5px 0px; background: #EDA941;\">
\t\t<p style=\"text-align: center; font-size:12px; color: black;\">
\t\t\tCopyright © 2023 Banjara Homes. All rights reserved. Design By
\t\t\t<a class=\"the\" href=\"https://theodin.in/\" style=\"    color: black;\">
\t\t\t\tThe Odin</a>
\t\t</p>
\t</div>
</footer>

<a href=\"https://api.whatsapp.com/send?phone=+91-9001709690&amp;text=HELLO\" class=\"float d-flex justify-content-center\" style=\"align-items: center;\" target=\"_blank\">
\t<i class=\"fa fa-whatsapp wp-button\"></i>
</a>


";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 197
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 197);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 197);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 197);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 200
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "

<script>
\$('.search-btn-mobile').click(function (e) {
    e.preventDefault();
    performSearch(\$(this).prev().val());
});

\$('.header-search-btn').click(function (e) {
    e.preventDefault();
    performSearch(\$(\"#search_top\").val());
});

// Trigger search on \"Enter\" key press for both inputs
\$('#search, #search_top').on('keydown', function (e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        performSearch(\$(this).val());
    }
});

function performSearch(searchValue) {
    if (searchValue !== \"\") {
        location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(searchValue) + '&description=true';
    }
}
\t\$('.bot_btn').click(function (e) {
\t\tconsole.log(\"bt\");
\t\te.preventDefault();
\t\tif (\$(\"#search_bot\").val() != \"\") {
\t\t\tlocation = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(\"#search_bot\").val()) + '&description=true';
\t\t}
\t})
\t\$('.bot_btn').click(function (e) {
\t\te.preventDefault();
\t\tif (\$(this).prev().val() != \"\") {
\t\t\tlocation = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(this).prev().val()) + '&description=true';
\t\t}
\t})
</script>
<!-- Modernizer JS -->
<script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script>
<!-- Popper JS -->
<script src=\"assets/js/vendor/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
<!-- slick Slider JS -->
<script src=\"assets/js/plugins/slick.min.js\"></script>
<!-- Countdown JS -->
<script src=\"assets/js/plugins/countdown.min.js\"></script>
<!-- Nice Select JS -->
<script src=\"assets/js/plugins/nice-select.min.js\"></script>
<!-- jquery UI JS -->
<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
<!-- Image zoom JS -->
<script src=\"assets/js/plugins/image-zoom.min.js\"></script>
<!-- Imagesloaded JS -->
<script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
<!-- Instagram feed JS -->
<script src=\"assets/js/plugins/instagramfeed.min.js\"></script>
<!-- mailchimp active js -->
<script src=\"assets/js/plugins/ajaxchimp.js\"></script>
<!-- contact form dynamic js -->
<script src=\"assets/js/plugins/ajax-mail.js\"></script>
<!-- google map api -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script>
<!-- google map active js -->
<script src=\"assets/js/plugins/google-map.js\"></script>
<!-- Main JS -->
<script src=\"assets/js/main.js\"></script></body></html><script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 202,  255 => 200,  251 => 199,  238 => 197,  234 => 196,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
