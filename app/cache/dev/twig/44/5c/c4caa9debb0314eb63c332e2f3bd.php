<?php

/* TsmCatalogBundle:Catalog:show.html.twig */
class __TwigTemplate_445cc4caa9debb0314eb63c332e2f3bd extends Twig_Template
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
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "price"), "html", null, true);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "descr"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "product"), "category"), "name"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TsmCatalogBundle:Catalog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
