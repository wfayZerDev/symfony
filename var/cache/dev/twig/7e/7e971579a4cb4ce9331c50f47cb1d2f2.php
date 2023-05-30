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

            ";
            // line 40
            echo "            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "title", [], "any", false, false, false, 40)) > 50)) {
                // line 41
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_display_task_specific", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "title", [], "any", false, false, false, 41), 0, 50) . "..."), "html", null, true);
                echo "</a></td>
            ";
            } else {
                // line 43
                echo "                ";
                // line 44
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_display_task_specific", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "title", [], "any", false, false, false, 44), "html", null, true);
                echo "</a></td>
            ";
            }
            // line 46
            echo "

            ";
            // line 49
            echo "            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "content", [], "any", false, false, false, 49)) > 80)) {
                // line 50
                echo "                <td><span class=\"preview-content\">";
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "content", [], "any", false, false, false, 50), 0, 80) . "..."), "html", null, true);
                echo "</span></td>
            ";
            } else {
                // line 52
                echo "            ";
                // line 53
                echo "                <td><span class=\"preview-content\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "content", [], "any", false, false, false, 53), "html", null, true);
                echo "</span></td>
            ";
            }
            // line 55
            echo "


            ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 58) == "En cours")) {
                // line 59
                echo "                <td><span class=\"InProgress\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 59), "html", null, true);
                echo "</span></td>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 60
$context["tasks"], "status", [], "any", false, false, false, 60) == "En attente")) {
                // line 61
                echo "                <td><span class=\"waiting\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 61), "html", null, true);
                echo "</span></td>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 62
$context["tasks"], "status", [], "any", false, false, false, 62) == "Terminé")) {
                // line 63
                echo "                <td><span class=\"done\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "status", [], "any", false, false, false, 63), "html", null, true);
                echo "</span></td>
            ";
            } else {
                // line 65
                echo "            ";
            }
            // line 66
            echo "

            ";
            // line 69
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "updatedAt", [], "any", false, false, false, 69), "+1 hour"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
            ";
            // line 71
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tasks"], "createdAt", [], "any", false, false, false, 71), "+1 hour"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
            ";
            // line 73
            echo "
            ";
            // line 75
            echo "            <td>
                <span><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">edit</a>
                |
                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove_task", ["id" => twig_get_attribute($this->env, $this->source, $context["tasks"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">delete</a></span>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
        return array (  235 => 82,  225 => 78,  220 => 76,  217 => 75,  214 => 73,  209 => 71,  204 => 69,  200 => 66,  197 => 65,  191 => 63,  189 => 62,  184 => 61,  182 => 60,  177 => 59,  175 => 58,  170 => 55,  164 => 53,  162 => 52,  156 => 50,  153 => 49,  149 => 46,  141 => 44,  139 => 43,  131 => 41,  128 => 40,  124 => 37,  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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



            {% if tasks.status == \"En cours\" %}
                <td><span class=\"InProgress\">{{ tasks.status }}</span></td>
            {% elseif tasks.status == \"En attente\" %}
                <td><span class=\"waiting\">{{ tasks.status }}</span></td>
            {% elseif tasks.status == \"Terminé\" %}
                <td><span class=\"done\">{{ tasks.status }}</span></td>
            {% else %}
            {% endif %}


            {# Display updated date task with +1h #}
            <td>{{ tasks.updatedAt|date_modify('+1 hour')|date('d/m/Y H:i:s') }}</td>
            {# Display Created at Date task  with +1h #}
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
