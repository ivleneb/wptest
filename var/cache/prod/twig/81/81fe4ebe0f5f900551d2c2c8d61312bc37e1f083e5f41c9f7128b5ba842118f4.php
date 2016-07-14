<?php

/* wapo/contact.html.twig */
class __TwigTemplate_f3816dc443a577d07ffbd220e3f73502e934d2f46d1f0acfcbcb8a43c4d10e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wapo/contact.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " WAPOSAT ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<h1> <span class=\"label label-success grumpy\">WAPOSAT > Contáctanos</span></h1>  
\t<div class=\"col-md-6 center-block\" style=\"float: none; margin-top:40px;\">
\t\t<form>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputEmail1\">Correo Electrónico</label>
\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputPassword1\">Nombre</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Nombre completo\">
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <textarea name=\"mensaje\" rows=\"6\" cols=\"100\" class=\"\"></textarea>
\t\t  </div>
\t\t  <div class=\"checkbox\">
\t\t    <label>
\t\t      <input type=\"checkbox\"> Tambièn deseo suscribirme
\t\t    </label>
\t\t  </div>
\t\t  <button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "wapo/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} WAPOSAT {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<h1> <span class="label label-success grumpy">WAPOSAT > Contáctanos</span></h1>  */
/* 	<div class="col-md-6 center-block" style="float: none; margin-top:40px;">*/
/* 		<form>*/
/* 		  <div class="form-group">*/
/* 		    <label for="exampleInputEmail1">Correo Electrónico</label>*/
/* 		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 		    <label for="exampleInputPassword1">Nombre</label>*/
/* 		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre completo">*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 		    <textarea name="mensaje" rows="6" cols="100" class=""></textarea>*/
/* 		  </div>*/
/* 		  <div class="checkbox">*/
/* 		    <label>*/
/* 		      <input type="checkbox"> Tambièn deseo suscribirme*/
/* 		    </label>*/
/* 		  </div>*/
/* 		  <button type="submit" class="btn btn-default">Enviar</button>*/
/* 		</form>*/
/* 	</div>*/
/* {% endblock %}*/
