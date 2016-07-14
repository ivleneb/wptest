<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58361ace77f23edffd12684c87c6d8d58dc7dec4f9923ec3b470df4ea8fd3193 extends Twig_Template
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
        $__internal_579449d3503b03f8e664672e133d931c170946e802ae9333c0805a1f8a118885 = $this->env->getExtension("native_profiler");
        $__internal_579449d3503b03f8e664672e133d931c170946e802ae9333c0805a1f8a118885->enter($__internal_579449d3503b03f8e664672e133d931c170946e802ae9333c0805a1f8a118885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_579449d3503b03f8e664672e133d931c170946e802ae9333c0805a1f8a118885->leave($__internal_579449d3503b03f8e664672e133d931c170946e802ae9333c0805a1f8a118885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
