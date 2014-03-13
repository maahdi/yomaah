<?php

/* yomaahBundle:Main:index.html.twig */
class __TwigTemplate_6556a5e5352f00626e0674bb3df774519af66f8c0484213e7856b2b9ddefbb2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("yomaahBundle:Main:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "yomaahBundle:Main:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"articles no-add small-12 columns marge\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "        <input type=\"hidden\" name=\"artId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
            echo "\"/>
        <div class=\"article rss border-article marge\">
                <article class=\"art-titre not-editable\"><h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artTitle"), "html", null, true);
            echo "</h1></article>
                <figure class=\"art-png\"><img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/yomaah/images/" . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "png"), "pngUrl"))), "html", null, true);
            echo "\"></img></figure>
                <article class=\"art-triangle\"></article>
                <article class=\"art-date\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artDate"), "html", null, true);
            echo "</article>
                <article>
                    <figure class=\"art-img\"><img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artImgUrl"), "html", null, true);
            echo "\"></img></figure>
                    <section class=\"art-content\">";
            // line 16
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artContent");
            echo "</section>
                </article>
                <article class=\"art-end\">Source : <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, ("http://" . $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artSource")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artSource"), "html", null, true);
            echo "</a>
                    <section class=\"lienSuite\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artLien"), "html", null, true);
            echo "\">Lire la suite</a></section>
                </article>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "yomaahBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  114 => 27,  76 => 16,  70 => 14,  58 => 9,  192 => 56,  170 => 69,  160 => 65,  152 => 63,  148 => 62,  139 => 60,  120 => 53,  110 => 46,  104 => 44,  74 => 19,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 56,  111 => 37,  107 => 45,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 17,  67 => 15,  63 => 16,  59 => 15,  47 => 9,  87 => 25,  55 => 13,  38 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 64,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 54,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  66 => 15,  62 => 10,  49 => 11,  29 => 5,  43 => 8,  28 => 4,  31 => 5,  35 => 7,  26 => 6,  25 => 5,  21 => 2,  101 => 43,  94 => 28,  89 => 21,  85 => 25,  79 => 18,  75 => 17,  72 => 18,  68 => 18,  56 => 9,  50 => 11,  41 => 9,  24 => 4,  19 => 1,  98 => 24,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  44 => 12,  40 => 7,  32 => 6,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 18,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 58,  130 => 57,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 42,  95 => 28,  92 => 22,  86 => 20,  82 => 19,  80 => 19,  73 => 15,  64 => 16,  60 => 13,  57 => 11,  54 => 13,  51 => 7,  48 => 8,  45 => 10,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
