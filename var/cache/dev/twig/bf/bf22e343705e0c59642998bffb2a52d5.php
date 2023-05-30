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
            <span class=\"small\">Completed At : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 15, $this->source); })()), "completedAt", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        echo "</span>
            <span class=\"small\">Last Update : ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 16, $this->source); })()), "createdAt", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
        echo "</span>
        </div>
        <span class=\"title\"><b>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</b></span>
        <div class=\"space\">
            <span class=\"content\">De : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 22, $this->source); })()), "label", [], "any", false, false, false, 22) == "En cours")) {
            // line 23
            echo "                <span class=\"InProgress\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 23, $this->source); })()), "label", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 24, $this->source); })()), "label", [], "any", false, false, false, 24) == "En attente")) {
            // line 25
            echo "                <span class=\"waiting\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 26, $this->source); })()), "label", [], "any", false, false, false, 26) == "Terminé")) {
            // line 27
            echo "                <span class=\"done\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 27, $this->source); })()), "label", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 29
            echo "
            ";
        }
        // line 31
        echo "        </div>
        <span>Attribué à :</span>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 34
            echo "    ";
            // line 35
            echo "    <span class=\"done\">
    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "firstname", [], "any", false, false, false, 36), "html", null, true);
            echo "
    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "lastname", [], "any", false, false, false, 37), "html", null, true);
            echo "
    </span>
    &nbsp;
    ";
            // line 41
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        <div class=\"content_task\">
            <span class=\"title\"><b>Description :</b></span>
            <br />
            <span class=\"content\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 45, $this->source); })()), "content", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
        </div>
    </div>
    <div class=\"task_tools\">
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\">edit</a>
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_task", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
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
        return array (  192 => 50,  188 => 49,  181 => 45,  176 => 42,  170 => 41,  164 => 37,  160 => 36,  157 => 35,  155 => 34,  151 => 33,  147 => 31,  143 => 29,  137 => 27,  135 => 26,  130 => 25,  128 => 24,  123 => 23,  121 => 22,  116 => 20,  111 => 18,  106 => 16,  102 => 15,  90 => 5,  80 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Task : {{ task.title }} {% endblock %}
{% block body %}

<div class=\"example-wrapper\">






    <div class=\"container\">
        <div class=\"space\">
            <span class=\"small\">Completed At : {{ task.completedAt|date('d/m/Y') }}</span>
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
        <span>Attribué à :</span>
        {% for users in user %}
    {# Display user email #}
    <span class=\"done\">
    {{ users.firstname }}
    {{ users.lastname }}
    </span>
    &nbsp;
    {# Display user firstname #}
    {% endfor %}
        <div class=\"content_task\">
            <span class=\"title\"><b>Description :</b></span>
            <br />
            <span class=\"content\">{{ task.content }}</span>
        </div>
    </div>
    <div class=\"task_tools\">
                <a href=\"{{ path('app_edit_task', {'id': task.id}) }}\">edit</a>
                <a href=\"{{ path('app_remove_task', {'id': task.id}) }}\">delete</a>
    </div>
</div>
{% endblock %}", "specific_task/index.html.twig", "/Applications/MAMP/htdocs/tickets/templates/specific_task/index.html.twig");
    }
}
