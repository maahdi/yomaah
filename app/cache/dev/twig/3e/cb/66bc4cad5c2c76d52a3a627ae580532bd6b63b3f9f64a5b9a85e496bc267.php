<?php

/* EuroLiteriestructureBundle:Main:marques.html.twig */
class __TwigTemplate_3ecb66bc4cad5c2c76d52a3a627ae580532bd6b63b3f9f64a5b9a85e496bc267 extends Twig_Template
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
    <div class=\"articles small-12 columns\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "            <article class=\"article\">
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\"/>
                <article class=\"art-titre\"><h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artTitle"), "html", null, true);
            echo "</h1></article>
                <article class=\"art-content\">";
            // line 9
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artContent");
            echo "</article>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        <div class=\"marques small-12 columns\">
            <div class=\"marque horizontal\">
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marques"]) ? $context["marques"] : $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 15
            echo "                <section id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "NomMarque"), "html", null, true);
            echo "\">
                        <h3><a href=\"#";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "NomMarque"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "nomMarque"), "html", null, true);
            echo "</a></h3>
                    <article>
                        <figure class=\"marque-img\"><img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/EuroLiteriestructure/images/marques/" . $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "pngUrl"))), "html", null, true);
            echo "\"></img></figure>
                        <section class=\"content\">
                            <article class=\"marque-content\">
                                <p>";
            // line 21
            echo $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "content");
            echo "</p></article>
                            <article class=\"marque-link\">
                                <a href=\"http://";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "marqueLien"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "marqueLien"), "html", null, true);
            echo "</a></article>
                        </section>
                    </article>
                </section>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
<script>
\$('html,body').animate({ scrollTop : \$('#logo').offset().top}, 'slow');
</script>
";
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:marques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  172 => 55,  127 => 37,  175 => 62,  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 63,  174 => 71,  165 => 58,  137 => 50,  118 => 40,  113 => 38,  65 => 19,  20 => 1,  53 => 17,  100 => 25,  77 => 19,  84 => 25,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 54,  160 => 51,  152 => 46,  148 => 45,  110 => 37,  104 => 29,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 43,  132 => 51,  128 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 47,  119 => 42,  102 => 32,  71 => 22,  67 => 15,  63 => 14,  59 => 12,  87 => 26,  38 => 12,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 52,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 42,  121 => 46,  117 => 44,  105 => 32,  91 => 27,  62 => 17,  49 => 16,  28 => 2,  31 => 3,  26 => 3,  25 => 3,  21 => 2,  94 => 23,  89 => 21,  85 => 21,  75 => 23,  68 => 19,  56 => 15,  24 => 4,  19 => 1,  93 => 32,  88 => 28,  78 => 21,  46 => 8,  44 => 12,  27 => 7,  79 => 18,  72 => 16,  69 => 17,  47 => 11,  40 => 7,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 54,  120 => 41,  115 => 43,  111 => 39,  108 => 33,  101 => 31,  98 => 24,  96 => 31,  83 => 25,  74 => 21,  66 => 18,  55 => 13,  52 => 14,  50 => 9,  43 => 8,  41 => 11,  35 => 5,  32 => 6,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 65,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 54,  147 => 58,  144 => 44,  141 => 50,  133 => 41,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 34,  109 => 34,  106 => 38,  103 => 28,  99 => 35,  95 => 28,  92 => 29,  86 => 22,  82 => 19,  80 => 23,  73 => 18,  64 => 18,  60 => 16,  57 => 18,  54 => 16,  51 => 13,  48 => 13,  45 => 12,  42 => 7,  39 => 6,  36 => 6,  33 => 10,  30 => 4,);
    }
}
