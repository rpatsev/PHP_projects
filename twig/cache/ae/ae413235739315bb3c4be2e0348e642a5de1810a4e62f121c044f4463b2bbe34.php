<?php

/* header.twig */
class __TwigTemplate_8067f48d987b57cfad9df74294d9da087642a14de9b749d5e677e3e77137f3ac extends Twig_Template
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
        echo "<h1>!";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "!</h1>
<b>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
        echo "</b>
<br>
<h1>dsfsdgge</h1>
\t";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('upper')->getCallable(), array("hello")), "html", null, true);
        echo "
<br>\t
\t";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filt')->getCallable(), array("first")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.twig", "D:\\OpenServer\\domains\\localhost\\PHP_projects\\twig\\tpl\\header.twig");
    }
}
