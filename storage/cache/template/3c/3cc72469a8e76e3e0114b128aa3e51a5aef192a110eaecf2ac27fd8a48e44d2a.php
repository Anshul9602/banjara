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
class __TwigTemplate_fb30be36e1a17df8a868fef00950a50a589d25dad4029113c5579f3c9cd5a291 extends \Twig\Template
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
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
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
<br />
<div id=\"checkout-cart\" class=\"container\">
\t<div class=\"row\">

\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 26
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1 class=\"text-center\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t</h1>
\t\t\t<br />
\t\t\t<form action=\"";
        // line 30
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
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 58
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 62);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
                echo "\" style=\"max-width:80px\" /></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a class=\"pt-10\" href=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
            echo "</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            // line 72
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 72)) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*(Out Of stock)</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 75)) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t<small>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 77);
                    echo ":
\t\t\t\t\t\t\t\t\t\t";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 78);
                    echo "</small>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 82)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<small>";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 84);
                echo "</small>
\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 86)) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                // line 88
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t<small>";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 89);
                echo "</small>
\t\t\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\tid=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\"
\t\t\t\t\t\t\t\t\t\tstyle=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\"
\t\t\t\t\t\t\t\t\t\tid=\"input-quantity\" value=\"1\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\tid=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 112);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 113);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 115
            echo ($context["button_remove"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" onclick=\"cart.remove('";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 116);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 128
        if (($context["modules1"] ?? null)) {
            // line 129
            echo "\t\t\t<h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
\t\t\t<p>";
            // line 130
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 133
                echo "\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 137
        echo "\t\t\t<br />
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 offset-sm-8\">

\t\t\t\t\t";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 142
            echo "\t\t\t\t\t<div class=\"row mt-10\">
\t\t\t\t\t\t<div class=\"col-sm-6 text-uppercase\">
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t<strong>";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 145);
            echo ":</strong>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 text-right \">
\t\t\t\t\t\t\t<p style=\"font-size:14px\">";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 149);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br />
\t\t\t";
        // line 158
        echo ($context["coupon"] ?? null);
        echo "

\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
        // line 164
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 167
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 169
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div><br /><br />
<script>


\t\$(document).ready(function () {
\t\t\$(\"#add_quantity\").click(function () {

\t\t\tconsole.log('Adding quantity');
\t\t\tvar b = Number(\$(\"#input-quantity\").val()) + 1;

\t\t\t\$(\".iq\").val(b);
\t\t})
\t\t\$(\"#less_quantity\").click(function () {
\t\t\tvar b = Number(\$(\"#input-quantity\").val()) - 1;
\t\t\tif (b < 0) {
\t\t\t\tb = 0;
\t\t\t}
\t\t\t\$(\".iq\").val(b);
\t\t})
\t});</script>";
        // line 190
        echo ($context["footer"] ?? null);
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
        return array (  386 => 190,  362 => 169,  357 => 167,  351 => 164,  342 => 158,  336 => 154,  325 => 149,  318 => 145,  313 => 142,  309 => 141,  303 => 137,  299 => 135,  290 => 133,  286 => 132,  281 => 130,  276 => 129,  274 => 128,  266 => 122,  254 => 116,  250 => 115,  245 => 113,  241 => 112,  218 => 91,  213 => 89,  209 => 88,  206 => 87,  203 => 86,  198 => 84,  195 => 83,  192 => 82,  189 => 81,  180 => 78,  175 => 77,  170 => 76,  167 => 75,  163 => 73,  161 => 72,  156 => 70,  151 => 68,  146 => 65,  141 => 63,  135 => 62,  130 => 61,  128 => 60,  124 => 58,  120 => 57,  90 => 30,  84 => 27,  80 => 26,  67 => 15,  55 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
