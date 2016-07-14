<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f80e85e2b9dd78997a56ce49a9be063cde87a167dd63bd7c5c5b07ccba9924f9 extends Twig_Template
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
        $__internal_3954ab95e05c223ad5434de4057da28a9a983383586ff217f708355da5e67c43 = $this->env->getExtension("native_profiler");
        $__internal_3954ab95e05c223ad5434de4057da28a9a983383586ff217f708355da5e67c43->enter($__internal_3954ab95e05c223ad5434de4057da28a9a983383586ff217f708355da5e67c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3954ab95e05c223ad5434de4057da28a9a983383586ff217f708355da5e67c43->leave($__internal_3954ab95e05c223ad5434de4057da28a9a983383586ff217f708355da5e67c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
