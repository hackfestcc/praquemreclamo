<?php

/* layout.twig */
class __TwigTemplate_dbd04cc0f75ad780eceeecf885f1261498bfa01558b243955c3cae51a0fe0fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'closing_scripts' => array($this, 'block_closing_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en-us\">
    <head>
        <meta charset=\"utf-8\">
        <title>Silex Bootstrap - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basePath"), "html", null, true);
        echo "/css/styles.css\" type=\"text/css\" />
        ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basePath"), "html", null, true);
        echo "/favicon.ico\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basePath"), "html", null, true);
        echo "/js/bootstrap.js\"></script>
        ";
        // line 13
        $this->displayBlock('closing_scripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "No Title";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    // line 13
    public function block_closing_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  72 => 11,  67 => 7,  61 => 5,  55 => 14,  53 => 13,  48 => 12,  46 => 11,  39 => 8,  37 => 7,  33 => 6,  23 => 1,  38 => 5,  35 => 4,  29 => 5,);
    }
}
