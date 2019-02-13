<?php

/* article/createOrUpdate.html.twig */
class __TwigTemplate_70d4bc7afd9600e46ccee462b56fdb34384f838fb37ab560f26c779283c38dfe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/createOrUpdate.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/createOrUpdate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/createOrUpdate.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 3, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <h2>
            ";
        // line 7
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "                Modification de l'article ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 8, $this->source); })()), "title", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 10
            echo "                Cr&eacute;ation d'un article
            ";
        }
        // line 12
        echo "        </h2>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 14, $this->source); })()), "title", array()), 'row', array("attr" => array("placeholder" => "Titre de l'article")));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 15, $this->source); })()), "content", array()), 'row', array("attr" => array("placeholder" => "Contenu de l'article")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 16, $this->source); })()), "image", array()), 'row', array("attr" => array("placeholder" => "URL de l'image")));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 17, $this->source); })()), "author", array()), 'row', array("attr" => array("placeholder" => "John Doe")));
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 18, $this->source); })()), "category", array()), 'row', array("attr" => array("placeholder" => "Sans categorie")));
        echo "

        <button class=\"btn btn-success\" type=\"submit\">
            ";
        // line 21
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                Enregistrer les modifications
            ";
        } else {
            // line 24
            echo "                Ajouter l'article
            ";
        }
        // line 26
        echo "        </button>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/createOrUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  111 => 26,  107 => 24,  103 => 22,  101 => 21,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  72 => 12,  68 => 10,  62 => 8,  60 => 7,  56 => 5,  47 => 4,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme formArticle 'bootstrap_4_layout.html.twig' %}
{% block body %}
    <div class=\"container\">
        <h2>
            {% if editMode %}
                Modification de l'article {{ article.title }}
            {% else %}
                Cr&eacute;ation d'un article
            {% endif %}
        </h2>
        {{ form_start(formArticle) }}
        {{ form_row(formArticle.title, {'attr': {'placeholder':\"Titre de l'article\"}}) }}
        {{ form_row(formArticle.content,{'attr': {'placeholder':\"Contenu de l'article\"}}) }}
        {{ form_row(formArticle.image,{'attr': {'placeholder':\"URL de l'image\"}}) }}
        {{ form_row(formArticle.author,{'attr': {'placeholder':\"John Doe\"}}) }}
        {{ form_row(formArticle.category,{'attr': {'placeholder':\"Sans categorie\"}}) }}

        <button class=\"btn btn-success\" type=\"submit\">
            {% if editMode %}
                Enregistrer les modifications
            {% else %}
                Ajouter l'article
            {% endif %}
        </button>
        {{ form_end(formArticle) }}
    </div>
{% endblock %}", "article/createOrUpdate.html.twig", "C:\\Users\\mauricej\\Desktop\\Projects\\cmgi\\templates\\article\\createOrUpdate.html.twig");
    }
}
