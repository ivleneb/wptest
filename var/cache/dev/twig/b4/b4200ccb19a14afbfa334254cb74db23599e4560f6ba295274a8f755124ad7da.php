<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5eade8e09189287f0f8c3b766377f2848cb8c25f32a4e1fd426dcf0694babb63 extends Twig_Template
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
        $__internal_7bdb79a1de23b6b695a93799f30e9c03d4f2d837bf847014523653b869fe188c = $this->env->getExtension("native_profiler");
        $__internal_7bdb79a1de23b6b695a93799f30e9c03d4f2d837bf847014523653b869fe188c->enter($__internal_7bdb79a1de23b6b695a93799f30e9c03d4f2d837bf847014523653b869fe188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7bdb79a1de23b6b695a93799f30e9c03d4f2d837bf847014523653b869fe188c->leave($__internal_7bdb79a1de23b6b695a93799f30e9c03d4f2d837bf847014523653b869fe188c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
