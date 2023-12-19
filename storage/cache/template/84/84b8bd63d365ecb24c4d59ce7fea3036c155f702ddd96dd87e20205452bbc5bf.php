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

/* default/template/common/wholesale.twig */
class __TwigTemplate_c867a02f073f852a8554ea75b7902099d62e045d3cf1a9486b3733fca50c8d03 extends \Twig\Template
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
</style>


<section class=\"text-center mt-4\">

\t<div class=\"container\">
\t\t<div class=\"row pt-5 pb-5\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"image/new/l1/14.jpg\" alt=\"\" width=\"100%\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"image/new/l1/12.jpg\" alt=\"\" width=\"100%\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"image/new/l1/13.jpg\" alt=\"\" width=\"100%\">
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"image/new/l1/15.jpg\" alt=\"\" width=\"100%\">
\t\t\t</div>
\t\t</div>
<a href=\"\"><h2 class=\"text-start\" style=\"color: #32baa1;\">View all</h2></a>
\t</div>




</section>
<section class=\"text-center mt-4 d-none\">
\t<h3>Catalogue</h3>
\t<div class=\"container\">

\t\t<div class=\"row justify-content-center\">


\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t<img src=\"image/mk-33.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t\t\t<a target=\"_blank\" href=\"https://banjarahome.com/demo/image/pdf.pdf\">
\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\">View</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 57
        if (($context["logged"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t<a target=\"_blank\" download=\"image/pdf.pdf\" href=\"\">

\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\">Download</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 63
            echo "

\t\t\t\t\t<button class=\"btn btn-hero brochure_btn btn1\">Download</button>

\t\t\t\t\t";
        }
        // line 68
        echo "

\t\t\t\t</div>



\t\t\t</div>
</section>
<section class=\"container mt-5 mb-3 text-center\">
\t<h3>Contact Us For Wholesale/Export Inquiry</h3>

\t<!-- breadcrumb area end -->
\t<div class=\"container d-none\"> <!-- contact area start -->
\t\t<div class=\"contact-area section-padding pt-20\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t<div class=\"contact-message\">

\t\t\t\t\t\t\t<form action=\"index.php?route=information/contact\" method=\"post\" class=\"contact-form\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<input name=\"first_name\" placeholder=\"Name *\" type=\"text\" required />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<input name=\"phone\" placeholder=\"Phone *\" type=\"tel\" required />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<input name=\"email_address\" placeholder=\"Email *\" type=\"email\" required />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<input name=\"contact_subject\" placeholder=\"Subject *\" type=\"text\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"contact2-textarea text-center\">
\t\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Message *\" name=\"message\" class=\"form-control2\"
\t\t\t\t\t\t\t\t\t\t\t\trequired=\"\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contact-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color: white\">Send Message</a>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12 d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<p class=\"form-messege\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- contact area end -->
\t\t<br /><br />
\t</div>
</section>
<script>

\t\$(\".btn1\").click(function () {
\t\talert(\"Log in to your account for Download\");

\t});

</script>
";
        // line 135
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/wholesale.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 135,  112 => 68,  105 => 63,  98 => 58,  96 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/wholesale.twig", "");
    }
}
