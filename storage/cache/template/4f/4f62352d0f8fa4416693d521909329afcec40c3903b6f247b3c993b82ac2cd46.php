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
class __TwigTemplate_0ef9174d636450d3378baf21da58b144bbaa9e818382fbceef0e8398e80bf286 extends \Twig\Template
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
                    echo "\t\t<li class=\"dropdown\" style=\"position: relative;\">
\t\t\t<a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "</a>
\t\t
\t\t\t<ul class=\"dropdown row\" style=\"width: 100vw; left: 0; padding: 50px; position: fixed; top: 180px;\">
\t\t
\t\t\t\t";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 21), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 22
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 23
                            echo "\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 23)) {
                                // line 24
                                echo "\t\t\t\t\t\t\t<li class=\"col-md-4 pt-3 hr1 pb-2\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t";
                                // line 25
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 25)) {
                                    // line 26
                                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 26);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                                    echo "\">
\t\t\t\t\t\t\t\t";
                                }
                                // line 28
                                echo "\t\t\t\t\t\t\t\t<p style=\"color:#dc3545; font-weight: 600; text-transform: uppercase; margin-top: 30px; font-size: 20px;\">
\t\t\t\t\t\t\t\t\t";
                                // line 29
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 29);
                                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"";
                                // line 31
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 31);
                                echo "\" style=\"font-weight: 600; font-size: 20px; color:#32baa1;\">SHOP ALL</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                                // line 33
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 33));
                                foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                    // line 34
                                    echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 35
                                    echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 35);
                                    echo "\" style=\"font-size: 18px; color:#32baa1;\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 35);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 38
                                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                            } else {
                                // line 41
                                echo "\t\t\t\t\t\t\t<li class=\"col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"";
                                // line 42
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 42);
                                echo "\" style=\"color:#32baa1; font-weight: 800; text-transform: uppercase;\">
\t\t\t\t\t\t\t\t\t";
                                // line 43
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 43);
                                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                            }
                            // line 47
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "\t\t\t</ul>
\t\t</li>
\t\t
\t\t";
                } else {
                    // line 53
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 54);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 57
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 61
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
        return array (  191 => 61,  185 => 58,  179 => 57,  171 => 54,  168 => 53,  162 => 49,  156 => 48,  150 => 47,  143 => 43,  139 => 42,  136 => 41,  131 => 38,  120 => 35,  117 => 34,  113 => 33,  108 => 31,  103 => 29,  100 => 28,  92 => 26,  90 => 25,  87 => 24,  84 => 23,  79 => 22,  75 => 21,  66 => 17,  63 => 16,  61 => 15,  57 => 13,  53 => 12,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
