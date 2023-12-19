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

/* default/template/common/shop.twig */
class __TwigTemplate_2b777b1fe58f292251082af895dc288cc89742df8f63a61099230892fadcbe3b extends \Twig\Template
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


<section>
   <img src=\"image/collection.jpg\" alt=\"\">
</section>
<section class=\"container mt-5 mb-3 text-center\">
<h3>Shop By Category</h3>
<br>
   <div class=\"row mt-1\">
    
            <div class=\"col-md-3 col-sm-3 mb-3 mobile-padding-0\">

               <a href=\"";
        // line 27
        echo ($context["gb1_link"] ?? null);
        echo "\">
                  <p class=\"serv-name3\">";
        // line 28
        echo ($context["gb1_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 30
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>

            </div>
            <div class=\"col-md-3 col-sm-3 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 35
        echo ($context["gb2_link"] ?? null);
        echo "\">
                     <p class=\"serv-name3\">";
        // line 36
        echo ($context["gb2_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 38
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
            
               
               <div class=\"col-md-6 col-sm-6 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 44
        echo ($context["gb3_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 45
        echo ($context["gb3_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 47
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
            
            <div class=\"col-md-6  text-center serv-name1 mb-3\" style=\"margin-top:-24%;\">
               <a href=\"";
        // line 52
        echo ($context["gb4_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 53
        echo ($context["gb4_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 55
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
            <div class=\"col-md-3  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 59
        echo ($context["gb5_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 60
        echo ($context["gb5_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 62
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
            <div class=\"col-md-3  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 66
        echo ($context["gb6_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 67
        echo ($context["gb5_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 69
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
            
        
     
         
      
   </div>
</section>
<script>
   
   var swiper = new Swiper(\".topSwiper\", {
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 3,
      spaceBetween: 40,
      loop: true,
      autoplay: 3000,
      speed: 800,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev'
      }
   });

   var swiper = new Swiper(\".topSwiper5\", {
      pagination: {
         el: \".top-swiper-pagination\",
         clickable: true
      },
      navigation: {
         nextEl: \".swiper-button-next\",
         prevEl: \".swiper-button-prev\"
      },
      loop: true,
      autoplay: 2000,
      speed: 800,
      // Default parameters
      slidesPerView: 4,
      spaceBetween: 1,
      // Responsive breakpoints
      breakpoints: {
         120: {
            slidesPerView: 1,
            spaceBetween: 20
         },
         640: {
            slidesPerView: 1,
            spaceBetween: 20
         },
         768: {
            slidesPerView: 4,
            spaceBetween: 40
         },
         1024: {
            slidesPerView: 5,
            spaceBetween: 50
         }
      }

   });


   var swiper = new Swiper(\".topSwiper4\", {
      pagination: {
         el: \".top-swiper-pagination\",
         clickable: true
      },
      navigation: {
         nextEl: \".swiper-button-next\",
         prevEl: \".swiper-button-prev\"
      },
      loop: true,

      slidesPerView: 4,
 spaceBetween: 10,
      breakpoints: {
         120: {
            slidesPerView: 1,
            spaceBetween: 20
         },
         640: {
            slidesPerView: 2,
            spaceBetween: 10
         },
         768: {
            slidesPerView: 3,
            spaceBetween: 20
         },
         1024: {
            slidesPerView: 4,
            spaceBetween: 20
         }
      }

   });</script>";
        // line 165
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/shop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 165,  159 => 69,  154 => 67,  150 => 66,  143 => 62,  138 => 60,  134 => 59,  127 => 55,  122 => 53,  118 => 52,  110 => 47,  105 => 45,  101 => 44,  92 => 38,  87 => 36,  83 => 35,  75 => 30,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/shop.twig", "");
    }
}
