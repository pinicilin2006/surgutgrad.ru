<?php

/* @uloginteam_ulogin/event/overall_header_page_body_before.html */
class __TwigTemplate_820930c0e0630f7bdf9e5e43ffef3d8af5cb1a5dbb5593e9b8135e68133dbab9 extends Twig_Template
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
        echo "<style type=\"text/css\">
    #ulogin-message-box {
        font-size: 12px;
        background-color: #ECF1F3;
        padding: 5px 10px;
        border-radius: 7px;
        margin: 3px 0;
        display: none;
    }

    #ulogin-message-box.message_error {
        background-color: #EFC0C0;
    }

    #ulogin-message-box.message_success {
        background-color: #ECF3ED;
    }
</style>

<div id=\"ulogin-message-box\"></div>";
    }

    public function getTemplateName()
    {
        return "@uloginteam_ulogin/event/overall_header_page_body_before.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
