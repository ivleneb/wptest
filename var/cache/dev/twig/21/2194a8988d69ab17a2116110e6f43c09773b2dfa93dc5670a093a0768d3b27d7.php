<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31178d75ae2f74fa8ae47f75819eb70f433d110ce38200581fe970477a4a06b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec29ea646ee36baa07644baaeafccf3921ced46af2bc3f059b1f8fbb9dc2e79e = $this->env->getExtension("native_profiler");
        $__internal_ec29ea646ee36baa07644baaeafccf3921ced46af2bc3f059b1f8fbb9dc2e79e->enter($__internal_ec29ea646ee36baa07644baaeafccf3921ced46af2bc3f059b1f8fbb9dc2e79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ec29ea646ee36baa07644baaeafccf3921ced46af2bc3f059b1f8fbb9dc2e79e->leave($__internal_ec29ea646ee36baa07644baaeafccf3921ced46af2bc3f059b1f8fbb9dc2e79e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
