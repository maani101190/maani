<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8e097bdf1e89bc37276d4abab2c2a2468cc1ae1e07c331fc42ac0c67988db3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8ca34264d4f5d08881b0acb15563b6a3eaef694bdba67c17933f7afbb04bc73 = $this->env->getExtension("native_profiler");
        $__internal_b8ca34264d4f5d08881b0acb15563b6a3eaef694bdba67c17933f7afbb04bc73->enter($__internal_b8ca34264d4f5d08881b0acb15563b6a3eaef694bdba67c17933f7afbb04bc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ca34264d4f5d08881b0acb15563b6a3eaef694bdba67c17933f7afbb04bc73->leave($__internal_b8ca34264d4f5d08881b0acb15563b6a3eaef694bdba67c17933f7afbb04bc73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f310afbc0a1fb64b7f9ef69d1c7ef9d45f3c6203cbda825cec2fd30d5c7ad6ff = $this->env->getExtension("native_profiler");
        $__internal_f310afbc0a1fb64b7f9ef69d1c7ef9d45f3c6203cbda825cec2fd30d5c7ad6ff->enter($__internal_f310afbc0a1fb64b7f9ef69d1c7ef9d45f3c6203cbda825cec2fd30d5c7ad6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f310afbc0a1fb64b7f9ef69d1c7ef9d45f3c6203cbda825cec2fd30d5c7ad6ff->leave($__internal_f310afbc0a1fb64b7f9ef69d1c7ef9d45f3c6203cbda825cec2fd30d5c7ad6ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0f655c8ce443b200cadeee47d0c8d810d006da7f834f35e35a5bde147b8e236 = $this->env->getExtension("native_profiler");
        $__internal_a0f655c8ce443b200cadeee47d0c8d810d006da7f834f35e35a5bde147b8e236->enter($__internal_a0f655c8ce443b200cadeee47d0c8d810d006da7f834f35e35a5bde147b8e236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0f655c8ce443b200cadeee47d0c8d810d006da7f834f35e35a5bde147b8e236->leave($__internal_a0f655c8ce443b200cadeee47d0c8d810d006da7f834f35e35a5bde147b8e236_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df39e21e98e27737ec3426f5226724499a13372865bce57ff4ffd279f5a4dd09 = $this->env->getExtension("native_profiler");
        $__internal_df39e21e98e27737ec3426f5226724499a13372865bce57ff4ffd279f5a4dd09->enter($__internal_df39e21e98e27737ec3426f5226724499a13372865bce57ff4ffd279f5a4dd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_df39e21e98e27737ec3426f5226724499a13372865bce57ff4ffd279f5a4dd09->leave($__internal_df39e21e98e27737ec3426f5226724499a13372865bce57ff4ffd279f5a4dd09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
