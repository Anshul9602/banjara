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

/* default/template/product/product.twig */
class __TwigTemplate_a5f07bb76a7ec84eff185ca57cd10a72b164595c853aa2d17b0efec8893c7bff extends \Twig\Template
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
<style>
\t/****radio css***/
\t.radio-custom label {
\t\tdisplay: inline-block;
\t\tmargin-left: 4px;
\t\tcursor: pointer;
\t\tfont-weight: 500;
\t\tposition: relative;
\t\toverflow: hidden;

\t\tfloat: left;

\t}

\t.slick-arrow {
\t\tdisplay: none !important;
\t}

\t.radio-custom label input {
\t\tposition: absolute;
\t\tleft: -9999px;
\t}

\t.radio-custom label input:checked+span {
\t\tbackground-color: #d97676;
\t\tcolor: #fff;
\t}

\t.radio-custom label span {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tpadding: 10px 20px;
\t\tborder-radius: 99em;
\t\ttransition: 0.25s ease;
\t\tbackground-color: #fff;
\t\tborder: thin solid #333;
\t}

\t.mob_dnone .slick-current img {
\t\tborder: 2px solid #08947a !important;
\t}

\t.rp img {
\t\tborder-radius: 20px;
\t}
</style>
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\" style=\"    text-transform: lowercase;\">
\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 56
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 57);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 57);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br />
<div id=\"product-product\" class=\"container\">
\t<div class=\"row\">
\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 71
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row \" style=\"justify-content:space-around;\">
\t\t\t\t<div class=\"col-sm-1 mob_dnone\">
\t\t\t\t\t";
        // line 74
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 75
            echo "\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t";
            // line 76
            if (($context["thumb"] ?? null)) {
                // line 77
                echo "\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"    border-radius: 30px;\" /></li>
\t\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 81
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 82
                    echo "\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 83);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\tstyle=\"    border-radius: 30px;\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 90
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5 pl-3 pr-3\">
\t\t\t\t\t";
        // line 93
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 94
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 95
            if (($context["thumb"] ?? null)) {
                // line 96
                echo "\t\t\t\t\t\t<li class=\"d-flex justify-content-center\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"max-height:700px;\" alt=\"";
                // line 97
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 100
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 101
                    echo "\t\t\t\t\t\t<li class=\"image-additional d-flex justify-content-center\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 102);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" style=\"max-height:700px;\"
\t\t\t\t\t\t\t\talt=\"";
                    // line 103
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "\t\t\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-10 col-10\">
\t\t\t\t\t\t\t<h2 class=\"text-capitalize\" >";
        // line 114
        echo         // line 115
($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-2 text-end pl-0\" style=\"text-align: end;\">
\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
        // line 118
        echo ($context["product_id"] ?? null);
        echo "');\" style=\"top:0;\">
\t\t\t\t\t\t\t\t";
        // line 119
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 119)) {
            // line 120
            echo "\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 120);
            echo "\" btnname=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 120);
            echo "\"
\t\t\t\t\t\t\t\t\tbtnimg=\"";
            // line 121
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 121);
            echo "\" btnhref=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 121);
            echo "\"
\t\t\t\t\t\t\t\t\tbtnprice=\"";
            // line 122
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 122);
            echo "\" btnsprice=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 122);
            echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"color: #de4d71; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t";
        } else {
            // line 125
            echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #de4d71; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 133
        echo "\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 134
            echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 137
                echo "\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo " <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 150
        echo "
\t\t\t\t\t";
        // line 151
        if (($context["price"] ?? null)) {
            // line 152
            echo "\t\t\t\t\t<ul class=\"list-unstyled mt-4 mb-2\">
\t\t\t\t\t\t";
            // line 153
            if ( !($context["special"] ?? null)) {
                // line 154
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h2 style=\"color: #08947a;\">";
                // line 155
                echo ($context["price"] ?? null);
                echo "</h2>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            } else {
                // line 158
                echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h2 style=\"color: #08947a;\">";
                // line 160
                echo ($context["special"] ?? null);
                echo " <span
\t\t\t\t\t\t\t\t\tstyle=\"text-decoration: line-through;font-size:14px;color:#de4d71;\">";
                // line 161
                echo ($context["price"] ?? null);
                // line 162
                echo "</span></h2>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 165
            echo "
\t\t\t\t\t\t";
            // line 166
            if (($context["discounts"] ?? null)) {
                // line 167
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 171
                    echo "\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 171);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 171);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t<br>

\t\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t";
        // line 179
        if (($context["options"] ?? null)) {
            // line 180
            echo "\t\t\t\t\t\t<hr>

\t\t\t\t\t\t";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 183
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 183) == "select")) {
                    // line 184
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 184)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 185);
                    // line 186
                    echo "</label>
\t\t\t\t\t\t\t<select name=\"option[";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "]\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 189
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 191
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 191);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 191);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 192
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 192)) {
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 193);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 193);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 195
                        echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 197
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 200) == "radio")) {
                    // line 201
                    echo "\t\t\t\t\t\t<div class=\"row form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 201)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"col-md-12 control-label float-r\">";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "
\t\t\t\t\t\t\t\t&nbsp; &nbsp; &nbsp;

\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<ul class=\"\">

\t\t\t\t\t\t\t\t\t";
                    // line 209
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 209));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 210
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"radio-custom \">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes'
\t\t\t\t\t\t\t\t\t\t\t\tname=\"option[";
                        // line 213
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 214
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 214);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-sign=\"";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 215);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-price=\"";
                        // line 216
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 216);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 217
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 217)) {
                            // line 218
                            echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 218);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 219
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 219);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 219);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 222
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 223);
                        echo "</span>

\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 233) == "checkbox")) {
                    // line 234
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 237
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 237));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 238
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 240
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                        echo "][]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 241);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 242
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 242)) {
                            // line 243
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 243);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 244
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 244);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 244)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 244);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 244);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 247
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 247);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 248
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248)) {
                            // line 249
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 249);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 249);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 251
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 254
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 257
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 257) == "text")) {
                    // line 258
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 258)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 259);
                    // line 260
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 261);
                    echo "\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 262
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 262);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 262);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 266
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 266) == "textarea")) {
                    // line 267
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 267)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 268);
                    // line 269
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 270);
                    echo "]\" rows=\"5\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 271);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\">";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 272);
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 275
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 275) == "file")) {
                    // line 276
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 276)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 277
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 277);
                    echo "</label>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 278
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 278);
                    echo "\"
\t\t\t\t\t\t\t\tdata-loading-text=\"";
                    // line 279
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 281
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 282
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 282);
                    echo "]\" value=\"\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 286
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 286) == "date")) {
                    // line 287
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 287)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 288);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 288);
                    // line 289
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 291);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 292);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 293);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 302
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 302) == "datetime")) {
                    // line 303
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 303)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 304
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 304);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 304);
                    // line 305
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 307);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 308);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 309);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 318
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 318) == "time")) {
                    // line 319
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 319)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 320);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 320);
                    // line 321
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 323);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 324);
                    echo "\" data-date-format=\"HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 325);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 334
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "\t\t\t\t\t\t";
        }
        // line 336
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 337
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h3>";
            // line 338
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 341
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 343
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 343);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 343);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 349
        echo "
\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 351
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
\t\t\t\t\t\t\t\tclass=\"form-control iq\" />

\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px; margin-top:-12px; max-width:300px\"
\t\t\t\t\t\t\t\tclass=\"row m-0\">
\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\"
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
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 374
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
        // line 378
        echo "\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%' id=\"button-cart\"
\t\t\t\t\t\t\t\t\tdata-loading-text=\"";
        // line 380
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn col-md-6 col-6 btn-primary btn-lg btn-block\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t";
        // line 383
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\"
\t\t\t\t\t\t\t\t\tstyle=\"float:right; max-width:49%;background-color:#de4d71;\"
\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-5 btn btn-primary btn-lg \">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 394
        if ((($context["minimum"] ?? null) > 1)) {
            // line 395
            echo "\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t";
            // line 397
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 400
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<h5>Description
\t\t\t\t\t</h5>
\t\t\t\t\t<hr />
\t\t\t\t\t";
        // line 405
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t<hr />
\t\t\t\t\t";
        // line 407
        echo ($context["meta_desc"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 411
        if (($context["products"] ?? null)) {
            // line 412
            echo "
\t\t\t<div class=\"row mt-5\">
\t\t\t\t<div class=\"col-md-6 pt-4 text-center m-auto\">
\t\t\t\t\t<h3>You May Also Like</h3>
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"row mt-4 justify-content-center\">

\t\t\t\t";
            // line 423
            if (($context["products"] ?? null)) {
                // line 424
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 425
                    echo "\t\t\t\t<div class=\"col-md-3 col-6\">
\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t<div class=\"image rp\">
\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                    // line 428
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 428);
                    echo "\">
\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999;width:100%;\" src=\"";
                    // line 429
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 429);
                    echo "\"
\t\t\t\t\t\t\t\t\talt=\"";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 430);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 430);
                    echo "\" class=\"img-responsive pthumb\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                    // line 433
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 433);
                    echo "');\">
\t\t\t\t\t\t\t";
                    // line 434
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 434)) {
                        // line 435
                        echo "\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 435);
                        echo "\" btnname=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 435);
                        echo "\"
\t\t\t\t\t\t\t\tbtnimg=\"";
                        // line 436
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 436);
                        echo "\" btnhref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 436);
                        echo "\" btnprice=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 436);
                        echo "\"
\t\t\t\t\t\t\t\tbtnsprice=\"";
                        // line 437
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 437);
                        echo "\" style=\"color: #de4d71; font-size:24px;\"></i>
\t\t\t\t\t\t\t";
                    } else {
                        // line 439
                        echo "\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #de4d71; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t";
                    }
                    // line 442
                    echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div style=\"min-height: 77px;\">
\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                    // line 444
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 444);
                    echo "\">
\t\t\t\t\t\t\t\t<p class=\"product_name\" style=\"color:#000; font-size:14px; text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t";
                    // line 446
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 446);
                    echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 449
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 449)) {
                        // line 450
                        echo "\t\t\t\t\t\t\t<p class=\"price mb-10\" style=\"color:#08947a;\">
\t\t\t\t\t\t\t\t";
                        // line 451
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 451)) {
                            // line 452
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 452);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 454
                            echo "\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap;color:#08947a;\" class=\"price-new\">
\t\t\t\t\t\t\t\t\t";
                            // line 455
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 455);
                            echo "
\t\t\t\t\t\t\t\t</span>


\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap;color: #de4d71;\" class=\"price-old\">
\t\t\t\t\t\t\t\t\t";
                            // line 460
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 460);
                            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 463
                        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                    }
                    // line 465
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn btn-primary\" onclick=\"cart.add('";
                    // line 466
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 466);
                    echo "');\">ADD TO
\t\t\t\t\t\t\tCART</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 471
                echo "\t\t\t\t";
            }
            // line 472
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 476
        echo "\t";
        if (($context["tags"] ?? null)) {
            // line 477
            echo "\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t";
            // line 478
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 479
                echo "\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 479);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 479);
                    echo "</a>,
\t\t\t";
                } else {
                    // line 481
                    echo "\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 481);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 481);
                    echo "</a>
\t\t\t";
                }
                // line 483
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 484
            echo "\t</p>
\t";
        }
        // line 486
        echo "</div>
</div>
</div>
<br /><br />
<script type=\"text/javascript\">


\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t// -->
</script>
<script type=\"text/javascript\">
\tvar siz = 0;
\t\$('#button-cart').on('click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-cart').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-cart').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tconsole.log(\"esrr\");
\t\t\t\t\tsiz = 1;
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\talert('Please select size!');

\t\t\t\t\t\t
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t}

\t\t\t\tif (json['success']) {
             
\t\t\t\t\t\$('.cart-counter-header').html(json['total'][0]);

\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$(\"#cart-total\").html(json['total']);
\t\t\t\t\t\tlet t = json['total'].split('-');
\t\t\t\t\t\t\$('.slide-cart-total').html(t[1]);
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\t\t\t\t\t\$('.cart_backdrop').fadeIn();
\t\t\t\t\t\$(\".cart\").animate({ right: '0px' })

\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t// buy now
\t\$('#button-buy').on('click', function () {


\t\t\$(\"#button-cart\").click();
\t\t
\t
\t\tsetTimeout(function () {
\t\t\t
\t\t\tif (siz === 1) {
\t\t\t\tconsole.log(\"this if\",siz);
\t\t\t\tsiz = 0;
} else {
\tconsole.log(\"this else\",siz);
\t\t\t\twindow.location = \"index.php?route=checkout/cart\";
\t\t\t}
\t\t}, 800)
\t

\t})
\t//

</script>
<script type=\"text/javascript\">

\t\$('.date').datetimepicker({ language: '";
        // line 603
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false });

\t\$('.datetime').datetimepicker({ language: '";
        // line 605
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true });

\t\$('.time').datetimepicker({ language: '";
        // line 607
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false });

\t\$('button[id^=\\'button-upload\\']').on('click', function () {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function () {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
\t//
\t// buy now
\t\$('#button-buy').on('click', function () {


\t\t\$(\"#button-cart\").click();
\t\tsetTimeout(function () {

\t\t\twindow.location = \"index.php?route=checkout/cart\";
\t\t}, 200)

\t})
\t//

</script>
<script type=\"text/javascript\">

\t\$('#review').delegate('.pagination a', 'click', function (e) {
\t\te.preventDefault();

\t\t\$('#review').fadeOut('slow');

\t\t\$('#review').load(this.href);

\t\t\$('#review').fadeIn('slow');
\t});

\t\$('#review').load('index.php?route=product/product/review&product_id=  ";
        // line 687
        echo ($context["product_id"] ?? null);
        echo "');

\t\$('#button-review').on('click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=  ";
        // line 691
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t\$(document).ready(function () {


\t\tvar slides_to_show = 3;
\t\t\$('.slider-for').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: false,
\t\t\tinfinite: true,
\t\t\tasNavFor: '.slider-nav',
\t\t\tnextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\tprevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t});
\t\t\$('.slider-nav').slick({
\t\t\tslidesToShow: slides_to_show,
\t\t\tvertical: true,
\t\t\tslidesToScroll: 1,
\t\t\tasNavFor: '.slider-for',
\t\t\tdots: false,
\t\t\tarrows: false,

\t\t\tfocusOnSelect: true

\t\t});

\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});
\t//

</script>


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


\t\tvar slides_to_show = 3;
\t\t\$('.slider-for').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: false,
\t\t\tinfinite: true,
\t\t\tasNavFor: '.slider-nav',
\t\t\tnextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\tprevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t});
\t\t\$('.slider-nav').slick({
\t\t\tslidesToShow: slides_to_show,
\t\t\tvertical: true,
\t\t\tslidesToScroll: 1,
\t\t\tasNavFor: '.slider-for',
\t\t\tdots: false,
\t\t\tarrows: false,

\t\t\tfocusOnSelect: true

\t\t});

\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});
\t//
\tconst zoom = document.querySelector(\".zoom\");
\tzoom.addEventListener(\"click\", () => {
\t\t\$('.zoom').zoom({ magnify: '2.5' });
\t});

\t// Initiate zoom effect:
\timageZoom(\"myimage\", \"myresult\");
\tconst imagePopupClose = document.querySelector(\".imagePopupClose\");
\tconst imagePopup = document.querySelector(\".imagePopup\");
\tconst mainImages = document.querySelectorAll(\".mainImage\");


\tmainImages.forEach(eImage => {
\t\teImage.addEventListener(\"click\", () => {
\t\t\tlet dataIndex = 0;

\t\t\tlet Index = eImage.closest(\"li\").getAttribute(\"data-index\");
\t\t\tdataIndex = Number(Index);

\t\t\tif (imagePopup.classList.contains(\"hidden\")) {
\t\t\t\timagePopup.classList.remove(\"hidden\");
\t\t\t\tconst imagePopupSlider = new Splide(\"#imagePopup\", {
\t\t\t\t\tperPage: 1,
\t\t\t\t\ttype: 'loop',
\t\t\t\t\tstart: dataIndex
\t\t\t\t});
\t\t\t\timagePopupSlider.mount();
\t\t\t}
\t\t});
\t});

\timagePopupClose.addEventListener(\"click\", () => {
\t\timagePopup.classList.add(\"hidden\");
\t});


\tvar fade_state = false;
\tlet add = document.getElementsByClassName(\"add\");
\tfor (i = 0; i < add.length; i++) {
\t\tadd[i].style.display = 'none';
\t}
\tlet remove = document.getElementsByClassName(\"remove\");
\tfor (i = 0; i < remove.length; i++) {
\t\tremove[i].style.display = 'block';
\t}
\t// on btn click
\tfunction fade() { // get the button and div

\t\tlet add = document.getElementsByClassName(\"add\");
\t\tfor (i = 0; i < add.length; i++) {
\t\t\tadd[i].style.display = 'none';
\t\t}
\t\tlet remove = document.getElementsByClassName(\"remove\");
\t\tfor (i = 0; i < remove.length; i++) {
\t\t\tremove[i].style.display = 'block';
\t\t}


\t\tlet btn = document.getElementById(\"fade\");
\t\t// if faded in or out

\t\tconsole.log(fade_state)

\t\tif (fade_state == true) { // trigers animation
\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tadd[i].style.display = 'none';
\t\t\t}

\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tremove[i].style.display = 'block';
\t\t\t}
\t\t\t// sets the text

\t\t\t// sets fade_state
\t\t\tfade_state = false;
\t\t\tconsole.log(fade_state);

\t\t} else if (fade_state == false) { // trigers animation
\t\t\tfor (i = 0; i < remove.length; i++) {
\t\t\t\tremove[i].style.display = 'none';
\t\t\t}

\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tadd[i].style.display = 'block';
\t\t\t}

\t\t\t// sets the text

\t\t\t// sets fade_state
\t\t\tfade_state = true;


\t\t}

\t}
</script>
";
        // line 906
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1613 => 906,  1395 => 691,  1388 => 687,  1305 => 607,  1300 => 605,  1295 => 603,  1176 => 486,  1172 => 484,  1166 => 483,  1158 => 481,  1148 => 479,  1144 => 478,  1139 => 477,  1136 => 476,  1130 => 472,  1127 => 471,  1116 => 466,  1113 => 465,  1109 => 463,  1103 => 460,  1095 => 455,  1092 => 454,  1086 => 452,  1084 => 451,  1081 => 450,  1079 => 449,  1073 => 446,  1068 => 444,  1064 => 442,  1059 => 439,  1054 => 437,  1046 => 436,  1039 => 435,  1037 => 434,  1033 => 433,  1025 => 430,  1021 => 429,  1017 => 428,  1012 => 425,  1007 => 424,  1005 => 423,  992 => 412,  990 => 411,  983 => 407,  978 => 405,  971 => 400,  965 => 397,  961 => 395,  959 => 394,  945 => 383,  939 => 380,  935 => 378,  930 => 374,  904 => 351,  900 => 349,  894 => 345,  883 => 343,  879 => 342,  875 => 341,  869 => 338,  866 => 337,  863 => 336,  860 => 335,  854 => 334,  842 => 325,  838 => 324,  834 => 323,  830 => 321,  826 => 320,  819 => 319,  816 => 318,  804 => 309,  800 => 308,  796 => 307,  792 => 305,  788 => 304,  781 => 303,  778 => 302,  766 => 293,  762 => 292,  758 => 291,  754 => 289,  750 => 288,  743 => 287,  740 => 286,  734 => 283,  730 => 282,  726 => 281,  721 => 279,  717 => 278,  713 => 277,  706 => 276,  703 => 275,  697 => 272,  691 => 271,  687 => 270,  684 => 269,  680 => 268,  673 => 267,  670 => 266,  661 => 262,  655 => 261,  652 => 260,  648 => 259,  641 => 258,  638 => 257,  633 => 254,  625 => 251,  618 => 249,  616 => 248,  611 => 247,  597 => 244,  592 => 243,  590 => 242,  586 => 241,  582 => 240,  578 => 238,  574 => 237,  570 => 236,  566 => 235,  559 => 234,  556 => 233,  549 => 228,  538 => 223,  535 => 222,  521 => 219,  516 => 218,  514 => 217,  510 => 216,  506 => 215,  502 => 214,  498 => 213,  493 => 210,  489 => 209,  479 => 202,  472 => 201,  469 => 200,  464 => 197,  457 => 195,  450 => 193,  448 => 192,  441 => 191,  437 => 190,  433 => 189,  429 => 188,  425 => 187,  422 => 186,  418 => 185,  411 => 184,  408 => 183,  404 => 182,  400 => 180,  398 => 179,  395 => 178,  389 => 174,  386 => 173,  375 => 171,  371 => 170,  366 => 167,  364 => 166,  361 => 165,  356 => 162,  354 => 161,  350 => 160,  346 => 158,  340 => 155,  337 => 154,  335 => 153,  332 => 152,  330 => 151,  327 => 150,  322 => 147,  316 => 146,  309 => 141,  301 => 137,  297 => 136,  293 => 134,  290 => 133,  284 => 128,  279 => 125,  271 => 122,  265 => 121,  258 => 120,  256 => 119,  252 => 118,  246 => 115,  245 => 114,  238 => 109,  234 => 107,  231 => 106,  222 => 103,  216 => 102,  213 => 101,  208 => 100,  205 => 99,  200 => 97,  193 => 96,  191 => 95,  188 => 94,  186 => 93,  181 => 90,  177 => 88,  174 => 87,  160 => 83,  157 => 82,  152 => 81,  149 => 80,  138 => 77,  136 => 76,  133 => 75,  131 => 74,  125 => 71,  113 => 61,  101 => 57,  98 => 56,  94 => 55,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
