<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c0f7a7c733eafe49ef380907c601393c1c92a93d45650043919c63cf2ac17907 extends Twig_Template
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
        $__internal_cd2255fb34796064f7f5a8d0b9dfa18649d542cb9fc744bc7222912f339e3640 = $this->env->getExtension("native_profiler");
        $__internal_cd2255fb34796064f7f5a8d0b9dfa18649d542cb9fc744bc7222912f339e3640->enter($__internal_cd2255fb34796064f7f5a8d0b9dfa18649d542cb9fc744bc7222912f339e3640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cd2255fb34796064f7f5a8d0b9dfa18649d542cb9fc744bc7222912f339e3640->leave($__internal_cd2255fb34796064f7f5a8d0b9dfa18649d542cb9fc744bc7222912f339e3640_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
