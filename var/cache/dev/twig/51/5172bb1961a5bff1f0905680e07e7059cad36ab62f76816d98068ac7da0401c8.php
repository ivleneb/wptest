<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3992cd0f86edd6eb0b66de33153d26fd1e815884344d62427db70d077ffc4898 extends Twig_Template
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
        $__internal_d1767155902348129046486de0ec1c397f8bd6c209a4a59cf1548d8f80da25f7 = $this->env->getExtension("native_profiler");
        $__internal_d1767155902348129046486de0ec1c397f8bd6c209a4a59cf1548d8f80da25f7->enter($__internal_d1767155902348129046486de0ec1c397f8bd6c209a4a59cf1548d8f80da25f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d1767155902348129046486de0ec1c397f8bd6c209a4a59cf1548d8f80da25f7->leave($__internal_d1767155902348129046486de0ec1c397f8bd6c209a4a59cf1548d8f80da25f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
