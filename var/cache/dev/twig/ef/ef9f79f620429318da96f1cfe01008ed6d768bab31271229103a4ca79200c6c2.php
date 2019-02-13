<?php

/* baseNavbar.html.twig */
class __TwigTemplate_8d5686bd43b062a3e29d53bd3144dd871fd6cd0a3050e72f0ca5515789d58197 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "baseNavbar.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseNavbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseNavbar.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"/css/navbar.css\">
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
        echo "    <nav class=\" fixed-top navbar navbar-expand-lg navbar-light bg-info\">
        <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">JunApp</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">Home<span class=\"sr-only\">(current)</span></button>
                    </li>
                </div>

                <div class=\"dropdown\">
                    <button class=\"dropdown-toggle dropbtn\">Actualit&eacute;s</button>
                    <div class=\"shadow p-10 mb-10 bg-white rounded dropdown-content\">
                        <a href=\"#\">Politique</a>
                        <a href=\"#\">Economie</a>
                        <a href=\"#\">Sant&eacute;</a>
                        <a href=\"#\">Culture</a>
                        <a href=\"#\">Sport</a>
                    </div>
                </div>

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">Ev&eacute;nements<span class=\"sr-only\">(current)</span></button>
                    </li>
                </div>

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">Gallerie<span class=\"sr-only\"></span></button>
                    </li>
                </div>

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">A propos de moi<span class=\"sr-only\"></span></button>
                    </li>
                </div>

                ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "user", array())) {
            // line 54
            echo "                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter<span
                                    class=\"sr-only\"></span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\">S'enregistrer<span class=\"sr-only\"></span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_create");
            echo "\">Cr&eacute;er un article</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">
                            Se d&eacute;connecter
                        </a>
                    </li>
                ";
        }
        // line 71
        echo "

            </ul>


            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
                <button class=\"btn btn-success my-2 my-sm-0\" type=\"submit\">Ok</button>
            </form>
            <div class=\"dropdown\" >
                <i class=\"dropdown-toggle dropbtn fas fa-user fw\"></i>
                <div class=\"shadow p-10 mb-10 bg-white rounded dropdown-content\">
                    <a href=\"#\">Profile</a>
                    <a href=\"#\">Se d&eacute;connecter<i class=\"fas fa-sign-out-alt\" style=\"float:left\" ></i></a>
                </div>
            </div>


            </div>
    </nav>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseNavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 71,  149 => 66,  143 => 63,  136 => 59,  129 => 55,  126 => 54,  124 => 53,  77 => 9,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/css/navbar.css\">
{% endblock %}

{% block body %}
    <nav class=\" fixed-top navbar navbar-expand-lg navbar-light bg-info\">
        <a class=\"navbar-brand\" href=\"{{ path('articles') }}\">JunApp</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">Home<span class=\"sr-only\">(current)</span></button>
                    </li>
                </div>

                <div class=\"dropdown\">
                    <button class=\"dropdown-toggle dropbtn\">Actualit&eacute;s</button>
                    <div class=\"shadow p-10 mb-10 bg-white rounded dropdown-content\">
                        <a href=\"#\">Politique</a>
                        <a href=\"#\">Economie</a>
                        <a href=\"#\">Sant&eacute;</a>
                        <a href=\"#\">Culture</a>
                        <a href=\"#\">Sport</a>
                    </div>
                </div>

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">Ev&eacute;nements<span class=\"sr-only\">(current)</span></button>
                    </li>
                </div>

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">Gallerie<span class=\"sr-only\"></span></button>
                    </li>
                </div>

                <div class=\"dropdown\">
                    <li class=\"nav-item active\">
                        <button class=\"dropbtn\">A propos de moi<span class=\"sr-only\"></span></button>
                    </li>
                </div>

                {% if app.user %}
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('security_login') }}\">Se connecter<span
                                    class=\"sr-only\"></span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('articles') }}\">S'enregistrer<span class=\"sr-only\"></span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('article_create') }}\">Cr&eacute;er un article</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('security_logout') }}\">
                            Se d&eacute;connecter
                        </a>
                    </li>
                {% endif %}


            </ul>


            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
                <button class=\"btn btn-success my-2 my-sm-0\" type=\"submit\">Ok</button>
            </form>
            <div class=\"dropdown\" >
                <i class=\"dropdown-toggle dropbtn fas fa-user fw\"></i>
                <div class=\"shadow p-10 mb-10 bg-white rounded dropdown-content\">
                    <a href=\"#\">Profile</a>
                    <a href=\"#\">Se d&eacute;connecter<i class=\"fas fa-sign-out-alt\" style=\"float:left\" ></i></a>
                </div>
            </div>


            </div>
    </nav>

{% endblock %}", "baseNavbar.html.twig", "C:\\Users\\mauricej\\Desktop\\Projects\\cmgi\\templates\\baseNavbar.html.twig");
    }
}
