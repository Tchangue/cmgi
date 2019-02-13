<?php

/* article/show.html.twig */
class __TwigTemplate_3438a3afae29f770a369a438fd0c715046c3cccd4362e3e9bbde2008904086ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"/css/articleListView.css\">
    <link rel=\"stylesheet\" href=\"/css/calender.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("baseNavbar.html.twig", "article/show.html.twig", 9)->display($context);
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("baseGridLayoutOpen.html.twig", "article/show.html.twig", 11)->display($context);
        // line 12
        echo "    <br>

    <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 14, $this->source); })()), "title", array()), "html", null, true);
        echo "</h2>
    <div>
        <img class=\"rounded\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 16, $this->source); })()), "image", array()), "html", null, true);
        echo "\"/>
    </div>
    <div class=\"metadata\">
        <span><b class=\"badge badge-secondary\">Auteur : </b> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 19, $this->source); })()), "author", array()), "html", null, true);
        echo "</span><br>
        <span><b class=\"badge badge-secondary\">Publi&eacute; le : </b> </b>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 20, $this->source); })()), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo "
            &agrave; ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 21, $this->source); })()), "createdAt", array()), "H:i"), "html", null, true);
        echo "</span><br>
        <span><b class=\"badge badge-secondary\">Cat&eacute;gorie : </b> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 22, $this->source); })()), "category", array()), "html", null, true);
        echo "</span><br>
        <span><b class=\"badge badge-secondary\">Cat&eacute;gorie parent: </b> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 23, $this->source); })()), "family", array()), "title", array()), "html", null, true);
        echo "</span><br><br>
    </div>
    <div>
        <p>
            ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 27, $this->source); })()), "content", array());
        echo "
        </p>
    </div>
    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "user", array())) {
            // line 31
            echo "        <span>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_update", array("title" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 32, $this->source); })()), "title", array()))), "html", null, true);
            echo "\">
                 <button class=\"btn btn-primary\" type=\"submit\">Modifier l'article</button>
                </a>
            </span>

    ";
        }
        // line 38
        echo "    </div>

    ";
        // line 40
        $this->loadTemplate("baseWidget.html.twig", "article/show.html.twig", 40)->display($context);
        // line 41
        echo "
    <br><br><br><br>
    <section id=\"comments\">
        <h3 class>";
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 44, $this->source); })()), "comments", array())), "html", null, true);
        echo " Commentaires</h3>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 45, $this->source); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 46
            echo "            <div class=\"comment\">
                <div class=\"row\">
                    <div class=\"col-auto\">
                        <img style=\"border-radius:50%; max-width: 50px; max-height:50px;\" src=\"../images/myAvatar2.png\"/>
                    </div>
                    <div class=\"col-2\" style=\"width:5%;\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", array()), "html", null, true);
            echo "
                        <br><small>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo " &agrave; ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", array()), "H:i"), "html", null, true);
            echo "</small>

                    </div>
                    <div class=\"col-6\">
                        ";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", array());
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        <br><br><br><br><br>

        ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->source); })()), "user", array())) {
            // line 65
            echo "
            ";
            // line 66
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 66, $this->source); })()), 'form_start');
            echo "
            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 67, $this->source); })()), "author", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom")));
            echo "
            ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 68, $this->source); })()), "content", array()), 'row', array("label" => "Commentaire", "attr" => array("placeholder" => "Commentaire")));
            echo "
            <a href=\"\">
                <button class=\"btn btn-outline-success\" type=\"submit\">Laissez un commentaire</button>
            </a>
            ";
            // line 72
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 72, $this->source); })()), 'form_end');
            echo "

        ";
        } else {
            // line 75
            echo "            <h4>Vous ne pouvez pas commenter si vous n'etes pas connecte!</h4>
            <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-outline-primary\">Connexion</a>
        ";
        }
        // line 78
        echo "    </section>
    </div>
    </div>
    ";
        // line 81
        $this->loadTemplate("baseFooter.html.twig", "article/show.html.twig", 81)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <script src=\"/js/socialsIconToggle.js\"></script>
    <script src=\"/js/calender.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 85,  246 => 84,  236 => 81,  231 => 78,  226 => 76,  223 => 75,  217 => 72,  210 => 68,  206 => 67,  202 => 66,  199 => 65,  197 => 64,  193 => 62,  182 => 57,  173 => 53,  169 => 52,  161 => 46,  157 => 45,  153 => 44,  148 => 41,  146 => 40,  142 => 38,  133 => 32,  130 => 31,  128 => 30,  122 => 27,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  99 => 19,  93 => 16,  88 => 14,  84 => 12,  82 => 11,  79 => 10,  76 => 9,  67 => 8,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/css/articleListView.css\">
    <link rel=\"stylesheet\" href=\"/css/calender.css\">
{% endblock %}

{% block body %}
    {% include 'baseNavbar.html.twig' %}

    {% include 'baseGridLayoutOpen.html.twig' %}
    <br>

    <h2>{{ article.title }}</h2>
    <div>
        <img class=\"rounded\" src=\"{{ article.image }}\"/>
    </div>
    <div class=\"metadata\">
        <span><b class=\"badge badge-secondary\">Auteur : </b> {{ article.author }}</span><br>
        <span><b class=\"badge badge-secondary\">Publi&eacute; le : </b> </b>{{ article.createdAt | date('d/m/Y') }}
            &agrave; {{ article.createdAt | date('H:i') }}</span><br>
        <span><b class=\"badge badge-secondary\">Cat&eacute;gorie : </b> {{ article.category }}</span><br>
        <span><b class=\"badge badge-secondary\">Cat&eacute;gorie parent: </b> {{ article.family.title }}</span><br><br>
    </div>
    <div>
        <p>
            {{ article.content | raw }}
        </p>
    </div>
    {% if app.user %}
        <span>
                <a href=\"{{ path('article_update',{'title': article.title}) }}\">
                 <button class=\"btn btn-primary\" type=\"submit\">Modifier l'article</button>
                </a>
            </span>

    {% endif %}
    </div>

    {% include 'baseWidget.html.twig' %}

    <br><br><br><br>
    <section id=\"comments\">
        <h3 class>{{ article.comments | length }} Commentaires</h3>
        {% for comment in article.comments %}
            <div class=\"comment\">
                <div class=\"row\">
                    <div class=\"col-auto\">
                        <img style=\"border-radius:50%; max-width: 50px; max-height:50px;\" src=\"../images/myAvatar2.png\"/>
                    </div>
                    <div class=\"col-2\" style=\"width:5%;\">
                        {{ comment.author }}
                        <br><small>{{ comment.createdAt | date('d/m/Y')}} &agrave; {{ comment.createdAt | date('H:i') }}</small>

                    </div>
                    <div class=\"col-6\">
                        {{ comment.content | raw }}
                    </div>
                </div>
            </div>
        {% endfor %}
        <br><br><br><br><br>

        {% if app.user %}

            {{ form_start(commentForm) }}
            {{ form_row(commentForm.author, {'label':\"Nom\",'attr':{'placeholder':\"Nom\"}}) }}
            {{ form_row(commentForm.content, {'label':\"Commentaire\",'attr':{'placeholder':\"Commentaire\"}}) }}
            <a href=\"\">
                <button class=\"btn btn-outline-success\" type=\"submit\">Laissez un commentaire</button>
            </a>
            {{ form_end(commentForm) }}

        {% else %}
            <h4>Vous ne pouvez pas commenter si vous n'etes pas connecte!</h4>
            <a href=\"{{ path('security_login') }}\" class=\"btn btn-outline-primary\">Connexion</a>
        {% endif %}
    </section>
    </div>
    </div>
    {% include 'baseFooter.html.twig' %}
{% endblock %}

{% block javascripts %}
    <script src=\"/js/socialsIconToggle.js\"></script>
    <script src=\"/js/calender.js\"></script>
{% endblock %}
", "article/show.html.twig", "C:\\Users\\mauricej\\Desktop\\Projects\\cmgi\\templates\\article\\show.html.twig");
    }
}
