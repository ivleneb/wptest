<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_74bda6feb75b0822834bece1d11797e6f8db888e11a8f6d5c80cf6ad4182b4cf extends Twig_Template
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
        $__internal_7bcefd355f6b941503c54f5d5f4b8ead976c41ad5b0292b49048f57d7cf21d60 = $this->env->getExtension("native_profiler");
        $__internal_7bcefd355f6b941503c54f5d5f4b8ead976c41ad5b0292b49048f57d7cf21d60->enter($__internal_7bcefd355f6b941503c54f5d5f4b8ead976c41ad5b0292b49048f57d7cf21d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7bcefd355f6b941503c54f5d5f4b8ead976c41ad5b0292b49048f57d7cf21d60->leave($__internal_7bcefd355f6b941503c54f5d5f4b8ead976c41ad5b0292b49048f57d7cf21d60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
