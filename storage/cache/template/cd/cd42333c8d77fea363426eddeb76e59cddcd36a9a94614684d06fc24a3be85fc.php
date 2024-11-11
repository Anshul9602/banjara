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

/* default/template/common/faq.twig */
class __TwigTemplate_305657fac8b4a462641f8e7600a34a5aadea3b4e6f40118ac4f6753060264ef9 extends \Twig\Template
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

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"></script>
<div id=\"content\" style=\"    background-color: #ddd6c8;\"></div>

<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 13
            echo "\t\t\t\t<div>

\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 15);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<div style=\"background-image: url('image/new/l1/a_back.png');\">
\t<div class=\"container\">
\t\t<div class=\"row pt-5 pb-5\">
\t
\t\t\t<div class=\"col-md-10 m-auto\">
\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t  <h2 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t  Accordion Item #1
\t\t\t\t\t\t</button>
\t\t\t\t\t  </h2>
\t\t\t\t\t  <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t  <h2 class=\"accordion-header\" id=\"headingTwo\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t  Accordion Item #2
\t\t\t\t\t\t</button>
\t\t\t\t\t  </h2>
\t\t\t\t\t  <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t  <h2 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t  Accordion Item #3
\t\t\t\t\t\t</button>
\t\t\t\t\t  </h2>
\t\t\t\t\t  <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 72
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 72,  68 => 18,  59 => 15,  55 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/faq.twig", "");
    }
}
