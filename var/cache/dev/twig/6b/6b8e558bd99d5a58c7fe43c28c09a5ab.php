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
class __TwigTemplate_0cfc1ba4c75b2aa00891ca48d587950a extends Template
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
        yield "    <h1>Articles by ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "        <div class=\"alert alert-warning\" role=\"alert\">
            No articles found for this user.
        </div>
    ";
        } else {
            // line 15
            yield "        <div class=\"row\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 17
                yield "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 20), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 21), "html", null, true);
                yield "</p>
                            <p><small class=\"text-muted\">Created at: ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true);
                yield "</small></p>
                            <a href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                            ";
                // line 24
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["delete_forms"]) || array_key_exists("delete_forms", $context) ? $context["delete_forms"] : (function () { throw new RuntimeError('Variable "delete_forms" does not exist.', 24, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 24), [], "array", false, false, false, 24), 'form_start');
                yield "
                                <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
                            ";
                // line 26
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["delete_forms"]) || array_key_exists("delete_forms", $context) ? $context["delete_forms"] : (function () { throw new RuntimeError('Variable "delete_forms" does not exist.', 26, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 26), [], "array", false, false, false, 26), 'form_end');
                yield "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        </div>
    ";
        }
        
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
        return array (  134 => 31,  123 => 26,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  97 => 17,  93 => 16,  90 => 15,  84 => 11,  82 => 10,  76 => 8,  69 => 7,  54 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/article/user_articles.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Articles by {{ user.email }}{% endblock %}

{% block body %}
    <h1>Articles by {{ user.email }}</h1>

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
{% endblock %}
", "user_articles.html.twig", "C:\\Users\\MSI\\Desktop\\Stage\\my_blog\\templates\\user_articles.html.twig");
    }
}
