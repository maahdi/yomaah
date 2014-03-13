<?php

/* EuroLiteriestructureBundle:Main:layout.html.twig */
class __TwigTemplate_b1ed530fd381ec9fc4effbd0f2461b8fde74c0dcd509884c3902155b2d5a1aa4 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/adminInterface.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/main-bar.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/js/jquery-ready.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/js/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
</head>
<html>
<body>
    ";
        // line 31
        if ((array_key_exists("literie_admin", $context) && (isset($context["literie_admin"]) ? $context["literie_admin"] : $this->getContext($context, "literie_admin")))) {
            // line 32
            echo "        ";
            $this->env->loadTemplate("EuroLiteriestructureBundle:Main:barAdmin.html.twig")->display($context);
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "mobile"), "method")) {
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "        ";
            $this->env->loadTemplate("EuroLiteriestructureBundle:Main:menu.html.twig")->display($context);
            // line 37
            echo "        ";
            // line 38
            echo "        ";
            // line 39
            echo "        ";
            // line 40
            echo "    ";
        }
        // line 41
        echo "    <div class=\"row\">
        <div id=\"corps\" class=\"border-radius small-12 columns\">
            <div id=\"div-pos\" class=\"border-radius\">
                ";
        // line 45
        echo "    
                    <h5 id=\"position\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "</h1>
                ";
        // line 48
        echo "            </div>
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
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
        // line 64
        echo "    ";
        if ((array_key_exists("literie_admin", $context) && (isset($context["literie_admin"]) ? $context["literie_admin"] : $this->getContext($context, "literie_admin")))) {
            // line 65
            echo "        ";
            $this->env->loadTemplate("yomaahBundle:Toolbar:toolbar.html.twig")->display($context);
            // line 66
            echo "        ";
            $this->env->loadTemplate("yomaahBundle:Toolbar:addArticleToolBar.html.twig")->display($context);
            // line 67
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/monHallo.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/rangy-core.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/hallo.js"), "html", null, true);
            echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/bootstrap.icons.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/jquery.toolbars.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/monToolbar.css"), "html", null, true);
            echo "\" />
        <script type=\"text/javascript\" src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/js/jquery.toolbar.js"), "html", null, true);
            echo "\"></script>
        <script>setAdminToolbar()</script>
    ";
        }
        // line 76
        echo "</body>
</html>
";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
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
        return array (  203 => 50,  200 => 49,  194 => 76,  188 => 73,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  168 => 68,  163 => 67,  160 => 66,  154 => 64,  140 => 51,  138 => 49,  123 => 41,  120 => 40,  116 => 38,  114 => 37,  108 => 35,  105 => 34,  102 => 33,  97 => 31,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  37 => 13,  33 => 12,  20 => 1,  182 => 65,  178 => 63,  175 => 62,  165 => 58,  157 => 65,  152 => 55,  149 => 54,  145 => 52,  141 => 50,  139 => 49,  135 => 48,  131 => 46,  128 => 45,  118 => 39,  111 => 36,  106 => 38,  103 => 37,  99 => 32,  95 => 33,  93 => 32,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  65 => 20,  56 => 15,  52 => 14,  48 => 13,  45 => 15,  41 => 14,  31 => 3,  28 => 2,);
    }
}
