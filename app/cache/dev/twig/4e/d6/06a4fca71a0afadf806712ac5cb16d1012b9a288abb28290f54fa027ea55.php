<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4ed606a4fca71a0afadf806712ac5cb16d1012b9a288abb28290f54fa027ea55 extends Twig_Template
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
        echo twig_jsonencode_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  31 => 4,  26 => 3,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  24 => 2,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  44 => 7,  27 => 4,  79 => 18,  72 => 16,  69 => 12,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 24,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  55 => 16,  52 => 21,  50 => 8,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 41,  73 => 19,  64 => 12,  60 => 6,  57 => 12,  54 => 22,  51 => 9,  48 => 9,  45 => 17,  42 => 6,  39 => 6,  36 => 7,  33 => 5,  30 => 3,);
    }
}
