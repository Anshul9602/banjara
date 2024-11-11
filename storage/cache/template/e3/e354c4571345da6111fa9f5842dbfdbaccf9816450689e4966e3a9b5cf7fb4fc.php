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
class __TwigTemplate_6d153c54b03c36b657d57f3b90c9acbd734b1b3f9845606dd009a352b724d2a0 extends \Twig\Template
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
\t\t\t\t<ul class=\"dropdown row  \"
\t\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 20%;padding: 0px 0px;position: fixed;top: 164px;height: 80vh;overflow-y: scroll;padding-bottom:20px;\">
\t\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\" style=\"text-align: start;    justify-content: space-around;\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 40);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 44);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 48);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>




\t\t\t\t\t\t<a href=\"";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 55);
                        echo "\" class=\"mt-5 col-md-12\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW ALL</a>

\t\t\t\t\t</li>
\t\t\t\t\t";
                        // line 59
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 59), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 59)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 59), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 62
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 63
                                echo "\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 63)) {
                                    // line 64
                                    echo "\t\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 65
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 65);
                                    echo "\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t";
                                    // line 67
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 67);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                                    // line 70
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 70));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 71
                                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 72
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 72);
                                        echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">";
                                        // line 73
                                        echo twig_get_attribute($this->env, $this->source,                                         // line 74
$context["child1"], "name", [], "any", false, false, false, 74);
                                        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 77
                                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                } else {
                                    // line 80
                                    echo "\t\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">

\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 82
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 82);
                                    echo "\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t";
                                    // line 84
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 84);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                }
                                // line 88
                                echo "
\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 90
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    } else {
                        // line 95
                        echo "\t\t\t<div class=\"newd\">
\t\t\t\t<ul class=\"dropdown row \"
\t\t\t\t\tstyle=\"  width: -webkit-fill-available;left: 20%;padding: 0px 0px;position: fixed;top: 164px;height: 80vh;overflow-y: scroll;\">

\t\t\t\t\t";
                        // line 99
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 99), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 99)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 99), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 102
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 103
                                echo "\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 103)) {
                                    // line 104
                                    echo "\t\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: start;padding-left:5%;\">
\t\t\t\t\t\t<div style=\"text-align: start;\">";
                                    // line 105
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 105)) {
                                        // line 106
                                        echo "\t\t\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 106);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 106);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t\t\t";
                                    }
                                    // line 108
                                    echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p
\t\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t\t";
                                    // line 112
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 112);
                                    echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                                    // line 116
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 116));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 117
                                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 118
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 118);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 118);
                                        // line 119
                                        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 122
                                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                } else {
                                    // line 125
                                    echo "\t\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
                                    // line 126
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 126);
                                    echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t\t";
                                    // line 127
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 127);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                }
                                // line 131
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 132
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    }
                    // line 137
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 140
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 141);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 141);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 144
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 148
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
        return array (  343 => 148,  337 => 145,  331 => 144,  323 => 141,  320 => 140,  315 => 137,  309 => 133,  303 => 132,  297 => 131,  290 => 127,  286 => 126,  283 => 125,  278 => 122,  270 => 119,  266 => 118,  263 => 117,  259 => 116,  252 => 112,  246 => 108,  238 => 106,  236 => 105,  233 => 104,  230 => 103,  225 => 102,  221 => 99,  215 => 95,  209 => 91,  203 => 90,  196 => 88,  189 => 84,  184 => 82,  180 => 80,  175 => 77,  166 => 74,  165 => 73,  161 => 72,  158 => 71,  154 => 70,  148 => 67,  143 => 65,  140 => 64,  137 => 63,  132 => 62,  128 => 59,  121 => 55,  111 => 48,  104 => 44,  97 => 40,  90 => 35,  88 => 34,  82 => 33,  78 => 31,  76 => 30,  72 => 28,  68 => 27,  63 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
