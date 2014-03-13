<?php

/* ::base.html.twig */
class __TwigTemplate_8c73fb70f226453ee2677cd88a09e364ec24c3640b99c455b090d1c3f086046d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
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
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
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
        return array (  90 => 23,  172 => 55,  127 => 37,  175 => 62,  157 => 56,  145 => 52,  83 => 25,  52 => 14,  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 63,  174 => 71,  165 => 58,  137 => 50,  118 => 40,  113 => 38,  65 => 19,  20 => 1,  53 => 5,  100 => 25,  77 => 19,  37 => 11,  84 => 25,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 54,  160 => 51,  152 => 46,  148 => 45,  139 => 49,  120 => 41,  110 => 37,  104 => 29,  74 => 21,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 43,  132 => 51,  128 => 44,  111 => 39,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 47,  131 => 45,  119 => 42,  108 => 33,  102 => 32,  71 => 22,  67 => 15,  63 => 14,  59 => 6,  47 => 12,  87 => 26,  55 => 13,  38 => 12,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 52,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 42,  123 => 54,  121 => 46,  117 => 44,  115 => 43,  105 => 32,  91 => 27,  69 => 11,  66 => 18,  62 => 17,  49 => 16,  29 => 5,  43 => 8,  28 => 2,  31 => 3,  35 => 7,  26 => 3,  25 => 3,  21 => 2,  101 => 31,  94 => 23,  89 => 21,  85 => 21,  79 => 18,  75 => 23,  72 => 16,  68 => 19,  56 => 15,  50 => 9,  41 => 11,  24 => 4,  19 => 1,  98 => 24,  93 => 32,  88 => 28,  78 => 21,  46 => 8,  44 => 11,  40 => 7,  32 => 6,  27 => 7,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 65,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 54,  147 => 58,  144 => 44,  141 => 50,  133 => 41,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 34,  109 => 34,  106 => 38,  103 => 28,  99 => 35,  95 => 28,  92 => 29,  86 => 22,  82 => 19,  80 => 23,  73 => 18,  64 => 10,  60 => 16,  57 => 18,  54 => 16,  51 => 13,  48 => 13,  45 => 12,  42 => 10,  39 => 6,  36 => 6,  33 => 6,  30 => 4,);
    }
}
