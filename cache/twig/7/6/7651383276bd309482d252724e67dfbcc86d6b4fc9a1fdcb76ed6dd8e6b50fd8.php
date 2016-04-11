<?php

/* acp_ulogin.html */
class __TwigTemplate_7651383276bd309482d252724e67dfbcc86d6b4fc9a1fdcb76ed6dd8e6b50fd8 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_ulogin.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<a id=\"maincontent\"></a>

<h1>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 8
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 9
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 11
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 14
        echo "
<form id=\"config_ulogin\" method=\"post\" action=\"";
        // line 15
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
            // line 18
            echo "\t";
            if ($this->getAttribute($context["options"], "S_LEGEND", array())) {
                // line 19
                echo "\t\t";
                if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", array())) {
                    // line 20
                    echo "\t\t\t</fieldset>
\t\t";
                }
                // line 22
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 23
                echo $this->getAttribute($context["options"], "LEGEND", array());
                echo "</legend>
\t";
            } else {
                // line 25
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"";
                // line 27
                echo $this->getAttribute($context["options"], "KEY", array());
                echo "\">";
                echo $this->getAttribute($context["options"], "TITLE", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if ($this->getAttribute($context["options"], "S_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["options"], "TITLE_EXPLAIN", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 28
                echo $this->getAttribute($context["options"], "CONTENT", array());
                echo "</dd>
\t\t</dl>

\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 38
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 42
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ulogin.html", 42)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ulogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 42,  131 => 38,  126 => 36,  122 => 35,  118 => 33,  107 => 28,  94 => 27,  90 => 25,  85 => 23,  82 => 22,  78 => 20,  75 => 19,  72 => 18,  68 => 17,  63 => 15,  60 => 14,  54 => 11,  50 => 10,  47 => 9,  45 => 8,  40 => 6,  35 => 4,  31 => 2,  19 => 1,);
    }
}
