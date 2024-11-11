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

/* default/template/common/blog.twig */
class __TwigTemplate_0e1a9214d7b34a110604c5d36ed48aaf863ab58195a1d2f0f1b0cc1dff871574 extends \Twig\Template
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


<div id=\"content\" style=\"    background-color: #ddd6c8;\"></div>

<!-- hero slider area start -->
<section class=\"slider-area m-5\">
\t<div class=\"container m-auto\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"image/new/blog/blo1.png\" alt=\"\" class=\"img-response slider-img\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"image/new/blog/blog2.png\" alt=\"\" class=\"img-response slider-img\">
\t\t\t</div>

\t\t\t
\t\t</div>
\t</div>
</section>
<section class=\"slider-area m-5\">
\t<div class=\"container m-auto\">
\t\t<div>

\t\t\t<img src=\"image/new/blog/blog2.png\" alt=\"\" class=\"img-response slider-img\">
\t\t</div>
\t</div>
</section>

<!-- hero slider area end -->


";
        // line 33
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/blog.twig", "");
    }
}
