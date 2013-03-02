<?php

/* TsmCatalogBundle:Catalog:index.html.twig */
class __TwigTemplate_4833a08e2893c1f5670d0b0ec242df50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<table width=\"760\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t<tr>
\t\t\t";
        // line 5
        $this->env->loadTemplate("::navleft.html.twig")->display($context);
        // line 6
        echo "\t\t\t<td width=\"15\"></td>
\t\t\t<td align=\"left\" valign=\"middle\">
\t\t\t\t<div align=\"center\">
\t\t\t\t\t<!-- #BeginEditable \"MainContentArea\" -->
\t\t\t\t\t\t<h3>Main Content Area</h3>
\t\t\t\t\t<!-- #EndEditable --></div>
\t\t\t</td>
\t\t</tr>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "TsmCatalogBundle:Catalog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
