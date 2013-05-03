<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_0d9bb3b49182e848bdbe8557c601654e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
    <style type=\"text/css\">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type=\"text\"],
      .form-signin input[type=\"password\"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

";
    }

    // line 42
    public function block_container($context, array $blocks = array())
    {
        // line 43
        echo "
    <div class=\"container\">

        <form class=\"form-signin\" method=\"POST\" action=";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_homepage"), "html", null, true);
        echo ">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <input type=\"text\" class=\"input-block-level\"    name=\"username\" placeholder=\"Username\">
            <input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\">
            <label class=\"checkbox\">
                <input type=\"checkbox\" value=\"remember-me\"> Remember me
            </label>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_signup"), "html", null, true);
        echo "\">Sign up</a> 
        </form>

    </div> <!-- /container -->
    
    ";
        // line 59
        if (array_key_exists("name", $context)) {
            // line 60
            echo "        <div class=\"alert-info fade in\">
            <strong>hi ";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </strong>
        </div>
    ";
        }
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 64,  103 => 61,  100 => 60,  98 => 59,  90 => 54,  79 => 46,  74 => 43,  71 => 42,  32 => 5,  29 => 4,);
    }
}
