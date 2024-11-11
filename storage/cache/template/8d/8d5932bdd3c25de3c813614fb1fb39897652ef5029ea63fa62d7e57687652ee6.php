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

/* default/template/common/mobile_menu.twig */
class __TwigTemplate_37217d497132c8219c7968a0ad2fd2f637f7606772a775eb5b3c974e280fee65 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<style>
\t.mobile_menu .col-12 hr {
\t\tmargin: 7px 0;
\t}

\t.mobile-navigation {
\t\tmax-height: 500px;
\t}

\t.mobile_menu .col-12 a {
\t\ttext-transform: uppercase;
\t\tcolor: #333;
\t\tfont-size: 12px;
\t}

\t.collapse-span {
\t\tdisplay: none;
\t}
</style>
<div class=\"row mobile_menu\">
\t<br />
\t<br />
\t<div class=\"col-12\" style='margin-top:10px'>
\t\t<a href=\"index.php?route=common/home\">Home</a>
\t\t<hr />
\t</div>
\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t<div class=\"col-12\">
\t\t<a href=\"#\" class=\"collapse-toggle\">";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                    echo "</a>
\t\t<hr />
\t\t<span class=\"collapse-span\">
\t\t\t";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 34), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 34)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 34), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 35
                        echo "\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 36
                            echo "\t\t\t<div class=\"col-12\">
\t\t\t\t<a href=\"";
                            // line 37
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 37);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 37);
                            echo "</a>
\t\t\t\t<hr />
\t\t\t</div>
\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t\t\t<span>
\t</div>
\t";
                } else {
                    // line 45
                    echo "\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45) == "Diamonds") || (twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45) == "diamonds"))) {
                        // line 46
                        echo "\t<div class=\"col-12\">
\t\t<a href=\"index.php?route=common/diamonds\">";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47);
                        echo "</a>
\t\t<hr />
\t</div>
\t";
                    } else {
                        // line 51
                        echo "\t<div class=\"col-12\">
\t\t<a href=\"";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 52);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52);
                        echo "</a>
\t\t<hr />
\t</div>
\t";
                    }
                    // line 56
                    echo "\t";
                }
                // line 57
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t<div class=\"col-12\">
\t\t<a href=\"index.php?route=common/about\">About Us</a>
\t</div>
\t";
        }
        // line 62
        echo "</div>
<script>
\t\$(document).ready(function () {
\t\t\$(\".collapse-toggle\").click(function (e) {
\t\t\te.preventDefault();
\t\t\t\$(\".collapse-span\").slideToggle();
\t\t})
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/mobile_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 62,  152 => 58,  146 => 57,  143 => 56,  134 => 52,  131 => 51,  124 => 47,  121 => 46,  118 => 45,  113 => 42,  107 => 41,  95 => 37,  92 => 36,  87 => 35,  83 => 34,  77 => 31,  74 => 30,  71 => 29,  67 => 28,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/mobile_menu.twig", "");
    }
}
