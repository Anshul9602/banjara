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
class __TwigTemplate_319c537b5326f520ea47ae14afa8175de23a26c4402b4785f56b57a4cb815f1a extends \Twig\Template
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
<style>
\t.accordion-item {
\t\tbackground-color: transparent;
\t\tborder-bottom: 1px solid rgba(0,0,0,.125);
\t\tpadding:2% 0;
\t}
</style>




<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 22
            echo "\t\t\t\t<div>

\t\t\t\t\t<img src=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 24);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<div style=\"background-image: url('image/new/l1/a_back.png');\">
\t<div class=\"container\">
\t\t<div class=\"row pt-5 pb-5\">

\t\t\t<div class=\"col-md-10 m-auto\">
\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\tIs my order confirmed?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\"
\t\t\t\t\t\t\tdata-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tYou will receive an email and an sms on order confirmation. Please contact our
\t\t\t\t\t\t\t\t\thelpdesk (mail
\t\t\t\t\t\t\t\t\tHelp@banjara.in or call ------------) if you are unsure.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t\tWhen will you ship my order?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\"
\t\t\t\t\t\t\tdata-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tWe normally ship all orders within 7 business days. Final delivery time will vary based
\t\t\t\t\t\t\t\ton location.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\tWhen will my order get delivered?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\"
\t\t\t\t\t\t\tdata-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tTransit and delivery time may vary depending on your location and the ordered items. You
\t\t\t\t\t\t\t\tcan check
\t\t\t\t\t\t\t\testimated delivery time for your pin code on any product page.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"heading4\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-bs-target=\"#collapse4\" aria-expanded=\"false\" aria-controls=\"collapse4\">
\t\t\t\t\t\t\t\tHow much do you charge for delivery?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapse4\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading4\"
\t\t\t\t\t\t\tdata-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tOur charges varies from place to place for both domestic and internationally.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"heading5\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-bs-target=\"#collapse5\" aria-expanded=\"false\" aria-controls=\"collapse5\">
\t\t\t\t\t\t\t\tHow can I track my order?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapse5\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading5\"
\t\t\t\t\t\t\tdata-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tAn email is sent to you after the order is shipped. It contains the tracking number and
\t\t\t\t\t\t\t\tdetails of the
\t\t\t\t\t\t\t\tservice provider. You can also track your order by logging in on our website.<br><br>
\t\t\t\t\t\t\t\tIf you are having trouble reading the emails or if you haven't received any updates,
\t\t\t\t\t\t\t\tplease get in touch
\t\t\t\t\t\t\t\twith our Helpdesk immediately. Drop us an email at Help@banjara.in or give us a call on
\t\t\t\t\t\t\t\t----------(10
\t\t\t\t\t\t\t\tAM - 6 PM, Monday to Saturday).
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"heading6\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-bs-target=\"#collapse6\" aria-expanded=\"false\" aria-controls=\"collapse6\">
\t\t\t\t\t\t\t\tHow do I place Bulk Orders?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapse6\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading6\"
\t\t\t\t\t\t\tdata-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tWe get it. Our products are simply awesome and buying one is just not enough. You can
\t\t\t\t\t\t\t\tplace bulk
\t\t\t\t\t\t\t\torders by visiting us at our Bulk orders page or by contacting us via bulk-
\t\t\t\t\t\t\t\tmail@bajarahome.in or just
\t\t\t\t\t\t\t\tcall us at ---------(10 AM - 6 PM, Monday to Saturday).<br>
\t\t\t\t\t\t\t\tNote: We do not offer customization of products.<br>
\t\t\t\t\t\t\t\tI don’t want the package to carry an invoice/amount as it is a gift. Can this be done?
\t\t\t\t\t\t\t\tUnfortunately, invoices are mandatory due to Government regulations.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"heading7\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-bs-target=\"#collapse7\" aria-expanded=\"false\" aria-controls=\"collapse7\">
\t\t\t\t\t\t\t\tI have received a damaged product, what should I do?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapse7\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading7\"
\t\t\t\t\t\t\tdata-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tIn the event that you receive a damaged product, please initiate a return or reach out
\t\t\t\t\t\t\t\tto us on
\t\t\t\t\t\t\t\thelp@banjara.in within 24 - 28 hours of delivery and we will resolve the issue to your
\t\t\t\t\t\t\t\tsatisfaction.
\t\t\t\t\t\t\t\tPlease ensure that packaging of the received product is intact with you for
\t\t\t\t\t\t\t\treturn/replacement.

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 168
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
        return array (  220 => 168,  77 => 27,  68 => 24,  64 => 22,  60 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/faq.twig", "");
    }
}
