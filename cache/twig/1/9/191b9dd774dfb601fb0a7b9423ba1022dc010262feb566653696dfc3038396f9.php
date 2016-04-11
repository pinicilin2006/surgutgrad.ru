<?php

/* user_panel.html */
class __TwigTemplate_191b9dd774dfb601fb0a7b9423ba1022dc010262feb566653696dfc3038396f9 extends Twig_Template
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
        $asset_file = "//ulogin.ru/css/providers.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('13');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 2
        $asset_file = "../theme/ulogin.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('13');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 3
        echo "
";
        // line 4
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "user_panel.html", 4)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 5
        echo "
    <h2>";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

    <div class=\"panel\">
        <div class=\"inner\">
            <fieldset>
                <dl>
                    <dt>
                        <label>";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("ADD_ACCOUNT");
        echo "</label><br>
                        <span>";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("ADD_ACCOUNT_EXPLAIN");
        echo "</span>
                    </dt>
                    <dd>
                        ";
        // line 17
        $location = "ulogin_panel2.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ulogin_panel2.html", "user_panel.html", 17)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 18
        echo "                    </dd>
                </dl>

                <dl>
                    <dt>
                        <label>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("DELETE_ACCOUNT");
        echo "</label><br>
                        <span>";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("DELETE_ACCOUNT_EXPLAIN");
        echo "</span>
                    </dt>
                    <dd>
                        <div class=\"ulogin_accounts can_delete\">
                            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "networks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["networks"]) {
            // line 29
            echo "                                <div data-ulogin-network='";
            echo $this->getAttribute($context["networks"], "NETWORK", array());
            echo "'
                                     class=\"ulogin_provider big_provider ";
            // line 30
            echo $this->getAttribute($context["networks"], "NETWORK", array());
            echo "_big\"
                                     onclick=\"uloginDeleteAccount('";
            // line 31
            echo $this->getAttribute($context["networks"], "NETWORK", array());
            echo "')\"></div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['networks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </div><div style=\"clear:both\"></div>
                    </dd>
                </dl>
            </fieldset>

        </div>
    </div>


";
        // line 42
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "user_panel.html", 42)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "user_panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  136 => 33,  128 => 31,  124 => 30,  119 => 29,  115 => 28,  108 => 24,  104 => 23,  97 => 18,  85 => 17,  79 => 14,  75 => 13,  65 => 6,  62 => 5,  50 => 4,  47 => 3,  33 => 2,  19 => 1,);
    }
}
