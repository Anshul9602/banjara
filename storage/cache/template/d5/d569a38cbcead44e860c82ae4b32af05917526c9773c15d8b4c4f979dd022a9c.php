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

/* default/template/common/return.twig */
class __TwigTemplate_d99a177f47b591e36678e3037a7321b262a720f6c62dc91977aa0958f66a1f5d extends \Twig\Template
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
\ta {
\t\ttext-decoration: none !important;
\t}
\t.container,
\t.container-lg,
\t.container-md,
\t.container-sm,
\t.container-xl,
\t.container-xxl {
\t\tmax-width: 86% !important;
\t\tmargin: auto;
\t}
\t.accordion-item {
\t\tbackground-color: transparent;
\t\tborder-bottom: 2px solid rgba(0, 0, 0, .125) !important;
\t\tpadding: 2% 0;
\t\tborder: 0 solid rgba(0, 0, 0, .125);
\t}
\t.accordion-button:focus {
\t\tz-index: 3;
\t\tborder-color: none;
\t\toutline: 0;
\t\tbox-shadow: none;
\t}
\t.accordion-button:not(.collapsed) {
\t\tcolor: rgb(94, 94, 94);
\t\tfont-weight: 600;
\t\tbackground-color: transparent;
\t\tbox-shadow: none;
\t\tfont-family: sans-serif;
\t}
\t.accordion-button {
\t\tpadding: 1rem 0;
\t\tcolor: rgb(94, 94, 94);
\t\tbackground-color: transparent;
\t\tfont-weight: 600;
\t\tfont-family: sans-serif;
\t}
\t.accordion-button::after {
\t\tbackground-image: url('image/new/arrow.png');
\t}
\t.accordion-button:not(.collapsed)::after {
\t\tbackground-image: url('image/new/minus.png');
\t\ttransform: none;
\t}
\t.accordion-body {
\t\tpadding: 1rem 0;
\t}
</style>


<!-- hero slider area start -->
<section class=\"slider-area\">
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 63
            echo "\t\t\t\t\t<div>

\t\t\t\t\t\t<img src=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 65);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<div style=\"background-image: url('image/new/l1/a_back.png');    background-size: contain;\">
\t<div class=\"container\">
\t\t<div class=\"row pt-5 pb-5\">

\t\t\t<div class=\"col-md-10 m-auto\">

\t\t\t\t<h4 style=\"font-weight: 600;color:rgb(58, 58, 58);font-family: sans-serif;padding-bottom:50px;\">RETURN , EXCHANGE + CANCELLATION</h4>

\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t1. If the item has a quality / manufacturing defect :
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tIn this case, the item you received does not meet quality standards and has a defect that you believe*
is unacceptable. If you believe the product is damaged or has a genuine manufacturing/quality defect,
please photograph it as soon as you open it. *Slight differences in colour, design, or appearance from
what you see on your computer/mobile screen are not considered defects. As our products are 100%
handmade, slight variations are to be expected.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t\t\t2. If you didn’t receive what you ordered :
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tThis is the case when you receive an item that is not what you ordered or when the item on the site is
misrepresented due to a technical error. You have received an incorrect size or product, i.e., the
product does not match the item in the order confirmation email.<br><br>
It is the case when item you received need any size alteration or replacement owing to change of
mind. For exchange products, ship back charges would be borne by the customer.

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\t3. Suitable solutions as per conditions :
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tIn all the conditions mentioned above, our customers are requested to contact us via e-mail at
mail@banjarahome.in or WhatsApp +919001709690 within 24 hours of the receipt of your delivery.
Please mention your order number/contact details and product picture if possible.
Our customer support team will discuss with you and might ask for more details.
We would request you to send the product back to us in original condition on the
address mentioned on our website.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"heading4\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse4\" aria-expanded=\"false\" aria-controls=\"collapse4\">
\t\t\t\t\t\t\t\t4 .Exchanges
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapse4\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading4\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tThe product will be exchanged for a product of equal or greater value than the original purchased
product (after the difference in payment is made).<br>
We do not provide refunds for the difference in price when exchanging a product priced lower than
the original purchased item.<br>
Art Image is not liable for the unavailability or errors in the listing of specific
merchandise of your choice for exchange with the items you have already purchased.<br><br>
In the event of a quality defect or the delivery of the incorrect item : -
Refunds will be processed within 7-10 business days of receiving the product in our warehouse.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"heading5\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse5\" aria-expanded=\"false\" aria-controls=\"collapse5\">
\t\t\t\t\t\t\t\t5. Terms & Conditions – Returns, Refunds & Exchanges
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapse5\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading5\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t1. A used or damaged/tampered product is not returnable, refundable, or
exchangeable.<br>
2. The item must be returned in its original packaging, labels, and tags; an altered
or illegible serial number will also void the return.<br>
3. Our team will inspect the item for any quality issues or specific concerns you
have raised.<br>
4. Please work with our customer service team to ensure a smooth
refund/exchange process.<br>
About different types of orders : -<br>
Custom Orders : Custom orders are built to your specifications and begin production as soon as you
place your order. They cannot be cancelled, changed, returned, or refunded.<br>
Personalized/Monogrammed Items: These are custom order items that are noncancellable, non-returnable, and non-refundable.<br>
Items on sale: Final sale and clearance items are final and are not returnable or
refundable.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"heading6\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse6\" aria-expanded=\"false\" aria-controls=\"collapse6\">
\t\t\t\t\t\t\t\t6. Cancellations
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapse6\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading6\" data-bs-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\tBanjara Home will only accept order cancellations within 24 hours of placing the order. If you need to
cancel your order, please go to your account page on our website.<br><br>
Alternatively, you can email mail@banjarahome.com with any cancellation requests within the abovementioned time frame.<br>
Within 2-3 working days of receiving the cancellation request, the refund amount for cancelled items
will be transferred back to the original source of payment.<br>
Note : -<br>
- Certain merchandise may have pricing, description, or image errors, and we must reserve the right to
restrict orders for those items.<br>
- Certain items may have strict no-return/refund policies, which will always be
mentioned on the website's product detail page.

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 206
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/return.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 206,  118 => 68,  109 => 65,  105 => 63,  101 => 62,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/return.twig", "");
    }
}
