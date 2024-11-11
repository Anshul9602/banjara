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
class __TwigTemplate_9ade0e7a4a19a4e8a50499e40651c632d99805f94e503909775aa76a09bb6c3e extends \Twig\Template
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

<section class=\"  text-center\" >

\t<div class=\"container pt-5 pb-4\">
\t\t<div class=\"row pt-3 pb-3 sth1\" style=\"max-width: 90%;margin:auto;\">

\t\t\t<div class=\"col-md-4 mt-4 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 31
        echo ($context["gb1_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 33
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 34
        echo ($context["gb1_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-4 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 41
        echo ($context["gb2_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 43
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 44
        echo ($context["gb2_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-4 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 51
        echo ($context["gb3_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 53
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 54
        echo ($context["gb3_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 61
        echo ($context["gb4_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 63
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 64
        echo ($context["gb4_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 71
        echo ($context["gb5_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 73
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 74
        echo ($context["gb5_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<div class=\"col-md-4 mt-5 col-6\" style=\"padding: 0 25px;\">

\t\t\t\t<a href=\"";
        // line 81
        echo ($context["gb6_link"] ?? null);
        echo "\">

\t\t\t\t\t<img src=\"image/";
        // line 83
        echo ($context["gb6_image"] ?? null);
        echo "\" alt=\"\" style=\"width:100%;\" class=\"serv-img imgc\" title=\"\" />
\t\t\t\t\t<p class=\"serv-name4\">";
        // line 84
        echo ($context["gb6_title"] ?? null);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t</div>


\t\t\t<div class=\"col-md-8 m-auto pt-5 pb-5\">
\t\t\t\t<h1 class=\"pt-5\" style=\"color:#32baa1;font-family: 'Radley', sans-serif;\">\"Chic, Crafted, Captivating
\t\t\t\t\t”
\t\t\t\t</h1>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
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
        // line 187
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
        return array (  280 => 187,  174 => 84,  170 => 83,  165 => 81,  155 => 74,  151 => 73,  146 => 71,  136 => 64,  132 => 63,  127 => 61,  117 => 54,  113 => 53,  108 => 51,  98 => 44,  94 => 43,  89 => 41,  79 => 34,  75 => 33,  70 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/shop.twig", "");
    }
}
