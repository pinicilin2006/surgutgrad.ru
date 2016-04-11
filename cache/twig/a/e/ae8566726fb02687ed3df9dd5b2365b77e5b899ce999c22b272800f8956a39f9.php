<?php

/* simple_footer.html */
class __TwigTemplate_ae8566726fb02687ed3df9dd5b2365b77e5b899ce999c22b272800f8956a39f9 extends Twig_Template
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
        echo "\t\t<div style=\"text-align: ";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo ";\"><a href=\"#\" onclick=\"self.close(); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("CLOSE_WINDOW");
        echo "</a></div>
\t<br /><br />
</div>

<div id=\"page-footer\">
\t";
        // line 6
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            // line 7
            echo "\t\t";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "
\t";
        }
        // line 9
        echo "</div>

<script src=\"";
        // line 11
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 12
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script>window.jQuery || document.write(unescape('%3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\"%3E%3C/script%3E'));</script>";
        }
        // line 13
        echo "<script src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

";
        // line 15
        // line 16
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  62 => 15,  54 => 13,  46 => 12,  42 => 11,  38 => 9,  32 => 7,  30 => 6,  19 => 1,);
    }
}
