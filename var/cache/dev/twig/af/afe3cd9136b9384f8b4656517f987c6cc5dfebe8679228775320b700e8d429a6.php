<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7b5754fb13ad641841c57b881ea51ec324dd246551155ae39abd3292d94cb0d6 extends Twig_Template
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
        $__internal_0a4bc8a0e7dd860566f7ab7888e2325a082077feb78b49688b5994a321e85de1 = $this->env->getExtension("native_profiler");
        $__internal_0a4bc8a0e7dd860566f7ab7888e2325a082077feb78b49688b5994a321e85de1->enter($__internal_0a4bc8a0e7dd860566f7ab7888e2325a082077feb78b49688b5994a321e85de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0a4bc8a0e7dd860566f7ab7888e2325a082077feb78b49688b5994a321e85de1->leave($__internal_0a4bc8a0e7dd860566f7ab7888e2325a082077feb78b49688b5994a321e85de1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
