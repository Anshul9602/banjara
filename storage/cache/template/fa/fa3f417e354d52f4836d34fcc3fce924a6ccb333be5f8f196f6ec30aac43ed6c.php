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

/* default/template/common/mobile_menu.twig */
class __TwigTemplate_b89c0e9d8075e95a60f41621b85224261987b684563511aa605faf73b78e05e8 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<style>
\t.mobile_menu .col-12 hr {
\t\tmargin: 7px 0;
\t}

\t.mobile-navigation {
\t\tmax-height: 500px;
\t}

\t.mobile_menu .col-12 a {
\t\ttext-transform: uppercase;
\t\tcolor: #333;
\t\tfont-size: 12px;
\t}

\t.collapse-span {
\t\tdisplay: none;
\t}
</style>
<!-- Your HTML content here -->
<div class=\"row mobile_menu\">
\t<nav>
\t\t
\t\t<ul class=\"mobile-menu\">
\t\t\t
\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t";
                    // line 30
                    $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    // line 31
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                    echo "</a>
\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33)) / twig_round(twig_get_attribute($this->env, $this->source,                     // line 34
$context["category"], "column", [], "any", false, false, false, 34), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 35
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 36
                            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                            // line 37
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 37);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 37);
                            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t\t";
                } else {
                    // line 44
                    echo "
\t\t\t<li class=\"d-flex\" style=\"align-items: center;\">
\t\t\t\t";
                    // line 46
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46) == "New Arrival")) {
                        // line 47
                        echo "\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 47);
                        echo " \" class=\"blink\"
\t\t\t\t\tstyle=\"color:#f48282;font-weight: bold;\">
\t\t\t\t\t";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                        echo "</a>
\t\t\t\t";
                    } else {
                        // line 51
                        echo "
\t\t\t\t<a href=\" ";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 52);
                        echo " \">
\t\t\t\t\t";
                        // line 53
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                        echo "</a>
\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t</li>

\t\t\t";
                }
                // line 58
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
\t\t</ul>
\t\t
\t</nav>
\t<br />
\t<br />
\t<div class=\"col-12\" style='margin-top:10px'>
\t\t<a href=\"index.php?route=common/home\">Home</a>
\t\t<hr />
\t</div>
\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 70
                echo "\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "\t<div class=\"col-12\">
\t\t<!-- Add a class for the collapse-toggle to use in JavaScript -->
\t\t<a href=\"#\" class=\"collapse-toggle\">";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 73);
                    echo "</a>
\t\t<hr />
\t\t<!-- Add the collapse-span class to the span element to be hidden by default -->
\t\t<span class=\"collapse-span\">
\t\t\t";
                    // line 77
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 77), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 77)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 77), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 78
                        echo "\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 79
                            echo "\t\t\t<div class=\"col-12\">
\t\t\t\t<a href=\"";
                            // line 80
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 80);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 80);
                            echo "</a>
\t\t\t\t<hr />
\t\t\t</div>
\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 84
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "\t\t</span>
\t</div>
\t";
                } else {
                    // line 88
                    echo "\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 88) == "Diamonds") || (twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 88) == "diamonds"))) {
                        // line 89
                        echo "\t<div class=\"col-12\">
\t\t<a href=\"index.php?route=common/diamonds\">";
                        // line 90
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 90);
                        echo "</a>
\t\t<hr />
\t</div>
\t";
                    } else {
                        // line 94
                        echo "\t<div class=\"col-12\">
\t\t<a href=\"";
                        // line 95
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 95);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 95);
                        echo "</a>
\t\t<hr />
\t</div>
\t";
                    }
                    // line 99
                    echo "\t";
                }
                // line 100
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t<div class=\"col-12\">
\t\t<a href=\"index.php?route=common/about\">About Us</a>
\t</div>
\t";
        }
        // line 105
        echo "</div>

<script>
\t\$(document).ready(function () {
\t\t\$(\".collapse-toggle\").click(function (e) {
\t\t\te.preventDefault();
\t\t\t\$(\".collapse-span\").slideToggle();
\t\t})
\t})
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t// Get all elements with the class \"collapse-toggle\"
\t\tvar collapseToggles = document.querySelectorAll(\".collapse-toggle\");

\t\t// Add click event listeners to the collapse toggles
\t\tcollapseToggles.forEach(function (collapseToggle) {
\t\t\tcollapseToggle.addEventListener(\"click\", function () {
\t\t\t\t// Get the next sibling element (which is the span with class \"collapse-span\")
\t\t\t\tvar collapseSpan = this.nextElementSibling;

\t\t\t\t// Toggle the display property of the collapse-span element
\t\t\t\tif (collapseSpan.style.display === \"block\") {
\t\t\t\t\tcollapseSpan.style.display = \"none\";
\t\t\t\t} else {
\t\t\t\t\tcollapseSpan.style.display = \"block\";
\t\t\t\t}
\t\t\t});
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/mobile_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 105,  260 => 101,  254 => 100,  251 => 99,  242 => 95,  239 => 94,  232 => 90,  229 => 89,  226 => 88,  221 => 85,  215 => 84,  203 => 80,  200 => 79,  195 => 78,  191 => 77,  184 => 73,  180 => 71,  177 => 70,  173 => 69,  161 => 59,  155 => 58,  150 => 55,  145 => 53,  141 => 52,  138 => 51,  133 => 49,  127 => 47,  125 => 46,  121 => 44,  116 => 41,  110 => 40,  99 => 37,  96 => 36,  91 => 35,  88 => 34,  86 => 33,  78 => 31,  76 => 30,  73 => 29,  70 => 28,  66 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/mobile_menu.twig", "");
    }
}
