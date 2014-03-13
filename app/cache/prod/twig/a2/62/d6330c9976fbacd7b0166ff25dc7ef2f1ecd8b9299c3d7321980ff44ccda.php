<?php

/* EuroLiteriestructureBundle:Main:index.html.twig */
class __TwigTemplate_a262d6330c9976fbacd7b0166ff25dc7ef2f1ecd8b9299c3d7321980ff44ccda extends Twig_Template
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
        echo "
<!DOCTYPE html>

<html>
<head>
<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <title>Euro Literie Aquitaine</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/foundation.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/postAccueil.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"row\">
    <div class=\"large-12 columns\" id=\"annonce\"><div class=\"pa\">Un bon conseil vaut mieux qu'un bon prix!</div></div>
    <div class=\"large-12 columns\" id=\"annonceSecond\"><div class=\"po\">Les deux sont ici !!</div></div>
    <div class=\"large-12 columns\" id=\"logoAccueil\"><figure><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("literie_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/images/logo.png"), "html", null, true);
        echo "\"></img></a></figure></div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  157 => 56,  145 => 52,  83 => 25,  52 => 14,  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 63,  174 => 71,  165 => 58,  137 => 50,  118 => 40,  113 => 38,  65 => 19,  20 => 1,  53 => 17,  100 => 25,  77 => 19,  37 => 11,  84 => 27,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 70,  160 => 65,  152 => 55,  148 => 62,  139 => 49,  120 => 41,  110 => 37,  104 => 29,  74 => 21,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 51,  128 => 44,  111 => 39,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 47,  131 => 45,  119 => 42,  108 => 36,  102 => 32,  71 => 22,  67 => 15,  63 => 15,  59 => 16,  47 => 11,  87 => 23,  55 => 13,  38 => 12,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 59,  123 => 54,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 25,  69 => 17,  66 => 15,  62 => 18,  49 => 16,  29 => 9,  43 => 13,  28 => 2,  31 => 8,  35 => 8,  26 => 3,  25 => 3,  21 => 2,  101 => 28,  94 => 23,  89 => 21,  85 => 25,  79 => 24,  75 => 23,  72 => 21,  68 => 20,  56 => 15,  50 => 14,  41 => 11,  24 => 4,  19 => 1,  98 => 24,  93 => 32,  88 => 28,  78 => 21,  46 => 17,  44 => 12,  40 => 8,  32 => 6,  27 => 7,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 65,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 54,  147 => 58,  144 => 61,  141 => 50,  133 => 48,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 42,  109 => 34,  106 => 38,  103 => 37,  99 => 35,  95 => 27,  92 => 29,  86 => 22,  82 => 19,  80 => 20,  73 => 18,  64 => 18,  60 => 16,  57 => 18,  54 => 16,  51 => 13,  48 => 13,  45 => 12,  42 => 8,  39 => 9,  36 => 11,  33 => 10,  30 => 4,);
    }
}
