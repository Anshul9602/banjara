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
class __TwigTemplate_7aa93086bb1f5e71c9e0309f3737ec7ef2e8da5206ec53fcec8f73cfcb517ec0 extends \Twig\Template
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
.hr1 hr{
\tmargin-top: 0;
}
</style>


";
        // line 8
        if (($context["categories"] ?? null)) {
            // line 9
            echo "\t<nav class=\"desktop-menu\">
\t\t<ul class=\"nav justify-content-space-around w-100\">

\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "

\t\t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "</a>
\t\t\t\t\t\t";
                    // line 18
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18) == "Collection")) {
                        // line 19
                        echo "\t\t\t\t\t\t<ul class=\"dropdown \">

\t\t\t\t\t\t\t";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 21), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 22
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 23
                                echo "
\t\t\t\t\t\t\t\t\t";
                                // line 24
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 24)) {
                                    // line 25
                                    echo "\t\t\t\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" style=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \">";
                                    // line 26
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                                    echo "</a>

\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 29
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 29));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 30
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 31
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 31);
                                        echo "\" style=\"    font-size: 13px;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 31);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 34
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 40
                                    echo "\t\t\t\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 41
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 41);
                                    echo " \" style=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 41);
                                    echo "</a>


\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 46
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 47
                            echo "\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    } else {
                        // line 50
                        echo "\t\t\t\t\t\t<ul class=\"dropdown row\" style=\"width:1200px;left:-200px;\">

\t\t\t\t\t\t\t";
                        // line 52
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 52), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 52)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 52), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 53
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 54
                                echo "
\t\t\t\t\t\t\t\t\t";
                                // line 55
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 55)) {
                                    // line 56
                                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\" col-md-4 pt-3 hr1 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<p  style=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \" >";
                                    // line 57
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 57);
                                    echo "</p>
<hr>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 60
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 60));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 61
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 62
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 62);
                                        echo "\" style=\"    font-size: 13px;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 62);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 65
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 71
                                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\" col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 72
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 72);
                                    echo " \" style=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 72);
                                    echo "</a>


\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 77
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 78
                            echo "\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    }
                    // line 81
                    echo "\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\" ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 84);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 84);
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 87
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t</li>
\t\t
\t</ul>
</nav>";
        }
        // line 91
        echo "</li>
";
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
        return array (  265 => 91,  259 => 88,  253 => 87,  245 => 84,  242 => 83,  238 => 81,  234 => 79,  228 => 78,  222 => 77,  212 => 72,  209 => 71,  201 => 65,  190 => 62,  187 => 61,  183 => 60,  177 => 57,  174 => 56,  172 => 55,  169 => 54,  164 => 53,  160 => 52,  156 => 50,  152 => 48,  146 => 47,  140 => 46,  130 => 41,  127 => 40,  119 => 34,  108 => 31,  105 => 30,  101 => 29,  95 => 26,  92 => 25,  90 => 24,  87 => 23,  82 => 22,  78 => 21,  74 => 19,  72 => 18,  66 => 17,  63 => 16,  61 => 15,  57 => 13,  53 => 12,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
