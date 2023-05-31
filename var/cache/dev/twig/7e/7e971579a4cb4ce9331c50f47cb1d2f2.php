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

/* display_task/index.html.twig */
class __TwigTemplate_dd9c4dfe54ffde6e52ae63ef0b63d962 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display_task/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display_task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "display_task/index.html.twig", 1);
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

        echo "Hello DisplayTaskController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper {
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
        font: 18px/1.5 sans-serif;
    }

    .example-wrapper code {
        background: #F5F5F5;
        padding: 2px 6px;
    }
</style>




    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Status</th>
                <th>Updated</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tasks"]) {
            // line 37
            echo "        <tr>
            
            <td><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "picture", [], "any", false, false, false, 39), "html", null, true);
            echo "\" alt=\"image\"></td>

            ";
            // line 42
            echo "            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "title", [], "any", false, false, false, 42)) > 50)) {
                // line 43
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_display_task_specific", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "title", [], "any", false, false, false, 43), 0, 50) . "..."), "html", null, true);
                echo "</a></td>
            ";
            } else {
                // line 45
                echo "                ";
                // line 46
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_display_task_specific", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "title", [], "any", false, false, false, 46), "html", null, true);
                echo "</a></td>
            ";
            }
            // line 48
            echo "

            ";
            // line 51
            echo "            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "content", [], "any", false, false, false, 51)) > 80)) {
                // line 52
                echo "                <td><span class=\"preview-content\">";
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "content", [], "any", false, false, false, 52), 0, 80) . "..."), "html", null, true);
                echo "</span></td>
            ";
            } else {
                // line 54
                echo "            ";
                // line 55
                echo "                <td><span class=\"preview-content\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "content", [], "any", false, false, false, 55), "html", null, true);
                echo "</span></td>
            ";
            }
            // line 57
            echo "


            ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 60) == "À vendre")) {
                // line 61
                echo "                <td><span class=\"InProgress\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 61), "html", null, true);
                echo "</span></td>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 62
$context["tasks"], "status", [], "any", false, false, false, 62) == "Trocked")) {
                // line 63
                echo "                <td><span class=\"waiting\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 63), "html", null, true);
                echo "</span></td>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 64
$context["tasks"], "status", [], "any", false, false, false, 64) == "Réserver")) {
                // line 65
                echo "                <td><span class=\"done\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 65), "html", null, true);
                echo "</span></td>
            ";
            } else {
                // line 67
                echo "            ";
            }
            // line 68
            echo "

            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "createdAt", [], "any", false, false, false, 70), "+1 hour"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
            ";
            // line 72
            echo "
            ";
            // line 74
            echo "            <td>
                <span><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">edit</a>
                |
                <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_task", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">delete</a></span>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
    </table>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "display_task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 81,  224 => 77,  219 => 75,  216 => 74,  213 => 72,  209 => 70,  205 => 68,  202 => 67,  196 => 65,  194 => 64,  189 => 63,  187 => 62,  182 => 61,  180 => 60,  175 => 57,  169 => 55,  167 => 54,  161 => 52,  158 => 51,  154 => 48,  146 => 46,  144 => 45,  136 => 43,  133 => 42,  128 => 39,  124 => 37,  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DisplayTaskController!{% endblock %}

{% block body %}
<style>
    .example-wrapper {
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
        font: 18px/1.5 sans-serif;
    }

    .example-wrapper code {
        background: #F5F5F5;
        padding: 2px 6px;
    }
</style>




    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Status</th>
                <th>Updated</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        {% for tasks in task %}
        <tr>
            
            <td><img src=\"{{ tasks.picture }}\" alt=\"image\"></td>

            {# If condition title > 50 #}
            {% if tasks.title|length > 50 %}
                <td><a href=\"{{ path('app_display_task_specific', {'id': tasks.id}) }}\">{{ tasks.title|slice(0, 50) ~ '...' }}</a></td>
            {% else %}
                {# Link of display task by id #}
                <td><a href=\"{{ path('app_display_task_specific', {'id': tasks.id}) }}\">{{ tasks.title }}</a></td>
            {% endif %}


            {# If condition content > 50 #}
            {% if tasks.content|length > 80 %}
                <td><span class=\"preview-content\">{{ tasks.content|slice(0, 80) ~ '...' }}</span></td>
            {% else %}
            {# Link of display task by id #}
                <td><span class=\"preview-content\">{{ tasks.content }}</span></td>
            {% endif %}



            {% if tasks.status == \"À vendre\" %}
                <td><span class=\"InProgress\">{{ tasks.status }}</span></td>
            {% elseif tasks.status == \"Trocked\" %}
                <td><span class=\"waiting\">{{ tasks.status }}</span></td>
            {% elseif tasks.status == \"Réserver\" %}
                <td><span class=\"done\">{{ tasks.status }}</span></td>
            {% else %}
            {% endif %}


            <td>{{ tasks.createdAt|date_modify('+1 hour')|date('d/m/Y H:i:s') }}</td>
            {# Display status of task #}

            {# Display link edit and delete task #}
            <td>
                <span><a href=\"{{ path('app_edit_task', {'id': tasks.id}) }}\">edit</a>
                |
                <a href=\"{{ path('app_remove_task', {'id': tasks.id}) }}\">delete</a></span>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endblock %}", "display_task/index.html.twig", "/Applications/MAMP/htdocs/tickets/templates/display_task/index.html.twig");
    }
}
