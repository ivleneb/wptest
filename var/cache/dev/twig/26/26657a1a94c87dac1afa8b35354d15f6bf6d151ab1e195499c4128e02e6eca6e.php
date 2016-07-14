<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0e0f51df2122ca213422ae6337fd869e628293099030a11f796188fc130bc284 extends Twig_Template
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
        $__internal_b6f353200ebc43ca20167be7aeeb8d00458693d655b61f9de3b18fe705fee46d = $this->env->getExtension("native_profiler");
        $__internal_b6f353200ebc43ca20167be7aeeb8d00458693d655b61f9de3b18fe705fee46d->enter($__internal_b6f353200ebc43ca20167be7aeeb8d00458693d655b61f9de3b18fe705fee46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b6f353200ebc43ca20167be7aeeb8d00458693d655b61f9de3b18fe705fee46d->leave($__internal_b6f353200ebc43ca20167be7aeeb8d00458693d655b61f9de3b18fe705fee46d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
