<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_18b1efef7a0f43cd10537b08cd9e04bb125b8a8a1128dca0f8637a878a3033ca extends Twig_Template
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
        $__internal_b95278de4592d3d2179809eeee6937f489708f7ff84dd050d5a5007708ced2fc = $this->env->getExtension("native_profiler");
        $__internal_b95278de4592d3d2179809eeee6937f489708f7ff84dd050d5a5007708ced2fc->enter($__internal_b95278de4592d3d2179809eeee6937f489708f7ff84dd050d5a5007708ced2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b95278de4592d3d2179809eeee6937f489708f7ff84dd050d5a5007708ced2fc->leave($__internal_b95278de4592d3d2179809eeee6937f489708f7ff84dd050d5a5007708ced2fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
