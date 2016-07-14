<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0bc93375afab889d0cf569a1073fde7bb2d176483a4f62e73ec142c74194c378 extends Twig_Template
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
        $__internal_33df9d36b8692162413ad2a4f7a6b46b03712c7a1d2b362f2d04b97349da7016 = $this->env->getExtension("native_profiler");
        $__internal_33df9d36b8692162413ad2a4f7a6b46b03712c7a1d2b362f2d04b97349da7016->enter($__internal_33df9d36b8692162413ad2a4f7a6b46b03712c7a1d2b362f2d04b97349da7016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_33df9d36b8692162413ad2a4f7a6b46b03712c7a1d2b362f2d04b97349da7016->leave($__internal_33df9d36b8692162413ad2a4f7a6b46b03712c7a1d2b362f2d04b97349da7016_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
