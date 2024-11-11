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

/* default/template/extension/total/coupon.twig */
class __TwigTemplate_3dd29b39067e188c2bd85251977f5b2b20a78bebc64ea61c738c41924c52af89 extends \Twig\Template
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
.collapse{
    display: block !important ;
}
.collapse .control-label{
    display: none !important ;
}</style>
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h4 class=\"panel-title\">
\t\t\t<a href=\"#collapse-coupon\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" style=\"color: black;\">";
        // line 11
        echo         // line 12
($context["heading_title"] ?? null);
        echo "
\t\t\t\t
\t\t\t</a>
\t\t</h4>
\t</div>
\t<div id=\"collapse-coupon\" class=\"panel-collapse collapse mt-3 pb-3\">
\t\t<div class=\"panel-body\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-coupon\">";
        // line 19
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" name=\"coupon\" value=\"";
        // line 21
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\"
\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 24
        echo ($context["button_coupon"] ?? null);
        echo "\" id=\"button-coupon\"
\t\t\t\t\t\tdata-loading-text=\"";
        // line 25
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\t\t\t\t< !-
\t\t\$('#button-coupon').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\t\t\ttype: 'post',
\t\t\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$('#button-coupon').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function () {
\t\t\t\t\t\$('#button-coupon').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\$('html, body').animate({
\t\t\t\t\t\t\tscrollTop: 0
\t\t\t\t\t\t}, 'slow');
\t\t\t\t\t}

\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t});
\t//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  73 => 24,  65 => 21,  60 => 19,  50 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/total/coupon.twig", "");
    }
}
