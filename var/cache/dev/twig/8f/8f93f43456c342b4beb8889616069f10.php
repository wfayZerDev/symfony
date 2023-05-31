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

/* new_task/index.html.twig */
class __TwigTemplate_2c2e9a2a9355c86e5eb9d2674a5d9177 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_task/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "new_task/index.html.twig", 1);
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

        echo "Hello NewTaskController!";
        
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
        echo "  <div class=\"container\">
    <div class=\"space\">

    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)) {
            // line 9
            echo "      <h1>Edit Product</h1>
    ";
        } else {
            // line 11
            echo "      <h1>New Product</h1>
    ";
        }
        // line 13
        echo "

      <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_display_task");
        echo "\"><button>⬅️ Retour</button></a>
    </div>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 18, $this->source); })()), 'errors');
        echo "

    <div class=\"cards\">
      <div class=\"content_cards\">
        <div class=\"space\">
          <div class=\"cards_img\">
            <span class=\"title_Tickets\">New Ticket</span>
          </div>
        </div>
        <label for=\"title\" name=\"title\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), 'label');
        echo "</label>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), 'widget');
        echo "
        <label for=\"description\" name=\"description\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29), 'label');
        echo "</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 30, $this->source); })()), "content", [], "any", false, false, false, 30), 'widget');
        echo "


        <label for=\"status\" name=\"status\">Status</label>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 34, $this->source); })()), "status_id", [], "any", false, false, false, 34), 'widget');
        echo "

        <label>Owner</label>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 37, $this->source); })()), "owner_id", [], "any", false, false, false, 37), 'widget');
        echo "

        <label>Picture</label>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 40, $this->source); })()), "picture", [], "any", false, false, false, 40), 'widget');
        echo "

        <label>Région</label>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 43, $this->source); })()), "Region", [], "any", false, false, false, 43), 'widget');
        echo "

        <label>État de l'objet</label>
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 46, $this->source); })()), "etat_objet", [], "any", false, false, false, 46), 'widget');
        echo "

        <button type=\"submit\" class=\"btn\">Post Ticket</button>
      </div>
    </div>
  </div>
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 52, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "new_task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 52,  171 => 46,  165 => 43,  159 => 40,  153 => 37,  147 => 34,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  116 => 18,  112 => 17,  107 => 15,  103 => 13,  99 => 11,  95 => 9,  93 => 8,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello NewTaskController!{% endblock %}
{% block body %}
  <div class=\"container\">
    <div class=\"space\">

    {% if task.id %}
      <h1>Edit Product</h1>
    {% else %}
      <h1>New Product</h1>
    {% endif %}


      <a href=\"{{ path('app_display_task',) }}\"><button>⬅️ Retour</button></a>
    </div>
    {{ form_start(NewTaskForm) }}
    {{ form_errors(NewTaskForm) }}

    <div class=\"cards\">
      <div class=\"content_cards\">
        <div class=\"space\">
          <div class=\"cards_img\">
            <span class=\"title_Tickets\">New Ticket</span>
          </div>
        </div>
        <label for=\"title\" name=\"title\">{{ form_label(NewTaskForm.title) }}</label>
        {{ form_widget(NewTaskForm.title) }}
        <label for=\"description\" name=\"description\">{{ form_label(NewTaskForm.content) }}</label>
        {{ form_widget(NewTaskForm.content) }}


        <label for=\"status\" name=\"status\">Status</label>
        {{ form_widget(NewTaskForm.status_id) }}

        <label>Owner</label>
        {{ form_widget(NewTaskForm.owner_id) }}

        <label>Picture</label>
        {{ form_widget(NewTaskForm.picture) }}

        <label>Région</label>
        {{ form_widget(NewTaskForm.Region) }}

        <label>État de l'objet</label>
        {{ form_widget(NewTaskForm.etat_objet) }}

        <button type=\"submit\" class=\"btn\">Post Ticket</button>
      </div>
    </div>
  </div>
    {{ form_end(NewTaskForm) }}

{% endblock %}
", "new_task/index.html.twig", "/Applications/MAMP/htdocs/tickets/templates/new_task/index.html.twig");
    }
}
