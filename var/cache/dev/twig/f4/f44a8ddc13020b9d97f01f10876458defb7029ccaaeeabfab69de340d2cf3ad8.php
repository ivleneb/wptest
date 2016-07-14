<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d87502730d4fd2864ece64e6181faef27d44ee32c9390ae3368b12a0236bb209 extends Twig_Template
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
        $__internal_1da73e27ea52a7066d2f5d7e913b420fd14136aa7e980e770df84020d510cf4b = $this->env->getExtension("native_profiler");
        $__internal_1da73e27ea52a7066d2f5d7e913b420fd14136aa7e980e770df84020d510cf4b->enter($__internal_1da73e27ea52a7066d2f5d7e913b420fd14136aa7e980e770df84020d510cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1da73e27ea52a7066d2f5d7e913b420fd14136aa7e980e770df84020d510cf4b->leave($__internal_1da73e27ea52a7066d2f5d7e913b420fd14136aa7e980e770df84020d510cf4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
