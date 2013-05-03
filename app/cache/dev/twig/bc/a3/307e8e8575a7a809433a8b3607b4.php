<?php

/* LoginLoginBundle:Default:signup.html.twig */
class __TwigTemplate_bca3307e8e8575a7a809433a8b3607b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascript' => array($this, 'block_javascript'),
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
<div class=\"well\">    
      <form id=\"signup\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_signup"), "html", null, true);
        echo "\">
\t\t<legend>Sign Up</legend>
                
\t\t<div class=\"control-group\">
\t        <label class=\"control-label\">User Name</label>
\t\t\t<div class=\"controls\">
\t\t\t    <div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"input-xlarge\" id=\"Uname\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" name=\"username\" placeholder=\"UserName\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
                
                
\t\t<div class=\"control-group\">
\t        <label class=\"control-label\">First Name</label>
\t\t\t<div class=\"controls\">
\t\t\t    <div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"input-xlarge\" id=\"fname\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "html", null, true);
        echo "\" name=\"firstname\" placeholder=\"First Name\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group \">
\t        <label class=\"control-label\">Last Name</label>
\t\t\t<div class=\"controls\">
\t\t\t    <div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"input-xlarge\" id=\"lname\" name=\"lname\" placeholder=\"Last Name\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t        <label class=\"control-label\">Email</label>
\t\t\t<div class=\"controls\">
\t\t\t    <div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-envelope\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"input-xlarge\" id=\"email\" name=\"email\" placeholder=\"Email\">
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"control-group\">
\t        <label class=\"control-label\">Gender</label>
\t\t\t<div class=\"controls\">
\t\t\t    
\t\t\t\t\t<p><div  class=\"btn-group\" data-toggle=\"buttons-radio\">  
                    <button type=\"button\" required=\"required\" name=\"gender\" id=\"gender\" class=\"btn btn-info\">Male</button>  
                    <button type=\"button\" required=\"required\" name=\"gender\" id=\"gender\" class=\"btn btn-info\">Female</button>  
                    
                  </div></p>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t        <label class=\"control-label\">Password</label>
\t\t\t<div class=\"controls\">
\t\t\t    <div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-lock\"></i></span>
\t\t\t\t\t<input type=\"Password\" id=\"passwd\" class=\"input-xlarge\"  name=\"password\" placeholder=\"Password\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t        <label class=\"control-label\">Confirm Password</label>
\t\t\t<div class=\"controls\">
\t\t\t    <div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-lock\"></i></span>
\t\t\t\t\t<input type=\"Password\" id=\"conpasswd\" class=\"input-xlarge\" name=\"conpasswd\" placeholder=\"Re-enter Password\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"control-group\">
\t\t<label class=\"control-label\"></label>
\t      <div class=\"controls\">
\t       <button type=\"submit\" class=\"btn btn-success\" >Create My Account</button>
\t       
\t      </div>
\t
\t</div>
\t
\t  </form>

   </div>
    
    ";
        // line 130
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != "")) {
            echo " 
    <div class=\"alert-info fade in\">
        <strong>";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " is used, please use a differnt username</strong>
    </div>
    ";
        }
        // line 135
        echo "    


";
    }

    // line 143
    public function block_javascript($context, array $blocks = array())
    {
        // line 144
        echo "    
    
\t<script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t  <script type=\"text/javascript\">
\t  \$(document).ready(function(){
\t\t\t
\t\t\t\$(\"#signup\").validate({
\t\t\t\trules:{
\t\t\t\t\tgender:\"required\",
\t\t\t\t\t//fname:\"required\",
\t\t\t\t\t//lname:\"required\",
\t\t\t\t\t//email:{\t\t\t\t\trequired:true, \t\t\t\t\t\t\temail: true \t\t\t\t\t\t},
\t\t\t\t\tpasswd:{
\t\t\t\t\t\trequired:true
\t\t\t\t\t\t//,minlength: 8
\t\t\t\t\t},
\t\t\t\t\t//conpasswd:{ \t\t\t\t\t\trequired:true, \t\t\t\t\t\tequalTo: \"#passwd\" \t\t\t\t\t},
\t\t\t\t\t
\t\t\t\t},
\t\t\t\t
\t\t\t\terrorClass: \"help-inline\"
\t\t\t\t
\t\t\t});
\t\t});
\t  </script>
          
  ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 146,  194 => 144,  191 => 143,  184 => 135,  178 => 132,  173 => 130,  104 => 64,  90 => 53,  79 => 45,  75 => 43,  72 => 42,  33 => 5,  30 => 4,);
    }
}
