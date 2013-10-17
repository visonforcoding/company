<?php

/* MywebIndexBundle::base.html.twig */
class __TwigTemplate_cce8bd92d720785e977f64c2ebf3c1190ccae9bd4c1240a444966ddc6ace53c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'script' => array($this, 'block_script'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!Doctype html>
<html>
<head>
<meta charset=\"utf-8\"/>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
        echo "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/favicon.ico"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 12
        echo "</head>
<body>
<div id=\"wrapper\">
    <!--header-->
    <header>
        <div class=\"shell\">
            <h1 id=\"logo\"><a href=\"#\">Core</a></h1>
            <div class=\"contact\">
                <p class=\"ico phone-ico\"><span></span>+132 456 789</p>
                <p class=\"ico mail-ico\"><span></span><a href=\"#\">sales@core.com</a></p>
            </div>
        </div>
    </header>
    <!--end header-->
    <!--nav-->
    <nav id=\"navigation\">
        <div class=\"shell\">
            <ul>
                <li class=\"active\"><a href=\"#\"><span></span>主页</a></li>
                <li><a href=\"#\"><span class=\"bottom-arr\"></span>关于我们</a></li>
                <li><a href=\"#\"><span class=\"bottom-arr\"></span>服务</a></li>
                <li><a href=\"#\"><span class=\"bottom-arr\"></span>产品</a></li>
                <li><a href=\"#\"><span class=\"bottom-arr\"></span>企业文化</a></li>
                <li><a href=\"#\"><span class=\"bottom-arr\"></span>联系我们</a></li>
            </ul>
        </div>
    </nav>
    <!--end nav-->
    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "</div>
<!-- end of wrapper -->
<div id=\"footer\">
    <div class=\"shell\">
        <nav class=\"footer-nav\">
            <a href=\"#\" class=\"active\">HOME</a>
            <a href=\"#\">ABOUT</a>
            <a href=\"#\">SERVICES</a>
            <a href=\"#\">PORTFOLIO</a>
            <a href=\"#\">BLOG</a>
            <a href=\"#\">CONTACT US</a>
        </nav>
        <p class=\"copy\">Copyright &copy; 2012 Design by <a href=\"http://chocotemplates.com\" target=\"_blank\">www.ChocoTemplates.com</a></p>
        <div class=\"cl\">&nbsp;</div>
    </div>
</div>
</body>
</html>";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
    }

    // line 11
    public function block_script($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MywebIndexBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  116 => 40,  111 => 11,  106 => 10,  85 => 42,  83 => 40,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  28 => 5,  22 => 1,  254 => 161,  248 => 158,  242 => 155,  232 => 148,  226 => 145,  220 => 142,  182 => 107,  173 => 101,  164 => 95,  155 => 89,  128 => 65,  114 => 54,  100 => 43,  86 => 32,  72 => 21,  63 => 14,  60 => 13,  54 => 11,  50 => 11,  45 => 7,  42 => 6,  35 => 4,  32 => 6,  27 => 2,);
    }
}
