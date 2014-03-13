<?php

/* YomaahcodeSourceBundle:CodeSource:dossier.html.twig */
class __TwigTemplate_e9fe9f7a11749700f08a84893f9599037e4f672958f92116247cd0af2d34a87c extends Twig_Template
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
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yomaah/css/code_source.css"), "html", null, true);
        echo "\" />

<article>
    <section class=\"srcPath\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")));
        foreach ($context['_seq'] as $context["key"] => $context["path"]) {
            // line 7
            echo "            <ul>
                <li><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("code_source", array("path" => (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</a></li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </section>
    <section class=\"tabSource art-content\">
        ";
        // line 13
        if (array_key_exists("directories", $context)) {
            // line 14
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["directories"]) ? $context["directories"] : $this->getContext($context, "directories")));
            foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
                // line 15
                echo "                <article class=\"directories\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("code_source", array("path" => (((isset($context["entirePath"]) ? $context["entirePath"] : $this->getContext($context, "entirePath")) . "/") . (isset($context["dir"]) ? $context["dir"] : $this->getContext($context, "dir"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["dir"]) ? $context["dir"] : $this->getContext($context, "dir")), "html", null, true);
                echo "</a></article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "        ";
        if (array_key_exists("files", $context)) {
            // line 19
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 20
                echo "                <article class=\"files\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("code_source", array("path" => (((isset($context["entirePath"]) ? $context["entirePath"] : $this->getContext($context, "entirePath")) . "/") . (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
                echo "</a></article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        // line 23
        echo "    </section>
</article>
";
    }

    public function getTemplateName()
    {
        return "YomaahcodeSourceBundle:CodeSource:dossier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  100 => 25,  77 => 19,  84 => 23,  114 => 27,  76 => 16,  70 => 14,  58 => 15,  192 => 56,  170 => 69,  160 => 65,  152 => 63,  148 => 62,  110 => 46,  104 => 44,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 56,  107 => 45,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 16,  87 => 25,  38 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 64,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  121 => 46,  117 => 44,  105 => 40,  91 => 22,  62 => 10,  49 => 11,  28 => 5,  31 => 6,  26 => 3,  25 => 5,  21 => 2,  94 => 23,  89 => 21,  85 => 25,  75 => 19,  68 => 19,  56 => 9,  24 => 4,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 12,  44 => 10,  27 => 4,  79 => 18,  72 => 18,  69 => 17,  47 => 11,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 54,  120 => 53,  115 => 43,  111 => 37,  108 => 36,  101 => 43,  98 => 24,  96 => 31,  83 => 25,  74 => 21,  66 => 15,  55 => 13,  52 => 21,  50 => 14,  43 => 8,  41 => 9,  35 => 8,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 54,  182 => 18,  176 => 5,  173 => 65,  168 => 72,  164 => 66,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 58,  130 => 57,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 42,  95 => 28,  92 => 22,  86 => 22,  82 => 19,  80 => 20,  73 => 18,  64 => 18,  60 => 16,  57 => 11,  54 => 13,  51 => 13,  48 => 8,  45 => 10,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 4,);
    }
}
