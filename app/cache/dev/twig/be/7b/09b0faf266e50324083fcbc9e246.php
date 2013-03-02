<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_be7b09b0faf266e50324083fcbc9e246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
  <input type=\"checkbox\" name=\"idx[]\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "html", null, true);
        echo "\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 13,  19 => 11,);
    }
}
