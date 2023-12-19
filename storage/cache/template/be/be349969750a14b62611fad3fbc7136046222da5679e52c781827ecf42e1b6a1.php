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
class __TwigTemplate_9f5ff358ae8a09fec2bddc2ad5b03c533edc95c15cdb75447b0e143c6d2ad90a extends \Twig\Template
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
</style>


";
        // line 8
        if (($context["categories"] ?? null)) {
            // line 9
            echo "<nav class=\"desktop-menu\">
\t<ul class=\"nav justify-content-space-around w-100\">

\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "

\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t<li class=\"dropdown\">
\t\t\t<a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "</a>
\t\t\t";
                    // line 18
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18) == "Collection")) {
                        // line 19
                        echo "\t\t\t<ul class=\"dropdown \">

\t\t\t\t";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 21), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 23
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 24
                                echo "
\t\t\t\t";
                                // line 25
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 25)) {
                                    // line 26
                                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"\" style=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \">";
                                    // line 27
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 27);
                                    // line 28
                                    echo "</a>

\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 31
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 31));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 32
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 33
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 33);
                                        echo "\" style=\"    font-size: 13px;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 33);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 36
                                    echo "
\t\t\t\t\t</ul>

\t\t\t\t\t<hr>
\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 42
                                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                                    // line 43
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 43);
                                    echo " \"
\t\t\t\t\t\tstyle=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \">";
                                    // line 44
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                                    echo "</a>


\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 49
                                echo "\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 50
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "\t\t\t</ul>
\t\t\t";
                    } else {
                        // line 53
                        echo "\t\t\t<ul class=\"dropdown row\" style=\"width:1200px;left:-200px;padding: 50px;\">

\t\t\t\t";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 55), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 55)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 55), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 57
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 58
                                echo "
\t\t\t\t";
                                // line 59
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 59)) {
                                    // line 60
                                    echo "\t\t\t\t<li class=\" col-md-4 pt-3 hr1 pb-2\" style=\"text-align: center;\">
\t\t\t\t\t";
                                    // line 61
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 61)) {
                                        // line 62
                                        echo "\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 62);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 62);
                                        echo "\">
\t\t\t\t\t";
                                    }
                                    // line 64
                                    echo "\t\t\t\t\t<p
\t\t\t\t\t\tstyle=\" color:#32baa1;font-weight: 600;text-transform: uppercase;margin-top: 30px;font-size: 20px;\">
\t\t\t\t\t\t";
                                    // line 66
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 66);
                                    echo "</p>

\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                    // line 69
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 69));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                        // line 70
                                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                        // line 71
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 71);
                                        echo "\" style=\"    font-size: 18px;color:#32baa1;\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 71);
                                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 74
                                    echo "
\t\t\t\t\t</ul>


\t\t\t\t</li>
\t\t\t\t";
                                } else {
                                    // line 80
                                    echo "\t\t\t\t<li class=\" col-md-4\">
\t\t\t\t\t<a href=\"";
                                    // line 81
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 81);
                                    echo " \"
\t\t\t\t\t\tstyle=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \">";
                                    // line 82
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 82);
                                    echo "</a>


\t\t\t\t</li>
\t\t\t\t";
                                }
                                // line 87
                                echo "\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 88
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "\t\t\t</ul>
\t\t\t";
                    }
                    // line 91
                    echo "\t\t</li>
\t\t";
                } else {
                    // line 93
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 94);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 94);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 97
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 101
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
        return array (  284 => 101,  278 => 98,  272 => 97,  264 => 94,  261 => 93,  257 => 91,  253 => 89,  247 => 88,  241 => 87,  233 => 82,  229 => 81,  226 => 80,  218 => 74,  207 => 71,  204 => 70,  200 => 69,  194 => 66,  190 => 64,  182 => 62,  180 => 61,  177 => 60,  175 => 59,  172 => 58,  167 => 57,  163 => 55,  159 => 53,  155 => 51,  149 => 50,  143 => 49,  135 => 44,  131 => 43,  128 => 42,  120 => 36,  109 => 33,  106 => 32,  102 => 31,  97 => 28,  95 => 27,  92 => 26,  90 => 25,  87 => 24,  82 => 23,  78 => 21,  74 => 19,  72 => 18,  66 => 17,  63 => 16,  61 => 15,  57 => 13,  53 => 12,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
