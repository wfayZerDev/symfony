<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* specific_task/index.html.twig */
class __TwigTemplate_0f9775a4bd841ddb86156c5b460a8993 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specific_task/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specific_task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "specific_task/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Task : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"example-wrapper\">






    <div class=\"container\">
        <div class=\"space\">
            <span class=\"small\">Last Update : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 15, $this->source); })()), "createdAt", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        echo "</span>
        </div>
        <span class=\"title\"><b>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</b></span>
        <div class=\"space\">
            <span class=\"content\">De : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 21, $this->source); })()), "label", [], "any", false, false, false, 21) == "En cours")) {
            // line 22
            echo "                <span class=\"InProgress\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 22, $this->source); })()), "label", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 23, $this->source); })()), "label", [], "any", false, false, false, 23) == "En attente")) {
            // line 24
            echo "                <span class=\"waiting\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 24, $this->source); })()), "label", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25) == "Terminé")) {
            // line 26
            echo "                <span class=\"done\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 26, $this->source); })()), "label", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 28
            echo "
            ";
        }
        // line 30
        echo "        </div>
        <div class=\"content_task\">
            <span class=\"title\"><b>Description :</b></span>
            <br />
            <span class=\"content\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34), "html", null, true);
        echo "</span>
        </div>
    </div>
    ";
        // line 38
        echo "    <div class=\"container\">
        <div class=\"space\">
            <span class=\"title\"><b>Changer le status :</b></span>
        </div>
        <div class=\"space\">
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" class=\"done\">Trock it !</a>
        </div>

    <div class=\"task_tools\">
                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_task", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">delete</a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "specific_task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  169 => 47,  162 => 43,  155 => 38,  149 => 34,  143 => 30,  139 => 28,  133 => 26,  131 => 25,  126 => 24,  124 => 23,  119 => 22,  117 => 21,  112 => 19,  107 => 17,  102 => 15,  90 => 5,  80 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Task : {{ task.title }} {% endblock %}
{% block body %}

<div class=\"example-wrapper\">






    <div class=\"container\">
        <div class=\"space\">
            <span class=\"small\">Last Update : {{ task.createdAt|date('d/m/Y') }}</span>
        </div>
        <span class=\"title\"><b>{{ task.title }}</b></span>
        <div class=\"space\">
            <span class=\"content\">De : {{ owner }}</span>
            <br />
            {% if status.label == \"En cours\" %}
                <span class=\"InProgress\">{{ status.label }}</span>
            {% elseif status.label == \"En attente\" %}
                <span class=\"waiting\"> {{ status.label }}</span>
            {% elseif status.label == \"Terminé\" %}
                <span class=\"done\">{{ status.label }}</span>
            {% else %}

            {% endif %}
        </div>
        <div class=\"content_task\">
            <span class=\"title\"><b>Description :</b></span>
            <br />
            <span class=\"content\">{{ task.content }}</span>
        </div>
    </div>
    {# Button for change status #}
    <div class=\"container\">
        <div class=\"space\">
            <span class=\"title\"><b>Changer le status :</b></span>
        </div>
        <div class=\"space\">
            <a href=\"{{ path('app_edit_task', {'id': task.id,}) }}\" class=\"done\">Trock it !</a>
        </div>

    <div class=\"task_tools\">
                <a href=\"{{ path('app_edit_task', {'id': task.id}) }}\">edit</a>
                <a href=\"{{ path('app_remove_task', {'id': task.id}) }}\">delete</a>
    </div>
</div>
{% endblock %}", "specific_task/index.html.twig", "/Applications/MAMP/htdocs/tickets/templates/specific_task/index.html.twig");
    }
}
