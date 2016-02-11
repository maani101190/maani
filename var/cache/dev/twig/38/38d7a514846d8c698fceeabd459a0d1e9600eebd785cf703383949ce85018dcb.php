<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_422854a186d7a29cfcad2daf10fc7348ddda2b2c969a58ea713920d9a523b7de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c71d0931b7cbf1084f07c873663904901dd0c443e91e72bc9c03a3dabafea7c = $this->env->getExtension("native_profiler");
        $__internal_9c71d0931b7cbf1084f07c873663904901dd0c443e91e72bc9c03a3dabafea7c->enter($__internal_9c71d0931b7cbf1084f07c873663904901dd0c443e91e72bc9c03a3dabafea7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c71d0931b7cbf1084f07c873663904901dd0c443e91e72bc9c03a3dabafea7c->leave($__internal_9c71d0931b7cbf1084f07c873663904901dd0c443e91e72bc9c03a3dabafea7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21e1befbb0500d773e94ca0c84da4e5782a900c79a084493bb4133b66ab2ac70 = $this->env->getExtension("native_profiler");
        $__internal_21e1befbb0500d773e94ca0c84da4e5782a900c79a084493bb4133b66ab2ac70->enter($__internal_21e1befbb0500d773e94ca0c84da4e5782a900c79a084493bb4133b66ab2ac70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21e1befbb0500d773e94ca0c84da4e5782a900c79a084493bb4133b66ab2ac70->leave($__internal_21e1befbb0500d773e94ca0c84da4e5782a900c79a084493bb4133b66ab2ac70_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa79e2278f726ab69aaffe62cac1dd921ce02f3836a1315ff70b9d14c070b0c8 = $this->env->getExtension("native_profiler");
        $__internal_fa79e2278f726ab69aaffe62cac1dd921ce02f3836a1315ff70b9d14c070b0c8->enter($__internal_fa79e2278f726ab69aaffe62cac1dd921ce02f3836a1315ff70b9d14c070b0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa79e2278f726ab69aaffe62cac1dd921ce02f3836a1315ff70b9d14c070b0c8->leave($__internal_fa79e2278f726ab69aaffe62cac1dd921ce02f3836a1315ff70b9d14c070b0c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e93e01d8341a776ff737e748a115e6506368c76e8222b4a0e27d04666ad4bd6f = $this->env->getExtension("native_profiler");
        $__internal_e93e01d8341a776ff737e748a115e6506368c76e8222b4a0e27d04666ad4bd6f->enter($__internal_e93e01d8341a776ff737e748a115e6506368c76e8222b4a0e27d04666ad4bd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e93e01d8341a776ff737e748a115e6506368c76e8222b4a0e27d04666ad4bd6f->leave($__internal_e93e01d8341a776ff737e748a115e6506368c76e8222b4a0e27d04666ad4bd6f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
