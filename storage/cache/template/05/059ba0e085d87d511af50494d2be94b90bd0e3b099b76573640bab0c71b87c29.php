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
class __TwigTemplate_33af10ed97d8744ae6be327e03c50de0c70bd744093e61bcc3a2e0dc9f3c45a3 extends \Twig\Template
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
\t\t\t<br/>
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
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 62);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
                echo "\" style=\"max-width:80px\"/></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"pt-10\" href=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 67);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 71
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 71)) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*(Out Of stock)</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 74)) {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 76);
                    echo ":
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 77);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 81)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 83);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 85)) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                // line 87
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 88);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\" class=\"fa fa-minus less_quantity\"></li>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 98);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 98);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-sm-4 addqty\">
\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\" class=\"fa fa-plus add_quantity\"></li>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 106);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 108
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 108);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 120
        if (($context["modules1"] ?? null)) {
            // line 121
            echo "\t\t\t\t<h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
\t\t\t\t<p>";
            // line 122
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 125
                echo "\t\t\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 129
        echo "\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 offset-sm-8\">

\t\t\t\t\t";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 134
            echo "\t\t\t\t\t\t<div class=\"row mt-10\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-uppercase\">
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t<strong>";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 137);
            echo ":</strong>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right \">
\t\t\t\t\t\t\t\t<p style=\"font-size:14px\">";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 141);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<br/>
      ";
        // line 150
        echo ($context["coupon"] ?? null);
        echo "

\t\t<div class=\"buttons clearfix\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t<a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
        // line 156
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 159
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t";
        // line 160
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
        return array (  356 => 160,  352 => 159,  346 => 156,  337 => 150,  331 => 146,  320 => 141,  313 => 137,  308 => 134,  304 => 133,  298 => 129,  294 => 127,  285 => 125,  281 => 124,  276 => 122,  271 => 121,  269 => 120,  261 => 114,  247 => 108,  242 => 106,  238 => 105,  226 => 98,  216 => 90,  211 => 88,  207 => 87,  204 => 86,  201 => 85,  196 => 83,  193 => 82,  190 => 81,  187 => 80,  178 => 77,  173 => 76,  168 => 75,  165 => 74,  161 => 72,  159 => 71,  154 => 69,  149 => 67,  144 => 64,  135 => 62,  130 => 61,  128 => 60,  124 => 58,  120 => 57,  90 => 30,  84 => 27,  80 => 26,  67 => 15,  55 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
