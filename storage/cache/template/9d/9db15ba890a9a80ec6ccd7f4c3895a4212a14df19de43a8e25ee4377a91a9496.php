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
class __TwigTemplate_f479fe0e894cf88cdcf290386bc7d3761bf934dedce19a305119fd6adc7d48b5 extends \Twig\Template
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

\t
\t

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
\t\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 0%;padding: 0px 0px;position: fixed;top: 164px;height: 80vh;overflow-y: scroll;padding-bottom:20px;\">
\t\t\t\t\t<div class=\"row\" style=\"max-width: 80%; margin:auto;\">
\t\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\" style=\"text-align: start;    justify-content: space-around;\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 41);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 45);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 49);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>




\t\t\t\t\t\t<a href=\"";
                        // line 56
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 56);
                        echo "\" class=\"mt-5 col-md-12\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW ALL</a>

\t\t\t\t\t</li>
\t\t\t\t\t";
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 60), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 60)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 60), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 63
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 64
                                echo "\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 64)) {
                                    // line 65
                                    echo "\t\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 66
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 66);
                                    echo "\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t";
                                    // line 68
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 68);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                                    // line 71
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 71));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 72
                                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 73
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 73);
                                        echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">";
                                        // line 74
                                        echo twig_get_attribute($this->env, $this->source,                                         // line 75
$context["child1"], "name", [], "any", false, false, false, 75);
                                        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 78
                                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                } else {
                                    // line 81
                                    echo "\t\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">

\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 83
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 83);
                                    echo "\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t";
                                    // line 85
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 85);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                }
                                // line 89
                                echo "
\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 91
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 92
                        echo "\t\t\t\t\t</div>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    } else {
                        // line 97
                        echo "\t\t\t<div class=\"newd\">
\t\t\t\t<ul class=\"dropdown \"
\t\t\t\t\tstyle=\"  width: -webkit-fill-available;left: 0%;padding: 0px 0px;position: fixed;top: 164px;height: 80vh;overflow-y: scroll;\">
<div class=\"row\" style=\"max-width: 80%; margin:auto;\">
\t\t\t\t\t";
                        // line 101
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 101), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 101)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 101), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 104
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 105
                                echo "\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 105)) {
                                    // line 106
                                    echo "\t\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: start;padding-left:5%;\">
\t\t\t\t\t\t<div style=\"text-align: start;\">";
                                    // line 107
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 107)) {
                                        // line 108
                                        echo "\t\t\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 108);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 108);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t\t\t";
                                    }
                                    // line 110
                                    echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p
\t\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t\t";
                                    // line 114
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 114);
                                    echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                                    // line 118
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 118));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 119
                                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 120
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 120);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 120);
                                        // line 121
                                        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 124
                                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                } else {
                                    // line 127
                                    echo "\t\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
                                    // line 128
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 128);
                                    echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t\t";
                                    // line 129
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 129);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                }
                                // line 133
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 134
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "\t\t\t\t</div>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    }
                    // line 140
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 143
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 144);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 144);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 147
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 151
        echo "</li>

<script>
    // Your JavaScript code here
    document.addEventListener(\"DOMContentLoaded\", function() {
      // Get the header element
      var header = document.getElementById(\"header\");

      // Get all elements with the class \"hidden-class\"
      var elementsToHide = document.querySelectorAll(\".newd\");

      // Add a scroll event listener to the window
      window.addEventListener(\"scroll\", function() {
        // Check if the page is scrolled beyond a certain point, for example, 100 pixels from the top
        if (window.scrollY > 100) {
          // Hide all elements by setting their display property to none
          elementsToHide.forEach(function(element) {
            element.style.display = \"none\";
          });
        } else {
          // Display all elements
          elementsToHide.forEach(function(element) {
            element.style.display = \"block\";
          });
        }
      });

      // Add a hover event listener to each navigation list item
      var navListItems = document.querySelectorAll(\"nav li\");

      navListItems.forEach(function(navListItem) {
        navListItem.addEventListener(\"mouseenter\", function() {
          // Display all hidden elements when the user hovers over any navigation list item
          elementsToHide.forEach(function(element) {
            element.style.display = \"block\";
          });
        });

        navListItem.addEventListener(\"mouseleave\", function() {
          // Revert to the previous display state when the user stops hovering
          if (window.scrollY <= 100) {
            elementsToHide.forEach(function(element) {
              element.style.display = \"block\";
            });
          }
        });
      });
    });
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
        return array (  346 => 151,  340 => 148,  334 => 147,  326 => 144,  323 => 143,  318 => 140,  311 => 135,  305 => 134,  299 => 133,  292 => 129,  288 => 128,  285 => 127,  280 => 124,  272 => 121,  268 => 120,  265 => 119,  261 => 118,  254 => 114,  248 => 110,  240 => 108,  238 => 107,  235 => 106,  232 => 105,  227 => 104,  223 => 101,  217 => 97,  210 => 92,  204 => 91,  197 => 89,  190 => 85,  185 => 83,  181 => 81,  176 => 78,  167 => 75,  166 => 74,  162 => 73,  159 => 72,  155 => 71,  149 => 68,  144 => 66,  141 => 65,  138 => 64,  133 => 63,  129 => 60,  122 => 56,  112 => 49,  105 => 45,  98 => 41,  90 => 35,  88 => 34,  82 => 33,  78 => 31,  76 => 30,  72 => 28,  68 => 27,  63 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
