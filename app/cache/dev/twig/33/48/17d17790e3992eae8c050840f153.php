<?php

/* ::base.html.twig */
class __TwigTemplate_334817d17790e3992eae8c050840f153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "\t\t<div style=\"padding-left:10%;\" id=\"navbar\" class=\"navbar\">
\t\t\t<span><a href=\"#\">Главная</a></span>
\t\t\t<span><a href=\"#\">Партнёры</a></span>
\t\t\t<span><a href=\"#\">Каталог</a></span>
\t\t\t<span><a href=\"#\">Контакты</a></span>
\t\t\t<span><a href=\"#\">О компании</a></span>
\t\t\t<span><a href=\"#\">Обратная связь</a></span>
\t\t</div>
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t\t<!-- link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Font-Awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" -->
\t\t";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t<table width=\"860\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<table width=\"760\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t<tr height=\"60\">
\t\t\t\t\t\t\t\t<td width=\"152\" height=\"60\"><!-- #BeginEditable \"Region2\" --><img src=\"(EmptyReference!)\" alt=\"Logo 152x60\" style=\"height:50px; width:300px;\" border=\"0\" /><!-- #EndEditable --></td>
\t\t\t\t\t\t\t\t<td width=\"59\" height=\"60\"></td>
\t\t\t\t\t\t\t\t<td width=\"486\" height=\"60\"><!-- #BeginEditable \"Region\" --><img src=\"(EmptyReference!)\" alt=\"Banner Ad 468x60\" style=\"height:50px; width:486px;\" border=\"0\" /><!-- #EndEditable --></td>
\t\t\t\t\t\t\t\t<td width=\"63\" height=\"60\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table width=\"760\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"760\" height=\"10\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t<table width=\"760\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<table width=\"760\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t<tr height=\"60\">
\t\t\t\t\t\t\t\t<td width=\"152\" height=\"60\"><!-- #BeginEditable \"Region2\" --><img src=\"(EmptyReference!)\" alt=\"Logo 152x60\" style=\"height:50px; width:300px;\" border=\"0\" /><!-- #EndEditable --></td>
\t\t\t\t\t\t\t\t<td width=\"59\" height=\"60\"></td>
\t\t\t\t\t\t\t\t<td width=\"486\" height=\"60\"><!-- #BeginEditable \"Region\" --><img src=\"(EmptyReference!)\" alt=\"Banner Ad 468x60\" style=\"height:50px; width:486px;\" border=\"0\" /><!-- #EndEditable --></td>
\t\t\t\t\t\t\t\t<td width=\"63\" height=\"60\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table width=\"760\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"760\" height=\"10\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  132 => 46,  129 => 45,  124 => 44,  101 => 16,  98 => 15,  92 => 8,  87 => 7,  84 => 6,  78 => 5,  72 => 67,  69 => 66,  66 => 45,  64 => 44,  54 => 36,  52 => 15,  46 => 12,  42 => 11,  25 => 1,  37 => 10,  35 => 6,  31 => 5,  28 => 2,);
    }
}
