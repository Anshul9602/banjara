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
class __TwigTemplate_5f2c142fc00038d062fce9bc5591e65610174a70ced35f7b922bdc0bd41201fa extends \Twig\Template
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
   @media screen and (max-width:650px) {
      #mobile_table {
         display: block !important;
      }

      #desktop_table {
         display: none !important;
      }

      .cart-heading {
         font-size: 28px;
      }
   }
#collapse-coupon{
   margin-top:10px;
}
   .collapse:not(.show) {
      display: block;
      width: 50%;
   }

   .control-label {
      display: none;
   }

   @media screen and (min-width:651px) {
      #mobile_table {
         display: none !important;
      }

      #desktop_table {
         display: block !important;
      }
   }
</style>
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 46
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 46);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 46);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div id=\"checkout-cart\" class=\"container\">
   <div class=\"row\">
      <div id=\"content\" class=\"col-sm-12\">
         ";
        // line 60
        echo ($context["content_top"] ?? null);
        echo "
         <h1 class=\"text-center cart-heading\">";
        // line 61
        echo ($context["heading_title"] ?? null);
        echo " </h1>
         <br />
         <form id=\"cf\" action=\"";
        // line 63
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"desktop_table\">
               <table class=\"table cart-table\">
                  <thead>
                     <tr>
                        <td class=\"text-center\">
                           <p>Image</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Name</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Quantity</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Price</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Total</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Remove</p>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 90
            echo "                     <tr>
                        <td class=\"text-center\">";
            // line 91
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 91)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 91);
                echo "\">
                              <img src=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 92);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 92);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 92);
                echo "\"
                                 style=\"max-width:80px\" /></a> ";
            }
            // line 94
            echo "                        </td>
                        <td class=\"text-center\">
                           <a class=\"pt-10\" href=\"";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 96);
            echo "\">
                              <h5> ";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 97);
            echo "</h5>
                           </a>
                           ";
            // line 99
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 99)) {
                // line 100
                echo "                           <span class=\"text-danger\">*(Out Of stock)</span>
                           ";
            }
            // line 102
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 102)) {
                // line 103
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 104
                    echo "                           <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 104);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 104);
                    echo "</small> <br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                           ";
            }
            // line 106
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 106)) {
                echo " <br />
                           <small>";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 107);
                echo "</small> ";
            }
            // line 108
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 108)) {
                echo " <br />
                           <span class=\"label label-info\">";
                // line 109
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 109);
                // line 110
                echo "</small>
                           ";
            }
            // line 112
            echo "                        </td>
                        <td class=\"text-left\">
                           <div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
                              <div
                                 style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\"
                                 class=\"col-sm-4\">
                                 <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\"
                                    class=\"fa fa-minus less_quantity\"></li>
                              </div>
                              <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
                                 <input
                                    style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\"
                                    class=\"input-quantity\" readonly name=\"quantity[";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 124);
            echo "]\"
                                    value=\"";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 125);
            echo "\" class=\"form-control\" />
                              </div>
                              <div
                                 style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\"
                                 class=\"col-sm-4 addqty\">
                                 <li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\"
                                    class=\"fa fa-plus add_quantity\"></li>
                              </div>
                           </div>
                        </td>
                        <td class=\"text-right\">";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 135);
            echo "</td>
                        <td class=\"text-right\">";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 136);
            echo "</td>
                        <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 137
            echo ($context["button_remove"] ?? null);
            echo "\"
                              class=\"btn btn-danger\" onclick=\"cart.remove('";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 138);
            echo "');\"><i
                                 class=\"fa fa-times-circle\"></i></button>
                        </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                  </tbody>
               </table>
            </div>
         </form>
         <form action=\"";
        // line 147
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"mobile_table\">
               <div class=\"col-xs-12\">

                  ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 152
            echo "
                  <div class=\"row m-0\">
                     <div class=\"col-3\">
                        ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 155)) {
                // line 156
                echo "                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 156);
                echo "\">
                           <img src=\"";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 157);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 157);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 157);
                echo "\" />
                        </a>
                        ";
            }
            // line 160
            echo "                     </div>
                     <div class=\"col-9\">
                        <a href=\"";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 162);
            echo "\">
                           <h4 style=\"text-transform:uppercase \">";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 163);
            echo "</h4>
                           ";
            // line 164
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 164)) {
                // line 165
                echo "
                           <span class=\"text-danger\">*<i>(Out of stock) <br /></i>
                           </span>
                           ";
            }
            // line 169
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 169)) {
                // line 170
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 171
                    echo "                           <p style=\" color:#ccc; text-transform: capitalize\">
                              ";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 172);
                    echo "
                           </p>
                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "                           ";
            }
            // line 176
            echo "                        </a>
                        <p>
                           Price : ";
            // line 178
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
            echo "
                        </p>
                        <p style=\"margin-top: -7px;\">
                           <button style=\"background-color: transparent; outline:none; margin:auto; padding:0px;  text-align:center; 
                                    border:none; box-shadow:none \" type=\"button\"
                              onclick=\"cart.remove('";
            // line 183
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 183);
            echo "');\" class=\"btn remove-btn\">
                              Remove
                           </button>
                        </p>

                        <div style=\" margin:auto; margin-top:20px; margin-left:0px \" class=\"row\">
                           <div class=\"col-8\">
                              <div class=\"row\">
                                 <div
                                    style=\"cursor: pointer; text-align:center; width:30px; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\"
                                    class=\"col-xs-4\">
                                    <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px;\"
                                       class=\"fa fa-minus less_quantity1\"></li>
                                 </div>
                                 <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-xs-4\">
                                    <input
                                       style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:30px; cursor:default\"
                                       class=\"input-quantity\" readonly name=\"quantity[";
            // line 200
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 200);
            echo "]\"
                                       value=\"";
            // line 201
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 201);
            echo "\" class=\"form-control\" />
                                 </div>
                                 <div
                                    style=\" cursor: pointer; padding-left:0px; width:30px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\"
                                    class=\"col-xs-4\">
                                    <li style=\"font-size:12px; text-align:center; margin-top:10px;\"
                                       class=\"fa fa-plus add_quantity1\"></li>
                                 </div>

                              </div>
                           </div>
                           <div class=\"col-4\">
                              <h4 style=\"font-size:12px\">Total : ";
            // line 213
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 213);
            echo "
                              </h4>
                           </div>

                        </div>

                     </div>

                  </div>
                  <hr class=\"product_underline\" />

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "               </div>
            </div>
         </form>
         ";
        // line 228
        if (($context["modules1"] ?? null)) {
            // line 229
            echo "         <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
         <p>";
            // line 230
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
         <div class=\"panel-group\" id=\"accordion\"> ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 232
                echo "            ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "         </div>
         ";
        }
        // line 235
        echo " <br />
         <div class=\"row\">
            <div class=\"col-sm-4 offset-sm-8\">
               ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 239
            echo "               <div class=\"row mt-10\">
                  <div class=\"col-sm-6 col-6 text-uppercase\">
                     <h6><strong>";
            // line 241
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 241);
            echo ":</strong></h6>
                  </div>
                  <div class=\"col-sm-6 col-6 text-right \">
                     <p style=\"font-size:14px\">";
            // line 244
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 244);
            echo " </p>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "               </table>
            </div>
         </div>
         <br />


         ";
        // line 254
        echo ($context["coupon"] ?? null);
        echo "


         ";
        // line 257
        if ( !($context["stock"] ?? null)) {
            // line 258
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 259
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <button class=\"btn btn-primary\" disabled>";
                // line 261
                echo ($context["button_checkout"] ?? null);
                // line 262
                echo "</button>
            </div>
         </div>
         ";
            } else {
                // line 266
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <button class=\"btn btn-primary\" disabled>";
                // line 270
                echo ($context["button_checkout"] ?? null);
                echo "</button>
            </div>
         </div>
         ";
            }
            // line 274
            echo "         ";
        } else {
            // line 275
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 276
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=checkout/registered_payment\" class=\"btn btn-primary\">";
                // line 278
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            } else {
                // line 282
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
                // line 286
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            }
            // line 290
            echo "         ";
        }
        // line 291
        echo "
         ";
        // line 292
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 294
        echo ($context["column_right"] ?? null);
        echo "
   </div>
</div>
<br /><br />

<script>
   \$(\".add_quantity\").click(function () {
      var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) + 1;
      \$(this).parent().siblings().find(\".input-quantity\").val(b);
      \$(\"#cf\").submit();
   })

   \$(\".less_quantity\").click(function () {

      var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) - 1;
      if (b <= 0) {
         b = 1;
      }
      \$(this).parent().siblings().find(\".input-quantity\").val(b);
      \$(\"#cf\").submit();
   })


   \$(\".add_quantity1\").click(function () {
      var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) + 1;
      \$(this).parent().siblings().find(\".input-quantity1\").val(b);
      \$(\"#cf1\").submit();
   })

   \$(\".less_quantity1\").click(function () {

      var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) - 1;
      if (b <= 0) {
         b = 1;
      }
      \$(this).parent().siblings().find(\".input-quantity1\").val(b);
      \$(\"#cf1\").submit();
   })
</script>
";
        // line 333
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
        return array (  631 => 333,  589 => 294,  584 => 292,  581 => 291,  578 => 290,  571 => 286,  565 => 282,  558 => 278,  554 => 276,  551 => 275,  548 => 274,  541 => 270,  535 => 266,  529 => 262,  527 => 261,  523 => 259,  520 => 258,  518 => 257,  512 => 254,  504 => 248,  494 => 244,  488 => 241,  484 => 239,  480 => 238,  475 => 235,  471 => 234,  462 => 232,  458 => 231,  454 => 230,  449 => 229,  447 => 228,  442 => 225,  424 => 213,  409 => 201,  405 => 200,  385 => 183,  377 => 178,  373 => 176,  370 => 175,  359 => 172,  356 => 171,  351 => 170,  348 => 169,  342 => 165,  340 => 164,  336 => 163,  332 => 162,  328 => 160,  318 => 157,  313 => 156,  311 => 155,  306 => 152,  302 => 151,  295 => 147,  289 => 143,  278 => 138,  274 => 137,  270 => 136,  266 => 135,  253 => 125,  249 => 124,  235 => 112,  231 => 110,  227 => 109,  222 => 108,  218 => 107,  213 => 106,  210 => 105,  200 => 104,  195 => 103,  192 => 102,  188 => 100,  186 => 99,  181 => 97,  177 => 96,  173 => 94,  164 => 92,  158 => 91,  155 => 90,  151 => 89,  122 => 63,  117 => 61,  113 => 60,  100 => 49,  88 => 46,  84 => 45,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
