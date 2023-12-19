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

/* default/template/checkout/confirm.twig */
class __TwigTemplate_52fbc638f968d5a516b14738e1fe1e64a6b757f3d62afb38c9c9a63129625040 extends \Twig\Template
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
        if ( !($context["redirect"] ?? null)) {
            // line 2
            echo "<style>
  .confirm-table thead tr td, .confirm-table tbody tr td, .confirm-table tfoot tr td{
    border-left:none;
    border-right:none;
  }
</style>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover confirm-table\">
    <thead>
      <tr>
        <td class=\"text-left\">";
            // line 12
            echo ($context["column_name"] ?? null);
            echo "</td>
        <td class=\"text-left\">";
            // line 13
            echo ($context["column_model"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 14
            echo ($context["column_quantity"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 15
            echo ($context["column_price"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 16
            echo ($context["column_total"] ?? null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "    <tr>
      <td class=\"text-left\"><a style=\"color:#333\" href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
        &nbsp;<small> - ";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 25)) {
                    echo " <br/>
        <span class=\"label label-info\">";
                    // line 26
                    echo ($context["text_recurring_item"] ?? null);
                    echo "</span> <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26);
                    echo "</small> ";
                }
                echo "</td>
      <td class=\"text-left\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 27);
                echo "</td>
      <td class=\"text-right\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28);
                echo "</td>
      <td class=\"text-right\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                echo "</td>
      <td class=\"text-right\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 30);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 34
                echo "    <tr>
      <td class=\"text-left\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 35);
                echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 38);
                echo "</td>
      <td class=\"text-right\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 39);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </tbody>
    
    <tfoot>
    
    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "    <tr>
      <td colspan=\"4\" class=\"text-right\"><strong>";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 48);
                echo ":</strong></td>
      <td class=\"text-right\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 49);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </tfoot>
    
  </table>
</div>
";
            // line 56
            echo ($context["payment"] ?? null);
            echo "
";
        } else {
            // line 57
            echo " 
<script type=\"text/javascript\"><!--
location = 'index.php?route=checkout/cart';
//--></script> 
";
        }
        // line 61
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 61,  199 => 57,  194 => 56,  188 => 52,  179 => 49,  175 => 48,  172 => 47,  168 => 46,  162 => 42,  153 => 39,  149 => 38,  143 => 35,  140 => 34,  135 => 33,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  106 => 26,  101 => 25,  92 => 24,  82 => 23,  79 => 22,  75 => 21,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/confirm.twig", "");
    }
}
