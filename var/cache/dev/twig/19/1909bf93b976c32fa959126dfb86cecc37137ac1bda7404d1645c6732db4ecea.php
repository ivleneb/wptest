<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f0cf3f74924e0d73efcd76e41e80924927672d142403ce40707469ead1966b3d extends Twig_Template
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
        $__internal_2b4454b5f46eb71c9c06ed2098e74c386a40bafa68fb59186df0ceec18732186 = $this->env->getExtension("native_profiler");
        $__internal_2b4454b5f46eb71c9c06ed2098e74c386a40bafa68fb59186df0ceec18732186->enter($__internal_2b4454b5f46eb71c9c06ed2098e74c386a40bafa68fb59186df0ceec18732186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2b4454b5f46eb71c9c06ed2098e74c386a40bafa68fb59186df0ceec18732186->leave($__internal_2b4454b5f46eb71c9c06ed2098e74c386a40bafa68fb59186df0ceec18732186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
