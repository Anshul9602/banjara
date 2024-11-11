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

/* extension/payment/ccavenuepay.twig */
class __TwigTemplate_0124b93c976fa7cefc6dd26c5498c43e1d86cc05121ae8c9cb1953f6a33cc9ac extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
<div class=\"page-header\">
<div class=\"container-fluid\">
<div class=\"pull-right\">
<button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
</div>
<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
<ul class=\"breadcrumb\">
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
</div>
</div>

<div class=\"container-fluid\">
";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 24
        echo "<div class=\"panel-heading\" id =\"api_panel\" style=\"display: inline-block; margin-left: 20px; \">
<div class=\"af\" id=\"af\" style=\"float: left; padding:  26px 5px 0px; border-right: 1px; height: 40px;\">
<a href=\"https://www.ccavenue.com\" target=\"blank\"><img src=\"https://www.ccavenue.com/images_shoppingcart/ccavenue_logo_india.png\" alt=\"CCAvenue MCPG\" title=\"CCAvenue MCPG\" style=\"height:25px\" /></a><br><br>
</div>

 <div id =\"right_panel\" style=\"display: inline-block; margin-left: 20px; margin-top: 18px; float:left\">
<h2 class=\"panel-title\" style=\"font-size:20px;margin-bottom:9px\">";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo " </h2>
<a style=\" font-size:18px;font-family:Verdana, Geneva, sans-serif; color:#09F;\">Module Version:3.0</a></br><a style=\" font-size:16px;font-family:Verdana, Geneva, sans-serif; color:#09F;\" href=\"mailto:shoppingcart@ccavenue.com?subject=India%20Shopping%20Cart%20-%20Opencart%203.0\">Contact Support</a>
</div>
</div>
<div class=\"panel-body\">
<form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_status\" id=\"input-status\" class=\"form-control\">
";
        // line 41
        if (($context["payment_ccavenuepay_status"] ?? null)) {
            // line 42
            echo "<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
<option value=\"0\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
";
        } else {
            // line 45
            echo "<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
<option value=\"0\" selected=\"selected\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>
";
        }
        // line 48
        echo "</select>
</div>
</div>

<div class=\"form-group required\">
<label class=\"col-sm-2 control-label\" for=\"entry-email\">";
        // line 53
        echo ($context["entry_merchant_id"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<input type=\"text\" name=\"payment_ccavenuepay_merchant_id\" value=\"";
        // line 55
        echo ($context["payment_ccavenuepay_merchant_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_merchant_id"] ?? null);
        echo "\" id=\"entry-merchant_id\" class=\"form-control\"/>
";
        // line 56
        if (($context["error_merchant_id"] ?? null)) {
            // line 57
            echo "<div class=\"text-danger\">";
            echo ($context["error_merchant_id"] ?? null);
            echo "</div>
";
        }
        // line 59
        echo "</div>
</div>

<div class=\"form-group required\">
<label class=\"col-sm-2 control-label\" for=\"entry-access_code\">";
        // line 63
        echo ($context["entry_access_code"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<input type=\"text\" name=\"payment_ccavenuepay_access_code\" value=\"";
        // line 65
        echo ($context["payment_ccavenuepay_access_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_access_code"] ?? null);
        echo "\" id=\"entry-access_code\" class=\"form-control\"/>
";
        // line 66
        if (($context["error_access_code"] ?? null)) {
            // line 67
            echo "<div class=\"text-danger\">";
            echo ($context["error_access_code"] ?? null);
            echo "</div>
";
        }
        // line 69
        echo "</div>
</div>

<div class=\"form-group required\">
<label class=\"col-sm-2 control-label\" for=\"entry-working_key\">";
        // line 73
        echo ($context["entry_working_key"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<input type=\"password\" name=\"payment_ccavenuepay_working_key\" value=\"";
        // line 75
        echo ($context["payment_ccavenuepay_working_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_working_key"] ?? null);
        echo "\" id=\"entry-working_key\" class=\"form-control\"/>
";
        // line 76
        if (($context["error_working_key"] ?? null)) {
            // line 77
            echo "<div class=\"text-danger\">";
            echo ($context["error_working_key"] ?? null);
            echo "</div>
";
        }
        // line 79
        echo "</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-payment_confirmation_mail\">";
        // line 83
        echo ($context["entry_payment_confirmation_mail"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_payment_confirmation_mail\" id=\"input-payment_confirmation_mail\" class=\"form-control\">
";
        // line 86
        if (($context["payment_ccavenuepay_payment_confirmation_mail"] ?? null)) {
            // line 87
            echo "<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
<option value=\"0\">";
            // line 88
            echo ($context["text_no"] ?? null);
            echo "</option>
";
        } else {
            // line 90
            echo "<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
<option value=\"0\" selected=\"selected\">";
            // line 91
            echo ($context["text_no"] ?? null);
            echo "</option>
";
        }
        // line 93
        echo "</select>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-payment_test_mode\">";
        // line 98
        echo ($context["entry_payment_test_mode"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_test_mode\" id=\"input-payment_test_mode\" class=\"form-control\">
";
        // line 101
        if (($context["payment_ccavenuepay_test_mode"] ?? null)) {
            // line 102
            echo "<option value=\"1\" selected=\"selected\">";
            echo ($context["text_test"] ?? null);
            echo "</option>
<option value=\"0\">";
            // line 103
            echo ($context["text_live"] ?? null);
            echo "</option>
";
        } else {
            // line 105
            echo "<option value=\"1\">";
            echo ($context["text_test"] ?? null);
            echo "</option>
<option value=\"0\" selected=\"selected\">";
            // line 106
            echo ($context["text_live"] ?? null);
            echo "</option>
";
        }
        // line 108
        echo "</select>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-payment_currency_option\">";
        // line 113
        echo ($context["entry_payment_currency_option"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_currency_option[]\" id=\"input-payment_currency_option\" class=\"form-control\" multiple=\"multiple\">
";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 117
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 117), ($context["allowcurrencies"] ?? null))) {
                // line 118
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 118), ($context["payment_ccavenuepay_currency_option"] ?? null))) {
                    // line 119
                    echo "<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 119);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 119);
                    echo "</option>
";
                } else {
                    // line 121
                    echo "<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 121);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 121);
                    echo "</option>
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "</select>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"entry-total\">";
        // line 130
        echo ($context["entry_total"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<input type=\"text\" name=\"payment_ccavenuepay_total\" value=\"";
        // line 132
        echo ($context["payment_ccavenuepay_total"] ?? null);
        echo "\" id=\"entry-total\" class=\"form-control\"/>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 137
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
<option value=\"0\">";
        // line 140
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 142
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 142) == ($context["payment_ccavenuepay_geo_zone_id"] ?? null))) {
                // line 143
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 143);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 143);
                echo "</option>
";
            } else {
                // line 145
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 145);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 145);
                echo "</option>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "</select>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-completed-status\">";
        // line 153
        echo ($context["entry_completed_status"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_completed_status_id\" id=\"input-completed-status\" class=\"form-control\">
";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 157
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 157) == ($context["payment_ccavenuepay_completed_status_id"] ?? null))) {
                // line 158
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 158);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 158);
                echo "</option>
";
            } else {
                // line 160
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 160);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 160);
                echo "</option>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "</select>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-pending-status\">";
        // line 168
        echo ($context["entry_pending_status"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_pending_status_id\" id=\"input-pending-status\" class=\"form-control\">
";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 172
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 172) == ($context["payment_ccavenuepay_pending_status_id"] ?? null))) {
                // line 173
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 173);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 173);
                echo "</option>
";
            } else {
                // line 175
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 175);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 175);
                echo "</option>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "</select>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-failed-status\">";
        // line 183
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<select name=\"payment_ccavenuepay_failed_status_id\" id=\"input-failed-status\" class=\"form-control\">
";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 187
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 187) == ($context["payment_ccavenuepay_failed_status_id"] ?? null))) {
                // line 188
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 188);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 188);
                echo "</option>
";
            } else {
                // line 190
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 190);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 190);
                echo "</option>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "</select>
</div>
</div>

<div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"entry-sort_order\">";
        // line 198
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
<div class=\"col-sm-10\">
<input type=\"text\" name=\"payment_ccavenuepay_sort_order\" value=\"";
        // line 200
        echo ($context["payment_ccavenuepay_sort_order"] ?? null);
        echo "\" id=\"entry-sort_order\" class=\"form-control\"/>
</div>
</div>

</form>
</div>
</div>
</div>
";
        // line 208
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/ccavenuepay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 208,  516 => 200,  511 => 198,  504 => 193,  492 => 190,  484 => 188,  482 => 187,  478 => 186,  472 => 183,  465 => 178,  453 => 175,  445 => 173,  443 => 172,  439 => 171,  433 => 168,  426 => 163,  414 => 160,  406 => 158,  404 => 157,  400 => 156,  394 => 153,  387 => 148,  375 => 145,  367 => 143,  365 => 142,  361 => 141,  357 => 140,  351 => 137,  343 => 132,  338 => 130,  331 => 125,  318 => 121,  310 => 119,  308 => 118,  306 => 117,  302 => 116,  296 => 113,  289 => 108,  284 => 106,  279 => 105,  274 => 103,  269 => 102,  267 => 101,  261 => 98,  254 => 93,  249 => 91,  244 => 90,  239 => 88,  234 => 87,  232 => 86,  226 => 83,  220 => 79,  214 => 77,  212 => 76,  206 => 75,  201 => 73,  195 => 69,  189 => 67,  187 => 66,  181 => 65,  176 => 63,  170 => 59,  164 => 57,  162 => 56,  156 => 55,  151 => 53,  144 => 48,  139 => 46,  134 => 45,  129 => 43,  124 => 42,  122 => 41,  116 => 38,  110 => 35,  102 => 30,  94 => 24,  86 => 20,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/ccavenuepay.twig", "");
    }
}
