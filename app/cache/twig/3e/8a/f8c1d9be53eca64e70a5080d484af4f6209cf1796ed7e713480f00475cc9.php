<?php

/* respostas.twig */
class __TwigTemplate_3e8af8c1d9be53eca64e70a5080d484af4f6209cf1796ed7e713480f00475cc9 extends Twig_Template
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



<h1>Intençao</h1>
<pre>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["intencao"]) ? $context["intencao"] : $this->getContext($context, "intencao")), "html", null, true);
        echo "</pre>

<h1>Categoria</h1>
<pre>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
        echo "</pre>



";
    }

    public function getTemplateName()
    {
        return "respostas.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  45 => 10,  38 => 5,  35 => 4,  29 => 2,);
    }
}
