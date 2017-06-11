<?php

/* reclamacao.twig */
class __TwigTemplate_8d9b3597fed7faef3681d8e455dc68d5d9d4ca1800782ccce5e6997acb57a0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "DefaultController::index";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Pra quem reclamo</h1>


<form action=\"buscaresposta\" method=\"post\" >
\t<textarea name=\"pergunta\" value=\"teste\" rows=10></textarea>
\t<input type=\"submit\">
</form>

";
    }

    public function getTemplateName()
    {
        return "reclamacao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
