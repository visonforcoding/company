<?php

/* MywebAdminBundle::base.html.twig */
class __TwigTemplate_dacdabd50e80e36190564f85b06c24865bd54038fbfd345e3fa024fa00e421da extends Twig_Template
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
    <meta chsarset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
        echo "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/css/images/favicon.ico"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/js/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/css/style.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/js/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 15
        echo "</head>
<body class=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
        echo "\">";
        $this->displayBlock('body', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MywebAdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  78 => 14,  65 => 16,  62 => 15,  59 => 14,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  29 => 6,  22 => 1,  103 => 37,  99 => 36,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  76 => 28,  73 => 13,  67 => 24,  63 => 22,  61 => 21,  57 => 13,  54 => 17,  40 => 7,  36 => 5,  33 => 7,  28 => 3,  26 => 2,);
    }
}
