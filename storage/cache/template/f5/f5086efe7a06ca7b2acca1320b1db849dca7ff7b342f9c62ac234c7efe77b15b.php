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
class __TwigTemplate_4dadce0f2fe2dd37910e600935c9bd8451dd23b5a55162d47b5cfa7feff7060d extends \Twig\Template
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
.col-md-4{
\tmax-width: 33.33% !important;}
</style>


";
        // line 10
        if (($context["categories"] ?? null)) {
            // line 11
            echo "<nav class=\"desktop-menu\">
\t<ul class=\"nav justify-content-space-around w-100\">

\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "

\t\t";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "
\t\t<li class=\"dropdown\" style=\"position: relative;\">
\t\t\t<a href=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                    echo "</a>
\t\t\t";
                    // line 21
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21) == "Wholesale")) {
                        // line 22
                        echo "\t\t\t<ul class=\"dropdown row\"
\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 20%;padding: 0px 0px;position: fixed;top: 150px;height: 80vh;overflow-y: scroll;\">
\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\" style=\"text-align: start;\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 26);
                        echo "\" style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 29);
                        echo "\"style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 32);
                        echo "\"style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/7.jpg\" alt=\"";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 35);
                        echo "\"style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>



\t\t\t\t\t<a href=\"";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 40);
                        echo "\" class=\"mt-5\" style=\"font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW ALL</a>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t";
                        // line 43
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 43), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 43)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 43), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 45
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 46
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 46)) {
                                    // line 47
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 48
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 48);
                                    echo "\" style=\"font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 49
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 49);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 52
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 52));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 53
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 54
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 54);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 54);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 57
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 60
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">
\t\t\t
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 62
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 62);
                                    echo "\" style=\"font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 63
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 63);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 67
                                echo "
\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 69
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 70
                        echo "\t\t\t</ul>
\t\t\t";
                    } else {
                        // line 72
                        echo "\t\t\t<ul class=\"dropdown row\"
\t\t\t\tstyle=\"  width: -webkit-fill-available;left: 20%;padding: 20px 50px;position: fixed;top: 150px;height: 80vh;overflow-y: scroll;\">

\t\t\t\t";
                        // line 75
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 75), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 75)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 75), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 77
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 78
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 78)) {
                                    // line 79
                                    echo "\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: center;\">
\t\t\t\t\t";
                                    // line 80
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 80)) {
                                        // line 81
                                        echo "\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 81);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 81);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t";
                                    }
                                    // line 83
                                    echo "\t\t\t\t\t<p
\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t";
                                    // line 85
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 85);
                                    echo "
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
                                    // line 87
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 87);
                                    echo "\" style=\"font-weight: 600; font-size: 20px; color:#32baa1;\">SHOP ALL</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 89
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 89));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 90
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 91
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 91);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 91);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 94
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 97
                                    echo "\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
                                    // line 98
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 98);
                                    echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t";
                                    // line 99
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 99);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 103
                                echo "\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 104
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "\t\t\t</ul>
\t\t\t";
                    }
                    // line 107
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 110
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 111);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 111);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 114
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 118
        echo "</li>";
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
        return array (  320 => 118,  314 => 115,  308 => 114,  300 => 111,  297 => 110,  292 => 107,  288 => 105,  282 => 104,  276 => 103,  269 => 99,  265 => 98,  262 => 97,  257 => 94,  246 => 91,  243 => 90,  239 => 89,  234 => 87,  229 => 85,  225 => 83,  217 => 81,  215 => 80,  212 => 79,  209 => 78,  204 => 77,  200 => 75,  195 => 72,  191 => 70,  185 => 69,  178 => 67,  171 => 63,  167 => 62,  163 => 60,  158 => 57,  147 => 54,  144 => 53,  140 => 52,  134 => 49,  130 => 48,  127 => 47,  124 => 46,  119 => 45,  115 => 43,  109 => 40,  101 => 35,  95 => 32,  89 => 29,  83 => 26,  77 => 22,  75 => 21,  69 => 20,  65 => 18,  63 => 17,  59 => 15,  55 => 14,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
