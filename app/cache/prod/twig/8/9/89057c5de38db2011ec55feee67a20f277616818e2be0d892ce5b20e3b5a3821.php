<?php

/* base.html.twig */
class __TwigTemplate_89057c5de38db2011ec55feee67a20f277616818e2be0d892ce5b20e3b5a3821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Můj super web</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li ";
        // line 26
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) ? ("class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Úvod<span class=\"sr-only\">(current)</span></a></li>
                        <li ";
        // line 27
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "workshops")) ? ("class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("workshops");
        echo "\">Nabídka kurzů</a></li>
                        ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "                            <li ";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin")) ? ("class=\"active\"") : (""));
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">Administrátorská sekce</a></li>
                        ";
        }
        // line 31
        echo "                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 33
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 34
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Odhlásit se</a></li>
                        ";
        } else {
            // line 36
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_route");
            echo "\">Přihlásit se</a></li>
                        ";
        }
        // line 38
        echo "                    </ul>
                </div>
            </div>
        </nav>
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  133 => 42,  126 => 8,  123 => 7,  117 => 5,  111 => 44,  108 => 43,  106 => 42,  100 => 38,  94 => 36,  88 => 34,  86 => 33,  82 => 31,  74 => 29,  72 => 28,  66 => 27,  60 => 26,  52 => 21,  39 => 10,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
