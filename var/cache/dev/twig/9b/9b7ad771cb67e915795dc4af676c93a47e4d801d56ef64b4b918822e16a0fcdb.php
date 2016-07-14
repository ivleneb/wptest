<?php

/* wapo/test.html.twig */
class __TwigTemplate_e8d2ccd6bf67f4364c838b9292bd3da8223712b5336e140bd1c7dc0711254bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wapo/test.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_329d46816e7699dfafd1e78018238121f652895c724d2bd42664b481700820ea = $this->env->getExtension("native_profiler");
        $__internal_329d46816e7699dfafd1e78018238121f652895c724d2bd42664b481700820ea->enter($__internal_329d46816e7699dfafd1e78018238121f652895c724d2bd42664b481700820ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329d46816e7699dfafd1e78018238121f652895c724d2bd42664b481700820ea->leave($__internal_329d46816e7699dfafd1e78018238121f652895c724d2bd42664b481700820ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aef5fd044a29abdc5d960adfe4ba4bf5b4e5cac5570f7da5b98c0a63acee36f4 = $this->env->getExtension("native_profiler");
        $__internal_aef5fd044a29abdc5d960adfe4ba4bf5b4e5cac5570f7da5b98c0a63acee36f4->enter($__internal_aef5fd044a29abdc5d960adfe4ba4bf5b4e5cac5570f7da5b98c0a63acee36f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_aef5fd044a29abdc5d960adfe4ba4bf5b4e5cac5570f7da5b98c0a63acee36f4->leave($__internal_aef5fd044a29abdc5d960adfe4ba4bf5b4e5cac5570f7da5b98c0a63acee36f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_28da20cdab0ad1396269859699095edde9339f49d806ef7e38319670ef7910af = $this->env->getExtension("native_profiler");
        $__internal_28da20cdab0ad1396269859699095edde9339f49d806ef7e38319670ef7910af->enter($__internal_28da20cdab0ad1396269859699095edde9339f49d806ef7e38319670ef7910af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<h1>aca</h1>
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 9
            echo "\t    <tr>
\t    \t<td>idUserBlock: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idUserBlock", array()), "html", null, true);
            echo "<br></td>
\t    \t<td>iUseridentidad: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "idUser", array()), "idUser", array()), "html", null, true);
            echo "<br></td>
\t    \t<td>idBlock: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "idBlock", array()), "idBlock", array()), "html", null, true);
            echo "<br></td>
\t    \t<td>role: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "role", array()), "html", null, true);
            echo "<br></td>
\t    \t<td>codename: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "codename", array()), "html", null, true);
            echo "<br></td>
\t    \t<td>Active: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "active", array()), "html", null, true);
            echo "<br></td>
\t    </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t
";
        
        $__internal_28da20cdab0ad1396269859699095edde9339f49d806ef7e38319670ef7910af->leave($__internal_28da20cdab0ad1396269859699095edde9339f49d806ef7e38319670ef7910af_prof);

    }

    public function getTemplateName()
    {
        return "wapo/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  63 => 9,  59 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} WAPOSAT {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<h1>aca</h1>*/
/* 	{% for t in query %}*/
/* 	    <tr>*/
/* 	    	<td>idUserBlock: {{t.idUserBlock}}<br></td>*/
/* 	    	<td>iUseridentidad: {{t.idUser.idUser}}<br></td>*/
/* 	    	<td>idBlock: {{t.idBlock.idBlock}}<br></td>*/
/* 	    	<td>role: {{t.role}}<br></td>*/
/* 	    	<td>codename: {{t.codename}}<br></td>*/
/* 	    	<td>Active: {{t.active}}<br></td>*/
/* 	    </tr>*/
/* 	{% endfor %}*/
/* 	*/
/* {% endblock %}*/
