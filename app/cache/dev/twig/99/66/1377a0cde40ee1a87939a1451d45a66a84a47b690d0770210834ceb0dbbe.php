<?php

/* MywebIndexBundle:Index:index.html.twig */
class __TwigTemplate_99661377a0cde40ee1a87939a1451d45a66a84a47b690d0770210834ceb0dbbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MywebIndexBundle::base.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'script' => array($this, 'block_script'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MywebIndexBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["pageTitle"] = "首页";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "    <!--[if lt IE 9]>
    <script src=\"js/modernizr.custom.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <!-- slider-holder -->
    <div class=\"slider-holder\">
        <div class=\"shell\">
            <span class=\"slider-shadow\"></span>
            <div class=\"slider flexslider\">
                <ul class=\"slides\">
                    <li>
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/slide-img.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"slide-cnt\">
                            <h2>Innovative Design Solutions Ranging</h2>
                            <p>Lorem ipsum dolor sit amet, con-<br />sectetur adipiscing elit.
                                Praesent non tortor quis tellus euismod sodalestis elit lorem, 
                                vehicula sit amet dictum nec, congue venenatis quam.
                                Cras fermentum scelerisque ma .. <a href=\"#\">Read More</a></p>
                            <a href=\"#\" class=\"slider-btn\">Explore Project</a>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/slide-img.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"slide-cnt\">
                            <h2>Innovative Design Solutions Ranging</h2>
                            <p>Lorem ipsum dolor sit amet, con-<br />sectetur adipiscing elit.
                                Praesent non tortor quis tellus euismod sodalestis elit lorem, 
                                vehicula sit amet dictum nec, congue venenatis quam.
                                Cras fermentum scelerisque ma .. <a href=\"#\">Read More</a></p>
                            <a href=\"#\" class=\"slider-btn\">Explore Project</a>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/slide-img.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"slide-cnt\">
                            <h2>Innovative Design Solutions Ranging</h2>
                            <p>Lorem ipsum dolor sit amet, con-<br />sectetur adipiscing elit.
                                Praesent non tortor quis tellus euismod sodalestis elit lorem,
                                vehicula sit amet dictum nec, congue venenatis quam.
                                Cras fermentum scelerisque ma .. <a href=\"#\">Read More</a></p>
                            <a href=\"#\" class=\"slider-btn\">Explore Project</a>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/slide-img.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"slide-cnt\">
                            <h2>Innovative Design Solutions Ranging</h2>
                            <p>Lorem ipsum dolor sit amet, con-<br />sectetur adipiscing elit.
                                Praesent non tortor quis tellus euismod sodalestis elit lorem,
                                vehicula sit amet dictum nec, congue venenatis quam. 
                                Cras fermentum scelerisque ma .. <a href=\"#\">Read More</a></p>
                            <a href=\"#\" class=\"slider-btn\">Explore Project</a>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/slide-img.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"slide-cnt\">
                            <h2>Innovative Design Solutions Ranging</h2>
                            <p>Lorem ipsum dolor sit amet, con-<br />sectetur adipiscing elit.
                                Praesent non tortor quis tellus euismod sodalestis elit lorem,
                                vehicula sit amet dictum nec, congue venenatis quam.
                                Cras fermentum scelerisque ma .. <a href=\"#\">Read More</a></p>
                            <a href=\"#\" class=\"slider-btn\">Explore Project</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end of slider-holder -->
    <!-- services -->
    <section class=\"services\">
        <div class=\"shell\">
            <div class=\"boxes\">
                <h2>我们做什么?</h2>
                <a href=\"#\" class=\"all-services\">+ Explore All Services</a>
                <div class=\"cl\">&nbsp;</div>
                <div class=\"box\">
                    <a href=\"#\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/print-design.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <h3>PRINT DESIGN</h3>
                    </a>
                </div>
                <div class=\"box\">
                    <a href=\"#\">
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/graphic-design.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <h3>GRAPHIC DESIGN</h3>
                    </a>
                </div>
                <div class=\"box\">
                    <a href=\"#\">
                        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/logo-design.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <h3>LOGO DESIGN</h3>
                    </a>
                </div>
                <div class=\"box\">
                    <a href=\"#\">
                        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/vector-characters.png"), "html", null, true);
        echo "\" alt=\"\" />
                        <h3>VECTOR CHARACTERS</h3>
                    </a>
                </div>
                <div class=\"cl\">&nbsp;</div>
            </div>
        </div>
    </section>
    <!-- end of services -->
    <!-- main -->
    <div class=\"main\">
        <div class=\"shell\">
            <section>
                <!-- content -->
                <div class=\"content\">
                    <h2>More About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Praesent non tortor quis tellus euismod sodales. 
                        Donec tincidunt auctor convallis. 
                        Nunc tincidunt nibh nec odio venenatis et condimentum nisl dapibus.
                        Integer ipsum elit, commodo ac congue quis, varius at eros. 
                        Praesent tempus vulputate tortor eu feugiat. Maecenas bibendum suscipit molestie.
                        Phasellus erat arcu, fringilla ac suscipit nec, lobortis at mi.</p>

                    <p>Etiam interdum mauris quis nunc faucibus porttitor.
                        Quisque tempor posuere pharetra. Sed fringilla placerat nulla.
                        Etiam tincidunt ante eget arcu sodales scelerisque. Ut elit lorem, 
                        vehicula sit amet dictum nec, congue venenatis quam. Cras fermentum scelerisque ma</p>
                </div>
                <!-- end of content -->
                <!-- aside -->
                <aside>
                    <div class=\"widget\">
                        <h2>Latest Projects</h2>
                        <div class=\"img-holder\">
                            <a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/projects-img1.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"img-holder\">
                            <a href=\"#\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/projects-img2.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"img-holder\">
                            <a href=\"#\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/projects-img3.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"cl\">&nbsp;</div>
                    </div>
                    <div class=\"widget\">
                        <h2>Our Clients</h2>
                        <div class=\"img-holder\">
                            <a href=\"#\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/clients-img1.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"img-holder\">
                            <a href=\"#\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/clients-img2.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"img-holder\">
                            <a href=\"#\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/clients-img3.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"cl\">&nbsp;</div>
                    </div>
                </aside>
                <!-- end of aside -->
                <div class=\"cl\">&nbsp;</div>
            </section>
        </div>
    </div>
    <!-- end of main -->
    <div id=\"footer-push\"></div>
";
    }

    public function getTemplateName()
    {
        return "MywebIndexBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 161,  248 => 158,  242 => 155,  232 => 148,  226 => 145,  220 => 142,  182 => 107,  173 => 101,  164 => 95,  155 => 89,  128 => 65,  114 => 54,  100 => 43,  86 => 32,  72 => 21,  63 => 14,  60 => 13,  54 => 11,  50 => 10,  45 => 7,  42 => 6,  35 => 4,  32 => 3,  27 => 2,);
    }
}
