<?php

/* MywebAdminBundle:Index:login.html.twig */
class __TwigTemplate_9a72aadddb03d85e420c9cd341cf5ed9b199f750568b8879d3378cb548ae79de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MywebAdminBundle::base.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MywebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["pageTitle"] = "管理员登录";
        // line 3
        $context["bodyClass"] = "adminLogin";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo " <style>
  body{
    background:url(\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/images/bg.jpg"), "html", null, true);
        echo "\") repeat scroll;
  
    }
  </style>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"form-bg\">
\t<form>
        <h2>后台登录</h2>
        <p><input type=\"text\" placeholder=\"Username\"></p>
        <p><input type=\"password\" placeholder=\"Password\"></p>
        <label for=\"remember\">
          <input type=\"checkbox\" id=\"remember\" value=\"remember\" />
          <span>记住我</span>
        </label>
\t   <p>  <button class=\"btn pull-right\" type=\"submit\">登录</button></p>
\t  <form>
            <div class=\"clear\"></div>
     </div>
";
    }

    public function getTemplateName()
    {
        return "MywebAdminBundle:Index:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  49 => 12,  40 => 7,  36 => 5,  33 => 4,  28 => 3,  26 => 2,);
    }
}
