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
class __TwigTemplate_52c741262354801e29bf3ae535437b99b4fd5275546e9275856f91590033893b extends \Twig\Template
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
<div class=\" mobile_menu\">
\t<nav>

\t\t<ul class=\"mobile-menu\">

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
                            echo "\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 36)) {
                                // line 37
                                echo "\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t<a href=\"";
                                // line 38
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 38);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 38);
                                echo "</a>
\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t";
                                // line 40
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 40));
                                foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                    // line 41
                                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                    // line 42
                                    echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 42);
                                    echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 42);
                                    // line 43
                                    echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 46
                                echo "\t\t\t\t\t</ul></li>
\t\t\t\t\t";
                            } else {
                                // line 48
                                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                                // line 49
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 49);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 49);
                                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                            }
                            // line 52
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 53
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t\t";
                } else {
                    // line 57
                    echo "
\t\t\t<li class=\"d-flex\" style=\"align-items: center;\">


\t\t\t\t<a href=\" ";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 61);
                    echo " \">
\t\t\t\t\t";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 62);
                    echo "</a>

\t\t\t</li>

\t\t\t";
                }
                // line 67
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
\t\t</ul>

\t</nav>


</div>
";
        }
        // line 76
        echo "

<script>
\t\$(document).ready(function () {
\t\t\$(\".collapse-toggle\").click(function (e) {
\t\t\te.preventDefault();
\t\t\t\$(\".collapse-span\").slideToggle();
\t\t})
\t})
\tdocument.addEventListener(\"DOMContentLoaded\", function () { // Get all elements with the class \"collapse-toggle\"
\t\tvar collapseToggles = document.querySelectorAll(\".collapse-toggle\");

\t\t// Add click event listeners to the collapse toggles
\t\tcollapseToggles.forEach(function (collapseToggle) {
\t\t\tcollapseToggle.addEventListener(\"click\", function () { // Get the next sibling element (which is the span with class \"collapse-span\")
\t\t\t\tvar collapseSpan = this.nextElementSibling;

\t\t\t\t// Toggle the display property of the collapse-span element
\t\t\t\tif (collapseSpan.style.display === \"block\") {
\t\t\t\t\tcollapseSpan.style.display = \"none\";
\t\t\t\t} else {
\t\t\t\t\tcollapseSpan.style.display = \"block\";
\t\t\t\t}
\t\t\t});
\t\t});
\t});</script>
";
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
        return array (  194 => 76,  184 => 68,  178 => 67,  170 => 62,  166 => 61,  160 => 57,  155 => 54,  149 => 53,  143 => 52,  135 => 49,  132 => 48,  128 => 46,  120 => 43,  116 => 42,  113 => 41,  109 => 40,  102 => 38,  99 => 37,  96 => 36,  91 => 35,  88 => 34,  86 => 33,  78 => 31,  76 => 30,  73 => 29,  70 => 28,  66 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/mobile_menu.twig", "");
    }
}
