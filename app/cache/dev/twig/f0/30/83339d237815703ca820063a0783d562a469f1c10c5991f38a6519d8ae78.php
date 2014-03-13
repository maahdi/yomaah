<?php

/* EuroLiteriestructureBundle:Main:contact.html.twig */
class __TwigTemplate_f03083339d237815703ca820063a0783d562a469f1c10c5991f38a6519d8ae78 extends Twig_Template
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
        echo "
<div class=\"row\">
    <div class=\"articles small-12 columns\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "            ";
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tagName") == "map")) {
                // line 8
                echo "            <div id=\"googleMap\" class=\"article border-article marge\">
                <input type=\"hidden\" name=\"id\" value=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\"/>
                <article class=\"art-titre\"><h1>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artTitle"), "html", null, true);
                echo "</h1></article>
                <section class=\"map art-content not-editable map_canvas\">
                    <embed align=\"center\"><iframe width=\"100%\" height=\"340\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=+&amp;q=euro+literie&amp;ie=UTF8&amp;hq=euro+literie&amp;hnear=Hagetmau,+Landes,+Aquitaine&amp;ll=43.908143,-0.469564&amp;spn=0.08326,0.209255&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=8401589398713095024&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=+&amp;q=euro+literie&amp;ie=UTF8&amp;hq=euro+literie&amp;hnear=Hagetmau,+Landes,+Aquitaine&amp;ll=43.908143,-0.469564&amp;spn=0.08326,0.209255&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=8401589398713095024\" style=\"color:#0000FF;text-align:left\">Agrandir le plan</a></small></embed>
                </section>
            </div>
            ";
            } elseif ((($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tagName") == "adresse_courrier") || ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tagName") == "adresse_phone"))) {
                // line 16
                echo "            <div class=\"article art-adresse border-article marge\">
                <input type=\"hidden\" name=\"id\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\"/>
                ";
                // line 18
                if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tagname") == "adresse_courrier")) {
                    // line 19
                    echo "                    <article class=\"art-content courrier\">";
                    echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artContent");
                    echo "</article>
                ";
                } elseif (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tagName") == "adresse_phone")) {
                    // line 21
                    echo "                    <article class=\"art-content phone\">";
                    echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artContent");
                    echo "</article>
                ";
                }
                // line 23
                echo "            </div>
            ";
            } elseif (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tagName") == "horaire")) {
                // line 25
                echo "              <div id=\"horaires\" class=\"article border-article marge\">
                <input type=\"hidden\" name=\"id\" value=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\"/>
                <article class=\"art-titre\"><h1>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artTitle"), "html", null, true);
                echo "</h1></article>
                <article class=\"art-content\">";
                // line 28
                echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artContent");
                echo "</article>
                <article>
                    <table>
                    ";
                // line 31
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["horaires"]) ? $context["horaires"] : $this->getContext($context, "horaires")));
                foreach ($context['_seq'] as $context["_key"] => $context["horaire"]) {
                    // line 32
                    echo "                    <tr>
                        <td class=\"jour\">";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horaire"]) ? $context["horaire"] : $this->getContext($context, "horaire")), "jour"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horaire"]) ? $context["horaire"] : $this->getContext($context, "horaire")), "getMatin", array(0 => "debut"), "method"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horaire"]) ? $context["horaire"] : $this->getContext($context, "horaire")), "getMatin", array(0 => "fin"), "method"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horaire"]) ? $context["horaire"] : $this->getContext($context, "horaire")), "getAprem", array(0 => "debut"), "method"), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horaire"]) ? $context["horaire"] : $this->getContext($context, "horaire")), "getAprem", array(0 => "fin"), "method"), "html", null, true);
                    echo "</td>
                    </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                    </table>
                </article>
            </div>
            ";
            } elseif (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tagName") == "formulaire")) {
                // line 41
                echo "              <div id=\"email\" class=\"article border-article marge\">
                <input type=\"hidden\" name=\"id\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\"/>
                <article class=\"art-titre\"><h1>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artTitle"), "html", null, true);
                echo "</h1></article>
                <article class=\"art-content\">";
                // line 44
                echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artContent");
                echo "</article>
                <form class=\"form-email\" method=\"post\" ";
                // line 45
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
                echo ">
                    ";
                // line 46
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
                    <input type=\"submit\" class=\"btn btn-primary\" />
                </form>
            </div>
            ";
            }
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
</div>
";
        // line 54
        if ((array_key_exists("envoie", $context) && (isset($context["envoie"]) ? $context["envoie"] : $this->getContext($context, "envoie")))) {
            // line 55
            echo "    <script>
        var d = '<div><p>Votre email a bien était envoyé !</p><p>Nous répondrons dans les meilleurs délais.</p></div>';
        \$(d).dialog({
            buttons : {
                \"close\" : function(){
                    \$(this).dialog('close');
                }
            }
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 55,  127 => 37,  175 => 62,  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 63,  174 => 71,  165 => 58,  137 => 50,  118 => 40,  113 => 38,  65 => 19,  20 => 1,  53 => 17,  100 => 25,  77 => 19,  84 => 25,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 54,  160 => 51,  152 => 46,  148 => 45,  110 => 37,  104 => 29,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 43,  132 => 51,  128 => 44,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 47,  119 => 42,  102 => 32,  71 => 22,  67 => 15,  63 => 15,  59 => 16,  87 => 26,  38 => 12,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 52,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 42,  121 => 46,  117 => 44,  105 => 32,  91 => 27,  62 => 17,  49 => 16,  28 => 2,  31 => 3,  26 => 3,  25 => 3,  21 => 2,  94 => 23,  89 => 21,  85 => 25,  75 => 23,  68 => 19,  56 => 15,  24 => 4,  19 => 1,  93 => 32,  88 => 28,  78 => 21,  46 => 9,  44 => 12,  27 => 7,  79 => 24,  72 => 21,  69 => 17,  47 => 11,  40 => 7,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 54,  120 => 41,  115 => 43,  111 => 39,  108 => 33,  101 => 31,  98 => 24,  96 => 31,  83 => 25,  74 => 21,  66 => 18,  55 => 13,  52 => 14,  50 => 10,  43 => 8,  41 => 11,  35 => 8,  32 => 6,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 65,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 54,  147 => 58,  144 => 44,  141 => 50,  133 => 41,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 34,  109 => 34,  106 => 38,  103 => 37,  99 => 35,  95 => 28,  92 => 29,  86 => 22,  82 => 19,  80 => 23,  73 => 18,  64 => 18,  60 => 16,  57 => 18,  54 => 16,  51 => 13,  48 => 13,  45 => 12,  42 => 8,  39 => 9,  36 => 6,  33 => 10,  30 => 4,);
    }
}
