<?php

/* user_welcome.txt */
class __TwigTemplate_4d254dfe418aff9a89ebaba25a14634eab8767ec759f578ac6ca2b93bf2bf75d extends Twig_Template
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
        echo "Subject: Добро пожаловать на форум «";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "»

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Пожалуйста, сохраните это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Адрес форума: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
