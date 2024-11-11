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
class __TwigTemplate_5e4273164c9a918a82baaa966cabbbaa3f0188ec73c999b463e3a545e747229b extends \Twig\Template
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
\t<br />
\t<br />
\t<div class=\"col-12\" style='margin-top:10px'>
\t\t<a href=\"index.php?route=common/home\">Home</a>
\t\t<hr />
\t</div>
\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                echo "\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "\t<div class=\"col-12\">
\t\t<!-- Add a class for the collapse-toggle to use in JavaScript -->
\t\t<a href=\"#\" class=\"collapse-toggle\">";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "</a>
\t\t<hr />
\t\t<!-- Add the collapse-span class to the span element to be hidden by default -->
\t\t<span class=\"collapse-span\">
\t\t\t";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 37), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 38
                        echo "\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 39
                            echo "\t\t\t<div class=\"col-12\">
\t\t\t\t<a href=\"";
                            // line 40
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 40);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 40);
                            echo "</a>
\t\t\t\t<hr />
\t\t\t</div>
\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "\t\t</span>
\t</div>
\t";
                } else {
                    // line 48
                    echo "\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48) == "Diamonds") || (twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48) == "diamonds"))) {
                        // line 49
                        echo "\t<div class=\"col-12\">
\t\t<a href=\"index.php?route=common/diamonds\">";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 50);
                        echo "</a>
\t\t<hr />
\t</div>
\t";
                    } else {
                        // line 54
                        echo "\t<div class=\"col-12\">
\t\t<a href=\"";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 55);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55);
                        echo "</a>
\t\t<hr />
\t</div>
\t";
                    }
                    // line 59
                    echo "\t";
                }
                // line 60
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t<div class=\"col-12\">
\t\t<a href=\"index.php?route=common/about\">About Us</a>
\t</div>
\t";
        }
        // line 65
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
        return array (  161 => 65,  155 => 61,  149 => 60,  146 => 59,  137 => 55,  134 => 54,  127 => 50,  124 => 49,  121 => 48,  116 => 45,  110 => 44,  98 => 40,  95 => 39,  90 => 38,  86 => 37,  79 => 33,  75 => 31,  72 => 30,  68 => 29,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/mobile_menu.twig", "");
    }
}
