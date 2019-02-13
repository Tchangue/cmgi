<?php

/* security/login.html.twig */
class __TwigTemplate_4f43c84c8952487919b5ae921d289b61a8b07a17c585f6831b8f5879c59fe237 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"/css/security.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container text-center\">
        <br><br>
        <div id=\"connexion\" style=\"text-align:center;\"><h2><b>Connection</b></h2></div>
        <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <input class=\"form-control\" placeholder=\"Email\" required name=\"_username\">
            </div>
            <div class=\"form-group\">
                <input class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" required name=\"_password\">
            </div>
            <div class=\"checkbox mb-3 text-center\">
                <label>
                    <input  type=\"checkbox\" value=\"remember-me\">Se souvenir de moi
                </label>
            </div>
            <div class=\"form-group\">
                <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"Login\" style=\"white-space: normal; word-wrap: break-word;\" onclick=\" ";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo " \">

                <!--</input>-->
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
        echo "\" style=\"float: left\">Mot de passe oubli&eacute;?</a>
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\" style=\"float: right\">Cr&eacute;er un compte</a>
            </div>

        </form>
        ";
        // line 32
        $this->loadTemplate("security/loginFooter.html.twig", "security/login.html.twig", 32)->display($context);
        // line 33
        echo "

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  112 => 32,  105 => 28,  101 => 27,  95 => 24,  79 => 11,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/css/security.css\">
{% endblock %}

{% block body %}
    <div class=\"container text-center\">
        <br><br>
        <div id=\"connexion\" style=\"text-align:center;\"><h2><b>Connection</b></h2></div>
        <form action=\"{{ path('security_login') }}\" method=\"post\">
            <div class=\"form-group\">
                <input class=\"form-control\" placeholder=\"Email\" required name=\"_username\">
            </div>
            <div class=\"form-group\">
                <input class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" required name=\"_password\">
            </div>
            <div class=\"checkbox mb-3 text-center\">
                <label>
                    <input  type=\"checkbox\" value=\"remember-me\">Se souvenir de moi
                </label>
            </div>
            <div class=\"form-group\">
                <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"Login\" style=\"white-space: normal; word-wrap: break-word;\" onclick=\" {{ path('articles') }} \">

                <!--</input>-->
                <a href=\"{{ path('reset_password') }}\" style=\"float: left\">Mot de passe oubli&eacute;?</a>
                <a href=\"{{ path('security_registration') }}\" style=\"float: right\">Cr&eacute;er un compte</a>
            </div>

        </form>
        {% include 'security/loginFooter.html.twig' %}


    </div>
{% endblock %}", "security/login.html.twig", "C:\\Users\\mauricej\\Desktop\\Projects\\cmgi\\templates\\security\\login.html.twig");
    }
}
