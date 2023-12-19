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
class __TwigTemplate_7e9489804749347a63432c747c176a35c848a2b52b9c75a050c672a97e0f1aef extends \Twig\Template
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
   .slick-next:before {
    content: '';
}
.slick-prev:before {
    content: '';
}
</style>


<section class=\"text-center mt-4\">
<h3>Catalogue</h3>
  <div class=\"container\">

        <div class=\"row justify-content-center\">
           
  
        <div class=\"col-sm-3 text-center\" style=\"padding:15px\">
        <div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
           <img src=\"image/mk-33.jpg\" alt=\"\" class=\"img-responsive\">
           
           <a target=\"_blank\" href=\"https://banjarahome.com/demo/image/pdf.pdf\">
              <button class=\"btn btn-hero brochure_btn\">View</button>
            </a>
\t\t\t";
        // line 31
        if (($context["logged"] ?? null)) {
            // line 32
            echo "\t\t\t <a target=\"_blank\" download=\"image/pdf.pdf\" href=\"\">
           
            <button class=\"btn btn-hero brochure_btn\">Download</button>
            </a>
\t\t\t";
        } else {
            // line 37
            echo "\t\t\t 
           
            <button class=\"btn btn-hero brochure_btn btn1\">Download</button>
          
\t\t\t";
        }
        // line 42
        echo "           
        
        </div>   
          
       
   
  </div>
</section>
<section class=\"container mt-5 mb-3 text-center\">
<h3>Contact Us For Wholesale/Export Inquiry</h3>
   
<!-- breadcrumb area end -->
\t<div
\tclass=\"container\"> <!-- contact area start -->
\t<div class=\"contact-area section-padding pt-20\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t<div class=\"contact-message\">
\t\t\t\t\t\t
\t\t\t\t\t\t<form action=\"index.php?route=information/contact\" method=\"post\" class=\"contact-form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"first_name\" placeholder=\"Name *\" type=\"text\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"phone\" placeholder=\"Phone *\" type=\"tel\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"email_address\" placeholder=\"Email *\" type=\"email\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"contact_subject\" placeholder=\"Subject *\" type=\"text\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"contact2-textarea text-center\">
\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Message *\" name=\"message\" class=\"form-control2\" required=\"\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"contact-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >
\t\t\t\t\t\t\t\t\t\t\t<a style=\"color: white\">Send Message</a>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<p class=\"form-messege\"></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- contact area end -->
\t<br/><br/>
</div>
</section>
<script>
   
  \$(\".btn1\").click(function(){
  alert(\"Log in to your account for Download\");

});

</script>
";
        // line 109
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
        return array (  155 => 109,  86 => 42,  79 => 37,  72 => 32,  70 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/wholesale.twig", "");
    }
}
