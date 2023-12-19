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

/* default/template/common/collection.twig */
class __TwigTemplate_dcf0ac1ebf800698623fb231cf02a3853d4fe05a8bb29b7194f0ccb49b591c03 extends \Twig\Template
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

<section class=\"container mt-5 mb-3 text-center\">
   <div class=\"row \">

      <div class=\"col-md-4 col-sm-6 mb-3 mobile-padding-0\">

         <a href=\"\">


            <img style=\"border-radius: 10px;\" src=\"image/new/ti/8.jpg\" alt=\"\" class=\"serv-img\" title=\"\" />
         </a>
         <a href=\"\" class=\"text-start \">
            <h5 class=\"text-start pb-4 mt-4\" style=\"color: #de4d71;      font-weight: 600;  text-align: center;\">
               TRADITIONAL SAGA</h5>
         </a>

         <p class=\"mb-3\" style=\"color: #32baa1;  font-weight: 600;  text-align: center;\">SHOP ALL</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP CUSHIONS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP POUFS & OTTOMANS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP THROWS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP WALL ARTS</p>
        
      </div>
      <div class=\"col-md-4 col-sm-6 mb-3 mobile-padding-0\">

         <a href=\"\">


            <img style=\"border-radius: 10px;\" src=\"image/new/ti/9.jpg\" alt=\"\" class=\"serv-img\" title=\"\" />
         </a>
         <a href=\"\" class=\"text-start \">
            <h5 class=\"text-start pb-4 mt-4\" style=\"color: #de4d71;     font-weight: 600;   text-align: center;\">LUXE
               SAGA</h5>
         </a>

         <p class=\"mb-3\" style=\"color: #32baa1;  font-weight: 600;  text-align: center;\">SHOP ALL</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP CUSHIONS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP POUFS & OTTOMANS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP THROWS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP WALL ARTS</p>
      </div>
      <div class=\"col-md-4 col-sm-6 mb-3 mobile-padding-0\">

         <a href=\"\">


            <img style=\"border-radius: 10px;\" src=\"image/new/ti/10.jpg\" alt=\"\" class=\"serv-img\" title=\"\" />
         </a>
         <a href=\"\" class=\"text-start \">
            <h5 class=\"text-start pb-4 mt-4\" style=\"color: #de4d71;     font-weight: 600;   text-align: center;\">MODERN
               SAGA</h5>
         </a>

         <p class=\"mb-3\" style=\"color: #32baa1;  font-weight: 600;  text-align: center;\">SHOP ALL</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP CUSHIONS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP POUFS & OTTOMANS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP THROWS</p>
         <p class=\"mb-3\" style=\"color: #32baa1;    text-align: center;\">SHOP WALL ARTS</p>
      </div>


</section>


";
        // line 80
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/collection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 80,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/collection.twig", "");
    }
}
