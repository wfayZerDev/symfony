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
class __TwigTemplate_ff37ca05c5a9f0d2db361b648a775ea8 extends Template
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container\">
    <div class=\"space\">

    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)) {
            // line 10
            echo "      <h1>Edit Ticket</h1>
    ";
        } else {
            // line 12
            echo "      <h1>New Ticket</h1>
    ";
        }
        // line 14
        echo "

      <button>⬅️ Retour</button>
    </div>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 19, $this->source); })()), 'errors');
        echo "

    <div class=\"cards\">
      <div class=\"content_cards\">
        <div class=\"space\">
          <div class=\"cards_img\">
            <span class=\"title_Tickets\">New Ticket</span>
          </div>
        </div>
        <label for=\"title\" name=\"title\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), 'label');
        echo "</label>
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), 'widget');
        echo "
        <label for=\"description\" name=\"description\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 30, $this->source); })()), "content", [], "any", false, false, false, 30), 'label');
        echo "</label>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 31, $this->source); })()), "content", [], "any", false, false, false, 31), 'widget');
        echo "

        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 33, $this->source); })()), "status_id", [], "any", false, false, false, 33), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 34, $this->source); })()), "status_id", [], "any", false, false, false, 34), 'widget');
        echo "


        <button type=\"submit\" class=\"btn\">Post Ticket</button>
      </div>
    </div>
  </div>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewTaskForm"]) || array_key_exists("NewTaskForm", $context) ? $context["NewTaskForm"] : (function () { throw new RuntimeError('Variable "NewTaskForm" does not exist.', 41, $this->source); })()), 'form_end');
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
        return array (  156 => 41,  146 => 34,  142 => 33,  137 => 31,  133 => 30,  129 => 29,  125 => 28,  113 => 19,  109 => 18,  103 => 14,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello NewTaskController!{% endblock %}

{% block body %}
  <div class=\"container\">
    <div class=\"space\">

    {% if task.id %}
      <h1>Edit Ticket</h1>
    {% else %}
      <h1>New Ticket</h1>
    {% endif %}


      <button>⬅️ Retour</button>
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

        {{ form_label(NewTaskForm.status_id) }}
        {{ form_widget(NewTaskForm.status_id) }}


        <button type=\"submit\" class=\"btn\">Post Ticket</button>
      </div>
    </div>
  </div>
    {{ form_end(NewTaskForm) }}

{% endblock %}
", "new_task/index.html.twig", "/Applications/MAMP/htdocs/tickets/templates/new_task/index.html.twig");
    }
}
