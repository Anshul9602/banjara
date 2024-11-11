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
class __TwigTemplate_3f5ad96b049e6de58f81e1d8d509f712b52c8bd89bec5c91654facb6026ea34b extends \Twig\Template
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
\t



\t
</style>


";
        // line 18
        if (($context["categories"] ?? null)) {
            // line 19
            echo "<nav class=\"desktop-menu\">
\t<ul class=\"nav justify-content-space-around w-100\">

\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 23
                echo "

\t\t";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "
\t\t<li class=\"dropdown \" style=\"position: relative;\">
\t\t\t<a href=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                    echo "</a>
\t\t\t";
                    // line 29
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29) == "Wholesale")) {
                        // line 30
                        echo "\t\t\t<ul class=\"dropdown row\"
\t\t\t\tstyle=\"   width: -webkit-fill-available;left: 20%;padding: 0px 0px;position: fixed;top: 150px;height: 80vh;overflow-y: scroll;padding-bottom:20px;\">
\t\t\t\t<li class=\"col-md-12 pt-3 pb-4hr1 row\" style=\"text-align: start;    justify-content: space-around;\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/4.jpg\" alt=\"";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 34);
                        echo "\" style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/5.jpg\" alt=\"";
                        // line 37
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 37);
                        echo "\"style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"image/new/ti/6.jpg\" alt=\"";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 40);
                        echo "\"style=\"width: 250px;    border-radius: 20px;\">
\t\t\t\t\t</div>
\t\t\t\t\t



\t\t\t\t\t<a href=\"";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 46);
                        echo "\" class=\"mt-5 col-md-12\" style=\"    padding-left: 6%;font-weight: 600; font-size: 23px; color:#dc3545;\">VIEW ALL</a>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 49), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 49)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 49), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 51
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 52
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 52)) {
                                    // line 53
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-3 row\" style=\"text-align: start;\">
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 54
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 54);
                                    echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 55
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 55);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 58
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 58));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 59
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 60
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 60);
                                        echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 60);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 63
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 66
                                    echo "\t\t\t\t<li class=\"col-md-12 hr1 pb-2 row\">
\t\t\t
\t\t\t\t\t<a class=\"col-md-12\"href=\"";
                                    // line 68
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 68);
                                    echo "\" style=\"    padding-left: 6%;font-size: 18px; color:#32baa1;\">
\t\t\t\t\t\t";
                                    // line 69
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 69);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 73
                                echo "
\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 75
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo "\t\t\t</ul>
\t\t\t";
                    } else {
                        // line 78
                        echo "\t\t\t<ul class=\"dropdown row topd\"
\t\t\t\tstyle=\"  \">

\t\t\t\t";
                        // line 81
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 81), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 81)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 81), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 83
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 84
                                echo "\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 84)) {
                                    // line 85
                                    echo "\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: start;padding-left:5%;\">
 \t\t\t<div style=\"text-align: start;\">";
                                    // line 86
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 86)) {
                                        // line 87
                                        echo "\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 87);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 87);
                                        echo "\" style=\"border-radius: 20px;\">
\t\t\t\t\t";
                                    }
                                    // line 88
                                    echo "</div>
\t\t\t\t\t
\t\t\t\t\t<p
\t\t\t\t\t\tstyle=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t";
                                    // line 92
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 92);
                                    echo "
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
                                    // line 94
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 94);
                                    echo "\" style=\"font-weight: 600; font-size: 20px; color:#32baa1;\">SHOP ALL</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 96
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 96));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 97
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 98
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 98);
                                        echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 98);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 101
                                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 104
                                    echo "\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
                                    // line 105
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 105);
                                    echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t";
                                    // line 106
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 106);
                                    echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 110
                                echo "\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 111
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 112
                        echo "\t\t\t</ul>
\t\t\t";
                    }
                    // line 114
                    echo "\t\t</li>

\t\t";
                } else {
                    // line 117
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 118);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 118);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 121
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 125
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
        return array (  325 => 125,  319 => 122,  313 => 121,  305 => 118,  302 => 117,  297 => 114,  293 => 112,  287 => 111,  281 => 110,  274 => 106,  270 => 105,  267 => 104,  262 => 101,  251 => 98,  248 => 97,  244 => 96,  239 => 94,  234 => 92,  228 => 88,  220 => 87,  218 => 86,  215 => 85,  212 => 84,  207 => 83,  203 => 81,  198 => 78,  194 => 76,  188 => 75,  181 => 73,  174 => 69,  170 => 68,  166 => 66,  161 => 63,  150 => 60,  147 => 59,  143 => 58,  137 => 55,  133 => 54,  130 => 53,  127 => 52,  122 => 51,  118 => 49,  112 => 46,  103 => 40,  97 => 37,  91 => 34,  85 => 30,  83 => 29,  77 => 28,  73 => 26,  71 => 25,  67 => 23,  63 => 22,  58 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
