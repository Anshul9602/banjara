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
class __TwigTemplate_edb3ce76a84c1564ea2591f333e0edeb7b76c24c65dae62f2c4c9e39577aa169 extends \Twig\Template
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
\t\t\t
\t\t\t<ul class=\"dropdown row\" style=\"width:1200px;left:-200px;padding: 50px;\">

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
                                echo "\t\t\t\t<li class=\" col-md-4 pt-3 hr1 pb-2\" style=\"text-align: center;\">
\t\t\t\t\t";
                                // line 27
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 27)) {
                                    // line 28
                                    echo "\t\t\t\t\t<img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 28);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 28);
                                    echo "\">
\t\t\t\t\t";
                                }
                                // line 30
                                echo "\t\t\t\t\t<p
\t\t\t\t\t\tstyle=\" color:#dc3545;font-weight: 600;text-transform: uppercase;margin-top: 30px;font-size: 20px;\">
\t\t\t\t\t\t";
                                // line 32
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 32);
                                echo "</p>
\t\t\t\t\t\t<a href=\"";
                                // line 33
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 33);
                                echo "\" style=\" font-weight: 600;   font-size: 20px;color:#32baa1;\">SHOP ALL</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                                // line 35
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 35));
                                foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                    // line 36
                                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                    // line 37
                                    echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 37);
                                    echo "\" style=\"    font-size: 18px;color:#32baa1;\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 37);
                                    echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 40
                                echo "
\t\t\t\t\t</ul>


\t\t\t\t</li>
\t\t\t\t";
                            } else {
                                // line 46
                                echo "\t\t\t\t<li class=\" col-md-4\">
\t\t\t\t\t<a href=\"";
                                // line 47
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 47);
                                echo " \"
\t\t\t\t\t\tstyle=\" color:#32baa1;font-weight: 800;    text-transform: uppercase; \">";
                                // line 48
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 48);
                                echo "</a>


\t\t\t\t</li>
\t\t\t\t";
                            }
                            // line 53
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "\t\t\t</ul>
\t\t\t
\t\t</li>
\t\t";
                } else {
                    // line 59
                    echo "\t\t<li>
\t\t\t<a href=\" ";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 60);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60);
                    echo "</a>
\t\t</li>
\t\t";
                }
                // line 63
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t</li>

\t</ul>
</nav>";
        }
        // line 67
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
        return array (  197 => 67,  191 => 64,  185 => 63,  177 => 60,  174 => 59,  168 => 55,  162 => 54,  156 => 53,  148 => 48,  144 => 47,  141 => 46,  133 => 40,  122 => 37,  119 => 36,  115 => 35,  110 => 33,  106 => 32,  102 => 30,  94 => 28,  92 => 27,  89 => 26,  87 => 25,  84 => 24,  79 => 23,  75 => 21,  66 => 17,  63 => 16,  61 => 15,  57 => 13,  53 => 12,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
