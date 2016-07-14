<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c1a132fb6c0d3e8b29775cbac06f65fb957cf2faa3b7e97b60c3fb6e902fac8d extends Twig_Template
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
        $__internal_0e2dc9faf1c1e791bab8bcb354f6f8d0db80364e9118f8178870110dfdd373b4 = $this->env->getExtension("native_profiler");
        $__internal_0e2dc9faf1c1e791bab8bcb354f6f8d0db80364e9118f8178870110dfdd373b4->enter($__internal_0e2dc9faf1c1e791bab8bcb354f6f8d0db80364e9118f8178870110dfdd373b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0e2dc9faf1c1e791bab8bcb354f6f8d0db80364e9118f8178870110dfdd373b4->leave($__internal_0e2dc9faf1c1e791bab8bcb354f6f8d0db80364e9118f8178870110dfdd373b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
