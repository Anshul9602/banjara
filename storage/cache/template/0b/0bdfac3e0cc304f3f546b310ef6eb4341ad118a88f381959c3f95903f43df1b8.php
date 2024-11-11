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
class __TwigTemplate_e73df3a2b9226c6a9b3af7e0a2bf9c9d32e5bb318641d2f35d64384fdb07e376 extends \Twig\Template
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

\t.newd {
\t\tdisplay: block;
\t\t/* Set the initial display property based on your requirements */
\t\ttransition: display 0.5s ease;
\t\t/* Add a smooth transition effect */
\t}
</style>


";
        // line 22
        if (($context["categories"] ?? null)) {
            // line 23
            echo "<nav class=\"desktop-menu\">
\t<ul class=\"nav justify-content-space-around w-100\">

\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                echo "

\t\t";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "
\t\t<li class=\"dropdown\" style=\"position: relative;\">
\t\t\t<a href=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 32);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                    echo "</a>
\t\t\t";
                    // line 33
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33) == "Wholesale")) {
                        // line 34
                        echo "\t\t\t<div class=\"newd\">
\t\t\t\t<ul class=\"dropdown row  \"
\t\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 0%;padding: 0px 0px;position: fixed;top: 164px;height: 80vh;overflow-y: scroll;padding-bottom:20px;\">
\t\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\" style=\"text-align: start;    justify-content: space-around;\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"";
                        // line 39
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 39);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 43);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 47);
                        echo "\"
\t\t\t\t\t\t\t\tstyle=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t\t</div>




\t\t\t\t\t\t<a href=\"";
                        // line 54
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 54);
                        echo "\" class=\"mt-5 col-md-12\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW ALL</a>

\t\t\t\t\t</li>
\t\t\t\t\t";
                        // line 58
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 58), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 58)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 58), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 61
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 62
                                echo "\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 62)) {
                                    // line 63
                                    echo "\t\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 64
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 64);
                                    echo "\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t";
                                    // line 66
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 66);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                                    // line 69
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 69));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 70
                                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 71
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 71);
                                        echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">";
                                        // line 72
                                        echo twig_get_attribute($this->env, $this->source,                                         // line 73
$context["child1"], "name", [], "any", false, false, false, 73);
                                        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 76
                                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                } else {
                                    // line 79
                                    echo "\t\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">

\t\t\t\t\t\t<a class=\"col-md-12\" href=\"";
                                    // line 81
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 81);
                                    echo "\"
\t\t\t\t\t\t\tstyle=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t\t";
                                    // line 83
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 83);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                }
                                // line 87
                                echo "
\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 89
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    } else {
                        // line 94
                        echo "\t\t\t<div class=\"newd\">
\t\t\t\t<ul class=\"dropdown row \"
\t\t\t\t\tstyle=\"  width: -webkit-fill-available;left: 0%;padding: 0px 0px;position: fixed;top: 164px;height: 80vh;overflow-y: scroll;\">

\t\t\t\t\t";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 98), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 98)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 98), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 101
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 102
                                echo "\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 102)) {
                                    // line 103
                                    echo "\t\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: start;padding-left:5%;\">
\t\t\t\t\t\t<div style=\"text-align: start;\">";
                                    // line 104
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 104)) {
                                        // line 105
                                        echo "\t\t\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 105);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 105);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t\t\t";
                                    }
                                    // line 107
                                    echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p
\t\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t\t";
                                    // line 111
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 111);
                                    echo "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                                    // line 115
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 115));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 116
                                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 117
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 117);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 117);
                                        // line 118
                                        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 121
                                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                } else {
                                    // line 124
                                    echo "\t\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
                                    // line 125
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 125);
                                    echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t\t";
                                    // line 126
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 126);
                                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                                }
                                // line 130
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 131
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 132
                        echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
                    }
                    // line 136
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 139
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 140);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 140);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 143
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 147
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
        return array (  342 => 147,  336 => 144,  330 => 143,  322 => 140,  319 => 139,  314 => 136,  308 => 132,  302 => 131,  296 => 130,  289 => 126,  285 => 125,  282 => 124,  277 => 121,  269 => 118,  265 => 117,  262 => 116,  258 => 115,  251 => 111,  245 => 107,  237 => 105,  235 => 104,  232 => 103,  229 => 102,  224 => 101,  220 => 98,  214 => 94,  208 => 90,  202 => 89,  195 => 87,  188 => 83,  183 => 81,  179 => 79,  174 => 76,  165 => 73,  164 => 72,  160 => 71,  157 => 70,  153 => 69,  147 => 66,  142 => 64,  139 => 63,  136 => 62,  131 => 61,  127 => 58,  120 => 54,  110 => 47,  103 => 43,  96 => 39,  89 => 34,  87 => 33,  81 => 32,  77 => 30,  75 => 29,  71 => 27,  67 => 26,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
