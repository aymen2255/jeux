<?php

/* tutoWelcomeBundle:Homepage:index.html.twig */
class __TwigTemplate_8c31062fb5bf2a680140e0f93a91f552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tutoWelcomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Homepage";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "Vous êtes en train de lire la première page générée avec Symfony2, la homepage.
";
    }

    public function getTemplateName()
    {
        return "tutoWelcomeBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
