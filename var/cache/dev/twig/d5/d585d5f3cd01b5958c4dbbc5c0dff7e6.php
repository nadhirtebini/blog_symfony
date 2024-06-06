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

/* security/login.html.twig */
class __TwigTemplate_cc858c99d9996aeaf4d529347bbc292b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Login";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header\">Login</div>
                <div class=\"card-body\">
                    ";
        // line 14
        if (array_key_exists("error", $context)) {
            // line 15
            yield "                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "</div>
                    ";
        }
        // line 17
        yield "
                    <form method=\"post\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_check_login");
        yield "\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email:</label>
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\">Password:</label>
                            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                    </form>
                </div>
                <div class=\"card-footer text-center\">
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-secondary\">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
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
        return "security/login.html.twig";
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
        return array (  112 => 33,  94 => 18,  91 => 17,  85 => 15,  83 => 14,  75 => 8,  68 => 7,  54 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/security/login.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header\">Login</div>
                <div class=\"card-body\">
                    {% if error is defined %}
                        <div class=\"alert alert-danger\">{{ error }}</div>
                    {% endif %}

                    <form method=\"post\" action=\"{{ path('app_check_login') }}\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email:</label>
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\">Password:</label>
                            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                    </form>
                </div>
                <div class=\"card-footer text-center\">
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-secondary\">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\MSI\\Desktop\\Stage\\my_blog\\templates\\security\\login.html.twig");
    }
}
