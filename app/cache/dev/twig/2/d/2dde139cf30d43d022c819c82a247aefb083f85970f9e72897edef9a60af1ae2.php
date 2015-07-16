<?php

/* default/index.html.twig */
class __TwigTemplate_2dde139cf30d43d022c819c82a247aefb083f85970f9e72897edef9a60af1ae2 extends Twig_Template
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
        $__internal_178dc779d09f2b0ffd2a0827d304bcba90ba0700f4bb9b349f573ec0d9c37e76 = $this->env->getExtension("native_profiler");
        $__internal_178dc779d09f2b0ffd2a0827d304bcba90ba0700f4bb9b349f573ec0d9c37e76->enter($__internal_178dc779d09f2b0ffd2a0827d304bcba90ba0700f4bb9b349f573ec0d9c37e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head lang=\"es\">
    <meta charset=\"UTF-8\">
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cypfrox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/metro-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuDerecho.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/metro.js"), "html", null, true);
        echo "\"></script>

    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menuDerecho.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
\t<div class=\"charm right-side padding20 bg-white fg-black\" id=\"charmSearch\">
        <button class=\"square-button bg-transparent fg-black no-border place-right small-button\" onclick=\"showSearch()\"><span class=\"mif-cross\"></span></button>
        <h1 class=\"text-light\">Buscar</h1>
        <hr class=\"thin\"/>
        <br />
        <div class=\"input-control text full-size\">
            <label>
                <span class=\"dropdown-toggle drop-marker-dark\">Filtros</span>
                <ul class=\"d-menu\" data-role=\"dropdown\">
                \t<li><a onclick=\"setSearchPlace(this)\">Nombre</a></li>
                    <li><a onclick=\"setSearchPlace(this)\">Cargo</a></li>
                    <li><a onclick=\"setSearchPlace(this)\">Documento</a></li>
                </ul>
            </label>
            <input type=\"text\">
            <button class=\"button\"><span class=\"mif-search\"></span></button>
        </div>
    </div>

    <div class=\"charm left-side padding20 bg-white fg-black\" id=\"charmIoseet\">
    <button class=\"square-button bg-transparent fg-black no-border place-right small-button\" onclick=\"showIoseet()\"><span class=\"mif-cross\"></span></button>
    <center>
     \t<table><tr><td><a href=\"#\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" id=\"imgsrc\"></a></td><td><h1 class=\"text-light\">Ioseet</h1></td></tr></table>
     \t<hr class=\"thin bg-black\"/>
\t\t<div id=\"texto\">
\t\t\tIoseet, es uno de nuestros productos diseñado para que el publico , pueda conocer las empresas del mundo
\t\t</div>
\t</center>\t\t\t
    </div>
    <div class=\"tile-area-controls\" style=\"z-index:9;\">
    \t<button style=\"padding-left:5px;\"class=\"image-button bg-white fg-black no-border\"><span class=\"sub-header no-margin text-light\"><span class=\"mif-lab\"></span> &nbsp;&nbsp;Nuestras ideas</span></button>
    \t<button class=\"square-button bg-cyan fg-white bg-hover-white fg-hover-black no-border\" onclick=\"showIoseet()\"></button>
    \t<button class=\"square-button bg-orange fg-white bg-hover-gray fg-hover-black no-border\"></button>
    \t<button class=\"square-button bg-red fg-white bg-hover-gray fg-hover-black no-border\"></button>
        <button class=\"square-button bg-dark fg-white bg-hover-white fg-hover-black no-border\" onclick=\"showSearch()\"><span class=\"mif-search\"></span></button>
    </div>

 <!-- Index -->
\t<div id=\"headerindex\">
\t\t<div id=\"headerbox\">
\t\t\t<div id=\"titulo\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" width=\"1000\" height=\"680\"></div>
\t\t</div>
\t</div>
</body>
</html>";
        
        $__internal_178dc779d09f2b0ffd2a0827d304bcba90ba0700f4bb9b349f573ec0d9c37e76->leave($__internal_178dc779d09f2b0ffd2a0827d304bcba90ba0700f4bb9b349f573ec0d9c37e76_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 55,  81 => 37,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
