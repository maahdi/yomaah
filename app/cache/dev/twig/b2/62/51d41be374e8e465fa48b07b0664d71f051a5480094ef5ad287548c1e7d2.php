<?php

/* YomaahajaxBundle:Ajax:layoutArticle.html.twig */
class __TwigTemplate_b26251d41be374e8e465fa48b07b0664d71f051a5480094ef5ad287548c1e7d2 extends Twig_Template
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
        // line 1
        echo "﻿        <input type=\"hidden\" name=\"artId\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
        echo "\"/>
        <div class=\"article border-article marge\">
                <input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
        echo "\"/>
                <article class=\"art-titre\"><h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artTitle"), "html", null, true);
        echo "</h1></article>
                <figure class=\"art-png\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/yomaah/images/" . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "png"), "pngUrl"))), "html", null, true);
        echo "\"></img></figure>
                <article class=\"art-triangle\"></article>
                <article class=\"art-date\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artDate"), "html", null, true);
        echo "</article>
                <article class=\"art-content\">";
        // line 8
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artContent");
        echo "</section>
                ";
        // line 12
        echo "        </div>
";
    }

    public function getTemplateName()
    {
        return "YomaahajaxBundle:Ajax:layoutArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 72,  174 => 71,  165 => 69,  137 => 50,  118 => 40,  113 => 38,  65 => 20,  20 => 1,  53 => 17,  100 => 25,  77 => 19,  84 => 27,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 70,  160 => 65,  152 => 63,  148 => 62,  110 => 37,  104 => 35,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 51,  128 => 56,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 16,  87 => 25,  38 => 7,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 59,  121 => 46,  117 => 44,  105 => 40,  91 => 22,  62 => 10,  49 => 16,  28 => 4,  31 => 5,  26 => 3,  25 => 3,  21 => 2,  94 => 23,  89 => 21,  85 => 25,  75 => 24,  68 => 19,  56 => 9,  24 => 4,  19 => 1,  93 => 28,  88 => 28,  78 => 21,  46 => 12,  44 => 12,  27 => 4,  79 => 26,  72 => 18,  69 => 17,  47 => 11,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 54,  120 => 41,  115 => 43,  111 => 37,  108 => 36,  101 => 34,  98 => 24,  96 => 31,  83 => 25,  74 => 21,  66 => 15,  55 => 13,  52 => 21,  50 => 14,  43 => 8,  41 => 14,  35 => 8,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 73,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 48,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 28,  92 => 29,  86 => 22,  82 => 19,  80 => 20,  73 => 18,  64 => 18,  60 => 16,  57 => 18,  54 => 13,  51 => 13,  48 => 8,  45 => 15,  42 => 8,  39 => 9,  36 => 9,  33 => 5,  30 => 4,);
    }
}
