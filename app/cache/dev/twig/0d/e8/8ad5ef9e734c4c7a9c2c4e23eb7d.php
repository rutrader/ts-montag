<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_0de88ad5ef9e734c4c7a9c2c4e23eb7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->getContext($context, "value")) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "value")), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description"));
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description"));
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 21,  45 => 19,  37 => 17,  34 => 16,  31 => 15,  28 => 14,);
    }
}
