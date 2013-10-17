<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1c9e8414a41194baf913d10a49b704adcae78c5ce78f74e606ffc9e640d514b1 extends Twig_Template
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
        echo " <style type=\"text/css\">
  body{
    background:url(\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mywebadmin/images/bg.jpg"), "html", null, true);
        echo "\") repeat scroll;
    }
  #error-box{
  position:absolute;
  top:50px;
  left:300px;
  min-width:800px;
      }
  </style>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "

";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "  <div id=\"error-box\" class=\"alert alert-danger\">
 <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
   ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
   </div>
";
        }
        // line 27
        echo "<div class=\"form-bg\">
<form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <h2>后台登录</h2>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <label for=\"username\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  99 => 36,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  76 => 28,  73 => 27,  67 => 24,  63 => 22,  61 => 21,  57 => 19,  54 => 17,  40 => 7,  36 => 5,  33 => 4,  28 => 3,  26 => 2,);
    }
}
