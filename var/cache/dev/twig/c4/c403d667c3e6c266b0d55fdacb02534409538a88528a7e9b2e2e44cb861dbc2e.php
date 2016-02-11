<?php

/* base.html.twig */
class __TwigTemplate_02b32444a6e984b09d02e24d3977405e482ead0fedaf59e871f3c826cd7425a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db93d48313243a144fe6b22b5556a3797a9a819f2bad2a686937ee873400081a = $this->env->getExtension("native_profiler");
        $__internal_db93d48313243a144fe6b22b5556a3797a9a819f2bad2a686937ee873400081a->enter($__internal_db93d48313243a144fe6b22b5556a3797a9a819f2bad2a686937ee873400081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 15
        echo "        </div>

        <div id=\"content\">
            ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        </div>
    </body>
</html>";
        
        $__internal_db93d48313243a144fe6b22b5556a3797a9a819f2bad2a686937ee873400081a->leave($__internal_db93d48313243a144fe6b22b5556a3797a9a819f2bad2a686937ee873400081a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d74964549fd2a6460dc52fba4ddd45fa50887fac821af5929068b0515c312132 = $this->env->getExtension("native_profiler");
        $__internal_d74964549fd2a6460dc52fba4ddd45fa50887fac821af5929068b0515c312132->enter($__internal_d74964549fd2a6460dc52fba4ddd45fa50887fac821af5929068b0515c312132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test Application";
        
        $__internal_d74964549fd2a6460dc52fba4ddd45fa50887fac821af5929068b0515c312132->leave($__internal_d74964549fd2a6460dc52fba4ddd45fa50887fac821af5929068b0515c312132_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c3dbcb794ec85a48268846b8009f5d84a0a13e55044e1ec85c42a68cc45ba7a3 = $this->env->getExtension("native_profiler");
        $__internal_c3dbcb794ec85a48268846b8009f5d84a0a13e55044e1ec85c42a68cc45ba7a3->enter($__internal_c3dbcb794ec85a48268846b8009f5d84a0a13e55044e1ec85c42a68cc45ba7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/blog\">Blog</a></li>
                </ul>
            ";
        
        $__internal_c3dbcb794ec85a48268846b8009f5d84a0a13e55044e1ec85c42a68cc45ba7a3->leave($__internal_c3dbcb794ec85a48268846b8009f5d84a0a13e55044e1ec85c42a68cc45ba7a3_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b53d95787443e25087940063b81c6d51ad6bd285712f04e47c2bab7a46f37e9 = $this->env->getExtension("native_profiler");
        $__internal_2b53d95787443e25087940063b81c6d51ad6bd285712f04e47c2bab7a46f37e9->enter($__internal_2b53d95787443e25087940063b81c6d51ad6bd285712f04e47c2bab7a46f37e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b53d95787443e25087940063b81c6d51ad6bd285712f04e47c2bab7a46f37e9->leave($__internal_2b53d95787443e25087940063b81c6d51ad6bd285712f04e47c2bab7a46f37e9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  74 => 10,  68 => 9,  56 => 5,  47 => 19,  45 => 18,  40 => 15,  38 => 9,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Test Application{% endblock %}</title>*/
/*     </head>*/
/*     <body>*/
/*         <div id="sidebar">*/
/*             {% block sidebar %}*/
/*                 <ul>*/
/*                     <li><a href="/">Home</a></li>*/
/*                     <li><a href="/blog">Blog</a></li>*/
/*                 </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
