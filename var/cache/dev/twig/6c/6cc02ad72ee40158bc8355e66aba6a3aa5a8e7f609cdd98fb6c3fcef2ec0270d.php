<?php

/* baseWidget.html.twig */
class __TwigTemplate_48b890d50ffd91d15a917b5858e909ae97d18a8490e775044627717f502d31d0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "baseWidget.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseWidget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseWidget.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"/css/articleListView.css\">
    <link rel=\"stylesheet\" href=\"/css/calender.css\">
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
        echo "    <div class=\"col-sm-4 offset-sm-1 blog-sidebar\" style=\"margin-top:100px\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new Twig_Error_Runtime('Variable "widgets" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 10
            echo "            <div class=\"card\">
                <div class=\"card-header\">
                    <strong>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "title", array()), "html", null, true);
            echo "</strong>
                </div>
                <div class=\"card-body primary\">
                    <p class=\"card-text\">
                        ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "title", array()) == "Citation aléatoire")) {
                // line 17
                echo "                    <blockquote class=\"quote\" id=\"quote\">
                        ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["quotes"]) || array_key_exists("quotes", $context) ? $context["quotes"] : (function () { throw new Twig_Error_Runtime('Variable "quotes" does not exist.', 18, $this->source); })())), "content", array()), "html", null, true);
                echo "<br>
                        <small><span style=\"float:right;\"><b><i>__ ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["quotes"]) || array_key_exists("quotes", $context) ? $context["quotes"] : (function () { throw new Twig_Error_Runtime('Variable "quotes" does not exist.', 19, $this->source); })())), "author", array()), "html", null, true);
                echo "</i></b></span>
                        </small>
                        <br>
                        <div>
                            <a href=\"\" style=\"text-decoration: none\" id=\"nextQuote\">Citation suivante &raquo;</a>
                        </div>
                    </blockquote>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 26
$context["widget"], "title", array()) == "Calendrier")) {
                // line 27
                echo "                        <div class=\"calendar calendar-first\" id=\"calendar_first\">
                            <div class=\"calendar_header\">
                                <button class=\"switch-month switch-left\"><i class=\"fa fa-chevron-left\"></i>
                                </button>
                                <h2 id=\"currentMonth\"><strong></strong></h2>
                                <button class=\"switch-month switch-right\"><i class=\"fa fa-chevron-right\"></i>
                                </button>
                            </div>
                            <div class=\"calendar_weekdays\"></div>
                            <div class=\"calendar_content\"></div>
                        </div>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 38
$context["widget"], "title", array()) == "Suivez-moi...")) {
                // line 39
                echo "                        <div class=\"row\">
                            <a href=\"#\" target=\"_blank\">
                                <div class=\"col\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                                     title=\"Visitez mon profil facebook\"><i class=\"fab fa-facebook fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"#\" target=\"_blank\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez mon profil instagram\"><i class=\"fab fa-instagram fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["youtubeChannel"]) || array_key_exists("youtubeChannel", $context) ? $context["youtubeChannel"] : (function () { throw new Twig_Error_Runtime('Variable "youtubeChannel" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez ma chaine youtube\"><i class=\"fab fa-youtube fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez mon profil snapchat\"><i class=\"fab fa-snapchat fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["twitterProfile"]) || array_key_exists("twitterProfile", $context) ? $context["twitterProfile"] : (function () { throw new Twig_Error_Runtime('Variable "twitterProfile" does not exist.', 60, $this->source); })()), "html", null, true);
                echo "\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez mon profil twitter\"><i class=\"fab fa-twitter fa-3x\"></i>
                                </div>
                            </a>
                        </div>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 66
$context["widget"], "title", array()) == "Catégories")) {
                // line 67
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 67, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 68
                    echo "                            <li>
                                <ul>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", array()), "html", null, true);
                    echo "</ul>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                    ";
            } else {
                // line 73
                echo "                        With supporting text below as a natural lead-in to additional content.
                    ";
            }
            // line 75
            echo "                    </p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    <script type=\"text/javascript\" src=\"js/quotes.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 83,  212 => 82,  200 => 79,  191 => 75,  187 => 73,  184 => 72,  175 => 69,  172 => 68,  167 => 67,  165 => 66,  156 => 60,  143 => 50,  130 => 39,  128 => 38,  115 => 27,  113 => 26,  103 => 19,  99 => 18,  96 => 17,  94 => 16,  87 => 12,  83 => 10,  79 => 9,  76 => 8,  67 => 7,  55 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/css/articleListView.css\">
    <link rel=\"stylesheet\" href=\"/css/calender.css\">
{% endblock %}

{% block body %}
    <div class=\"col-sm-4 offset-sm-1 blog-sidebar\" style=\"margin-top:100px\">
        {% for widget in widgets %}
            <div class=\"card\">
                <div class=\"card-header\">
                    <strong>{{ widget.title }}</strong>
                </div>
                <div class=\"card-body primary\">
                    <p class=\"card-text\">
                        {% if  widget.title == \"Citation aléatoire\" %}
                    <blockquote class=\"quote\" id=\"quote\">
                        {{ quotes | first.content }}<br>
                        <small><span style=\"float:right;\"><b><i>__ {{ quotes| first.author }}</i></b></span>
                        </small>
                        <br>
                        <div>
                            <a href=\"\" style=\"text-decoration: none\" id=\"nextQuote\">Citation suivante &raquo;</a>
                        </div>
                    </blockquote>
                    {% elseif widget.title == \"Calendrier\" %}
                        <div class=\"calendar calendar-first\" id=\"calendar_first\">
                            <div class=\"calendar_header\">
                                <button class=\"switch-month switch-left\"><i class=\"fa fa-chevron-left\"></i>
                                </button>
                                <h2 id=\"currentMonth\"><strong></strong></h2>
                                <button class=\"switch-month switch-right\"><i class=\"fa fa-chevron-right\"></i>
                                </button>
                            </div>
                            <div class=\"calendar_weekdays\"></div>
                            <div class=\"calendar_content\"></div>
                        </div>
                    {% elseif widget.title == \"Suivez-moi...\" %}
                        <div class=\"row\">
                            <a href=\"#\" target=\"_blank\">
                                <div class=\"col\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                                     title=\"Visitez mon profil facebook\"><i class=\"fab fa-facebook fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"#\" target=\"_blank\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez mon profil instagram\"><i class=\"fab fa-instagram fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"{{ youtubeChannel }}\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez ma chaine youtube\"><i class=\"fab fa-youtube fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez mon profil snapchat\"><i class=\"fab fa-snapchat fa-3x\"></i>
                                </div>
                            </a>
                            <a href=\"{{ twitterProfile }}\" target=\"_blank\">
                                <div class=\"col\" data-placement=\"bottom\" data-toggle=\"tooltip\"
                                     title=\"Visitez mon profil twitter\"><i class=\"fab fa-twitter fa-3x\"></i>
                                </div>
                            </a>
                        </div>
                    {% elseif widget.title == \"Catégories\" %}
                        {% for article in articles %}
                            <li>
                                <ul>{{ article.category }}</ul>
                            </li>
                        {% endfor %}
                    {% else %}
                        With supporting text below as a natural lead-in to additional content.
                    {% endif %}
                    </p>
                </div>
            </div>
        {% endfor %}
    </div>

{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"js/quotes.js\"></script>
{% endblock %}", "baseWidget.html.twig", "C:\\Users\\mauricej\\Desktop\\Projects\\cmgi\\templates\\baseWidget.html.twig");
    }
}
