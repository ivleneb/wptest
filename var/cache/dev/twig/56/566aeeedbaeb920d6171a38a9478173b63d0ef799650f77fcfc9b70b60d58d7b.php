<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_112f4fb1061ae98832b80d9d5a3df0f640c8a07cc13455d6649aabde5d203e29 extends Twig_Template
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
        $__internal_a65a64d4be37745b047fb1c2fe09110b2c1559f156688aab78234189af44d100 = $this->env->getExtension("native_profiler");
        $__internal_a65a64d4be37745b047fb1c2fe09110b2c1559f156688aab78234189af44d100->enter($__internal_a65a64d4be37745b047fb1c2fe09110b2c1559f156688aab78234189af44d100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a65a64d4be37745b047fb1c2fe09110b2c1559f156688aab78234189af44d100->leave($__internal_a65a64d4be37745b047fb1c2fe09110b2c1559f156688aab78234189af44d100_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
