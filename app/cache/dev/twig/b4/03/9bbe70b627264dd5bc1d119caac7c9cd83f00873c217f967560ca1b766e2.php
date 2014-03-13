<?php

/* EuroLiteriestructureBundle:Main:barAdmin.html.twig */
class __TwigTemplate_b4039bbe70b627264dd5bc1d119caac7c9cd83f00873c217f967560ca1b766e2 extends Twig_Template
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
        echo "﻿<div class=\"row barAdmin \">
    <div class=\"small-12 columns tool-container gradient \">
            <article class=\"visite\">
                <h4>Visites :</h4>
                <section>
                    <ul>
                        <li>Nombre total de visite : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visite"]) ? $context["visite"] : $this->getContext($context, "visite")), "total"), "html", null, true);
        echo "</li>
                        <li>Nombre de visite du mois : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visite"]) ? $context["visite"] : $this->getContext($context, "visite")), "mois"), "html", null, true);
        echo "</li>
                    </ul>
                </section>
            </article>
            <article class=\"gestion\">
                <h4>Gestion :</h4>
                <div>
                    <section class=\"sectionAdmin\" id=\"marquesAdmin\">
                        <ul>
                            <li>Marques</li>
                        </ul>
                    </section>
                    <section id=\"promotionsAdmin\" class=\"sectionAdmin\">
                        <ul>
                            <li>Promotions</li>
                        </ul>
                    </section>
                </div>
            </article>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:barAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,  182 => 65,  178 => 63,  175 => 62,  165 => 58,  157 => 56,  152 => 55,  149 => 54,  145 => 52,  141 => 50,  139 => 49,  135 => 47,  131 => 45,  128 => 44,  118 => 40,  111 => 39,  106 => 38,  103 => 37,  99 => 35,  95 => 33,  93 => 32,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  65 => 18,  56 => 15,  52 => 14,  48 => 13,  45 => 12,  41 => 11,  31 => 8,  28 => 2,);
    }
}
