<?php

/* default/product.html.twig */
class __TwigTemplate_c5ae21880e20fb9f9e3e2affaf7e080a79debd7e92097338e9759045f152d813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("base.html.twig", "default/product.html.twig", 20);
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
        $__internal_85652e85d4779adbbb00403ae53bc74dac960eccc00d072ecd90640f2b2363fb = $this->env->getExtension("native_profiler");
        $__internal_85652e85d4779adbbb00403ae53bc74dac960eccc00d072ecd90640f2b2363fb->enter($__internal_85652e85d4779adbbb00403ae53bc74dac960eccc00d072ecd90640f2b2363fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85652e85d4779adbbb00403ae53bc74dac960eccc00d072ecd90640f2b2363fb->leave($__internal_85652e85d4779adbbb00403ae53bc74dac960eccc00d072ecd90640f2b2363fb_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_36deb62277e69516f699c0027dcb48c931ed5b7d8a90f45c1e5c110c767d9282 = $this->env->getExtension("native_profiler");
        $__internal_36deb62277e69516f699c0027dcb48c931ed5b7d8a90f45c1e5c110c767d9282->enter($__internal_36deb62277e69516f699c0027dcb48c931ed5b7d8a90f45c1e5c110c767d9282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 24
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["name"], "name", array()), "html", null, true);
            echo "</div>
<div>  ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["name"], "description", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_36deb62277e69516f699c0027dcb48c931ed5b7d8a90f45c1e5c110c767d9282->leave($__internal_36deb62277e69516f699c0027dcb48c931ed5b7d8a90f45c1e5c110c767d9282_prof);

    }

    public function getTemplateName()
    {
        return "default/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 25,  45 => 24,  40 => 23,  34 => 22,  11 => 20,);
    }
}
/* {#<form class="form-horizontal">*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">Id</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">{{product.id}}</p>*/
/*     </div>*/
/*     */
/*     <label class="col-sm-2 control-label">Name</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">{{product.name}}</p>*/
/*     </div>*/
/*      */
/*       <label class="col-sm-2 control-label">Description</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">{{product.description}}</p>*/
/*     </div>*/
/*   </div>*/
/* </form>#}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for name in product %}*/
/* <div>{{name.name}}</div>*/
/* <div>  {{name.description}}</div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
