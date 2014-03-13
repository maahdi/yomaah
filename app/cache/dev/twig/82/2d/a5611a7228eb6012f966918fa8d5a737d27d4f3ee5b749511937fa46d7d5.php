<?php

/* EuroLiteriestructureBundle:Main:layout.html.twig */
class __TwigTemplate_822da5611a7228eb6012f966918fa8d5a737d27d4f3ee5b749511937fa46d7d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>
<!--[if IE 8]> \t\t\t\t <html class=\"no-js lt-ie9\" lang=\"fr\" > <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"fr\" > <!--<![endif]-->

<head>
\t<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <title>Euro Literie Aquitaine</title>

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/foundation.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/nivo-slider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/corps.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/marque.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/contact.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/fontawesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\" />
    <link href='http://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet' type='text/css'>
    ";
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/main-bar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/adminInterface.css"), "html", null, true);
        echo "\" />
    ";
        // line 26
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/js/jquery-ready.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/js/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
</head>
<html>
<body>
    ";
        // line 33
        if ((array_key_exists("literie_admin", $context) && (isset($context["literie_admin"]) ? $context["literie_admin"] : $this->getContext($context, "literie_admin")))) {
            // line 34
            echo "        ";
            $this->env->loadTemplate("EuroLiteriestructureBundle:Main:barAdmin.html.twig")->display($context);
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "mobile"), "method")) {
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        ";
            $this->env->loadTemplate("EuroLiteriestructureBundle:Main:menu.html.twig")->display($context);
            // line 39
            echo "        ";
            // line 40
            echo "        ";
            // line 41
            echo "        ";
            // line 42
            echo "    ";
        }
        // line 43
        echo "    <div class=\"row\">
        <div id=\"corps\" class=\"border-radius small-12 columns\">
            <div id=\"div-pos\" class=\"border-radius\">
                ";
        // line 47
        echo "    
                    <h5 id=\"position\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "</h1>
                ";
        // line 50
        echo "            </div>
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "        </div>
    </div>
    <div id =\"footer\" class=\"row\">
        <footer>
            <div class=\"small-12 columns\">
                <a id=\"clic\" href=#>lien</a>
            </div>
        </footer>
    </div>
    <p id=\"back-top\">
\t\t<a href=\"#top\"><span></span>Haut de page</a>
\t</p>
    ";
        // line 66
        echo "    ";
        if ((array_key_exists("literie_admin", $context) && (isset($context["literie_admin"]) ? $context["literie_admin"] : $this->getContext($context, "literie_admin")))) {
            // line 67
            echo "        ";
            $this->env->loadTemplate("yomaahBundle:Toolbar:toolbar.html.twig")->display($context);
            // line 68
            echo "        ";
            $this->env->loadTemplate("yomaahBundle:Toolbar:addArticleToolBar.html.twig")->display($context);
            // line 69
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/monHallo.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/rangy-core.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/hallo.js"), "html", null, true);
            echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/bootstrap.icons.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/jquery.toolbars.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/monToolbar.css"), "html", null, true);
            echo "\" />
        <script type=\"text/javascript\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/jquery.toolbar.js"), "html", null, true);
            echo "\"></script>
        <script>setAdminToolbar()</script>
    ";
        }
        // line 78
        echo "</body>
</html>
";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "    ";
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 52,  202 => 51,  190 => 75,  186 => 74,  178 => 72,  174 => 71,  165 => 69,  137 => 50,  118 => 40,  113 => 38,  65 => 20,  20 => 1,  53 => 17,  100 => 25,  77 => 19,  84 => 27,  114 => 27,  76 => 16,  70 => 23,  58 => 15,  192 => 56,  170 => 70,  160 => 65,  152 => 63,  148 => 62,  110 => 37,  104 => 35,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 51,  128 => 56,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 16,  87 => 25,  38 => 10,  201 => 92,  196 => 78,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 59,  121 => 46,  117 => 44,  105 => 40,  91 => 22,  62 => 10,  49 => 16,  28 => 4,  31 => 5,  26 => 3,  25 => 5,  21 => 2,  94 => 23,  89 => 21,  85 => 25,  75 => 24,  68 => 19,  56 => 9,  24 => 4,  19 => 1,  93 => 28,  88 => 28,  78 => 21,  46 => 12,  44 => 12,  27 => 4,  79 => 26,  72 => 18,  69 => 17,  47 => 11,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 54,  120 => 41,  115 => 43,  111 => 37,  108 => 36,  101 => 34,  98 => 24,  96 => 31,  83 => 25,  74 => 21,  66 => 15,  55 => 13,  52 => 21,  50 => 14,  43 => 8,  41 => 14,  35 => 8,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 73,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 48,  130 => 47,  125 => 43,  122 => 42,  116 => 39,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 28,  92 => 29,  86 => 22,  82 => 19,  80 => 20,  73 => 18,  64 => 18,  60 => 16,  57 => 18,  54 => 13,  51 => 13,  48 => 8,  45 => 15,  42 => 10,  39 => 9,  36 => 9,  33 => 12,  30 => 4,);
    }
}
