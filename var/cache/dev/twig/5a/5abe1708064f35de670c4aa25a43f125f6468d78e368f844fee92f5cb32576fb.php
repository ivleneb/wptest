<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9de58a0c0aba859b3430239d082043fec7f52e69cfe3f4372a48a635cd130ae extends Twig_Template
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
        $__internal_34a5048bf17cf17dec9dc2543be80920f03c7d77aa69d2e1169c1487f77811c2 = $this->env->getExtension("native_profiler");
        $__internal_34a5048bf17cf17dec9dc2543be80920f03c7d77aa69d2e1169c1487f77811c2->enter($__internal_34a5048bf17cf17dec9dc2543be80920f03c7d77aa69d2e1169c1487f77811c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_34a5048bf17cf17dec9dc2543be80920f03c7d77aa69d2e1169c1487f77811c2->leave($__internal_34a5048bf17cf17dec9dc2543be80920f03c7d77aa69d2e1169c1487f77811c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
