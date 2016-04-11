<?php

/* user_welcome.txt */
class __TwigTemplate_d917928b75826c93260d5d3ac2d77e86d780b16c531c46d18cb650d3808031ff extends Twig_Template
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
        echo "» — ";
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Пожалуйста, сохраните это сообщение. Параметры вашего аккаунта таковы:

----------------------------
Имя пользователя: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Пароль: ";
        // line 10
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "

URL форума: ";
        // line 12
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Если Вы забудете свой пароль, то Вы сможете восстановить его, используя e-mail, указанный при регистрации.

Спасибо за регистрацию!

";
        // line 19
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
        return array (  55 => 19,  45 => 12,  40 => 10,  35 => 8,  27 => 3,  19 => 1,);
    }
}
