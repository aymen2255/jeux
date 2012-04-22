<?php

/* tutoWelcomeBundle::layout.html.twig */
class __TwigTemplate_2837003ed05f169bc99cc581652b0099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <title>Tutoriel Symfony2 : ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"container\">
            <header>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tutoWelcomeBundle_homepage"), "html", null, true);
        echo "\" title=\"Retour à l'accueil\">Tutoriel Symfony2</a>
                <p>Bonjour et bienvenue dans ce tutoriel pour Symfony2</p>
            </header>

            <div id=\"content\">
                ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "            </div>
            <footer>
            </footer>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tutowelcome/css/welcome.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "tutoWelcomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
