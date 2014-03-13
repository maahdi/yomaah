<?php

/* EuroLiteriestructureBundle:Main:index.html.twig */
class __TwigTemplate_ab5f2198b03fa7f512870d25721f3cfc4445462707e780c39ca7c183fbe0e593 extends Twig_Template
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
        echo "
<!DOCTYPE html>

<html>
<head>
<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <title>Euro Literie Aquitaine</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/foundation.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/css/postAccueil.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"row\">
    <div class=\"large-12 columns\" id=\"annonce\"><div class=\"pa\">Un bon conseil vaut mieux qu'un bon prix!</div></div>
    <div class=\"large-12 columns\" id=\"annonceSecond\"><div class=\"po\">Les deux sont ici !!</div></div>
    <div class=\"large-12 columns\" id=\"logoAccueil\"><figure><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("literie_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EuroLiteriestructure/images/logo.png"), "html", null, true);
        echo "\"></img></a></figure></div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EuroLiteriestructureBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
