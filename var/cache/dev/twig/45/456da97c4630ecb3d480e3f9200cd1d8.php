<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user_articles.html.twig */
class __TwigTemplate_b90fc219475f9c655c51f57681798973 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_articles.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Articles by ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "email", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <style>
        body {
            margin: 0;
        }
        .background-image {
            background-image: url('/images/the-illustration-graphic-consists-of-abstract-background-with-a-blue-gradient-dynamic-shapes-composition-eps10-perfect-for-presentation-background-website-landing-page-wallpaper-vector.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Adjust as needed */
            width: 100%; /* Occupies full width of the page */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        yield "<div class=\"background-image\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_all_articles");
        yield "\">Articles</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-outline-danger\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=\"container mt-4\">
<h1 style=\"color: white;\">Articles by ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "html", null, true);
        yield "</h1>
        
        <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-3\">Add article</a>

        ";
        // line 45
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 45, $this->source); })()))) {
            // line 46
            yield "            <div class=\"alert alert-warning\" role=\"alert\">
                No articles found for this user.
            </div>
        ";
        } else {
            // line 50
            yield "            <div class=\"row\">
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 52
                yield "                    <div class=\"col-md-4\">
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 55), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 56), "html", null, true);
                yield "</p>
                                <p><small class=\"text-muted\">Created at: ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 57), "Y-m-d H:i"), "html", null, true);
                yield "</small></p>
                                <a href=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                                ";
                // line 59
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["delete_forms"]) || array_key_exists("delete_forms", $context) ? $context["delete_forms"] : (function () { throw new RuntimeError('Variable "delete_forms" does not exist.', 59, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 59), [], "array", false, false, false, 59), 'form_start');
                yield "
                                    <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
                                ";
                // line 61
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["delete_forms"]) || array_key_exists("delete_forms", $context) ? $context["delete_forms"] : (function () { throw new RuntimeError('Variable "delete_forms" does not exist.', 61, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 61), [], "array", false, false, false, 61), 'form_end');
                yield "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "            </div>
        ";
        }
        // line 68
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user_articles.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  198 => 68,  194 => 66,  183 => 61,  178 => 59,  174 => 58,  170 => 57,  166 => 56,  162 => 55,  157 => 52,  153 => 51,  150 => 50,  144 => 46,  142 => 45,  137 => 43,  132 => 41,  122 => 34,  114 => 29,  104 => 21,  97 => 20,  77 => 6,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles by {{ user.email }}{% endblock %}

{% block stylesheets %}
    <style>
        body {
            margin: 0;
        }
        .background-image {
            background-image: url('/images/the-illustration-graphic-consists-of-abstract-background-with-a-blue-gradient-dynamic-shapes-composition-eps10-perfect-for-presentation-background-website-landing-page-wallpaper-vector.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Adjust as needed */
            width: 100%; /* Occupies full width of the page */
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"background-image\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_all_articles') }}\">Articles</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-outline-danger\" href=\"{{ path('app_logout') }}\">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=\"container mt-4\">
<h1 style=\"color: white;\">Articles by {{ user.email }}</h1>
        
        <a href=\"{{ path('app_article_new', {id: user.id}) }}\" class=\"btn btn-success mb-3\">Add article</a>

        {% if articles is empty %}
            <div class=\"alert alert-warning\" role=\"alert\">
                No articles found for this user.
            </div>
        {% else %}
            <div class=\"row\">
                {% for article in articles %}
                    <div class=\"col-md-4\">
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ article.title }}</h5>
                                <p class=\"card-text\">{{ article.content }}</p>
                                <p><small class=\"text-muted\">Created at: {{ article.createdAt|date('Y-m-d H:i') }}</small></p>
                                <a href=\"{{ path('app_article_edit', {id: article.id}) }}\" class=\"btn btn-primary\">Edit</a>
                                {{ form_start(delete_forms[article.id]) }}
                                    <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
                                {{ form_end(delete_forms[article.id]) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "user_articles.html.twig", "C:\\Users\\MSI\\Desktop\\Stage\\my_blog\\templates\\user_articles.html.twig");
    }
}
