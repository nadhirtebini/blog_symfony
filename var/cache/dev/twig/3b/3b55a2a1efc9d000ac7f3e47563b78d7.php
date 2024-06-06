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
class __TwigTemplate_cf6bc67d0de91bd168c47a9aae51b890 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_articles.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Articles by ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "email", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Logo</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_all_articles");
        yield "\">Articles</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-outline-danger\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=\"container mt-4 bg-light\">
        <h1>Articles by ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</h1>
        
        <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"btn btn-success mb-3\">Add article</a>

        ";
        // line 32
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "            <div class=\"alert alert-warning\" role=\"alert\">
                No articles found for this user.
            </div>
        ";
        } else {
            // line 37
            yield "            <div class=\"row\">
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 39
                yield "                    <div class=\"col-md-4\">
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 42), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 43), "html", null, true);
                yield "</p>
                                <p><small class=\"text-muted\">Created at: ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 44), "Y-m-d H:i"), "html", null, true);
                yield "</small></p>
                                <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                                ";
                // line 46
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["delete_forms"]) || array_key_exists("delete_forms", $context) ? $context["delete_forms"] : (function () { throw new RuntimeError('Variable "delete_forms" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46), [], "array", false, false, false, 46), 'form_start');
                yield "
                                    <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
                                ";
                // line 48
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["delete_forms"]) || array_key_exists("delete_forms", $context) ? $context["delete_forms"] : (function () { throw new RuntimeError('Variable "delete_forms" does not exist.', 48, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48), [], "array", false, false, false, 48), 'form_end');
                yield "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            </div>
        ";
        }
        // line 55
        yield "    </div>
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
        return array (  170 => 55,  166 => 53,  155 => 48,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  129 => 39,  125 => 38,  122 => 37,  116 => 33,  114 => 32,  109 => 30,  104 => 28,  94 => 21,  86 => 16,  76 => 8,  69 => 7,  54 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/article/user_articles.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Articles by {{ user.email }}{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Logo</a>
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

    <div class=\"container mt-4 bg-light\">
        <h1>Articles by {{ user.email }}</h1>
        
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
{% endblock %}
", "user_articles.html.twig", "C:\\Users\\MSI\\Desktop\\Stage\\my_blog\\templates\\user_articles.html.twig");
    }
}
