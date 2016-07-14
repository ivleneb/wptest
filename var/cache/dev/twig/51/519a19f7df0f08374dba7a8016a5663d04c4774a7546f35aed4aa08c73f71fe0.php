<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_df178ba12592f66719b8a9268ad12236a871653f90bf9d5a2ac2db99644e6e48 extends Twig_Template
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
        $__internal_dc0c5c86e2331508c671a28e5d540c70130adff0738fd273c901ff9fc77cc7e4 = $this->env->getExtension("native_profiler");
        $__internal_dc0c5c86e2331508c671a28e5d540c70130adff0738fd273c901ff9fc77cc7e4->enter($__internal_dc0c5c86e2331508c671a28e5d540c70130adff0738fd273c901ff9fc77cc7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dc0c5c86e2331508c671a28e5d540c70130adff0738fd273c901ff9fc77cc7e4->leave($__internal_dc0c5c86e2331508c671a28e5d540c70130adff0738fd273c901ff9fc77cc7e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
