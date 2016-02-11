<?php

/* default/extends.html.twig */
class __TwigTemplate_70772b99330fed5f88039a1b241474e59a2eb8e894e931ac72635cf2f95104bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/extends.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_772f2e125375aac97a4e964aa7583873e97f52ece75d34d3ca2a09c82eaa9f85 = $this->env->getExtension("native_profiler");
        $__internal_772f2e125375aac97a4e964aa7583873e97f52ece75d34d3ca2a09c82eaa9f85->enter($__internal_772f2e125375aac97a4e964aa7583873e97f52ece75d34d3ca2a09c82eaa9f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/extends.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772f2e125375aac97a4e964aa7583873e97f52ece75d34d3ca2a09c82eaa9f85->leave($__internal_772f2e125375aac97a4e964aa7583873e97f52ece75d34d3ca2a09c82eaa9f85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38146094bd8b424d9e2ab4832c84e867274a661436efdd342da43d610a7f867a = $this->env->getExtension("native_profiler");
        $__internal_38146094bd8b424d9e2ab4832c84e867274a661436efdd342da43d610a7f867a->enter($__internal_38146094bd8b424d9e2ab4832c84e867274a661436efdd342da43d610a7f867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_38146094bd8b424d9e2ab4832c84e867274a661436efdd342da43d610a7f867a->leave($__internal_38146094bd8b424d9e2ab4832c84e867274a661436efdd342da43d610a7f867a_prof);

    }

    public function getTemplateName()
    {
        return "default/extends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
