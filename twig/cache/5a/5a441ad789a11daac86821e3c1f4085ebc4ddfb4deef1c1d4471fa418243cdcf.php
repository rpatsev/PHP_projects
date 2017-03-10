<?php

/* home.twig */
class __TwigTemplate_d660ca51af7213f8f00dbd5ea3ae918dd803ce286f809a0a92160f5f5caa899a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_be40ca9bae44a7823b3c2b3a35a4293e61d365f56ef9e79d161139985709615d' => array($this, 'block___internal_be40ca9bae44a7823b3c2b3a35a4293e61d365f56ef9e79d161139985709615d'),
            '__internal_5f3b687f431cae2f36ee91cfd7041e2a070adaecc44f4cdcd5d4131f264630ff' => array($this, 'block___internal_5f3b687f431cae2f36ee91cfd7041e2a070adaecc44f4cdcd5d4131f264630ff'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
</head>
<body>

";
        // line 9
        if ((1 != 2)) {
            // line 10
            echo "  1 != 2
";
        }
        // line 12
        if ( !(isset($context["x"]) ? $context["x"] : null)) {
            // line 13
            echo "\tx
";
        }
        // line 15
        if (((isset($context["six"]) ? $context["six"] : null) === 6)) {
            // line 16
            echo "\t<h1>YES</h1>
";
        }
        // line 18
        if ((0 == (isset($context["number"]) ? $context["number"] : null) % 4)) {
            // line 19
            echo "\t<h1>OK</h1>
";
        } else {
            // line 21
            echo "\t <h1>NO</h1>
";
        }
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "w"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "    <span>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<hr>
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if (($context["item"] % 2 == 0)) {
                // line 28
                echo "    <span>#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</span>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "<hr>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "    <span>#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "revindex", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</span>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        (1 + 1);
        // line 35
        echo "
";
        // line 36
        ob_start();
        // line 37
        echo "    <h1>hello world!!   </h1>
    <b>bye</b>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 40
        echo "
";
        // line 41
        $this->displayBlock("__internal_be40ca9bae44a7823b3c2b3a35a4293e61d365f56ef9e79d161139985709615d", $context, $blocks);
        // line 44
        echo "
";
        // line 45
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_5f3b687f431cae2f36ee91cfd7041e2a070adaecc44f4cdcd5d4131f264630ff", $context, $blocks));
        // line 48
        echo "

";
        // line 50
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["x"]) ? $context["x"] : null)), "html", null, true);
        echo "

//join filters

<hr>
";
        // line 55
        echo twig_escape_filter($this->env, twig_join_filter(array(0 => 1, 1 => 2, 2 => 3), ","), "html", null, true);
        echo "
<hr>
// number of filters allowed (upper|lower)
\t";
        // line 58
        $context["x"] = "world";
        // line 59
        echo "\t<h1>Hello, ";
        echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
        echo "!</h1>
\t<h1>Hello, ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
        echo "!</h1>
\t<h1>Hello, ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
        echo "!</h1>
\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), 0, array(), "array"), "html", null, true);
        echo "
\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), 1, array(), "array"), "html", null, true);
        echo "
\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "prop", array()), "html", null, true);
        echo "

<hr>
";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["a"]) ? $context["a"] : null)), "html", null, true);
        echo "
<table width = \"100%\" border=\"1\">
\t
";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10, 10 => 11, 11 => 12, 12 => 13), 3, 0));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 71
            echo "\t<tr>
\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 73
                echo "\t\t    <td>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</table>


\t<ul>
\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 82
            echo "\t\t    <li>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "first", 1 => "second", 2 => "third"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "</li>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t</ul>

\t<hr>

\t";
        // line 88
        echo twig_escape_filter($this->env, ((array_key_exists("y", $context)) ? (_twig_default_filter((isset($context["y"]) ? $context["y"] : null), "empty")) : ("empty")), "html", null, true);
        echo "
<br>
\t";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "now"), "Y, jS F. h:i:s l"), "html", null, true);
        echo "
\t";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "now"), "r"), "html", null, true);
        echo "
<hr>
\t";
        // line 93
        $this->loadTemplate("header.twig", "home.twig", 93)->display(array_merge($context, array("title" => "some title")));
        // line 94
        echo "
</body>
</html>";
    }

    // line 41
    public function block___internal_be40ca9bae44a7823b3c2b3a35a4293e61d365f56ef9e79d161139985709615d($context, array $blocks = array())
    {
        // line 42
        echo "<h1>hello world</h1>
";
    }

    // line 45
    public function block___internal_5f3b687f431cae2f36ee91cfd7041e2a070adaecc44f4cdcd5d4131f264630ff($context, array $blocks = array())
    {
        // line 46
        echo "<h1>Hello!!!</h1>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 46,  323 => 45,  318 => 42,  315 => 41,  309 => 94,  307 => 93,  302 => 91,  298 => 90,  293 => 88,  287 => 84,  269 => 82,  252 => 81,  246 => 77,  238 => 74,  229 => 73,  225 => 72,  222 => 71,  218 => 70,  212 => 67,  206 => 64,  202 => 63,  198 => 62,  194 => 61,  190 => 60,  185 => 59,  183 => 58,  177 => 55,  169 => 50,  165 => 48,  163 => 45,  160 => 44,  158 => 41,  155 => 40,  150 => 37,  148 => 36,  145 => 35,  143 => 34,  124 => 32,  107 => 31,  104 => 30,  89 => 28,  78 => 27,  75 => 26,  66 => 24,  62 => 23,  58 => 21,  54 => 19,  52 => 18,  48 => 16,  46 => 15,  42 => 13,  40 => 12,  36 => 10,  34 => 9,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "D:\\OpenServer\\domains\\localhost\\PHP_projects\\twig\\tpl\\home.twig");
    }
}
