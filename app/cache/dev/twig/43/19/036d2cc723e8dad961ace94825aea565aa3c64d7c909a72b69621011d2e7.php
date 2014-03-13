<?php

/* EuroLiteriestructureBundle:Main:menu.html.twig */
class __TwigTemplate_4319036d2cc723e8dad961ace94825aea565aa3c64d7c909a72b69621011d2e7 extends Twig_Template
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
        return array (  91 => 25,  87 => 23,  72 => 21,  68 => 20,  62 => 18,  54 => 16,  46 => 14,  43 => 13,  24 => 4,  19 => 1,  199 => 49,  196 => 48,  190 => 75,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  168 => 68,  164 => 67,  159 => 66,  156 => 65,  153 => 64,  150 => 63,  136 => 50,  134 => 48,  131 => 47,  127 => 45,  124 => 44,  119 => 40,  116 => 39,  114 => 38,  112 => 37,  110 => 36,  107 => 35,  104 => 29,  101 => 28,  98 => 32,  95 => 27,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  65 => 19,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  41 => 14,  37 => 13,  33 => 12,  20 => 1,  50 => 13,  44 => 11,  38 => 12,  36 => 11,  31 => 5,  28 => 4,);
    }
}
