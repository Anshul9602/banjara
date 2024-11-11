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

/* default/template/checkout/cart.twig */
class __TwigTemplate_fe7a78c31fc344261035cc7a5707ab4e044b756d9abe1b5a18cd59418b5641f8 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/>
<style>
.collapse{
    display: block !important ;
}</style>
<div id=\"checkout-cart\" class=\"container\">
\t<div class=\"row\">

\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 30
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1 class=\"text-center\">";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t</h1>
\t\t\t<br/>
\t\t\t<form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table cart-table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<p>Image</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<p>Name</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<p>Quantity</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<p>Price</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<p>Total</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<p>Remove</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 64
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 64)) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 66);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "\" style=\"max-width:80px\"/></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"pt-10\" href=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 75
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 75)) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*(Out Of stock)</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 78)) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 80);
                    echo ":
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 81);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 85)) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 87);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 89)) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                // line 91
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 92);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\" class=\"fa fa-minus less_quantity\"></li>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 102);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 102);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-sm-4 addqty\">
\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\" class=\"fa fa-plus add_quantity\"></li>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 110);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 112
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 112);
            echo "');\" style=\"margin-left: 25%;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 124
        if (($context["modules1"] ?? null)) {
            // line 125
            echo "\t\t\t\t<h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
\t\t\t\t<p>";
            // line 126
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 129
                echo "\t\t\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 133
        echo "\t\t\t<hr>
\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 offset-sm-8\">

\t\t\t\t\t";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 139
            echo "\t\t\t\t\t\t<div class=\"row mt-10\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-uppercase\">
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t<strong>";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 142);
            echo ":</strong>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right \">
\t\t\t\t\t\t\t\t<p style=\"font-size:14px\">";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 146);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<br/>
      ";
        // line 155
        echo ($context["coupon"] ?? null);
        echo "

\t\t<div class=\"buttons clearfix\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t<a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
        // line 161
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 164
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t";
        // line 165
        echo ($context["column_right"] ?? null);
        echo "</div></div><br/><br/>";
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 165,  357 => 164,  351 => 161,  342 => 155,  336 => 151,  325 => 146,  318 => 142,  313 => 139,  309 => 138,  302 => 133,  298 => 131,  289 => 129,  285 => 128,  280 => 126,  275 => 125,  273 => 124,  265 => 118,  251 => 112,  246 => 110,  242 => 109,  230 => 102,  220 => 94,  215 => 92,  211 => 91,  208 => 90,  205 => 89,  200 => 87,  197 => 86,  194 => 85,  191 => 84,  182 => 81,  177 => 80,  172 => 79,  169 => 78,  165 => 76,  163 => 75,  158 => 73,  153 => 71,  148 => 68,  139 => 66,  134 => 65,  132 => 64,  128 => 62,  124 => 61,  94 => 34,  88 => 31,  84 => 30,  67 => 15,  55 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
