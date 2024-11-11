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
class __TwigTemplate_f7e7844d6a8c5b9b84be5e94331d3b5792d3ab59c4b4210f07cb0e688010293c extends \Twig\Template
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
\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 20%;padding: 0px 0px;position: fixed;top: 150px;height: 80vh;overflow-y: scroll;padding-bottom:20px;\">
\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\" style=\"text-align: start;    justify-content: space-around;\">
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
\t\t\t\t\t



\t\t\t\t\t<a href=\"";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 38);
                        echo "\" class=\"mt-5 col-md-12\" style=\"    padding-left: 6%;font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW ALL</a>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 41), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 41)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 41), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 43
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 44
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 44)) {
                                    // line 45
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 46
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 46);
                                    echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 47
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 47);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 50
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 50));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 51
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 52
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 52);
                                        echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 52);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 55
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 58
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">
\t\t\t
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 60
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 60);
                                    echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 61
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 61);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 65
                                echo "
\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 67
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "\t\t\t</ul>
\t\t\t";
                    } else {
                        // line 70
                        echo "\t\t\t<ul class=\"dropdown row\"
\t\t\t\tstyle=\"  width: -webkit-fill-available;left: 20%;padding: 0px 0px;position: fixed;top: 150px;height: 80vh;overflow-y: scroll;\">

\t\t\t\t";
                        // line 73
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 73), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 73)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 73), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 75
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 76
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 76)) {
                                    // line 77
                                    echo "\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: start;\">
 \t\t\t<div style=\"text-align: center;\">";
                                    // line 78
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 78)) {
                                        // line 79
                                        echo "\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 79);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 79);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t";
                                    }
                                    // line 80
                                    echo "</div>
\t\t\t\t\t
\t\t\t\t\t<p
\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t";
                                    // line 84
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 84);
                                    echo "
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
                                    // line 86
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 86);
                                    echo "\" style=\"font-weight: 600; font-size: 20px; color:#32baa1;\">SHOP ALL</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 88
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 88));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 89
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 90
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 90);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 90);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 93
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 96
                                    echo "\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
                                    // line 97
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 97);
                                    echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t";
                                    // line 98
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 98);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 102
                                echo "\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 103
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 104
                        echo "\t\t\t</ul>
\t\t\t";
                    }
                    // line 106
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 109
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 110);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 110);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 113
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 117
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
        return array (  317 => 117,  311 => 114,  305 => 113,  297 => 110,  294 => 109,  289 => 106,  285 => 104,  279 => 103,  273 => 102,  266 => 98,  262 => 97,  259 => 96,  254 => 93,  243 => 90,  240 => 89,  236 => 88,  231 => 86,  226 => 84,  220 => 80,  212 => 79,  210 => 78,  207 => 77,  204 => 76,  199 => 75,  195 => 73,  190 => 70,  186 => 68,  180 => 67,  173 => 65,  166 => 61,  162 => 60,  158 => 58,  153 => 55,  142 => 52,  139 => 51,  135 => 50,  129 => 47,  125 => 46,  122 => 45,  119 => 44,  114 => 43,  110 => 41,  104 => 38,  95 => 32,  89 => 29,  83 => 26,  77 => 22,  75 => 21,  69 => 20,  65 => 18,  63 => 17,  59 => 15,  55 => 14,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
