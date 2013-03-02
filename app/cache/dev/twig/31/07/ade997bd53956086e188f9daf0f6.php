<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_3107ade997bd53956086e188f9daf0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">
                ";
        // line 7
        echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                <span class=\"sf-toolbar-status\">";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "blocks")), "html", null, true);
        echo "</span> blocks
            </a>
        </div>
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "realBlocks")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "containers")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Blocks</b>
                <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "blocks")), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        // line 29
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\" /></span>
        <strong>Blocks</strong>
        <span class=\"count\">
            <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "blocks")), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        // line 39
        echo "    <h2>Real Blocks</h2>
    ";
        // line 40
        $context["blocks"] = $this->getAttribute($this->getContext($context, "collector"), "realBlocks");
        // line 41
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 44
        $context["blocks"] = $this->getAttribute($this->getContext($context, "collector"), "containers");
        // line 45
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    ";
        // line 47
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 50
    public function block_table($context, array $blocks = array())
    {
        // line 51
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Memory (diff)</th>
            <th>Memory (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 61
            echo "            <tr>
                <th>";
            // line 62
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "</th>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($this->getContext($context, "block"), "memory_end") - $this->getAttribute($this->getContext($context, "block"), "memory_start")) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getContext($context, "block"), "memory_peak") / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($this->getContext($context, "block"), "time_end") - $this->getAttribute($this->getContext($context, "block"), "time_start")) * 1000), 2), "html", null, true);
            echo " ms</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  117 => 47,  94 => 38,  276 => 86,  270 => 84,  263 => 80,  249 => 79,  230 => 75,  222 => 73,  220 => 72,  194 => 62,  65 => 16,  141 => 61,  114 => 42,  78 => 24,  157 => 56,  136 => 44,  133 => 43,  85 => 24,  45 => 8,  57 => 12,  34 => 4,  31 => 3,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 70,  166 => 82,  161 => 80,  156 => 65,  150 => 75,  144 => 62,  126 => 51,  112 => 42,  109 => 44,  28 => 3,  205 => 71,  178 => 66,  176 => 61,  170 => 60,  160 => 66,  132 => 47,  102 => 41,  90 => 41,  81 => 22,  204 => 66,  191 => 70,  185 => 61,  167 => 64,  164 => 67,  153 => 54,  147 => 55,  138 => 45,  134 => 54,  127 => 49,  122 => 44,  95 => 34,  91 => 35,  87 => 40,  84 => 28,  49 => 13,  27 => 3,  77 => 28,  71 => 19,  68 => 22,  62 => 27,  58 => 12,  56 => 13,  44 => 10,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 100,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  280 => 114,  275 => 111,  273 => 85,  268 => 83,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  226 => 86,  221 => 83,  215 => 70,  212 => 78,  209 => 73,  207 => 95,  202 => 73,  196 => 92,  193 => 68,  190 => 89,  188 => 67,  183 => 60,  177 => 58,  174 => 67,  171 => 62,  169 => 56,  162 => 57,  143 => 48,  130 => 42,  107 => 27,  103 => 34,  97 => 39,  88 => 27,  82 => 24,  79 => 23,  76 => 22,  73 => 19,  67 => 19,  61 => 18,  47 => 9,  36 => 5,  70 => 20,  63 => 16,  46 => 7,  39 => 6,  22 => 1,  163 => 81,  155 => 58,  152 => 64,  149 => 51,  145 => 57,  139 => 50,  123 => 50,  120 => 46,  115 => 44,  111 => 45,  108 => 31,  106 => 35,  101 => 36,  98 => 29,  96 => 31,  92 => 28,  80 => 29,  74 => 21,  64 => 15,  55 => 24,  52 => 14,  50 => 10,  43 => 9,  41 => 8,  37 => 8,  32 => 4,  29 => 3,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 96,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 138,  245 => 77,  238 => 97,  228 => 87,  225 => 88,  217 => 83,  214 => 82,  211 => 69,  206 => 78,  203 => 77,  198 => 63,  192 => 72,  184 => 70,  182 => 64,  172 => 64,  165 => 58,  158 => 56,  154 => 48,  151 => 52,  148 => 63,  140 => 42,  135 => 47,  131 => 42,  128 => 45,  125 => 44,  119 => 36,  116 => 35,  113 => 40,  110 => 42,  104 => 35,  100 => 40,  93 => 42,  89 => 26,  86 => 33,  83 => 28,  75 => 23,  72 => 22,  69 => 20,  66 => 20,  60 => 13,  54 => 14,  51 => 9,  48 => 9,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
