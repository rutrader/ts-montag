<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_badadf3a56fe31f8be018186187f5763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 1)) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 2)) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 8)) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" >
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('actions')->renderAction("sonata.admin.controller.admin:getShortObjectDescriptionAction", array(), array("query" => array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))));
            // line 67
            echo "            ";
        }
        // line 68
        echo "        </span>
        <span style=\"display: none\" >
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        </span>

        <span id=\"field_actions_";
        // line 73
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" class=\"field-actions\">

            ";
        // line 75
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 76
            echo "
                <a  href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_list_";
            // line 78
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-list\"></i>
                    ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 86
        echo "
            ";
        // line 87
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 88
            echo "                <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_add_";
            // line 89
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-plus\"></i>
                    ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 97
        echo "
            ";
        // line 98
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method"))) {
            // line 99
            echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-off\"></i>
                    ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 108
        echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 110
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 115
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
    }

    // line 118
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        // line 120
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 1)) {
            // line 121
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 2)) {
            // line 123
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 8)) {
            // line 125
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 127
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 129
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "
    ";
        }
    }

    // line 133
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 135
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 137
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 137,  295 => 135,  292 => 134,  289 => 133,  281 => 129,  275 => 127,  263 => 123,  257 => 121,  254 => 120,  249 => 118,  245 => 115,  233 => 108,  221 => 102,  216 => 100,  213 => 99,  202 => 94,  186 => 88,  181 => 86,  175 => 83,  169 => 80,  160 => 77,  150 => 73,  144 => 70,  132 => 59,  123 => 57,  120 => 56,  104 => 49,  98 => 47,  92 => 45,  78 => 40,  75 => 39,  70 => 33,  62 => 29,  59 => 28,  54 => 25,  51 => 24,  38 => 17,  675 => 217,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  639 => 197,  636 => 196,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 186,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  585 => 152,  576 => 149,  571 => 148,  566 => 147,  563 => 146,  558 => 145,  555 => 144,  549 => 110,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  517 => 101,  513 => 100,  508 => 98,  505 => 97,  500 => 96,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  475 => 86,  470 => 85,  467 => 84,  461 => 48,  457 => 47,  453 => 46,  448 => 44,  443 => 42,  439 => 41,  434 => 40,  431 => 39,  425 => 36,  421 => 35,  415 => 32,  411 => 31,  406 => 29,  403 => 28,  400 => 27,  393 => 221,  391 => 216,  384 => 211,  382 => 183,  378 => 182,  375 => 181,  369 => 178,  366 => 177,  364 => 176,  360 => 174,  355 => 171,  352 => 170,  338 => 169,  332 => 167,  329 => 166,  311 => 165,  305 => 163,  303 => 162,  299 => 160,  297 => 159,  293 => 157,  291 => 156,  287 => 154,  285 => 144,  282 => 143,  278 => 141,  272 => 139,  269 => 125,  266 => 137,  246 => 134,  241 => 131,  235 => 129,  227 => 105,  222 => 125,  219 => 124,  201 => 123,  198 => 122,  196 => 91,  191 => 89,  184 => 87,  179 => 111,  176 => 110,  173 => 94,  171 => 93,  166 => 90,  164 => 78,  157 => 76,  155 => 75,  143 => 71,  137 => 67,  133 => 67,  130 => 66,  106 => 61,  103 => 60,  86 => 43,  80 => 41,  74 => 55,  61 => 39,  56 => 27,  47 => 20,  45 => 19,  41 => 17,  39 => 16,  33 => 13,  31 => 12,  264 => 72,  261 => 71,  256 => 69,  252 => 119,  247 => 67,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  225 => 126,  220 => 59,  217 => 58,  211 => 98,  208 => 97,  205 => 54,  199 => 52,  193 => 120,  190 => 49,  188 => 48,  185 => 47,  182 => 46,  177 => 42,  172 => 16,  167 => 76,  163 => 74,  161 => 46,  156 => 44,  153 => 43,  151 => 42,  148 => 41,  140 => 68,  134 => 60,  128 => 58,  125 => 34,  121 => 33,  112 => 52,  110 => 51,  105 => 26,  89 => 21,  83 => 58,  76 => 19,  72 => 37,  67 => 32,  64 => 15,  58 => 38,  53 => 10,  40 => 6,  37 => 15,  35 => 16,  32 => 3,  29 => 11,  23 => 1,  127 => 65,  124 => 47,  118 => 32,  113 => 40,  108 => 38,  102 => 36,  99 => 24,  96 => 34,  91 => 22,  85 => 30,  82 => 29,  77 => 27,  71 => 25,  69 => 17,  66 => 23,  63 => 50,  55 => 11,  49 => 16,  46 => 21,  43 => 20,  12 => 45,);
    }
}
