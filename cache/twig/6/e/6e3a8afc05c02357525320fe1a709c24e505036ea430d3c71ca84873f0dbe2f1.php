<?php

/* acp_profile.html */
class __TwigTemplate_6e3a8afc05c02357525320fe1a709c24e505036ea430d3c71ca84873f0dbe2f1 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_profile.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT"]) ? $context["S_EDIT"] : null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 13
            if ((isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null)) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"add_profile_field\" method=\"post\" action=\"";
            // line 20
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t";
            // line 22
            if ((isset($context["S_STEP_ONE"]) ? $context["S_STEP_ONE"] : null)) {
                // line 23
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label>";
                // line 27
                echo $this->env->getExtension('phpbb')->lang("FIELD_TYPE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FIELD_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><strong>";
                // line 28
                echo (isset($context["FIELD_TYPE"]) ? $context["FIELD_TYPE"] : null);
                echo "</strong></dd>
\t\t</dl>
\t\t";
                // line 30
                if ((isset($context["S_EDIT_MODE"]) ? $context["S_EDIT_MODE"] : null)) {
                    // line 31
                    echo "\t\t<dl>
\t\t\t<dt><label>";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input type=\"hidden\" name=\"field_ident\" value=\"";
                    // line 33
                    echo (isset($context["FIELD_IDENT"]) ? $context["FIELD_IDENT"] : null);
                    echo "\" /><strong>";
                    echo (isset($context["FIELD_IDENT"]) ? $context["FIELD_IDENT"] : null);
                    echo "</strong></dd>
\t\t</dl>
\t\t";
                } else {
                    // line 36
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"field_ident\">";
                    // line 37
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"field_ident\" name=\"field_ident\" value=\"";
                    // line 38
                    echo (isset($context["FIELD_IDENT"]) ? $context["FIELD_IDENT"] : null);
                    echo "\" /></dd>
\t\t</dl>
\t\t";
                }
                // line 41
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_no_view\">";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_PROFILE_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"field_no_view\" name=\"field_no_view\" value=\"0\"";
                // line 43
                if ( !(isset($context["S_FIELD_NO_VIEW"]) ? $context["S_FIELD_NO_VIEW"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"field_no_view\" value=\"1\"";
                // line 44
                if ((isset($context["S_FIELD_NO_VIEW"]) ? $context["S_FIELD_NO_VIEW"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
                // line 49
                echo $this->env->getExtension('phpbb')->lang("VISIBILITY_OPTION");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_profile\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_PROFILE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_PROFILE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_profile\" name=\"field_show_profile\" value=\"1\"";
                // line 52
                if ((isset($context["S_SHOW_PROFILE"]) ? $context["S_SHOW_PROFILE"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_reg\">";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_REGISTER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_AT_REGISTER_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_reg\" name=\"field_show_on_reg\" value=\"1\"";
                // line 56
                if ((isset($context["S_SHOW_ON_REG"]) ? $context["S_SHOW_ON_REG"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_pm\">";
                // line 59
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_PM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_PM_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_pm\" name=\"field_show_on_pm\" value=\"1\"";
                // line 60
                if ((isset($context["S_SHOW_ON_PM"]) ? $context["S_SHOW_ON_PM"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_vt\">";
                // line 63
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_VT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_VT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_vt\" name=\"field_show_on_vt\" value=\"1\"";
                // line 64
                if ((isset($context["S_SHOW_ON_VT"]) ? $context["S_SHOW_ON_VT"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_ml\">";
                // line 67
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_MEMBERLIST");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_MEMBERLIST_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_ml\" name=\"field_show_on_ml\" value=\"1\"";
                // line 68
                if ((isset($context["S_SHOW_ON_MEMBERLIST"]) ? $context["S_SHOW_ON_MEMBERLIST"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_search_on_ml\">";
                // line 71
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ON_MEMBERLIST");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ON_MEMBERLIST_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_search_on_ml\" name=\"field_search_on_ml\" value=\"1\"";
                // line 72
                if ((isset($context["S_SEARCH_ON_MEMBERLIST"]) ? $context["S_SEARCH_ON_MEMBERLIST"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_required\">";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("REQUIRED_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("REQUIRED_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_required\" name=\"field_required\" value=\"1\"";
                // line 76
                if ((isset($context["S_FIELD_REQUIRED"]) ? $context["S_FIELD_REQUIRED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_novalue\">";
                // line 79
                echo $this->env->getExtension('phpbb')->lang("SHOW_NOVALUE_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("SHOW_NOVALUE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_novalue\" name=\"field_show_novalue\" value=\"1\"";
                // line 80
                if ((isset($context["S_FIELD_SHOW_NOVALUE"]) ? $context["S_FIELD_SHOW_NOVALUE"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_hide\">";
                // line 83
                echo $this->env->getExtension('phpbb')->lang("HIDE_PROFILE_FIELD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("HIDE_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_hide\" name=\"field_hide\" value=\"1\"";
                // line 84
                if ((isset($context["S_FIELD_HIDE"]) ? $context["S_FIELD_HIDE"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t";
                // line 86
                // line 87
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_is_contact\">";
                // line 88
                echo $this->env->getExtension('phpbb')->lang("FIELD_IS_CONTACT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FIELD_IS_CONTACT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_is_contact\" name=\"field_is_contact\" value=\"1\"";
                // line 89
                if ((isset($context["S_FIELD_CONTACT"]) ? $context["S_FIELD_CONTACT"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_desc\" id=\"field_contact_desc\" value=\"";
                // line 90
                echo (isset($context["FIELD_CONTACT_DESC"]) ? $context["FIELD_CONTACT_DESC"] : null);
                echo "\" /> <label for=\"field_contact_desc\">";
                echo $this->env->getExtension('phpbb')->lang("FIELD_CONTACT_DESC");
                echo "</label></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_url\" id=\"field_contact_url\" value=\"";
                // line 91
                echo (isset($context["FIELD_CONTACT_URL"]) ? $context["FIELD_CONTACT_URL"] : null);
                echo "\" /> <label for=\"field_contact_url\">";
                echo $this->env->getExtension('phpbb')->lang("FIELD_CONTACT_URL");
                echo "</label></dd>
\t\t</dl>
\t\t</fieldset>

\t\t";
                // line 95
                if ((isset($context["S_EDIT_MODE"]) ? $context["S_EDIT_MODE"] : null)) {
                    // line 96
                    echo "\t\t\t<fieldset class=\"quick\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                    // line 97
                    echo $this->env->getExtension('phpbb')->lang("SAVE");
                    echo "\" />
\t\t\t</fieldset>
\t\t";
                }
                // line 100
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("LANG_SPECIFIC");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"lang_name\">";
                // line 104
                echo $this->env->getExtension('phpbb')->lang("USER_FIELD_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"lang_name\" name=\"lang_name\" value=\"";
                // line 105
                echo (isset($context["LANG_NAME"]) ? $context["LANG_NAME"] : null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"lang_explain\">";
                // line 108
                echo $this->env->getExtension('phpbb')->lang("FIELD_DESCRIPTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FIELD_DESCRIPTION_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><textarea id=\"lang_explain\" name=\"lang_explain\" rows=\"3\" cols=\"80\">";
                // line 109
                echo (isset($context["LANG_EXPLAIN"]) ? $context["LANG_EXPLAIN"] : null);
                echo "</textarea></dd>
\t\t</dl>
\t\t";
                // line 111
                if (((isset($context["S_TEXT"]) ? $context["S_TEXT"] : null) || (isset($context["S_STRING"]) ? $context["S_STRING"] : null))) {
                    // line 112
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_default_value\">";
                    // line 113
                    echo $this->env->getExtension('phpbb')->lang("DEFAULT_VALUE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("DEFAULT_VALUE_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t<dd>";
                    // line 114
                    if ((isset($context["S_STRING"]) ? $context["S_STRING"] : null)) {
                        echo "<input class=\"text medium\" type=\"text\" id=\"lang_default_value\" name=\"lang_default_value\" value=\"";
                        echo (isset($context["LANG_DEFAULT_VALUE"]) ? $context["LANG_DEFAULT_VALUE"] : null);
                        echo "\" />";
                    } else {
                        echo "<textarea id=\"lang_default_value\" name=\"lang_default_value\" rows=\"5\" cols=\"80\">";
                        echo (isset($context["LANG_DEFAULT_VALUE"]) ? $context["LANG_DEFAULT_VALUE"] : null);
                        echo "</textarea>";
                    }
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                // line 117
                echo "\t\t";
                if (((isset($context["S_BOOL"]) ? $context["S_BOOL"] : null) || (isset($context["S_DROPDOWN"]) ? $context["S_DROPDOWN"] : null))) {
                    // line 118
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_options\">";
                    // line 119
                    echo $this->env->getExtension('phpbb')->lang("ENTRIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t\t\t";
                    // line 120
                    if (((isset($context["S_EDIT_MODE"]) ? $context["S_EDIT_MODE"] : null) && (isset($context["S_DROPDOWN"]) ? $context["S_DROPDOWN"] : null))) {
                        // line 121
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_DROPDOWN_LANG_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 123
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("LANG_OPTIONS_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t</dt>
\t\t\t";
                    // line 126
                    if ((isset($context["S_DROPDOWN"]) ? $context["S_DROPDOWN"] : null)) {
                        // line 127
                        echo "\t\t\t\t<dd><textarea id=\"lang_options\" name=\"lang_options\" rows=\"5\" cols=\"80\">";
                        echo (isset($context["LANG_OPTIONS"]) ? $context["LANG_OPTIONS"] : null);
                        echo "</textarea></dd>
\t\t\t";
                    } else {
                        // line 129
                        echo "\t\t\t\t<dd><input class=\"medium\" id=\"lang_options\" name=\"lang_options[0]\" value=\"";
                        echo (isset($context["FIRST_LANG_OPTION"]) ? $context["FIRST_LANG_OPTION"] : null);
                        echo "\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("FIRST_OPTION");
                        echo "</dd>
\t\t\t\t<dd><input class=\"medium\" name=\"lang_options[1]\" value=\"";
                        // line 130
                        echo (isset($context["SECOND_LANG_OPTION"]) ? $context["SECOND_LANG_OPTION"] : null);
                        echo "\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("SECOND_OPTION");
                        echo "</dd>
\t\t\t";
                    }
                    // line 132
                    echo "\t\t\t</dl>
\t\t";
                }
                // line 134
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\">
\t\t\t";
                // line 137
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 138
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 139
                echo $this->env->getExtension('phpbb')->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif (            // line 142
(isset($context["S_STEP_TWO"]) ? $context["S_STEP_TWO"] : null)) {
                // line 143
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 145
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</legend>
\t\t";
                // line 146
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 147
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label";
                    // line 148
                    if ($this->getAttribute($context["option"], "ID", array())) {
                        echo " for=\"";
                        echo $this->getAttribute($context["option"], "ID", array());
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["option"], "TITLE", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    if ($this->getAttribute($context["option"], "EXPLAIN", array())) {
                        echo "<br /><span>";
                        echo $this->getAttribute($context["option"], "EXPLAIN", array());
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 149
                    echo $this->getAttribute($context["option"], "FIELD", array());
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 154
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 155
                echo $this->env->getExtension('phpbb')->lang("PROFILE_BASIC_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 158
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo ";\">
\t\t\t";
                // line 159
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 160
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 161
                echo $this->env->getExtension('phpbb')->lang("NEXT_STEP");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif (            // line 164
(isset($context["S_STEP_THREE"]) ? $context["S_STEP_THREE"] : null)) {
                // line 165
                echo "
\t\t";
                // line 166
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                    // line 167
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 168
                    echo $this->getAttribute($context["options"], "LANGUAGE", array());
                    echo "</legend>
\t\t\t";
                    // line 169
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["options"], "field", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 170
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                        // line 171
                        echo $this->getAttribute($context["field"], "L_TITLE", array());
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label>";
                        if ($this->getAttribute($context["field"], "L_EXPLAIN", array())) {
                            echo "<br /><span>";
                            echo $this->getAttribute($context["field"], "L_EXPLAIN", array());
                            echo "</span>";
                        }
                        echo "</dt>
\t\t\t\t\t";
                        // line 172
                        echo $this->getAttribute($context["field"], "FIELD", array());
                        echo "
\t\t\t\t</dl>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "\t\t\t</fieldset>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "
\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 178
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 179
                echo $this->env->getExtension('phpbb')->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 182
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo ";\">
\t\t\t";
                // line 183
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                // line 184
                echo $this->env->getExtension('phpbb')->lang("SAVE");
                echo "\" />
\t\t\t";
                // line 185
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</fieldset>

\t";
            }
            // line 189
            echo "
\t</form>

";
        } else {
            // line 193
            echo "
\t<h1>";
            // line 194
            echo $this->env->getExtension('phpbb')->lang("ACP_CUSTOM_PROFILE_FIELDS");
            echo "</h1>

\t";
            // line 196
            if ((isset($context["S_NEED_EDIT"]) ? $context["S_NEED_EDIT"] : null)) {
                // line 197
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 198
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 199
                echo $this->env->getExtension('phpbb')->lang("CUSTOM_FIELDS_NOT_TRANSLATED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 202
            echo "
\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 206
            echo $this->env->getExtension('phpbb')->lang("FIELD_IDENT");
            echo "</th>
\t\t<th>";
            // line 207
            echo $this->env->getExtension('phpbb')->lang("FIELD_TYPE");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 208
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 212
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
                // line 213
                echo "\t<tr>
\t\t<td>";
                // line 214
                echo $this->getAttribute($context["fields"], "FIELD_IDENT", array());
                echo "</td>
\t\t<td>";
                // line 215
                echo $this->getAttribute($context["fields"], "FIELD_TYPE", array());
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 216
                echo $this->getAttribute($context["fields"], "U_ACTIVATE_DEACTIVATE", array());
                echo "\" data-ajax=\"activate_deactivate\">";
                echo $this->getAttribute($context["fields"], "L_ACTIVATE_DEACTIVATE", array());
                echo "</a>";
                if ($this->getAttribute($context["fields"], "S_NEED_EDIT", array())) {
                    echo " | <a href=\"";
                    echo $this->getAttribute($context["fields"], "U_TRANSLATE", array());
                    echo "\" style=\"color: red;\">";
                    echo $this->env->getExtension('phpbb')->lang("TRANSLATE");
                    echo "</a>";
                }
                echo "</td>

\t\t<td class=\"actions\" style=\"width: 80px;\">
\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 219
                echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                echo "</span>
\t\t\t<span class=\"up\"><a href=\"";
                // line 220
                echo $this->getAttribute($context["fields"], "U_MOVE_UP", array());
                echo "\" data-ajax=\"row_up\">";
                echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                echo "</a></span>
\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 221
                echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                echo "</span>
\t\t\t<span class=\"down\"><a href=\"";
                // line 222
                echo $this->getAttribute($context["fields"], "U_MOVE_DOWN", array());
                echo "\" data-ajax=\"row_down\">";
                echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                echo "</a></span>
\t\t\t";
                // line 223
                if ( !$this->getAttribute($context["fields"], "S_NEED_EDIT", array())) {
                    // line 224
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["fields"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a>
\t\t\t";
                } else {
                    // line 226
                    echo "\t\t\t\t";
                    echo (isset($context["ICON_EDIT_DISABLED"]) ? $context["ICON_EDIT_DISABLED"] : null);
                    echo "
\t\t\t";
                }
                // line 228
                echo "\t\t\t<a href=\"";
                echo $this->getAttribute($context["fields"], "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a>
\t\t</td>

\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 233
                echo "\t<tr class=\"row3\">
\t\t<td colspan=\"4\">";
                // line 234
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "\t</tbody>
\t</table>

\t<form id=\"profile_fields\" method=\"post\" action=\"";
            // line 240
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<input class=\"text small\" type=\"text\" name=\"field_ident\" /> <select name=\"field_type\">";
            // line 243
            echo (isset($context["S_TYPE_OPTIONS"]) ? $context["S_TYPE_OPTIONS"] : null);
            echo "</select>
\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
            // line 244
            echo $this->env->getExtension('phpbb')->lang("CREATE_NEW_FIELD");
            echo "\" />
\t\t<input type=\"hidden\" name=\"create\" value=\"1\" />
\t\t";
            // line 246
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 251
        echo "
";
        // line 252
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_profile.html", 252)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  816 => 252,  813 => 251,  805 => 246,  800 => 244,  796 => 243,  790 => 240,  785 => 237,  776 => 234,  773 => 233,  760 => 228,  754 => 226,  746 => 224,  744 => 223,  738 => 222,  734 => 221,  728 => 220,  724 => 219,  708 => 216,  704 => 215,  700 => 214,  697 => 213,  692 => 212,  685 => 208,  681 => 207,  677 => 206,  671 => 202,  665 => 199,  661 => 198,  658 => 197,  656 => 196,  651 => 194,  648 => 193,  642 => 189,  635 => 185,  631 => 184,  627 => 183,  623 => 182,  617 => 179,  613 => 178,  610 => 177,  603 => 175,  594 => 172,  583 => 171,  580 => 170,  576 => 169,  572 => 168,  569 => 167,  565 => 166,  562 => 165,  560 => 164,  554 => 161,  550 => 160,  546 => 159,  542 => 158,  536 => 155,  532 => 154,  528 => 152,  519 => 149,  502 => 148,  499 => 147,  495 => 146,  491 => 145,  487 => 143,  485 => 142,  479 => 139,  475 => 138,  471 => 137,  466 => 134,  462 => 132,  455 => 130,  448 => 129,  442 => 127,  440 => 126,  437 => 125,  431 => 123,  425 => 121,  423 => 120,  418 => 119,  415 => 118,  412 => 117,  398 => 114,  391 => 113,  388 => 112,  386 => 111,  381 => 109,  374 => 108,  368 => 105,  363 => 104,  358 => 102,  354 => 100,  348 => 97,  345 => 96,  343 => 95,  334 => 91,  328 => 90,  322 => 89,  315 => 88,  312 => 87,  311 => 86,  304 => 84,  297 => 83,  289 => 80,  282 => 79,  274 => 76,  267 => 75,  259 => 72,  252 => 71,  244 => 68,  237 => 67,  229 => 64,  222 => 63,  214 => 60,  207 => 59,  199 => 56,  192 => 55,  184 => 52,  177 => 51,  172 => 49,  160 => 44,  152 => 43,  145 => 42,  142 => 41,  136 => 38,  129 => 37,  126 => 36,  118 => 33,  111 => 32,  108 => 31,  106 => 30,  101 => 28,  94 => 27,  89 => 25,  85 => 23,  83 => 22,  78 => 20,  75 => 19,  69 => 16,  65 => 15,  62 => 14,  60 => 13,  55 => 11,  50 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
