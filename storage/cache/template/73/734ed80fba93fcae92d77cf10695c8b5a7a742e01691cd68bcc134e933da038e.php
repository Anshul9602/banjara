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

/* default/template/common/menu.twig */
class __TwigTemplate_9a4e426234725bf5177d2aee6504a08ecf78ab70a0676354426c7c012c2c76a9 extends \Twig\Template
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
        echo "<style>
\t.hr1 hr {
\t\tmargin-top: 0;
\t}

\t.main-menu ul li ul.dropdown li a {

\t\tpadding: 0px;
\t}




\t.newd {
\t\tdisplay: block;
\t\t/* Set the initial display property based on your requirements */
\t\ttransition: display 0.5s ease;
\t\t/* Add a smooth transition effect */
\t}
</style>


";
        // line 23
        if (($context["categories"] ?? null)) {
            // line 24
            echo "<nav class=\"desktop-menu\">
\t<ul class=\"nav justify-content-space-around w-100\">

\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "

\t\t";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "
\t\t<li class=\"dropdown\" style=\"position: relative;\">
\t\t\t<a href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "</a>
\t\t\t";
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34) == "Wholesale")) {
                        // line 35
                        echo "\t\t\t<div class=\"newd\">
\t\t\t\t<ul class=\"dropdown \"
\t\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 0%;padding: 0px 0px;position: fixed;top: 106px;height: 73vh;overflow-y: scroll;padding-bottom:20px;\">
\t\t\t\t\t<div class=\"row\" style=\"max-width: 80%; margin:auto;\">
\t\t\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\"
\t\t\t\t\t\t\tstyle=\"text-align: start;    justify-content: space-around;\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 42);
                        echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 46);
                        echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 50);
                        echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t<a href=\"";
                        // line 57
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 57);
                        echo "\" class=\"mt-5 col-md-12\"
\t\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW
\t\t\t\t\t\t\t\tALL</a>

\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        // line 62
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 62), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 62)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 62), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 65
                            echo "\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 66
                                echo "\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 66)) {
                                    // line 67
                                    echo "\t\t\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 68
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 68);
                                    echo "\"
\t\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t\t";
                                    // line 70
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 70);
                                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                                    // line 73
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 73));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 74
                                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 75
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 75);
                                        echo "\"
\t\t\t\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">";
                                        // line 76
                                        echo twig_get_attribute($this->env, $this->source,                                         // line 77
$context["child1"], "name", [], "any", false, false, false, 77);
                                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 80
                                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                } else {
                                    // line 83
                                    echo "\t\t\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">

\t\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 85
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 85);
                                    echo "\"
\t\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t\t";
                                    // line 87
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 87);
                                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                }
                                // line 91
                                echo "
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 93
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 94
                        echo "\t\t\t\t\t</div>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    } else {
                        // line 99
                        echo "\t\t\t<div class=\"newd\">
\t\t\t\t<ul class=\"dropdown \"
\t\t\t\t\tstyle=\"  width: -webkit-fill-available;left: 0%;padding: 0px 0px;position: fixed;top: 106px;height: 73vh;overflow-y: scroll;\">
\t\t\t\t\t<div class=\"row\" style=\"max-width: 80%; margin:auto;\">
\t\t\t\t\t\t";
                        // line 103
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 103), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 103)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 103), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 106
                            echo "\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 107
                                echo "\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 107)) {
                                    // line 108
                                    echo "\t\t\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: start;padding-left:5%;\">
\t\t\t\t\t\t\t<div style=\"text-align: start;\">";
                                    // line 109
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 109)) {
                                        // line 110
                                        echo "\t\t\t\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 110);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 110);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t\t\t\t";
                                    }
                                    // line 112
                                    echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t\t\t";
                                    // line 116
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 116);
                                    echo "
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                                    // line 120
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 120));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 121
                                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 122
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 122);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 122);
                                        // line 123
                                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 126
                                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                } else {
                                    // line 129
                                    echo "\t\t\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"";
                                    // line 130
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 130);
                                    echo "\"
\t\t\t\t\t\t\t\tstyle=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t\t\t";
                                    // line 132
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 132);
                                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                }
                                // line 136
                                echo "\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 137
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 138
                        echo "\t\t\t\t\t</div>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    }
                    // line 143
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 146
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 147);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 147);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 150
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 154
        echo "</li>

<script>
\t// Your JavaScript code here
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t// Get the header element
\t\tvar header = document.getElementById(\"header\");

\t\t// Get all elements with the class \"hidden-class\"
\t\tvar elementsToHide = document.querySelectorAll(\".newd\");

\t\t// Add a scroll event listener to the window
\t\twindow.addEventListener(\"scroll\", function () {
\t\t\t// Check if the page is scrolled beyond a certain point, for example, 100 pixels from the top
\t\t\tif (window.scrollY > 100) {
\t\t\t\t// Hide all elements by setting their display property to none
\t\t\t\telementsToHide.forEach(function (element) {
\t\t\t\t\telement.style.display = \"none\";
\t\t\t\t});
\t\t\t} else {
\t\t\t\t// Display all elements
\t\t\t\telementsToHide.forEach(function (element) {
\t\t\t\t\telement.style.display = \"block\";
\t\t\t\t});
\t\t\t}
\t\t});

\t\t// Add a hover event listener to each navigation list item
\t\tvar navListItems = document.querySelectorAll(\"nav li\");

\t\tnavListItems.forEach(function (navListItem) {
\t\t\tnavListItem.addEventListener(\"mouseenter\", function () {
\t\t\t\t// Display all hidden elements when the user hovers over any navigation list item
\t\t\t\telementsToHide.forEach(function (element) {
\t\t\t\t\telement.style.display = \"block\";
\t\t\t\t});
\t\t\t});

\t\t\tnavListItem.addEventListener(\"mouseleave\", function () {
\t\t\t\t// Revert to the previous display state when the user stops hovering
\t\t\t\tif (window.scrollY <= 100) {
\t\t\t\t\telementsToHide.forEach(function (element) {
\t\t\t\t\t\telement.style.display = \"block\";
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 154,  343 => 151,  337 => 150,  329 => 147,  326 => 146,  321 => 143,  314 => 138,  308 => 137,  302 => 136,  295 => 132,  290 => 130,  287 => 129,  282 => 126,  274 => 123,  270 => 122,  267 => 121,  263 => 120,  256 => 116,  250 => 112,  242 => 110,  240 => 109,  237 => 108,  234 => 107,  229 => 106,  225 => 103,  219 => 99,  212 => 94,  206 => 93,  199 => 91,  192 => 87,  187 => 85,  183 => 83,  178 => 80,  169 => 77,  168 => 76,  164 => 75,  161 => 74,  157 => 73,  151 => 70,  146 => 68,  143 => 67,  140 => 66,  135 => 65,  131 => 62,  123 => 57,  113 => 50,  106 => 46,  99 => 42,  90 => 35,  88 => 34,  82 => 33,  78 => 31,  76 => 30,  72 => 28,  68 => 27,  63 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
