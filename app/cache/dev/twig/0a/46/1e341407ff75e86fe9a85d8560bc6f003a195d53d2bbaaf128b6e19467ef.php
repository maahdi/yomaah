<?php

/* yomaahBundle:Main:main-bar1.html.twig */
class __TwigTemplate_0a461e341407ff75e86fe9a85d8560bc6f003a195d53d2bbaaf128b6e19467ef extends Twig_Template
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
        echo "﻿    <div id=\"main-bar\">
        <div class=\"row\">
            <ul class=\"menu\" id=\"menu-left\">
            ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuleft"]) ? $context["menuleft"] : $this->getContext($context, "menuleft")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 5
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "path"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name"), "html", null, true);
            echo "</a>
                    ";
            // line 6
            if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "sousMenu", array(), "any", true, true)) {
                // line 7
                echo "                        <ul>
                        ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "sousMenu"));
                foreach ($context['_seq'] as $context["_key"] => $context["ss"]) {
                    // line 9
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["ss"]) ? $context["ss"] : $this->getContext($context, "ss")), "path"), array("path" => "Yomaah"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ss"]) ? $context["ss"] : $this->getContext($context, "ss")), "name"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ss'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "                        </ul></li>
                    ";
            } else {
                // line 13
                echo "                        </li>
                    ";
            }
            // line 15
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
            <ul class=\"menu\" id=\"menu-right\">
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuright"]) ? $context["menuright"] : $this->getContext($context, "menuright")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 19
            echo "                ";
            if (((array_key_exists("connect", $context) && (isset($context["connect"]) ? $context["connect"] : $this->getContext($context, "connect"))) || ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == false))) {
                // line 20
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("post_log");
                echo "\">Se Déconnecter</a></li>
                ";
            } else {
                // line 22
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "path"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name"), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 24
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "yomaahBundle:Main:main-bar1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  77 => 19,  84 => 23,  114 => 27,  76 => 16,  70 => 14,  58 => 9,  192 => 56,  170 => 69,  160 => 65,  152 => 63,  148 => 62,  110 => 46,  104 => 44,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 56,  107 => 45,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 13,  87 => 25,  38 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 64,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 10,  49 => 11,  28 => 5,  31 => 5,  26 => 6,  25 => 5,  21 => 2,  94 => 24,  89 => 21,  85 => 25,  75 => 17,  68 => 18,  56 => 9,  24 => 4,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  44 => 9,  27 => 4,  79 => 18,  72 => 18,  69 => 16,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 54,  120 => 53,  115 => 43,  111 => 37,  108 => 36,  101 => 43,  98 => 24,  96 => 31,  83 => 25,  74 => 19,  66 => 15,  55 => 11,  52 => 21,  50 => 11,  43 => 8,  41 => 9,  35 => 6,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 18,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 58,  130 => 57,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 42,  95 => 28,  92 => 22,  86 => 22,  82 => 19,  80 => 20,  73 => 18,  64 => 16,  60 => 6,  57 => 11,  54 => 13,  51 => 7,  48 => 8,  45 => 10,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
