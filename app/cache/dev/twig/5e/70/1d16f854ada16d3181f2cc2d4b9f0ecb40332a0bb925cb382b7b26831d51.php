<?php

/* yomaahBundle:Main:base.html.twig */
class __TwigTemplate_5e701d16f854ada16d3181f2cc2d4b9f0ecb40332a0bb925cb382b7b26831d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"JOSIEN, josien lionel\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/foundation.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/normalize.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/main-bar.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/main-style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/banniere.css"), "html", null, true);
        echo "\" />
        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/fontawesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
        <link href='http://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet' type='text/css'>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48553758-1', 'yomaah.fr');
  ga('send', 'pageview');

</script>
<!--[if gte IE 9]>
  <style type=\"text/css\">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!--[if IE]>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<![endif]-->
    </head> 

    <body>
    ";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "mobile"), "method", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "mobile"), "method"))) {
            // line 43
            echo "    ";
        } else {
            // line 44
            echo "      ";
            $this->env->loadTemplate("yomaahBundle:Main:main-bar1.html.twig")->display($context);
            // line 45
            echo "        <div id=\"banniere\">
            <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/images/ban.jpg"), "html", null, true);
            echo "\"></img>
        </div>
        <div class=\"row\">
            <div id=\"prez1\" class=\"prez\">JOSIEN Lionel</div>
            <div id=\"prez4\" class=\"prez\">Développeur Logiciel</div>
        </div>
    ";
        }
        // line 53
        echo "    <div id=\"corps\" class=\"row border-radius\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>
    ";
        // line 56
        $this->displayBlock('javascript', $context, $blocks);
        // line 57
        echo "    ";
        if ((array_key_exists("admin", $context) && (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))) {
            // line 58
            echo "        ";
            $this->env->loadTemplate("yomaahBundle:Toolbar:toolbar.html.twig")->display($context);
            // line 59
            echo "        ";
            $this->env->loadTemplate("yomaahBundle:Toolbar:addArticleToolBar.html.twig")->display($context);
            // line 60
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/rangy-core.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/hallo.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/monHallo.js"), "html", null, true);
            echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/bootstrap.icons.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/jquery.toolbars.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/monToolbar.css"), "html", null, true);
            echo "\" />
        <script type=\"text/javascript\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/jquery.toolbar.js"), "html", null, true);
            echo "\"></script>
        <script>setAdminToolbar()</script>
    ";
        }
        // line 69
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "JOSIEN Lionel's website";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    // line 56
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "yomaahBundle:Main:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 56,  170 => 69,  160 => 65,  152 => 63,  148 => 62,  110 => 46,  104 => 44,  34 => 7,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 56,  107 => 45,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  87 => 25,  38 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 64,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  28 => 4,  31 => 5,  26 => 6,  25 => 5,  21 => 2,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 17,  56 => 9,  24 => 4,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  44 => 12,  27 => 4,  79 => 18,  72 => 18,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 54,  120 => 53,  115 => 43,  111 => 37,  108 => 36,  101 => 43,  98 => 31,  96 => 31,  83 => 25,  74 => 19,  66 => 15,  55 => 13,  52 => 21,  50 => 11,  43 => 8,  41 => 9,  35 => 7,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 18,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 58,  130 => 57,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 42,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 16,  60 => 6,  57 => 11,  54 => 13,  51 => 14,  48 => 8,  45 => 17,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
