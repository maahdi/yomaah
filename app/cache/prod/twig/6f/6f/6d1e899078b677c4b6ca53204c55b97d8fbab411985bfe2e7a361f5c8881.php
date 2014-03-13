<?php

/* EuroLiteriestructureBundle:Main:accueil.html.twig */
class __TwigTemplate_6f6f6d1e899078b677c4b6ca53204c55b97d8fbab411985bfe2e7a361f5c8881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EuroLiteriestructureBundle:Main:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EuroLiteriestructureBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"small-12 columns\">
        <h2 class=\"main-titre\">Bienvenue sur le site d'Euro Literie<h2>
    </div>
</div>

<div class=\"row\">
    <div class=\"articles small-7 columns\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "            <article class=\"article\">
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
            echo "\"/>
                <article class=\"art-titre\"><h1>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artTitle"), "html", null, true);
            echo "</h1></article>
                <section class=\"art-content\">";
            // line 15
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "artContent");
            echo "</section>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
    <div class=\"small-5 columns\">
        <div class=\"slide slider-wrapper futurico-theme\">
            <div id=\"slider\" class=\"nivoSlider\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/images/nue1.png"), "html", null, true);
        echo "\" alt=\"\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/images/nue2.png"), "html", null, true);
        echo "\" alt=\"\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/images/literie1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/images/literie2.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
    <div class=\"promotions small-5 columns\">
        <div id=\"border\">
            <article class=\"promotion\">
                ";
        // line 32
        if ((((isset($context["actuel"]) ? $context["actuel"] : null) != false) && (twig_length_filter($this->env, (isset($context["actuel"]) ? $context["actuel"] : null)) > 1))) {
            // line 33
            echo "                    <article class=\"promo-titre\"><h2>Promotions du moment</h2></article>
                ";
        } else {
            // line 35
            echo "                    <article class=\"promo-titre\"><h2>Promotion du moment</h2></article>
                ";
        }
        // line 37
        echo "                ";
        if (((isset($context["actuel"]) ? $context["actuel"] : null) != false)) {
            // line 38
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actuel"]) ? $context["actuel"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 39
                echo "                        <article class=\"promo-date\"><h2>Du ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "dateDebut"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "dateFin"), "html", null, true);
                echo "</h2></article>
                        <section class=\"promo-content\"><p>";
                // line 40
                echo $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "PromoDesc");
                echo "</p>
                        </section>
                        <a class=\"a-promotion\" ref=#>Plus d'infos ...</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                ";
        } else {
            // line 45
            echo "                    <article class=\"promo-date\"><h2>Aucune promotions en cours</h2></article>
                ";
        }
        // line 47
        echo "            </article> 
            <article class=\"promotion\">
                ";
        // line 49
        if ((((isset($context["avenir"]) ? $context["avenir"] : null) != false) && (twig_length_filter($this->env, (isset($context["avenir"]) ? $context["avenir"] : null)) > 1))) {
            // line 50
            echo "                    <article class=\"promo-titre\"><h2>Promotions à venir</h2></article>
                ";
        } else {
            // line 52
            echo "                    <article class=\"promo-titre\"><h2>Promotion à venir</h2></article>
                ";
        }
        // line 54
        echo "                ";
        if (((isset($context["avenir"]) ? $context["avenir"] : null) != false)) {
            // line 55
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avenir"]) ? $context["avenir"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 56
                echo "                        <article class=\"promo-date\"><h2>Du ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "dateDebut"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "dateFin"), "html", null, true);
                echo "</h2></article>
                        <section class=\"promo-content\">
                        <p>";
                // line 58
                echo $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "PromoDesc");
                echo "</p>
                        </section>
                        <a class=\"a-promotion\" ref=#>Plus d'infos ...</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                ";
        } else {
            // line 63
            echo "                    <article class=\"promo-date\"><h2>Aucune promotion à venir</h2></article>
                ";
        }
        // line 65
        echo "            </article> 
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  157 => 56,  145 => 52,  83 => 25,  52 => 14,  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 63,  174 => 71,  165 => 58,  137 => 50,  118 => 40,  113 => 38,  65 => 18,  20 => 1,  53 => 17,  100 => 25,  77 => 19,  37 => 13,  84 => 27,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 70,  160 => 65,  152 => 55,  148 => 62,  139 => 49,  120 => 41,  110 => 37,  104 => 35,  74 => 21,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 51,  128 => 44,  111 => 39,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 47,  131 => 45,  119 => 42,  108 => 36,  102 => 32,  71 => 22,  67 => 15,  63 => 15,  59 => 16,  47 => 11,  87 => 25,  55 => 13,  38 => 7,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 59,  123 => 54,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 22,  69 => 17,  66 => 15,  62 => 10,  49 => 16,  29 => 4,  43 => 8,  28 => 2,  31 => 3,  35 => 8,  26 => 3,  25 => 3,  21 => 2,  101 => 34,  94 => 23,  89 => 21,  85 => 25,  79 => 24,  75 => 23,  72 => 18,  68 => 19,  56 => 15,  50 => 14,  41 => 11,  24 => 4,  19 => 1,  98 => 24,  93 => 32,  88 => 28,  78 => 21,  46 => 12,  44 => 12,  40 => 8,  32 => 6,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 65,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 54,  147 => 58,  144 => 61,  141 => 50,  133 => 48,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 42,  109 => 34,  106 => 38,  103 => 37,  99 => 35,  95 => 33,  92 => 29,  86 => 22,  82 => 19,  80 => 20,  73 => 18,  64 => 18,  60 => 16,  57 => 18,  54 => 13,  51 => 13,  48 => 13,  45 => 12,  42 => 8,  39 => 9,  36 => 9,  33 => 5,  30 => 4,);
    }
}
