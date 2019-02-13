<?php

/* baseFooter.html.twig */
class __TwigTemplate_992463ab058ef3890a3c627f5dc7e6f3c38ba2159afc97c52870fb1acccb7da1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "baseFooter.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseFooter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseFooter.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"/css/footer.css\">
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
        echo "<footer class=\"section footer-classic context-dark bg-image\" style=\"background: #2d3246; margin-top:30px;\">
    <div class=\"container\">
        <div class=\"row row-30\">
            <div class=\"col-md-4 col-xl-5\">
                <div class=\"pr-xl-4\">
                    <h5>Logo</h5>
                    <!-- Rights-->
                    <p class=\"rights\"><span>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["footerText"]) || array_key_exists("footerText", $context) ? $context["footerText"] : (function () { throw new Twig_Error_Runtime('Variable "footerText" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "<br><br>&copy;</span><span class=\"copyright-year\">2018</span><span> </span><span>. </span><span>Tous droits réservés.</span></p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <h5>Contacts</h5>
                <dl class=\"contact-list\">
                    <dt>Adresse:</dt>
                    <dd>35394, Gießen</dd>
                </dl>
                <dl class=\"contact-list\">
                    <dt>email:</dt>
                    <dd><a href=\"mailto:mauricejuniorimele@yahoo.fr\">mauricejuniorimele@yahoo.fr</a></dd>
                </dl>
                <dl class=\"contact-list\">
                    <dt>téléphone:</dt>
                    <dd><a href=\"tel:#\">+49 17622865830</a>
                    </dd>
                </dl>
            </div>
            <div class=\"col-md-4 col-xl-3\">
                <h5>Liens</h5>
                <ul class=\"nav-list\">
                    <li><a href=\"#\">A propos de moi</a></li>
                    <li><a href=\"#\">Projets</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 45
        $this->loadTemplate("security/loginFooter.html.twig", "baseFooter.html.twig", 45)->display($context);
        // line 46
        echo "</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  116 => 45,  83 => 15,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/css/footer.css\">
{% endblock %}

{% block body %}
<footer class=\"section footer-classic context-dark bg-image\" style=\"background: #2d3246; margin-top:30px;\">
    <div class=\"container\">
        <div class=\"row row-30\">
            <div class=\"col-md-4 col-xl-5\">
                <div class=\"pr-xl-4\">
                    <h5>Logo</h5>
                    <!-- Rights-->
                    <p class=\"rights\"><span>{{ footerText }}<br><br>&copy;</span><span class=\"copyright-year\">2018</span><span> </span><span>. </span><span>Tous droits réservés.</span></p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <h5>Contacts</h5>
                <dl class=\"contact-list\">
                    <dt>Adresse:</dt>
                    <dd>35394, Gießen</dd>
                </dl>
                <dl class=\"contact-list\">
                    <dt>email:</dt>
                    <dd><a href=\"mailto:mauricejuniorimele@yahoo.fr\">mauricejuniorimele@yahoo.fr</a></dd>
                </dl>
                <dl class=\"contact-list\">
                    <dt>téléphone:</dt>
                    <dd><a href=\"tel:#\">+49 17622865830</a>
                    </dd>
                </dl>
            </div>
            <div class=\"col-md-4 col-xl-3\">
                <h5>Liens</h5>
                <ul class=\"nav-list\">
                    <li><a href=\"#\">A propos de moi</a></li>
                    <li><a href=\"#\">Projets</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    {% include 'security/loginFooter.html.twig' %}
</footer>
{% endblock %}
", "baseFooter.html.twig", "C:\\Users\\mauricej\\Desktop\\Projects\\cmgi\\templates\\baseFooter.html.twig");
    }
}
