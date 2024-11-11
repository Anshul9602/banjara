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
class __TwigTemplate_95bd4d84a5e7bf61d67e9a749d24f22c4b0459a5ba4c729bddfb7762d09f468c extends \Twig\Template
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
\t\t\t<div class=\"col-md-6 mt-4\">
\t\t\t\t<a href=\"index.php?route=common/Blog1\"><img src=\"image/new/blog/blo1.png\" alt=\"\" class=\"img-response slider-img\"></a>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 mt-4\">
\t\t\t\t<a href=\"index.php?route=common/Blog2\"><img src=\"image/new/blog/blog2.png\" alt=\"\" class=\"img-response slider-img\"></a>
\t\t\t</div>

\t\t\t
\t\t</div>
\t</div>
</section>


<!-- hero slider area end -->


";
        // line 26
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
        return array (  65 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/blog.twig", "");
    }
}
