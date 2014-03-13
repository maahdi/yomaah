<?php

/* EuroLiteriestructureBundle:Main:menu.html.twig */
class __TwigTemplate_c13d454346beb432fb6613d5202b31bdb439a452b9ad58908805f3f59eb80632 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"small-12 columns\">
        <div id=\"lol\">
            <figure class=\"left\" id=\"logo\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("literie_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/images/logo.png"), "html", null, true);
        echo "\"/></a></figure>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"small-12 columns\">
        <ul class=\"literie-menu\">
            ";
        // line 11
        if (array_key_exists("menus", $context)) {
            // line 12
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 13
                echo "                    ";
                if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "path") == "literie_marques") || ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "path") == "admin_literie_marques"))) {
                    // line 14
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "path"));
                    echo "#Epeda\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name"), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 16
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "path"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 18
                echo "                    ";
                if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "sousMenu", array(), "any", true, true)) {
                    // line 19
                    echo "                        <ul>
                        ";
                    // line 20
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "sousMenu"));
                    foreach ($context['_seq'] as $context["_key"] => $context["ss"]) {
                        // line 21
                        echo "                        <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "path"));
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ss"]) ? $context["ss"] : $this->getContext($context, "ss")), "path"), "html", null, true);
                        echo "\" onClick=\"scroll(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ss"]) ? $context["ss"] : $this->getContext($context, "ss")), "path"), "html", null, true);
                        echo ")\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ss"]) ? $context["ss"] : $this->getContext($context, "ss")), "name"), "html", null, true);
                        echo "</a></li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ss'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                        </ul></li>
                    ";
                } else {
                    // line 25
                    echo "                        </li>
                    ";
                }
                // line 27
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </ul>
    </div>  
</div>

";
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 63,  174 => 71,  165 => 58,  137 => 50,  118 => 40,  113 => 38,  65 => 19,  20 => 1,  53 => 17,  100 => 25,  77 => 19,  84 => 27,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 70,  160 => 65,  152 => 55,  148 => 62,  110 => 37,  104 => 29,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 51,  128 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 47,  119 => 42,  102 => 32,  71 => 22,  67 => 15,  63 => 15,  59 => 16,  87 => 23,  38 => 12,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 59,  121 => 46,  117 => 44,  105 => 40,  91 => 25,  62 => 18,  49 => 16,  28 => 2,  31 => 8,  26 => 3,  25 => 3,  21 => 2,  94 => 23,  89 => 21,  85 => 25,  75 => 23,  68 => 20,  56 => 15,  24 => 4,  19 => 1,  93 => 32,  88 => 28,  78 => 21,  46 => 14,  44 => 12,  27 => 7,  79 => 24,  72 => 21,  69 => 17,  47 => 11,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 54,  120 => 41,  115 => 43,  111 => 39,  108 => 36,  101 => 28,  98 => 24,  96 => 31,  83 => 25,  74 => 21,  66 => 15,  55 => 13,  52 => 14,  50 => 14,  43 => 13,  41 => 11,  35 => 8,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 65,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 54,  147 => 58,  144 => 61,  141 => 50,  133 => 48,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 42,  109 => 34,  106 => 38,  103 => 37,  99 => 35,  95 => 27,  92 => 29,  86 => 22,  82 => 19,  80 => 20,  73 => 18,  64 => 18,  60 => 16,  57 => 18,  54 => 16,  51 => 13,  48 => 13,  45 => 12,  42 => 8,  39 => 9,  36 => 11,  33 => 5,  30 => 4,);
    }
}
