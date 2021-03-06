<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f401747226d9f31e50c9edfe371b05bd3d25bd47e0cf2d4660062223e43b63f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a99cd75670970b7d9ceb599ecab91064a46c5223b4cbeb370ae99e0dde724692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99cd75670970b7d9ceb599ecab91064a46c5223b4cbeb370ae99e0dde724692->enter($__internal_a99cd75670970b7d9ceb599ecab91064a46c5223b4cbeb370ae99e0dde724692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a99cd75670970b7d9ceb599ecab91064a46c5223b4cbeb370ae99e0dde724692->leave($__internal_a99cd75670970b7d9ceb599ecab91064a46c5223b4cbeb370ae99e0dde724692_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4440fd238c6a4458c73f938befe6444fed2acdb83e70afa77100479fa528eeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4440fd238c6a4458c73f938befe6444fed2acdb83e70afa77100479fa528eeef->enter($__internal_4440fd238c6a4458c73f938befe6444fed2acdb83e70afa77100479fa528eeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4440fd238c6a4458c73f938befe6444fed2acdb83e70afa77100479fa528eeef->leave($__internal_4440fd238c6a4458c73f938befe6444fed2acdb83e70afa77100479fa528eeef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5709d783f8bcd24d411a7da0ff7a35ac87ebe628a12a8137fc22cc2174ef88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5709d783f8bcd24d411a7da0ff7a35ac87ebe628a12a8137fc22cc2174ef88d->enter($__internal_c5709d783f8bcd24d411a7da0ff7a35ac87ebe628a12a8137fc22cc2174ef88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5709d783f8bcd24d411a7da0ff7a35ac87ebe628a12a8137fc22cc2174ef88d->leave($__internal_c5709d783f8bcd24d411a7da0ff7a35ac87ebe628a12a8137fc22cc2174ef88d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a0fb8a0de8a7f936dd22f9a12fe98fd143ade33d17c7599c40e6838d8157ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0fb8a0de8a7f936dd22f9a12fe98fd143ade33d17c7599c40e6838d8157ecf->enter($__internal_6a0fb8a0de8a7f936dd22f9a12fe98fd143ade33d17c7599c40e6838d8157ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6a0fb8a0de8a7f936dd22f9a12fe98fd143ade33d17c7599c40e6838d8157ecf->leave($__internal_6a0fb8a0de8a7f936dd22f9a12fe98fd143ade33d17c7599c40e6838d8157ecf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
