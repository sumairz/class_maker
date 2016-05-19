<?php

/* prototype.twig */
class __TwigTemplate_13e420c13102e7ddb674e8a88eeba6c23b33f692bec97fe6fdc512e43c213435 extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, (isset($context["class_name"]) ? $context["class_name"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{class_name}}*/
