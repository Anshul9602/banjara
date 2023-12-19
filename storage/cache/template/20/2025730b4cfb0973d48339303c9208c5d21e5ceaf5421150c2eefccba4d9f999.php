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
class __TwigTemplate_c12d0de23db6393a837c6d09f029d5c3787d5f5f0442c9f576b0e56b0f4ef758 extends \Twig\Template
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
\t}

\t.widget-body ul li p {
\t\tfont-size: 18px;
\t}
\tfooter .header-search-btn{
\t\tleft: auto;
\t\tright: 15px;
\t}
</style>


<footer style=\"border:thin solid #f1f1f1;background-image:url('image/new/b1/1.jpg');background-size: cover;\">
\t<div class=\"container pt-5\">
\t\t<div class=\"row pt-5 pb-5\" style=\"align-items: start;    justify-content: space-between;\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h1 style=\"color:#fff;\">Reach out us and connect with
\t\t\t\t\tHandmade Luxe living.</h1>
\t\t\t\t<p class=\"pt-3\" style=\"color:#fff;font-size:18px;\">By s igning up for aler t s , you agree to receive
\t\t\t\t\te-mai l s , cal l
\t\t\t\t\ts
\t\t\t\t\tand text mes sages f rom Banjara Home. To know more how
\t\t\t\t\twe keep your data safe, refer to our Privacy Pol icy.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"header-search-box  \">
\t\t\t\t\t<input type=\"text\" id=\"search_top\" placeholder=\"Search\" class=\"header-search-field\"
\t\t\t\t\t\tstyle=\"    height: 60px;\">
\t\t\t\t\t<button class=\"search_icon_top header-search-btn\">
\t\t\t\t\t\t<img style=\"margin:auto;width:30px;\" src=\"image/icons/new/3.png\" title=\"\" alt=\"\"
\t\t\t\t\t\t\tclass=\"img-responsive logo-home\" />

\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row pb-5\">
\t\t<div class=\"col-md-4  pt-5 d-flex justify-content-start \">
\t\t\t<div class=\"widget-item text-start\">
\t\t\t\t<h6 class=\"widget-title \">GET IN TOUCH</h6>
\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-5 \" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t<p>TOLL FREE :</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-7\" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t<p> ( 1800-420-1200)</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-3 \" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t<p>MON-SAT 10AM - 6PM IST</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-3\" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t<p>Email :</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-8\" style=\"text-align: start;color:#fff;\">
\t\t\t\t\t\t\t\t\t<p>HELP@BANJARAHOME.IN</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p style=\"font-size: 16px;color:#fff;\">TO S E E MORE OF OUR WORK ,
\t\t\t\t\t\t\t\tVI S I T OUR SOCIAL S :</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"mt-1 mb-3 text-start\">
\t\t\t\t\t\t\t\t<div class=\"row mt-4 d-flex justify-content-start\" style='max-width:200px; '>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-center\" style=\"width:auto;\"><img
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/fb.png\" /></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-center\" style=\"width:auto;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/banjara_home_india/\"><img
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/in.png\" /></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-center\" style=\"width:auto;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/banjara_home_india/\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size: 22px;\">@banjarahome_</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-4 col-6 d-flex justify-content-start pt-5\">
\t\t\t<div class=\"widget-item text-start\">
\t\t\t\t<h6 class=\"widget-title\">NEED HELP</h6>
\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=account/account\">
\t\t\t\t\t\t\t\tFAQS</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=account/account\">
\t\t\t\t\t\t\t\tTRACK ORDER</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=account/account\">
\t\t\t\t\t\t\t\tSTORE LOCATOR</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=7\">
\t\t\t\t\t\t\t\tReturns & Replacements</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4 col-6 d-flex justify-content-start pt-5 row\">
\t\t\t<div class=\"widget-item text-start col-md-12\">
\t\t\t\t<h6 class=\"widget-title\">ABOUT US</h6>
\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/shop\">
\t\t\t\t\t\t\t\tOUR STORY</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\">
\t\t\t\t\t\t\t\t#WITHCHUMBAK<br>
\t\t\t\t\t\t\t\tCOMMUNITY</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/shop\">
\t\t\t\t\t\t\t\tCORPORATE GIFTS</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"widget-item text-start col-md-12 mt-4\">
\t\t\t\t<h6 class=\"widget-title\">COMPANY
\t\t\t\t</h6>
\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=7\">
\t\t\t\t\t\t\t\tPRIVACY POLICY
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=7\">
\t\t\t\t\t\t\t\tTERMS OF USE</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=information/conatct\">
\t\t\t\t\t\t\t\tCONTACT US
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-12\" style=\"min-height: 300px;\"></div>
\t</div>
\t</div>
\t<div class=\"col-12 d-none\" style=\"padding:12.5px 0px; background: #EDA941;\">
\t\t<p style=\"text-align: center; font-size:12px; color: black;\">
\t\t\tCopyright © 2023 Banjara Homes. All rights reserved. Design By <a class=\"the\" href=\"https://theodin.in/\"
\t\t\t\tstyle=\"    color: black;\"> The Odin</a>
\t\t</p>
\t</div>
</footer>

<a href=\"https://api.whatsapp.com/send?phone=+91-9001709690&amp;text=HELLO\" class=\"float d-flex justify-content-center\"
\tstyle=\"align-items: center;\" target=\"_blank\">
\t<i class=\"fa fa-whatsapp wp-button\"></i>
</a>


";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 212
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 212);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 212);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 212);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 215
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "<!-- Modernizer JS -->
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
<script src=\"assets/js/main.js\"></script>
</body>

</html>
<script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>";
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
        return array (  279 => 217,  270 => 215,  266 => 214,  253 => 212,  249 => 211,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
