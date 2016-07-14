<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4237d4348938c4694af5b2b3a1cde6e365817f76701e735197fc1de9fd616097 extends Twig_Template
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
        $__internal_4b0fa3281484d6c8898bc1ca0affb5b57a3c05f53ac9f7aff950b22ac626780c = $this->env->getExtension("native_profiler");
        $__internal_4b0fa3281484d6c8898bc1ca0affb5b57a3c05f53ac9f7aff950b22ac626780c->enter($__internal_4b0fa3281484d6c8898bc1ca0affb5b57a3c05f53ac9f7aff950b22ac626780c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4b0fa3281484d6c8898bc1ca0affb5b57a3c05f53ac9f7aff950b22ac626780c->leave($__internal_4b0fa3281484d6c8898bc1ca0affb5b57a3c05f53ac9f7aff950b22ac626780c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
