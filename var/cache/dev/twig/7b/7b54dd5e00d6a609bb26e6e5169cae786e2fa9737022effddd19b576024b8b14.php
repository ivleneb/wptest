<?php

/* wapo/contact.html.twig */
class __TwigTemplate_6888b684a52536c6b1d126ca124410b3fd71454705f03ccd78eeb6686e46a8be extends Twig_Template
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
        $__internal_2b767b443a6d621945933402fd6b320430c354c32dd3add2f3b05940cbe1cf55 = $this->env->getExtension("native_profiler");
        $__internal_2b767b443a6d621945933402fd6b320430c354c32dd3add2f3b05940cbe1cf55->enter($__internal_2b767b443a6d621945933402fd6b320430c354c32dd3add2f3b05940cbe1cf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b767b443a6d621945933402fd6b320430c354c32dd3add2f3b05940cbe1cf55->leave($__internal_2b767b443a6d621945933402fd6b320430c354c32dd3add2f3b05940cbe1cf55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b718b03b5c7e787fb5d9cf64bd6a9b38b252f114bc9f004c92e74bd09cd0f57c = $this->env->getExtension("native_profiler");
        $__internal_b718b03b5c7e787fb5d9cf64bd6a9b38b252f114bc9f004c92e74bd09cd0f57c->enter($__internal_b718b03b5c7e787fb5d9cf64bd6a9b38b252f114bc9f004c92e74bd09cd0f57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_b718b03b5c7e787fb5d9cf64bd6a9b38b252f114bc9f004c92e74bd09cd0f57c->leave($__internal_b718b03b5c7e787fb5d9cf64bd6a9b38b252f114bc9f004c92e74bd09cd0f57c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92c578bc7f84d189ead1be20e0984be0567f8458dc1f154af7f1fe7c36976e23 = $this->env->getExtension("native_profiler");
        $__internal_92c578bc7f84d189ead1be20e0984be0567f8458dc1f154af7f1fe7c36976e23->enter($__internal_92c578bc7f84d189ead1be20e0984be0567f8458dc1f154af7f1fe7c36976e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92c578bc7f84d189ead1be20e0984be0567f8458dc1f154af7f1fe7c36976e23->leave($__internal_92c578bc7f84d189ead1be20e0984be0567f8458dc1f154af7f1fe7c36976e23_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
