<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_57a6b3dd001386029155f202bee81eb60e4a68f36b88a8954a93c451fe71f0ed extends Twig_Template
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
        $__internal_c85ad1d461b3dda94001bdd2980d34ad65366180581d9d66be7d45001de78a93 = $this->env->getExtension("native_profiler");
        $__internal_c85ad1d461b3dda94001bdd2980d34ad65366180581d9d66be7d45001de78a93->enter($__internal_c85ad1d461b3dda94001bdd2980d34ad65366180581d9d66be7d45001de78a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c85ad1d461b3dda94001bdd2980d34ad65366180581d9d66be7d45001de78a93->leave($__internal_c85ad1d461b3dda94001bdd2980d34ad65366180581d9d66be7d45001de78a93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
