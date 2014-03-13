<?php

/* EuroLiteriestructureBundle:Main:accueil.html.twig */
class __TwigTemplate_9c8feecd053310d1599177dfbc896df0775c538a25391e8258ef56fb8cfc9dc0 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "            <article class=\"article\">
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\"/>
                <article class=\"art-titre\"><h1>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artTitle"), "html", null, true);
            echo "</h1></article>
                <section class=\"art-content\">";
            // line 15
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artContent");
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
        if ((((isset($context["actuel"]) ? $context["actuel"] : $this->getContext($context, "actuel")) != false) && (twig_length_filter($this->env, (isset($context["actuel"]) ? $context["actuel"] : $this->getContext($context, "actuel"))) > 1))) {
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
        if (((isset($context["actuel"]) ? $context["actuel"] : $this->getContext($context, "actuel")) != false)) {
            // line 38
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actuel"]) ? $context["actuel"] : $this->getContext($context, "actuel")));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 39
                echo "                        <article class=\"promo-date\"><h2>Du ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "dateDebut"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "dateFin"), "html", null, true);
                echo "</h2></article>
                        <section class=\"promo-content\"><p>";
                // line 40
                echo $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "PromoDesc");
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
        if ((((isset($context["avenir"]) ? $context["avenir"] : $this->getContext($context, "avenir")) != false) && (twig_length_filter($this->env, (isset($context["avenir"]) ? $context["avenir"] : $this->getContext($context, "avenir"))) > 1))) {
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
        if (((isset($context["avenir"]) ? $context["avenir"] : $this->getContext($context, "avenir")) != false)) {
            // line 55
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avenir"]) ? $context["avenir"] : $this->getContext($context, "avenir")));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 56
                echo "                        <article class=\"promo-date\"><h2>Du ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "dateDebut"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "dateFin"), "html", null, true);
                echo "</h2></article>
                        <section class=\"promo-content\">
                        <p>";
                // line 58
                echo $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "PromoDesc");
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
        return array (  182 => 65,  178 => 63,  175 => 62,  165 => 58,  157 => 56,  152 => 55,  149 => 54,  145 => 52,  141 => 50,  139 => 49,  135 => 47,  131 => 45,  128 => 44,  118 => 40,  111 => 39,  106 => 38,  103 => 37,  99 => 35,  95 => 33,  93 => 32,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  65 => 18,  56 => 15,  52 => 14,  48 => 13,  45 => 12,  41 => 11,  31 => 3,  28 => 2,);
    }
}
