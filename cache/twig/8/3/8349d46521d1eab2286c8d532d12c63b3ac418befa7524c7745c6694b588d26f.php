<?php

/* mcp_forum.html */
class __TwigTemplate_8349d46521d1eab2286c8d532d12c63b3ac418befa7524c7745c6694b588d26f extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_forum.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $value = "forum-selection2";
        $context['definition']->set('CUSTOM_FIELDSET_CLASS', $value);
        // line 4
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "mcp_forum.html", 4)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 5
        echo "
<h2><a href=\"";
        // line 6
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a></h2>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 8
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar top\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 15
        echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
        echo "
\t\t\t";
        // line 16
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 17
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 17)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 18
            echo "\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t &bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t</div>

\t";
        // line 24
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
            // line 25
            echo "\t\t<ul class=\"topiclist";
            if ((isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                echo " missing-column";
            }
            echo "\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("TOPICS");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t\t";
            // line 31
            if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                echo "<dd class=\"mark\">";
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>";
            }
            // line 32
            echo "\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist";
            // line 35
            if ((isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                echo " missing-column";
            }
            echo "\">

\t\t";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 38
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 39
                echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", array());
                echo "\">
\t\t\t\t<dt ";
                // line 40
                if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array())) {
                    echo "style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                    echo ");\"";
                }
                echo ">
\t\t\t\t\t";
                // line 41
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 42
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t";
                // line 43
                // line 44
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_SELECT_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_SELECT_TOPIC", array());
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb')->lang("SELECT_MERGE");
                    echo " ]</a>&nbsp;&nbsp; ";
                }
                // line 45
                echo "\t\t\t\t\t";
                // line 46
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a>
\t\t\t\t\t";
                // line 47
                // line 48
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "UNAPPROVED_IMG", array());
                    echo "</a> ";
                }
                // line 49
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_DELETED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "DELETED_IMG", array());
                    echo "</a> ";
                }
                // line 50
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                    echo "\">";
                    echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                    echo "</a>";
                }
                // line 51
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array()) && (isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null))) {
                    echo "&nbsp;<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_DELETE_TOPIC", array());
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_SHADOW_TOPIC");
                    echo " ]</a>";
                }
                // line 52
                echo "\t\t\t\t\t<br />

\t\t\t\t\t<div class=\"responsive-show\">
\t\t\t\t\t\t";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "<br />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"responsive-show left-box\">";
                // line 57
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "</strong></span>

\t\t\t\t\t";
                // line 59
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 60
                    echo "\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                    // line 62
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 63
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 64
                            echo "\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 65
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 66
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 67
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t";
                        }
                        // line 69
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 73
                echo "
\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 77
                // line 78
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
                // line 80
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo " <dfn>";
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 81
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo "<br />";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</span>
\t\t\t\t</dd>
\t\t\t\t";
                // line 83
                if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                    // line 84
                    echo "\t\t\t\t<dd class=\"mark\">
\t\t\t\t\t";
                    // line 85
                    if ( !$this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array())) {
                        echo "<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_CHECKED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "&nbsp;";
                    }
                    // line 86
                    echo "\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 88
                echo "\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t</ul>
\t";
        } else {
            // line 93
            echo "\t\t<ul class=\"topiclist\">
\t\t\t<li><p class=\"notopics\">";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
            echo "</p></li>
\t\t</ul>
\t";
        }
        // line 97
        echo "
\t<fieldset class=\"display-options\">
\t\t<label>";
        // line 99
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_TOPICS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "</label>
\t\t<label>";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo " ";
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</label>
\t\t<label>";
        // line 101
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"button2\" />
\t</fieldset>

\t<hr />

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 109
        echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
        echo "
\t\t\t";
        // line 110
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 111
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 111)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 112
            echo "\t\t\t";
        } else {
            // line 113
            echo "\t\t\t\t &bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 115
        echo "\t\t</div>
\t</div>

\t</div>
</div>

<fieldset class=\"display-actions\">
\t";
        // line 122
        if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
            // line 123
            echo "\t<select name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("SELECT_ACTION");
            echo "</option>
\t\t";
            // line 125
            if ((isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null)) {
                echo "<option value=\"delete_topic\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</option>";
            }
            // line 126
            echo "\t\t";
            if ((isset($context["S_CAN_RESTORE"]) ? $context["S_CAN_RESTORE"] : null)) {
                echo "<option value=\"restore_topic\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "</option>";
            }
            // line 127
            echo "\t\t";
            if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
                echo "<option value=\"merge_topics\">";
                echo $this->env->getExtension('phpbb')->lang("MERGE");
                echo "</option>";
            }
            // line 128
            echo "\t\t";
            if ((isset($context["S_CAN_MOVE"]) ? $context["S_CAN_MOVE"] : null)) {
                echo "<option value=\"move\">";
                echo $this->env->getExtension('phpbb')->lang("MOVE");
                echo "</option>";
            }
            // line 129
            echo "\t\t";
            if ((isset($context["S_CAN_FORK"]) ? $context["S_CAN_FORK"] : null)) {
                echo "<option value=\"fork\">";
                echo $this->env->getExtension('phpbb')->lang("FORK");
                echo "</option>";
            }
            // line 130
            echo "\t\t";
            if ((isset($context["S_CAN_LOCK"]) ? $context["S_CAN_LOCK"] : null)) {
                echo "<option value=\"lock\">";
                echo $this->env->getExtension('phpbb')->lang("LOCK");
                echo "</option><option value=\"unlock\">";
                echo $this->env->getExtension('phpbb')->lang("UNLOCK");
                echo "</option>";
            }
            // line 131
            echo "\t\t";
            if ((isset($context["S_CAN_SYNC"]) ? $context["S_CAN_SYNC"] : null)) {
                echo "<option value=\"resync\">";
                echo $this->env->getExtension('phpbb')->lang("RESYNC");
                echo "</option>";
            }
            // line 132
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_NORMAL"]) ? $context["S_CAN_MAKE_NORMAL"] : null)) {
                echo "<option value=\"make_normal\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_NORMAL");
                echo "</option>";
            }
            // line 133
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_STICKY"]) ? $context["S_CAN_MAKE_STICKY"] : null)) {
                echo "<option value=\"make_sticky\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_STICKY");
                echo "</option>";
            }
            // line 134
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_ANNOUNCE"]) ? $context["S_CAN_MAKE_ANNOUNCE"] : null)) {
                // line 135
                echo "\t\t\t<option value=\"make_announce\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_ANNOUNCE");
                echo "</option>
\t\t\t<option value=\"make_global\">";
                // line 136
                echo $this->env->getExtension('phpbb')->lang("MAKE_GLOBAL");
                echo "</option>
\t\t";
            }
            // line 138
            echo "\t</select>
\t<input class=\"button2 default-submit-action\" type=\"submit\" value=\"";
            // line 139
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t";
        }
        // line 142
        echo "\t";
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 146
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_forum.html", 146)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 146,  558 => 142,  551 => 140,  547 => 139,  544 => 138,  539 => 136,  534 => 135,  531 => 134,  524 => 133,  517 => 132,  510 => 131,  501 => 130,  494 => 129,  487 => 128,  480 => 127,  473 => 126,  467 => 125,  463 => 124,  460 => 123,  458 => 122,  449 => 115,  443 => 113,  440 => 112,  427 => 111,  425 => 110,  421 => 109,  411 => 102,  407 => 101,  401 => 100,  394 => 99,  390 => 97,  384 => 94,  381 => 93,  377 => 91,  369 => 88,  365 => 86,  353 => 85,  350 => 84,  348 => 83,  337 => 81,  331 => 80,  327 => 78,  326 => 77,  317 => 75,  313 => 73,  308 => 70,  302 => 69,  292 => 67,  290 => 66,  284 => 65,  277 => 64,  274 => 63,  270 => 62,  266 => 60,  264 => 59,  256 => 57,  245 => 55,  240 => 52,  231 => 51,  222 => 50,  213 => 49,  204 => 48,  203 => 47,  196 => 46,  194 => 45,  185 => 44,  184 => 43,  181 => 42,  175 => 41,  166 => 40,  162 => 39,  150 => 38,  146 => 37,  139 => 35,  134 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  107 => 25,  105 => 24,  100 => 21,  94 => 19,  91 => 18,  78 => 17,  76 => 16,  72 => 15,  62 => 8,  52 => 6,  49 => 5,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
