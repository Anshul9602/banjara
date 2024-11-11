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
class __TwigTemplate_09c28760685e3d2db1f8ff87372e56cd962a2fb4074eb46feef6bb94a3123ae5 extends \Twig\Template
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
 .main-menu ul li ul.dropdown li a {
 
 padding:0px;}
.col-md-4{
\tmax-width: 33.33% !important;}
\t.topd{
\t\tposition: absolute;
\t\tdisplay: none;
\t\ttransition: 0.3s all ease-in-out;
\t\tbackground-color: #fff;
\t\twidth: 100%;
\t\tleft: 0;
\t\tright: 0;
\t\tz-index: 1;
\t\tpadding: 25px 0 40px;
\t\tborder-top: 1px solid #eee;
\t}



\t.navt{
\t    justify-content: space-evenly;
    align-items: center;
    width: 100%;
    position: relative;}
</style>


";
        // line 33
        if (($context["categories"] ?? null)) {
            // line 34
            echo "<nav class=\"desktop-menu\">
\t<ul class=\"nav justify-content-space-around w-100\">

\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "

\t\t";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "
\t\t<li class=\"dropdown navt\" style=\"position: relative;\">
\t\t\t<a href=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "</a>
\t\t\t";
                    // line 44
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44) == "Wholesale")) {
                        // line 45
                        echo "\t\t\t<ul class=\"dropdown row\"
\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 20%;padding: 0px 0px;position: fixed;top: 150px;height: 80vh;overflow-y: scroll;padding-bottom:20px;\">
\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\" style=\"text-align: start;    justify-content: space-around;\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 49);
                        echo "\" style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 52);
                        echo "\"style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 55);
                        echo "\"style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t



\t\t\t\t\t<a href=\"";
                        // line 61
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 61);
                        echo "\" class=\"mt-5 col-md-12\" style=\"    padding-left: 6%;font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW ALL</a>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t";
                        // line 64
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 64), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 64)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 64), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 66
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 67
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 67)) {
                                    // line 68
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 69
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 69);
                                    echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 70
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 70);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 73
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 73));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 74
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 75
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 75);
                                        echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 75);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 78
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 81
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">
\t\t\t
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 83
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 83);
                                    echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 84
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 84);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 88
                                echo "
\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 90
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "\t\t\t</ul>
\t\t\t";
                    } else {
                        // line 93
                        echo "\t\t\t<ul class=\"dropdown row topd\"
\t\t\t\tstyle=\"  \">

\t\t\t\t";
                        // line 96
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 96), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 96)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 96), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 98
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 99
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 99)) {
                                    // line 100
                                    echo "\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: start;padding-left:5%;\">
 \t\t\t<div style=\"text-align: start;\">";
                                    // line 101
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 101)) {
                                        // line 102
                                        echo "\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 102);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 102);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t";
                                    }
                                    // line 103
                                    echo "</div>
\t\t\t\t\t
\t\t\t\t\t<p
\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t";
                                    // line 107
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 107);
                                    echo "
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
                                    // line 109
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 109);
                                    echo "\" style=\"font-weight: 600; font-size: 20px; color:#32baa1;\">SHOP ALL</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 111
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 111));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 112
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 113
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 113);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 113);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 116
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 119
                                    echo "\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
                                    // line 120
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 120);
                                    echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t";
                                    // line 121
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 121);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 125
                                echo "\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 126
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo "\t\t\t</ul>
\t\t\t";
                    }
                    // line 129
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 132
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 133);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 133);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 136
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 140
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
        return array (  340 => 140,  334 => 137,  328 => 136,  320 => 133,  317 => 132,  312 => 129,  308 => 127,  302 => 126,  296 => 125,  289 => 121,  285 => 120,  282 => 119,  277 => 116,  266 => 113,  263 => 112,  259 => 111,  254 => 109,  249 => 107,  243 => 103,  235 => 102,  233 => 101,  230 => 100,  227 => 99,  222 => 98,  218 => 96,  213 => 93,  209 => 91,  203 => 90,  196 => 88,  189 => 84,  185 => 83,  181 => 81,  176 => 78,  165 => 75,  162 => 74,  158 => 73,  152 => 70,  148 => 69,  145 => 68,  142 => 67,  137 => 66,  133 => 64,  127 => 61,  118 => 55,  112 => 52,  106 => 49,  100 => 45,  98 => 44,  92 => 43,  88 => 41,  86 => 40,  82 => 38,  78 => 37,  73 => 34,  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
